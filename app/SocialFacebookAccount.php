<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialFacebookAccount extends Model
{
    protected $fillable = [
        'user_id',
        'email',
        'name',
        'image',
        'provider',
        'provider_user_id'
    ];

      public function user()
      {
          return $this->belongsTo(User::class);
      }
}
