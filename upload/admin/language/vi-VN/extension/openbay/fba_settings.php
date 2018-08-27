<?php
// Headings
$_['heading_title']        	   = 'Cài đặt';
$_['text_openbay']             = 'Openbay Pro';
$_['text_fba']                 = 'Thực hiện bởi Amazon';

// Text
$_['text_success']     		   = 'Cài đặt của bạn đã được lưu';
$_['text_status']         	   = 'Tình trạng';
$_['text_account_ok']  		   = 'Kết nối để thực hiện bởi Amazon OK';
$_['text_api_ok']       	   = 'Kết nối API OK';
$_['text_api_status']          = 'Kết nối API';
$_['text_edit']           	   = 'Chỉnh sửa thực hiện bằng cài đặt Amazon';
$_['text_standard']            = 'Tiêu chuẩn';
$_['text_expedited']           = 'Nhanh';
$_['text_priority']            = 'Ưu tiên';
$_['text_fillorkill']          = 'Điền hoặc giết';
$_['text_fillall']             = 'Điền vào tất cả';
$_['text_fillallavailable']    = 'Điền đầy đủ';
$_['text_prefix_warning']      = 'Không thay đổi cài đặt này sau khi đơn đặt hàng đã được gửi đến Amazon, chỉ thiết lập này khi bạn lần đầu tiên cài đặt.';
$_['text_disabled_cancel']     = 'Khuyết tật-không tự động hủy bỏ fulfillments';
$_['text_validate_success']    = 'Chi tiết API của bạn đang làm việc đúng! Bạn phải bấm lưu để đảm bảo cài đặt được lưu.';
$_['text_register_banner']     = 'Bấm vào đây nếu bạn cần đăng ký một tài khoản';

// Entry
$_['entry_api_key']            = 'API token';
$_['entry_encryption_key']     = 'Khóa mật mã 1';
$_['entry_encryption_iv']      = 'Khóa mật mã 2';
$_['entry_account_id']         = 'ID tài khoản';
$_['entry_send_orders']        = 'Gửi đơn hàng tự động';
$_['entry_fulfill_policy']     = 'Chính sách hoàn thành';
$_['entry_shipping_speed']     = 'Tốc độ giao hàng mặc định';
$_['entry_debug_log']          = 'Kích hoạt ghi nhật ký Debug';
$_['entry_new_order_status']   = 'Thực hiện mới kích hoạt';
$_['entry_order_id_prefix']    = 'Tiền tố đặt hàng';
$_['entry_only_fill_complete'] = 'Tất cả các mục phải được FBA';

// Help
$_['help_api_key']             = 'Đây là mã thông báo API của bạn, có được điều này từ khu vực tài khoản Pro openbay của bạn';
$_['help_encryption_key']      = 'Đây là khóa mã hóa của bạn #1, có được điều này từ khu vực tài khoản Pro openbay của bạn';
$_['help_encryption_iv']       = 'Đây là khóa mã hóa của bạn #2, có được điều này từ khu vực tài khoản Pro openbay của bạn';
$_['help_account_id']          = 'Đây là ID tài khoản phù hợp với tài khoản Amazon đăng ký cho openbay Pro, có được điều này từ khu vực tài khoản Pro openbay của bạn';
$_['help_send_orders']  	   = 'Đơn đặt hàng có chứa phù hợp thực hiện bởi các sản phẩm Amazon sẽ được gửi đến Amazon tự động';
$_['help_fulfill_policy']  	   = 'Các chính sách thực hiện mặc định (fillall-tất cả các fulfillable mục trong thực hiện theo thứ tự được vận chuyển. Việc thực hiện trật tự vẫn còn trong một trạng thái xử lý cho đến khi tất cả các mục hoặc được vận chuyển bởi Amazon hoặc hủy bỏ bởi người bán. Fillallavailable-tất cả các fulfillable mục trong thực hiện theo thứ tự được vận chuyển. Tất cả các unfulfillable mục trong đơn đặt hàng được hủy bỏ bởi Amazon. fillorkill-nếu một mục trong một trật tự thực hiện được xác định là unfulfillable trước khi bất kỳ lô hàng theo thứ tự di chuyển đến tình trạng đang chờ giải quyết (quá trình chọn các đơn vị từ kho đã bắt đầu), sau đó là toàn bộ trật tự được xem là unfulfillable. Tuy nhiên, nếu một mục trong một trật tự thực hiện được xác định là unfulfillable sau khi một lô hàng theo thứ tự di chuyển đến tình trạng đang chờ giải quyết, Amazon hủy bỏ càng nhiều của thực hiện đặt hàng càng tốt.';
$_['help_shipping_speed']  	   = 'Đây là mặc định tốc độ vận chuyển thể loại để áp dụng cho các đơn đặt hàng mới, các cấp dịch vụ khác nhau có thể incurr chi phí khác nhau';
$_['help_debug_log']  		   = 'Nhật ký gỡ lỗi sẽ ghi lại thông tin vào một tập tin đăng nhập về các hành động của mô-đun nào. Điều này cần được kích hoạt lại để giúp tìm thấy nguyên nhân của bất kỳ vấn đề.';
$_['help_new_order_status']    = 'Đây là tình trạng đặt hàng mà sẽ kích hoạt các đơn đặt hàng để được tạo ra để thực hiện. Đảm bảo rằng điều này chỉ sử dụng trạng thái sau khi bạn đã nhận được thanh toán.';
$_['help_order_id_prefix']     = 'Có một tiền tố đặt hàng sẽ giúp xác định các đơn đặt hàng đã đến từ cửa hàng của bạn không từ tích hợp khác. Điều này là rất hữu ích khi các thương gia bán trên thị trường nhiều người và sử dụng FBA';
$_['help_only_fill_complete']  = 'Điều này sẽ chỉ cho phép đơn đặt hàng để được gửi cho thực hiện nếu tất cả các mục theo thứ tự được phù hợp với một thực hiện bởi mục Amazon. Nếu bất kỳ mục nào thì không phải là toàn bộ trật tự sẽ vẫn chưa đầy.';

// Error
$_['error_api_connect']        = 'Thất bại khi kết nối tới API';
$_['error_account_info']       = 'Không thể xác minh kết nối API để thực hiện bởi Amazon ';
$_['error_api_key']    		   = 'Mã thông báo API không hợp lệ';
$_['error_api_account_id']     = 'ID tài khoản không hợp lệ';
$_['error_encryption_key']     = 'Khoá mật mã #1 không hợp lệ';
$_['error_encryption_iv']      = 'Khoá mật mã #2 không hợp lệ';
$_['error_validation']    	   = 'Có lỗi khi phê chuẩn chi tiết của bạn';

// Tabs
$_['tab_api_info']             = 'Chi tiết API';

// Buttons
$_['button_verify']            = 'Xác minh chi tiết';
