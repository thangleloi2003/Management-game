<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;

class Platform extends Model
{
    use HasFactory;
    protected $table = 'platforms';
    protected $fillable = [
        'name', 'descrip'
    ];

    public function games(){
        return $this->belongsToMany(Game::class);
    }
}
