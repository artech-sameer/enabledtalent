<?php
namespace App\Http\Resources\Admin\Company;

use Illuminate\Http\Resources\Json\JsonResource;
class CompanyResource extends JsonResource
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
            'name'=>$this->name??'N/A',
            'email'=>$this->email??'N/A',
            'mobile'=>$this->mobile??'N/A',
            'location'=>$this->details->city?$this->details->city->name . ', '.$this->details->state->name :'N/A',
            'category'=>$this->details->industry->name??'N/A',
            'status_id'=>$this->status_id,
            'status'=>status($this->status_id),
            'job_status'=>status($this->details->status_id),
            'featured'=> $this->featured,
        ];
    }
}
