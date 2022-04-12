<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;

    public $table = "employees";
    protected $fillable = [
        'name','email','mobile','salary', 'dept_id',
    ];
    protected $dates = ['deleted_at'];

    function departmentdata()
    {
        return $this->belongsTo('App\Models\Department','dept_id','id');
    }
}
