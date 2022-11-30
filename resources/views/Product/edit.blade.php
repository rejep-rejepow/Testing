@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header font-semibold">paraduct edit</h1>
        <hr class="hr-header">
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-5 offset-md-3">
            <form autocomplete="off" role="form" action="{{route('product.update',['product_id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control input-lg" value="{{$product->name}}" placeholder="category" tabindex="1">
                </div>
                <div class="form-group">
                    <input type="number" name="price" class="form-control input-lg" value="{{$product->price}}" placeholder="price" tabindex="1">
                </div>
                <div class="form-group">
                        Category:
                        <select class="js-example-theme-single form-control" name="category_id">
                            @foreach($category as $c)
                                <option {{$product->category->id==$c->id?'selected':''}} value="{{$c->id}}"> {{$c->name}}</option>
                            @endforeach
                        </select>
                </div>
                <hr class="colorgraph">
                <input type="submit"  class="btn btn-success float-lg-right" value="редактирование категории"/>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".js-example-theme-single").select2({
                theme: "classic",
                "language": {
                    "noResults": function(){
                        return "Gözlege görä hiç zat tapylmady";
                    }
                }
            });
        });
    </script>
    <script src="{{ asset('js/jquery.min.js')}}"> </script>

@endsection('content')
