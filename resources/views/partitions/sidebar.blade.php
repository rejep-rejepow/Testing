<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">Задание</div>
    <div class="list-group">

        <a href="{{route('products')}}" tabindex="-1" title="products" class="list-group-item list-group-item-action bg-light"> products
            <i class="fa fa-tachometer-alt float-right"></i></a>

        <a href="{{route('categories')}}" tabindex="-1" title="categories" class="list-group-item list-group-item-action bg-light">categories
            <i class="fa fa-tachometer-alt float-right"></i></a>

        <a href="{{route('categories')}}" tabindex="-1" title="categories" class="list-group-item list-group-item-action bg-light">категорий c вложенными товарами
            <i class="fa fa-tachometer-alt float-right"></i></a>

    </div>
</div>

<script type="text/javascript">
    function logout(event){
        event.preventDefault();
        var check = confirm("Do you really want to logout?");
        if(check){
            document.getElementById('logout-form').submit();
        }
    }
</script>

