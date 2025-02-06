<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CompanyController extends Controller
{
    public function detail(){
        $company = Company::where('id',auth('company')->user()->id)->with(['details'])->first();
        return view('company.details', compact('company'));
    }

    public function detailStore(Request $request){
        $request->validate([
            'company_name' => ['required', 'string', 'max:255'], 
            'registration_number' => ['required', 'string', 'max:255'], 
            'bio' => ['required', 'string', 'max:2000'], 
            'industry' => ['required'], 
            'company_size' => ['required'], 
            'mobile_no' => ['required'],
            'logo' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],  
        ]);
        $company = Company::where('id',auth('company')->user()->id)->first();

        $company_details = CompanyDetail::where(['company_id' => auth('company')->user()->id])->first();
        $company_details->company_name = $request->company_name;
        $company_details->registration_number = $request->registration_number;
        $company_details->email = $request->email;
        $company_details->mobile = $request->mobile_no;
        $company_details->industry_id = $request->industry;
        $company_details->company_size = $request->company_size;
        $company_details->bio = $request->bio;
        $company_details->website_url= $request->website;

        $media_org = $request->file('logo')->getClientOriginalName();
        $media_name = pathinfo($media_org, PATHINFO_FILENAME);
        $media_rename = Str::slug($media_name, '-') .".".$request->file('logo')->getClientOriginalExtension();
        $image = $request->file('logo')->storeAs('media/company', $media_rename);
        $company_details->logo = 'storage/'.$image;

        $company_details->save();
        $company_details->enabledJobPost();
        return response()->json([
            'class' => 'bg-success', 
            'error' => false, 
            'message' => 'Data Saved Successfully', 
            'call_back' => route('company.details.detail')
        ]);
    }


    public function contactStore(Request $request){
        $request->validate([
            'country' => ['required',],  
            'state' => ['required',],  
            'district' => ['required',],  
            'city' => ['required',],  
            'pincode' => ['required',],  
            'address' => ['required',],  
        ]);

        $company = Company::where('id',auth('company')->user()->id)->first();

        $company_details = CompanyDetail::where(['company_id' => auth('company')->user()->id])->first();
        $company_details->country_id = $request->country;
        $company_details->state_id = $request->state;
        $company_details->district_id = $request->district;
        $company_details->city_id = $request->city;
        $company_details->address = $request->address;
        $company_details->pincode = $request->pincode;
        $company_details->save();
        $company_details->enabledJobPost();

        return response()->json([
            'class' => 'bg-success', 
            'error' => false, 
            'message' => 'Data Saved Successfully', 
            'call_back' => route('company.details.detail')
        ]);
    }
}
