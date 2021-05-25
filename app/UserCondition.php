<?php

// UserConditionのModel

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCondition extends Model
{
    //UserConditionのカラム名を入れる
    protected $fillable = ['wake', 'temperature', 'medicine', 'meal_amount', 'ozygen', 'blood_pressure'];

    // 参照させたいSQLテーブル名を指定
    protected $table = 'user_condition';
    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
