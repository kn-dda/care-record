{{-- IDをクリックすることで表示される詳細ページ --}}
@extends('layouts.app')

@section('content')


{{ $user_condition = 'user_condition' }}

<h1>id: {{ $user_condition->id }} の記録編集ページ</h1>
    <div class="row">
        <div class="col-6">
            {{-- {!! Form::model($user_conditions, ['route' => ['user_condition.update', $user_conditions->id], 'method' => 'put']) !!} --}}
                <div class="form-group row">
                    {!! Form::label('wake', '●起床時刻') !!}
                    {!! Form::time('wake', null, ['class' => 'form-control']) !!}
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
                    {!! Form::label('oxygen', '●酸素濃度（%）') !!}
                    {!! Form::number('oxygen', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group row">
                    {!! Form::label('blood_pressure', '●血圧') !!}
                    {!! Form::number('blood_pressure', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('更新', ['class' => 'btn btn-success']) !!}
                {!! Form::close() !!}
        </div>
    </div>

@endsection