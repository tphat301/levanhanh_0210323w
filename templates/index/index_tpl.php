<!-- GIỚI THIỆU -->
<div class="about" data-aos="fade-up">
    <div class="wrap-content d-hiden">
        <div class="row">
            <div class="about-left col-md-6">
                <div class="mb-2">
                    <img class="lazy" onerror="this.src='<?= THUMBS ?>/234x66x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/234x66x1/<?= UPLOAD_PHOTO_L . $logoAbout['photo'] ?>" alt="logo" title="logo" />
                </div>
                <div class="about-title">
                    <span><?= $about['name' . $lang] ?></span>
                </div>
                <?php if (!empty($sloganAbout)) { ?>
                    <div class="about-slogan">
                        <span>
                            <?= $sloganAbout['name' . $lang] ?>
                        </span>
                    </div>
                <?php } ?>
                <div class="about-desc">
                    <?= $about['desc' . $lang] ?>
                </div>
                <div class="mb-3">
                    <a href="gioi-thieu" class="new-more" title="Đọc thêm">Đọc thêm</a>
                </div>
                <div>
                    <a class="hl_dl edit_height" data-toggle="modal" data-target="#datlichhen" title="Đặt lịch hẹn">
                        Đặt lịch hẹn
                    </a>
                </div>
            </div>
            <div class="about-right col-md-6">
                <div class="about-img1">
                    <img class="lazy" onerror="this.src='<?= THUMBS ?>/423x376x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/423x376x1/<?= UPLOAD_NEWS_L . $about['photo'] ?>" alt="<?= $about['name' . $lang] ?>" title="<?= $about['name' . $lang] ?>" />
                </div>
                <div class="about-img2">
                    <img class="lazy" onerror="this.src='<?= THUMBS ?>/148x181x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/148x181x1/<?= UPLOAD_NEWS_L . $about['photo1'] ?>" alt="<?= $about['name' . $lang] ?>" title="<?= $about['name' . $lang] ?>" />
                </div>
                <div class="about-img3">
                    <img class="lazy" onerror="this.src='<?= THUMBS ?>/323x376x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/323x376x1/<?= UPLOAD_NEWS_L . $about['photo2'] ?>" alt="<?= $about['name' . $lang] ?>" title="<?= $about['name' . $lang] ?>" />
                </div>
                <div class="about-img4">
                    <img src="assets/images/ab_img.png" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TÌNH TRẠNG RĂNG -->
