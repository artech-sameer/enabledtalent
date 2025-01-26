<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyDetail;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function detail(){
        $company = Company::where('id',auth('company')->user()->id)->with(['details'])->first();
        return view('company.details', compact('company'));
    }

    public function detailStore(Request $request){
        $request->validate([
            'company_name' => ['required', 'string', 'max:255'], 
            'bio' => ['required', 'string', 'max:2000'], 
            'business_category' => ['required'], 
            'employee_strength' => ['required'], 
            'mobile_no' => ['required',],  
        ]);
        $company = Company::where('id',auth('company')->user()->id)->first();
        $company->name = $request->company_name;
        $company->mobile = $request->mobile_no;
        $company->save();

        $company_details = CompanyDetail::firstOrNew(['company_id' => auth('company')->user()->id]);
        $company_details->business_category_id = $request->business_category;
        $company_details->employee_strength = $request->employee_strength;
        $company_details->bio = $request->bio;
        $company_details->website_url= $request->website;
        $company_details->save();
        return response()->json([
            'class' => 'bg-success', 
            'error' => false, 
            'message' => 'Data Saved Successfully', 
            'call_back' => route('company.details.detail')
        ]);
    }
}
