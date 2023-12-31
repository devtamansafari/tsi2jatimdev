<div class="card mb-3">
    <div class="card-body py-3">
        <div class="d-flex">
            <h5 class="card-title m-0 font_card_title">
                Recent Posts
            </h5>
            <div class="ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 12c2 -2.96 0 -7 -1 -8c0 3.038 -1.762 4.383 -2.989 5.642c-1.226 1.26 -2.011 2.598 -2.011 4.358a6 6 0 1 0 12 0c0 -1.532 -.77 -2.94 -1.714 -4c-1.786 3 -3.077 3 -4.286 2z" />
                </svg>
            </div>
        </div>
    </div>
    <div class="list-group list-group-flush">
        <?php foreach ($recent_posts as $rp) : ?>
            <a href="<?= base_url('post/view/') . $rp->post_slug; ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mt-0 mb-1 font_gotham_light_deskripsi"><?= $rp->post_title; ?></h3>
                        <span class="small font_gotham_light_deskripsi">
                            <svg style="height: 16px" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="4" y="5" width="16" height="16" rx="2" />
                                <line x1="16" y1="3" x2="16" y2="7" />
                                <line x1="8" y1="3" x2="8" y2="7" />
                                <line x1="4" y1="11" x2="20" y2="11" />
                                <rect x="8" y="15" width="2" height="2" />
                            </svg>
                            <?= custom_date('d M Y', $rp->post_date); ?>
                            <svg style="height: 16px" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M11 3l9 9a1.5 1.5 0 0 1 0 2l-6 6a1.5 1.5 0 0 1 -2 0l-9 -9v-4a4 4 0 0 1 4 -4h4" />
                                <circle cx="9" cy="9" r="2" />
                            </svg>
                            <?= $rp->category_name; ?>
                        </span>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
<!-- <div class="card mb-3">
    <div class="card-body py-3">
        <div class="d-flex">
            <h5 class="card-title m-0">
                Recent Comments
            </h5>
            <div class="ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                    <line x1="12" y1="11" x2="12" y2="11.01" />
                    <line x1="8" y1="11" x2="8" y2="11.01" />
                    <line x1="16" y1="11" x2="16" y2="11.01" />
                </svg>
            </div>
        </div>
    </div>
    <div class="list-group list-group-flush">
        <?php foreach ($recent_comments as $rc) : ?>
            <a href="<?= base_url('post/view/') . $rc->post_slug . '#c' . $rc->comment_id; ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mt-0 mb-1">"<?= $rc->comment_body; ?>"</h3>
                        <span class="small text-secondary">
                            <span class="avatar avatar-xs bg-blue-lt rounded-circle" style="background-image: url(...)">IT</span>
                            <b><?= $rc->fullname; ?></b> on <b><?= custom_date('d F Y', $rc->comment_date); ?></b>
                        </span>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div> -->