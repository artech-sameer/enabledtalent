<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'industry_id',
        'company_name',
        'email',
        'mobile',
        'company_size',
        'registration_number',
        'bio',
        'website_url',
        'address',
        'country_id',
        'state_id',
        'district_id',
        'city_id',
        'locality',
        'pincode',
        'landmark',
        'logo',
        'status_id',
    ];


    public function enabledJobPost(){
        $requiredFields = [
            'company_id',
            'industry_id',
            'company_name',
            'email',
            'mobile',
            'company_size',
            'registration_number',
            'bio',
            'address',
            'country_id',
            'state_id',
            'district_id',
            'city_id',
            'pincode',
            'logo',
        ];

        $allFieldsFilled = true;

        foreach ($requiredFields as $field) {
            if (empty($this->$field)) {
                $allFieldsFilled = false;
                break;
            }
        }

        $this->status_id = $allFieldsFilled ? 14 : 15;
        $this->save();
    }


    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
