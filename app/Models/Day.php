<?php

namespace App\Models;
use App\Models\event;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;
    protected $fillable = [
        'day_name',
    ];


    public function events(){
        return $this->hasMany(event::class);
    }
}
