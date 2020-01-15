@extends('refuge3')
@section('content')
<div>
    <div class="w3ls-title">
        <h3 class="title">新增收容所</h3>
    </div>
    <div  class="book-form">
        <form action="{{ route('admin.storeshelter')}}">
            <div>
                <div>
                    <a>名稱：</a><input type="text" name="name" placeholder="名稱" >
                </div>
                <div>
                    <a>電話：</a><input type="text" name="phone" placeholder="電話">
                </div>
                <div>
                    <a>地址：</a><input type="text" name="address" placeholder="地址">
                </div>
                <div>
                    <a>公/私立：</a><input type="text" name="public" placeholder="公/私立">
                </div>
                <button>送出</button>
            </div>
        </form>
    </div>

</div>
@stop

