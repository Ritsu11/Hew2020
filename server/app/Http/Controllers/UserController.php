<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sell;
use App\Models\Good;

class UserController extends Controller
{
    public function index()
    {
        $sells = Sell::paginate(6);

        return view('shop.shop', compact('sells'));
    }

    public function myPage()
    {
        return view('mypage.profile');
    }

    public function myLikes(Good $sell)
    {
        //Goodクラスメソッド呼び出し
        $likes = $sell->showLike();
        return view('mypage.likes', compact('likes'));
    }

    public function addMylikes(Request $request, Good $sell)
    {
        //カートに追加の処理
        $sell_id = $request->sell_id;
        $message = $sell->addLike($sell_id);

        //追加後の情報を取得
        $likes = $sell->showLike();


        return view('mypage.likes', compact('likes', 'message'));
    }

    public function deleteMylikes(Request $request, Good $sell)
    {

        //カートから削除の処理
        $sell_id = $request->sell_id;
        $message = $sell->deleteLike($sell_id);

        //追加後の情報を取得
        $likes = $sell->showLike();

        return view('mypage.likes', compact('likes', 'message'));
    }
}
