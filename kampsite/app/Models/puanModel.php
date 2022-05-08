<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class puanModel extends Model
{
    use HasFactory;
    protected $table = 'puan';
    protected $primaryKey = 'puanid';
    public $timestamps = false;
    protected $guarded = [];
}
