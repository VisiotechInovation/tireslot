<div>

 <?php if($paginator->hasPages()): ?>
  <?php (isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : ($this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1)); ?>

  <nav role="navigation" aria-label="Pagination Navigation" style="margin-top:15px" class="section__header container">
   <div>
    <p>
     <span>
      <?php if(app()->has('label_pagination_display')): ?>
       <?php echo app('label_pagination_display'); ?>

      <?php endif; ?>
     </span>
     <strong><?php echo e($paginator->firstItem()); ?></strong>
     <span>
      <?php if(app()->has('label_pagination_to')): ?>
       <?php echo app('label_pagination_to'); ?>

      <?php endif; ?>
     </span>
     <strong><?php echo e($paginator->lastItem()); ?></strong>
     <span>
      <?php if(app()->has('label_pagination_of')): ?>
       <?php echo app('label_pagination_of'); ?>

      <?php endif; ?>
     </span>
     <strong><?php echo e($paginator->total()); ?></strong>
     <span>
      <?php if(app()->has('label_pagination_results')): ?>
       <?php echo app('label_pagination_results'); ?>

      <?php endif; ?>
     </span>
    </p>
   </div>

   <div style="display:flex; align-items:center; text-align:center; justify-content:space-between; margin:0">
    
    <span>
     <?php if($paginator->onFirstPage()): ?>
      <span aria-disabled="true" aria-label="<?php echo e(__('pagination.previous')); ?>">
       <span class="quantity__arrow disabled" aria-hidden="true" style="display: inline !important">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
         <path fill-rule="evenodd"
          d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
          clip-rule="evenodd" />
        </svg>
       </span>
      </span>
     <?php else: ?>
      <a href="<?php echo e($paginator->previousPageUrl()); ?>" onclick="gotop()" type="button"
       wire:click="previousPage('<?php echo e($paginator->getPageName()); ?>')"
       dusk="previousPage<?php echo e($paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName()); ?>.after"
       rel="prev" class="leftbar__close" aria-label="<?php echo e(__('pagination.previous')); ?>">
       <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd"
         d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
         clip-rule="evenodd" />
       </svg>
      </a>
     <?php endif; ?>
    </span>

    
    <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php if(is_array($element)): ?>
      <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <span wire:key="paginator-<?php echo e($paginator->getPageName()); ?>-<?php echo e($page); ?>">

        <?php if(
            $page == 1 ||
                $page == $paginator->lastPage() ||
                $page == $paginator->currentPage() ||
                $page == $paginator->currentPage() - 1 ||
                $page == $paginator->currentPage() + 1): ?>
         <?php if($page == $paginator->currentPage()): ?>
          <span class="leftbar__close" style="background: transparent"><?php echo e($page); ?></span>
         <?php else: ?>
          <a href="<?php echo e($url); ?>" onclick="gotop()" type="button"
           wire:click="gotoPage(<?php echo e($page); ?>, '<?php echo e($paginator->getPageName()); ?>')" class="leftbar__close"
           style="color: white; margin-left: 1px; margin-right: 1px;text-decoration: none"
           onmouseover="this.style.color='black';" onmouseout="this.style.color='white';">
           <?php echo e($page); ?>

          </a>
         <?php endif; ?>
        <?php elseif(
            ($page == 2 && $paginator->currentPage() > 3) ||
                ($page == $paginator->lastPage() - 1 && $paginator->currentPage() < $paginator->lastPage() - 2)): ?>
         <span style="margin-left: 15px; margin-right: 10px;">...</span>
        <?php endif; ?>
       </span>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <span>
     <?php if($paginator->hasMorePages()): ?>
      <a href="<?php echo e($paginator->nextPageUrl()); ?>" wire:click="nextPage('<?php echo e($paginator->getPageName()); ?>')"
       onclick="gotop()"
       dusk="nextPage<?php echo e($paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName()); ?>.after"
       rel="next" class="leftbar__close" aria-label="<?php echo e(__('pagination.next')); ?>">
       <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd"
         d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
         clip-rule="evenodd" />
       </svg>
      </a>
     <?php else: ?>
      <span aria-disabled="true" aria-label="<?php echo e(__('pagination.next')); ?>">
       <span class="quantity__arrow disabled" aria-hidden="true">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
         <path fill-rule="evenodd"
          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
          clip-rule="evenodd" />
        </svg>
       </span>
      </span>
     <?php endif; ?>
    </span>
   </div>
  </nav>
 <?php endif; ?>
 <script>
  function gotop() {
   let livewireRequestDuration = 0;
   let startTime;

   Livewire.hook('message.sent', () => {
    startTime = Date.now();
   });

   Livewire.hook('message.processed', () => {
    livewireRequestDuration = Date.now() - startTime;

    setTimeout(() => {
     document.documentElement.style.scrollBehavior = 'smooth';
     window.scrollTo({
      top: 0,
      left: 0
     });
     setTimeout(() => {
      document.documentElement.style.scrollBehavior = 'auto';
     }, 500);
    }, livewireRequestDuration);
   });
  }
 </script>

</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/vendor/livewire/tailwind.blade.php ENDPATH**/ ?>