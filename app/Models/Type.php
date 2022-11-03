<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    use HasFactory;

    protected $primaryKey = "id";
    protected $table = "types";

    protected $fillable = [

        'id',
        'name',

    ];

    public function menu()

    {
        return $this->hasMany(Menu::class, 'id_type');
    }

}
