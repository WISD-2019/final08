@extends('refuge2')
@section('content')
<div>
    <div class="w3ls-title">
        <h3 class="title">新增收容所公告</h3>
    </div>
    <div>
        <form action="{{ route('post.store')}}">
            <div class="book-form">
                <div >
                    <a>標題：</a><input type="text" name="title" placeholder="標題" >
                </div>
                <div>
                    <a>內容：</a><input type="text" name="context" placeholder="內容">
                </div>
                <button>送出</button>
            </div>
        </form>
    </div>

</div>
@stop


