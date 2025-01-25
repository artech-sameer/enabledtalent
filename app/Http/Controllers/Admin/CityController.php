<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\City\CityCollection;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            $datas = City::orderBy('name', 'asc')->with(['district'=> function($query){
                $query->with(['state'=>function($subQuery){
                    $subQuery->with('country');
                }]);
            }]);
            
            $city_name = request()->input('city_name');
            if ($city_name) {
                $datas->where('name', 'like', '%'.$city_name.'%');
            }

            $pincode = request()->input('pincode');
            if ($pincode) {
                $datas->where('pin_code', 'like', '%'.$pincode.'%');
            }

            $country_name = $request->input('country_name');
            if ($country_name) {
                $datas->whereHas('district.state.country', function ($query) use ($country_name) {
                    $query->where('id', $country_name);
                });
            }

            $state_name = $request->input('state_name');
            if ($state_name) {
                $datas->whereHas('district.state', function ($query) use ($state_name) {
                    $query->where('id', $state_name);
                });
            }

            $district_name = $request->input('district_name');
            if ($district_name) {
                $datas->whereHas('district', function ($query) use ($district_name) {
                    $query->where('id', $district_name);
                });
            }

            $request->merge(['recordsTotal' => $datas->count(), 'length' => $request->length]);
            $datas = $datas->limit($request->length)->offset($request->start)->get();
            return response()->json(new CityCollection($datas));
           
        }

        return view('admin.city.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        return view('admin.city.create');
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
