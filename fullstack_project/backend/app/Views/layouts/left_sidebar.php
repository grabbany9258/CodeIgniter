<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url(); ?>" class="brand-link">
        <img src="/assets/dist/img/AdminLTELogo.png" alt="TCLD's Canteen" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">TCLD's Canteen</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <a href="<?php echo base_url(); ?>">
                    <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </a>
            </div>
            <div class="info">
                <a href="<?php echo base_url(); ?>" class="d-block">g_rabbany</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <!-- For Dashboard -->

                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>" class="nav-link">
                        <i class="nav-icon fas fa-align-justify"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Widgets
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Layout Options
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation + Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/boxed.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Boxed</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Sidebar <small>+ Custom Area</small></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-topnav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Navbar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-footer.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Footer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Collapsed Sidebar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Products
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('products') ?>" class="nav-link">
                                <i class="far fa-circle-plus nav-icon"></i>
                                <p>All Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('products/new') ?>" class="nav-link">
                                <!-- <a href="products/new" class="nav-link"> -->
                                <i class="far fa-circle-plus nav-icon"></i>
                                <p>New Products</p>
                            </a>
                        </li>



                    </ul>
                </li>

                <!-- For Food -->

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-utensils"></i>
                        <p>
                            Food
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('food') ?>" class="nav-link">
                                <i class="far fa-circle-plus nav-icon"></i>
                                <p>All Food</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('food/new') ?>" class="nav-link">
                                <i class="far fa-circle-plus nav-icon"></i>
                                <p>Add Food</p>
                            </a>
                        </li>


                    </ul>

                </li>


                <!-- For Category  -->

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Food Category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('category') ?>" class="nav-link">
                                <i class="far fa-circle-plus nav-icon"></i>
                                <p>All categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('category/new') ?>" class="nav-link">
                                <i class="far fa-circle-plus nav-icon"></i>
                                <p>Add Category</p>
                            </a>
                        </li>


                    </ul>

                </li>

                <!-- For Orders -->

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Orders
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('orders') ?>" class="nav-link">
                                <i class="far fa-circle-plus nav-icon"></i>
                                <p>All Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('orders/new') ?>" class="nav-link">
                                <i class="far fa-circle-plus nav-icon"></i>
                                <p>Create Orders</p>
                            </a>
                        </li>


                    </ul>

                </li>


                <!-- For Customers list -->

                <li class="nav-item">
                    <a href="#" class="nav-link">

                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            Customers
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="<?= base_url('customers') ?>" class="nav-link">
                                <i class="far fa-paper-plus nav-icon"></i>
                                <p>All Customers</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="<?= base_url('customers/new') ?>" class="nav-link">
                                <i class="far fa-paper-plus nav-icon"></i>
                                <p>Add Customers</p>
                            </a>
                        </li>


                    </ul>


                </li>

                <!-- For Reports -->

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>
                            Reports
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('reports/report2') ?>" class="nav-link">
                                <i class="far fa-paper-plane nav-icon"></i>
                                <p>Report 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('reports/report2') ?>" class="nav-link">
                                <i class="far fa-paper-plane nav-icon"></i>
                                <p>Report 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('reports/stafflist') ?>" class="nav-link">
                                <i class="far fa-paper-plane nav-icon"></i>
                                <p>Office wise staff list</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('reports/orderlist') ?>" class="nav-link">
                                <i class="far fa-paper-plane nav-icon"></i>
                                <p>Month wise Order list</p>
                            </a>
                        </li>


                    </ul>


                </li>


            </ul>
        </nav>

    </div>

</aside>