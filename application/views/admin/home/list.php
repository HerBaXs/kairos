<?php $directory = base_url('public/admin') ?>
<?php $this->load->view('admin/includes/body'); ?>
<?php $this->load->view('admin/includes/leftmenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>
   
              <div class="col-lg-12">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Home Pages</h5>
                      <a href="<?php echo base_url('Home_Add'); ?>">
                        <button type="button" class="btn rounded-pill btn-outline-primary">
                          <span class="tf-icons bx bx-exit"></span>&nbsp; Add
                        </button>
                      </a>
                    </div>  
                  <div class="table-responsive text-nowrap">
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th>Name</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($home_data as $item){ ?>
                        <tr>
                          <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo substr($item['title'],0,25); ?></strong>
                          </td>
                          <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo substr($item['description'],0,30); ?></strong>
                          </td>
                          <td style="float: left;">
                              <?php if($item['file']){ ?>
                                  <img style="width: 100px; height: 50px; object-fit: cover;" src="<?php echo base_url('uploads/admin/home/'.$item['file']); ?>">
                              <?php }else{ ?>
                                  <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('public/admin/assets/img/image.jpg'); ?>">              
                              <?php } ?>
                          </td>
                          <td>
                            <a onclick="return confirm('Silmək istədiyinizə əmin siniz?')" href="<?php echo base_url('Home_Delete/'.$item['id']); ?>">
                              <button type="button" class="btn rounded-pill btn-icon btn-outline-primary">
                                <span class="tf-icons bx bxs-trash"></span>
                              </button>
                            </a>
                            <a href="<?php echo base_url('Home_View/'.$item['id']); ?>">
                              <button type="button" class="btn rounded-pill btn-icon btn-outline-primary">
                                <span class="tf-icons bx bxs-show"></span>
                              </button>
                            </a>
                            <a href="<?php echo base_url('Home_Edit/'.$item['id']); ?>">
                              <button type="button" class="btn rounded-pill btn-icon btn-outline-primary">
                                <span class="tf-icons bx bxs-edit-alt"></span>
                              </button>
                            </a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!-- Tab 2  -->

              <div class="col-lg-12">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Home Pages</h5>
                    </div>  
                  <div class="table-responsive text-nowrap">
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th>Name</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($home_icon as $item){ ?>
                        <tr>
                          <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $item['title']; ?></strong>
                          </td>
                          <td style="text-align: right;">
                            <a href="<?php echo base_url('Home_Icon_View/'.$item['id']); ?>">
                              <button type="button" class="btn rounded-pill btn-outline-primary">
                                <span class="tf-icons bx bxs-show"></span>&nbsp; Show
                              </button>
                            </a>
                            <a href="<?php echo base_url('Home_Icon_Edit/'.$item['id']); ?>">
                              <button type="button" class="btn rounded-pill btn-outline-primary">
                                <span class="tf-icons bx bxs-edit-alt"></span>&nbsp; Edit
                              </button>
                            </a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                        
<?php $this->load->view('admin/includes/footer'); ?>