<?php
namespace App\Http\Resources\Admin\City;

use Illuminate\Http\Resources\Json\JsonResource;
class CityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'sn' => ++$request->start,
            'id'=>$this->id,
            'name'=>$this->name,
            'pincode'=>$this->pin_code,
            'state'=>$this->district->state->name,
            'district'=>$this->district->name,
            'country'=>$this->district->state->country->name,
        ];
    }
}
