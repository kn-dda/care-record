<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserConditionController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
            // ユーザの投稿の一覧を作成日時の降順で取得
            // （後のChapterで他ユーザの投稿も取得するように変更しますが、現時点ではこのユーザの投稿のみ取得します）
            $user_condition = $user->user_condition()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'user_condition' => $user_condition,
            ];
        }

        // Welcomeビューでそれらを表示
        return view('welcome', $data);
    }
    
    // create メソッドを使ってUserConditionを保存
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'temperature' => 'required|max:255',
            'medicine' => 'required|max:255',
            'meal_amount' => 'required|max:255',
            'oxygen' => 'required|max:255',
            'blood_pressure' => 'required|max:255',
        ]);

        // 認証済みユーザ（閲覧者）の投稿として作成（リクエストされた値をもとに作成）
        $request->user()->user_condition()->create([
            'temperature' => $request->temperature,
            'medicine' => $request->medicine,
            'meal_amount' => $request->meal_amount,
            'oxygen' => $request->oxygen,
            'blood_pressure' => $request->blood_pressure,
        ]);

        // 前のURLへリダイレクトさせる
        return back();
    }
}
