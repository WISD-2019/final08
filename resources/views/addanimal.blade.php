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
    <form action="{{ route('staff.storeanimal')}}">
        <div>
            <div>
                <a>種類：</a><input type="text" name="kind" placeholder="種類" >
            </div>
            <div>
                <a>品種：</a><input type="text" name="variety" placeholder="品種">
            </div>
            <div>
                <a>性別：</a><input type="text" name="gender" placeholder="性別">
            </div>
            <div>
                <a>年齡：</a><input type="text" name="age" placeholder="年齡">
            </div>
            <div>
                <a>體型：</a><input type="text" name="size" placeholder="體型">
            </div>
            <button>送出</button>
        </div>
    </form>
</div>
</body>
</html>

