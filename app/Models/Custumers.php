<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custumers extends Model
{
    use HasFactory;
    protected $table      = "Custumers";
    protected $dates = [ 'created_at','updated_at' ];
    public $timestamps = false;

    protected $fillable =
        [

            "customers_id_number",
            "customers_name",
            "customers_birth_date",
            "customers_address",
            "customers_phone",
            "city_id",
            

        ];
    protected $primaryKey = 'customers_id'; // primary

    public function rel_city() {

        return $this->belongsTo('App\Models\Cities', 'city_id', 'city_id');
    }
}

