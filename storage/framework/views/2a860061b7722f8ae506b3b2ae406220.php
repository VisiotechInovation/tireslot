<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('store-footer', [])->html();
} elseif ($_instance->childHasBeenRendered('4h6W8E9')) {
    $componentId = $_instance->getRenderedChildComponentId('4h6W8E9');
    $componentTag = $_instance->getRenderedChildComponentTagName('4h6W8E9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4h6W8E9');
} else {
    $response = \Livewire\Livewire::mount('store-footer', []);
    $html = $response->html();
    $_instance->logRenderedChild('4h6W8E9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<script src="/script/store/general.js" defer></script>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php if(app()->has('global_script_body-bottom')): ?>
 <?php echo app('global_script_body-bottom'); ?>

<?php endif; ?>
</body>

</html>
<?php /**PATH D:\tireslot\resources\views/components/store-footer.blade.php ENDPATH**/ ?>