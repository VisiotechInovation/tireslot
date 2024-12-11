<div class="accordion <?php if($showrelatedprod): ?> active <?php endif; ?>">
 
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


 
 <div class="accordion__header">
  <button
   class="button button--flexed button--fill button--primary <?php if($showrelatedprod): ?> button--secondary active <?php endif; ?>"
   wire:click.prevent="<?php if($showrelatedprod === false): ?> $set('showrelatedprod', true) <?php else: ?> $set('showrelatedprod', false) <?php endif; ?>">
   <?php echo e(__('Order Items ')); ?>(<?php echo e($order->orders()->count()); ?>)
   <svg>
    <polyline points="6 9 12 15 18 9"></polyline>
   </svg>
  </button>
  <!-- <button class="button button--secondary">
        <svg>
     <line x1="12" y1="5" x2="12" y2="19"></line>
     <line x1="5" y1="12" x2="19" y2="12"></line>
    </svg>
    </button> -->
 </div>


 
 <div class="accordion__body">
  
  <nav class="nav--controls">
   
   <input class="input input--long" type="text" wire:model.debounce.300ms="search" placeholder="Search...">
   
   <div class="dropdown dropdown--right" <?php if(!$checked): ?> style="display:none;" <?php endif; ?>>
    
    <button class="button button--primary button--centered button--long" tooltip="Actions with checked" tooltip-top>
     <span>With Checked(<?php echo e(count($checked)); ?>)</span>
    </button>
    
    <div class="dropdown__content">
     <button class="button button--primary button--long" wire:click="confirmItemsRemoval()">
      Delete
     </button>
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


  
  <?php if($selectPage && $selectAll): ?>
   <button class="button button--fill button--primary">
    You selected <?php echo e(count($checked)); ?> items.
   </button>
  <?php elseif($selectPage): ?>
   <button class="button button--fill button--secondary" wire:click="selectAll">
    You selected <?php echo e(count($checked)); ?> items, select all?
   </button>
  <?php endif; ?>


  
  <table class="expandable-table">
   <thead>
    <tr>
     <th style="border-right: none; border-left: none;">
      <div class="checkbox--primary">
       <input type="checkbox" id="selectPage14" wire:model="selectPage" />
       <label for="selectPage14"></label>
      </div>
     </th>
     <?php if($this->showColumn('Id')): ?>
      <th>
       <button wire:click="sortBy('id')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        ID
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Product')): ?>
      <th>
       <button class="table--btn">
        Product Name
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Price')): ?>
      <th class="hidden">
       <button wire:click="sortBy('price')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Price
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Quantity')): ?>
      <th class="hidden">
       <button wire:click="sortBy('quantity')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Quantity
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('VAT')): ?>
      <th class="hidden">
       <button wire:click="sortBy('quantity')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        VAT
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Created At')): ?>
      <th class="hidden">
       <button wire:click="sortBy('created_at')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Created At
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
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
    <?php
     $i = 0;
    ?>
    <?php if($orderproducts->isEmpty()): ?>
     <tr>
      <td class="table--empty" colspan="<?php echo e(count($columns) + 2); ?>">No record found.</td>
     </tr>
    <?php else: ?>
     <?php $__currentLoopData = $orderproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr <?php if($loop->last): ?> id="last_record" <?php endif; ?>
       class="expandable-row <?php if($this->isChecked($product->id)): ?> active <?php endif; ?>">
       <td style="border-left: none" data-title="Check">
        <div class="checkbox--primary">
         <input type="checkbox" value="<?php echo e($product->id); ?>" id="<?php echo e($product->id); ?>" wire:model="checked">
         <label for="<?php echo e($product->id); ?>"></label>
        </div>
       </td>
       <?php if($this->showColumn('Id')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)"><?php echo e($product->id); ?></td>
       <?php endif; ?>
       <?php if($this->showColumn('Product')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)">
         <a href="<?php echo e(route('show_product', ['id' => $product->product->id])); ?>"><?php echo e($product->product->name); ?></a>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Price')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($product->price); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Quantity')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($product->quantity); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('VAT')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($product->vat); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Created At')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($product->created_at); ?>

        </td>
       <?php endif; ?>
       <td>
        <button wire:click.prevent="confirmItemRemoval(<?php echo e($product->id); ?>)"
         class="button button--secondary button--sm">
         <svg>
          <polyline points="3 6 5 6 21 6"></polyline>
          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
         </svg>
        </button>
       </td>
      </tr>
      <tr class="details-row  <?php if($row === $i): ?> active <?php endif; ?>">
       <td colspan="<?php echo e(count($columns) + 2); ?>">
        <div class="details">
         <?php if($this->showColumn('Id')): ?>
          <p>
           <bold>Id</bold>
           <?php echo e($product->id); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Product')): ?>
          <p>
           <bold>Product</bold>
           <a href="<?php echo e(route('show_product', ['id' => $product->product->id])); ?>"><?php echo e($product->product->name); ?></a>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Price')): ?>
          <p>
           <bold>Price</bold>
           <?php echo e($product->price); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Quantity')): ?>
          <p>
           <bold>Quantity</bold>
           <?php echo e($product->quantity); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('VAT')): ?>
          <p>
           <bold>VAT</bold>
           <?php echo e($product->vat); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Created At')): ?>
          <p>
           <bold>Created At</bold>
           <?php echo e($product->created_at); ?>

          </p>
         <?php endif; ?>
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


  
  <?php if(count($orderproducts) >= 10): ?>
   <button class="button button--secondary button--fill" style="margin-top: 10px;" wire:click="load">
    Load more
   </button>
  <?php endif; ?>
 </div>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/related-order-items.blade.php ENDPATH**/ ?>