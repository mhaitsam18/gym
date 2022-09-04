<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    use HasFactory;
    protected $table = 'trainee';
    protected $guarded = ['id'];
    protected $with = ['member', 'trainer'];

    public function member()
    {
        return $this->belongsTo(User::class, 'member_id');
    }
    public function trainer()
    {
        return $this->belongsTo(Trainer::class, 'trainer_id');
    }
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
