<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baan extends Model
{
    use HasFactory;
    public $table = 'baans';

    protected $fillable = ['afmetingen','vloer','checkdatum','servicedatum'];
}