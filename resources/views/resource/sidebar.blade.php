<div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-normal">
            @yield('sidetitle')
          </a>
        </div>
        <ul class="nav">
          <li class="{{ (request()->is('admin')) ? 'active' : '' }} ">
            <a href="/admin">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{ (request()->is('products')) ? 'active' : '' }}">
            <a href="{{ route('products.index') }}">
              <i class="tim-icons icon-app"></i>
              <p>Product</p>
            </a>
          </li>
          <li>
            <a href="./map.html">
              <i class="tim-icons icon-bag-16"></i>
              <p>Order</p>
            </a>
          </li>
          </ul>
      </div>
    </div>