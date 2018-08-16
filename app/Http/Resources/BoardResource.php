<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BoardResource extends JsonResource
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
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'name' => $this->firstName,
            'status' => $this->status,
            'user' => $this->user,
            'mqtt_broker' => $this->mqtt_broker,
            'mqtt_port' => $this->mqtt_port,
            'mqtt_user' => $this->mqtt_user,
            'mqtt_pass' => $this->mqtt_pass,
            'mqtt_publish' => $this->mqtt_publish,
            'mqtt_subscribe' => $this->mqtt_subscribe
        ];
    }
}
