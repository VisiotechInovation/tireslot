<?php if (isset($component)) { $__componentOriginal5447a5d860669decf25912223211952e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5447a5d860669decf25912223211952e = $attributes; } ?>
<?php $component = App\View\Components\StoreHead::resolve(['image' => optional($data->media->where('type', 'original')->first())->path . optional($data->media->where('type', 'original')->first())->name,'canonical' => 'product/' . ($data->seo_id ?? $data->id),'title' => ($data->seo_title ?? ""),'description' => $data->meta_description ?? $data->name,'preload' => $preload] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
} elseif ($_instance->childHasBeenRendered('JC9QYVn')) {
    $componentId = $_instance->getRenderedChildComponentId('JC9QYVn');
    $componentTag = $_instance->getRenderedChildComponentTagName('JC9QYVn');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JC9QYVn');
} else {
    $response = \Livewire\Livewire::mount('store-header');
    $html = $response->html();
    $_instance->logRenderedChild('JC9QYVn', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<main>
	<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("store-show-product", ["productId" => $data->id])->html();
} elseif ($_instance->childHasBeenRendered('5QFU2hW')) {
    $componentId = $_instance->getRenderedChildComponentId('5QFU2hW');
    $componentTag = $_instance->getRenderedChildComponentTagName('5QFU2hW');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5QFU2hW');
} else {
    $response = \Livewire\Livewire::mount("store-show-product", ["productId" => $data->id]);
    $html = $response->html();
    $_instance->logRenderedChild('5QFU2hW', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/store/product.blade.php ENDPATH**/ ?>