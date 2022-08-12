/**
 * Heading with Icon block.
 *
 * @package Aquila
 */

/**
 * Internal dependencies.
 */
import Edit from "./edit";

/**
 * WordPress Dependencies.
 */
import { __ } from "@wordpress/i18n";
import { registerBlockType } from "@wordpress/blocks";
import { InnerBlocks } from "@wordpress/block-editor";

/**
 * Register block type.
 */
registerBlockType("aquila-blocks/dos-and-donts", {
	/**
	 * Block title.
	 *
	 * @type {string}
	 */
	title: __("Dos and dont's", "aquila"),

	/**
	 * Block icon.
	 *
	 * @type {string}
	 */
	icon: "editor-table",

	/**
	 * Block description.
	 *
	 * @type {string}
	 */
	description: __("Add Heading and Text", "aquila"),

	/**
	 * Block category.
	 *
	 * @type {string}
	 */
	category: "aquila",

	/**
	 * Attributes.
	 */

	edit: Edit,

	save() {
		return (
			<div className="aquila-dos-and-donts">
				<InnerBlocks.Content />
			</div>
		);
	},
});
