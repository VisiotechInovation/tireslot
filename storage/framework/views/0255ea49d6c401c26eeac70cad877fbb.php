<?php if (isset($component)) { $__componentOriginal5447a5d860669decf25912223211952e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5447a5d860669decf25912223211952e = $attributes; } ?>
<?php $component = App\View\Components\StoreHead::resolve(['canonical' => "cart",'title' => "Coș de cumpărături",'description' => 'Cos de cumparaturi'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('store-head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\StoreHead::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5447a5d860669decf25912223211952e)): ?>
<?php $attributes = $__attributesOriginal5447a5d860669decf25912223211952e; ?>
<?php unset($__attributesOriginal5447a5d860669decf25912223211952e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5447a5d860669decf25912223211952e)): ?>
<?php $component = $__componentOriginal5447a5d860669decf25912223211952e; ?>
<?php unset($__componentOriginal5447a5d860669decf25912223211952e); ?>
<?php endif; ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('store-header')->html();
} elseif ($_instance->childHasBeenRendered('cqlJruP')) {
    $componentId = $_instance->getRenderedChildComponentId('cqlJruP');
    $componentTag = $_instance->getRenderedChildComponentTagName('cqlJruP');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cqlJruP');
} else {
    $response = \Livewire\Livewire::mount('store-header');
    $html = $response->html();
    $_instance->logRenderedChild('cqlJruP', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<main>
	<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("store-cart")->html();
} elseif ($_instance->childHasBeenRendered('gw4fKQM')) {
    $componentId = $_instance->getRenderedChildComponentId('gw4fKQM');
    $componentTag = $_instance->getRenderedChildComponentTagName('gw4fKQM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('gw4fKQM');
} else {
    $response = \Livewire\Livewire::mount("store-cart");
    $html = $response->html();
    $_instance->logRenderedChild('gw4fKQM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	<?php if (isset($component)) { $__componentOriginalbaf8b4625de2fa5b8944f41f2b0a6b78 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbaf8b4625de2fa5b8944f41f2b0a6b78 = $attributes; } ?>
<?php $component = App\View\Components\Support::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('support'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Support::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbaf8b4625de2fa5b8944f41f2b0a6b78)): ?>
<?php $attributes = $__attributesOriginalbaf8b4625de2fa5b8944f41f2b0a6b78; ?>
<?php unset($__attributesOriginalbaf8b4625de2fa5b8944f41f2b0a6b78); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbaf8b4625de2fa5b8944f41f2b0a6b78)): ?>
<?php $component = $__componentOriginalbaf8b4625de2fa5b8944f41f2b0a6b78; ?>
<?php unset($__componentOriginalbaf8b4625de2fa5b8944f41f2b0a6b78); ?>
<?php endif; ?>
</main>
<?php if (isset($component)) { $__componentOriginal32df5bfc95da81fb48f31e357793f03b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal32df5bfc95da81fb48f31e357793f03b = $attributes; } ?>
<?php $component = App\View\Components\StoreFooter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('store-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\StoreFooter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal32df5bfc95da81fb48f31e357793f03b)): ?>
<?php $attributes = $__attributesOriginal32df5bfc95da81fb48f31e357793f03b; ?>
<?php unset($__attributesOriginal32df5bfc95da81fb48f31e357793f03b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal32df5bfc95da81fb48f31e357793f03b)): ?>
<?php $component = $__componentOriginal32df5bfc95da81fb48f31e357793f03b; ?>
<?php unset($__componentOriginal32df5bfc95da81fb48f31e357793f03b); ?>
<?php endif; ?>
<?php /**PATH D:\tireslot\resources\views/store/cart.blade.php ENDPATH**/ ?>