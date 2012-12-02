<?php
/*
 $Id$

 osCommerce, Open Source E-Commerce Solutions
 http://www.oscommerce.com

 Copyright (c) 2010 osCommerce

 Released under the GNU General Public License
 */

class bm_president {
	var $code = 'bm_president';
	var $group = 'boxes';
	var $title;
	var $description;
	var $sort_order;
	var $enabled = false;

	function bm_president() {
		$this->title = MODULE_BOXES_PRESIDENT_TITLE;
		$this->description = MODULE_BOXES_PRESIDENT_DESCRIPTION;

		if ( defined('MODULE_BOXES_PRESIDENT_STATUS') ) {
			$this->sort_order = MODULE_BOXES_PRESIDENT_SORT_ORDER;
			$this->enabled = (MODULE_BOXES_PRESIDENT_STATUS == 'True');

			$this->group = ((MODULE_BOXES_PRESIDENT_CONTENT_PLACEMENT == 'Left Column') ? 'boxes_column_left' : 'boxes_column_right');
		}
	}

	function execute() {
		global $oscTemplate;

		$data = '<div class="ui-widget infoBoxContainer">' .
                  '  <div class="ui-widget-header infoBoxHeading">' . MODULE_BOXES_PRESIDENT_BOX_TITLE . '</div>' .
                  '  <div class="ui-widget-content infoBoxContents" style="text-align: left;">'
		.'<span align="left"><b>'.MODULE_BOXES_PRESIDENT_NAME_TITLE.'</b></span><br>'
		. MODULE_BOXES_PRESIDENT_NAME.'<br>'
		.'<span align="left"><b>'.MODULE_BOXES_PRESIDENT_CHILD_TITLE.' </b></span><br>'
		. MODULE_BOXES_PRESIDENT_CHILD_NAME.'<br>'
		.'</div>' 
        . ' <div class="ui-widget-content infoBoxContents" style="text-align: center;">'
		.tep_image(DIR_WS_IMAGES . 'president_saima.jpg', 'SAIMA', SMALL_IMAGE_WIDTH, SMALL_IMAGE_WIDTH)
		.'</div>' 
		.'</div>';

		$oscTemplate->addBlock($data, $this->group);
	}


	function isEnabled() {
		return $this->enabled;
	}

	function check() {
		return defined('MODULE_BOXES_PRESIDENT_STATUS');
	}

	function install() {
		tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable PRESIDENT Module', 'MODULE_BOXES_PRESIDENT_STATUS', 'True', 'Do you want to add the module to your shop?', '6', '1', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
		tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Content Placement', 'MODULE_BOXES_PRESIDENT_CONTENT_PLACEMENT', 'Right Column', 'Should the module be loaded in the left or right column?', '6', '1', 'tep_cfg_select_option(array(\'Left Column\', \'Right Column\'), ', now())");
		tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort Order', 'MODULE_BOXES_PRESIDENT_SORT_ORDER', '0', 'Sort order of display. Lowest is displayed first.', '6', '0', now())");
	}

	function remove() {
		tep_db_query("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
	}

	function keys() {
		return array('MODULE_BOXES_PRESIDENT_STATUS', 'MODULE_BOXES_PRESIDENT_CONTENT_PLACEMENT', 'MODULE_BOXES_PRESIDENT_SORT_ORDER');
	}
}
?>
