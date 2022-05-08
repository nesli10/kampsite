<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ilModel extends Model
{
    use HasFactory;
    protected $table = 'il';
    protected $primaryKey = 'ilid';
    public $timestamps = false;
    protected $guarded = [];
}
