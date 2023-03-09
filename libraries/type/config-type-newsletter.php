<?php
    /* Đăng ký nhận tin */
    $nametype = "dangkynhantin";
    $config['newsletter'][$nametype]['title_main'] = "Đăng ký nhận tin";
    $config['newsletter'][$nametype]['email'] = true;
    $config['newsletter'][$nametype]['is_send'] = true;
    $config['newsletter'][$nametype]['fullname'] = true;
    $config['newsletter'][$nametype]['phone'] = true;
    $config['newsletter'][$nametype]['address'] = true;
    $config['newsletter'][$nametype]['subject'] = true;
    $config['newsletter'][$nametype]['content'] = true;
    $config['newsletter'][$nametype]['notes'] = true;
    $config['newsletter'][$nametype]['confirm_status'] = array("1" => "Đã xem", "2" => "Đã liên hệ", "3" => "Đã thông báo");
    $config['newsletter'][$nametype]['show_name'] = true;
    $config['newsletter'][$nametype]['show_phone'] = true;
    $config['newsletter'][$nametype]['show_date'] = true;
    $config['newsletter'][$nametype]['file_type'] = '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.xls|.xlsx|.jpg|.png|.gif';

    /* Đặt lịch hẹn */
    $nametype = "dat-lich-hen";
    $config['newsletter'][$nametype]['title_main'] = "Đặt lịch hẹn";
    $config['newsletter'][$nametype]['email'] = true;
    $config['newsletter'][$nametype]['is_send'] = true;
    $config['newsletter'][$nametype]['fullname'] = true;
    $config['newsletter'][$nametype]['date'] = true;
    $config['newsletter'][$nametype]['time'] = true;
    $config['newsletter'][$nametype]['service'] = true;
    $config['newsletter'][$nametype]['phone'] = true;
    $config['newsletter'][$nametype]['address'] = true;
    $config['newsletter'][$nametype]['subject'] = true;
    $config['newsletter'][$nametype]['content'] = true;
    $config['newsletter'][$nametype]['notes'] = true;
    $config['newsletter'][$nametype]['confirm_status'] = array("1" => "Đã xem", "2" => "Đã liên hệ", "3" => "Đã thông báo");
    $config['newsletter'][$nametype]['show_name'] = true;
    $config['newsletter'][$nametype]['show_phone'] = true;
    $config['newsletter'][$nametype]['show_date'] = true;
    $config['newsletter'][$nametype]['file_type'] = '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.xls|.xlsx|.jpg|.png|.gif';

     /* Quản lý số điện thoại */
    $nametype = "quan-ly-so-dien-thoai";
    $config['newsletter'][$nametype]['title_main'] = "Quản lý số điện thoại";
    $config['newsletter'][$nametype]['is_send'] = true;
    $config['newsletter'][$nametype]['phone'] = true;
    $config['newsletter'][$nametype]['confirm_status'] = array("1" => "Đã xem", "2" => "Đã liên hệ", "3" => "Đã thông báo");
    $config['newsletter'][$nametype]['show_phone'] = true;
    $config['newsletter'][$nametype]['show_date'] = true;
    $config['newsletter'][$nametype]['file_type'] = '.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.xls|.xlsx|.jpg|.png|.gif';
?>