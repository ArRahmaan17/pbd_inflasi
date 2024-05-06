<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Auth;

class News extends Model
{
    use HasFactory;

    static function loadLimit($limit = 3, $id = 0)
    {
        $news = self::with('user')->limit($limit);
        if (!Auth::check()) {
            $news->whereIn('type', ['pu_news', 'pu_announcement']);
        }
        $news = $news->where('id', '>', $id)->get();
        return $news;
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}