<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = array('location','number' );

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'stores';

}
