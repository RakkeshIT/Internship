@extends('layouts.main')
@section('maincontents')

<div class="container mt-5">
    <h1 class="text-primary">Product Details</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Product View</li>
    </ol>
    <div class="card mb-5">
        <div class="row">
            <div class="col-md-6">
                <img src="/brandimages/{{$Product->file }}" class="card-img-top img-fluid" alt="">
            </div>

            <div class="col-md-6">
                <div class="card-body">
                    <h4 class="card-title text-primary fw-bold">{{$Product->name}}</h4>
                    <hr>
                    <p class="fw-bold card-text">M.R.P <small class="fw-semibold text-success">{{$Product->mrp}}</small></p>
                    <p class="fw-bold card-text">Selling Price<small class="fw-semibold text-success"> {{$Product->price}}</small>
                    </p>
                    <p class="card-text">{{$Product->textarea}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection