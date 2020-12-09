<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Good extends Model
{
    protected $fillable = [
        'sell_id', 'user_id',
    ];

    public function showLike()
    {
        $user_id = Auth::id();
        return $this->where('user_id', $user_id)->get();
    }

    public function sell()
    {
        return $this->belongsTo('\App\Models\Sell');
    }

    public function addLike($sell_id)
    {
        $user_id = Auth::id();
        $like_add_info = Good::firstOrCreate(['sell_id' => $sell_id, 'user_id' => $user_id]);

        if ($like_add_info->wasRecentlyCreated) {
            $message = 'いいねに追加しました';
        } else {
            $message = 'いいねに登録済みです';
        }

        return $message;
    }

    public function deleteLike($sell_id)
    {
        $user_id = Auth::id();
        $delete = $this->where('user_id', $user_id)->where('sell_id', $sell_id)->delete();

        if ($delete > 0) {
            $message = 'いいねから一つの商品を削除しました';
        } else {
            $message = '削除に失敗しました';
        }
        return $message;
    }
}
