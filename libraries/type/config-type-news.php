<?php
/* Tin tức */
$nametype = "tin-tuc";
$config['news'][$nametype]['title_main'] = "Tin tức";
$config['news'][$nametype]['dropdown'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['office'] = false;/*chuc vu*/
$config['news'][$nametype]['copy'] = false;
$config['news'][$nametype]['copy_image'] = false;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh Tin tức",
        "title_sub_photo" => "Hình ảnh",
        "check_photo" => array("hienthi" => "Hiển thị"),
        "number_photo" => 3,
        "images_photo" => true,
        "avatar_photo" => true,
        "name_photo" => true,
        "width_photo" => 540,
        "height_photo" => 540,
        "thumb_photo" => '100x100x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
    )
);
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['width'] = 376;
$config['news'][$nametype]['height'] = 301;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Khách Hàng */
$nametype = "khach-hang";
$config['news'][$nametype]['title_main'] = "Khách hàng";
$config['news'][$nametype]['dropdown'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['office'] = false;/*chuc vu*/
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['images1'] = true;
$config['news'][$nametype]['images2'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['gallery'] = array();
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 83;
$config['news'][$nametype]['height'] = 83;
$config['news'][$nametype]['width1'] = 284;
$config['news'][$nametype]['height1'] = 396;
$config['news'][$nametype]['width2'] = 284;
$config['news'][$nametype]['height2'] = 396;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Công nghệ */
$nametype = "cong-nghe";
$config['news'][$nametype]['title_main'] = "Công nghệ";
$config['news'][$nametype]['dropdown'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['office'] = false;/*chuc vu*/
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh công nghệ",
        "title_sub_photo" => "Hình ảnh",
        "check_photo" => array("hienthi" => "Hiển thị"),
        "number_photo" => 3,
        "images_photo" => true,
        "avatar_photo" => true,
        "name_photo" => true,
        "width_photo" => 540,
        "height_photo" => 540,
        "thumb_photo" => '100x100x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
    )
);
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['width'] = 376;
$config['news'][$nametype]['height'] = 301;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Tình trạng răng */
$nametype = "tinh-trang-rang";
$config['news'][$nametype]['title_main'] = "Tình trạng răng";
$config['news'][$nametype]['dropdown'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['office'] = false;/*chuc vu*/
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh Tin tức",
        "title_sub_photo" => "Hình ảnh",
        "check_photo" => array("hienthi" => "Hiển thị"),
        "number_photo" => 3,
        "images_photo" => true,
        "avatar_photo" => true,
        "name_photo" => true,
        "width_photo" => 540,
        "height_photo" => 491,
        "thumb_photo" => '100x100x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
    )
);
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['width'] = 540;
$config['news'][$nametype]['height'] = 491;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Đội ngũ và chuyên gia */
$nametype = "doi-ngu-chuyen-gia";
$config['news'][$nametype]['title_main'] = "Đội ngũ và chuyên gia";
$config['news'][$nametype]['dropdown'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['office'] = true;/*chuc vu*/
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['gallery'] = array();
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 355;
$config['news'][$nametype]['height'] = 348;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Quy trình đạt chuẩn */
$nametype = "quy-trinh";
$config['news'][$nametype]['title_main'] = "Quy trình";
$config['news'][$nametype]['dropdown'] = true;
$config['news'][$nametype]['list'] = true;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['office'] = false;/*chuc vu*/
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['gallery'] = array();
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 278;
$config['news'][$nametype]['height'] = 303;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/*  Quy trình cấp 1 */
$config['news'][$nametype]['title_main_list'] = " Quy trình cấp 1";
$config['news'][$nametype]['images_list'] = false;
$config['news'][$nametype]['show_images_list'] = false;
$config['news'][$nametype]['slug_list'] = true;
$config['news'][$nametype]['check_list'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['gallery_list'] = array();
$config['news'][$nametype]['desc_list'] = false;
$config['news'][$nametype]['desc_cke_list'] = true;
$config['news'][$nametype]['content_list'] = false;
$config['news'][$nametype]['content_cke_list'] = true;
$config['news'][$nametype]['seo_list'] = false;
$config['news'][$nametype]['width_list'] = 320;
$config['news'][$nametype]['height_list'] = 240;
$config['news'][$nametype]['thumb_list'] = '100x100x1';
$config['news'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Chính sách */
$nametype = "chinh-sach";
$config['news'][$nametype]['title_main'] = "Chính sách";
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['copy'] = false;
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['width'] = 576;
$config['news'][$nametype]['height'] = 432;
$config['news'][$nametype]['thumb'] = '100x100x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Quản lý mục (Không cấp) */
if (isset($config['news'])) {
    foreach ($config['news'] as $key => $value) {
        if (!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false)) {
            $config['shownews'] = 1;
            break;
        }
    }
}
