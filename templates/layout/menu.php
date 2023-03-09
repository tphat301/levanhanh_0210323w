<div class="w-menu">
    <div class="menu">
        <div class="wrap-content">
            <ul class="d-flex align-items-center justify-content-between">
                <li class="bx_logo">
                    <a class="logo-header site-me" href="">
                        <img class="lazy" onerror="this.src='<?= THUMBS ?>/191x54x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/191x54x1/<?= UPLOAD_PHOTO_L . $logoHeader['photo'] ?>" alt="logo" title="logo" />
                    </a>
                </li>
                <li><a class="<?php if ($com == '' || $com == 'index') echo 'active'; ?> transition" href="" title="<?= trangchu ?>"><?= trangchu ?></a></li>
                <li><a class="<?php if ($com == 'gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu" title="<?= gioithieu ?>"><?= gioithieu ?></a></li>
                <li style="position: relative; z-index:99999;">
                    <a class=" <?php if ($com == 'dich-vu') echo 'active'; ?> transition" href="#service" title="Dịch vụ">Dịch vụ</a>
                    <?php if (count($serviceList)) { ?>
                        <ul>
                            <?php foreach ($serviceList as $klist => $vlist) {
                                $serviceCat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                                <li>
                                    <a class=" transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                    <?php if (!empty($serviceCat)) { ?>
                                        <ul>
                                            <?php foreach ($serviceCat as $kcat => $vcat) {
                                                $serviceItem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                                                <li>
                                                    <a class=" transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                    <?php if (!empty($serviceItem)) { ?>
                                                        <ul>
                                                            <?php foreach ($serviceItem as $kitem => $vitem) {
                                                                $serviceSub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id'])); ?>
                                                                <li>
                                                                    <a class=" transition" title="<?= $vitem['name' . $lang] ?>" href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>
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
                    <?php } ?>
                </li>
                <li>
                    <a class="<?php if ($com == 'cong-nghe') echo 'active'; ?> transition" href="cong-nghe" title="Công nghệ">Công nghệ</a>
                    <?php if (count($technologys)) { ?>
                        <ul>
                            <?php foreach ($technologys as $klist => $vlist) { ?>
                                <li>
                                    <a class=" transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
                <li>
                    <a class=" <?php if ($com == 'tin-tuc') echo 'active'; ?> transition" href="#new" title="<?= tintuc ?>"><?= tintuc ?></a>
                    <?php if (count($ttlist)) { ?>
                        <ul>
                            <?php foreach ($ttlist as $klist => $vlist) {
                                $ttcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                                <li>
                                    <a class=" transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                    <?php if (!empty($ttcat)) { ?>
                                        <ul>
                                            <?php foreach ($ttcat as $kcat => $vcat) {
                                                $ttitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                                                <li>
                                                    <a class=" transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                    <?php if (!empty($ttitem)) { ?>
                                                        <ul>
                                                            <?php foreach ($ttitem as $kitem => $vitem) {
                                                                $ttsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id'])); ?>
                                                                <li>
                                                                    <a class=" transition" title="<?= $vitem['name' . $lang] ?>" href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>
                                                                    <?php if (!empty($ttsub)) { ?>
                                                                        <ul>
                                                                            <?php foreach ($ttsub as $ksub => $vsub) { ?>
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
                    <?php } ?>
                </li>
                <li>
                    <a class="<?php if ($com == 'lien-he') echo 'active'; ?> transition" href="lien-he" title="<?= lienhe ?>"><?= lienhe ?></a>
                </li>
                <li>
                    <a class="hl_link transition" data-toggle="modal" data-target="#exampleModal" title="<?= $func->formatPhone($optsetting['hotline']) ?>">
                        <?= $func->formatPhone($optsetting['hotline']) ?>
                    </a>
                </li>
                <li>
                    <a class="hl_dl transition" data-toggle="modal" data-target="#datlichhen" title="Đặt lịch hẹn">
                        Đặt lịch hẹn
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <?php include TEMPLATE . LAYOUT . "mmenu.php"; ?>
</div>