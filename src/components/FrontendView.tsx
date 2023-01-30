import { __ } from '@wordpress/i18n';
import styles from './FrontendView.module.scss'

export const UserView = (props: any) => {

    return (
        <div className={styles.customGutenbergBlock}>
            <p>Value from editor : {props.sampleValue}</p>
        </div>
    );
};