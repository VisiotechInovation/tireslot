<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('store-footer', [])->html();
} elseif ($_instance->childHasBeenRendered('5iEVO6m')) {
    $componentId = $_instance->getRenderedChildComponentId('5iEVO6m');
    $componentTag = $_instance->getRenderedChildComponentTagName('5iEVO6m');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5iEVO6m');
} else {
    $response = \Livewire\Livewire::mount('store-footer', []);
    $html = $response->html();
    $_instance->logRenderedChild('5iEVO6m', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/components/store-footer.blade.php ENDPATH**/ ?>