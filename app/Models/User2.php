<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User2 extends Model
{
    use HasFactory;

    // ✅ Agrega esto
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function phone(){
        return $this->hasOne(Phone::class, 'user2_id', 'id');
    }
}
