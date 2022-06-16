<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // baipassa e permette assegnazione di massa
    protected $fillable = ['title', 'description', 'thumb'];
}
