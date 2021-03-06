<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class childAccountResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return
            [
                'id'=>$this->id,
                'coa_reference_no'=>$this->coa_reference_no,
                'coa_name'=>$this->coa_name,
            ];
    }
}
