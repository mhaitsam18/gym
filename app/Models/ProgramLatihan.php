<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgramLatihan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'program_latihan';
    protected $guarded = ['id'];
    protected $with = ['trainer'];

    public function trainer()
    {
        return $this->belongsTo(Trainer::class, 'trainer_id');
    }

    public function detailProgramLatihan()
    {
        return $this->hasMany(DetailProgramLatihan::class);
    }
    public function catatanLatihan()
    {
        return $this->hasMany(CatatanLatihan::class);
    }
}
