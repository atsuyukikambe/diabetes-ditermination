@extends('layouts.app')

@section('content')
    <style>
        .text-center{
            font-size: 50px;
            margin-top: 100px;
        }
        .list-unstyled{
            width: auto;
            text-align: center;
            margin: 75px auto 20px auto;
        }
        p{
            width: auto;
            margin: auto;
        }
        .center{
            margin-bottom: 20px;
            font-size: 30px;
        }
    </style>
    <div class="text-center">最近の結果</div>
    @if (count($results ?? '')>0)
        @foreach ($results as $result)
        <ul class="list-unstyled">
            <a class="text-left">{{ $result->created_at }}</a>
            <div class="center">
                @if (($result->hba1c)>=6.5)
                    @if (($result->mbgl)>=126 && ($result->ogtt)>=200)
                    糖尿病です
                    @elseif (($result->mbgl)>=126 || ($result->ogtt)>=200)
                    糖尿病です
                    @else
                    糖尿病の疑いがあります
                    @endif
                @else 
                    @if (($result->mbgl)>=126 && ($result->ogtt)>=200)
                    糖尿病の疑いがあります
                    @elseif (($result->mbgl)>=126 || ($result->ogtt)>=200)
                    糖尿病の疑いがあります
                    @elseif (($result->mbgl)<110 && ($result->ogtt)<140)
                    糖尿病ではありません
                    @elseif (($result->mbgl)<110 || ($result->ogtt)<140)
                    糖尿病ではありません
                    @else
                    糖尿病に近いです
                    @endif
                @endif
            </div>
            <p>朝の空腹時血糖値：   {{ ($result->mbgl) }}mg/dL</p>
            <p>75gブドウ糖負荷試験：    {{ ($result->ogtt) }}mg/dL</p>
            <p>HbA1c：  {{ ($result->hba1c) }}%</p>                  
        </ul>
        @endforeach
    @endif
@endsection