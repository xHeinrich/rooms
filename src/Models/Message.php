<?php

namespace xHeinrich\Rooms\Models\Inbox;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
  protected $table = 'inbox_messages';

  public $timestamps = true;


  public $fillable = [
      'message',
      'user_id',
      'room_id',
  ];


  public function room()
  {
      return $this->belongsTo('App\Models\Inbox\Room');
  }

  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
