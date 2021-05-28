{{-- ユーザログイン情報、ログインに必要な項目 --}}

@extends('layouts.app')

@section('content')
    <div class="text-center">
        <br>
        <h3>おかえりなさい＊</h3>
        <h4>今日の体調はいかがですか？</h4>
        <br>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス（必須）') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード（必須）') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ログイン', ['class' => 'btn btn-success btn-block']) !!}
            {!! Form::close() !!}

            {{-- ユーザ登録ページへのリンク --}}
            <p class="mt-2">アカウントをお持ちでない場合 {!! link_to_route('signup.get', '新規登録はこちらから') !!}</p>
            <style>
                body {margin-bottom:50px}
            </style>
        </div>
    </div>
@endsection