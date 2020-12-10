<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sell;
use App\Models\Good;

class UserController extends Controller
{
    //インデックスページ
    public function index()
    {
        $sells = Sell::paginate(6);

        return view('shop.shop', compact('sells'));
    }

    //プロフィール
    public function myPage()
    {
        return view('mypage.mypage');
    }

    //いいね一覧
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

    //出品
    public function sell()
    {
        return view('mypage.sell');
    }

    //出品中関連
    public function sellNow()
    {
        return view('mypage.putnow');
    }

    public function sellTrade()
    {
        return view('mypage.puttrade');
    }

    public function sellEnd()
    {
        return view('mypage.putsale');
    }

    //落札関連
    public function bidNow()
    {
        return view('mypage.bidnow');
    }

    public function bidTrade()
    {
        return view('mypage.bidtrade');
    }

    public function bidEnd()
    {
        return view('mypage.bidsale');
    }


    /**
     * プローフィール関連
     *
     */

    //プロフィール
    public function profile()
    {
        return view('profile.profile');
    }

    //発送元関連
    public function send()
    {
        return view('profile.send');
    }

    //支払い関連
    public function pay()
    {
        return view('profile.pay');
    }

    //メール関連
    public function mail()
    {
        return view('profile.mail');
    }

    //ログアウト特設ビュー
    public function logout()
    {
        return view('profile.logout');
    }
}
