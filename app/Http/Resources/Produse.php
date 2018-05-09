<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Produse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);  //da inapoi toate detaliile
        return [
            'id' => $this->id,
            'titlu' => $this->title,
            'descriere' => $this->descriere
        ];
    }

    public function with($request) {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://codeplayground.ro'),
            'king' => 'Toni'
        ];
    }

}
