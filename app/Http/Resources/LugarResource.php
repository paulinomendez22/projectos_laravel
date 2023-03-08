<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LugarResource extends JsonResource
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
            'lugar_id' => $this->id,
            'categoria' => $this->categoria->nome,
            'nome' => $this->nome,
            'pais' => $this->pais,
            'provincia' => $this->provincia,
            'regiao' => $this->regiao,
            'descricao' => $this->descricao,
            'coordenadas' => $this->coordenadas,
            'user' => new UserResource($this->whenLoaded('user')),
            'images' => ImageResource::collection($this->images)
        ];
    }
}
