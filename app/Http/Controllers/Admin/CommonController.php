<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\District;
use App\Models\State;
use Illuminate\Http\Request;

class CommonController extends Controller{

    public function client(Request $request){
        if ($request->ajax()) {
            $page = $request->page;
            $resultCount = 15;

            $offset = ($page - 1) * $resultCount;

            $name = Client::orderBy('company_name', 'asc')->where('company_name', 'LIKE', '%' . $request->term. '%')
                                    ->orderBy('created_at', 'asc')
                                    ->skip($offset)
                                    ->take($resultCount)
                                    ->selectRaw('id, company_name as text')
                                    ->get();

            $count = Count(Client::orderBy('company_name', 'asc')->where('company_name', 'LIKE', '%' . $request->term. '%')
                                    ->orderBy('created_at', 'asc')
                                    ->selectRaw('id, company_name as text')
                                    ->get());

            $endCount = $offset + $resultCount;
            $morePages = $count > $endCount;

            $results = array(
                  "results" => $name,
                  "pagination" => array(
                      "more" => $morePages
                  )
              );

            return response()->json($results);
        }
        return response()->json('oops');
    }

   

    public function countryList(Request $request){
        if (!$request->ajax()) {
            return response()->json(['message' => 'Invalid request'], 400);
        }

        $page = max((int) $request->page, 1);
        $resultCount = 5;
        $term = $request->term ?? '';

        $query = Country::where('name', 'LIKE', '%' . $term . '%')
            ->orderBy('name', 'asc');

        $countries = $query->clone()
            ->selectRaw('id, name as text')
            ->skip(($page - 1) * $resultCount)
            ->take($resultCount)
            ->get();

        // Total count
        $totalCount = $query->count();
        $morePages = ($page * $resultCount) < $totalCount;

        return response()->json([
            "results" => $countries,
            "pagination" => [
                "more" => $morePages
            ]
        ]);
    }



    public function stateList(Request $request, $countryId){
        if (!$request->ajax()) {
            return response()->json(['message' => 'Invalid request'], 400);
        }

        $page = max((int) $request->page, 1);
        $resultCount = 5;
        $term = $request->term ?? '';

        $query = State::where('name', 'LIKE', '%' . $term . '%')
                ->where('country_id', $countryId)
                ->orderBy('name', 'asc');

        $states = $query->clone()
            ->selectRaw('id, name as text')
            ->skip(($page - 1) * $resultCount)
            ->take($resultCount)
            ->get();

        // Total count
        $totalCount = $query->count();
        $morePages = ($page * $resultCount) < $totalCount;

        return response()->json([
            "results" => $states,
            "pagination" => [
                "more" => $morePages
            ]
        ]);
    }



    public function districtList(Request $request, $stateID){
        if (!$request->ajax()) {
            return response()->json(['message' => 'Invalid request'], 400);
        }

        $page = max((int) $request->page, 1);
        $resultCount = 5;
        $term = $request->term ?? '';

        $query = District::where('name', 'LIKE', '%' . $term . '%')
                ->where('state_id', $stateID)
                ->orderBy('name', 'asc');

        $districts = $query->clone()
            ->selectRaw('id, name as text')
            ->skip(($page - 1) * $resultCount)
            ->take($resultCount)
            ->get();

        // Total count
        $totalCount = $query->count();
        $morePages = ($page * $resultCount) < $totalCount;

        return response()->json([
            "results" => $districts,
            "pagination" => [
                "more" => $morePages
            ]
        ]);
    }


    public function cityList(Request $request, $districtid){
        if (!$request->ajax()) {
            return response()->json(['message' => 'Invalid request'], 400);
        }

        $page = max((int) $request->page, 1);
        $resultCount = 5;
        $term = $request->term ?? '';

        $query = City::where('name', 'LIKE', '%' . $term . '%')
                ->where('district_id', $districtid)
                ->orderBy('name', 'asc');

        $cities = $query->clone()
            ->selectRaw('id, CONCAT(name, " - ", pin_code) as text')
            ->skip(($page - 1) * $resultCount)
            ->take($resultCount)
            ->get();

        // Total count
        $totalCount = $query->count();
        $morePages = ($page * $resultCount) < $totalCount;

        return response()->json([
            "results" => $cities,
            "pagination" => [
                "more" => $morePages
            ]
        ]);
    }


}
