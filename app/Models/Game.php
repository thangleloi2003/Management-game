<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Publisher;

class Game extends Model
{
    use HasFactory;
    protected $table = 'games';
    protected $fillable = [
        'title', 'publisher_id', 'description'
    ];

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function platforms(){
        return $this->belongsToMany(Platform::class);
    }
    
}
