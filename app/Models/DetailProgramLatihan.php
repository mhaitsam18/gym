<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailProgramLatihan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'detail_program_latihan';
    protected $guarded = ['id'];
    protected $with = ['programLatihan'];

    public function programLatihan()
    {
        return $this->belongsTo(ProgramLatihan::class, 'program_latihan_id');
    }
}
