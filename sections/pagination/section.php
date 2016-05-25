<?php
/*
	Section: Post/Page Pagination
	Author: PageLines
	Author URI: http://www.pagelines.com
	Description: Pagination - A numerical post/page navigation. (Supports WP-PageNavi)
	Class Name: PageLinesPagination
	Workswith: main
*/

/**
 * Post/Page navigation Section
 *
 * @package PageLines Framework
 * @author PageLines
 */
class PageLinesPagination extends PageLinesSection {

	/**
	* Section template.
	*/
   function section_template($clone_id) {
		pagelines_pagination();
	}
}
