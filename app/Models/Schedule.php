<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'dtsolicitacao',
        'especialidade',
        'status',
        'observacao'
    ];

    public function user(){
        return $this->belongsTo(Beneficiarie::class); 
    }

}
