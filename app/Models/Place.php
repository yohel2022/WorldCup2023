<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    //Relación uno a muchos
    public function games(){
        return $this->hasMany(Game::class);
    }
}
