<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bolgeModel extends Model
{
    use HasFactory;
    protected $table = 'bolge';
    protected $primaryKey = 'bolgeid';
    public $timestamps = false;
    protected $guarded = [];
}
