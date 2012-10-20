<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2012 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'ログイン');
define('NAVBAR_TITLE_2', 'パスワードを忘れました');

define('HEADING_TITLE', '私はパスワードを忘れました!');

define('TEXT_MAIN', 'パスワードを忘れた場合は、下記にメールアドレスを入力してください。パスワードを変更する方法をご連絡いたします。');

define('TEXT_PASSWORD_RESET_INITIATED', 'パスワードを変更する手順については、お使いの電子メールを確認してください。24時間またはパスワードが更新されるまで有効なリンクが含まれています。');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Error: 登録しているメールアドレスと違うようです。もう一度試してみてください。');

define('EMAIL_PASSWORD_RESET_SUBJECT', STORE_NAME . ' - 新しいパスワード');
define('EMAIL_PASSWORD_RESET_BODY',  STORE_NAME . ' の新しいパスワード。' . "\n\n" . 'あなたのパスワードを変更するには、このリンクをクリックしてください。:' . "\n\n" . '%s' . "\n\n" . 'このリンクは自動的に、24時間後またはパスワードが変更された後に破棄されます。' . "\n\n" . 'オンラインサービスについてご不明の点がございました、電子メールにてご連絡ください。: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");

define('ERROR_ACTION_RECORDER', 'Error: パスワードリセットのリンクが既に送信されています。 %s 分後にもう一度やり直してください。');
?>