<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Examples:
// on RedHat try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
@setlocale(LC_TIME, 'en_US.ISO_8859-1');

define('DATE_FORMAT_SHORT', '%m/%d/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'm/d/Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('JQUERY_DATEPICKER_I18N_CODE', ''); // leave empty for en_US; see http://jqueryui.com/demos/datepicker/#localization
define('JQUERY_DATEPICKER_FORMAT', 'mm/dd/yy'); // see http://docs.jquery.com/UI/Datepicker/formatDate

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'USD');

// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="ltr" lang="en"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// page title
define('TITLE', STORE_NAME);

// header text in includes/header.php
define('HEADER_TITLE_CREATE_ACCOUNT', '会員情報登録');
define('HEADER_TITLE_MY_ACCOUNT', '会員情報');
define('HEADER_TITLE_CART_CONTENTS', '買い物かご');
define('HEADER_TITLE_CHECKOUT', '注文確定');
define('HEADER_TITLE_TOP', 'トップ');
define('HEADER_TITLE_CATALOG', '商品リスト');
define('HEADER_TITLE_LOGOFF', 'ログアウト');
define('HEADER_TITLE_LOGIN', 'ログイン');
define('HEADER_TITLE_LANG_SWITCH', 'English');
define('HEADER_TITLE_LANG_SWITCH_CODE', 'en');

// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'リクエスト');

// text for gender
define('MALE', '男');
define('FEMALE', '女');
define('MALE_ADDRESS', 'Mr.');
define('FEMALE_ADDRESS', 'Ms.');

// text for date of birth example
define('DOB_FORMAT_STRING', 'mm/dd/yyyy');

// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', '配達情報');
define('CHECKOUT_BAR_PAYMENT', '支払情報');
define('CHECKOUT_BAR_CONFIRMATION', '確認');
define('CHECKOUT_BAR_FINISHED', '完了');

// pull down default text
define('PULL_DOWN_DEFAULT', 'お選びください');
define('TYPE_BELOW', 'Type Below');

// javascript messages
define('JS_ERROR', 'フォームの情報に誤りがあります。.\n\n下記をご確認を上、再入力お願いを申し上げます。:\n\n');

define('JS_REVIEW_TEXT', '*  \'レビューテキスト\' 必須項目 ' . REVIEW_TEXT_MIN_LENGTH . ' 文字.\n');
define('JS_REVIEW_RATING', '* あなたのレビューのために製品を評価しなければなりません。\n');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* ご注文のお支払い方法を選択。\n');

define('JS_ERROR_SUBMITTED', 'このフォームは、既に送信されました。[OK]を押して、完了するために、このプロセスのためにお待ちください。');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', '支払方法を選択してください。');

define('CATEGORY_COMPANY', '会社情報');
define('CATEGORY_PERSONAL', 'あなたの個人情報');
define('CATEGORY_ADDRESS', 'ご住所');
define('CATEGORY_CONTACT', 'あなたの連絡先情報');
define('CATEGORY_OPTIONS', 'オプション');
define('CATEGORY_PASSWORD', 'パスワード');

