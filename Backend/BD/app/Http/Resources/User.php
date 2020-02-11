<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use App\State;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // $state = State::findOrFail($this->state_id);

        return[
            'id'=>$this->id,
            'name'=>$this->name,
            'email'=>$this->email,
            // 'state'=>$state->name,
        ];
    }
}
