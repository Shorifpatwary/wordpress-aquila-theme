import { InnerBlocks } from "@wordpress/block-editor";
import { __ } from "@wordpress/i18n";
import {} from "@wordpress/components";
import { blockColums } from "./templates";

const ALLOWED_BLOCKS = ["core/group"];
const TEMPLATE = [
	[
		"core/group",
		{
			className: "aquial-dos-and-donts__group",
		},
		blockColums,
	],
];
const Edit = () => {
	return (
		<div className="aquila-dos-and-donts">
			<InnerBlocks
				allowedBlocks={ALLOWED_BLOCKS}
				templateLock={true}
				template={TEMPLATE}
			/>
		</div>
	);
};

export default Edit;
