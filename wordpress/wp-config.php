<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wp_learnwp' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OV86-;,ziQ+Xbr8N=-oovw[*OUJy,H|.A-^t5WO_lV.OT(i!6T&a2j/P<j1@.CqF' );
define( 'SECURE_AUTH_KEY',  '@pS{m]-)]g27Tf!ctnm;o)hH4vB#q6eUY``s97V#l&qMhIWeHc|O|:8wQEd$)zG ' );
define( 'LOGGED_IN_KEY',    'K*13lhW5slPvjMs{B`~KxgOAqTp9xG])r6o46f;.eu#vju*TH>^&^){}TW]#x9$r' );
define( 'NONCE_KEY',        'gH:0uH(xLv$vNPi`:,0;O[^*6gC|PG~]GDQz2zO!fsL{NO.*;YbmbeUXhUQPv|x.' );
define( 'AUTH_SALT',        'FOsC,<G8=!S5Th>A*Oi|$J<r4{({MHR_#p}/q^*D4-;2bieo<Kg}H1a Xw_Q;FbF' );
define( 'SECURE_AUTH_SALT', 'cR57A_Cc8^_`0v<PYe1VGz07>`*mjU>x ?GV*@49%A=bqHG+],t::VQ.[m`&qH&2' );
define( 'LOGGED_IN_SALT',   '-$.<X7B0S)+{Sqzj~2s,zj a`eMui/|z&F8k>zcxY/?9>lIJ_8R<$e2){yD~f>%U' );
define( 'NONCE_SALT',       'As[kcWAH=Z,^OfNEuGp}f8CgI)M#/9coA,zk^1n!F1C`6{y]o[RLXKDCTO^?fGT_' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wpl_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
