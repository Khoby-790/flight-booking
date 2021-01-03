<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = "employee_id";

    protected $fillable = [
        "othernames",
        "surname",
        "abbrv",
        "dob",
        "position",
        "email",
        "primaryphone",
        "secondaryphone",
    ];
    protected  $
    protected  $table = "employee_s";


    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}
