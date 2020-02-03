<?php

namespace App\Http\Controllers;

use App\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();   #ログインユーザー情報を取得します。
        $favorites = Favorite::where('user_id', $user->id)->get();
        return view('mypage.index', ['user' => $user, 'favorites' => $favorites]);
    }
}
