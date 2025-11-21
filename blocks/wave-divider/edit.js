import { InspectorControls } from '@wordpress/block-editor';
import { PanelBody, ToggleControl } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
	const { flip } = attributes;

	return (
		<>
			<InspectorControls>
				<PanelBody title="Wave Options">
					<ToggleControl
						label="Flip vertically"
						checked={flip}
						onChange={(value) => setAttributes({ flip: value })}
					/>
				</PanelBody>
			</InspectorControls>

			<div className="wave-divider-preview">
				<svg
					viewBox="0 0 1440 150"
					style={{
						transform: flip ? 'scaleY(-1)' : 'none',
						width: '100%',
						height: 'auto'
					}}
				>
					{/* Replace with your actual SVG path */}
					<path d="M0,96L1440,0L1440,0L0,0Z" fill="currentColor" />
				</svg>
			</div>
		</>
	);
}
