<?php
namespace App\Http\Resources\Admin\JobCategory;

use Illuminate\Http\Resources\Json\JsonResource;
class JobCategoryResource extends JsonResource
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
            'icon'=> '<i class="'. $this->icon .'"></i>' . $this->icon,
            'description'=>$this->description,
            'status_id'=>$this->status_id,
            'status'=>status($this->status_id),
        ];
    }
}
