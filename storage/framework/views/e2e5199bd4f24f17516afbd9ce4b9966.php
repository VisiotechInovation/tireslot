<div>
	<div <?php if($cart && $cart->quantity_amount != 0): ?> style="display: flex !important"
	<?php else: ?>
	
		style="display: none !important" <?php endif; ?> id="cartCount" class="header__count">
		<span>
			<?php if($cart->quantity_amount != 0): ?>
				<?php echo e($cart->quantity_amount); ?>

			<?php endif; ?>
		</span>
	</div>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/cart-quantity.blade.php ENDPATH**/ ?>