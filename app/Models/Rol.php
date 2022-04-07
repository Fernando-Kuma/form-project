<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rol extends Model
{
    protected $fillable = [
        'Nombre',
    ];
    public function user(){
        return $this->hasMany(User::class, 'id');
    }
    use HasFactory;
    use SoftDeletes;
}
