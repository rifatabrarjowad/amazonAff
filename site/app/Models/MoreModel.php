<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoreModel extends Model
{
    use HasFactory;
    public $table = 'more';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';

}