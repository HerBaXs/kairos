<?php $directory = base_url('public/user/assets/') ?>
<?php $this->load->view('user/includes/body'); ?>
<?php $this->load->view('user/includes/nav'); ?>
    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="<?php echo $directory ?>images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <div class="home-content__left">
                    <?php foreach($home_db as $item){ ?>
                    <h1>
                    <?php echo $item['title']; ?>
                    </h1>
    
                    <h3>
                    <?php echo $item['description']; ?>
                    </h3>
    
                    <div class="home-content__btn-wrap">
                        <a href="#download" class="btn btn--primary home-content__btn smoothscroll">
                            <?php foreach($nav_new as $item){ ?>
                                <?php echo $item['title_button']; ?>
                            <?php } ?>
                        </a>
                    </div>
                </div> <!-- end home-content__left-->

                <div class="home-content__right">
                    <img src="images/hero-app-screens-800.png" srcset="<?php echo $directory ?>images/hero-app-screens-800.png 1x, images/hero-app-screens-1600.png 2x">
                </div> <!-- end home-content__right -->
                    <?php } ?>
            </div> <!-- end home-content__main -->
            <ul class="home-content__social">
                <?php foreach($home_icon as $item){ ?>
                    <li>
                        <a href="<?php echo $item['link']; ?>" target="_blank">
                            <?php echo $item['title']; ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>

        </div> <!-- end home-content -->

        <a href="#about" class="home-scroll smoothscroll">
            <span class="home-scroll__text">Scroll</span>
            <span class="home-scroll__icon"></span>
        </a> 

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <?php foreach($about_title as $item) ?>
                <h1 class="display-1">
                    <?php echo $item['title']; ?>
                </h1>
                <p class="lead">
                    <?php echo $item['descon']; ?>
                </p>
            </div>
        </div> <!-- end section-header -->

        <div class="row wide about-desc" data-aos="fade-up">

            <div class="col-full slick-slider about-desc__slider">
              <?php foreach($about_desc as $item){ ?>
                <div class="about-desc__slide">
                    <h3 class="item-title">
                        <?php echo $item['title']; ?>
                    </h3>
                    <p>
                        <?php echo $item['descon']; ?>
                    </p>
                </div>  <!-- end about-desc__slide -->
              <?php } ?>
            </div> <!-- end about-desc__slider -->
            
        </div> <!-- end about-desc -->

    </section> <!-- end s-about -->


    <!-- about-how
    ================================================== -->
    <section id="about-how" class="s-about-how">

        <div class="row">
           <div class="col-full video-bg" data-aos="fade-up">

                <div class="shadow-overlay"></div>

                <a class="btn-video" href="https://github.com/HerBaXs" target="_blank" data-lity>
                    <span class="video-icon"></span>
                </a>

                <div class="stats">
                    <div class="item-stats">
                        <span class="item-stats__num">
                            3.1M
                        </span>
                        <span class="item-stats__title">
                            Downloads
                        </span>
                    </div> <!-- end item-stats -->
                    <div class="item-stats">
                        <span class="item-stats__num">
                            24K
                        </span>
                        <span class="item-stats__title">
                            Positive Reviews
                        </span>
                    </div> <!-- end item-stats -->
                </div>
           </div> <!-- end video-bg -->
        </div>

        <div class="row process-wrap">

            <h2 class="display-2 text-center" data-aos="fade-up">How The App Works?</h2>

            <div class="process" data-aos="fade-up">
                <div class="process__steps block-1-2 block-tab-full group">

                    <div class="col-block step">
                        <h3 class="item-title">Sign-Up</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                        </p> 
                    </div>

                    <div class="col-block step">
                        <h3 class="item-title">Create</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                        </p> 
                    </div>
               
                    <div class="col-block step">
                        <h3 class="item-title">Compose</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                        </p> 
                    </div>

                    <div class="col-block step">
                        <h3 class="item-title">Send</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                        </p> 
                    </div>  

                </div> <!-- end process__steps -->
           </div> <!-- end process -->
        </div> <!-- end about-how -->

    </section> <!-- end s-about-how -->


    <!-- features
    ================================================== -->
    <section id="features" class="s-features target-section">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                    Loaded With Features You Would Absolutely Love.
                </h1>
                <p class="lead">
                    Et nihil atque ex. Reiciendis et rerum ut voluptate. Omnis molestiae nemo est. 
                    Ut quis enim rerum quia assumenda repudiandae molestiae cumque qui. Amet repellat 
                    omnis ea.
                </p>
            </div>
        </div> <!-- end section-header -->

        <div class="row features block-1-3 block-m-1-2">

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-upload"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Cloud Based</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-video-camera"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Voice & Video</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-shield"></i>
                </div>  
                <div class="item-feature__text">
                    <h3 class="item-title">Always Secure</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-lego-block"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Play Games</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-chat"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Group Chat</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>
    
            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-wallet"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Payments</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

        </div> <!-- end features -->

        <div class="testimonials-wrap" data-aos="fade-up">

            <div class="row">
                <div class="col-full testimonials-header">
                    <h2 class="display-2">Our Users Love Our App!</h2>
                </div>
            </div>

            <div class="row testimonials">

                <div class="col-full slick-slider testimonials__slider">

                    <div class="testimonials__slide">
                        <img src="<?php echo $directory ?>images/avatars/user-03.jpg" alt="Author image" class="testimonials__avatar">
                        
                        <p>Qui ipsam temporibus quisquam velMaiores eos cumque distinctio nam accusantium ipsum. 
                        Laudantium quia consequatur molestias delectus culpa facere hic dolores aperiam. Accusantium praesentium corpori.</p>

                        <div class="testimonials__author">
                            <span class="testimonials__name">Naruto Uzumaki</span>
                            <a href="#0" class="testimonials__link">@narutouzumaki</a>
                        </div>
                    </div> <!-- end testimonials__slide -->

                    <div class="testimonials__slide">
                        <img src="<?php echo $directory ?>images/avatars/user-05.jpg" alt="Author image" class="testimonials__avatar">
                        
                        <p>Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                        Nisi eaque consequatur. Quasi voluptas eius distinctio. Atque eos maxime. Qui ipsam temporibus quisquam vel.</p>
                        
                        <div class="testimonials__author">
                            <span class="testimonials__name">Sasuke Uchiha</span>
                            <a href="#0" class="testimonials__link">@sasukeuchiha</a>
                        </div>
                    </div> <!-- end testimonials__slide -->

                    <div class="testimonials__slide">
                        <img src="<?php echo $directory ?>images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                        
                        <p>Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                        Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.</p>

                        <div class="testimonials__author">
                            <span class="testimonials__name">Shikamaru Nara</span>
                            <a href="#0" class="testimonials__link">@shikamarunara</a>
                        </div>
                    </div> <!-- end testimonials__slide -->
                    
                </div> <!-- end testimonials__slider -->

            </div> <!-- end testimonials -->

        </div> <!-- end testimonials-wrap -->

    </section> <!-- end s-features -->


    <!-- pricing
    ================================================== -->
    <section id="pricing" class="s-pricing target-section">

        <div class="row section-header align-center" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                   Our Simple <br> Straight-Forward Pricing.
                </h1>
                <p class="lead">
                    Et nihil atque ex. Reiciendis et rerum ut voluptate. Omnis molestiae nemo est. 
                    Ut quis enim rerum quia assumenda repudiandae non cumque qui. Amet repellat 
                    omnis ea.
                </p>
            </div>
        </div> <!-- end section-header -->

        <div class="row plans block-1-2 block-m-1-2 block-tab-full stack">

            <div class="col-block item-plan" data-aos="fade-up">
                <div class="item-plan__block"> 

                    <div class="item-plan__top-part">
                        <h3 class="item-plan__title">Free</h3>
                        <p class="item-plan__price">$0</p>
                        <p class="item-plan__per">Forever</p>
                    </div>

                    <div class="item-plan__bottom-part">
                        <ul class="item-plan__features">
                            <li><span>5GB</span> Storage</li>
                            <li><span>10GB</span> Bandwidth</li>
                            <li><span>30</span> Email Accounts</li>
                            <li>Backup & Restore</li>
                        </ul>

                        <a class="btn btn--primary large full-width" href="#0">Get Started</a>
                    </div>  
                
                </div>
            </div> <!-- end item-plan -->

            <div class="col-block item-plan item-plan--popular" data-aos="fade-up">
                <div class="item-plan__block"> 

                    <div class="item-plan__top-part">
                        <h3 class="item-plan__title">Pro Plan</h3>
                        <p class="item-plan__price">$10</p>
                        <p class="item-plan__per">Per Month</p>
                    </div>

                    <div class="item-plan__bottom-part">
                        <ul class="item-plan__features">
                            <li><span>500GB</span> Storage</li>
                            <li><span>Unlimited</span> Bandwidth</li>
                            <li><span>50</span> Email Accounts</li>
                            <li>Backup & Restore</li>
                        </ul>

                        <a class="btn btn--primary large full-width" href="#0">Get Started</a>
                    </div>
                
                </div>
            </div> <!-- end item-plan -->

        </div> <!-- end plans -->

    </section> <!-- end s-pricing -->


    <!-- download
    ================================================== -->
    <section id="download" class="s-download target-section">

        <div class="row section-header align-center" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                    Join Our Community of 3,000,000+ Users.
                </h1>
                <p class="lead">
                    Et nihil atque ex. Reiciendis et rerum ut voluptate. Omnis molestiae nemo est. 
                    Ut quis enim rerum quia assumenda repudiandae non cumque qui. Amet repellat 
                    omnis ea.
                </p>
            </div>
        </div> <!-- end section-header -->

        <div class="row">
            <div class="col-full text-center">
                <ul class="download-badges" data-aos="fade-up">
                    <li><a href="#0" title="" class="badge-appstore">App Store</a></li>
                    <li><a href="#0" title="" class="badge-googleplay">Play Store</a></li>
                </ul>
            </div> 
        </div>

        <div class="row download-bottom-image" data-aos="fade-up">
            <img src="<?php echo $directory ?>images/app-screen-1400.png" 
                srcset="<?php echo $directory ?>images/app-screen-600.png 600w, 
                        <?php echo $directory ?>images/app-screen-1400.png 1400w, 
                        <?php echo $directory ?>images/app-screen-2800.png 2800w" 
                sizes="(max-width: 2800px) 100vw, 2800px" 
                alt="App Screenshots"> 
        </div>

    </section> <!-- end s-download -->


<?php $this->load->view('user/includes/footer'); ?>