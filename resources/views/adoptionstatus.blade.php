@extends('refuge2')
@section('content')
<div>
    <div class="w3ls-title">
        <h3 class="title">查看領養動物狀態</h3>
    </div>
        <div>

            <table border=1>
                <thead>
                <tr>
                    <th width="100" height="50" style="text-align: center" valign="center">動物編號</th>
                    <th width="100" height="50" style="text-align: center" valign="center">回報日期</th>
                    <th width="100" height="50" style="text-align: center" valign="center">現狀</th>
                </tr>
                </thead>
                @foreach($adoptionstatuses as $adoptionstatus)
                <tbody>
                    <tr>
                        <th height="50" style="text-align: center" valign="center">{{$adoptionstatus->animal_id}}</th>
                        <th height="50" style="text-align: center" valign="center">{{$adoptionstatus->return_date}}</th>
                        <th height="50" style="text-align: center" valign="center">{{$adoptionstatus->status}}</th>
                    </tr>

                </tbody>
                @endforeach
            </table>
        </div>

</div>
@stop

