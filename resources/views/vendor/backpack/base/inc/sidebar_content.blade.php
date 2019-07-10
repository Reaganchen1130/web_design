<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
        integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fab fa-youtube"></i>
                <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

<li><a href="#"><i class="fa fa-clipboard"></i>
                <span>Order</span></a></li>
<li class="treeview">
        <a href="#"><i class="fa fa-user"></i> <span>User</span> </a>
        <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-user"></i>
                                <span>{{ trans('user.users') }}</span></a></li>
                <li><a href="#"><i class="fa fa-group"></i>
                                <span>Roles</span></a></li>
                <li><a href="#"><i class="fa fa-key"></i>
                                <span>Permissions</span></a></li>
        </ul>
</li>
<li class="treeview">
        <a href="#"><i class="fas fa-folder"></i> <span>Product</span> </a>
        <ul class="treeview-menu">
                <li><a href="{{route('addproduct')}}"><i class="fa fa-plus"></i>
                                <span>add product</span></a></li>
                <li><a href="{{route('showproduct')}}"><i class="far fa-list-alt"></i>
                                <span>show product</span></a></li>
        </ul>
</li>