@extends('refuge')
@section('content')
<div>
    <div class="w3ls-title">
        <h3 class="title">新增領養狀況</h3>
    </div>
    <form action="{{ route('adoptionstatus.store')}}">
        <div class="book-form">
            <div>
                <a>動物編號：</a><input type="text" name="animal_id" placeholder="動物編號" >
            </div>
            <div>
                <a>現狀：</a><input type="text" name="status" placeholder="現狀">
            </div>
            <button>送出</button>
        </div>
    </form>
</div>
@stop

