{{-- トップページのView --}}

@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <div class="col-sm-8">
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>CareManager</h1>
                    {{-- ユーザ登録ページへのリンク --}}
                    {!! link_to_route('signup.get', '新しく登録', [], ['class' => 'btn btn-lg btn-success']) !!}
                    {{-- ログインページへのリンク --}}
                    {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-success']) !!}
            </div>
        </div>
    @endif
@endsection