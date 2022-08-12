// import { registerBlockType } from "@wordpress/blocks";
// import { __ } from "@wordpress/i18n";
// import { RichText, InspectorControls } from "@wordpress/block-editor";
// import { PanelBody, RadioControl } from "@wordpress/components";
// import { getIconComponent } from "./icons-map";
// import Edit from "./edit";

// registerBlockType("aquila-blocks/heading", {
// 	title: __("Heading With Icon ", "aquila"),
// 	description: __(
// 		"Add Heading and select icon .This is Description for This Blcok  ",
// 		"aquila"
// 	),
// 	icon: "admin-customizer",
// 	category: "aquila",
// 	attributes: {
// 		option: {
// 			type: "string",
// 			default: "dos",
// 		},
// 		content: {
// 			type: "string",
// 			source: "html",
// 			selector: "h4",
// 			default: __("Dos", "aquila"),
// 		},
// 	},
// 	edit: Edit,
// 	save({ attributes: { content, option } }) {
// 		const HeadingIcon = getIconComponent(option);
// 		return (
// 			<div className="aquila-icon-heading">
// 				<span className="aquila-icon-heading__heading">
// 					<HeadingIcon />
// 				</span>
// 				<RichText.Content tagName="h4" value={content} />
// 			</div>
// 		);
// 	},
// });

/**
 * Heading with Icon block.
 *
 * @package Aquila
 */

import { getIconComponent } from "./icons-map";

/**
 * Internal dependencies.
 */
import Edit from "./edit";

/**
 * WordPress Dependencies.
 */
import { __ } from "@wordpress/i18n";
import { registerBlockType } from "@wordpress/blocks";
import { RichText } from "@wordpress/block-editor";

/**
 * Register block type.
 */
registerBlockType("aquila-blocks/heading", {
	/**
	 * Block title.
	 *
	 * @type {string}
	 */
	title: __("Heading with Icon", "aquila"),

	/**
	 * Block icon.
	 *
	 * @type {string}
	 */
	icon: "admin-customizer",

	/**
	 * Block description.
	 *
	 * @type {string}
	 */
	description: __("Add Heading and select Icons", "aquila"),

	/**
	 * Block category.
	 *
	 * @type {string}
	 */
	category: "aquila",

	/**
	 * Attributes.
	 */
	attributes: {
		option: {
			type: "string",
			default: "dos",
		},
		content: {
			type: "string",
			source: "html",
			selector: "h4",
			default: __("Dos", "aquila"),
		},
	},

	edit: Edit,

	save({ attributes: { option, content } }) {
		const HeadingIcon = getIconComponent(option);

		return (
			<div className="aquila-icon-heading">
				<span className="aquila-icon-heading__heading">
					<HeadingIcon />
				</span>
				{/* Saves <h2>Content added in the editor...</h2> to the database for frontend display */}
				<RichText.Content tagName="h4" value={content} />
			</div>
		);
	},
});
