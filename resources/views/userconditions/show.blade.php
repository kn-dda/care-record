{{-- ログイン後：マイページのView --}}

@if (Auth::check())
<div class="text-center">
    <br>
    <h3>マイページ</h3>
        <hr width="700">
        <hr width="500">
        <hr width="300">
        <div class="center">
            {{-- 新規データ入力 --}}
            @include('userconditions.form')
            {{-- データの詳細一覧表示 --}}
            @include('userconditions.index')
            <br>
            <hr width="700">
            <hr width="500">
            <hr width="300">
            <br>
            {{-- ログアウトへのリンク --}}
            {!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'btn btn-lg btn-success']) !!}
            <style>
                body {margin-bottom:50px}
            </style>
        </div>
</div>
@endif

{{--  --}}

{{-- @extends('layouts.app')

@section('content') --}}
    {{-- @if (Auth::check()) --}}
    {{--<div class="text-center">
        <h1>My Page</h1>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-sm3"> --}}
            {{-- 過去の記録一覧 --}}
            {{-- @include('userconditions.user_condition') --}}
            {{-- 新規データ入力 --}}
            {{-- @include('userconditions.form')
        </div>
    </div> --}}
    
    {{-- @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>CareManager</h1> --}}
                {{-- ユーザ登録ページへのリンク --}}
                {{-- {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!} --}}
            {{-- </div>
        </div>
    @endif
    
@endsection --}}