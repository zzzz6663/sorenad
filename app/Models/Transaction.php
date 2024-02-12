<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'withdrawal_id',
        'transactionId',
        'amount',
        'track',
        'status',
        'type',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function withdrawal(){
        return $this->belongsTo(Withdrawal::class);
    }
}