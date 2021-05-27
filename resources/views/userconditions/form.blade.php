{{-- 健康状態の新規登録フォーム --}}
{{-- 時間を設定する際には、自由入力を防ぐためにtype="time"を使用する --}}

@extends('layouts.app')

@section('content')

<div class="text-center">
    <h1>新規登録</h1>
</div>

<div class="row">
    <div class="col-sm-6 offset-sm-3">
        
        {!! Form::open(['route' => 'user_condition.store']) !!}
            <div class="form-group">
                {!! Form::label('temperature', '体温') !!}
                {!! Form::text('tenperature', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('medicine', '薬') !!}
                {!! Form::text('medicine', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('meal_amount', '食事量') !!}
                {!! Form::text('meal_amount', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('oxygen', '酸素濃度') !!}
                {!! Form::text('oxygen', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('blood_pressure', '血圧') !!}
                {!! Form::text('blood_pressure', null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
        
    </div>
</div>

@endsection