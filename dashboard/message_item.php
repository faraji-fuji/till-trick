<div class="col-lg-3 col-md-6 mb-2">
    <div class="card  ">
        <div class="card-header"><?= $sender_address ?></div>
        <div class="card-body">
            <h5 class="card-title"><?= $sender_name ?></h5>
            <p class="card-text"><?= $message ?></p>
        </div>
        <div class="card-footer">
            <?php $link = "?button_id=" . "$button_id" . "&action=delete" ?>
            <a href="<?= $link ?>">
                <button type="button" class="btn-sm btn-outline-secondary">Delete</button>
            </a>
        </div>
    </div>
</div>