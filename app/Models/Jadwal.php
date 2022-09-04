<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jadwal extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'jadwal';
    protected $guarded = ['id'];

    public function trainee()
    {
        return $this->belongsTo(Trainee::class, 'trainee_id');
    }
    public function member()
    {
        return $this->belongsTo(User::class, 'member_id');
    }
    public function trainer()
    {
        return $this->belongsTo(Trainer::class, 'trainer_id');
    }
    public function waktu()
    {
        return $this->belongsTo(Waktu::class, 'waktu_id');
    }

    public function catatanLatihan()
    {
        return $this->hasOne(CatatanLatihan::class);
    }
}
