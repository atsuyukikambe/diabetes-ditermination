<link href="{{ asset('css/results.css') }}" rel="stylesheet">
<div class="center">
@if($mbgl>=126 && $ogtt>=200)
    <div class="a">糖尿病です</div>
    <h3>残念ながらあなたは糖尿病です。医者の指示に従い、生活習慣の見直しに努めましょう。</h3>
@elseif($mbgl>=126 || $ogtt>=200)
    <div class="a">糖尿病です</div>
    <h3>残念ながらあなたは糖尿病です。医者の指示に従い、生活習慣の見直しに努めましょう。</h3>
@else
    <div class="b">糖尿病の疑いがあります</div>
    <h3>あなたはもしかして糖尿病かもしれません。後日再検査が必要です。</h3>
@endif
</div>