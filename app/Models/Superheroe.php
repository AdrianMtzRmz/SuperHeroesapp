<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superheroe extends Model
{
    use hasFactory;

    protected $table = 'superheroes';

    protected $fillable = ['real_name', 'name', 'picture', 'gender_id', 'universe_id'];

    public function universes()
    {
        return $this->belongsTo(Universe::class, 'universe_id'); // Asegúrate de que el nombre de la clave foránea sea correcto
    }

    public function gender() {
        return $this->belongsTo(Gender::class, 'gender_id'); // Asegúrate de que el nombre de la clave foránea sea correcto
    }

}

