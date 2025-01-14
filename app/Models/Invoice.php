<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'type', 'account_id', 'path', 'date'];
    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
