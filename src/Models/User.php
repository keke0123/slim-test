<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $primaryKey = 'idx';
    protected $table = 'user';
}