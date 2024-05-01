@extends('layouts.main')
@section('maincontents')
<div class="container mt-4">
    <h1 class="text-primary">Add New Item</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="/">Home</a> </li>
        <li class="breadcrumb-item active">New Items</li>
    </ol>
<form action="/templates/store" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control @if($errors->has('name')){{'is-invalid'}} @endif "  placeholder="Enter Product Name..." value="{{old('name')}}">
                        @if($errors->has('name'))
                        <div class="invalid-feedback">{{$errors->first('name')}}</div>
                        @endif
        </div>
    </div>
    <!-- Row -->
    <div class="row mt-3">
        <div class="col-md-3 mt-3">
            <label for="" class="form-label fw-semibold">M.R.P</label>
            <input type="text" name="mrp" id="mrp" class="form-control @if($errors->has('mrp')) {{'is-invalid'}} @endif" placeholder="Enter M.R.P..." value="{{old('mrp')}}">
            @if ($errors->has('mrp'))
            <div class="invalid-feedback">{{$errors->first('mrp')}}</div>
            @endif
        </div>
        <div class="col-md-3 mt-3">
            <label for="" class="form-label fw-semibold">Selling Price</label>
            <input type="text" name="price" id="price" class="form-control @if($errors->has('price')) {{'is-invalid'}} @endif" placeholder="Enter Selling Price..." value="{{old('price')}}">

            @if ($errors->has('price'))
                <div class="invalid-feedback">{{$errors->first('price')}}</div>
            @endif
        </div>

    </div>
    <!-- Row -->

    <div class="row mt-3">
        <div class="col-md-6 mt-3">
            <label for="" class="form-label fw-semibold">Description</label>
            <textarea name="textarea" id="textarea" class="form-control @if($errors->has('name')) {{'is-invalid'}} @endif" placeholder="Enter Description..." style="resize: none;">{{old('textarea')}}</textarea>
            @if ($errors->has('textarea'))
                <div class="invalid-feedback">{{$errors->first('textarea')}}</div>
            @endif
        </div>
    </div>
    <!-- Row -->
    <div class="row mt-3">
        <div class="col-md-6">
            <label for="" class="form-label fw-semibold">Choose Your Image</label>
            <input type="file" name="file" id="file" class="form-control  @if($errors->has('name')) {{'is-invalid'}} @endif" value="{{old('file')}}">
            @if ($errors->has('file'))
            <div class="invalid-feedback">{{$errors->first('file    ')}}</div>
        @endif
        </div>
    </div>
    <!-- Row -->
    <div class="button mt-3">
        <button class="btn btn-primary btn-sm" nane="save" id="save">Save</button>
        <input class="btn btn-danger btn-sm" type="reset" name="clear" id="clear" value="clear">    
    </div>
</form>
</div>
@endsection