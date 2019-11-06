<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignedRole extends Model
{
    protected $table = "assigned_roles";

    protected $fillable = ['user_id','role_id'];
}
