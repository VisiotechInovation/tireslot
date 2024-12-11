<section class="content">
 
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
  <div class="background background--center <?php if($single || $multiple): ?> active <?php endif; ?>"></div>
  <div class="aside aside--confirm <?php if($single || $multiple): ?> active <?php endif; ?>">
   <span>
    <?php if($single): ?>
     Are you sure to delete this record?
    <?php else: ?>
     Are you sure to delete those records?
    <?php endif; ?>
   </span>
   <?php if($single): ?>
    <button class="button button--primary button--long" wire:click="deleteSingleRecord">
     <span>Delete</span>
    </button>
   <?php else: ?>
    <button class="button button--primary button--long" wire:click="deleteRecords()">
     <span>Delete</span>
    </button>
   <?php endif; ?>
   <button class="button button--danger button--long" wire:click="cancel_delete()">
    <span>Cancel</span>
   </button>
  </div>
 </aside>


 
 <aside>
  <div class="background background--right" wire:ignore id="sort__backdrop"></div>
  <div class="aside aside--right" wire:ignore id="sort">
   <div class="aside--controls">
    <button class="button button--flexed button--primary" id="sort__close">
     <svg>
      <polyline points="4 14 10 14 10 20"></polyline>
      <polyline points="20 10 14 10 14 4"></polyline>
      <line x1="14" y1="10" x2="21" y2="3"></line>
      <line x1="3" y1="21" x2="10" y2="14"></line>
     </svg>
    </button>
    <h3>Sorting Data</h3>
   </div>
   <span class="aside--line"></span>
   <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <button
     class="button button--primary button--long button--flexed button--arrow <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>"
     wire:click="sortBy('<?php echo e($column); ?>')">
     <svg>
      <polyline points="6 9 12 15 18 9"></polyline>
     </svg>
     <?php echo e($column); ?>

    </button>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
 </aside>
 <aside>
  <div class="background background--right" wire:ignore id="visi__backdrop"></div>
  <div class="aside aside--right" wire:ignore id="visi">
   <div class="aside--controls">
    <button class="button button--flexed button--primary" id="visi__close">
     <svg>
      <polyline points="4 14 10 14 10 20"></polyline>
      <polyline points="20 10 14 10 14 4"></polyline>
      <line x1="14" y1="10" x2="21" y2="3"></line>
      <line x1="3" y1="21" x2="10" y2="14"></line>
     </svg>
    </button>
    <h3>Visibility Data</h3>
   </div>
   <span class="aside--line"></span>
   <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <label class="switch switch--primary" style="margin: 0.25rem 0">
     <input type="checkbox" wire:ignore wire:model="selectedColumns" value="<?php echo e($column); ?>"
      <?php echo e(in_array($column, $selectedColumns) ? 'checked' : ''); ?> />
     <span><?php echo e($column); ?></span>
    </label>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
 </aside>


 
 <h1 class="table--name"><?php echo e(__('Carts')); ?> (<?php echo e($carts->total()); ?>)</h1>
 <nav class="nav--controls">
  
  <input class="input input--long" type="text" wire:model.debounce.300ms="search" placeholder="Search...">
  
  <button class="button button--primary button--centered display--desktop" tooltip="Refresh table" tooltip-top
   wire:click="$refresh">
   <svg>
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M15 4.55a8 8 0 0 0 -6 14.9m0 -4.45v5h-5" />
    <path d="M18.37 7.16l0 .01" />
    <path d="M13 19.94l0 .01" />
    <path d="M16.84 18.37l0 .01" />
    <path d="M19.37 15.1l0 .01" />
    <path d="M19.94 11l0 .01" />
   </svg>
  </button>
  
  <div class="dropdown dropdown--right" <?php if(!$checked): ?> style="display: none;" <?php endif; ?>>
   

   <button class="button button--primary button--centered button--long" tooltip="Actions with checked" tooltip-top>
    <span>With Checked(<?php echo e(count($checked)); ?>)</span>
   </button>
   
   <div class="dropdown__content">
    <button class="button button--primary button--long" wire:click="confirmItemsRemoval()">
     Delete
    </button>
   </div>
  </div>
  
  <div class="dropdown dropdown--right display--desktop" wire:ignore>
   

   <button class="button button--primary button--centered" tooltip="Sort items in table" tooltip-left>
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M15 10v-5c0 -1.38 .62 -2 2 -2s2 .62 2 2v5m0 -3h-4" />
     <path d="M19 21h-4l4 -7h-4" />
     <path d="M4 15l3 3l3 -3" />
     <path d="M7 6v12" />
    </svg>
   </button>
   
   <div class="dropdown__content">
    <div class="dropdown__container">
     <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <button
       class="button button--primary button--long button--flexed button--arrow <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>"
       wire:click="sortBy('<?php echo e($column); ?>')">
       <svg>
        <polyline points="6 9 12 15 18 9"></polyline>
       </svg>
       <?php echo e($column); ?>

      </button>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
   </div>
  </div>
  
  <div class="dropdown dropdown--right display--desktop" wire:ignore>
   

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
       <input type="checkbox" wire:ignore wire:model="selectedColumns" value="<?php echo e($column); ?>"
        <?php echo e(in_array($column, $selectedColumns) ? 'checked' : ''); ?> />
       <span><?php echo e($column); ?></span>
      </label>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
   </div>
  </div>
  
  <div class="dropdown dropdown--right display--mobile">
   

   <button class="button button--primary button--centered" tooltip="Show more actions" tooltip-left>

    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
     <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
     <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
    </svg>
   </button>
   
   <div class="dropdown__content">
    <div class="dropdown__container">
     <button class="button button--primary button--fill button--flexed" wire:click="$refresh">
      <svg>
       <path stroke="none" d="M0 0h24v24H0z" fill="none" />
       <path d="M15 4.55a8 8 0 0 0 -6 14.9m0 -4.45v5h-5" />
       <path d="M18.37 7.16l0 .01" />
       <path d="M13 19.94l0 .01" />
       <path d="M16.84 18.37l0 .01" />
       <path d="M19.37 15.1l0 .01" />
       <path d="M19.94 11l0 .01" />
      </svg>
      <span>Refresh table</span>
     </button>
     <button class="button button--primary button--fill button--flexed" id="sort__open">
      <svg>
       <path stroke="none" d="M0 0h24v24H0z" fill="none" />
       <path d="M15 10v-5c0 -1.38 .62 -2 2 -2s2 .62 2 2v5m0 -3h-4" />
       <path d="M19 21h-4l4 -7h-4" />
       <path d="M4 15l3 3l3 -3" />
       <path d="M7 6v12" />
      </svg>
      <span>Sorting data</span>
     </button>
     <button class="button button--primary button--fill button--flexed" id="visi__open">
      <svg>
       <path stroke="none" d="M0 0h24v24H0z" fill="none" />
       <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
       <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
      </svg>
      <span>Visible</span>
     </button>
    </div>
   </div>
  </div>
 </nav>


 
 <?php if($selectPage && $selectAll): ?>
  <button class="button button--fill button--primary" style="margin-top: 10px;">
   You selected <?php echo e(count($checked)); ?> items.
  </button>
 <?php elseif($selectPage): ?>
  <button class="button button--fill button--secondary" style="margin-top: 10px;" wire:click="selectAll">
   You selected <?php echo e(count($checked)); ?> items, select all?
  </button>
 <?php endif; ?>


 
 <div class="table" <?php if($selectPage || $selectAll): ?> style="height: calc(100% - 150px);" <?php endif; ?>>
  <table class="expandable-table">
   <thead>
    <tr>
     <th style="border-right: none; border-left: none;">
      <div class="checkbox--secondary">
       <input type="checkbox" id="selectPage2" wire:model="selectPage" />
       <label for="selectPage2"></label>
      </div>
     </th>
     <?php $__currentLoopData = $selectedColumns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($this->showColumn($column)): ?>
       <th <?php if($index > count($selectedColumns) - 14): ?> class="hidden" <?php endif; ?>>
        <button wire:click="sortBy('<?php echo e($column); ?>')"
         class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
         <?php echo e($column); ?>

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
    <?php if($carts->isEmpty()): ?>
     <tr>
      <td class="table--empty" colspan="<?php echo e(count($selectedColumns) + 2); ?>">No record found.</td>
     </tr>
    <?php else: ?>
     <?php
      $i = 0;
     ?>
     <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nr => $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr <?php if($loop->last): ?> id="last_record" <?php endif; ?>
       class="expandable-row <?php if($this->isChecked($cart->id)): ?> active <?php endif; ?>">
       <td style="border-left: none" data-title="Check">
        <div class="checkbox--primary">
         <input type="checkbox" value="<?php echo e($cart->id); ?>" id="<?php echo e($cart->id); ?>" wire:model="checked">
         <label for="<?php echo e($cart->id); ?>"></label>
        </div>
       </td>
       <?php $__currentLoopData = $selectedColumns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <td <?php if($index > count($selectedColumns) - 14): ?> class="hidden" <?php endif; ?> data-title="<?php echo e($column); ?>"
         wire:click="expandRow(<?php echo e($nr); ?>)">
         <?php if($column === 'name'): ?>
          <a href="<?php echo e(route('show_cart', ['id' => $cart->id])); ?>"><?php echo e($cart->name); ?></a>
         <?php elseif($column === 'session_id'): ?>
          <a href="<?php echo e(route('show_session', ['id' => $cart->session_id])); ?>"><?php echo e($cart->$column); ?></a>
         <?php elseif($column === 'currency_id'): ?>
          <?php echo e($cart->currency->name); ?>

         <?php elseif($column === 'status_id'): ?>
          <?php echo e($cart->status->name); ?>

         <?php elseif($column === 'voucher_id'): ?>
          <?php if($cart->voucher_id): ?>
           <?php echo e($cart->voucher->code); ?>

          <?php endif; ?>
         <?php elseif($column === 'seen_by_customer'): ?>
          <?php if($cart->$column): ?>
           <div class="checkbox--secondary disabled">
            <input type="checkbox" id="checkboxdisabled1" disabled checked>
            <label for="checkboxdisabled"></label>
           </div>
          <?php else: ?>
           <div class="checkbox--secondary disabled">
            <input type="checkbox" id="checkboxdisabled2" disabled>
            <label for="checkboxdisabled"></label>
           </div>
          <?php endif; ?>
         <?php elseif($column === 'order_id'): ?>
          <?php if($cart->order_id): ?>
           <a href="<?php echo e(route('show_order', ['id' => $cart->order_id])); ?>"><?php echo e($cart->order->name); ?></a>
          <?php endif; ?>
         <?php else: ?>
          <?php echo e($cart->$column); ?>

         <?php endif; ?>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <td style="border-right: none">
        <button wire:click.prevent="confirmItemRemoval(<?php echo e($cart->id); ?>)"
         class="button button--secondary button--sm">
         <svg>
          <polyline points="3 6 5 6 21 6"></polyline>
          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
         </svg>
        </button>
       </td>
      </tr>
      <tr class="details-row  <?php if($row === $i): ?> active <?php endif; ?>">
       <td colspan="17">
        <div class="details">
         <?php $__currentLoopData = $selectedColumns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($index >= count($selectedColumns) - 13): ?>
           <?php if($column === 'name'): ?>
            <p>
             <bold><?php echo e($column); ?>:</bold>
             <a href="<?php echo e(route('show_cart', ['id' => $cart->id])); ?>"><?php echo e($cart->name); ?></a>
            </p>
           <?php elseif($column === 'currency_id'): ?>
            <p>
             <bold><?php echo e($column); ?>:</bold><?php echo e($cart->currency->name); ?>

            </p>
           <?php elseif($column === 'status_id'): ?>
            <p>
             <bold><?php echo e($column); ?>:</bold><?php echo e($cart->status->name); ?>

            </p>
           <?php elseif($column === 'seen_by_customer'): ?>
            <p>
             <bold><?php echo e($column); ?>:</bold>
             <?php if($cart->$column): ?>
              <div class="checkbox--secondary disabled">
               <input type="checkbox" id="disabled1" disabled checked>
               <label for="disabled1"></label>
              </div>
             <?php else: ?>
              <div class="checkbox--secondary disabled">
               <input type="checkbox" id="disabled1" disabled>
               <label for="disabled1"></label>
              </div>
             <?php endif; ?>
            </p>
           <?php elseif($column === 'voucher_id'): ?>
            <?php if($cart->voucher_id): ?>
             <p>
              <bold><?php echo e($column); ?>:</bold>
              <?php echo e($cart->voucher->code); ?>

             </p>
            <?php endif; ?>
           <?php elseif($column === 'order_id'): ?>
            <?php if($cart->order_id): ?>
             <p>
              <bold><?php echo e($column); ?>:</bold>
              <a href="<?php echo e(route('show_order', ['id' => $cart->order_id])); ?>"><?php echo e($cart->order->name); ?></a>
             </p>
            <?php endif; ?>
           <?php else: ?>
            <p>
             <bold><?php echo e($column); ?>:</bold>
             <?php echo e($cart->$column); ?>

            </p>
           <?php endif; ?>
          <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
       </td>
      </tr>
      <?php
       $i++;
      ?>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
   </tbody>
  </table>

  <?php if (isset($component)) { $__componentOriginala41661f6914b28f3280f7bf48dd90e16 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala41661f6914b28f3280f7bf48dd90e16 = $attributes; } ?>
<?php $component = App\View\Components\AdminLazyload::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-lazyload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AdminLazyload::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala41661f6914b28f3280f7bf48dd90e16)): ?>
<?php $attributes = $__attributesOriginala41661f6914b28f3280f7bf48dd90e16; ?>
<?php unset($__attributesOriginala41661f6914b28f3280f7bf48dd90e16); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala41661f6914b28f3280f7bf48dd90e16)): ?>
<?php $component = $__componentOriginala41661f6914b28f3280f7bf48dd90e16; ?>
<?php unset($__componentOriginala41661f6914b28f3280f7bf48dd90e16); ?>
<?php endif; ?>

  
  <?php if($loadAmount <= count($carts)): ?>
   <button class="button button--secondary button--fill" style="margin-top: 10px;" wire:click="loadMore">
    Load more
   </button>
  <?php endif; ?>
 </div>
</section>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/cartstable.blade.php ENDPATH**/ ?>