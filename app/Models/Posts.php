<?php

namespace App\Models;

use App\Enums\PostsState;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posts extends Model
{
    // $ ssh-keygen -t rsa -b 4096 -C "ebrahimmostafa695@gmail.com"


    use HasFactory, Searchable;

    protected $casts = [
        "state" => PostsState::class,
    ];

    public function toSearchableArray()
    {
        $array = ["body" => $this->body];

        // Customize the data array...

        return $array;
    }
}
