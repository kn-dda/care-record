{{-- ログイン後：マイページのView --}}
@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>My Page</h1>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-sm3">
            <div class="col-sm-8">
                {{-- 過去の記録一覧 --}}
                @include('userconditions.user_condition')
                {{-- 新規データ入力 --}}
                @include('userconditions.form')
            </div>
        </div>
    </div>
@endsection