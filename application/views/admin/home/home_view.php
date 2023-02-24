<?php $directory = base_url('public/admin') ?>
<?php $this->load->view('admin/includes/body'); ?>
<?php $this->load->view('admin/includes/leftmenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>

                <div class="row">
                    <!-- Inline text elements -->
                    <div class="col">
                    <div class="card mb-4">
                        <h5 class="card-header">Home View</h5>
                        <a style="text-align: right; padding-right: 5px;" href="<?php echo base_url('Home'); ?>">
                            <button type="button" class="btn rounded-pill btn-outline-primary">
                            <span class="tf-icons bx bx-exit"></span>&nbsp; Back
                            </button>
                        </a>
                        <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <td class="align-middle"><small class="text-light fw-semibold">Title</small></td>
                                <td class="py-3">
                                <p class="mb-0"><?php echo $home_view['title']; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle"><small class="text-light fw-semibold">Description</small></td>
                                <td class="py-3">
                                <p class="mb-0"><?php echo $home_view['description']; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle"><small class="text-light fw-semibold">File Upload</small></td>
                                <td class="py-3">
                                <?php if($home_view['file']){ ?>
                                  <img style="width: 100px; height: 50px; object-fit: cover;" src="<?php echo base_url('uploads/admin/home/'.$home_view['file']); ?>">
                                <?php }else{ ?>
                                  <img style="object-fit: cover; width: 200px; height: 55px;" src="<?php echo base_url('public/admin/assets/img/image.jpg'); ?>">              
                                <?php } ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>

<?php $this->load->view('admin/includes/footer'); ?>