define('ENTRY_COMPANY', '会社名:');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', '性別:');
define('ENTRY_GENDER_ERROR', '性別を選んでください。');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', '名:');
define('ENTRY_FIRST_NAME_ERROR', 'あなたのお名前は少なくとも ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' 文字以上が必要です。');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', '姓:');
define('ENTRY_LAST_NAME_ERROR', '姓は少なくても ' . ENTRY_LAST_NAME_MIN_LENGTH . ' 文字以上が必要です。');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', '生年月日:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '次の形式で入力してください。（月/日/年）: MM/DD/YYYY (eg 05/21/1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (例. 05/21/1970)');
define('ENTRY_EMAIL_ADDRESS', '電子メールアドレス:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'あなたの電子メールアドレスは少なくても ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' 文字以上の入力が必要です。');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '入力された電子メールアドレスが無効です。必要な修正を行ってください。');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'ご登録の電子メールアドレスでログインするか、別のアドレスでアカウントを作成してください。');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS', '町名、番地:');
define('ENTRY_STREET_ADDRESS_ERROR', '町名、番地は少なくても ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' 文字以上の入力が必要です。');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', '建物名:');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', '郵便番号:');
define('ENTRY_POST_CODE_ERROR', '郵便番号は少なくても ' . ENTRY_POSTCODE_MIN_LENGTH . ' 文字以上の入力が必要です。');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', '市区町村:');
define('ENTRY_CITY_ERROR', '市区町村は少なくても ' . ENTRY_CITY_MIN_LENGTH . ' 文字以上の入力が必要です。');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', '都道府県:');
define('ENTRY_STATE_ERROR', '都道府県は少なくても ' . ENTRY_STATE_MIN_LENGTH . ' 文字以上の入力が必要です。');
define('ENTRY_STATE_ERROR_SELECT', '米国のプルダウンメニューから状態を選択してください。');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY', '国:');
define('ENTRY_COUNTRY_ERROR', 'プルダウンリストから国を選択してください。');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', '電話番号:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '電話番号は少なくても ' . ENTRY_TELEPHONE_MIN_LENGTH . ' 文字以上でないといけませんね。');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Fax番号:');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'ニュースレター:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', '購読');
define('ENTRY_NEWSLETTER_NO', '購読解除');
define('ENTRY_PASSWORD', 'パスワード:');
define('ENTRY_PASSWORD_ERROR', 'パスワードは少なくても ' . ENTRY_PASSWORD_MIN_LENGTH . '文字以上の入力が必要です。');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'パスワードが一致しません。');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', 'パスワードの確認:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', '現在のパスワード:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'パスワードは少なくても ' . ENTRY_PASSWORD_MIN_LENGTH . '文字以上の入力が必要です。');
define('ENTRY_PASSWORD_NEW', '新しいパスワード:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', '新しいパスワードは少なくても ' . ENTRY_PASSWORD_MIN_LENGTH . '文字以上の入力が必要です。');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'パスワードが一致しませんね。');
define('PASSWORD_HIDDEN', '--HIDDEN--');

define('FORM_REQUIRED_INFORMATION', '* 必須項目');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', '結果ページ:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', '表示 <strong>%d</strong> まで <strong>%d</strong> ( <strong>%d</strong> の商品)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Displaying <strong>%d</strong> まで <strong>%d</strong> (of <strong>%d</strong> 注文)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Displaying <strong>%d</strong> まで <strong>%d</strong> (of <strong>%d</strong> レビュー)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Displaying <strong>%d</strong> まで <strong>%d</strong> (of <strong>%d</strong> 新商品)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Displaying <strong>%d</strong> まで <strong>%d</strong> (of <strong>%d</strong> スペシャル)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'トップページ');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', '前のページ');
define('PREVNEXT_TITLE_NEXT_PAGE', '次のページ');
define('PREVNEXT_TITLE_LAST_PAGE', '最後のページ');
define('PREVNEXT_TITLE_PAGE_NO', 'Page %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', ' %d のページの前のセット');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', '%d の次のページのセット');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;トップ');
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;前]');
define('PREVNEXT_BUTTON_NEXT', '[次&nbsp;&gt;&gt;]');
define('PREVNEXT_BUTTON_LAST', '最後&gt;&gt;');

