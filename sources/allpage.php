<?php
if (!defined('SOURCES')) die("Error");
/* static */
$copyright = $cache->get("select name$lang from #_static where type = ? limit 0,1", array('copyright'), 'fetch', 7200);
$favicon = $cache->get("select photo from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('favicon', 'photo_static'), 'fetch', 7200);
$logoAbout = $cache->get("select id, photo, options from #_photo where type = ? and act = ? limit 0,1", array('logo-gioi-thieu', 'photo_static'), 'fetch', 7200);
$logoHeader = $cache->get("select id, photo, options from #_photo where type = ? and act = ? limit 0,1", array('logo-header', 'photo_static'), 'fetch', 7200);
$logoFooter = $cache->get("select id, photo, options from #_photo where type = ? and act = ? limit 0,1", array('logo-footer', 'photo_static'), 'fetch', 7200);
$banner = $cache->get("select photo from #_photo where type = ? and act = ? limit 0,1", array('banner', 'photo_static'), 'fetch', 7200);
$slogan = $cache->get("select name$lang from #_static where type = ? limit 0,1", array('slogan'), 'fetch', 7200);
$sloganRegis = $cache->get("select name$lang from #_static where type = ? limit 0,1", array('slogan-dang-ky-nhan-tin'), 'fetch', 7200);
$sloganAbout = $cache->get("select name$lang from #_static where type = ? limit 0,1", array('slogan-gioi-thieu'), 'fetch', 7200);

/* multi */
$social1 = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb asc", array('social1'), 'result', 7200);
$social2 = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb asc", array('social2'), 'result', 7200);
$splist = $cache->get("select name$lang, slugvi, slugen, id from #_product_list where type = ? and find_in_set('hienthi',status) order by numb asc", array('san-pham'), 'result', 7200);
$serviceList = $cache->get("select name$lang, slugvi, slugen, id from #_product_list where type = ? and find_in_set('hienthi',status) order by numb asc", array('dich-vu'), 'result', 7200);
$ttlist = $cache->get("select name$lang, slugvi, slugen, id from #_news_list where type = ? and find_in_set('hienthi',status) order by numb asc", array('tin-tuc'), 'result', 7200);
$technologys = $cache->get("select name$lang, slugvi, slugen, id from #_news where type = ? and find_in_set('hienthi',status) order by numb asc", array('cong-nghe'), 'result', 7200);
$footer = $cache->get("select name$lang, content$lang from #_static where type = ? limit 0,1", array('footer'), 'fetch', 7200);
$policy = $cache->get("select name$lang, slugvi, slugen, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb asc", array('chinh-sach'), 'result', 7200);
$teams = $cache->get("select name$lang, office$lang, desc$lang, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by id asc", array('doi-ngu-chuyen-gia'), 'result', 7200);

/* Get statistic */
$counter = $statistic->getCounter();
$online = $statistic->getOnline();

/* Newsletter */
if (!empty($_POST['submit-newsletter'])) {
    $responseCaptcha = $_POST['recaptcha_response_newsletter'];
    $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
    $scoreCaptcha = (!empty($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;
    $actionCaptcha = (!empty($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';
    $testCaptcha = (!empty($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;
    $dataNewsletter = array();
    $dataNewsletter = (!empty($_POST['dataNewsletter'])) ? $_POST['dataNewsletter'] : null;

    /* Valid data */
    if($dataNewsletter['type']=== 'dat-lich-hen') {
        if (empty($dataNewsletter['email'])) {
            $flash->set('error', 'Email không được trống');
        }
    
        if (!empty($dataNewsletter['email']) && !$func->isEmail($dataNewsletter['email'])) {
            $flash->set('error', 'Email không hợp lệ');
        }
    }

    $error = $flash->get('error');

    if (!empty($error)) {
        $func->transfer($error, $configBase, false);
    }

    /* Save data */
    if (($scoreCaptcha >= 0.5 && $actionCaptcha == 'Newsletter') || $testCaptcha == true) {
        foreach ($dataNewsletter as $column => $value) {
            $data[$column] = htmlspecialchars($value);
        }
        $dataNewsletter['date_created'] = time();
        $dataNewsletter['type'] = $dataNewsletter['type'];
        

        if ($d->insert('newsletter', $dataNewsletter)) {
            $func->transfer("Đăng ký nhận tin thành công. Chúng tôi sẽ liên hệ với bạn sớm.", $configBase);
        } else {
            $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.", $configBase, false);
        }
    } else {
        $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.", $configBase, false);
    }
}
