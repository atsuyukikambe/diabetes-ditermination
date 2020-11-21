@extends('layouts.app')

@section('content')
    <style>
        .text-center{
            font-size: 50px;
            margin-top: 100px;
        }
        .list-unstyled{
            width: 800px;
            margin: 0 auto;
            text-align: center;
            margin-top: 75px;
        }
    </style>
    <div class="text-center">最近の結果</div>
    <div class="row center">
    @if (count($results ?? '')>0)
        @foreach ($results as $result)
        <ul class="list-unstyled">
            <p>朝の空腹時血糖値：   {{ ($result->mbgl) }}mg/dL</p>
            <p>75gブドウ糖負荷試験：    {{ ($result->ogtt) }}mg/dL</p>
            <p>HbA1c：  {{ ($result->hba1c) }}%</p>                  
        </ul>
        @endforeach
    </div>
    @endif
@endsection