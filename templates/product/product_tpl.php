<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<?php if ($com == 'tim-kiem') { ?>
    <div class="div_kq_search mb-4"><?= $titleMain ?> (<?= $total ?>): <span>"<?php echo $tukhoa_show; ?>"</span></div>
<?php } ?>

<div class="content-main">
    <?php if (!empty($product)) { ?>
        <div class="d-flex">
            <?php if (count($serviceList)) { ?>
                <div class="category-sp w20">
                    <span class="text-uppercase">Danh mục dịch vụ</span>
                    <ul class="menu-cate">
                        <?php foreach ($serviceList as $klist => $vlist) {
                            $serviceCat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                                <li>
                                    <a class="clk_cat has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                    <?php if (!empty($serviceCat)) { ?>
                                        <ul class="mmenu_cat">
                                            <?php foreach ($serviceCat as $kcat => $vcat) {
                                                $serviceItem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                                                <li>
                                                    <a class="clk_cat_child has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                    <?php if (!empty($serviceItem)) { ?>
                                                        <ul>
                                                            <?php foreach ($serviceItem as $kitem => $vitem) {
                                                                $serviceSub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id'])); ?>
                                                                <li>
                                                                    <a class="has-child transition" title="<?= $vitem['name' . $lang] ?>" href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>
                                                                    <?php if (!empty($serviceSub)) { ?>
                                                                        <ul>
                                                                            <?php foreach ($serviceSub as $ksub => $vsub) { ?>
                                                                                <li>
                                                                                    <a class="transition" title="<?= $vsub['name' . $lang] ?>" href="<?= $vsub[$sluglang] ?>"><?= $vsub['name' . $lang] ?></a>
                                                                                </li>
                                                                            <?php } ?>
                                                                        </ul>
                                                                    <?php } ?>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    <?php } ?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
            <div class="flex-cus row w80">
                <?php foreach ($product as $k => $v) { ?>
                    <div class="col-sm-6 col-md-4 col-lg-3 <?=$source == 'index' ? '': 'mg-cus' ?> mb-3">
                        <div class="box-product" data-aos="fade-up" data-aos-duration="1000">
                            <div class="pic-product">
                                <a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                    <img class="lazy" onerror="this.src='<?= THUMBS ?>/540x408x1/assets/images/noimage.png';" data-src="<?= WATERMARK ?>/product/540x408x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
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
        </div>
    <?php } else { ?>
        <div class="alert alert-warning w-100" role="alert">
            <strong><?= khongtimthayketqua ?></strong>
        </div>
    <?php } ?>
    <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
</div>