@extends('refuge2')
@section('content')
<div>
    <div class="w3ls-title">
        <h3 class="title">審核領養申請</h3>
    </div>
        <div>
            <table border=1>
                <thead>
                <tr>
                    <th width="100" height="50" style="text-align: center" valign="center">申請人</th>
                    <th width="100" height="50" style="text-align: center" valign="center">領養種類</th>
                    <th width="100" height="50" style="text-align: center" valign="center">領養品種</th>
                    <th width="100" height="50" style="text-align: center" valign="center">領養原因</th>
                    <th width="100" height="50" style="text-align: center" valign="center">居住環境描述</th>
                    <th width="100" height="50" style="text-align: center" valign="center">審核</th>
                    <th width="100" height="50" style="text-align: center" valign="center">意見</th>
                </tr>
                </thead>
                <tbody>
                @foreach($applications as $application)
                    <form action="/application/{{$application->id}}/pass">
                        <tr>
                            @foreach($users as $user)
                                @if($application->member_id===$user->id)
                                    <th height="50" style="text-align: center" valign="center">{{$user->name}}</th>
                                @endif
                            @endforeach
                                @foreach($animals as $animal)
                                    @if($application->animal_id===$animal->id)
                                        <th height="50" style="text-align: center" valign="center">{{$animal->kind}}</th>
                                        <th height="50" style="text-align: center" valign="center">{{$animal->variety}}</th>
                                    @endif
                                @endforeach
                            <th height="50" style="text-align: center" valign="center">{{$application->reason}}</th>
                            <th height="50" style="text-align: center" valign="center">{{$application->environment}}</th>
                                @if($application->pass ==' 0')
                                    <th height="50" style="text-align: center" valign="center"><button>審核通過</button></th>
                                @else
                                    <th height="50" style="text-align: center" valign="center"><a >已審核</a></th>
                                @endif
                                <th height="50" style="text-align: center" valign="center"><input type="text" name="pass_opinion" placeholder="意見" value={{$application->pass_opinion}}></th>

                        </tr>
                    </form>
                @endforeach
                </tbody>
            </table>
        </div>

</div>
@stop


