<?php if (isset($component)) { $__componentOriginal5447a5d860669decf25912223211952e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5447a5d860669decf25912223211952e = $attributes; } ?>
<?php $component = App\View\Components\StoreHead::resolve(['title' => ($data->seo_title ?? "Produse"),'description' => $data->meta_description ?? $data->name ?? "",'preload' => $preload] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
} elseif ($_instance->childHasBeenRendered('9CcfFgQ')) {
    $componentId = $_instance->getRenderedChildComponentId('9CcfFgQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('9CcfFgQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9CcfFgQ');
} else {
    $response = \Livewire\Livewire::mount('store-header');
    $html = $response->html();
    $_instance->logRenderedChild('9CcfFgQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <main>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('store-products', ['category' => $data])->html();
} elseif ($_instance->childHasBeenRendered('D7rp3ig')) {
    $componentId = $_instance->getRenderedChildComponentId('D7rp3ig');
    $componentTag = $_instance->getRenderedChildComponentTagName('D7rp3ig');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('D7rp3ig');
} else {
    $response = \Livewire\Livewire::mount('store-products', ['category' => $data]);
    $html = $response->html();
    $_instance->logRenderedChild('D7rp3ig', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/store/products.blade.php ENDPATH**/ ?>