define('IMAGE_BUTTON_ADD_ADDRESS', '住所追加');
define('IMAGE_BUTTON_ADDRESS_BOOK', 'アドレス帳');
define('IMAGE_BUTTON_BACK', '戻る');
define('IMAGE_BUTTON_BUY_NOW', '今すぐ購入します。');
define('IMAGE_BUTTON_CHANGE_ADDRESS', '住所変更');
define('IMAGE_BUTTON_CHECKOUT', '購入');
define('IMAGE_BUTTON_CONFIRM_ORDER', '注文の確定');
define('IMAGE_BUTTON_CONTINUE', '次へ');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', '買い物を続ける');
define('IMAGE_BUTTON_DELETE', '削除');
define('IMAGE_BUTTON_EDIT_ACCOUNT', '登録情報の編集');
define('IMAGE_BUTTON_HISTORY', '注文履歴');
define('IMAGE_BUTTON_LOGIN', 'ログイン');
define('IMAGE_BUTTON_IN_CART', '買い物かごに入れる');
define('IMAGE_BUTTON_NOTIFICATIONS', '通知');
define('IMAGE_BUTTON_QUICK_FIND', '検索');
define('IMAGE_BUTTON_REMOVE_NOTIFICATIONS', '通知を削除');
define('IMAGE_BUTTON_REVIEWS', 'レビュー');
define('IMAGE_BUTTON_SEARCH', '検索');
define('IMAGE_BUTTON_SHIPPING_OPTIONS', '配送オプション');
define('IMAGE_BUTTON_TELL_A_FRIEND', '友だちに教える');
define('IMAGE_BUTTON_UPDATE', '変更');
define('IMAGE_BUTTON_UPDATE_CART', '買い物かごの更新');
define('IMAGE_BUTTON_WRITE_REVIEW', 'レビューを書く');

define('SMALL_IMAGE_BUTTON_DELETE', '削除');
define('SMALL_IMAGE_BUTTON_EDIT', '編集');
define('SMALL_IMAGE_BUTTON_VIEW', '見る');

define('ICON_ARROW_RIGHT', 'もっと');
define('ICON_CART', 'かごの中身');
define('ICON_ERROR', 'エラー');
define('ICON_SUCCESS', '完了');
define('ICON_WARNING', '警告');

define('TEXT_GREETING_PERSONAL', 'ようこそ <span class="greetUser">%sさん!</span> こちらの<a href="%s"><u>新商品</u></a> を見てみますか？');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>もしあなたが %sさんでなければ、あなたのアカウントで <a href="%s"><u>ログイン</u></a> してください。</small>');
define('TEXT_GREETING_GUEST', 'ようこそ <span class="greetUser">Guestさん!</span> こちらから <a href="%s"><u>ログイン</u></a>してください。初めての方はアカウントの <a href="%s"><u>新規作成</u></a>をしてください。');

define('TEXT_SORT_PRODUCTS', '商品の並べ替え ');
define('TEXT_DESCENDINGLY', '降順');
define('TEXT_ASCENDINGLY', '昇順');
define('TEXT_BY', ' by ');

define('TEXT_REVIEW_BY', ' %sさんから');
define('TEXT_REVIEW_WORD_COUNT', '%s 内容');
define('TEXT_REVIEW_RATING', '評価: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', '日付: %s');
define('TEXT_NO_REVIEWS', '商品のレビューはまだありません。');

define('TEXT_NO_NEW_PRODUCTS', '現在商品はありません。');

define('TEXT_UNKNOWN_TAX_RATE', '未知の税率');

define('TEXT_REQUIRED', '<span class="errorText">必須</span>');

define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><strong><small>TEP ERROR:</small> 指定したSMTPサーバーを介して電子メールを送信することはできません。 php.iniの設定を確認し、SMTPサーバーを必要に応じて修正してください。</strong></font>');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'クレジットカードのために入力した有効期限が無効です。日付を確認して、もう一度お試しください。');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', '入力したクレジットカード番号が無効です。番号を確認してから、もう一度やり直してください。');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', '番号の最初の4桁は、入力: %s. その番号が正しければ、我々はクレジットカードのタイプを受け入れません。 それが間違っている場合は、もう一度やり直してください。');

define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a><br />Powered by <a href="http://www.oscommerce.com" target="_blank">osCommerce</a>');
?>
