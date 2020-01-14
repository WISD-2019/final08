@extends('refuge')
@section('content')
<div>
    <div class="w3ls-title">
        <h3 class="title">會員資料</h3>
    </div>
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
@stop


