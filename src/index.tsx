// @ts-ignore
import { registerBlockType } from '@wordpress/blocks';
import { EditorView } from './components/EditorView';

registerBlockType("your-ns/custom-block-name", {
  title: "Custom block sample",
  icon: "hammer",
  category: "common",
  attributes: {
    sampleValue: { type: "string" }
  },
  edit: EditorView
});
