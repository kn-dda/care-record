{{-- ユーザ登録情報、サインナップに必要な項目 --}}

@extends('layouts.app')

@section('content')
    <div class="text-center">
        <br>
        <h3>はじめまして！</h3>
        <h4>一緒に体調を整えていきましょう＊</h4>
        <br>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', '名前（必須）') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス（必須）') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('birthday', '誕生日（必須）') !!}
                    {!! Form::text('birthday', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード（必須）') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード（確認用）') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('登録', ['class' => 'btn btn-success btn-block']) !!}
            {!! Form::close() !!}
            <style>
                body {margin-bottom:50px}
            </style>
        </div>
    </div>
@endsection