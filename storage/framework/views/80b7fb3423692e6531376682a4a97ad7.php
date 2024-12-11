<?php if (isset($component)) { $__componentOriginale1868aa851bf6eb8c1d43f362c008cf2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale1868aa851bf6eb8c1d43f362c008cf2 = $attributes; } ?>
<?php $component = App\View\Components\Dashboardheader::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboardheader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboardheader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale1868aa851bf6eb8c1d43f362c008cf2)): ?>
<?php $attributes = $__attributesOriginale1868aa851bf6eb8c1d43f362c008cf2; ?>
<?php unset($__attributesOriginale1868aa851bf6eb8c1d43f362c008cf2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale1868aa851bf6eb8c1d43f362c008cf2)): ?>
<?php $component = $__componentOriginale1868aa851bf6eb8c1d43f362c008cf2; ?>
<?php unset($__componentOriginale1868aa851bf6eb8c1d43f362c008cf2); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal08af02ee86f0a0dcbc8540af26877ed5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal08af02ee86f0a0dcbc8540af26877ed5 = $attributes; } ?>
<?php $component = App\View\Components\Dashboardnavbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboardnavbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboardnavbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal08af02ee86f0a0dcbc8540af26877ed5)): ?>
<?php $attributes = $__attributesOriginal08af02ee86f0a0dcbc8540af26877ed5; ?>
<?php unset($__attributesOriginal08af02ee86f0a0dcbc8540af26877ed5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08af02ee86f0a0dcbc8540af26877ed5)): ?>
<?php $component = $__componentOriginal08af02ee86f0a0dcbc8540af26877ed5; ?>
<?php unset($__componentOriginal08af02ee86f0a0dcbc8540af26877ed5); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalc348144b2321ceda244a12d648bc5fc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc348144b2321ceda244a12d648bc5fc2 = $attributes; } ?>
<?php $component = App\View\Components\Dashboardsidebar::resolve(['active' => __('category')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboardsidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboardsidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc348144b2321ceda244a12d648bc5fc2)): ?>
<?php $attributes = $__attributesOriginalc348144b2321ceda244a12d648bc5fc2; ?>
<?php unset($__attributesOriginalc348144b2321ceda244a12d648bc5fc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc348144b2321ceda244a12d648bc5fc2)): ?>
<?php $component = $__componentOriginalc348144b2321ceda244a12d648bc5fc2; ?>
<?php unset($__componentOriginalc348144b2321ceda244a12d648bc5fc2); ?>
<?php endif; ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('categoriestable', ['tableName' => 'categories'])->html();
} elseif ($_instance->childHasBeenRendered('mMV58gS')) {
    $componentId = $_instance->getRenderedChildComponentId('mMV58gS');
    $componentTag = $_instance->getRenderedChildComponentTagName('mMV58gS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('mMV58gS');
} else {
    $response = \Livewire\Livewire::mount('categoriestable', ['tableName' => 'categories']);
    $html = $response->html();
    $_instance->logRenderedChild('mMV58gS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php if (isset($component)) { $__componentOriginal90fa163987097e726a46c4e696b505b2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90fa163987097e726a46c4e696b505b2 = $attributes; } ?>
<?php $component = App\View\Components\Dashboardfooter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboardfooter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboardfooter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90fa163987097e726a46c4e696b505b2)): ?>
<?php $attributes = $__attributesOriginal90fa163987097e726a46c4e696b505b2; ?>
<?php unset($__attributesOriginal90fa163987097e726a46c4e696b505b2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90fa163987097e726a46c4e696b505b2)): ?>
<?php $component = $__componentOriginal90fa163987097e726a46c4e696b505b2; ?>
<?php unset($__componentOriginal90fa163987097e726a46c4e696b505b2); ?>
<?php endif; ?>
<?php /**PATH D:\tireslot\resources\views/admin/category.blade.php ENDPATH**/ ?>