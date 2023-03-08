<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
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
            'flag_destaque' => $this->flag_destaque,
            'image_id' => $this->id,
            'url' => url($this->url),
            'lugar' => new LugarResource($this->whenLoaded('lugar'))
        ];
    }
}
