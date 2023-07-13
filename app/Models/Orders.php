<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table      = "orders";
    protected $dates = [ 'created_at','updated_at' ];
    public $timestamps = false;

    protected $fillable =
        [

            "order_date",
            "order_total",
            "order_date_delivery",
            "customers_status",
        ];
    protected $primaryKey = 'order_id'; // primary

    public function rel_custumers() {

        return $this->belongsTo('App\Models\Custumers', 'customers_id', 'customers_id');
    }
}



