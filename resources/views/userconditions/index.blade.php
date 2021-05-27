{{-- 体調記録の詳細を表示 --}}
@if(Auth::check())

    @if (count($user_conditions) > 0)
<div class="text-center">
    <h1>過去の登録詳細一覧（修正中）</h1>
    <table class="table table-striped">
        {{-- {!! link_to_route('userconditions.show', $user_conditions->id ['user_condition' => $user_conditions->id]) !!} --}}
        <thead>
            <tr>
                <th>id</th>
                <th>起床時刻</th>
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
                {{-- user_condition.store ルーティング --}}
                <td>{!! link_to_route('user_condition.store', $user_condition->id, ['user_condition' => $user_condition->id]) !!}</td>
                <td>{{ $user_condition->wake }}</td>
                <td>{{ $user_condition->temperature }}</td>
                <td>{{ $user_condition->medicine }}</td>
                <td>{{ $user_condition->meal_amount }}</td>
                <td>{{ $user_condition->oxygen }}</td>
                <td>{{ $user_condition->blood_pressure }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endif