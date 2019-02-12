
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Master
      </div>

      <!-- Inventory Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-home"></i>
          <span>Inventory</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded">
            <a class="collapse-item text-warning" href="<?=base_url('index.php/product/add')?>">New Product</a>
            <a class="collapse-item text-warning" href="<?=base_url('index.php/product/all')?>">Products</a>
          </div>
        </div>
      </li>

      <!-- Customer Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-users"></i>
          <span>Customer</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded">
            <a class="collapse-item text-warning" href="<?=base_url('index.php/customer/add')?>">New Customer</a>
            <a class="collapse-item text-warning" href="<?=base_url('index.php/customer/blacklists')?>">Blacklist Customers</a>
            <a class="collapse-item text-warning" href="<?=base_url('index.php/customer/all')?>">Customers</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Order Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Order</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded">
            <a class="collapse-item text-warning" href="#">New Order</a>
            <a class="collapse-item text-warning" href="#">Invoice</a>
            <a class="collapse-item text-warning" href="#">Receipt</a>
            <a class="collapse-item text-warning" href="#">Feedback</a>
            <a class="collapse-item text-warning" href="#">Report</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#omzet" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-list-alt"></i>
          <span>Omzet</span>
        </a>
        <div id="omzet" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded">
            <a class="collapse-item text-warning" href="#">Income Report</a>
            <a class="collapse-item text-warning" href="#">Bank Transfer Report</a>
            <a class="collapse-item text-warning" href="#">Cash Transfer Report</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#expenses" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-truck"></i>
          <span>Expenses</span>
        </a>
        <div id="expenses" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded">
            <a class="collapse-item text-warning" href="#">Costs</a>
            <a class="collapse-item text-warning" href="#">Repair Expenses</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#jurnalUmum" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-book"></i>
          <span>Jurnal Umum</span>
        </a>
        <div id="jurnalUmum" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded">
            <a class="collapse-item text-warning" href="#">Buku Besar</a>
            <a class="collapse-item text-warning" href="#">Neraca Saldo</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Heading -->
      <div class="sidebar-heading">
        Settings
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#settings" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Customization Settings</span>
        </a>
        <div id="settings" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded">
            <a class="collapse-item text-warning" href="login.html">Term & Condition</a>
            <a class="collapse-item text-warning" href="register.html">Pricing & Payment</a>
            <a class="collapse-item text-warning" href="forgot-password.html">Document</a>
            <a class="collapse-item text-warning" href="forgot-password.html">Email</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#settings" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Account Settings</span>
        </a>
        <div id="settings" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded">
            <a class="collapse-item text-warning" href="login.html">Manage User</a>
            <a class="collapse-item text-warning" href="register.html">Change Password</a>
            <a class="collapse-item text-warning" href="forgot-password.html">Manage Dashboard</a>
            <a class="collapse-item text-warning" href="forgot-password.html">Company Information</a>
          </div>
        </div>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

<?php $this->load->view('layout/topbar') ?>