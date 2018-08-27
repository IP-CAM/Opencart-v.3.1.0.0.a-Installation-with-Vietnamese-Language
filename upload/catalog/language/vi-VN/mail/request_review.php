<?php
// Heading
$_['heading_title']             = 'Yêu cầu đánh giá';

// Button
$_['button_send']               = 'Gửi e-mail';
$_['button_delete_from_list']   = 'Loại bỏ khỏi danh sách';
$_['button_settings']           = 'Cài đặt';
$_['button_save_settings']      = 'Lưu cài đặt chung';
$_['button_save_email_text']    = 'Lưu văn bản E-mail';
$_['button_send_test_emails']   = 'Gửi e-mail thử nghiệm';

// Column
$_['column_name']               = 'Tên khách hàng';
$_['column_email']              = 'E-mail';
$_['column_order_id']           = 'ID đặt hàng';
$_['column_order_total']        = 'Tổng số đặt hàng'; // Added v1.1
$_['column_order_status_date']  = 'Tình trạng đặt hàng Cập Nhật';
$_['column_language']           = 'Ngôn ngữ';
$_['column_store_name']         = 'Tên cửa hàng';

// Tab
$_['tab_general']               = 'Chung';
$_['tab_email_text']            = 'Văn bản E-mail';
$_['tab_test_center']           = 'Trung tâm thử nghiệm';
$_['tab_log']					= 'Đăng nhập';

// Text
$_['text_success_mail']         = 'Success: %s (các) thư được gửi, chứa %s liên kết sản phẩm.';
$_['text_success_remove']       = 'Success: %s (các) khách hàng bị xóa khỏi danh sách.';
$_['text_success_settings']     = 'Thành công: cài đặt cho <b>Yêu cầu xem xét</b> Cập nhật.';
$_['text_success_email_text']   = 'Thành công: E-mail văn bản đã được Cập Nhật.';
$_['text_success_mail_test']    = 'Success: %s Kiểm tra e-mail gửi (%s ngôn ngữ). %s';
$_['text_failed_validation']    = '%s của các e-mail được cung cấp không xác nhận!';

$_['text_success_clear_log']  	= 'Thành công: bạn đã xóa thành công đăng nhập của bạn!';

$_['text_install']              = 'Bạn phải nhập cài đặt ưa thích của mình và nhấp vào lưu. Thông báo này sẽ chỉ hiển thị một lần. Sau đó, bạn sẽ có thể chuyển đổi các cài đặt bằng cách nhấn vào nút ở góc trên bên phải.';

$_['text_order_status']         = 'Yêu cầu tình trạng đặt hàng:<br /><span class="help">Chỉ cho thấy đơn đặt hàng với tình trạng này</span>'; 
$_['text_display']              = 'Ngày trước khi yêu cầu đánh giá:<br /><span class="help">Số ngày trước khi các đơn đặt hàng đánh dấu với tình trạng đặt hàng trên cho thấy lên.</span>';
$_['text_display_before_review']              = 'Ngày trước khi cho phép đánh giá:<br /><span class="help">Số ngày trước khi sản phẩm Hiển thị trong hồ sơ của khách hàng để xem xét.</span>';
$_['text_orders_per_page']      = 'Đơn đặt hàng mỗi trang:<br /><span class="help">Số đơn đặt hàng mỗi trang. Điều này cũng xác định có bao nhiêu thư sẽ được gửi cùng một lúc.</span>';
$_['text_fallback_language']    = 'Ngôn ngữ fallback:<br /><span class="help">Sử dụng ngôn ngữ này như là fallback, để ngăn chặn việc gửi thư có sản phẩm nào.</span>';
$_['text_append_language_code'] = 'Thêm mã ngôn ngữ vào URL:<br /><span class="help">Sẽ thêm mã ngôn ngữ vào các URL sản phẩm trong thư. Điều này tự động chọn ngôn ngữ chính xác cho khách hàng của bạn, khi nhấp vào liên kết.';
$_['text_min_amount']           = 'Đặt hàng số tiền tối thiểu<br /><span class="help">Chỉ cho thấy đơn đặt hàng với tổng số lớn hơn giá trị gia nhập.<br />Ví dụ: 50 sẽ chỉ hiển thị đơn đặt hàng với Tổng giá trị đặt hàng là $50, £50, €50 hoặc cao hơn</span>'; // Added v1.1 

$_['text_subject']              = 'Chủ đề:';
$_['text_message']              = 'Thư:';
$_['text_footer']               = 'Chân:';
$_['text_plural_placeholders']  = 'Số nhiều chỗ ở:<span class="help">Wordings được sử dụng cho các thư với hơn 1 sản phẩm.</span>';
$_['text_singular_placeholders']= 'Số ít chỗ ở:<span class="help">Wordings được sử dụng cho các thư với một sản phẩm duy nhất.</span>';
$_['text_available_placeholders'] = 'Những chỗ trống khác';

$_['text_test_emails']          = 'Kiểm tra e-mail:<br /><span class="help">Nhập bất kỳ địa chỉ email nào bạn muốn nhận được thư kiểm tra (phân tách bằng dấu phẩy)</span>';
$_['text_test_languages']       = 'Ngôn ngữ:<br /><span class="help">Chọn ngôn ngữ để nhận được email kiểm tra.</span>';
$_['text_number_of_products']   = 'Số lượng sản phẩm:<br /><span class="help">Nhập số sản phẩm mà bạn muốn hiển thị trong email thử nghiệm. Nếu còn trống, 4 sản phẩm sẽ được bao gồm.</span>';
$_['text_test_store']           = 'Cửa hàng:';

$_['text_legend'] = '<span class="help">{order_id} = Đặt hàng ID<br/>{firstname} {lastname} = FirstName LastName<br />{store_name} = Tên cửa hàng<br />{store_url} = Lưu trữ URL<br />{each} {product} {link}</span>';

$_['text_test_warning'] = '<br/>Cảnh báo: các liên kết xem xét trong email kiểm tra sẽ không hoạt động chính xác như khách hàng cần phải có mua sản phẩm cho nó để hiển thị trong tài khoản của họ.<br/>';

$_['text_cron_enable']        = 'Gửi email tự động hàng ngày?';
$_['text_cron_key'] = 'Cronjob Secret Key';
$_['text_cron_weekly'] = 'Tuần';
$_['text_cron_daily'] = 'Daily';
$_['text_cron_monthly'] = 'Hàng tháng';
$_['entry_cron_update'] = 'Thời gian Cập Nhật';

// Error
$_['error_no_selected']         = 'Yêu cầu nhận xét: không có khách hàng (s) được chọn.';
$_['error_no_test_mails']       = 'Kiểm tra Trung tâm: không có e-mail cung cấp. Nhập ít nhất một.';
$_['error_no_language_selected']= 'Trung tâm kiểm tra: không có (các) ngôn ngữ được chọn.';
$_['error_permission']          = 'Cảnh báo: bạn không được phép sửa đổi hoặc sử dụng <b>Yêu cầu đánh giá</b>!';
?>