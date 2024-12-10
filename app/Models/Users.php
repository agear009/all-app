<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    /** @use HasFactory<\Database\Factories\UsersFactory> */
    use HasFactory;

    protected $fillable = [
    'name',
    'email',
    'ktp',
    'nohp',
    'level',
    'status',
    'id_transaksi',
    'norek',
    'saldo',
    'bank'
    ];
}
