@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <div class="center">
            <div class="my-4 text-left">
                <h1>糖尿病とは</h1>
            </div>
            <h3>
                <p>糖尿病とは血液中の血糖値が常に高い状態が続く疾患です。糖尿病は１型糖尿病と２型糖尿病の二種類に分かれます。</p>
　              <p>１型糖尿病はインスリンを出すβ細胞が障害されることによって、インスリンがほとんど出なくなり、その結果、頻尿や急激な体重減少などの症状が現れます。</p>
　              <p>２型糖尿病は１型とは違って作られたインスリンが十分機能せず（インスリン抵抗性）、感染症のリスクが高くなり、手足の感覚が低下するなどの症状が現れます。日本人のほとんどがこの２型糖尿病にかかり、主な原因としては過食・過飲・運動不足・ストレスなどの生活習慣が原因です。</p>
　              <p>ここではあなたが糖尿病であるか、またはどれだけ糖尿病に近いかを簡易的に測定することが可能です。</p>
            </h3>
        </div>
        <div class="container">
            <div class="row">
                @if (\Auth::check())
                {!! link_to_route('ditermination.ditermination', '判定スタート', ['id' => Auth::id()], ['class' => 'btn-square-shadow']) !!}
                @else
                {!! link_to_route('signup.get', '判定スタート', [], ['class' => 'btn-square-shadow']) !!}
                @endif
            </div>
        </div>
@endsection