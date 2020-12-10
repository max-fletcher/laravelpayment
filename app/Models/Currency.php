<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    // set primary key as ISO as opposed to ID. Also changed in migration.
    protected $primarykey = 'iso';

    // make sure the model doesn't increment the primary key on creating/mass assignment
    public $incrementing = false;

    protected $fillable = [ 'iso',];
}
