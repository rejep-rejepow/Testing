@extends('layouts.app')
@section('content')


    <div class="col-lg-12">
        <h1 class="page-header font-semibold">Category edit</h1>
        <hr class="hr-header">
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-5 offset-md-3">
            <form autocomplete="off" role="form" action="{{route('category.update',['category_id'=>$category->id])}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control input-lg" value="{{$category->name}}" placeholder="category" tabindex="1">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
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
@endsection
