<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sell;
use App\Models\Good;
use App\Models\User;

class UserController extends Controller
{
    //インデックスページ
    public function index()
    {
        $sells = Sell::paginate(20);

        return view('shop.shop', compact('sells'));
    }

    //プロフィール
    public function myPage(User $user)
    {
        $user = Auth::user();
        return view('mypage.mypage', compact('user'));
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
        // $likes = $sell->showLike();


        return redirect('/');
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
        $user = Auth::user();
        return view('mypage.sell', compact('user'));
    }

    public function addSell(Request $request)
    {
        $this->validate($request, Sell::$rules, Sell::$message);
        $sell = new Sell;

        /**
         * fillでまとめると画像パスがトークンのせいでがおかしくなるので、一個ずつ格納
         */
        $sell->user_id = $request->user_id;
        $sell->name = $request->name;
        $sell->detail = $request->detail;
        $sell->category_id = $request->category_id;
        $sell->status_id = $request->status_id;
        $sell->paystatus_id = $request->paystatus_id;
        $sell->area_id = $request->area_id;
        $sell->day_id = $request->day_id;
        $sell->price = $request->price;

        $image = $request->file('imgpath')->store('image');
        $image = str_replace('public/image/', '', $image);
        $sell->imgpath = $image;

        unset($sell['_token']);

        $sell->save();

        return redirect('/');
    }

    //出品中関連
    public function sellNow()
    {
        $user_id = Auth::id();
        $put_now = Sell::where('user_id', $user_id)->get();
        return view('mypage.putnow', compact('put_now'));
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
        $user_id = Auth::id();

        //表示用Userモデル
        $user = User::find($user_id);

        return view('profile.send', compact('user'));
    }

    public function addSend(Request $request)
    {
        $user_id = Auth::id();

        //表示用Userモデル
        $user = User::find($user_id);
        //変更用Userモデル
        $change = User::find($user_id);

        $form = $request->all();

        unset($form['_token']);
        $change->fill($form)->save();

        return redirect('/profile/send');
    }

    public function updateSend()
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