<div class="status_tooth" data-aos="fade-up">
    <div class="wrap-content d-hiden">
        <div class="title-main"><span>Tình trạng răng</span></div>
        <div class="slogan-sv"><span><?= $slogan['name' . $lang] ?></span></div>
        <div class="status_tooth-list">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:30" data-sm-items="2:30" data-md-items="2:30" data-lg-items="3:30" data-xlg-items="4:30" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-tooth">
                <?php foreach ($toothStatus as $k => $v) { ?>
                    <div class="status_tooth-item">
                        <a class="status_tooth-links" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                            <img class="lazy" onerror="this.src='<?= THUMBS ?>/275x250x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/275x250x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                        </a>
                        <a class="status_tooth-title" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                            <?= $v['name' . $lang] ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="mt-4 text-center">
                <a class="hl_dl edit_height" href="#register_message" title="Đăng ký tư vấn">
                    Đăng ký tư vấn
                </a>
            </div>
        </div>
    </div>
</div>

<!-- QUY TRÌNH -->
<?php if (count($stepList)) { ?>
    <div class="step">
        <div class="wrap-content d-hiden">
            <div class="step-title-main"><span class="text-white">Quy trình đạt chuẩn</span></div>
            <div class="slogan-sv">
                <span class="text-white">
                    <?= $slogan['name' . $lang] ?>
                </span>
            </div>
            <div class="step-title_bx d-flex">
                <div class="owl-page owl-ed owl-carousel owl-theme" data-xsm-items="2:30" data-sm-items="2:30" data-md-items="2:30" data-lg-items="3:30" data-xlg-items="4:30" data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-step">
                    <?php foreach ($stepList as $k => $v) { ?>
                        <div class="step-title text-center <?= $k % 2 == 0 ? '' : 'act' ?>">
                            <span class="step-title_boder <?= $k == 0 ? 'active' : '' ?>" data-step="<?= $k + 1 ?>"><?= $v['name' . $lang] ?></span>
                        </div>
                    <?php } ?>
                </div>
                <div class="control-step control-owl transition"></div>
            </div>

            <div class="step-content">
                <?php foreach ($stepList  as $kl => $vl) {
                    $steps = $cache->get("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and id_list = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by id asc", array('quy-trinh', $vl['id']), 'result', 7200);
                ?>
                    <div class="step-content-tab <?= $kl == 0 ? 'active' : '' ?>" data-step="<?= $kl + 1 ?>">
                        <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:30" data-sm-items="2:30" data-md-items="2:30" data-lg-items="3:30" data-xlg-items="4:30" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-step1">
                            <?php foreach ($steps as $key => $value) { ?>
                                <div class="step-items">
                                    <div class="step-picture">
                                        <img class="lazy" onerror="this.src='<?= THUMBS ?>/275x300x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/275x300x1/<?= UPLOAD_NEWS_L . $value['photo'] ?>" alt="<?= $value['name' . $lang] ?>" title="<?= $value['name' . $lang] ?>" />
                                    </div>
                                    <div class="step-info">
                                        <div class="step-detail">
                                            <span>Bước <?= ++$key ?></span>
                                        </div>
                                        <span class="text-white text-uppercase"><?= $value['name' . $lang] ?></span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

<!-- DỊCH VỤ & BẢNG GIÁ -->
<?php if (count($services)) { ?>
    <div id="service" class="wrap-product wrap-content d-hiden" data-aos="fade-up">
        <div class="title-main"><span>Dịch vụ & bảng giá</span></div>
        <div class="slogan-sv"><span><?= $slogan['name' . $lang] ?></span></div>
        <div class="paging-product"></div>
    </div>
<?php } ?>

<!-- BANNER -->
<div class="banner">
    <div>
        <img class="lazy" onerror="this.src='<?= THUMBS ?>/1366x350x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/1366x350x1/<?= UPLOAD_PHOTO_L . $banner['photo'] ?>" alt="<?= $banner['name' . $lang] ?>" title="<?= $banner['name' . $lang] ?>" />
    </div>
</div>

<!-- ĐỘI NGŨ & CHUYÊN GIA -->
<div class="team">
    <div class="wrap-content d-hiden">
        <div class="title-main"><span>Đội ngũ & chuyên gia</span></div>
        <div class="slogan-sv"><span><?= $slogan['name' . $lang] ?></span></div>
        <div class="team-list">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:28" data-sm-items="2:28" data-md-items="2:28" data-lg-items="3:28" data-xlg-items="3:28" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-team">
                <?php foreach ($teams as $k => $v) { ?>
                    <div class="team-item">
                        <div class="team-main">
                            <div class="team-thumb">
                                <img class="lazy" onerror="this.src='<?= THUMBS ?>/355x348x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/355x348x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </div>
                            <div class="team-overplay_title text-uppercase text-dark pt-4">
                                Bác sĩ: <span class="blu"><?= $v['name' . $lang] ?></span>
                            </div>
                            <div class="team-overplay_office gre">
                                <?= $v['office' . $lang] ?>
                            </div>
                            <?php if (count($social1)) { ?>
                                <div class="social mb-3 social-footer d-flex align-items-center justify-content-center">
                                    <?php foreach ($social1 as $k => $v1) { ?>
                                        <a href="<?= $v1['link'] ?>" target="_blank" class="text-decoration-none mr-2">
                                            <img class="lazy" data-src="<?= UPLOAD_PHOTO_L . $v1['photo'] ?>" alt="<?= $v1['name' . $lang] ?>" title="<?= $v1['name' . $lang] ?>">
                                        </a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <div class="team-overplay">
                            <div class="team-overplay_title text-uppercase">
                                Bác sĩ: <span><?= $v['name' . $lang] ?></span>
                            </div>
                            <div class="team-overplay_office">
                                <?= $v['office' . $lang] ?>
                            </div>
                            <div class="team-overplay_desc">
                                <?= $v['desc' . $lang] ?>
                            </div>
                            <?php if (count($social2)) { ?>
                                <div class="social mb-3 social-footer d-flex align-items-center justify-content-center">
                                    <?php foreach ($social2 as $k => $v) { ?>
                                        <a href="<?= $v['link'] ?>" target="_blank" class="text-decoration-none mr-2">
                                            <img class="lazy" data-src="<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>">
                                        </a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!-- ALBUM ẢNH -->
<?php if (count($albs)) { ?>
    <div class="service-us">
        <div class="wrap-product wrap-content">
            <div class="title-main"><span>Hình ảnh cơ sở</span></div>
            <div class="slogan-sv"><span><?= $slogan['name' . $lang] ?></span></div>
            <div class="list-service row album-gallery">
                <div class="col-item-sv-l col-md-6 aos-init aos-animate" data-aos="fade-up-right">
                    <div class="service-item-left">
                        <a class="album-image mb-0" href="<?=ASSET.UPLOAD_PRODUCT_L.$albs[0]['photo']?>" title="<?=$albs[0]['name'.$lang]?>">
                            <img class="lazy w-100" onerror="this.src='<?=THUMBS?>/594x460x1/assets/images/noimage.png';" data-src="<?=THUMBS?>/594x460x1/<?=UPLOAD_PRODUCT_L.$albs[0]['photo']?>" alt="<?=$albs[0]['name'.$lang]?>" title="<?=$albs[0]['name'.$lang]?>"/>
                        </a>
                    </div>
                </div>
                <div class="col-item-sv col-md-6 aos-init aos-animate" data-aos="fade-up-left">
                    <div class="thumb_rt">
                        <a class="album-image mb-0" href="<?=ASSET.UPLOAD_PRODUCT_L.$albs[1]['photo']?>" title="<?=$albs[1]['name'.$lang]?>">
                            <img class="lazy w-100" onerror="this.src='<?=THUMBS?>/584x230x1/assets/images/noimage.png';" data-src="<?=THUMBS?>/584x230x1/<?=UPLOAD_PRODUCT_L.$albs[1]['photo']?>" alt="<?=$albs[1]['name'.$lang]?>" title="<?=$albs[1]['name'.$lang]?>"/>
                        </a>
                    </div>
                    <div class="row">
                        <?php foreach ($albs as $k => $v) {
                            if ($k > 1 && $k <= 3) { ?>
                                <div class="<?= $k % 2 == 0 ? 'col-item-sv-r' : 'col-item-sv-r-ed' ?> col-6">
                                    <a class="album-image mb-0" href="<?=ASSET.UPLOAD_PRODUCT_L.$v['photo']?>" title="<?=$v['name'.$lang]?>">
                                        <img class="lazy w-100" onerror="this.src='<?=THUMBS?>/286x220x1/assets/images/noimage.png';" data-src="<?=THUMBS?>/286x220x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" title="<?=$v['name'.$lang]?>"/>
                                    </a>
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>
            <?php if(count($albs) > 3) { ?>
                <div class="text-center paginate-alb">
                    <a href="thu-vien-anh" class="hl_dl edit_height" title="Xem thêm">
                        Xem thêm
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>

<!-- Khách Hàng -->
<?php if(count($customers)) { ?>
    <div class="cus d-hiden">
        <div class="wrap-content">
            <div class="step-title-main"><span class="text-white">khách hàng</span></div>
                <div class="slogan-sv">
                    <span class="text-white">
                        <?= $slogan['name' . $lang] ?>
                    </span>
                </div>
            </div>
        <div class="cus-list">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="3:28" data-sm-items="3:28" data-md-items="3:28" data-lg-items="3:28" data-xlg-items="3:28" data-rewind="1" data-autoplay="1" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-center='1' data-smartspeed="800" data-autoplayspeed="800" data-autoplaytimeout="5000" data-dots="0" data-nav="1" data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>" data-navcontainer=".control-cus">
                <?php foreach($customers as $k => $v) { ?>
                    <div class="cus-item">
                        <div class="cus-bx">
                            <div class="cus-avatar">
                                <img class="cus-ava-img lazy" onerror="this.src='<?= THUMBS ?>/83x83x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/83x83x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </div>
                            <div class="cus-info">
                                <div class="cus-name">
                                    <?=$v['name'.$lang]?>
                                </div>
                                <div class="cus-desc">
                                    <?=$v['desc'.$lang]?>
                                </div>
                            </div>
                        </div>
                        <div class="cus-main">
                            <div class="cus-thumb">
                                <div class="d-flex justify-content-between">
                                    <div class="img_cus1">
                                        <img id="cus-ava-img-1" class="lazy" onerror="this.src='<?= THUMBS ?>/284x396x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/284x396x1/<?= UPLOAD_NEWS_L . $v['photo1'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                    </div>
                                    <div class="img_cus2">
                                        <img id="cus-ava-img-2" class="lazy " onerror="this.src='<?= THUMBS ?>/284x396x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/284x396x1/<?= UPLOAD_NEWS_L . $v['photo2'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                    </div>
                                </div>
                                <div class="cus-control">
                                    <div class="cus-before">Hình ảnh trước điều trị</div>
                                    <div class="cus-after">Hình ảnh sau điều trị</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php  } ?>

<!-- Đăng ký tư vấn -->
<div id="register_message" class="regis">
    <div class="row">
        <div class="regis-left col-md-6">
            <img class="lazy" onerror="this.src='<?= THUMBS ?>/685x419x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/685x419x1/<?= UPLOAD_PHOTO_L . $bannerRegis['photo'] ?>" alt="<?= $bannerRegis['name' . $lang] ?>" title="<?= $bannerRegis['name' . $lang] ?>" />
        </div>
        <div class="regis-right col-md-6">
            <div class="regis-title">
                <span>Đăng ký tư vấn</span>
            </div>
            <div class="regis-slogan">
                <span>
                    <?= $sloganRegis['name' . $lang] ?>
                </span>
            </div>
            <form class="form-contact validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
                <div class="contact-input">
                    <input type="text" class="form-control name_cus text-sm" id="fullname-newsletter" name="dataNewsletter[fullname]" placeholder="Tên khách hàng" value="<?= $flash->get('fullname') ?>" required />
                </div>
                <div class="contact-input">
                    <input type="number" class="form-control phone_cus text-sm" id="phone-newsletter" name="dataNewsletter[phone]" placeholder="Số điện thoại" value="<?= $flash->get('phone') ?>" required />
                </div>
                <div class="contact-input">
                    <input type="email" class="form-control email_cus text-sm" id="email-newsletter" name="dataNewsletter[email]" placeholder="Email" value="<?= $flash->get('email') ?>" required />
                </div>
                <input type="submit" class="form-control btn btn-regis" name="submit-newsletter" value="ĐĂNG KÝ" disabled />
                <input type="hidden" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
            </form>
        </div>
    </div>
</div>

<!-- TIN TỨC -->
<?php if (count($newsnb)) { ?>
    <div class="wrap-newsnb" id="new">
        <div class="wrap-content d-hiden">
            <p class="title-main"><span>Tin tức & sự kiện</span></p>
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:32" data-sm-items="2:32" data-md-items="3:32" data-lg-items="3:32" data-xlg-items="3:32" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                <?php foreach ($newsnb as $k => $v) { ?>
                    <div class="item-newsnb">
                        <p class="pic-newsnb">
                            <a class="scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/376x301x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/376x301x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </a>
                        </p>
                        <div class="info-newsnb">
                            <h3 class="mb-0">
                                <a class="name-newsnb text-split text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                            </h3>
                            <p class="desc-newsnb text-split"><?= $v['desc' . $lang] ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="<?= $v[$sluglang] ?>" class="new-more" title="Đọc thêm">Đọc thêm</a>
                                <p class="time-newshome"><?= date("d/m/Y", $v['date_created']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>