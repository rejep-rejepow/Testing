@extends('layouts.app')

@section('content')
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
            <th scope="col">name</th>
            <th scope="col">Price</th>
            <th scope="col">category</th>
            <th scope="col">Operasions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="col">{{$product->id}}</th>
                <th scope="col">{{$product->name}}</th>
                <th scope="col">{{$product->price}}</th>
                <th scope="col">{{$product->category->name}}</th>
                <th scope="col">
                    <a class="btn btn-danger btn-md" href="{{route('product.delete', ['product_id'=> $product->id])}}"><i class="fa fa-delete"> delete</i> </a>
                    <a class="btn btn-primary btn-md" href="{{route('product.edit', ['product_id'=> $product->id])}}"><i class="fa fa-edit"></i></a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


