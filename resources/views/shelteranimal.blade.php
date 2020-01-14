@extends('refuge2')
@section('content')
<div>
    <div class="w3ls-title">
        <h3 class="title">管理收容動物</h3>
    </div>
        <div>
            <table border=1>
                <thead>
                <tr>
                    <th width="100" height="50" style="text-align: center" valign="center">種類</th>
                    <th width="100" height="50" style="text-align: center" valign="center">品種</th>
                    <th width="100" height="50" style="text-align: center" valign="center">性別</th>
                    <th width="100" height="50" style="text-align: center" valign="center">年齡</th>
                    <th width="100" height="50" style="text-align: center" valign="center">體型</th>
                    <th width="100" height="50" style="text-align: center" valign="center"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($animals as $animal)
                    <tr>
                        <th height="50" style="text-align: center" valign="center">{{$animal->kind}}</th>
                        <th height="50" style="text-align: center" valign="center">{{$animal->variety}}</th>
                        <th height="50" style="text-align: center" valign="center">{{$animal->gender}}</th>
                        <th height="50" style="text-align: center" valign="center">{{$animal->age}}</th>
                        <th height="50" style="text-align: center" valign="center">{{$animal->size}}</th>
                        <th height="50" style="text-align: center" valign="center"><a href="/deleteanimal/{{$animal->id}}">刪除</a></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

</div>
@stop



