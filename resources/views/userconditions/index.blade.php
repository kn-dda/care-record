

{{--体調記録一覧を表示--}}

{{-- 
@extends('layouts.app')

@section('content')
--}}
{{-- ここにページ毎のコンテンツを書く--}}

{{-- ログインしているか否かを判別　--}}
{{-- 
@if(Auth::check())
--}}

    {{--ログインされている場合--}}
    {{--タスクが1件以上存在する場合--}}
{{-- 
    @if (count($user_conditions) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>体温</th>
                    <th>薬</th>
                    <th>食事量</th>
                    <th>酸素濃度</th>
                    <th>血圧</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user_conditions as $user_condition)
                <tr>
--}}
                    {{-- タスク詳細ページへのリンク --}}
{{-- 
                    <td>{!! link_to_route('usercondition.show', $user_condition->id, ['user_condition' => $user_condition->id]) !!}</td>
                    <td>{{ $user_condition->temperature }}</td>
                    <td>{{ $user_condition->medicine}}</td>
                    <td>{{ $user_condition->meal_amount}}</td>
                    <td>{{ $user_condition->oxygen}}</td>
                    <td>{{ $user_condition->blood_pressure}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
--}}
    {{--ページネーションのリンク--}}
{{-- 
    {{ $user_conditions->links() }}
--}}
    {{-- 体調記録作成ページへのリンク --}}

{{-- 
    {!! link_to_route('usercondition.mypage', '体調記録作成', [], ['class' => 'btn btn-primary']) !!}
--}}
{{--ログインされていない場合--}}
{{-- 
@else
    <div class="text-center">
        <h1>CareManager</h1>
{{-- 
        {{-- ユーザ登録ページへのリンク --}}
        
{{--
        {!! link_to_route('signup.post', '登録はこちらから', [], ['class' => 'nav-link']) !!}

@endif

@endsection
--}}