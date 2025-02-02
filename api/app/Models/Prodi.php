<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    use HasFactory, HasUuids;

    public function fakultas(){
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
    }
}
