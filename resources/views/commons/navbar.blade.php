<header class="mb-4">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <nav class="navbar navbar-expand-sm navbar-dark">
        {{-- トップページへのリンク --}}
        <a class="text-white">{!! link_to_route('welcome', '糖尿病診断', [], ['class' => 'white']) !!}</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            {{-- TOPページへのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('welcome', 'TOP') !!}</li>
                            <li class="dropdown-divider"></li>
                            {{-- 過去の結果へのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('past.past', '過去の結果', ['user' => Auth::id()]) !!}</li>
                            <li class="dropdown-divider"></li>
                            {{-- ログアウトへのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                        </ul>
                    </li>
                @else
                    {{-- ユーザ登録ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('signup.get', '新規登録', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>