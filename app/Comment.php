<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // table associated with Comments
    protected $table = 'ProjectComments';
    // ID
    protected $primaryKey = 'commentId';
    // Remove default timestamp columns
    public $timestamps = false;
    // Make all attributes mass assignable
    protected $guarded = [];

    public function projects()
    {
      return $this->belongsTo('App\Project');
    }
}
