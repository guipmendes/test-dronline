<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'especialidade',
        'status',
        'observacao',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(Beneficiarie::class); 
    }

}
