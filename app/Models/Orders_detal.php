<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders_detal extends Model
{
    use HasFactory;
    protected $table='orders_detail';
    protected $primaryKey = 'order_detail_id';
}
