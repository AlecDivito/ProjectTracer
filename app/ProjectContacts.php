<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectContacts extends Model
{
    // table associated with Project
    protected $table = 'ProjectContacts';
    // ID
    protected $primaryKey = 'projectContactId';
    // Remove default timestamp columns
    public $timestamps = false;
    // Make all attributes mass assignable
    protected $guarded = [];
}
