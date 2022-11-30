@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <h5 class="page-header font-semibold"> New Product</h5>
        <hr class="hr-header">
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-5 offset-md-3">
            <form autocomplete="off" role="form" action="{{route('product.store')}}" method="POST">
                @csrf
                <label>name</label>
                <div class="form-group">
                    <input type="text" name="name" class="form-control input-lg" placeholder="name" required>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <label>price</label>
                <div class="form-group">
                    <input type="number" name="price" class="form-control input-lg" placeholder="Price" required>
                    <x-input-error :messages="$errors->get('number')" class="mt-2" />
                </div>
                <br>
                <hr class="colorgraph">
                <br>
                <input type="submit" class="btn btn-success float-lg-right" value="Created"/>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $(".js-example-theme-single").select2({
                theme: "classic",
                "language": {
                    "noResults": function () {
                        return "Gözlege görä hiç zat tapylmady";
                    }
                }
            });
        });
    </script>
@endsection
