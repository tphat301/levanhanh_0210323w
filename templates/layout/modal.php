<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="">
                    <img class="lazy" onerror="this.src='<?= THUMBS ?>/191x54x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/191x54x1/<?= UPLOAD_PHOTO_L . $logoHeader['photo'] ?>" alt="logo" title="logo" />
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="md-title">Gọi ngay để được tư vấn và đặt lịch hẹn</span>
                <div class="bx_hotline_modal">
                    <a class="hot_line_modal" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
                        <i class="bi bi-telephone-fill mr-2"></i><?= $func->formatPhone($optsetting['hotline']) ?>
                    </a>
                </div>
                <span class="md-title">Hoặc để lại số điện thoại của bạn để nhận cuộc gọi từ chúng tôi</span>
                <form class="form-contact validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
                    <div class="contact-input">
                        <input type="number" class="form-control text-sm" id="phone-contact" name="dataNewsletter[phone]" placeholder="Số điện thoại của bạn..." value="<?= $flash->get('phone') ?>" required />
                        <div class="invalid-feedback">Vui lòng nhập số điện thoại của bạn</div>
                    </div>
                    <input type="hidden" value="quan-ly-so-dien-thoai" name="dataNewsletter[type]">
                    <input type="submit" class="btn btn-p w-100" name="submit-newsletter" value="Yêu cầu gọi lại" disabled />
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Đặt lịch hẹn -->
<div class="modal fade" id="datlichhen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Đặt lịch hẹn</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body overflow-auto">
                <form class="form-contact validation-newsletter" novalidate method="POST" action="" enctype="multipart/form-data">
                    <span class="md-title-d">Thông tin bệnh nhân</span>
                    <div class="contact-input">
                        <input type="text" class="form-control text-sm" id="fullname-newsletter" name="dataNewsletter[fullname]" placeholder="<?= hoten ?>" value="<?= $flash->get('fullname') ?>" required />
                        <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
                    </div>
                    <div class="contact-input">
                        <input type="number" class="form-control text-sm" id="phone-newsletter" name="dataNewsletter[phone]" placeholder="Số điện thoại" value="<?= $flash->get('phone') ?>" required />
                        <div class="invalid-feedback">Vui lòng nhập số điện thoại của bạn</div>
                    </div>
                    <div class="contact-input">
                        <input type="email" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[email]" placeholder="Email" value="<?= $flash->get('email') ?>" required />
                        <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                    </div>

                    <span class="md-title-d">Thông tin đặt hẹn</span>
                    <div class="contact-input">
                        <label for="date-newsletter" class="lable-date">Ngày khám: </label>
                        <input type="date" class="form-control text-sm" id="date-newsletter" name="dataNewsletter[date]" placeholder="Ngày khám" value="<?= $flash->get('date') ?>" required />
                        <div class="invalid-feedback">Vui lòng chọn ngày khám</div>
                    </div>
                    <div class="contact-input">
                        <input type="text" class="form-control text-sm" id="date-newsletter" name="dataNewsletter[service]" placeholder="Dịch vụ khám" value="<?= $flash->get('service') ?>" required />
                        <div class="invalid-feedback">Vui lòng chọn dịch vụ khám</div>
                    </div>
                    <div class="contact-input">
                        <input type="text" class="form-control text-sm" id="date-newsletter" name="dataNewsletter[time]" placeholder="Giờ khám" value="<?= $flash->get('time') ?>" required />
                        <div class="invalid-feedback">Vui lòng chọn giờ khám</div>
                    </div>
                    <div class="contact-input">
                        <textarea class="form-control text-sm" id="content-newsletter" name="dataNewsletter[content]" placeholder="Ghi chú (nếu có)" required /><?= $flash->get('content') ?></textarea>
                    </div>
                    <input type="hidden" value="dat-lich-hen" name="dataNewsletter[type]">
                    <input type="submit" class="btn btn-p w-100" name="submit-newsletter" value="HOÀN TẤT" disabled />
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal quickview -->
<div class="modal popup-custom fade" id="popup-quickview" tabindex="-1" role="dialog" aria-labelledby="popup-quickview-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-body"></div>
		</div>
	</div>
</div>

<!-- Modal cart -->
<div class="modal fade" id="popup-cart" tabindex="-1" role="dialog" aria-labelledby="popup-cart-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-top modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="popup-cart-label"><?=giohangcuaban?></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body"></div>
		</div>
	</div>
</div>

<?php /*
<!-- Modal prototype -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".exampleModal">
	Open Modal
</button>
<div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="exampleModalLabel">Modal title</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
*/ ?>

<?php
/*
<?php if(!empty($popup)) { ?>
	<!-- Modal popup -->
	<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title" id="popupModalLabel"><?=$popup['name'.$lang]?></h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<a href="<?=$popup['link']?>">
						<img class="lazy w-100 " onerror="this.src='<?=THUMBS?>/800x530x1/assets/images/noimage.png';" data-src="<?=THUMBS?>/800x530x1/<?=UPLOAD_PHOTO_L.$popup['photo']?>" alt="Popup" title="Popup"/>
					</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
*/ 
?>