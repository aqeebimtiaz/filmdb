<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'film_name', 'film_description', 'release_date', 'rating', 'ticket_price','country'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
        // Comment::create([
        //     'body' => $body,
        //     'film_id' => $this->id
        // ]);
    }
}
