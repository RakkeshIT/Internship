@extends('layouts.main')
@section('maincontents')
<div class="container mt-5">
    <h1 class="text-primary">Home Page</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Home</li>
        <li class="breadcrumb-item "><a href="templates/inputpage">New Items</a> </li>
    </ol>
    <div class="table-responsive">

        <table class="table table-bordered text-center fw-semibold">
            <thead class="">
                <tr>
                    <td>S.no</td>
                    <td>Image</td>
                    <td>Name</td>
                    <td>M.R.P</td>
                    <td> Selling Price</td>
                    <td>Desc</td>
                    <td>Edit</td>
                    <td>Remove</td>
                </tr>
            </thead>
            <tbody>
                @foreach ( $displaydata as $Product)
                @php
                    $index = ($displaydata->currentPage() - 1) * $displaydata->perPage() + $loop->iteration;
                @endphp
                         
                <tr>
                    <td>{{$index}}</td>
                    <td><img src="brandimages/{{$Product->file }} " style="width=50px; height:50px; object-fit:contain" alt=""></td>
                    <td><a href="templates/{{$Product->id}}/show">{{$Product->name }}</a></td>
                    <td>{{$Product->mrp }}</td>
                    <td>{{$Product->price }}</td>
                    <td>{{$Product->textarea }}</td>
                    <td><a href="templates/{{$Product->id}}/edit" class="btn btn-success btn-sm"><i class="bi bi-pen"></i> Edit</a></td>
                    <td><a href="templates/{{$Product->id}}/delete" onclick="return confirm('Are You Sure Delete This Product ?')" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> Delete</a></td>
                </tr>
                @endforeach
             </tbody>
        </table>
        {{ $displaydata->links()}}
    </div>
</div>
@endsection