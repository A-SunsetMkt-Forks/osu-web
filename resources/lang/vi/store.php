<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'cart' => [
        'checkout' => 'Thanh Toán',
        'empty_cart' => 'Xoá tất cả mặt hàng khỏi giỏ hàng',
        'info' => ':count_delimited sản phẩm trong giỏ ($:subtotal)|:count_delimited sản phẩm trong giỏ ($:subtotal)',
        'more_goodies' => 'Tôi muốn xem thêm nhiều mặt hàng nữa trước khi hoàn thành đơn hàng',
        'shipping_fees' => 'phí vận chuyển',
        'title' => 'Giỏ Hàng',
        'total' => 'tổng cộng',

        'errors_no_checkout' => [
            'line_1' => 'Uh oh, đã có vấn đề với giỏ hàng của bạn làm ngăn cản việc thanh toán!',
            'line_2' => 'Loại bỏ hoặc cập nhật các mặt hàng phía trên để tiếp tục.',
        ],

        'empty' => [
            'text' => 'Giỏ hàng của bạn không có gì cả.',
            'return_link' => [
                '_' => 'Trở về :link để tìm thêm nhiều mặt hàng khác!',
                'link_text' => 'danh sách',
            ],
        ],
    ],

    'checkout' => [
        'cart_problems' => 'Uh oh, có vấn đề với giỏ hàng của bạn!',
        'cart_problems_edit' => 'Nhấp vào đây để chỉnh sửa nó.',
        'declined' => 'Thanh toán đã bị hủy.',
        'delayed_shipping' => 'Hiện tại chúng tôi đang có một lượng đơn hàng rất lớn! Bạn vẫn có thể thoải mái đặt hàng, nhưng vui lòng đợi **thêm 1-2 tuần** trong khi chúng tôi bắt kịp với những đơn hàng hiện tại.',
        'hide_from_activity' => 'Ẩn tất cả thẻ osu!supporter trong đơn hàng này khỏi hoạt động của tôi',
        'old_cart' => 'Giỏ hàng của bạn đã hết hạn và đã được nạp lại, vui lòng thử lại sau.',
        'pay' => 'Thanh toán với Paypal',
        'title_compact' => 'thanh toán',

        'has_pending' => [
            '_' => 'Bạn có thanh toán chưa hoàn thành, nhấp vào :link để xem.',
            'link_text' => 'đây',
        ],

        'pending_checkout' => [
            'line_1' => 'Lần thanh toán trước đã bắt đầu nhưng chưa kết thúc.',
            'line_2' => 'Tiếp tục thanh toán bằng cách chọn một cách thanh toán.',
        ],
    ],

    'discount' => 'tiết kiệm :percent%',
    'free' => 'miễn phí!',

    'invoice' => [
        'contact' => 'Liên hệ:',
        'date' => 'Ngày:',
        'echeck_delay' => 'Vì bạn thanh toán bằng eCheck, hãy chờ thêm tối đa 10 ngày để thanh toán qua khỏi PayPal!',
        'echeck_denied' => 'Thanh toán eCheck đã bị PayPal từ chối.',
        'hide_from_activity' => 'thẻ osu!supporter ở trong đơn hàng này sẽ không được hiện lên ở trong hoạt động gần đây của bạn.',
        'sent_via' => 'Đã gửi qua:',
        'shipping_to' => 'Vận chuyển đến:',
        'title' => 'Hoá đơn',
        'title_compact' => 'hóa đơn',

        'status' => [
            'cancelled' => [
                'title' => 'Đơn hàng đã bị huỷ',
                'line_1' => [
                    '_' => "Nếu bạn không yêu cầu hủy, vui lòng liên hệ :link trích dẫn số đơn hàng của bạn (#:order_number).",
                    'link_text' => 'hỗ trợ osu!store',
                ],
            ],
            'delivered' => [
                'title' => 'Đơn hàng của bạn đã được giao! Chúng tôi hy vọng bạn thích nó!',
                'line_1' => [
                    '_' => 'Nếu bạn có bất kỳ vấn đề gì khi mua hàng, vui lòng liên hệ :link.',
                    'link_text' => 'hỗ trợ osu!store',
                ],
            ],
            'prepared' => [
                'title' => 'Đơn hàng của bạn đang được chuẩn bị!',
                'line_1' => 'Vui lòng chờ thêm một thời gian nữa để hàng được chuyển đi. Thông tin theo dõi sẽ xuất hiện ở đây sau khi đơn hàng được xử lý và gửi. Việc này có thể mất tới 5 ngày (nhưng thường ít hơn!) tùy thuộc vào độ bận rộn của chúng tôi.',
                'line_2' => 'Chúng tôi gửi tất cả các đơn hàng từ Nhật Bản bằng nhiều dịch vụ vận chuyển tùy theo trọng lượng và giá trị. Khu vực này sẽ cập nhật thông tin cụ thể sau khi chúng tôi gửi đơn đặt hàng.',
            ],
            'processing' => [
                'title' => 'Thanh toán của bạn chưa được xác nhận!',
                'line_1' => 'Nếu bạn đã thanh toán, chúng tôi có thể vẫn đang đợi xác nhận của thanh toán của bạn. Hãy tải lại trang này trong khoảng một đến hai phút!',
                'line_2' => [
                    '_' => 'Nếu bạn gặp sự cố trong quá trình thanh toán, :link',
                    'link_text' => 'nhấp vào đây để tiếp tục quá trình thanh toán',
                ],
            ],
            'shipped' => [
                'title' => 'Đơn hàng đã được giao!',
                'tracking_details' => 'Chi tiết theo dõi như sau:',
                'no_tracking_details' => [
                    '_' => "Chúng tôi không có chi tiết theo dõi vì chúng tôi đã gửi gói hàng của bạn qua Air Mail, nhưng bạn có thể nhận được gói hàng trong vòng 1-3 tuần. Đối với Châu Âu, đôi khi hải quan có thể trì hoãn đơn hàng ngoài tầm kiểm soát của chúng tôi. Nếu bạn có bất kỳ thắc mắc nào, vui lòng trả lời email xác nhận đơn hàng bạn nhận được :link.",
                    'link_text' => 'gửi email cho chúng tôi',
                ],
            ],
        ],
    ],

    'order' => [
        'cancel' => 'Huỷ đơn hàng',
        'cancel_confirm' => 'Đơn hàng này sẽ bị hủy và giao dịch sẽ không được chấp nhận. Nhà cung cấp dịch vụ thanh toán có thể sẽ không hoàn tiền ngay. Bạn có chắc không?',
        'cancel_not_allowed' => 'Đơn hàng không thể bị hủy lúc này.',
        'invoice' => 'Xem Hóa Đơn',
        'no_orders' => 'Không có đơn đặt hàng.',
        'paid_on' => 'Đã đặt hàng :date',
        'resume' => 'Tiếp Tục Thanh Toán',
        'shipping_and_handling' => 'Vận chuyển & Xử lí',
        'shopify_expired' => 'Link thanh toán cho đơn hàng này đã hết hạn.',
        'subtotal' => 'Tổng phụ',
        'total' => 'Tổng cộng',

        'details' => [
            'order_number' => 'Đơn hàng #',
            'payment_terms' => 'Điều khoản thanh toán',
            'salesperson' => 'Người bán hàng',
            'shipping_method' => 'Phương thức vận chuyển',
            'shipping_terms' => 'Điều khoản vận chuyển',
            'title' => 'Chi tiết đơn hàng',
        ],

        'item' => [
            'quantity' => 'Số lượng',

            'display_name' => [
                'supporter_tag' => ':name cho :username (:duration)',
            ],

            'subtext' => [
                'supporter_tag' => 'Số tin nhắn: :message',
            ],
        ],

        'not_modifiable_exception' => [
            'cancelled' => 'Bạn không thể chỉnh sửa đơn hàng vì nó đã bị hủy bỏ.',
            'checkout' => 'Bạn không thể chỉnh sửa đơn hàng trong khi nó đang được xử lý.', // checkout and processing should have the same message.
            'default' => 'Đơn hàng không thể sửa đổi',
            'delivered' => 'Bạn không thể chỉnh sửa đơn hàng vì nó đã được giao.',
            'paid' => 'Bạn không thể chỉnh sửa đơn hàng vì nó đã được thanh toán.',
            'processing' => 'Bạn không thể chỉnh sửa đơn hàng trong khi nó đang được xử lý.',
            'shipped' => 'Bạn không thể chỉnh sửa đơn hàng vì nó đã được vận chuyển.',
        ],

        'status' => [
            'cancelled' => 'Đã Hủy',
            'checkout' => 'Đang Chuẩn Bị',
            'delivered' => 'Đã Giao Hàng',
            'paid' => 'Đã Thanh Toán',
            'processing' => 'Đang chờ xác nhận',
            'shipped' => 'Đã giao hàng',
            'title' => 'Trạng thái đơn hàng',
        ],

        'thanks' => [
            'title' => 'Cảm ơn đơn hàng của bạn!',
            'line_1' => [
                '_' => 'Bạn sẽ nhận được một email xác nhận. Nếu bạn có bất kỳ thắc mắc nào, vui lòng :link!',
                'link_text' => 'liên hệ chúng tôi',
            ],
        ],
    ],

    'product' => [
        'name' => 'Tên',

        'stock' => [
            'out' => 'Mặt hàng này hiện đang hết hàng. Kiểm tra lại sau!',
            'out_with_alternative' => 'Rất tiếc, sản phẩm này đã hết hàng. Sử dụng bảng chọn thả xuống để chọn loại khác hoặc kiểm tra lại sau!',
        ],

        'add_to_cart' => 'Thêm Vào Giỏ Hàng',
        'notify' => 'Thông báo cho tôi khi có hàng!',
        'out_of_stock' => '',

        'notification_success' => 'bạn sẽ được thông báo khi chúng tôi có hàng mới. nhấp vào :link để hủy',
        'notification_remove_text' => 'đây',

        'notification_in_stock' => 'Sản phẩm này đã có trong kho!',
    ],

    'supporter_tag' => [
        'gift' => 'tặng người chơi khác',
        'gift_message' => 'thêm một lời nhắn vào món quà của bạn!( lên tới :length chữ)',

        'require_login' => [
            '_' => 'Bạn cần phải :link để nhận một osu!supporter tag!',
            'link_text' => 'đăng nhập',
        ],
    ],

    'username_change' => [
        'check' => 'Nhập tên người dùng để kiểm tra tính khả dụng!',
        'checking' => 'Đang kiểm tra tính khả dụng của :username...',
        'placeholder' => 'Tên người dùng được yêu cầu',
        'label' => 'Tên người dùng mới',
        'current' => 'Tên người dùng hiện tại của bạn là ":username".',

        'require_login' => [
            '_' => 'Bạn cần phải :link để đổi tên!',
            'link_text' => 'đăng nhập',
        ],
    ],

    'xsolla' => [
        'distributor' => '',
    ],
];
