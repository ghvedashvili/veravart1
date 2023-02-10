<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamsModel extends Model
{
    use HasFactory;

    protected $table = 'teams';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'teamuid', 'useruid'];


}