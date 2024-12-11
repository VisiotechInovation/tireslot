<div class="accordion <?php if($showrelated): ?> active <?php endif; ?>">
 <?php if (isset($component)) { $__componentOriginalb5e767ad160784309dfcad41e788743b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5e767ad160784309dfcad41e788743b = $attributes; } ?>
<?php $component = App\View\Components\Alert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb5e767ad160784309dfcad41e788743b)): ?>
<?php $attributes = $__attributesOriginalb5e767ad160784309dfcad41e788743b; ?>
<?php unset($__attributesOriginalb5e767ad160784309dfcad41e788743b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb5e767ad160784309dfcad41e788743b)): ?>
<?php $component = $__componentOriginalb5e767ad160784309dfcad41e788743b; ?>
<?php unset($__componentOriginalb5e767ad160784309dfcad41e788743b); ?>
<?php endif; ?>
 
 <div class="accordion__header">
  <button
   class="button button--flexed button--fill button--primary <?php if($showrelated): ?> button--secondary active <?php endif; ?>"
   wire:click.prevent="<?php if($showrelated === false): ?> $set('showrelated', true) <?php else: ?> $set('showrelated', false) <?php endif; ?>">
   <?php echo e(__('Reviews ')); ?>(<?php echo e($reviews->total()); ?>)
   <svg>
    <polyline points="6 9 12 15 18 9"></polyline>
   </svg>
  </button>
  <button class="button button--secondary">
   <svg>
    <line x1="12" y1="5" x2="12" y2="19"></line>
    <line x1="5" y1="12" x2="19" y2="12"></line>
   </svg>
  </button>
 </div>

 
 <div class="accordion__body">
  
  <nav class="nav--controls">
   
   <input class="input input--long" type="text" wire:model.debounce.300ms="search" placeholder="Search...">
   
   <div class="dropdown dropdown--right" <?php if(!$checked): ?> style="display:none;" <?php endif; ?>>
    
    <button class="button button--primary button--centered button--long" tooltip="Actions with checked" tooltip-top>
     <span>With Checked(<?php echo e(count($checked)); ?>)</span>
    </button>
    
    <div class="dropdown__content">
     <div class="dropdown__container">
      <button class="button button--primary button--long" wire:click="confirmItemsRemoval()">
       Delete
      </button>
     </div>
    </div>
   </div>
   
   <div class="dropdown dropdown--right" wire:ignore>
    
    <button class="button button--primary button--centered" tooltip="Show items in table" tooltip-left>
     <svg>
      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
      <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
      <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
     </svg>
    </button>
    
    <div class="dropdown__content">
     <div class="dropdown__container">
      <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <label class="switch switch--primary inline">
        <input type="checkbox" wire:model="selectedColumns" value="<?php echo e($column); ?>"
         <?php echo e(in_array($column, $selectedColumns) ? 'checked' : ''); ?> />
        <span><?php echo e($column); ?></span>
       </label>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
    </div>
   </div>
  </nav>
  
  <table class="expandable-table">
   <thead>
    <tr>
     <th style="border-right: none; border-left: none;">
     </th>
     <?php $__currentLoopData = $selectedColumns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($this->showColumn($column)): ?>
       <th <?php if($index > count($selectedColumns) - 10): ?> class="hidden" <?php endif; ?>>
        <button wire:click="sortBy('<?php echo e($column); ?>')"
         class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
         <?php echo e(str_replace('_id', '', $column)); ?> 
         <svg>
          <polyline points="6 9 12 15 18 9"></polyline>
         </svg>
        </button>
       </th>
      <?php endif; ?>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <th style="border-left: none; border-right: none;">
      <button class="button button--secondary button--sm" style="opacity: 0">
       <svg>
        <polyline points="3 6 5 6 21 6"></polyline>
        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
       </svg>
      </button>
     </th>
    </tr>
   </thead>
   <tbody>
    <?php if($reviews->isEmpty()): ?>
     <tr>
      <td class="table--empty" colspan="<?php echo e(count($columns) + 2); ?>">No record found.</td>
     </tr>
    <?php else: ?>
     <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr <?php if($loop->last): ?> id="last_record" <?php endif; ?> class="expandable-row">
       <td style="border-left: none" data-title="Check">
       </td>
       <?php $__currentLoopData = $selectedColumns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <td <?php if($index > count($selectedColumns) - 17): ?> class="hidden" <?php endif; ?> data-title="<?php echo e($column); ?>">
         <?php if($column === 'product_id'): ?>
          <a href="<?php echo e(route('show_product', ['id' => $review->$column])); ?>"><?php echo e($review->product->name); ?></a>
         <?php elseif($column === 'count'): ?>
          <?php if($editindex !== $index): ?>
           <?php echo e($review->$column); ?>

          <?php else: ?>
           <input type="number" min="0" required class="input__searchable"
            wire:model.defer="record.<?php echo e($index); ?>.count">
          <?php endif; ?>
         <?php elseif($column === 'value'): ?>
          <?php if($editindex !== $index): ?>
           <?php echo e($review->$column); ?>

          <?php else: ?>
           <input type="number" required class="input__searchable"
            wire:model.defer="record.<?php echo e($index); ?>.value">
          <?php endif; ?>
         <?php else: ?>
          <?php echo e($review->$column); ?>

         <?php endif; ?>
        </td>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <td>
        <?php if($editindex !== $index): ?>
         <div style="display: flex;">
          <button class="button button--secondary button--sm"
           wire:click.prevent="edititem(<?php echo e($index); ?>, <?php echo e($review->id); ?>)">
           <svg>
            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
            </path>
           </svg>
          </button>
         </div>
        <?php else: ?>
         <div style="display: flex;">
          <button class="button button--secondary button--sm"
           wire:click.prevent="saveitem(<?php echo e($index); ?>,<?php echo e($review->id); ?>)">
           <svg>
            <polyline points="20 6 9 17 4 12"></polyline>
           </svg>
          </button>
          <button class="button button--secondary button--sm" wire:click.prevent="canceledit()">
           <svg>
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
           </svg>
          </button>
         </div>
        <?php endif; ?>
       </td>
      </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
   </tbody>
  </table>
 </div>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/product-reviews.blade.php ENDPATH**/ ?>