<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $table = 'membros';

    public $primaryKey = 'id';

    public $timestamps = true;
}
