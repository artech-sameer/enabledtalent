<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'business_category_id',
        'employee_strength',
        'state_id',
        'district_id',
        'city_id',
        'locality',
        'address',
        'pincode',
        'landmark',
        'company_description',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
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

    public function businessCategory()
    {
        return $this->belongsTo(BusinessCategory::class);
    }
}
