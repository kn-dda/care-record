{{-- 体調記録の詳細を表示 --}}
@extends('layouts.app')

@section('content')

<h1>id = {{ $user_conditions->id }} のメッセージ詳細ページ</h1>
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $user_conditions->id }}</td>
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