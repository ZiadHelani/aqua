<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('images/aqua-logo.png')}}" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aqua Care</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!--<div class="user-panel mt-3 pb-3 mb-3 d-flex">-->
      <!--  <div class="image">-->
      <!--    <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">-->
      <!--  </div>-->
      <!--  <div class="info">-->
      <!--    <a href="#" class="d-block">{{ Auth::user()->name }}</a>-->
      <!--  </div>-->
      <!--</div>-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            {{-- Dashboard  --}}
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link {{$title == 'home' ? 'active' : ''}}">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              <i class="fa-solid fa-gauge" style="padding-right: 10px"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          {{-- end Dashboard  --}}

            <li class="nav-item {{$title == 'Header Image' || $title == 'Edit Header Image' || $title == 'Nearby Store' || $title == 'About Us' || $title == 'Edit About Us Images' || $title == 'Product Images' || $title == 'Our Mission' || $title == 'Our Vision' || $title == 'App Details' || $title == 'About Us Images' || $title == 'Our Products' || $title == 'Our Client' || $title == 'Edit Our Client' ? 'menu-open' : 'menu-close'}}">
            <a href="#" class="nav-link {{$title == 'Header Image' || $title == 'Edit Header Image' || $title == 'Nearby Store' || $title == 'About Us' || $title == 'Edit About Us Images' || $title == 'Product Images' || $title == 'Our Mission' || $title == 'Our Vision' || $title == 'App Details' || $title == 'About Us Images' || $title == 'Our Products' || $title == 'Our Client' || $title == 'Edit Our Client' ? 'active' : ''}}">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              <i class="fa-solid fa-house" style="padding-right: 10px"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('header_image')}}" class="nav-link {{$title == 'Header Image' || $title == 'Edit Header Image' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Header Image</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('nearby_store')}}" class="nav-link {{$title == 'Nearby Store' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nearby Store</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('about_us')}}" class="nav-link {{$title == 'About Us' || $title == 'Edit About Us Images' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('about_us_images')}}" class="nav-link {{$title == 'About Us Images' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us Images</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('our_products')}}" class="nav-link {{$title == 'Our Products' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Our Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('product_images')}}" class="nav-link {{$title == 'Product Images' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products Images</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('our_mission')}}" class="nav-link {{$title == 'Our Mission' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Our Mission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('our_vision')}}" class="nav-link {{$title == 'Our Vision' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Our Vision</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('app_details')}}" class="nav-link {{$title == 'App Details' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>App Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('our_client')}}" class="nav-link {{$title == 'Our Client' || $title == 'Edit Our Client' ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Our Client</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- end Home Page  --}}
          {{-- About Us Page  --}}
          <li class="nav-item {{$title == 'Header Image About Us' || $title == 'Header About Us' ? 'menu-open' : 'menu-close'}}">
            <a href="#" class="nav-link {{$title == 'Header Image About Us' || $title == 'Header About Us' ? 'active' : ''}}">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              <i class="fa-regular fa-address-card" style="padding-right: 10px"></i>
              <p>
                About Us
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('header_about_us')}}" class="nav-link {{$title == 'Header About Us' ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Header About Us</p>
                    </a>
                  </li>
                <li class="nav-item">
                    <a href="{{route('header_image_about_us')}}" class="nav-link {{$title == 'Header Image About Us' ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>About Us Details</p>
                    </a>
                  </li>
            </ul>
        </li>
          {{-- end About Us Page  --}}
          {{-- Application Page  --}}
          {{--<li class="nav-item {{$title == 'Header Image Applications' || $title == 'Header Applications' || $title == 'Applications' ? 'menu-open' : 'menu-close'}}">
            <a href="#" class="nav-link {{$title == 'Header Image Applications' || $title == 'Header Applications' || $title == 'Applications' ? 'active' : ''}}">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i>
              <i class="fa-solid fa-gamepad" style="padding-right: 10px"></i>
              <p>
                Applications
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('header_image_applications')}}" class="nav-link {{$title == 'Header Image Applications' ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Header Image</p>
                    </a>
                  </li>
                <li class="nav-item">
                    <a href="{{route('header_details_applications')}}" class="nav-link {{$title == 'Header Applications' ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Header Details</p>
                    </a>
                  </li>
                <li class="nav-item">
                    <a href="{{route('applications')}}" class="nav-link {{$title == 'Applications' ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Applications</p>
                    </a>
                  </li>
            </ul>--}}
          {{-- end Application Page --}}

          {{-- Products Page  --}}
          <li class="nav-item {{$title == 'Categories' || $title == 'Categories Header Image' || $title == 'Products' ? 'menu-open' : 'menu-close'}}">
            <a href="#" class="nav-link {{$title == 'Categories' || $title == 'Categories Header Image' || $title == 'Products' ? 'active' : ''}}">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              <i class="fa-brands fa-product-hunt" style="padding-right: 10px;"></i>
              <p>
                Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('categories_header_image')}}" class="nav-link {{$title == 'Categories Header Image' ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Header Image</p>
                    </a>
                  </li>
                <li class="nav-item">
                    <a href="{{route('categories')}}" class="nav-link {{$title == 'Categories' ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Categories</p>
                    </a>
                  </li>
                <li class="nav-item">
                    <a href="{{route('products')}}" class="nav-link {{$title == 'Products' ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Products</p>
                    </a>
                  </li>
            </ul>
        </li>
          {{-- end Products Page  --}}

        {{-- Contact Page  --}}
        <li class="nav-item {{$title == 'Header Image Contact' || $title == 'Contact Info' ? 'menu-open' : 'menu-close'}}">
            <a href="#" class="nav-link {{$title == 'Header Image Contact' || $title == 'Contact Info' ? 'active' : ''}}">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              <i class="fa-solid fa-address-book" style="padding-right: 10px"></i>
              <p>
                Contact
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('header_image_contact')}}" class="nav-link {{$title == 'Header Image Contact' ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Header Image</p>
                    </a>
                  </li>
                <li class="nav-item">
                    <a href="{{route('contact_info')}}" class="nav-link {{$title == 'Contact Info' ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Contact Info</p>
                    </a>
                  </li>
            </ul>
        </li>
        {{-- end Contact Page  --}}

        {{-- Shop Page  --}}
        <li class="nav-item {{$title == 'Orders' || $title == 'Show Order' || $title == 'Shippings' || $title == 'Edit Shippings' ? 'menu-open' : 'menu-close'}}">
            <a href="#" class="nav-link {{$title == 'Orders' || $title == 'Show Order' || $title == 'Shippings' || $title == 'Edit Shippings' ? 'active' : ''}}">
              <i class="fa-solid fa-shop" style="padding-right: 10px"></i>
              <p>
                Shop
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('shippings')}}" class="nav-link {{$title == 'Shippings' || $title == 'Edit Shippings' ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Shippings</p>
                    </a>
                  </li>
                <li class="nav-item">
                    <a href="{{route('orders')}}" class="nav-link {{$title == 'Orders' || $title == 'Show Order' ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Orders</p>
                    </a>
                  </li>
            </ul>
        </li>
        {{-- end Shop Page  --}}

          {{-- Logout  --}}
          <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="fa-solid fa-right-from-bracket" style="padding-right: 10px; margin-left:3px;"></i>
              {{-- <i class="nav-icon fas fa-sign-out-alt"></i> --}}
            <p>
                Logout
            </p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </a>
          </li>
          {{-- end logout --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
