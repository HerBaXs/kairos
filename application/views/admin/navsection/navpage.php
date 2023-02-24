<?php $directory = base_url('public/admin') ?>
<?php $this->load->view('admin/includes/body'); ?>
<?php $this->load->view('admin/includes/leftmenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>
   
              <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                  <h5 class="card-header">Nav Table</h5>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th>Name</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($select_all_nav as $item){ ?>
                        <tr>
                          <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $item['intro']; ?></strong>
                          </td>
                          <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $item['about']; ?></strong>
                          </td>

                          <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $item['features']; ?></strong>
                          </td>

                          <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $item['pricing']; ?></strong>
                          </td>

                          <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $item['download']; ?></strong>
                          </td>

                          <td>
                            <a href="<?php echo base_url('Nav_Edit/'.$item['id']); ?>">
                              <button type="button" class="btn rounded-pill btn-icon btn-outline-primary">
                                <span class="tf-icons bx bx-edit-alt"></span>
                              </button>
                            </a>
                            <!-- <a href="#">
                              <button type="button" class="btn rounded-pill btn-icon btn-outline-primary">
                                <span class="tf-icons bx bx-trash-alt"></span>
                              </button>
                            </a> -->
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                          <!-- Tab 2 -->
              <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                  <h5 class="card-header">Nav Table</h5>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Image</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($select_all_up as $item){ ?>
                        <tr>
                          <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $item['title_button']; ?></strong>
                          </td>

                          <td style="float: left;">
                              <?php if($item['file']){ ?>
                                  <img style='width: 200px; height: 55px; object-fit: cover;' src="<?php echo base_url('uploads/admin/nav/'.$item['file']); ?>">
                              <?php }else{ ?>
                                  <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('public/admin/assets/img/image.jpg'); ?>">              
                              <?php } ?>
                          </td>

                          <td style="text-align: center;">
                            <a href="<?php echo base_url('Nav_Upload/'.$item['id']); ?>">
                              <button type="button" class="btn rounded-pill btn-icon btn-outline-primary">
                                <span class="tf-icons bx bx-edit-alt"></span>
                              </button>
                            </a>
                            <!-- <a href="#">
                              <button type="button" class="btn rounded-pill btn-icon btn-outline-primary">
                                <span class="tf-icons bx bx-trash-alt"></span>
                              </button>
                            </a> -->
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
<?php $this->load->view('admin/includes/footer'); ?>