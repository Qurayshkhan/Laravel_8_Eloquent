<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable=['name','email','city','marks'];
    // protected $connection='sqlite';
    // protected $table='students';
    // protected $primaryKey='id';
    // protected $keyType='string';
    // public $incrementing=false;
    // public $timestamp=false;
    // const CREATED_AT='creation_date';
    // const UPDATE_AT='updation_date';
  

}
