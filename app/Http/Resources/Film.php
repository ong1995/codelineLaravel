<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\Resource;

class Film extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
        'id' => $this->id,
        'name' => $this->name,
        'slug' => $this->slug,
        'description' => $this->description,
        'releaseDate' => $this->release_date,
        'rating' => $this->rating,
        'ticketPrice' => $this->ticket_price,
        'country' => $this->country,
        'genre' => $this->genre,
        'photo' => $this->photo,
        ];
    }
}
