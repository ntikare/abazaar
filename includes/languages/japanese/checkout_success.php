<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'お支払情報');
define('NAVBAR_TITLE_2', '完了');

define('HEADING_TITLE', 'ご注文は処理されました！');

define('TEXT_SUCCESS', 'ご注文が正常に処理されました！今回のご注文内容のメールをお送りいたしましたのでご確認ください。');
define('TEXT_NOTIFY_PRODUCTS', '下に選択した商品の最新情報をお知らせいたします。:');
define('TEXT_SEE_ORDERS', 'ここで <a href="' . tep_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">\'会員登録情報\'</a> を表示できます。ご注文の履歴は <a href="' . tep_href_link(FILENAME_ACCOUNT_HISTORY, '', 'SSL') . '">\'注文履歴\'</a>で表示できます。');
define('TEXT_CONTACT_STORE_OWNER', '質問は <a href="' . tep_href_link(FILENAME_CONTACT_US) . '">こちらまで</a>.');
define('TEXT_THANKS_FOR_SHOPPING', 'オンラインで私達と買物をしてくれてありがとう！');

define('TABLE_HEADING_COMMENTS', '今回のご注文について何かあればコメントを入力してください');

define('TABLE_HEADING_DOWNLOAD_DATE', '有効期限: ');
define('TABLE_HEADING_DOWNLOAD_COUNT', ' 残りのダウンロード');
define('HEADING_DOWNLOAD', 'ここにあなたの製品をダウンロード:');
define('FOOTER_DOWNLOAD', 'また、あとで製品をダウンロードすることができます。 \'%s\'');
?>