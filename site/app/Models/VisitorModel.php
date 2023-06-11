<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorModel extends Model
{
    use HasFactory;
    protected $table = 'visitor';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'pId',
        'vTime',
        'vIp',
        'vCountry',
        'vCity',
        'vPost'
    ];
}