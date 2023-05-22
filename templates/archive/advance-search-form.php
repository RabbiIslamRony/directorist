<?php
/**
 * @author  wpWax
 * @since   7.2.2
 * @version 7.7.0
 */

use \Directorist\Helper;

if ( ! defined( 'ABSPATH' ) ) exit;
?>

<div class="directorist-search-form-box directorist-search-form__box">
    <form action="<?php atbdp_search_result_page_link(); ?>" class="directorist-advanced-filter__form">
            <div class="directorist-advanced-filter__advanced">
				<?php foreach ($searchform->form_data[1]['fields'] as $field) : ?>
					<div class="directorist-form-group directorist-advanced-filter__advanced--element directorist-search-field-<?php echo esc_attr($field['widget_name']) ?>"><?php $searchform->field_template($field); ?></div>
				<?php endforeach; ?>
			</div>


            <div class="directorist-search-modal__contents__footer">
			    <?php $searchform->buttons_template(); ?>
		    </div>
    </form>
</div>