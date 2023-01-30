import { __ } from '@wordpress/i18n';
import styles from './EditorView.module.scss'

export const EditorView = (props: any) => {

    const updateSampleValue = (e: React.ChangeEvent<HTMLInputElement>) => {
        props.setAttributes({ sampleValue: e.target.value })
    }

    return (
        <div className={styles.customGutenbergBlock}>
            <input type="text" value={props.attributes.sampleValue} onChange={updateSampleValue} placeholder="Sample value" />
        </div>
    );
};