<?php
/*
 $Id$

 osCommerce, Open Source E-Commerce Solutions
 http://www.oscommerce.com

 Copyright (c) 2010 osCommerce

 Released under the GNU General Public License
 */

class bm_flags {
	var $code = 'bm_flags';
	var $group = 'boxes';
	var $title;
	var $description;
	var $sort_order;
	var $enabled = false;

	function bm_flags() {
		$this->title = MODULE_BOXES_FLAGS_TITLE;
		$this->description = MODULE_BOXES_FLAGS_DESCRIPTION;

		if ( defined('MODULE_BOXES_FLAGS_STATUS') ) {
			$this->sort_order = MODULE_BOXES_FLAGS_SORT_ORDER;
			$this->enabled = (MODULE_BOXES_FLAGS_STATUS == 'True');

			$this->group = ((MODULE_BOXES_FLAGS_CONTENT_PLACEMENT == 'Left Column') ? 'boxes_column_left' : 'boxes_column_right');
		}
	}

	function execute() {
		global $oscTemplate;

		$data = '<div class="ui-widget infoBoxContainer">' .
                  '  <div class="ui-widget-header infoBoxHeading">' . MODULE_BOXES_FLAGS_BOX_TITLE . '</div>' .
                  '  <div class="ui-widget-content infoBoxContents" style="text-align: center;">'
		.tep_image(DIR_WS_IMAGES . 'srilanka.png', 'srilanka', '48', '30')
		.'&nbsp;&nbsp;'
		.tep_image(DIR_WS_IMAGES . 'myanmar.png', 'myanmar', '48', '30')
		.'&nbsp;&nbsp;<br>' 
		.tep_image(DIR_WS_IMAGES . 'thai.png', 'thai', '48', '30')
		.'&nbsp;&nbsp;'
		.tep_image(DIR_WS_IMAGES . 'iran.png', 'iran', '48', '30')
		.'&nbsp;&nbsp;<br>' 
		.'</div>' 
		.'</div>';

		$oscTemplate->addBlock($data, $this->group);
	}


	function isEnabled() {
		return $this->enabled;
	}

	function check() {
		return defined('MODULE_BOXES_FLAGS_STATUS');
	}

	function install() {
		tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable FLAGS Module', 'MODULE_BOXES_FLAGS_STATUS', 'True', 'Do you want to add the module to your shop?', '6', '1', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
		tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Content Placement', 'MODULE_BOXES_FLAGS_CONTENT_PLACEMENT', 'Right Column', 'Should the module be loaded in the left or right column?', '6', '1', 'tep_cfg_select_option(array(\'Left Column\', \'Right Column\'), ', now())");
		tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort Order', 'MODULE_BOXES_FLAGS_SORT_ORDER', '0', 'Sort order of display. Lowest is displayed first.', '6', '0', now())");
	}

	function remove() {
		tep_db_query("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
	}

	function keys() {
		return array('MODULE_BOXES_FLAGS_STATUS', 'MODULE_BOXES_FLAGS_CONTENT_PLACEMENT', 'MODULE_BOXES_FLAGS_SORT_ORDER');
	}
}
?>
