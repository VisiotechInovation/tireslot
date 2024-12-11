<div class="accordion <?php if($showrelated): ?> active <?php endif; ?>">
 
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
   class="button button--flexed button--fill button--primary <?php if($showrelated): ?> button--secondary active <?php endif; ?>"
   wire:click.prevent="<?php if($showrelated === false): ?> $set('showrelated', true) <?php else: ?> $set('showrelated', false) <?php endif; ?>">
   <?php echo e(__('Orders ')); ?>(<?php echo e($account->orders()->count()); ?>)
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
       <input type="checkbox" id="selectPage15" wire:model="selectPage" />
       <label for="selectPage15"></label>
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
     <?php if($this->showColumn('Name')): ?>
      <th>
       <button wire:click="sortBy('name')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Name
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Cart')): ?>
      <th>
       <button wire:click="sortBy('cart_id')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Cart
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Session Id')): ?>
      <th class="hidden">
       <button wire:click="sortBy('session_id')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Session Id
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Quantity Amount')): ?>
      <th class="hidden">
       <button wire:click="sortBy('quantity_amount')"
        class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Quantity Amount
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Sum Amount')): ?>
      <th class="hidden">
       <button wire:click="sortBy('sum_amount')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Sum Amount
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Currency')): ?>
      <th class="hidden">
       <button wire:click="sortBy('currency_id')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Currency
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Status')): ?>
      <th class="hidden">
       <button wire:click="sortBy('status')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Status
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Delivery Method')): ?>
      <th class="hidden">
       <button wire:click="sortBy('delivery_method')"
        class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Delivery Method
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
    <?php if($orders->isEmpty()): ?>
     <tr>
      <td class="table--empty" colspan="<?php echo e(count($columns) + 2); ?>">No record found.</td>
     </tr>
    <?php else: ?>
     <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr <?php if($loop->last): ?> id="last_record" <?php endif; ?>
       class="expandable-row <?php if($this->isChecked($order->id)): ?> active <?php endif; ?>">
       <td style="border-left: none" data-title="Check">
        <div class="checkbox--primary">
         <input type="checkbox" value="<?php echo e($order->id); ?>" id="<?php echo e($order->id); ?>" wire:model="checked">
         <label for="<?php echo e($order->id); ?>"></label>
        </div>
       </td>
       <?php if($this->showColumn('Id')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($order->id); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Name')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)">
         <a href="<?php echo e(route('show_order', ['id' => $order->id])); ?>">
          <?php echo e($order->name); ?>

         </a>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Cart')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)">
         <a href="<?php echo e(route('show_cart', ['id' => $order->cart_id])); ?>">
          <?php echo e($order->cart->name); ?>

         </a>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Session Id')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($order->session_id); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Quantity Amount')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($order->quantity_amount); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Sum Amount')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($order->sum_amount); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Currency')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($order->currency->name); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Status')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($order->status->name); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Delivery Method')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($order->payment->name); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Created At')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($order->created_at); ?>

        </td>
       <?php endif; ?>
       <td>
        <button wire:click.prevent="confirmItemRemoval(<?php echo e($order->id); ?>)"
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
           <bold>Id</bold><?php echo e($order->id); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Name')): ?>
          <p>
           <bold>Name</bold>
           <a href="<?php echo e(route('show_order', ['id' => $order->id])); ?>"><?php echo e($order->name); ?></a>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Session Id')): ?>
          <p>
           <bold>Session Id</bold><?php echo e($order->session_id); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Cart')): ?>
          <p>
           <bold>Cart</bold>
           <a href="<?php echo e(route('show_cart', ['id' => $order->cart_id])); ?>"><?php echo e($order->cart->name); ?></a>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Quantity Amount')): ?>
          <p>
           <bold>Quantity Amount</bold><?php echo e($order->quantity_amount); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Sum Amount')): ?>
          <p>
           <bold>Sum Amount</bold><?php echo e($order->sum_amount); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Currency')): ?>
          <p>
           <bold>Currency</bold><?php echo e($order->currency->name); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Status')): ?>
          <p>
           <bold>Status</bold><?php echo e($order->status->name); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Delivery Method')): ?>
          <p>
           <bold>Delivery Method</bold><?php echo e($order->payment->name); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Created At')): ?>
          <p>
           <bold>Created At</bold><?php echo e($order->created_at); ?>

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


  
  <?php if(count($orders) >= 10): ?>
   <button class="button button--secondary button--fill" style="margin-top: 10px;" wire:click="load">
    Load more
   </button>
  <?php endif; ?>
 </div>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/related-orders.blade.php ENDPATH**/ ?>