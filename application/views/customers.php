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
                        <th>Fullname</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Registered On</th>
                        <th>Act</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Lionel Messi</td>
                        <td>Bandung</td>
                        <td>089707</td>
                        <td>leo@gmail.com</td>
                        <td>19 Januari 2018</td>
                        <td>
                          <a href="#" class="btn btn-sm btn-success">Detail</a> 
                          <a href="#" class="btn btn-sm btn-warning">Edit</a> 
                          <a href="#" class="btn btn-sm btn-danger">Delete</a> 
                        </td> 
                      </tr>
                        <td>2</td>
                        <td>C Ronaldo</td>
                        <td>Jakarta</td>
                        <td>08730</td>
                        <td>cr7@gmail.com</td>
                        <td>15 Mei 2019</td>
                        <td>
                          <a href="#" class="btn btn-sm btn-success">Detail</a> 
                          <a href="#" class="btn btn-sm btn-warning">Edit</a> 
                          <a href="#" class="btn btn-sm btn-danger">Delete</a> 
                        </td>  
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php $this->load->view('layout/footer') ?>