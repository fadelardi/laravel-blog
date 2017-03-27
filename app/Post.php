<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'user_id'];

    public function comments()
    {
      return $this->hasMany(Comment::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
      return $this->comments()->create(compact('body'));
    }

    public function scopeFilter($query, $filters)
    {
      if ($filters['month']) {
        $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
      }

      if ($filters['year']) {
        $query->whereYear('created_at', Carbon::parse($filters['year'])->year);
      }
    }
}
