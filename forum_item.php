<div>
    <div class="d-flex p-3 border-bottom">
        <img src="assets/avatars/<?= $profile_photo ?>" class="rounded-circle" height="50" alt="Avatar" loading="lazy" />
        <div class="d-flex w-100 ps-3">
            <div>
                <a href="">
                    <h6 class="text-body">
                        <?= $sender_name ?>
                        <span class="small text-muted font-weight-normal"><?= $message_sender ?></span>
                        <span class="small text-muted font-weight-normal"> • </span>
                        <span class="small text-muted font-weight-normal"><?= $message_time ?></span>
                    </h6>
                </a>
                <p style="line-height: 1.2;">
                    <?= $message_content ?>
                </p>
            </div>
        </div>
    </div>
</div>