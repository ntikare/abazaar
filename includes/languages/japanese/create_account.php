<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'アカウント作成');

define('HEADING_TITLE', 'アカウントの新規作成');

define('TEXT_ORIGIN_LOGIN', '<font color="#FF0000"><small><strong>NOTE:</strong></small></font> すでに会員登録をしている場合 <a href="%s"><u>こちら</u></a>からログインしてください。.');

define('EMAIL_SUBJECT', 'ようこそ ' . STORE_NAME. ' へ' );
define('EMAIL_GREET_MR', '%s'. '様' . "\n\n");
define('EMAIL_GREET_MS', '%s'. '様' . "\n\n");
define('EMAIL_GREET_NONE', 'Dear %s' . "\n\n". '様');
define('EMAIL_WELCOME', 'We welcome you to <strong>' . STORE_NAME . '</strong>.' . "\n\n");
define('EMAIL_TEXT', 'あなたは、当店における <strong>さまざまなサービス</strong> を利用できます。. それには以下の内容を含みます。:' . "\n\n" . '<li><strong>買い物カゴ</strong> - あなたがそれらを削除するか、またはそれらをチェックアウトするまで、あなたのオンラインショッピングカートに追加されたすべての製品が残っています。' . "\n" . '<li><strong>アドレス帳</strong> -我々は今、マーケット以外の別のアドレスにあなたの製品をお届けすることができます！これは、誕生日などに直接プレゼントを送ることに最適です。' . "\n" . '<li><strong>注文履歴</strong> - あなたは私たちと行った買い物の履歴を表示します。' . "\n" . '<li><strong>商品レビュー</strong> - 当社の他のお客様との商品に関するあなたの意見を共有します。' . "\n\n");
define('EMAIL_CONTACT', '当店ご利用についてご不明の点がございましたらお問い合わせください。: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', '<strong>Note:</strong> このメールアドレスは、お客様の意思によって私たちに与えられた。 退会ご希望の場合は、 ' . STORE_OWNER_EMAIL_ADDRESS . 'までご連絡ください。' . "\n");
?>
