{{-- 健康状態の登録フォーム --}}
{{-- 時間を設定する際には、自由入力を防ぐためにtype="time"を使用する --}}
{!! Form::open(['route' => 'usercondition.store']) !!}
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