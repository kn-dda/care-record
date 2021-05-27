{{-- ログイン後：マイページのView --}}

<div class="text-center">
    <h1>My Page</h1>
        <div class="center">
            {{-- 新規データ入力 --}}
            @include('userconditions.form')
            {{-- {!! link_to_route('userconditions.form', 'Record now!') !!} --}}
            {{-- データの詳細一覧表示 --}}
            @include('userconditions.index')
            {{-- {!! link_to_route('userconditions.form', 'Record now!') !!} --}}
            {{-- 新規データ入力ページへのリンク --}}
            {{-- <p class="mt-2">New data? {!! link_to_route('userconditions.form', 'Record now!') !!}</p> --}}
        </div>
</div>

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