@extends('refuge')
@section('content')
<div>
    <div class="w3ls-title">
        <h3 class="title">申請領養</h3>
    </div>
    <form action="/application/create/{{ $animal->id }}/store" method="GET">
        <div>
            <div>
                <h4>
                    <label>種類：</label>
                    <td>{{$animal->kind}}</td>
                </h4>
            </div>
            <div>
                <h4>
                    <label>品種：</label>
                    <td>{{$animal->variety}}</td>
                </h4>
            </div>
            <div>
                <h4>
                    <label>性別：</label>
                    <td>{{$animal->gender}}</td>
                </h4>
            </div>
            <div>
                <h4>
                    <label>年齡：</label>
                    <td>{{$animal->age}}</td>
                </h4>
            </div>
            <div  class="book-form">
                <div>
                    <a>領養原因：</a><input type="text" name="reason" placeholder="領養原因" >
                </div>
                <div>
                    <a>居住環境描述：</a><input type="text" name="environment" placeholder="居住環境描述">
                </div>
                <button>送出</button>
            </div>

        </div>
    </form>
</div>

@stop

