<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posts extends Model
{
    use HasFactory,Searchable;

    public function toSearchableArray()
    {
        $array = ["body" => $this->body];

        // Customize the data array...

        return $array;
    }
}

