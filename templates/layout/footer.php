<div class="footer">
    <div class="footer-article padding-top-bottom">
        <div class="wrap-content d-hiden d-flex flex-wrap align-items-start justify-content-between">
            <div class="footer-news">
                <a class="logo-header mb-4 d-block" href="">
                    <img class="lazy" onerror="this.src='<?= THUMBS ?>/216x64x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/216x64x1/<?= UPLOAD_PHOTO_L . $logoFooter['photo'] ?>" alt="logo" title="logo" />
                </a>
                <div class="footer-info"><?= htmlspecialchars_decode($footer['content' . $lang]) ?></div>
            </div>
            <div class="footer-news">
                <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 2); ?>
            </div>
            <div class="footer-news">
                <?= $addons->set('footer-map', 'footer-map', 6); ?>
            </div>
        </div>
    </div>
    <div class="footer-powered">
        <div class="wrap-content d-hiden d-flex flex-wrap align-items-center justify-content-between">
            <div class="copyright">Copyright 2023 © <?= $copyright['name' . $lang] ?>. Design by Nina.vn</div>
            <div class="statistic">
                <span>Online: <?= $online ?></span>
                <span class="filter_month">Tháng: <?= $counter['month'] ?></span>
                <span>Tổng: <?= $counter['total'] ?></span>
            </div>
        </div>
    </div>
    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle-zl kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img data-src="assets/images/zl.png" alt="zalo" class="lazy"></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle-phone kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i id="box-img-hotline"><img data-src="assets/images/hl.png" alt="Hotline" class="lazy"></i>
</a>
<a class="btn-vt btn-frame text-decoration-none" href="<?= $optsetting['link_googlemaps'] ?>">
    <div class="animated infinite zoomIn kenit-alo-circle-phone kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i id="box-img-hotline"><img data-src="assets/images/chiduong.png" alt="Hotline" class="lazy"></i>
</a>
<?php if ($deviceType != 'mobile') { ?>
    <div class="hotline-fix">
        <a href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['link_googlemaps']); ?>" class="text-decoration-none">HOTLINE<span><?= $optsetting['hotline'] ?></span></a>
    </div>
<?php } ?>