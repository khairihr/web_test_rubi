<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php
$structure = WOOF_EXT_QUICK_TEXT::parse_template_structure($template_structure);
?><div class="woof_qs_result  woof_qs_table_<?php echo esc_attr($template_result) ?>  text_res_page_0 "> 
    <div class="woof_qs_table_<?php echo esc_attr($template_result) ?>_header "><?php echo wp_kses_post(wp_unslash($header_text)) ?></div>
    __PAGINATION__
    <table style="width: 100%;" cellspacing="0" class="woof_qs_container">
        <tr>
            <?php foreach ($structure as $item): ?>
                <th class="<?php echo esc_attr($item['class']) ?>"><?php esc_html_e($item['title']) ?>
                    <?php
                    if ($item['key'] == 'price') {
                        WOOF_EXT_QUICK_TEXT::show_sort_html_by_price_e();
                    } elseif ($item['key'] == 'title') {
                        WOOF_EXT_QUICK_TEXT::show_sort_html_by_title_e();
                    }
                    ?>
                </th> 
            <?php endforeach; ?>
        </tr>
        <tr class="woof_qs_item">
            <?php
            foreach ($structure as $item):

                if ($item['key'] == 'img') {
                    ?>
                    <td class="woof_qs_<?php echo esc_attr($template_result) ?>_<?php echo esc_attr($item['key']) ?>_col">
                        <div class="woof_qs_<?php echo esc_attr($template_result) ?>_<?php echo esc_attr($item['key']) ?>">
                            <h4><a href="__URL__" target="__TARGET__"><img __SRC__ alt="__TITLE__" /></a></h4>
                        </div>
                    </td>
                    <?php
                } elseif ($item['key'] == 'title') {
                    ?>
                    <td class="woof_qs_<?php echo esc_attr($template_result) ?>_<?php echo esc_attr($item['key']) ?>_col">
                        <div class="woof_qs_<?php echo esc_attr($template_result) ?>_<?php echo esc_attr($item['key']) ?>">
                            <h4><a href="__URL__" target="__TARGET__">__TITLE__</a></h4>
                        </div>
                    </td>
                    <?php
                } else {
                    ?>
                    <td class="woof_qs_<?php echo esc_attr($template_result) ?>_<?php echo esc_attr($item['key']) ?>_col">
                        <div class="woof_qs_<?php echo esc_attr($template_result) ?>_<?php echo esc_attr($item['key']) ?>">
                            <?php echo esc_html($item['alias']) ?>
                        </div>
                    </td>
                    <?php
                }
            endforeach;
            ?>          
        </tr>
        <tr class="woof_qs_no_products_item">
            <td colspan='10' class='woof_qs_no_products woof_qs_no_products_<?php echo esc_attr($template_result) ?>'><?php esc_html_e('Product not found', 'woocommerce-products-filter') ?></td>
        </tr>
    </table>
    __PAGINATION__
</div>

