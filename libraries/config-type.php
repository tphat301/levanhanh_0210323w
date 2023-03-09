<?php
/* Config type - Product */
require_once LIBRARIES . 'type/config-type-product.php';

/* Config type - Tags */
require_once LIBRARIES . 'type/config-type-tags.php';

/* Config type - Newsletter */
require_once LIBRARIES . 'type/config-type-newsletter.php';

/* Config type - News */
require_once LIBRARIES . 'type/config-type-news.php';

/* Config type - Static */
require_once LIBRARIES . 'type/config-type-static.php';

/* Config type - Photo */
require_once LIBRARIES . 'type/config-type-photo.php';

/* Seo page */
$config['seopage']['page'] = array(
    "gioi-thieu" => "Giới thiệu",
    "san-pham" => "Sản phẩm",
    "dich-vu" => "Dịch vụ",
    "cong-nghe" => "Công nghệ",
    "tin-tuc" => "Tin tức",
    "lien-he" => "Liên hệ"
);
$config['seopage']['width'] = 300;
$config['seopage']['height'] = 200;
$config['seopage']['thumb'] = '300x200x1';
$config['seopage']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Setting */
$config['setting']['address'] = true;
$config['setting']['phone'] = true;
$config['setting']['hotline'] = true;
$config['setting']['zalo'] = true;
$config['setting']['oaidzalo'] = false;
$config['setting']['email'] = true;
$config['setting']['website'] = true;
$config['setting']['worktime'] = true;
$config['setting']['fanpage'] = true;
$config['setting']['coords'] = true;
$config['setting']['coords_iframe'] = true;
$config['setting']['link_googlemaps'] = true;
