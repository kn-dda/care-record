<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    // MyPageを表示する
    public function show()
    {
        // idの値でユーザを検索して取得
        //$user = User::findOrFail($id);
        
        // 認証済みユーザを取得
        $user = \Auth::user();

        // 関係するモデルの件数をロード
        //$user->loadRelationshipCounts();

        // ユーザの投稿一覧を作成日時の降順で取得
        $user_conditions = $user->user_conditions()->orderBy('created_at', 'desc')->paginate(10);

        // それらを表示
        return view('userconditions.show', [
            // 変数を定義
            'user' => $user,
            'user_conditions' => $user_conditions,
        ]);
    }
    
}
