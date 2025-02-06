<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\Company\CompanyCollection;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            $datas = Company::orderBy('name', 'asc');
            
            $name = request()->input('name');
            if ($name) {
                $datas->where('name', 'like', '%'.$name.'%');
            }

            $email = request()->input('email');
            if ($email) {
                $datas->where('email', 'like', '%'.$email.'%');
            }

            $mobile = request()->input('mobile');
            if ($mobile) {
                $datas->where('mobile', 'like', '%'.$mobile.'%');
            }

            $status = $request->input('status');
            if ($status) {
                $datas->where('status_id', 'like', '%'.$status.'%');
            }

            $request->merge(['recordsTotal' => $datas->count(), 'length' => $request->length]);
            $datas = $datas->limit($request->length)->offset($request->start)->get();
            return response()->json(new CompanyCollection($datas));
           
        }

        return view('admin.companies.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        return view('admin.company.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Employee $employee )
    {   
       
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request) {

            $this->validate($request,[
                'name'=>'required',    
                'state'=>'required',    
                'country'=>'required',    
            ]);

            $city = new City;
            $city->name = $request->name;
            $city->state_id = $request->state;
            if($city->save()){ 
                return response()->json(['class'=>'bg-success','message'=>'City Created Successfuly.']);
            }

            return redirect()->back()->with(['class'=>'error','message'=>'Whoops, looks like something went wrong ! Try again ...']);
        }
        
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $city = City::find($id);
        return view('admin.city.edit', compact('city')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',    
            'state'=>'required',    
            'country'=>'required',    
        ]);

        $city = City::where('id', $id)->with('state')->first();
        $city->name = $request->name;
        $city->state_id = $request->state;
        if($city->save()){ 
            return response()->json(['class'=>'bg-success','message'=>'City Created Successfuly.']);
        }

            return redirect()->back()->with(['class'=>'error','message'=>'Whoops, looks like something went wrong ! Try again ...']);
    }


    public function featured(Request $request){
        $company = Company::where(['id' => $request->id, 'status_id' => 14])
                ->whereHas('details', function ($query) {
                    $query->where('status_id', 14);
                })
                ->with(['details'])
                ->first();
        if(isset($company)){
            $company->featured = $request->featured;
            $company->save();
            return response()->json(['class'=>'bg-success','message'=>'Company status changed.']);
        }
        return response()->json(['class'=>'bg-danger','message'=>'Something went wrong.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $city = City::find($id);
        if($city->delete()){
            return response()->json(['message'=>'City deleted Successfully ...', 'class'=>'success']);  
        }
        return response()->json(['message'=>'Whoops, looks like something went wrong ! Try again ...', 'class'=>'error']);
    }
}
