<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable =[
        'name',
        'task_id',
        'project_id'

        ];
    public function project()
    {
        return $this->belongsTo('App\Project');
    }



}
