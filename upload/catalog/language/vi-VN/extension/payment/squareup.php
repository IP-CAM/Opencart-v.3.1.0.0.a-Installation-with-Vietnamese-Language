<?php
// Text
$_['text_new_card']                     = '+ Thêm thẻ mới';
$_['text_loading']                      = 'Tải... Hãy chờ...';
$_['text_card_details']                 = 'Chi tiết thẻ';
$_['text_saved_card']                   = 'Sử dụng thẻ đã lưu:';
$_['text_card_ends_in']                 = 'Trả tiền với hiện tại %s thẻ kết thúc vào xxxx xxxx xxxx %s';
$_['text_card_number']                  = 'Số thẻ:';
$_['text_card_expiry']                  = 'Thẻ hết hạn (mm/yy):';
$_['text_card_cvc']                     = 'Mã bảo vệ thẻ (CVC):';
$_['text_card_zip']                     = 'Thẻ Zip Code:';
$_['text_card_save']                    = 'Lưu thẻ để sử dụng trong tương lai?';
$_['text_trial']                        = '%s Mỗi %s %s Cho %s thanh toán sau đó ';
$_['text_recurring']                    = '%s Mỗi %s %s';
$_['text_length']                       = ' Cho %s Thanh toán';
$_['text_cron_subject']                 = 'Square CRON việc làm tóm tắt';
$_['text_cron_message']                 = 'Dưới đây là danh sách tất cả các nhiệm vụ CRON thực hiện bởi phần mở rộng của quảng trường của bạn:';
$_['text_squareup_profile_suspended']   = ' Các khoản thanh toán định kỳ của bạn đã bị đình chỉ. Vui lòng liên hệ với chúng tôi để biết thêm chi tiết.';
$_['text_squareup_trial_expired']       = ' Thời gian dùng thử của bạn đã hết hạn.';
$_['text_squareup_recurring_expired']   = ' Khoản thanh toán định kỳ của bạn đã hết hạn. Đây là khoản thanh toán cuối cùng của cậu.';
$_['text_cron_summary_token_heading']   = 'Làm tươi các mã thông báo truy cập:';
$_['text_cron_summary_token_updated']   = 'Truy cập token Cập Nhật thành công!';
$_['text_cron_summary_error_heading']   = 'Lỗi giao dịch:';
$_['text_cron_summary_fail_heading']    = 'Thất bại giao dịch (hồ sơ bị đình chỉ):';
$_['text_cron_summary_success_heading'] = 'Giao dịch thành công:';
$_['text_cron_fail_charge']             = 'Hồ sơ <strong>#%s</strong> không thể bị tính phí với <strong>%s</strong>';
$_['text_cron_success_charge']          = 'Hồ sơ <strong>#%s</strong> được tính với <strong>%s</strong>';
$_['text_card_placeholder']             = 'XXXX xxxx xxxx xxxx';
$_['text_cvv']                          = 'Cvv';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Tín dụng/thẻ ghi nợ';
$_['text_token_issue_customer_error']   = 'Chúng tôi đang gặp một cúp kỹ thuật trong hệ thống thanh toán của chúng tôi. Hãy thử lại sau.';
$_['text_token_revoked_subject']        = 'Quảng trường của bạn truy cập token đã bị thu hồi!';
$_['text_token_revoked_message']        = "Các mở rộng của quảng trường thanh toán truy cập vào tài khoản quảng trường của bạn đã bị thu hồi thông qua bảng điều khiển vuông. Bạn cần xác minh thông tin đăng nhập ứng dụng của mình trong cài đặt tiện ích mở rộng và kết nối lại.";
$_['text_token_expired_subject']        = 'Quảng trường của bạn truy cập token đã hết hạn!';
$_['text_token_expired_message']        = "Thông báo truy cập của phần mở rộng thanh toán quảng trường kết nối nó với tài khoản quảng trường của bạn đã hết hạn. Bạn cần xác minh ủy nhiệm ứng dụng của bạn và công việc định kỳ trong cài đặt tiện ích mở rộng và kết nối lại.";

// Error
$_['error_browser_not_supported']       = 'Lỗi: Hệ thống thanh toán không còn hỗ trợ trình duyệt web của bạn. Vui lòng cập nhật hoặc sử dụng một loại khác.';
$_['error_card_invalid']                = 'Lỗi: thẻ không hợp lệ!';
$_['error_squareup_cron_token']         = 'Lỗi: truy cập Token không thể làm mới được. Hãy kết nối phần mở rộng thanh toán vuông của bạn thông qua bảng quản trị opencart.';

// Warning
$_['warning_test_mode']                 = 'Cảnh báo: sandbox chế độ được kích hoạt! Các giao dịch sẽ xuất hiện để đi qua, nhưng không có chi phí sẽ được thực hiện.';

// Statuses
$_['squareup_status_comment_authorized']    = 'Giao dịch thẻ đã được ủy quyền nhưng chưa bị bắt.';
$_['squareup_status_comment_captured']      = 'Giao dịch thẻ được ủy quyền và sau đó bị bắt (tức là hoàn thành).';
$_['squareup_status_comment_voided']        = 'Các giao dịch thẻ đã được ủy quyền và sau đó voided (tức là hủy bỏ).   ';
$_['squareup_status_comment_failed']        = 'Giao dịch thẻ đã thất bại.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Quốc gia địa chỉ thanh toán không hợp lệ. Hãy sửa đổi nó và thử lại.';
$_['squareup_override_error_shipping_address.country']      = 'Quốc gia địa chỉ vận chuyển không hợp lệ. Hãy sửa đổi nó và thử lại.';
$_['squareup_override_error_email_address']                 = 'Địa chỉ e-mail khách hàng của bạn không hợp lệ. Hãy sửa đổi nó và thử lại.';
$_['squareup_override_error_phone_number']                  = 'Số điện thoại khách hàng của bạn không hợp lệ. Hãy sửa đổi nó và thử lại.';
$_['squareup_error_field']                                  = ' Lĩnh vực: %s';