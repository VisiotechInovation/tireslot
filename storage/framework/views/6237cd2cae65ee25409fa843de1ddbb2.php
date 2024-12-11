<div class="<?php echo e($class); ?>">
	<button class="favorite__btn <?php if($is_in_wishlist): ?> active <?php endif; ?>" onclick="addWishList(this)" wire:click="<?php if($is_in_wishlist): ?> removeFromWishlist(<?php echo e($productId); ?>) <?php else: ?> addToWishlist(<?php echo e($productId); ?>) <?php endif; ?>" wire:model="is_in_wishlist" aria-label="Add to wishlist">
		<svg viewBox="0 0 512 512" width="20" title="heart">
			<path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
		</svg>
	</button>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/product-wishlist-button.blade.php ENDPATH**/ ?>