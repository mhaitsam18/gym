<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langganan extends Model
{
    use HasFactory;
    protected $table = 'langganan';
    protected $guarded = ['id'];
    protected $with = ['paket', 'member'];
    public function member()
    {
        return $this->belongsTo(User::class, 'member_id');
    }
    public function paket()
    {
        return $this->belongsTo(Paket::class, 'paket_id');
    }
}
