<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    // si no mencionamos a que tabla se debe conectar, Laravel asume que es el plural del nombre del modelo y en minisculas
    use HasFactory, Notifiable;
    
    protected $table = 'posts';

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            // mutador
            set: function ($value){
                return strtolower($value);
            },
            // accesor
            get: function($value)
            {
                return ucfirst($value);
            }
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
