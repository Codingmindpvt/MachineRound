<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'first_name','last_name', 'address', 'image',
    ];
    protected $dates = ['deleted_at'];
}