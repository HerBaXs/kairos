<?php $directory = base_url('public/admin') ?>
<?php $this->load->view('admin/includes/body'); ?>
<?php $this->load->view('admin/includes/leftmenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>
   
                <div class="col-lg-12">
                    <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">About Pages</h5>
                        <a href="<?php echo base_url('About_Add'); ?>">
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
                            <?php foreach($about_data as $item){ ?>
                            <tr>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo substr($item['title'],0,25); ?></strong>
                            </td>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo substr($item['descon'],0,30)."..."; ?></strong>
                            </td>
                            <td>
                                <a onclick="return confirm('Silmək istədiyinizə əmin siniz?')" href="<?php echo base_url('About_Delete/'.$item['id']); ?>">
                                <button type="button" class="btn rounded-pill btn-icon btn-outline-primary">
                                    <span class="tf-icons bx bxs-trash"></span>
                                </button>
                                </a>
                                <a href="<?php echo base_url('About_View/'.$item['id']); ?>">
                                <button type="button" class="btn rounded-pill btn-icon btn-outline-primary">
                                    <span class="tf-icons bx bxs-show"></span>
                                </button>
                                </a>
                                <a href="<?php echo base_url('About_Edit/'.$item['id']); ?>">
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

                <!-- Tab 2 -->

                <div class="col-lg-12">
                    <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">About Pages</h5>
                        <a href="<?php echo base_url('About_Desc_Add'); ?>">
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
                            <?php foreach($about_desc as $item){ ?>
                            <tr>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo substr($item['title'],0,25); ?></strong>
                            </td>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo substr($item['descon'],0,30)."..."; ?></strong>
                            </td>
                            <td>
                                <a onclick="return confirm('Silmək istədiyinizə əmin siniz?')" href="<?php echo base_url('About_Desc_Delete/'.$item['id']); ?>">
                                <button type="button" class="btn rounded-pill btn-icon btn-outline-primary">
                                    <span class="tf-icons bx bxs-trash"></span>
                                </button>
                                </a>
                                <a href="<?php echo base_url('About_Desc_View/'.$item['id']); ?>">
                                <button type="button" class="btn rounded-pill btn-icon btn-outline-primary">
                                    <span class="tf-icons bx bxs-show"></span>
                                </button>
                                </a>
                                <a href="<?php echo base_url('About_Desc_Edit/'.$item['id']); ?>">
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

                <!-- Tab 3 -->

                <div class="col-lg-12">
                    <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">About Pages</h5>
                        <a href="<?php echo base_url('About_Desc_Add'); ?>">
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
                            <?php //foreach($about_desc as $item){ ?>
                            <tr>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php //echo substr($item['title'],0,25); ?></strong>
                            </td>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php //echo substr($item['descon'],0,30)."..."; ?></strong>
                            </td>
                            <td>
                                <a onclick="return confirm('Silmək istədiyinizə əmin siniz?')" href="<?php //echo base_url('About_Desc_Delete/'.$item['id']); ?>">
                                <button type="button" class="btn rounded-pill btn-icon btn-outline-primary">
                                    <span class="tf-icons bx bxs-trash"></span>
                                </button>
                                </a>
                                <a href="<?php //echo base_url('About_Desc_View/'.$item['id']); ?>">
                                <button type="button" class="btn rounded-pill btn-icon btn-outline-primary">
                                    <span class="tf-icons bx bxs-show"></span>
                                </button>
                                </a>
                                <a href="<?php //echo base_url('About_Desc_Edit/'.$item['id']); ?>">
                                <button type="button" class="btn rounded-pill btn-icon btn-outline-primary">
                                    <span class="tf-icons bx bxs-edit-alt"></span>
                                </button>
                                </a>
                            </td>
                            </tr>
                            <?php //} ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>

<?php $this->load->view('admin/includes/footer'); ?>