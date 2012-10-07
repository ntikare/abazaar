<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', '詳細検索');
define('NAVBAR_TITLE_2', '検索結果');

define('HEADING_TITLE_1', '詳細検索');
define('HEADING_TITLE_2', '検索結果');

define('HEADING_SEARCH_CRITERIA', 'キーワード');

define('TEXT_SEARCH_IN_DESCRIPTION', '商品説明の中から検索');
define('ENTRY_CATEGORIES', 'カテゴリー:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'サブカテゴリーを含む');
define('ENTRY_MANUFACTURERS', 'メーカー・ブランド:');
define('ENTRY_PRICE_FROM', '最低価格:');
define('ENTRY_PRICE_TO', '最高価格:');
define('ENTRY_DATE_FROM', '開始日:');
define('ENTRY_DATE_TO', '終了日:');

define('TEXT_SEARCH_HELP_LINK', '<u>Search Help</u> [?]');

define('TEXT_ALL_CATEGORIES', 'すべてのカテゴリー');
define('TEXT_ALL_MANUFACTURERS', 'すべてのメーカー・ブランド');

define('HEADING_SEARCH_HELP', '検索ヘルプ');
define('TEXT_SEARCH_HELP', 'キーワードは、AND and/or ORで検索結果をより細かく制御できます。<br /><br />たとえば、 <u>Microsoft AND mouse</u> の場合Microsoftとmouse両方の単語を含む検索結果となります。一方、<u>mouse OR keyboard</u>の場合、mouseまたはkeyboard、あるいは両方の単語が含まれた検索結果となります。<br /><br />完全に一致するものは、""でキーワードを囲むことによって検索することができます。<br /><br />たとえば <u>"notebook computer"</u> では、notebook computerに一致する結果となります。<br /><br />（）は、結果セットのさらなる制御に使用できます。<br /><br />たとえば <u>Microsoft and (keyboard or mouse or "visual basic")</u>.');
define('TEXT_CLOSE_WINDOW', '<u>ウィンドウを閉じるw</u> [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', '型');
define('TABLE_HEADING_PRODUCTS', '商品名');
define('TABLE_HEADING_MANUFACTURER', 'メーカー・ブランド');
define('TABLE_HEADING_QUANTITY', '量');
define('TABLE_HEADING_PRICE', '価格');
define('TABLE_HEADING_WEIGHT', '重さ');
define('TABLE_HEADING_BUY_NOW', '今すぐ購入します。');

define('TEXT_NO_PRODUCTS', '検索条件に一致する製品はありません。');

define('ERROR_AT_LEAST_ONE_INPUT', '検索フォーム内のフィールドの少なくとも1つを入力する必要があります。');
define('ERROR_INVALID_FROM_DATE', '日付から無効。');
define('ERROR_INVALID_TO_DATE', '日付に無効な。');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', '日付するには、より大きいか、または日付からに等しくなければなりません。');
define('ERROR_PRICE_FROM_MUST_BE_NUM', '価格は数値でなければなりません。');
define('ERROR_PRICE_TO_MUST_BE_NUM', '価格は数値でなければなりません。');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', '価格は以上からの価格に等しくなければなりません。');
define('ERROR_INVALID_KEYWORDS', '無効なキーワード。');
?>
