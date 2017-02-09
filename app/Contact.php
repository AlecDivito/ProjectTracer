<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // table associated with Contacts
    protected $table = 'Contacts';
    // ID
    protected $primaryKey = 'contactId';
    // Remove default timestamp columns
    public $timestamps = false;
    // Make all attributes mass assignable
    protected $guarded = [];

    public function projects()
    {
      return $this->belongsToMany('App\Project', 'ProjectContacts');
    }
}
