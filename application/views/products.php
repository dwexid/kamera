<?php $this->load->view('layout/header') ?>
<?php $this->load->view('layout/sidebar') ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <div class="card">
            <div class="bg-info text-white card-header">
              Add New Product
            </div>
            <div class="card-body">
              <div class="row">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Serial Number</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Stok</th>
                        <th>Registered On</th>
                        <th>Act</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>SS0001</td>
                        <td>Cannon</td>
                        <td>3000000</td>
                        <td>30</td>
                        <th>15 Mei 2019</th>
                        <th>
                          <a href="#" class="btn btn-sm btn-success">Detail</a> 
                          <a href="#" class="btn btn-sm btn-warning">Edit</a> 
                          <a href="#" class="btn btn-sm btn-danger">Delete</a> 
                        </th>  
                      </tr>
                        <td>2</td>
                        <td>SS0002</td>
                        <td>Cannon 2</td>
                        <td>3000000</td>
                        <td>30</td>
                        <th>15 Mei 2019</th>
                        <th>
                          <a href="#" class="btn btn-sm btn-success">Detail</a> 
                          <a href="#" class="btn btn-sm btn-warning">Edit</a> 
                          <a href="#" class="btn btn-sm btn-danger">Delete</a> 
                        </th>  
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php $this->load->view('layout/footer') ?>