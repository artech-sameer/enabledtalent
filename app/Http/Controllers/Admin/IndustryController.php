<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\Industry\IndustryCollection;
use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            $datas = Industry::orderBy('name', 'asc');
            
            $name = request()->input('name');
            if ($name) {
                $datas->where('name', 'like', '%'.$name.'%');
            }

            $status = $request->input('status');
            if ($status) {
                $datas->where('status_id', 'like', '%'.$status.'%');
            }


            $request->merge(['recordsTotal' => $datas->count(), 'length' => $request->length]);
            $datas = $datas->limit($request->length)->offset($request->start)->get();
            return response()->json(new IndustryCollection($datas));
           
        }

        return view('admin.industry.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        return view('admin.industry.create');
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
            $request->validate([
                'name'=>'required|max:255|unique:industries',    
                'description'=>'nullable',    
                'status'=>'required',    
            ]);

            $business_category = new Industry;
            $business_category->name = $request->name;
            $business_category->description = $request->description;
            $business_category->status_id = $request->status;
            if($business_category->save()){ 
                return response()->json(['class'=>'bg-success','message'=>'Industry Created Successfuly.']);
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
        $business_category = Industry::find($id);
        return view('admin.industry.edit', compact('business_category')); 
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
        $request->validate([
            'name' => [
                'required',
                'max:255',
                Rule::unique('industries')->ignore($id) // Ignore the email uniqueness if it's an update
            ],   
            'description'=>'nullable',    
            'status'=>'required',    
        ]);

        $business_category = Industry::find($id);
        $business_category->name = $request->name;
        $business_category->description = $request->description;
        $business_category->status_id = $request->status;
        if($business_category->save()){ 
            return response()->json(['class'=>'bg-success','message'=>'Industry Created Successfuly.']);
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
        $business_category = Industry::find($id);
        if($business_category->delete()){
            return response()->json(['message'=>'Industry deleted Successfully ...', 'class'=>'success']);  
        }
        return response()->json(['message'=>'Whoops, looks like something went wrong ! Try again ...', 'class'=>'error']);
    }
}
