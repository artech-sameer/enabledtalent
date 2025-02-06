<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\Section\SectionCollection;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            $datas = Section::orderBy('title', 'asc');
            
            $title = request()->input('title');
            if ($title) {
                $datas->where('title', 'like', '%'.$title.'%');
            }

            $slug = request()->input('slug');
            if ($slug) {
                $datas->where('slug', 'like', '%'.$slug.'%');
            }

            $section_code = request()->input('Section_code');
            if ($section_code) {
                $datas->where('code', 'like', '%'.$section_code.'%');
            }

            $request->merge(['recordsTotal' => $datas->count(), 'length' => $request->length]);
            $datas = $datas->limit($request->length)->offset($request->start)->get();
            return response()->json(new SectionCollection($datas));
           
        }

        return view('admin.section.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        return view('admin.section.create');
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
                'slug'=>'required|string|max:255|unique:sections',    
                'title'=>'required|string|max:255',    
                'sub_title'=>'required',     
            ]);

            if($request->button_label){
                $this->validate($request,[    
                    'button_link'=>'required',    
                ]); 
            }

            $section = new Section;
            $section->title = $request->title;
            $section->slug = $request->slug;
            $section->description = $request->sub_title;
            $section->link = $request->button_link;
            $section->label = $request->button_label;
            if($section->save()){ 
                return response()->json(['class'=>'bg-success','message'=>'Section Created Successfuly.']);
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
        $section = Section::find($id);
        return view('admin.section.edit', compact('Section')); 
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

            $section = Section::find($id);
            $section->name = $request->name;
            $section->short_name = $request->short_name;
            $section->code = $request->code;
            $section->currency_name = $request->currency_name;
            $section->currency_symbol = $request->currency_symbol;
            if($section->save()){ 
                return response()->json(['class'=>'bg-success','message'=>'Section Updated Successfuly.']);
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
        $section = Section::find($id);
        if($section->delete()){
            return response()->json(['message'=>'Section deleted Successfully ...', 'class'=>'success']);  
        }
        return response()->json(['message'=>'Whoops, looks like something went wrong ! Try again ...', 'class'=>'error']);
    }
}
