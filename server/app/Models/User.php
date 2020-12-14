<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User extends Model
{
    protected $fillable = [
        'name',
        'firstname',
        'lastname',
        'firstname_kana',
        'lastname_kana',
        'postal_code',
        'area_id',
        'city',
        'city_address',
    ];

    /**
     * 出品関連バリデーション
     *
     *
     */

    public static $rules = [
        //出品関連
        'imgpath' => 'required|file|mimes:jpeg,png,jpg,',
        'name' => 'required|max:30',
        'detail' => 'required|max:500',
        'category_id' => 'required',
        'status_id' => 'required',
        'paystatus_id' => 'required',
        'area_id' => 'required',
        'day_id' => 'required',
        'price' => 'required|integer|between:300,9999999',
    ];

    public static $message = [
        'imgpath.required' => '画像がありません',
        'imgpath.file' => '画像を挿入してください',
        'imgpath.mimes' => 'jpeg、png、jpgを挿入してください',
        'name.required' => '入力してください',
        'name.max' => '30文字以内で入力してください',
        'detail.required' => '入力してください',
        'detail.max' => '500文字以内で入力してください',
        'category_id.required' => '選択してください',
        'status_id.required' => '選択してください',
        'paystatus_id.required' => '選択してください',
        'area_id.required' => '選択してください',
        'day_id.required' => '選択してください',
        'price.required' => '入力してください',
        'price.integer' => '数値を入力してください',
        'price.between' => '300以上9999999以下で入力してください'
    ];

    /**
     * プロフィール関連
     *
     *
     */
    public static $rules_profile = [
        'name' => 'required|unique:users|string|max:64'
    ];

    public static $message_profile = [
        'name.required' => 'ニックネームを入力してください',
        'name.string' => '文字を入力してください',
        'name.regex' => '使用できない記号が含まれています',
        'name.max' => '64文字以内で入力してください',
        'name.unique' => 'このニックネームは既に使用されています',
    ];

    /**
     * 発送関連バリデーション
     *
     *
     */
    public static $rules_send = [
        //発送先関連
        'firstname' => 'required|max:10',
        'lastname' => 'required|max:10',
        'firstname_kana' => 'required|max:10|regex:/^[ァ-ヶー]+$/u',
        'lastname_kana' => 'required|max:10|regex:/^[ァ-ヶー]+$/u',
        'postal_code' => 'required|min:7',
        'area_id' => 'required',
        'city' => 'required|max:30',
        'city_address' => 'required|max:50',
    ];

    public static $message_send = [
        'firstname.required' => '入力してください',
        'firstname.max' => '10文字以内で入力してください',
        'lastname.required' => '入力してください',
        'lastname.max' => '10文字以内で入力してください',
        'firstname_kana.required' => '入力してください',
        'firstname_kana.max' => '10文字以内で入力してください',
        'firstname_kana.regex' => 'カタカナで入力してください',
        'lastname.required' => '入力してください',
        'lastname_name.max' => '10文字以内で入力してください',
        'lastname_kana.regex' => 'カタカナで入力してください',
        'postal_code.required' => '入力してください',
        'postal_code.min' => '７文字入力してください',
        'area_id.required' => '選択してください',
        'city.required' => '入力してください',
        'city.max' => '30文字以内で入力してください',
        'city_address.required' => '入力してください',
        'city_address.max' => '30文字以内で入力してください',
    ];
}
