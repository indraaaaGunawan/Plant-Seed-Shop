<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Register extends Model
{
    use HasFactory;
    protected $table = 'konsumen';
    protected $primaryKey = 'id_konsumen';
    protected $guarded = [];


}
