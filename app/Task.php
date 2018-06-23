<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = array('location','user_id' );

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tasks';

    /**
     * The distros that belong to this task.
     */

    public function distro(){
        return $this->hasMany('App\Distro');
    }

    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo('App\User');

    }
}

