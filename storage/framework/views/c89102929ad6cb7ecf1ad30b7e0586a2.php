<?php if (isset($component)) { $__componentOriginal5447a5d860669decf25912223211952e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5447a5d860669decf25912223211952e = $attributes; } ?>
<?php $component = App\View\Components\StoreHead::resolve(['canonical' => 'order','title' => 'Confirmă comanda','description' => 'Confirmă comanda'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
} elseif ($_instance->childHasBeenRendered('nzT7G7f')) {
    $componentId = $_instance->getRenderedChildComponentId('nzT7G7f');
    $componentTag = $_instance->getRenderedChildComponentTagName('nzT7G7f');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('nzT7G7f');
} else {
    $response = \Livewire\Livewire::mount('store-header');
    $html = $response->html();
    $_instance->logRenderedChild('nzT7G7f', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<main>
 <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('store-order')->html();
} elseif ($_instance->childHasBeenRendered('CCZeVQT')) {
    $componentId = $_instance->getRenderedChildComponentId('CCZeVQT');
    $componentTag = $_instance->getRenderedChildComponentTagName('CCZeVQT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('CCZeVQT');
} else {
    $response = \Livewire\Livewire::mount('store-order');
    $html = $response->html();
    $_instance->logRenderedChild('CCZeVQT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/store/order.blade.php ENDPATH**/ ?>