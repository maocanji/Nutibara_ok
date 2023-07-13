<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;
    protected $table      = "Cities";
    protected $dates = [ 'created_at','updated_at' ];
    public $timestamps = false;

    protected $fillable =
        [

            "city_name",
        ];
    protected $primaryKey = 'city_id'; // primary

  
}

