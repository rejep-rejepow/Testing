@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <h5 class="page-header font-semibold"> New Category</h5>
        <hr class="hr-header">
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-5 offset-md-3">
            <form autocomplete="off" role="form" action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control input-lg" placeholder="name" required>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <br>
                <div class="form-group">
                        Parents:
                        <select class="js-example-theme-single form-control" name="parent_id">
                            @foreach($parent as $p)
                                <option value="{{$p->id}}">{{$p->name}}</option>
                            @endforeach
                        </select>
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
