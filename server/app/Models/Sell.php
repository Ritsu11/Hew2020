<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Sell extends Model
{
    protected $guarded = [
        'id'
    ];

    public static $rules = [
        'imgpath' => 'required|file|mimes:jpeg,png,jpg,',
        'name' => 'required|max:30',
        'detail' => 'required|max:500',
        'category_id' => 'required',
        'status_id' => 'required',
        'paystatus_id' => 'required',
        'area_id' => 'required',
        'day_id' => 'required',
        'price' => 'required|numeric|between:300,9999999'
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
        'price.numeric' => '数値を入力してください',
        'price.between' => '300以上9999999以下で入力してください'
    ];
}
