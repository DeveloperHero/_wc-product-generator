<?php
$_options = get_option('__woofaker_options');
?>
<form method="post" action="<?php echo admin_url('tools.php?page=woofaker-product-generator'); ?>">

	<!-- define form fields -->
	<table class="form-table">

	</div>
		<?php
		
		if (!empty($this->errors['product_type']) || !empty($this->errors['product_title'])) {
		?>
			<div class="notice update-nag is-dismissible">
			<?php
			echo $this->errors['product_type'] . '<div>' . $this->errors['product_title'] . '</div>';
		}
			?>
		</div>
		
				<tbody>
					<tr class="row">
						<th scope="row">
							<label for="product_title">
								<?php _e('Product title', 'woofaker'); ?>
							</label>
						</th>
						<td>
							<input type="text" name="create_products_title" id="create_products_title" class="regular-text" value="<?php echo $_options['create_products_title']; ?>">
						</td>
					</tr>

					<tr class="row">
						<th scope="row">
							<label for="product_type">
								<?php _e('Product type', 'woofaker'); ?>
							</label>
						</th>
						<td>
							<input type="checkbox" <?php echo !empty($_options['create_simple_products']) && $_options['create_simple_products']  == 'yes' ? "checked='checked'" : ''; ?> name="create_simple_products" id="create_simple_products" class="regular-text" value="yes">
							<?php _e('Simple product', 'woofaker'); ?>
							<br>

							<input type="checkbox" <?php echo !empty($_options['create_variable_products']) && $_options['create_variable_products']  == 'yes' ? "checked='checked'" : ''; ?> name="create_variable_products" id="create_variable_products" class="regular-text" value="yes">
							<?php _e('Variable product', 'woofaker'); ?>
							<br>

							<input type="checkbox" <?php echo !empty($_options['create_grouped_products']) && $_options['create_grouped_products']  == 'yes' ? "checked='checked'" : ''; ?> name="create_grouped_products" id="create_grouped_products" class="regular-text" value="yes">
							<?php _e('Grouped product', 'woofaker'); ?>
							<br>

							<input type="checkbox" <?php echo !empty($_options['create_external_products']) && $_options['create_external_products']  == 'yes' ? "checked='checked'" : ''; ?> name="create_external_products" id="create_external_products" class="regular-text" value="yes">
							<?php _e('External product', 'woofaker'); ?>
							<br>
						</td>
					</tr>


					<tr class="row">
						<th scope="row">
							<label for="name">
								<?php _e('Random Image on Product', 'woofaker'); ?>
							</label>
						</th>
						<td>
							<input type="radio" <?php echo !empty($_options['add_random_images']) && $_options['add_random_images']  == 'yes' ? "checked='checked'" : ''; ?> name="add_random_images" id="add_random_images" class="regular-text" value="yes">
							<?php _e('Yes', 'woofaker'); ?>
							<br>

							<input type="radio" <?php echo !empty($_options['add_random_images']) && $_options['add_random_images']  == 'no' ? "checked='checked'" : ''; ?> name="add_random_images" id="" class="regular-text" value="no">
							<?php _e('No', 'woofaker'); ?>
							<br>
						</td>
					</tr>

	</table>




	<?php wp_nonce_field('woofaker_submit_product_gen'); ?>
	<?php
	submit_button(__('Submit', 'woofaker'), 'primary', 'submit_button');

	?>
</form>