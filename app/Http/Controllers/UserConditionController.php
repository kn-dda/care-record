<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserCondition; // 追加

class UserConditionController extends Controller
{
    //user_conditionの詳細表示
    public function index()
    {
        //$data = [];
        if (\Auth::check()) // 認証済みの場合
        {
            // DB内のレコード存在確認
            if(UserCondition::where('user_id', \Auth::user()->id)->exists());
                
                // 認証済みユーザを取得
                $user = \Auth::user();
            
                // ユーザの投稿の一覧を作成日時の降順で取得
                // このユーザの投稿のみを表示
                $user_conditions = $user->user_condition()->orderBy('created_at', 'desc')->paginate(10); // user_condition()を複数形に変更

                //$data = [
                    //'user' => $user,
                    //'user_conditions' => $user_conditions, // 左辺を複数形に変更
                //];
        
        // user_conditionでそれらを表示
        // return view('userconditions.user_condition', [
        return view('userconditions.user_condition', [
            // 変数を定義
            'user' => $user,
            'user_conditions' => $user_conditions,
        ]); 
        
        }

    }
    
    /*
    // mypageを表示
    public function show()
    {
        // 認証済みユーザを取得
        $user = \Auth::user();
        
        // ユーザの投稿の一覧を作成日時の降順で取得
        // このユーザの投稿のみを表示
        //$user_conditions = $user->user_condition()->orderBy('created_at', 'desc')->paginate(10);
                
        // MyPageで表示
        return view('userconditions.show', [
            // 変数を定義
            'user' => $user,
            'user_conditions' => $user_conditions,
        ]);
    }
    */
    
    
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
        $request->user()->user_conditions()->create([ 
            'temperature' => $request->temperature,
            'medicine' => $request->medicine,
            'meal_amount' => $request->meal_amount,
            'oxygen' => $request->oxygen,
            'blood_pressure' => $request->blood_pressure,
        ]);

        // 前のURLへリダイレクトさせる
        return back();
    }
    
    // 投稿の削除
    public function destroy($id)
    {
        // idの値で投稿を検索して取得
        $user_condition = \App\UserCondition::findOrFail($id);

        // 認証済みユーザ（閲覧者）がその投稿の所有者である場合は、投稿を削除
        if (\Auth::id() === $user_condition->user_id) {
            $user_condition->delete();
        }

        // 前のURLへリダイレクトさせる
        return back();
    }
    
}
