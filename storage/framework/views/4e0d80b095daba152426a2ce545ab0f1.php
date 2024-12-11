<div class="accordion <?php if($showrelatedadd): ?> active <?php endif; ?>">
 
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
   class="button button--flexed button--fill button--primary <?php if($showrelatedadd): ?> button--secondary active <?php endif; ?>"
   wire:click.prevent="<?php if($showrelatedadd === false): ?> $set('showrelatedadd', true) <?php else: ?> $set('showrelatedadd', false) <?php endif; ?>">
   <?php echo e(__('Addresses ')); ?>(<?php echo e($account->addresses()->count()); ?>)
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
       <input type="checkbox" id="selectPage8" wire:model="selectPage" />
       <label for="selectPage8"></label>
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
     <?php if($this->showColumn('Type')): ?>
      <th>
       <button wire:click="sortBy('type')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Type
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('First Name')): ?>
      <th>
       <button wire:click="sortBy('first_name')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        First Name
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Last Name')): ?>
      <th>
       <button wire:click="sortBy('last_name')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Last Name
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>

     <?php if($this->showColumn('Phone')): ?>
      <th class="hidden">
       <button wire:click="sortBy('phone')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Phone
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Email')): ?>
      <th class="hidden">
       <button wire:click="sortBy('email')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Email
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Address')): ?>
      <th class="hidden">
       <button wire:click="sortBy('address1')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Address
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Optional Address')): ?>
      <th class="hidden">
       <button wire:click="sortBy('address2')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Optional Address
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Country')): ?>
      <th class="hidden">
       <button wire:click="sortBy('country')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Country
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('County')): ?>
      <th class="hidden">
       <button wire:click="sortBy('county')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        County
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('City')): ?>
      <th class="hidden">
       <button wire:click="sortBy('city')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        City
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Post Code')): ?>
      <th class="hidden">
       <button wire:click="sortBy('zipcode')" class="table--btn <?php if($orderBy === $column && $orderAsc === '1'): ?> active <?php endif; ?>">
        Post Code
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
      <div style="display: flex;">
       <button class="button button--secondary button--sm" style="opacity: 0">
        <svg>
         <polyline points="3 6 5 6 21 6"></polyline>
         <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
        </svg>
       </button>
       <button class="button button--secondary button--sm" style="opacity: 0">
        <svg>
         <polyline points="3 6 5 6 21 6"></polyline>
         <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
        </svg>
       </button>
      </div>
     </th>
    </tr>
   </thead>
   <tbody>
    <?php
     $i = 0;
    ?>
    <?php if($addresses->isEmpty()): ?>
     <tr>
      <td class="table--empty" colspan="<?php echo e(count($columns) + 2); ?>">No record found.</td>
     </tr>
    <?php else: ?>
     <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr <?php if($loop->last): ?> id="last_record" <?php endif; ?>
       class="expandable-row <?php if($this->isChecked($address->id)): ?> active <?php endif; ?>">
       <td style="border-left: none" data-title="Check">
        <div class="checkbox--primary">
         <input type="checkbox" value="<?php echo e($address->id); ?>" id="<?php echo e($address->id); ?>" wire:model="checked">
         <label for="<?php echo e($address->id); ?>"></label>
        </div>
       </td>
       <?php if($this->showColumn('Id')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($address->id); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Type')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($address->type); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('First Name')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)">
         <?php if($editindex !== $index): ?>
          <?php echo e($address->first_name); ?>

         <?php else: ?>
          <input type="text" required class="input" wire:model.defer="adress.<?php echo e($index); ?>.first_name">
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Last Name')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)">
         <?php if($editindex !== $index): ?>
          <?php echo e($address->last_name); ?>

         <?php else: ?>
          <input type="text" required class="input" wire:model.defer="adress.<?php echo e($index); ?>.last_name">
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Phone')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)" class="hidden">
         <?php if($editindex !== $index): ?>
          <?php echo e($address->phone); ?>

         <?php else: ?>
          <input type="phone" required class="input" wire:model.defer="adress.<?php echo e($index); ?>.phone">
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Email')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)" class="hidden">
         <?php if($editindex !== $index): ?>
          <?php echo e($address->email); ?>

         <?php else: ?>
          <input type="email" required class="input" wire:model.defer="adress.<?php echo e($index); ?>.email">
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Address')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)" class="hidden">
         <?php if($editindex !== $index): ?>
          <?php echo e($address->address1); ?>

         <?php else: ?>
          <input type="text" required class="input" wire:model.defer="adress.<?php echo e($index); ?>.address1">
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Optional Address')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)" class="hidden">
         <?php if($editindex !== $index): ?>
          <?php echo e($address->address2); ?>

         <?php else: ?>
          <input type="text" required class="input" wire:model.defer="adress.<?php echo e($index); ?>.address2">
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Country')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)" class="hidden">
         <?php if($editindex !== $index): ?>
          <?php echo e($address->country); ?>

         <?php else: ?>
          <input type="text" required class="input" wire:model.defer="adress.<?php echo e($index); ?>.country">
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('County')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)" class="hidden">
         <?php if($editindex !== $index): ?>
          <?php echo e($address->county); ?>

         <?php else: ?>
          <input type="text" required class="input" wire:model.defer="adress.<?php echo e($index); ?>.county">
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('City')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)" class="hidden">
         <?php if($editindex !== $index): ?>
          <?php echo e($address->city); ?>

         <?php else: ?>
          <input type="text" required class="input" wire:model.defer="adress.<?php echo e($index); ?>.city">
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Post Code')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)" class="hidden">
         <?php if($editindex !== $index): ?>
          <?php echo e($address->zipcode); ?>

         <?php else: ?>
          <input type="text" required class="input" wire:model.defer="adress.<?php echo e($index); ?>.zipcode">
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Created At')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)" class="hidden">
         <?php echo e($address->created_at); ?>

        </td>
       <?php endif; ?>
       <td>
        <?php if($editindex !== $index): ?>
         <div style="display: flex;">
          <button class="button button--secondary button--sm"
           wire:click.prevent="edititem(<?php echo e($index); ?>, <?php echo e($address->id); ?>)">
           <svg>
            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
            </path>
           </svg>
          </button>
          <button wire:click.prevent="confirmItemRemoval(<?php echo e($address->id); ?>)"
           class="button button--secondary button--sm">
           <svg>
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
           </svg>
          </button>
         </div>
        <?php else: ?>
         <div style="display: flex;">
          <button class="button button--secondary button--sm"
           wire:click.prevent="saveitem(<?php echo e($index); ?> , <?php echo e($address->id); ?>)">
           <svg>
            <polyline points="20 6 9 17 4 12"></polyline>
           </svg>
          </button>
          <button class="button button--secondary button--sm" wire:click.prevent="cancelitem()">
           <svg>
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
           </svg>
          </button>
         </div>
        <?php endif; ?>
       </td>
      </tr>
      <tr class="details-row  <?php if($row === $i): ?> active <?php endif; ?>">
       <td colspan="<?php echo e(count($columns) + 2); ?>">
        <div class="details">
         <?php if($this->showColumn('Id')): ?>
          <p>
           <bold>Id:</bold><?php echo e($address->id); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Type')): ?>
          <p>
           <bold>Type:</bold><?php echo e($address->type); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('First Name')): ?>
          <p>
           <?php if($editindex !== $index): ?>
            <bold>First Name:</bold><?php echo e($address->first_name); ?>

           <?php else: ?>
            <bold>First Name:</bold><input type="text" required class="input"
             wire:model.defer="adress.<?php echo e($index); ?>.first_name">
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Last Name')): ?>
          <p>
           <?php if($editindex !== $index): ?>
            <bold>Last Name:</bold><?php echo e($address->last_name); ?>

           <?php else: ?>
            <bold>Last Name:</bold><input type="text" required class="input"
             wire:model.defer="adress.<?php echo e($index); ?>.last_name">
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Phone')): ?>
          <p>
           <?php if($editindex !== $index): ?>
            <bold>Phone:</bold><?php echo e($address->phone); ?>

           <?php else: ?>
            <bold>Phone:</bold><input type="phone" required class="input"
             wire:model.defer="adress.<?php echo e($index); ?>.phone">
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Email')): ?>
          <p>
           <?php if($editindex !== $index): ?>
            <bold>Email:</bold><?php echo e($address->email); ?>

           <?php else: ?>
            <bold>Email:</bold><input type="email" required class="input"
             wire:model.defer="adress.<?php echo e($index); ?>.email">
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Address')): ?>
          <p>
           <?php if($editindex !== $index): ?>
            <bold>Address:</bold><?php echo e($address->address1); ?>

           <?php else: ?>
            <bold>Address:</bold><input type="text" required class="input"
             wire:model.defer="adress.<?php echo e($index); ?>.address1">
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Optional Address')): ?>
          <p>
           <?php if($editindex !== $index): ?>
            <bold>Optional Address:</bold><?php echo e($address->address2); ?>

           <?php else: ?>
            <bold>Optional Address:</bold><input type="text" required class="input"
             wire:model.defer="adress.<?php echo e($index); ?>.address2">
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Country')): ?>
          <p>
           <?php if($editindex !== $index): ?>
            <bold>Country:</bold><?php echo e($address->country); ?>

           <?php else: ?>
            <bold>Country:</bold><input type="text" required class="input"
             wire:model.defer="adress.<?php echo e($index); ?>.country">
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('County')): ?>
          <p>
           <?php if($editindex !== $index): ?>
            <bold>County:</bold><?php echo e($address->county); ?>

           <?php else: ?>
            <bold>County:</bold><input type="text" required class="input"
             wire:model.defer="adress.<?php echo e($index); ?>.county">
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('City')): ?>
          <p>
           <?php if($editindex !== $index): ?>
            <bold>City:</bold><?php echo e($address->city); ?>

           <?php else: ?>
            <bold>City:</bold><input type="text" required class="input"
             wire:model.defer="adress.<?php echo e($index); ?>.city">
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Post Code')): ?>
          <p>
           <?php if($editindex !== $index): ?>
            <bold>Post Code:</bold><?php echo e($address->zipcode); ?>

           <?php else: ?>
            <bold>Post Code:</bold><input type="text" required class="input"
             wire:model.defer="adress.<?php echo e($index); ?>.zipcode">
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Created At')): ?>
          <p>
           <bold>Created At:</bold><?php echo e($address->created_at); ?>

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


  
  <?php if(count($addresses) >= 10): ?>
   <button class="button button--secondary button--fill" style="margin-top: 10px;" wire:click="load">
    Load more
   </button>
  <?php endif; ?>
 </div>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/related-addresses.blade.php ENDPATH**/ ?>