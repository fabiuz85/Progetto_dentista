<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'role',
        'age',
        'description',
        'twitter',
        'facebook',
        'instagram',
        'googlePlus',
        'portrait'
    ];
}
