{{--体調記録一覧を表示--}}
@extends('layouts.app')

@section('content')
{{-- ここにページ毎のコンテンツを書く--}}

{{-- ログインしているか否かを判別　--}}
@if(Auth::check())

    {{--ログインされている場合--}}
    {{--タスクが1件以上存在する場合--}}
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
                    {{-- タスク詳細ページへのリンク --}}
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {{--ページネーションのリンク--}}
    {{ $tasks->links() }}
    {{-- タスク作成ページへのリンク --}}
    {!! link_to_route('tasks.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}

{{--ログインされていない場合--}}
@else
    <div class="text-center">
        <h1>Tasklist</h1>
        {{-- ユーザ登録ページへのリンク --}}
        {!! link_to_route('signup.get', '登録はこちらから', [], ['class' => 'nav-link']) !!}

@endif

@endsection