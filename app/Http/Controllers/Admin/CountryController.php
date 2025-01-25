<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\Country\CountryCollection;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            $datas = Country::orderBy('name', 'asc');
            
            $country_name = request()->input('country_name');
            if ($country_name) {
                $datas->where('name', 'like', '%'.$country_name.'%');
            }

            $country_short_name = request()->input('country_short_name');
            if ($country_short_name) {
                $datas->where('short_name', 'like', '%'.$country_short_name.'%');
            }

            $country_code = request()->input('country_code');
            if ($country_code) {
                $datas->where('code', 'like', '%'.$country_code.'%');
            }

            $request->merge(['recordsTotal' => $datas->count(), 'length' => $request->length]);
            $datas = $datas->limit($request->length)->offset($request->start)->get();
            return response()->json(new CountryCollection($datas));
           
        }

        return view('admin.country.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        return view('admin.country.create');
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
                'short_name'=>'required',    
                'code'=>'required',    
                'currency_name'=>'required',    
                'currency_symbol'=>'required',    
            ]);

            $country = new Country;
            $country->name = $request->name;
            $country->short_name = $request->short_name;
            $country->code = $request->code;
            $country->currency_name = $request->currency_name;
            $country->currency_symbol = $request->currency_symbol;
            if($country->save()){ 
                return response()->json(['class'=>'bg-success','message'=>'Country Created Successfuly.']);
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
        $country = Country::find($id);
        return view('admin.Country.edit', compact('country')); 
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
            'short_name'=>'required',    
            'code'=>'required',    
            'currency_name'=>'required',    
            'currency_symbol'=>'required',    
        ]);

            $country = Country::find($id);
            $country->name = $request->name;
            $country->short_name = $request->short_name;
            $country->code = $request->code;
            $country->currency_name = $request->currency_name;
            $country->currency_symbol = $request->currency_symbol;
            if($country->save()){ 
                return response()->json(['class'=>'bg-success','message'=>'Country Updated Successfuly.']);
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
        $country = Country::find($id);
        if($country->delete()){
            return response()->json(['message'=>'Country deleted Successfully ...', 'class'=>'success']);  
        }
        return response()->json(['message'=>'Whoops, looks like something went wrong ! Try again ...', 'class'=>'error']);
    }
}
