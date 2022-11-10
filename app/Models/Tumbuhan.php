<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Tumbuhan extends Model
{
   //use HasFactory;
   protected $table = "tanamans";
   protected $primaryKey = "id_tanaman";
   protected $guarded = [];

}
