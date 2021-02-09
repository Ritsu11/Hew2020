<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sell;
use App\Models\Good;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //検索
    public function search(Request $request)
    {
        //キーワード受け取り
        $keyword = $request->input('keyword');

        //クエリ生成
        $query = Sell::query();

        //もしキーワードがあったら
        if (!empty($keyword)) {
            $query->where('name', 'like', '%' . $keyword . '%');
        }

        //ページネーション
        $sells = $query->paginate(20);
        return view('category.search', compact('sells'));
    }

    public function computerSearch()
    {
        $query = Sell::query();
        $query->where('category_id', 1);

        $sells = $query->paginate(20);

        return view('category.search', compact('sells'));
    }

    public function electricalSearch()
    {
        $query = Sell::query();
        $query->where('category_id', 2);

        $sells = $query->paginate(20);

        return view('category.search', compact('sells'));
    }

    public function bookSearch()
    {
        $query = Sell::query();
        $query->where('category_id', 3);

        $sells = $query->paginate(20);

        return view('category.search', compact('sells'));
    }

    public function movieSearch()
    {
        $query = Sell::query();
        $query->where('category_id', 4);

        $sells = $query->paginate(20);

        return view('category.search', compact('sells'));
    }

    public function gameSearch()
    {
        $query = Sell::query();
        $query->where('category_id', 5);

        $sells = $query->paginate(20);

        return view('category.search', compact('sells'));
    }

    public function collectionSearch()
    {
        $query = Sell::query();
        $query->where('category_id', 6);

        $sells = $query->paginate(20);

        return view('category.search', compact('sells'));
    }

    public function sportSearch()
    {
        $query = Sell::query();
        $query->where('category_id', 7);

        $sells = $query->paginate(20);

        return view('category.search', compact('sells'));
    }

    public function bikeSearch()
    {
        $query = Sell::query();
        $query->where('category_id', 8);

        $sells = $query->paginate(20);

        return view('category.search', compact('sells'));
    }

    public function fashionSearch()
    {
        $query = Sell::query();
        $query->where('category_id', 9);

        $sells = $query->paginate(20);

        return view('category.search', compact('sells'));
    }

    public function accessoriesSearch()
    {
        $query = Sell::query();
        $query->where('category_id', 10);

        $sells = $query->paginate(20);

        return view('category.search', compact('sells'));
    }

    public function foodSearch()
    {
        $query = Sell::query();
        $query->where('category_id', 11);

        $sells = $query->paginate(20);

        return view('category.search', compact('sells'));
    }

    public function interiorSearch()
    {
        $query = Sell::query();
        $query->where('category_id', 12);

        $sells = $query->paginate(20);

        return view('category.search', compact('sells'));
    }

    public function workSearch()
    {
        $query = Sell::query();
        $query->where('category_id', 13);

        $sells = $query->paginate(20);

        return view('category.search', compact('sells'));
    }
}
