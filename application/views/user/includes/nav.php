<?php $directory = base_url('public/user/assets/') ?>
<!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header 
    ================================================== -->
    <header class="s-header">

        <div class="row">
            <div class="header-logo">
                <a class="site-logo" href="index.html">
                    <?php foreach($nav_new as $item){ ?>
                        <?php if($item['file']){ ?>
                            <img style="object-fit: cover;" src="<?php echo base_url('uploads/admin/nav/'.$item['file']); ?>" alt="">
                        <?php }else{ ?>
                            <img src="<?php echo base_url('public/admin/assets/img/image.jpg'); ?>" style="width: 23px;">
                        <?php } ?>
                    <?php } ?>
                </a>
            </div>
    
            <nav class="header-nav-wrap">
                <ul class="header-main-nav">
                    <?php foreach($nav_db as $item){ ?>
                    <li class="current"><a class="smoothscroll" href="#home" title="intro">
                        <?php echo $item['intro']; ?></a></li>
                    <li><a class="smoothscroll" href="#about" title="about">
                        <?php echo $item['about']; ?>
                    </a></li>
                    <li><a class="smoothscroll" href="#features" title="features">
                        <?php echo $item['features']; ?>
                    </a></li>
                    <li><a class="smoothscroll" href="#pricing" title="pricing">
                        <?php echo $item['pricing']; ?>
                    </a></li>
                    <li><a class="smoothscroll" href="#download" title="download">
                        <?php echo $item['download']; ?>
                    </a></li>	
                    <?php } ?>
                </ul>
    
                <div class="header-cta">
                    <?php foreach($nav_new as $item) { ?>
                    <a href="#download" class="btn btn--primary header-cta__btn smoothscroll">
                        <?php echo $item['title_button']; ?>
                    </a>
                    <?php } ?>
                </div>
            </nav> <!-- end header-nav-wrap -->
    
            <a class="header-menu-toggle" href="#"><span>Menu</span></a>
        </div>

    </header> <!-- end header -->

