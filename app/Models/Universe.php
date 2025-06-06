<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{
    use HasFactory;

    protected $table = 'universes';
    protected $fillable = [
        'name', 'description',
    ];

    public function superheroes()
    {
        return $this->hasMany(Superheroe::class);
    }
}