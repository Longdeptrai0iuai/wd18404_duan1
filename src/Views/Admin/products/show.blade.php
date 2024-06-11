@extends('layouts.master')

@section('title')
Chi tiết bài viết
@endsection
@section('content')
@foreach ($product as $item)
        
    
<div class="contentctnew">
    <div class="contentleft">
        <h1>{{$item['title_post']}}</h1>
    <p>{{$item['overview']}}</p>
    <img src="{{asset($item['img_title'])}}" alt="" width="800px">
    <p>{{$item['content']}}</p>

    </div>
   <div class="contentright">

   </div> 
</div>
@endforeach
@endsection