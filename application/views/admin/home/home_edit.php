<?php $directory = base_url('public/admin') ?>
<?php $this->load->view('admin/includes/body'); ?>
<?php $this->load->view('admin/includes/leftmenu'); ?>
<?php $this->load->view('admin/includes/nav'); ?>

                  <style>
                    .iconDevil
                    {
                        display: inline-block;
                        font-size: 40px;
                        width: 10px;
                        text-align: left;
                    }
                    @import url("https://fonts.googleapis.com/css?family=Mukta:700");
                    * {
                    box-sizing: border-box;
                    }
                    *::before, *::after {
                    box-sizing: border-box;
                    }

                    body {
                    /* font-family: "Mukta", sans-serif; */
                    font-size: 1rem;
                    line-height: 1.5;
                    margin: 0;
                    min-height: 100vh;
                    background: #f3f8fa;
                    }

                    button {
                    position: relative;
                    display: inline-block;
                    cursor: pointer;
                    outline: none;
                    border: 0;
                    vertical-align: middle;
                    text-decoration: none;
                    background: transparent;
                    padding: 0;
                    font-size: inherit;
                    font-family: inherit;
                    }
                    button.learn-more {
                    width: 12rem;
                    height: auto;
                    float: right;
                    }
                    button.learn-more .circle {
                    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                    position: relative;
                    display: block;
                    margin: 0;
                    width: 3rem;
                    height: 3rem;
                    background: #696cff;
                    border-radius: 1.625rem;
                    }
                    button.learn-more .circle .icon {
                    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    margin: auto;
                    background: #fff;
                    }
                    button.learn-more .circle .icon.arrow {
                    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                    left: 0.625rem;
                    width: 1.125rem;
                    height: 0.125rem;
                    background: none;
                    }
                    button.learn-more .circle .icon.arrow::before {
                    position: absolute;
                    content: "";
                    top: -0.25rem;
                    right: 0.0625rem;
                    width: 0.645rem;
                    height: 0.625rem;
                    border-top: 0.150rem solid #fff;
                    border-right: 0.150rem solid #fff;
                    transform: rotate(45deg);
                    }
                    button.learn-more .button-text {
                    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    padding: 0.75rem 0;
                    margin: 0 0 0 1.85rem;
                    color: #282936;
                    font-weight: 500;
                    line-height: 1.6;
                    text-align: center;
                    text-transform: uppercase;
                    }
                    button:hover .circle {
                    width: 100%;
                    }
                    button:hover .circle .icon.arrow {
                    background: #fff;
                    transform: translate(1rem, 0);
                    }
                    button:hover .button-text {
                    color: #fff;
                    }

                    /* @supports (display: grid) {
                    body {
                        display: grid;
                        grid-template-columns: repeat(4, 1fr);
                        grid-gap: 0.625rem;
                        grid-template-areas: ". main main ." ". main main .";
                    }

                    #container {
                        grid-area: main;
                        align-self: center;
                        justify-self: center;
                    }
                    }*/

                  </style>

                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Update List</h5>
                      <a href="<?php echo base_url('Home'); ?>">
                        <button type="button" class="btn rounded-pill btn-outline-primary">
                          <span class="tf-icons bx bx-exit"></span>&nbsp; Back
                        </button>
                      </a>
                    </div>
                    <div class="card-body">
                      <form action="<?php echo base_url('Home_Edit_Act/'.$home_edit['id']); ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Title</label>
                          <input type="text" name="title" class="form-control" id="basic-default-fullname" value="<?php echo $home_edit['title']; ?>"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-message">Description</label>
                          <textarea
                            id="basic-default-message"
                            class="form-control"
                            name="desc"
                          ><?php echo $home_edit['description']; ?></textarea>
                        </div>
                                <?php if($home_edit['file']){ ?>
                                  <img style="width: 100px; height: 50px; object-fit: cover;" src="<?php echo base_url('uploads/admin/home/'.$home_edit['file']); ?>">
                                <?php }else{ ?>
                                  <img style="object-fit: cover; width: 200px; height: 55px;" src="<?php echo base_url('public/admin/assets/img/image.jpg'); ?>">              
                                <?php } ?>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">File Uploads</label>
                            <input class="form-control" name="user_file" type="file" id="formFileMultiple" multiple />
                        </div>
                        <button type="submit" class="learn-more">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Update</span>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>

<?php $this->load->view('admin/includes/footer'); ?>