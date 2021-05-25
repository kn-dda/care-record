{{-- user_conditionの一覧を表示する共通のView：MyPageの後に遷移--}}
@extends('layouts.app')

@section('content')

@if (count($user_conditions) > 0)
    <ul class="list-unstyled">
        @foreach ($user_conditions as $user_condition)
            <li class="media mb-3">
                <div class="media-body">
                    <div>
                        {{-- 投稿内容 --}}
                        <p class="mb-0">{!! nl2br(e($user_condition->content)) !!}</p>
                    </div>
                    <div>
                        {{-- @if (Auth::id() == $user_condition->user_id) --}}
                            {{-- 投稿削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['user_condition.destroy', $user_condition->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        {{-- @endif --}}
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $user_conditions->links() }}
@endif

@endsection