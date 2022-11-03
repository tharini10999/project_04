<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $table = 'content';
    // protected $primarykey = 'content_id';
    protected $fillable = [
        'name',
        'detail',
        'image'
    ];
}
