<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable=[
        'user_id',
        'name',
        'description'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

// add new tasks to  a project
    public function addTask($name, $status){
         $this->tasks()->create([
            'name'=> $name,
            'status'=> $status
        ]);

    }


}
