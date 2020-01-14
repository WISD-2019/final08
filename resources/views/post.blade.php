@extends('refuge')
@section('content')
<div>
    <div class="w3ls-title">
        <h3 class="title">收容所公告</h3>
    </div>
        <div>

            <table border=1>
                <thead>
                <tr>
                    <th width="150" height="50" style="text-align: center" valign="center">收容所</th>
                    <th width="100" height="50" style="text-align: center" valign="center">標題</th>
                    <th width="200" height="50" style="text-align: center" valign="center">內容</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        @foreach($shelters as $shelter)
                            @if($post->shelter_id === $shelter->id)
                                <th height="50" style="text-align: center" valign="center">{{$shelter->name}}</th>
                            @endif
                        @endforeach
                        <th height="50" style="text-align: center" valign="center">{{$post->title}}</th>
                        <th height="50" style="text-align: center" valign="center">{{$post->context}}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

</div>
@stop



