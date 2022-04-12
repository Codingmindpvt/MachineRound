<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = "employees";
    protected $fillable = [
        'name','age', 'salary', 'image',
    ];
    protected $dates = ['deleted_at'];
    
}
