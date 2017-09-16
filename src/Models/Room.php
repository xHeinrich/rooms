<?php

namespace xHeinrich\Rooms\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Room extends Model
{

    protected $table = 'inbox_rooms';

    public $timestamps = true;

    public $fillable = [
        'name',
        'private',
        'user_id'
    ];

    protected $dates = ['deleted_at'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function isPrivate()
    {
        return $this->private;
    }

    public function messages()
    {
        return $this->hasMany('App\Models\Inbox\Message');
    }


    public function createRoom($users)
    {
        $this->users()->attach($users->pluck('id'));
    }

    public function scopeInUser($query, $user_id)
    {
        $users = [
            $user_id,
            Auth::user()->id
        ];
        return $query->whereHas('users', function($q) use($users) {
            $q->whereIn('user_id', $users);
        });

            //$query->where('user_id', $user_id);
    }

    public function inRoom($user_id)
    {
        return $this->users()->contains($user_id);
    }

    public function getNameAttribute($value)
    {
        return !$value ? $this->users()->where('name', '!=', Auth::user()->name)->first()->name : $this->name;
    }
    //Chat room has a user that created the room
    //Chat room has many users in the room
    //Chat room has many messages
}
