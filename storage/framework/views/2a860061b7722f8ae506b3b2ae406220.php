<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('store-footer', [])->html();
} elseif ($_instance->childHasBeenRendered('JkyB3Zu')) {
    $componentId = $_instance->getRenderedChildComponentId('JkyB3Zu');
    $componentTag = $_instance->getRenderedChildComponentTagName('JkyB3Zu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JkyB3Zu');
} else {
    $response = \Livewire\Livewire::mount('store-footer', []);
    $html = $response->html();
    $_instance->logRenderedChild('JkyB3Zu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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