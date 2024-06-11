@extends('layouts.master')

@section('title')
    Quản lý Sản phẩm
@endsection

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h1 class="m-0">Danh Sách Danh Mục Bài Viết</h1>
                    </div>
                </div>
            </div>
            <div class="white_card_body">
                <div class="table-responsive">
                    @if (isset($_SESSION['status']) && $_SESSION['status'])
                    <div class="alert alert-success">{{ $_SESSION['msg'] }}</div>
            
                    @php
                        unset($_SESSION['status']);
                        unset($_SESSION['msg']);
                    @endphp
                @endif
            
                @if (isset($_SESSION['status']) && !$_SESSION['status'])
                    <div class="alert alert-warning">{{ $_SESSION['msg'] }}</div>
            
                    @php
                        unset($_SESSION['status']);
                        unset($_SESSION['msg']);
                    @endphp
                @endif
            
                <a href="{{ url("admin/categories/create") }}" class="btn btn-primary">Thêm mới</a>
            
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
            
                        @foreach ($categories as $cate)
                            <tr>
                                <td>{{ $cate['id'] }}</td>
                                <td>{{ $cate['name'] }}</td>

                                <td>
                                    <a href="{{ url("admin/categories/{$cate['id']}/edit") }}" class="btn btn-warning">Sửa</a>
                                    <a href="{{ url("admin/categories/{$cate['id']}/delete") }}"
                                        onclick="return confirm('Chắc chắn xóa không?');" class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
            
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
  
</div>

  
@endsection