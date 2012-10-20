<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', '友だちに教える');

define('HEADING_TITLE', ' \'%s\'について友だちに教える');

define('FORM_TITLE_CUSTOMER_DETAILS', 'あなたの詳細');
define('FORM_TITLE_FRIEND_DETAILS', 'お友だちについて');
define('FORM_TITLE_FRIEND_MESSAGE', 'あなたのメッセージ');

define('FORM_FIELD_CUSTOMER_NAME', 'あなたのお名前:');
define('FORM_FIELD_CUSTOMER_EMAIL', 'あなたの E-Mail アドレス:');
define('FORM_FIELD_FRIEND_NAME', 'お友だちのお名前:');
define('FORM_FIELD_FRIEND_EMAIL', 'お友達の E-Mail アドレス:');

define('TEXT_EMAIL_SUCCESSFUL_SENT', 'あなたの <strong>%s</strong> についてのEメールは <strong>%s</strong>.');

define('TEXT_EMAIL_SUBJECT', 'あなたのお友だちの %s さんがこの素晴らしい商品を推薦しています。 %s');
define('TEXT_EMAIL_INTRO', 'こんにちは %sさん!' . "\n\n" . 'あなたのお友だち, %sさんが%sをお勧めしています。%sで買いました。');
define('TEXT_EMAIL_LINK', '下のリンクをクリックして商品を表示したり、Webブラウザにリンクをコピーして貼り付けるには:' . "\n\n" . '%s');
define('TEXT_EMAIL_SIGNATURE', 'ありがとうございます！' . "\n\n" . '%s');

define('ERROR_TO_NAME', 'Error: あなたの友人の名は空白にできません。');
define('ERROR_TO_ADDRESS', 'Error: あなたのお友だちの 電子メールアドレスは、有効なものでなければなりません。');
define('ERROR_FROM_NAME', 'Error: あなたの名は空白にできません。');
define('ERROR_FROM_ADDRESS', 'Error: あなたの電子メールアドレスは有効なものでなければなりません。');
define('ERROR_ACTION_RECORDER', 'Error: 電子メールがすでに送信されています。 %s分後にもう一度やり直してください。');
?>
