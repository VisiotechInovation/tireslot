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

 
 <aside>
  <div class="background background--center <?php if($delete): ?> active <?php endif; ?>"></div>
  <div class="aside aside--confirm <?php if($delete): ?> active <?php endif; ?>">
   <span>
    Are you sure to delete this record?
   </span>
   <button class="button button--primary button--long" wire:click.prevent="deleteRecord()">
    <span>Delete</span>
   </button>
   <button class="button button--danger button--long" wire:click.prevent="cancelItemRemoval()">
    <span>Cancel</span>
   </button>
  </div>
 </aside>

 
 <div class="accordion__header">
  <button
   class="button button--flexed button--fill button--primary <?php if($showrelated): ?> button--secondary active <?php endif; ?>"
   wire:click.prevent="<?php if($showrelated === false): ?> $set('showrelated', true) <?php else: ?> $set('showrelated', false) <?php endif; ?>">
   <?php
    if ($relatedby === 'user_promotions') {
        $relatedby = 'promotions';
    }
   ?>
   <?php echo e(ucfirst($relatedby)); ?>

   (<?php echo e($relateds->total()); ?>)
   <svg>
    <polyline points="6 9 12 15 18 9"></polyline>
   </svg>
  </button>
 </div>

 
 <div class="accordion__body">
  
  <nav class="nav--controls">
   
   <input class="input input--long" type="text" wire:model.debounce.300ms="search" placeholder="Search...">

   
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
      <?php if($column === 'innersession' || $column === 'session_id'): ?>
       <?php continue; ?>
      <?php endif; ?>
      <?php if($this->showColumn($column)): ?>
       <th <?php if($index > 1): ?> class="hidden" <?php endif; ?>>
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
     <?php if($relatedby === 'promotions'): ?>
      <th style="border-left: none; border-right: none;">
       <div style="display: flex;">
        <button class="button button--secondary button--sm" style="opacity: 0">
         <svg>
          <polyline points="3 6 5 6 21 6"></polyline>
          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
         </svg>
        </button>
       </div>
      </th>
     <?php endif; ?>
    </tr>
   </thead>
   <tbody>
    <?php if($relateds->isEmpty()): ?>
     <tr>
      <td class="table--empty" colspan="<?php echo e(count($columns) + 2); ?>">No record found.</td>
     </tr>
    <?php else: ?>
     <?php $__currentLoopData = $relateds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr <?php if($loop->last): ?> id="last_record" <?php endif; ?> class="expandable-row">
       <td style="border-left: none" data-title="Check">
       </td>
       <?php $__currentLoopData = $selectedColumns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($column === 'innersession' || $column === 'session_id'): ?>
         <?php continue; ?>
        <?php endif; ?>
        <td <?php if($index > 1): ?> class="hidden" <?php endif; ?> data-title="<?php echo e($column); ?>">
         <?php if($column === 'payload'): ?>
          <span class="show-less">
           <?php echo e($related->$column); ?>

          </span>
         <?php elseif($column === 'last_activity'): ?>
          <?php echo e(date('Y-m-d H:i:s', $related->$column)); ?>

         <?php elseif($column === 'name' && $relatedby === 'carts'): ?>
          <a href="<?php echo e(route('show_cart', ['id' => $related->id])); ?>"><?php echo e($related->name); ?></a>
         <?php elseif($column === 'name' && $relatedby === 'orders'): ?>
          <a href="<?php echo e(route('show_order', ['id' => $related->id])); ?>"><?php echo e($related->name); ?></a>
         <?php elseif($column === 'product_id' && $relatedby === 'wishlist'): ?>
          <a href="<?php echo e(route('show_product', ['id' => $related->id])); ?>"><?php echo e($related->product->name); ?></a>
         <?php elseif($column === 'promotion_id'): ?>
          <a href="<?php echo e(route('all_promotions')); ?>"><?php echo e($related->promotion->name); ?></a>
         <?php else: ?>
          <?php echo e($related->$column); ?>

         <?php endif; ?>
        </td>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <?php if($relatedby === 'promotions'): ?>
        <td>
         <button wire:click.prevent="confirmItemRemoval(<?php echo e($related->id); ?>)"
          class="button button--secondary button--sm">
          <svg>
           <polyline points="3 6 5 6 21 6"></polyline>
           <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
          </svg>
         </button>
        </td>
       <?php endif; ?>
      </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
   </tbody>
  </table>
 </div>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/related-session.blade.php ENDPATH**/ ?>