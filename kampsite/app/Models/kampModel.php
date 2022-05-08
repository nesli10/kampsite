<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kampModel extends Model
{
    use HasFactory;
    protected $table = 'kamp';
    protected $primaryKey = 'kampid';
    public $timestamps = false;
    protected $guarded = [];
}
