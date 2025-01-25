<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\District\DistrictCollection;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            $datas = District::orderBy('name', 'asc')->with(['state'=> function($query){
                $query->with(['country']);
            }]);
            
            $district_name = request()->input('district_name');
            if ($district_name) {
                $datas->where('name', 'like', '%'.$district_name.'%');
            }

            $country_name = $request->input('country_name');
            if ($country_name) {
                $datas->whereHas('state.country', function ($query) use ($country_name) {
                    $query->where('id', $country_name);
                });
            }

            $state_name = $request->input('state_name');
            if ($state_name) {
                $datas->whereHas('state', function ($query) use ($state_name) {
                    $query->where('id', $state_name);
                });
            }

            $request->merge(['recordsTotal' => $datas->count(), 'length' => $request->length]);
            $datas = $datas->limit($request->length)->offset($request->start)->get();
            return response()->json(new DistrictCollection($datas));
           
        }

        return view('admin.district.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        return view('admin.district.create');
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

            $district = new District;
            $district->name = $request->name;
            $district->state_id = $request->state;
            if($district->save()){ 
                return response()->json(['class'=>'bg-success','message'=>'District Created Successfuly.']);
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
        $district = District::find($id);
        return view('admin.district.edit', compact('district')); 
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

        $district = District::where('id', $id)->with('state')->first();
        $district->name = $request->name;
        $district->state_id = $request->state;
        if($district->save()){ 
            return response()->json(['class'=>'bg-success','message'=>'District Created Successfuly.']);
        }

            return redirect()->back()->with(['class'=>'error','message'=>'Whoops, looks like something went wrong ! Try again ...']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $district = District::find($id);
        if($district->delete()){
            return response()->json(['message'=>'District deleted Successfully ...', 'class'=>'success']);  
        }
        return response()->json(['message'=>'Whoops, looks like something went wrong ! Try again ...', 'class'=>'error']);
    }
}
