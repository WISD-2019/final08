@extends('refuge3')
@section('content')
<div>
    <div class="w3ls-title">
        <h3 class="title">收容所資訊</h3>
    </div>
        <div>
            <table border=1>
                <thead>
                <tr>
                    <th width="200" height="50" style="text-align: center" valign="center">名稱</th>
                    <th width="200" height="50" style="text-align: center" valign="center">電話</th>
                    <th width="200" height="50" style="text-align: center" valign="center">地址</th>
                    <th width="200" height="50" style="text-align: center" valign="center">公/私立</th>
                    <th width="200" height="50" style="text-align: center" valign="center"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($shelters as $shelter)
                    <tr>
                        <th height="50" style="text-align: center" valign="center">{{$shelter->name}}</th>
                        <th height="50" style="text-align: center" valign="center">{{$shelter->phone}}</th>
                        <th height="50" style="text-align: center" valign="center">{{$shelter->address}}</th>
                        <th height="50" style="text-align: center" valign="center">
                            @if($shelter->public === 1)
                                公立
                            @else
                                私立
                            @endif
                        </th>
                        <th height="50" style="text-align: center" valign="center"><a href="/deleteshelter/{{$shelter->id}}">刪除</a></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

</div>
@stop


