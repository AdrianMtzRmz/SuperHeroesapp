<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $table = 'genders';
    protected $fillable = ['name'];

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }
}
