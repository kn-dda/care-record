{{-- 記録新規作成フォーム --}}
{{-- 時間を設定する際には、自由入力を防ぐためにtype="time"を使用する --}}

@extends('layouts.app')

@section('content')

<div class="center jumbotron">
    <h3>-- 今日の体調を記録する --</h3>
    <br>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">
        
            {!! Form::open(['route' => 'user_condition.store']) !!}
                <div class="form-group row">
                    {!! Form::label('wake', '●起床時刻') !!}
                    {!! Form::text('wake', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group row">
                    {!! Form::label('temperature', '●体温') !!}
                    {!! Form::text('temperature', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group row">
                    {!! Form::label('medicine', '●薬') !!}
                    {!! Form::text('medicine', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group row">
                    {!! Form::label('meal_amount', '●食事量') !!}
                    {!! Form::text('meal_amount', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group row">
                    {!! Form::label('oxygen', '●酸素濃度') !!}
                    {!! Form::text('oxygen', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group row">
                    {!! Form::label('blood_pressure', '●血圧') !!}
                    {!! Form::text('blood_pressure', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('記録保存', ['class' => 'btn btn-success btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection