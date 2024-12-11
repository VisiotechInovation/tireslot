<script>
 const lastRecord = document.getElementById('last_record');
 const options = {
  root: null,
  threshold: 1,
  rootMargin: '0px'
 }

 const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
   if (entry.isIntersecting) {
    window.livewire.find('<?php echo e($_instance->id); ?>').loadMore()
    observer.unobserve(lastRecord);
   }
  });
 }, options);

 observer.observe(lastRecord);
</script>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/components/lazy.blade.php ENDPATH**/ ?>