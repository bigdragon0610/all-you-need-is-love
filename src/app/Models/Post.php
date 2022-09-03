<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Notifications\SlackNotification;

class Post extends Model
{
  use HasFactory, Notifiable;

  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }

  public function channel()
  {
    return $this->belongsTo('App\Models\Channel');
  }

  public function routeNotificationForSlack()
  {
    return config("slack.url");
  }

  public function sendSlack($message)
  {
    return $this->notify(new SlackNotification($message));
  }
}
