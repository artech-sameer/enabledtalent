<?php
namespace App\Http\Resources\Admin\Section;

use Illuminate\Http\Resources\Json\JsonResource;
class SectionResource extends JsonResource
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
            'title'=>$this->title??'N/A',
            'slug'=>$this->slug??'N/A',
            'subtitle'=>$this->description??'N/A',
        ];
    }
}
