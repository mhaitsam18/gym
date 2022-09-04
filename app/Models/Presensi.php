<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;
    protected $table = 'presensi';
    protected $guarded = ['id'];
    protected $with = ['jadwal', 'member', 'trainer'];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id');
    }
    public function member()
    {
        return $this->belongsTo(User::class, 'user_member_id');
    }
    public function trainer()
    {
        return $this->belongsTo(User::class, 'user_trainer_id');
    }
}
