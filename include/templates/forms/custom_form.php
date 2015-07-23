<?php $unique_id = uniqid(); ?>

<div id="mailerlite-form_<?php echo $form_id; ?>" data-temp-id="<?php echo $unique_id; ?>">
    <div class="mailerlite-form">
        <form action="" method="post">
            <div class="mailerlite-form-title"><h3><?php echo $form_data['title']; ?></h3></div>
            <div class="mailerlite-form-description"><?php echo stripslashes($form_data['description']); ?></div>
            <div class="mailerlite-form-inputs">
                <?php foreach ($form_data['fields'] as $field => $title): ?>
                    <?php if ($field == 'email') {
                        $input_type = 'email';
                    } else {
                        $input_type = 'text';
                    } ?>
                    <div class="mailerlite-form-field">
                        <label for="mailerlite-<?php echo $form_id; ?>-field-<?php echo $field; ?>"><?php echo $title; ?></label>
                        <input id="mailerlite-<?php echo $form_id; ?>-field-<?php echo $field; ?>" type="<?php echo $input_type; ?>" required="required" name="form_fields[<?php echo $field; ?>]"/>
                    </div>
                <?php endforeach; ?>
                <div class="mailerlite-form-loader"><?php _e('Please wait...', 'mailerlite'); ?></div>
                <div class="mailerlite-subscribe-button-container">
                    <input class="mailerlite-subscribe-submit" type="submit"
                           value="<?php echo $form_data['button']; ?>"/>
                </div>
                <input type="hidden" name="form_id" value="<?php echo $form_id; ?>"/>
                <input type="hidden" name="action" value="mailerlite_subscribe_form"/>
            </div>
            <div class="mailerlite-form-response">
                <h4><?php _e('Thank you for signup!', 'mailerlite'); ?></h4>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">

    jQuery(document).ready(function () {
        var form_container = jQuery("#mailerlite-form_<?php echo $form_id; ?>[data-temp-id=<?php echo $unique_id; ?>] form");
        form_container.submit(function (e) {
            e.preventDefault();
        }).validate({
            submitHandler: function (form) {

                jQuery(this.submitButton).prop('disabled', true);

                form_container.find('.mailerlite-subscribe-button-container').fadeOut(function () {
                    form_container.find('.mailerlite-form-loader').fadeIn()
                });

                var data = jQuery(form).serialize();

                jQuery.post('<?php echo admin_url( 'admin-ajax.php' ); ?>', data, function (response) {
                    form_container.find('.mailerlite-form-inputs').fadeOut(function () {
                        form_container.find('.mailerlite-form-response').fadeIn()
                    });
                });
            }
        });
    });
</script>