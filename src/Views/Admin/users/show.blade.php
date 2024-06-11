@extends('layouts.master')

@section('title')
    Danh sách User
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h1 class="m-0">Chi tiết User</h1>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Trường</th>
                                    <th>Giá Trị</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($user as $key=>$value)
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>
                                            {{$value}}
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
