@extends('layouts.master');
@section('title')
    Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page_title_box d-flex align-items-center justify-content-between">
            <div class="page_title_left">
                <h3 class="f_s_30 f_w_700 text_color_6">Dashboard</h3>
         
    </div>
</div>
<div class="row ">
    <div class="col-lg-8 card_height_200 ">
        <div class="white_card card_height_100 default_border_1px mb_20">
            <div class="white_card_header">
            <div class="box_header m-0">
            <div class="main-title">
            <h3 class="m-0">Tổng số bài viết</h3>
            </div>
            <div class="float-lg-right float-none sales_renew_btns justify-content-end">
            </div>
            </div>
            </div>
            <div class="white_card_body d-flex align-items-center" style="height:140px">
            <h4 class="f_w_900 f_s_60 mb-0 me-2">{{$totalProducts}}</h4>
            <div class="w-100" style="height:100px">
            <canvas width="100%" id="page_views"></canvas>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>
    
</div>
@endsection