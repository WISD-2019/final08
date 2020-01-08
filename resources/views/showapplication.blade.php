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

            <table border=1>
                <thead>
                <tr>
                    <th width="100" style="text-align: center">申請人</th>
                    <th width="100" style="text-align: center">領養種類</th>
                    <th width="100" style="text-align: center">領養品種</th>
                    <th width="100" style="text-align: center">領養原因</th>
                    <th width="100" style="text-align: center">居住環境描述</th>
                    <th width="100" style="text-align: center">審核</th>
                    <th width="100" style="text-align: center">意見</th>
                </tr>
                </thead>
                <tbody>
                @foreach($applications as $application)
                    <form action="/application/{{$application->id}}/pass">
                        <tr>
                            @foreach($users as $user)
                                @if($application->member_id===$user->id)
                                    <th style="text-align: center">{{$user->name}}</th>
                                @endif
                            @endforeach
                                @foreach($animals as $animal)
                                    @if($application->animal_id===$animal->id)
                                        <th style="text-align: center">{{$animal->kind}}</th>
                                        <th style="text-align: center">{{$animal->variety}}</th>
                                    @endif
                                @endforeach
                            <th style="text-align: center">{{$application->reason}}</th>
                            <th style="text-align: center">{{$application->environment}}</th>
                                @if($application->pass ==' 0')
                                    <th style="text-align: center"><button>審核通過</button></th>
                                @else
                                    <th style="text-align: center"><a >已審核</a></th>
                                @endif
                                <th style="text-align: center"><input type="text" name="pass_opinion" placeholder="意見" value={{$application->pass_opinion}}></th>

                        </tr>
                    </form>
                @endforeach
                </tbody>
            </table>
        </div>

</div>
</body>
</html>


