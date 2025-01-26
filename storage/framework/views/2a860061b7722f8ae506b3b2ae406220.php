<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('store-footer', [])->html();
} elseif ($_instance->childHasBeenRendered('CkW44NE')) {
    $componentId = $_instance->getRenderedChildComponentId('CkW44NE');
    $componentTag = $_instance->getRenderedChildComponentTagName('CkW44NE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('CkW44NE');
} else {
    $response = \Livewire\Livewire::mount('store-footer', []);
    $html = $response->html();
    $_instance->logRenderedChild('CkW44NE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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