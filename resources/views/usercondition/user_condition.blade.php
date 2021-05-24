// user_conditionの一覧を表示する共通のView
@if (count($user_condition) > 0)
    <ul class="list-unstyled">
        @foreach ($user_condition as $user_condition)
            <li class="media mb-3">
                <div class="media-body">
                    <div>
                        {{-- 投稿の所有者のユーザ詳細ページへのリンク --}}
                        {!! link_to_route('users.show', $user_condition->user->name, ['user' => $user_condition->user->id]) !!}
                        <span class="text-muted">posted at {{ $user_condition->created_at }}</span>
                    </div>
                    <div>
                        {{-- 投稿内容 --}}
                        <p class="mb-0">{!! nl2br(e($user_condition->content)) !!}</p>
                    </div>
                    <div>
                        @if (Auth::id() == $user_condition->user_id)
                            {{-- 投稿削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['user_condition.destroy', $user_condition->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $user_condition->links() }}
@endif