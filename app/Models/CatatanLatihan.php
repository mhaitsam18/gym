<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanLatihan extends Model
{
    use HasFactory;
    protected $table = 'catatan_latihan';
    protected $guarded = ['id'];
    protected $with = ['jadwal', 'programLatihan'];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id');
    }
    public function programLatihan()
    {
        return $this->belongsTo(ProgramLatihan::class, 'program_latihan_id');
    }
}
