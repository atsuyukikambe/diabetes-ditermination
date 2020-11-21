@extends('layouts.app')

@section('content')
<link href="{{ asset('css/ditermination.css') }}" rel="stylesheet">
@if(Auth::check())
    <div class="center">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                {!! Form::open(['route' => 'results.results', $user->id]) !!}
                <h2>1. 朝の空腹時血糖値(mg/dL)</h2>
                <div class="form-group" name="mbgl">
                    {!! Form::text('mbgl', old('mbgl'), ['class' => 'form-control']) !!}
                </div>
                <h2>2. 75g経口ブドウ糖負荷試験(mg/dL)</h2>
                <div class="form-group" name="ogtt">
                    {!! Form::text('ogtt', old('ogtt'), ['class' => 'form-control']) !!}
                </div>
                <h2>3. HbA1c(％)</h2>
                <div class="form-group" name="hba1c">
                    {!! Form::text('hba1c', old('hba1c'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group mt-100"> 
                    {!! Form::submit('結果', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endif
@endsection