<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // table associated with Project
    protected $table = 'Projects';
    // ID
    protected $primaryKey = 'projectId';
    // Remove default timestamp columns
    public $timestamps = false;
    // Make all attributes mass assignable
    protected $guarded = [];

    public function contacts()
    {
        return $this->belongsToMany('App\Contact' , 'ProjectContacts', 'projectId','contactId');
    }

    public function comments()
    {
        $this->hasMany('App\Comment');
    }

    public function files()
    {
        $this->hasMany('App\File');
    }

    public function getProjectIds($userId)
    {
        return DB::table('Projects')->where('userId', $userId)->pluck('projectId');
    }
}
