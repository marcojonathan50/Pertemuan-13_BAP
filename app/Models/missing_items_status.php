<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class missing_items_status extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'missing_items_statuses';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    
}
