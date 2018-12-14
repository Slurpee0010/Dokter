<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Rsdokter extends Eloquent
{
  protected $connection = 'mongodb';
   protected $collection = 'tb_dokter';

   protected $fillable = [
       'nama', 'email','spesiais','alamat','no_hp','no_induk'
     ];
}
