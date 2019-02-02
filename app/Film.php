<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'film_name', 'film_description', 'release_date', 'rating', 'ticket_price','country'
    ];
}
