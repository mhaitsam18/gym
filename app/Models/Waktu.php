<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Waktu extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'trainer';
    protected $guarded = ['id'];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
