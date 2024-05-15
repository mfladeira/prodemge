<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'cep',
        'street',
        'number',
        'complement',
        'neighborhood',
        'state',
        'city',
        'personId'
    ];

    protected $table = "addresses";

    public function person(){
        return $this->belongsTo('App\Person', 'personId');
    }
}
