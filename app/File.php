<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    // table associated with File
    protected $table = 'ProjectFileAttachments';
    // ID
    protected $primaryKey = 'fileId';
    // Remove default timestamp columns
    public $timestamps = false;
    // Make all attributes mass assignable
    protected $guarded = [];

    public function projects()
    {
      return $this->belongsTo('App\Project');
    }

}
