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