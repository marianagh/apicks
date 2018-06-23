<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distro extends Model
{
    protected $fillable = array('id_task','id_store', 'id_product', 'quantity' );

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'distros';

    /**
     * Get the task that owns the distro.
     */
    public function task()
    {
        return $this->belongsTo('App\Task');
    }
}
