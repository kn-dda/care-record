{{-- 体調記録の詳細を表示 --}}
<div class="text-center">
    <h1>過去の登録詳細一覧</h1>
</div>

{{-- idについてエラーが出るため、試験的にコメントオフ --}}
{{-- <h1>id = {{ $user_conditions->id }} の記録詳細ページ</h1> --}}
    {{-- <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $user_conditions->id }}</td>
        </tr>
        <tr>
            <th>起床時刻</th>
            <td>{{ $user_conditions->wake }}</td>
        </tr>
        <tr>
            <th>体温</th>
            <td>{{ $user_conditions->temperature }}</td>
        </tr>
        <tr>
            <th>薬</th>
            <td>{{ $user_conditions->medicine }}</td>
        </tr>
        <tr>
            <th>食事量</th>
            <td>{{ $user_conditions->meal_amount }}</td>
        </tr>
        <tr>
            <th>酸素濃度</th>
            <td>{{ $user_conditions->oxygen }}</td>
        </tr>
        <tr>
            <th>血圧</th>
            <td>{{ $user_conditions->blood_pressure }}</td>
        </tr>
    </table> --}}


@extends('layouts.app')

@section('content')

<h1>id = {{ $user_conditions->id }} の記録詳細ページ</h1>
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $user_conditions->id }}</td>
        </tr>
        <tr>
            <th>起床時刻</th>
            <td>{{ $user_conditions->wake }}</td>
        </tr>
        <tr>
            <th>体温</th>
            <td>{{ $user_conditions->temperature }}</td>
        </tr>
        <tr>
            <th>薬</th>
            <td>{{ $user_conditions->medicine }}</td>
        </tr>
        <tr>
            <th>食事量</th>
            <td>{{ $user_conditions->meal_amount }}</td>
        </tr>
        <tr>
            <th>酸素濃度</th>
            <td>{{ $user_conditions->oxygen }}</td>
        </tr>
        <tr>
            <th>血圧</th>
            <td>{{ $user_conditions->blood_pressure }}</td>
        </tr>
    </table>
    
    {{-- メッセージ編集ページへのリンク --}}
    {{-- {!! link_to_route('user_conditions.edit', 'このメッセージを編集', ['user_condition' => $user_conditions->id], ['class' => 'btn btn-light']) !!} --}}

@endsection