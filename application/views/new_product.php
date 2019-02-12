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
                <div class="col-md-8 offset-md-2">
                  <form>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Serial Number Format</label>
                      <select class="form-control">
                        <option>-</option>
                        <option>SS-</option>
                      </select>
                      <small><a href="#" class="text-info">Add serial number format</a></small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Product Name</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Stock</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Price</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php $this->load->view('layout/footer') ?>