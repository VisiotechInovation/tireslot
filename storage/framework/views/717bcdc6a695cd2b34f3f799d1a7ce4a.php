<?php if (isset($component)) { $__componentOriginal5447a5d860669decf25912223211952e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5447a5d860669decf25912223211952e = $attributes; } ?>
<?php $component = App\View\Components\StoreHead::resolve(['title' => getTitle(),'description' => getDescription(),'preload' => $preload] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
 function getTitle()
 {
     try {
         return app('global_mainpage_metatitle');
     } catch (\Throwable $e) {
         return '';
     }
 }

 function getDescription()
 {
     try {
         return app('global_mainpage_metadescription');
     } catch (\Throwable $e) {
         return '';
     }
 }
?>

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('store-header')->html();
} elseif ($_instance->childHasBeenRendered('VMjU4Us')) {
    $componentId = $_instance->getRenderedChildComponentId('VMjU4Us');
    $componentTag = $_instance->getRenderedChildComponentTagName('VMjU4Us');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VMjU4Us');
} else {
    $response = \Livewire\Livewire::mount('store-header');
    $html = $response->html();
    $_instance->logRenderedChild('VMjU4Us', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('store-main')->html();
} elseif ($_instance->childHasBeenRendered('uYKlo3c')) {
    $componentId = $_instance->getRenderedChildComponentId('uYKlo3c');
    $componentTag = $_instance->getRenderedChildComponentTagName('uYKlo3c');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('uYKlo3c');
} else {
    $response = \Livewire\Livewire::mount('store-main');
    $html = $response->html();
    $_instance->logRenderedChild('uYKlo3c', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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
<?php /**PATH D:\tireslot\resources\views/store/home.blade.php ENDPATH**/ ?>