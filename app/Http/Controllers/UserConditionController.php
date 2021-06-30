<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserCondition; // 追加

class UserConditionController extends Controller
{
    //user_conditionの詳細表示
    public function index()
    {

        if (\Auth::check()) // 認証済みの場合
        {
            // DB内のレコード存在確認
            if(UserCondition::where('user_id', \Auth::user()->id)->exists());
                
                // 認証済みユーザを取得
                $user = \Auth::user();
            
                // ユーザの投稿の一覧を作成日時の降順で取得
                // このユーザの投稿のみを表示
                $user_conditions = $user->user_condition()->orderBy('created_at', 'desc')->paginate(10); // user_condition()を複数形に変更
        
        // showで投稿を一覧表示
        return view('userconditions.show', [
            // 変数を定義
            'user' => $user,
            'user_conditions' => $user_conditions,
        ]);
        
        }

    }
    
    
    // create メソッドを使ってUserConditionを保存（データを登録する）
    public function store(Request $request)
    {
        //認証済みユーザを取得
        $user = \Auth::user();
        
        // バリデーション
        $request->validate([
            'wake' => 'required|max:255',
            'temperature' => 'required|max:255',
            'medicine' => 'required|max:255',
            'meal_amount' => 'required|max:255',
            'oxygen' => 'required|max:255',
            'blood_pressure' => 'required|max:255',
        ]);
        
        // 認証済みユーザ（閲覧者）の投稿として作成（リクエストされた値をもとに作成）
        $request->user()->user_condition()->create([ // Userモデルに合わせてuser_condition() 
            'wake' => $request->wake,
            'temperature' => $request->temperature,
            'medicine' => $request->medicine,
            'meal_amount' => $request->meal_amount,
            'oxygen' => $request->oxygen,
            'blood_pressure' => $request->blood_pressure,
        ]);
        

        //前のURLへリダイレクトさせる
        return back();
    }
    
    //記録データの詳細を表示するshowアクション
    public function show($id)
    {
        //idの値で記録を検索して取得
        $user_conditions = UserCondition::findOrFail($id);
        //認証済みユーザ（閲覧者）がそのデータの所有者である場合は、閲覧を可能にする
        if (\Auth::id() === $user_conditions->user_id) {
            return view('userconditions.user_condition', [
                'user_conditions' => $user_conditions,
            ]);
        } else {
            //マイページにリダイレクトさせる
            return redirect('show');
        }
    }
    
    // 記録データを削除するdestroyアクション
    public function destroy($id)
    {
        // idの値で投稿を検索して取得
        $user_condition = \App\UserCondition::findOrFail($id);

        // 認証済みユーザ（閲覧者）がその投稿の所有者である場合は、投稿を削除
        if (\Auth::id() === $user_condition->user_id) {
            $user_condition->delete();
        }
        
        // user_condition.blade.phpで編集・削除を可能にする
        return view('userconditions.user_condition', [
            // 変数を定義
            'user' => $user,
            'user_conditions' => $user_conditions,
        ]);

        // マイページへリダイレクトさせる
        return redirect('show');
    }
    
    // putメソッドを用いて、編集したデータを更新するupdateアクション
    public function update(Request $request, $id)
    {
        //idの値でメッセージを検索して取得する
        $user_conditions = UserCondition::findOrFail($id);

        //認証済みユーザ（閲覧者）がその記録の所有者である場合は、記録を更新可能にする
        if (\Auth::id() === $user_conditions->user_id) { 
            $user_conditions->wake = $request->wake;
            $user_conditions->temperature = $request->temperature;
            $user_conditions->medicine = $request->medicine;
            $user_conditions->meal_amount = $request->meal_amount;
            $user_conditions->oxygen = $request->oxygen;
            $user_conditions->blood_pressure = $request->blood_pressure;
            $user_conditions->save();
        }

        //user_condition.blade.phpで表示する
        return view('userconditions.user_condition');
    }
}
