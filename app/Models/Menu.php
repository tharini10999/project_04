<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    use HasFactory;

    protected $table = 'menus';

    protected $fillable = [

        'id_type',
        'name',
        'image',
        'price',
        'detail'

    ];

    public function type()
    {
        return $this->belongsTo(Type::class, 'id_type', 'id');
    }

}
