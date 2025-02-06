<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\JobCategory\JobCategoryCollection;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            $datas = JobCategory::orderBy('name', 'asc');
            
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
            return response()->json(new JobCategoryCollection($datas));
           
        }

        return view('admin.job-category.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        return view('admin.job-category.create');
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
                'icon'=>'required|max:255',    
                'description'=>'nullable',    
                'status'=>'required',    
            ]);

            $job_category = new JobCategory;
            $job_category->name = $request->name;
            $job_category->description = $request->description;
            $job_category->icon = $request->icon;
            $job_category->featured = $request->featured;
            $job_category->status_id = $request->status;
            if($job_category->save()){ 
                return response()->json(['class'=>'bg-success','message'=>'JobCategory Created Successfuly.']);
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
        $job_category = JobCategory::find($id);
        return view('admin.job-category.edit', compact('job_category')); 
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

        $job_category = JobCategory::find($id);
        $job_category->name = $request->name;
        $job_category->description = $request->description;
        $job_category->icon = $request->icon;
        $job_category->featured = $request->featured;
        $job_category->status_id = $request->status;
        if($job_category->save()){ 
            return response()->json(['class'=>'bg-success','message'=>'JobCategory Created Successfuly.']);
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
        $job_category = JobCategory::find($id);
        if($job_category->delete()){
            return response()->json(['message'=>'JobCategory deleted Successfully ...', 'class'=>'success']);  
        }
        return response()->json(['message'=>'Whoops, looks like something went wrong ! Try again ...', 'class'=>'error']);
    }
}
