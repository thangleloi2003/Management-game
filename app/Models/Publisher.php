<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Games;

class Publisher extends Model
{
    use HasFactory;
    protected $table = 'publishers';
    protected $fillable = [
        'name', 'email', 'phone', 'detail'
    ];

    public function games(){
        return $this->hasMany(Game::class);
    }

}
