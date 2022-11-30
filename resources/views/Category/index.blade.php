@extends('layouts.app')
@section('content')

    @include('partitions.success')
    <div class="col-lg-12">
        <h1 class="page-header font-semibold">categories</h1>
        <hr class="hr-header">
    </div>
    <div class="row my-3 mx-1">
        <div class="col-md-12 text-right">
        <a href="{{route('category.create')}}" class="btn bg-navbar btn-dark float-right"> <i class="fa fa-plus-circle"></i> Create category</a>
        </div>
    </div>
    <table id="groups" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">Parent</th>
            <th scope="col">Operasion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $c)
            <tr>
                <th scope="col">{{$c->id}}</th>
                <th scope="col">{{$c->name}}</th>
                <th scope="col">{{$c->parent_id}}</th>

                <th scope="col"><a class="btn btn-primary btn-md" href="{{route('category.edit', ['category_id'=> $c->id])}}"><i class="fa fa-edit"></i></a>
              <a class="btn btn-primary btn-md" href="{{route('category.products', ['category_id'=> $c->id])}}"><i class="fa fa-info">получение одной категории</i></a></th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


