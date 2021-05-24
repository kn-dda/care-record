{{-- トップページのView --}}

@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <div class="col-sm-8">
                {{-- 投稿フォーム --}}
                {{-- @include('usercondition.form') --}}
                    {{-- ↑トップページのPreview確認のためコメントアウト --}}
                {{-- 投稿一覧 --}}
                {{-- @include('usercondition.user_condition') --}}
                    {{-- ↑トップページのPreview確認のためコメントアウト --}}
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>CareManager</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
                {{-- ログインページへのリンク --}}
                {!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}
                    {{-- ↑センターではなく、右上に移動する予定。画面遷移優先のため、後ほど修正 --}}、
            </div>
        </div>
    @endif
@endsection