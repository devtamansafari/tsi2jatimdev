     <!-- Hero -->
     <div id="carouselControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner"></div>
            <div class="carousel-item active">
                <a href="#">
                    <img class="d-block w-100 carousel-img img-fluid" src="<?= base_url() ?>asset-baru/img/banner/sample-carousel2.png" alt="First slide">
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img class="d-block w-100 carousel-img img-fluid" src="<?= base_url() ?>asset-baru/img/banner/sample-carousel2.png" alt="First slide">
                </a>
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
   
   <div class="container py-5">

        <!-- Page title -->
        <!-- <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    Page pre-title
                    <div class="page-pretitle">
                        Home
                    </div>
                    <h2 class="page-title">
                        <?= $selected_category ? "Category: " . get_category($selected_category) : "All News"; ?>
                    </h2>
                </div>
            </div>
        </div> -->

        <?php if (!$posts) : ?>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <div class="alert alert-warning">Post not found. <br> <a href="<?= base_url(); ?>" class="badge bg-danger">Show All</a></div>
                </div>
            </div>
        <?php endif; ?>
        <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active " aria-current="page">
                        <?= $selected_category ? "Category: " . get_category($selected_category) : "All News"; ?>

                        </li>
                    </ol>
                </nav>
        <div class="row row-cards">
            <?php
            foreach ($posts as $post) :
                $thumbnail = $post->post_thumbnail ? $post->post_thumbnail : $this->config->item('post_thumbnail_default');
            ?>
                
                <div class="col-sm-4 mb-4">
                    <div class="card card-sm h-100 rounded">
                        <a href="<?= base_url('post/view/') . $post->post_slug; ?>" class="d-block">
                            <img src="<?= base_url('assets/dist/img/posts/') . $thumbnail  ?>" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <a href="<?= base_url('post/view/') . $post->post_slug; ?>" class="text-decoration-none text-dark">
                                <h4 class="card-title font_card_title mb-0 "><?= $post->post_title; ?></h4>
                            </a>
                            <span class="badge mb-1 font_gotham_light_deskripsi">
                                <svg style="height: 12px;" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M11 3l9 9a1.5 1.5 0 0 1 0 2l-6 6a1.5 1.5 0 0 1 -2 0l-9 -9v-4a4 4 0 0 1 4 -4h4" />
                                    <circle cx="9" cy="9" r="2" />
                                </svg>
                                <?= $post->category_name; ?>
                            </span>
                        </div>
                        <!-- <div class="card-footer bg-white">
                            <div class="d-flex align-items-center">
                                <?php if ($post->avatar) : ?>
                                    <span class="avatar mr-3 rounded-circle" style="background-image: url(<?= base_url('assets/dist/img/users/') . $post->avatar ?>)"></span>
                                <?php else : ?>
                                    <span class="avatar mr-3 rounded-circle bg-blue-lt"><?= user_initial($post->fullname); ?></span>
                                <?php endif; ?>
                                <div>
                                    <div><?= $post->fullname; ?></div>
                                    <div class="text-muted">
                                        <?= custom_date('d F Y', $post->post_date); ?>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <a href="#" class="text-muted">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                            <line x1="8" y1="9" x2="16" y2="9" />
                                            <line x1="8" y1="13" x2="14" y2="13" />
                                        </svg>
                                        <?= $this->comment->number_of_comments($post->post_id); ?>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>