<?php $directory = base_url('public/admin') ?>
<?php $this->load->view('admin/includes/body'); ?>
<?php $this->load->view('admin/includes/leftmenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>

                <div class="row">
                    <!-- Inline text elements -->
                    <div class="col">
                    <div class="card mb-4">
                        <h5 class="card-header">Home Icon View</h5>
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
                                <p class="mb-0"><?php echo $home_icon['title']; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle"><small class="text-light fw-semibold">Link</small></td>
                                <td class="py-3">
                                <p class="mb-0"><?php echo $home_icon['link']; ?></p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>

<?php $this->load->view('admin/includes/footer'); ?>