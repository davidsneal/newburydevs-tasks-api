<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $table = 'tasks';

    protected $guarded = [
        'id',
    ];

    protected $dates = [
        'completed_at',
        'deleted_at',
    ];

    public function getCompletedAttribute()
    {
        return ! is_null($this->completed_at);
    }
}
