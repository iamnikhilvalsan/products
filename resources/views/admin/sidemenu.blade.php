<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li
                @if(Route::current()->getName() === 'admin')
                    class="active"
                @endif>
                <a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <li class="treeview
                @if(Route::current()->getName() === 'add-products' || Route::current()->getName() === 'view-products' || Route::current()->getName() === 'edit-products' || Route::current()->getName() === 'addons-products')
                    active
                @endif" >
                <a href="#" title="">
                    <i class="fa fa-th-large"></i> <span>Manage Products</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li
                        @if(Route::current()->getName() === 'add-products')
                            class="active"
                        @endif>
                        <a href="{{ route('add-products') }}" title=""><i class="fa fa-circle-o"></i> Add Products</a>
                    </li>
                    <li @if(Route::current()->getName() === 'view-products' || Route::current()->getName() === 'edit-products' || Route::current()->getName() === 'addons-products')
                            class="active"
                        @endif>
                        <a href="{{ route('view-products') }}" title=""><i class="fa fa-circle-o"></i> View Products</a>
                    </li>
                </ul>
            </li>
            <li class="treeview
                @if(Route::current()->getName() === 'add-category' || Route::current()->getName() === 'view-category' || Route::current()->getName() === 'edit-category')
                    active
                @endif" >
                <a href="#" title="">
                    <i class="fa fa-th-list"></i> <span>Manage Addon Category</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li
                        @if(Route::current()->getName() === 'add-category')
                            class="active"
                        @endif>
                        <a href="{{ route('add-category') }}" title=""><i class="fa fa-circle-o"></i> Add Addon Category</a>
                    </li>
                    <li @if(Route::current()->getName() === 'view-category' || Route::current()->getName() === 'edit-category')
                            class="active"
                        @endif>
                        <a href="{{ route('view-category') }}" title=""><i class="fa fa-circle-o"></i> View Addon Category</a>
                    </li>
                </ul>
            </li>
            <li class="treeview
                @if(Route::current()->getName() === 'add-addons' || Route::current()->getName() === 'view-addons' || Route::current()->getName() === 'edit-addons')
                    active
                @endif" >
                <a href="#" title="">
                    <i class="fa fa-th"></i> <span>Manage Addons</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li
                        @if(Route::current()->getName() === 'add-addons')
                            class="active"
                        @endif>
                        <a href="{{ route('add-addons') }}" title=""><i class="fa fa-circle-o"></i> Add Addons</a>
                    </li>
                    <li @if(Route::current()->getName() === 'view-addons' || Route::current()->getName() === 'edit-addons')
                            class="active"
                        @endif>
                        <a href="{{ route('view-addons') }}" title=""><i class="fa fa-circle-o"></i> View Addons</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>