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
            <div>
                <h4>
                    <label>姓名：</label>
                    <td>{{Auth::user()->name}}</td>
                </h4>
            </div>
            <div>
                <h4>
                    <label>email：</label>
                    <td>{{Auth::user()->email}}</td>
                </h4>
            </div>
            @if(count($members) == 0)
                <form action="{{ route('member.store')}}" >
                    <div>
                        <h4>
                            <label>出生年月日：</label>
                            <input type="text" name="date" placeholder="出生年月日" >
                        </h4>
                    </div>
                    <div>
                        <h4>
                            <label>身分證字號：</label>
                            <input type="text" name="number" placeholder="身分證字號">
                        </h4>
                    </div>
                    <div>
                        <h4>
                            <label>電話：</label>
                            <input type="text" name="phone" placeholder="電話">
                        </h4>
                    </div>
                    <button>儲存</button>
                </form>
            @elseif(count($members) != 0)
                @foreach($members as $member)
                    <form action="{{ route('member.update',$member->id)}}">
                        <div>
                            <h4>
                                <label>出生年月日：</label>
                                <input type="text" name="date" placeholder="出生年月日" value={{$member->date}}>
                            </h4>
                        </div>
                        <div>
                            <h4>
                                <label>身分證字號：</label>
                                <input type="text" name="number" placeholder="身分證字號" value={{$member->number}}>
                            </h4>
                        </div>
                        <div>
                            <h4>
                                <label>電話：</label>
                                <input type="text" name="phone" placeholder="電話" value={{$member->phone}}>
                            </h4>
                        </div>
                        <button>修改</button>
                    </form>
                @endforeach
            @endif

        </div>

</div>
</body>
</html>


