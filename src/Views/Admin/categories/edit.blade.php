@extends('layouts.master')
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

    @if (isset($_SESSION['status']) && $_SESSION['status'])
        <div class="alert alert-success">{{ $_SESSION['msg'] }}</div>

        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);
        @endphp
    @endif
       <h2>Cập nhật danh mục: {{ $category['name'] }}</h2> 
        
    <form action="{{ url("admin/categories/{$category['id']}/update") }}" enctype="multipart/form-data" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" value="{{ $category['name'] }}" name="name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

       
    </form>
@endsection