<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    use HasFactory;
    protected $table = 'kullanici';
    protected $primaryKey = 'kullaniciid';
    public $timestamps = false;
    protected $guarded = [];
}
