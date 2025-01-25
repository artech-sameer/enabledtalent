<?php
namespace App\Http\Resources\Admin\District;

use Illuminate\Http\Resources\Json\JsonResource;
class DistrictResource extends JsonResource
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
            'state'=>$this->state->name,
            'short_name'=>$this->state->short_name,
            'country'=>$this->state->country->name,
        ];
    }
}
