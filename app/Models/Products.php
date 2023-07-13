<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table      = "Order_Details";
    protected $dates = [ 'created_at','updated_at' ];
    public $timestamps = false;

    protected $fillable =
        [

            "product_description",
            "product_amount",
            "product_value",
            "product_status",
        ];
    protected $primaryKey = 'product_id'; // primary

  
}


