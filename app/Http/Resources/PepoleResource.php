<?php

namespace App\Http\Resources;

use App\Pepole;
use Illuminate\Http\Resources\Json\JsonResource;

class PepoleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"=>$this->id , 
            'name'=> $this->name , 
            "gender"=>$this->gender->key,
            "NationalID"=> $this->NationalID , 
            "address"=>$this->address,
            "HusbandOrwife"=>$this->HusbandOrwife , 
            "SocialStatus"=>$this->SocialStatus->key , 
            "healthy"=>$this->healthy->key , 
            "dateOfBirth"=>$this->dateOfBirth ,
            "PhoneNumber"=>$this->PhoneNumber ,
            "job"=>$this->job->key,
            "parent"=>$this->parent, 
            "numberOfChildren"=> Pepole::where('parent' , $this->id)->count(),
            "home"=>$this->home ->key,
            // "possession"=> null ? $this->possession->key :"", 
           
        ];
    }
}
