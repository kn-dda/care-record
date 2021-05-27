{{-- 体調記録の詳細を表示 --}}
<div class="text-center">
    <h1>過去の登録詳細一覧（修正中）</h1>
    <table class="table table-bordered">
        {{-- {!! link_to_route('userconditions.show', $user_conditions->id ['user_condition' => $user_conditions->id]) !!} --}}
        {{-- <tr>
            <th>id</th>
            <td>{{ $user_conditions->id }}</td>
        </tr> --}}
        @foreach ($user_conditions as $user_condition)
        <tr>
            <th>起床時刻</th>
            <td>{{ $user_condition->wake }}</td>
        </tr>
        <tr>
            <th>体温</th>
            <td>{{ $user_condition->temperature }}</td>
        </tr>
        <tr>
            <th>薬</th>
            <td>{{ $user_condition->medicine }}</td>
        </tr>
        <tr>
            <th>食事量</th>
            <td>{{ $user_condition->meal_amount }}</td>
        </tr>
        <tr>
            <th>酸素濃度</th>
            <td>{{ $user_condition->oxygen }}</td>
        </tr>
        <tr>
            <th>血圧</th>
            <td>{{ $user_condition->blood_pressure }}</td>
        </tr>
        @endforeach
    </table>
</div>

{{-- idについてエラーが出るため、試験的にコメントオフ --}}
{{-- <h1>id = {{ $user_conditions->id }} の記録詳細ページ</h1> --}}

{{-- @extends('layouts.app')

@section('content') --}}

{{-- <h1>id = {{ $user_conditions->id }} の記録詳細ページ</h1> --}}

    {{-- メッセージ編集ページへのリンク --}}
    {{-- {!! link_to_route('user_conditions.edit', 'このメッセージを編集', ['user_condition' => $user_conditions->id], ['class' => 'btn btn-light']) !!} --}}

{{-- 
@endsection --}}