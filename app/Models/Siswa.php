<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $primaryKey = 'nis';
    protected $guarded = [];
    
    public function input() {
        return $this->hasMany(Input::class);
    }
}
