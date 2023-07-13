<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detatails extends Model
{
    use HasFactory;
    protected $table      = "Order_Details";
    protected $dates = [ 'created_at','updated_at' ];
    public $timestamps = false;

    protected $fillable =
        [

            "product_id",
            "order_id",
        ];
    protected $primaryKey = 'detail_id'; // primary

    public function rel_city() {

        return $this->belongsTo('App\Models\Products', 'product_id', 'product_id');
    }
}


