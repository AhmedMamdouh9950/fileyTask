<?php

namespace App\Filey\Users\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class UserResource extends JsonResource
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
            $this->attributes([
                'id','name','email','token'
            ]),
        ];
    }
}
