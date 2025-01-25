<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\State\StateCollection;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            $datas = State::orderBy('name', 'asc')->with(['country']);
            
            $state_name = request()->input('state_name');
            if ($state_name) {
                $datas->where('name', 'like', '%'.$state_name.'%');
            }

            $state_short_name = request()->input('state_short_name');
            if ($state_short_name) {
                $datas->where('short_name', 'like', '%'.$state_short_name.'%');
            }

            $country_name = $request->input('country_name');
            if ($country_name) {
                $datas->whereHas('country', function ($query) use ($country_name) {
                    $query->where('id', $country_name);
                });
            }

            $request->merge(['recordsTotal' => $datas->count(), 'length' => $request->length]);
            $datas = $datas->limit($request->length)->offset($request->start)->get();
            return response()->json(new StateCollection($datas));
           
        }

        return view('admin.state.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        return view('admin.state.create');
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
                'short_name'=>'required',    
                'name'=>'required',    
                'country'=>'required',    
            ]);

            $state = new State;
            $state->name = $request->name;
            $state->short_name = $request->short_name;
            $state->country_id = $request->country;
            if($state->save()){ 
                return response()->json(['class'=>'bg-success','message'=>'State Created Successfuly.']);
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
        $state = State::find($id);
        return view('admin.state.edit', compact('state')); 
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
            'short_name'=>'required',    
            'name'=>'required',    
            'country'=>'required',    
        ]);

        $state = State::find($id);
        $state->name = $request->name;
        $state->short_name = $request->short_name;
        $state->country_id = $request->country;
        if($state->save()){ 
            return response()->json(['class'=>'bg-success','message'=>'State Created Successfuly.']);
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
        $state = State::find($id);
        if($state->delete()){
            return response()->json(['message'=>'State Deleted Successfully ...', 'class'=>'bg-success']);  
        }
        return response()->json(['message'=>'Whoops, looks like something went wrong ! Try again ...', 'class'=>'error']);
    }
}
