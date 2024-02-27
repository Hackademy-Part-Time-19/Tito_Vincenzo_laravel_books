<?php

namespace App\Models;

use App\Models\User;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price', 'genre', 'user_id'];

    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function genres()
    {

        return $this->BelongsToMany(Genre::class);
    }
}
