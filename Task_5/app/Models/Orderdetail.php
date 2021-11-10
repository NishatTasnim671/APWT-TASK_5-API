<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Myorder;

class Orderdetail extends Model
{
    use HasFactory;
    public function order(){
        return $this->belongsTo(Myorder::class, 'order_id','id');
    }
}
