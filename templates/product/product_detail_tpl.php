<div class="grid-pro-detail d-flex flex-wrap justify-content-between align-items-start">
    <div class="left-pro-detail">
        <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?= ASSET . WATERMARK ?>/product/540x408x1/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
            <img class="w-100" onerror="this.src='<?= THUMBS ?>/540x408x1/assets/images/noimage.png';" src="<?= WATERMARK ?>/product/540x408x1/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" alt="<?= $rowDetail['name' . $lang] ?>" title="<?= $rowDetail['name' . $lang] ?>" />
        </a>
        <?php if ($rowDetailPhoto) {
            if (count($rowDetailPhoto) > 0) { ?>
                <div class="gallery-thumb-pro">
                    <div class="owl-page owl-carousel owl-theme owl-pro-detail" data-xsm-items="3:10" data-sm-items="4:10" data-md-items="5:10" data-lg-items="5:10" data-xlg-items="5:10" data-nav="1" data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-pro-detail">
                        <div>
                            <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= ASSET . WATERMARK ?>/product/540x408x1/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                                <img class="w-100" onerror="this.src='<?= THUMBS ?>/540x408x1/assets/images/noimage.png';" src="<?= WATERMARK ?>/product/540x408x1/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" alt="<?= $rowDetail['name' . $lang] ?>" title="<?= $rowDetail['name' . $lang] ?>" />
                            </a>
                        </div>
                        <?php foreach ($rowDetailPhoto as $v) { ?>
                            <div>
                                <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= ASSET . WATERMARK ?>/product/540x408x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                                    <img class="w-100" onerror="this.src='<?= THUMBS ?>/540x408x1/assets/images/noimage.png';" src="<?= WATERMARK ?>/product/540x408x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $rowDetail['name' . $lang] ?>" title="<?= $rowDetail['name' . $lang] ?>" />
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="control-pro-detail control-owl transition"></div>
                </div>
        <?php }
        } ?>
    </div>

    <div class="right-pro-detail">
        <p class="title-pro-detail mb-2"><?= $rowDetail['name' . $lang] ?></p>
        <ul class="attr-pro-detail">
            <li class="w-clear">
                <label class="attr-label-pro-detail"><?= gia ?>:</label>
                <div class="attr-content-pro-detail">
                    <?php if ($rowDetail['sale_price']) { ?>
                        <span class="price-new-pro-detail"><?= $func->formatMoney($rowDetail['sale_price']) ?></span>
                        <span class="price-old-pro-detail"><?= $func->formatMoney($rowDetail['regular_price']) ?></span>
                    <?php } else { ?>
                        <span class="price-new-pro-detail"><?= ($rowDetail['regular_price']) ? $func->formatMoney($rowDetail['regular_price']) : lienhe ?></span>
                    <?php } ?>
                </div>
            </li>
        </ul>
        <div class="desc-pro-detail content-text"><?= (!empty($rowDetail['desc' . $lang])) ? nl2br(htmlspecialchars_decode($rowDetail['desc' . $lang])) : '' ?></div>
    </div>
</div>
<?php if (empty($quickview)) { ?>
    <div class="tabs-pro-detail">
        <ul class="nav nav-tabs" id="tabsProDetail" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="info-pro-detail-tab" data-toggle="tab" href="#info-pro-detail" role="tab"><?= thongtinsanpham ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="commentfb-pro-detail-tab" data-toggle="tab" href="#commentfb-pro-detail" role="tab"><?= binhluan ?></a>
            </li>
        </ul>
        <div class="tab-content pt-4 pb-4" id="tabsProDetailContent">
            <div class="tab-pane fade show active content-text" id="info-pro-detail" role="tabpanel">
                <?= htmlspecialchars_decode($rowDetail['content' . $lang]) ?>
            </div>
            <div class="tab-pane fade" id="commentfb-pro-detail" role="tabpanel">
                <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>" data-numposts="3" data-colorscheme="light" data-width="100%"></div>
            </div>
        </div>
    </div>

    <div class="title-main"><span><?= sanphamcungloai ?></span></div>
    <?php if (count($product)) { ?>
        <div class="content-main">
            <div class="flex-cus row">
                <?php foreach ($product as $k => $v) { ?>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 mg-cus mb-3">
                        <div class="box-product" data-aos="fade-up" data-aos-duration="1000">
                            <div class="pic-product">
                                <a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                    <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/540x408x1/assets/images/noimage.png';" data-src="<?= WATERMARK ?>/product/540x408x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                </a>
                            </div>
                            <div class="bx_info_pro">
                                <h3 class="mb-0"><a class="text-decoration-none text-split name-product" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
                                <p class="price-product">
                                    <?php if ($v['discount']) { ?>
                                        <span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>
                                        <span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
                                        <span class="price-per"><?= '-' . $v['discount'] . '%' ?></span>
                                    <?php } else { ?>
                                        <span class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
                                    <?php } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
        </div>
    <?php } ?>
<?php } ?>