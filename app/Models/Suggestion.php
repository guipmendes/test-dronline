<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'semana',
        'periodo',
    ];

    public function schedule(){
        return $this->hesMany(Schedule::class); 
    }

}
