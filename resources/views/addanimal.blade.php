@extends('refuge2')
@section('content')
<div>
    <div class="w3ls-title">
        <h3 class="title">新增動物</h3>
    </div>
    <div  class="book-form">
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

</div>
@stop

