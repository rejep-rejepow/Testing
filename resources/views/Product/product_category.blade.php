@extends('layouts.app')
@section('content')
    @include('partitions.success')
    <div class="col-lg-12">
        <h1 class="page-header font-semibold">category_products</h1>
        <hr class="hr-header">
    </div>
    <div class="row my-3 mx-1">
        <div class="col-md-12 text-right">
            <a href="{{route('product.create')}}" class="btn bg-navbar btn-dark float-right"> <i class="fa fa-plus-circle"></i> Create product</a>
        </div>
    </div>
    <table id="groups" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">product</th>
            <th scope="col">category</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product_category as $product_cat)
            <tr>
                <th scope="col">{{$product_cat->id}}</th>
                <th scope="col">{{$product_cat->product_id}}</th>
                <th scope="col">{{$product_cat->category_id}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


