@extends('layouts.master')

@section('title')
    
@endsection

@section('content')
    @if (!empty($_SESSION['errors']))
        <div class="alert alert-warning">
            <ul>
                @foreach ($_SESSION['errors'] as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @php
            unset($_SESSION['errors']);
        @endphp
    @endif
        <h2>Thêm mới danh mục</h2>
    <form action="{{ url('admin/categories/store') }}" enctype="multipart/form-data" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="img_thumbnail" class="form-label">Name</label>
                    <input type="text" class="form-control" id="img_thumbnail" placeholder="name" name="name">
                </div>
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </div>        
        
    </form>
@endsection