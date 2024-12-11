<div <?php if($count != 0): ?> class="header__count"
<?php else: ?>
    style ="dispaly:none !important" <?php endif; ?> id="wishlistCount">
	<?php if($count != 0): ?>
		<?php echo e($count); ?>

	<?php endif; ?>
</div>
<?php /**PATH D:\tireslot\resources\views/livewire/wishlist-quantity.blade.php ENDPATH**/ ?>