<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">登入</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">註冊</a>
                    @endif
                    @endauth
        </div>
    @endif
        <div>
            <form action="{{ route('animal.search') }}">
                <div >
                    <input type="text" name="keyword" placeholder="尋找動物">
                    <button>搜尋</button>
                </div>
            </form>
            <table border=1>
                <thead>
                <tr>
                    <th width="100" style="text-align: center">種類</th>
                    <th width="100" style="text-align: center">品種</th>
                    <th width="100" style="text-align: center">性別</th>
                    <th width="100" style="text-align: center">年齡</th>
                    <th width="100" style="text-align: center">體型</th>
                    <th width="100" style="text-align: center"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($animals as $animal)
                    <tr>
                        <th style="text-align: center">{{$animal->kind}}</th>
                        <th style="text-align: center">{{$animal->variety}}</th>
                        <th style="text-align: center">{{$animal->gender}}</th>
                        <th style="text-align: center">{{$animal->age}}</th>
                        <th style="text-align: center">{{$animal->size}}</th>
                        <th style="text-align: center"><a href="/application/create/{{$animal->id}}">申請領養</a></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

</div>
</body>
</html>

