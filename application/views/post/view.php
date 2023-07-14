     <!-- Hero -->
     <div id="carouselControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner"></div>
        <?php if ($post->post_thumbnail) { ?>
            <div class="carousel-item active">
                <a href="#">
                    <img class="d-block w-100 carousel-img img-fluid" src="<?= base_url('assets/dist/img/posts/') . $post->post_thumbnail ?>" alt="First slide">
                </a>
            <?php }else{ ?>
                <a href="#">
                    <img class="d-block w-100 carousel-img img-fluid" src="<?= base_url('assets/dist/img/posts/no-image.jpg')?>">
                </a>
                <?php }; ?>  
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
    <!-- End Hero -->

<div class="container-fluid">

    <div class="container my-5" >
        
        <div class="row row-cards">
            <div class="col-lg-8">
                <!-- <div class="card mb-2">
                    <div class="card-body">
                        <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
                            <li class="breadcrumb-item font_gotham_light_deskripsi">
                                <a href="<?= base_url(); ?>">
                                  
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item font_gotham_light_deskripsi"><a href="#"><?= $post->category_name; ?></a></li>
                            <li class="breadcrumb-item active font_gotham_light_deskripsi" aria-current="page"><?= $post->post_title; ?></li>
                        </ol>
                    </div>
                </div> -->
                
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="card-title font_card_title text-justify"><?= $post->post_title; ?></h2>
                        <span class="badge bg-green-lt mb-1">
                            <svg style="height: 12px;" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M11 3l9 9a1.5 1.5 0 0 1 0 2l-6 6a1.5 1.5 0 0 1 -2 0l-9 -9v-4a4 4 0 0 1 4 -4h4" />
                                <circle cx="9" cy="9" r="2" />
                            </svg>
                            <?= $post->category_name; ?>
                        </span>
                        <div class="post-meta">
                            <div>
                                <span class="font_gotham_light_deskripsi">
                                    <?php if ($post->avatar) : ?>
                                        <span class="avatar ml-2" style="background-image: url(<?= base_url('assets/dist/img/users/') . $post->avatar ?>)"></span>
                                    <?php else : ?>
                                        <span class="avatar bg-dark-lt"><?= user_initial($post->fullname); ?></span>
                                    <?php endif; ?>
                                    <?= $post->fullname; ?>
                                    </span>
                                <span class="font_gotham_light_deskripsi">|</span>
                                <span class="font_gotham_light_deskripsi">
                                    <?= custom_date('d M Y', $post->post_date); ?>
                                    </span>
                                <span>
                                    
                                    <!-- <?= $this->comment->number_of_comments($post->post_id); ?> Comments -->
                                    </span>
                            </div>
                        </div>
                        
                        <hr class="my-3">
                        <!-- <?php if ($post->post_thumbnail) : ?>
                            <img src="<?= base_url('assets/dist/img/posts/') . $post->post_thumbnail ?>" class="img-fluid mb-2">
                        <?php endif; ?> -->
                        <div class="markdown ">
                            <?= $post->post_body; ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <!-- <button class="btn btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="6" cy="12" r="3" />
                                <circle cx="18" cy="6" r="3" />
                                <circle cx="18" cy="18" r="3" />
                                <line x1="8.7" y1="10.7" x2="15.3" y2="7.3" />
                                <line x1="8.7" y1="13.3" x2="15.3" y2="16.7" />
                            </svg>
                            Share
                        </button> -->
                        <!-- <a href="#" class="btn btn-facebook btn-sm" aria-label="Button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                            </svg>
                            Facebook
                        </a>
                        <a href="#" class="btn btn-twitter btn-sm" aria-label="Button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
                            </svg>
                            Twitter
                        </a>
                        <a href="#" class="btn btn-pinterest btn-sm" aria-label="Button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="3" y="5" width="18" height="14" rx="4" />
                                <path d="M10 9l5 3l-5 3z" />
                            </svg>
                            Pinterest
                        </a> -->
                    </div>
                </div>
        
                <!-- <?php $this->load->view('comment/box'); ?> -->
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('post/sidebar'); ?>
            </div>
        </div>
</div>
</div>