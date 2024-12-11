<div class="accordion <?php if($showrelatedprice): ?> active <?php endif; ?>">

 
 
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
  <div class="background background--center  <?php if($editmultiple): ?> active <?php endif; ?>"></div>
  <div class="aside aside--table <?php if($editmultiple): ?> active <?php endif; ?>">


   
   <nav class="nav--controls">
    <h1 class="table--name">
     <?php echo e(__('Edit related items')); ?>

    </h1>
    <button class="button button--primary button--centered" wire:click.prevent="confirmpricemultiple()">
     <svg>
      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
      <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
      <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
      <path d="M14 4l0 4l-6 0l0 -4" />
     </svg>
    </button>
    <button class="button button--danger button--centered" wire:click="closemodal">
     <svg>
      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
      <path d="M15 19v-2a2 2 0 0 1 2 -2h2" />
      <path d="M15 5v2a2 2 0 0 0 2 2h2" />
      <path d="M5 15h2a2 2 0 0 1 2 2v2" />
      <path d="M5 9h2a2 2 0 0 0 2 -2v-2" />
     </svg>
    </button>
   </nav>


   
   <div class="table" style="height: calc(100% - 60px);">
    <table class="expandable-table">
     <thead>
      <tr>
       <th style="width: unset !important;">
        <div style="display: flex;">
         <button class="table--btn">
          Product
         </button>
         <button class="button button--secondary button--sm" style="opacity: 0">
          <svg>
           <polyline points="3 6 5 6 21 6"></polyline>
           <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
          </svg>
         </button>
        </div>
       </th>
       <th>
        <button class="table--btn">Pricelist</button>
       </th>
       <th>
        <button class="table--btn">Value without VAT</button>
       </th>
       <th class="hidden">
        <button class="table--btn">Discount %</button>
       </th>
       <th class="hidden" style="width: unset !important;">
        <button class="table--btn">VAT %</button>
       </th>
       <th class="hidden" style="width: unset !important;">
        <button class="table--btn">Price</button>
       </th>
      </tr>
     </thead>
     <tbody>
      <?php
       $j = 0;
      ?>
      <?php $__currentLoopData = $priceAndValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $priceAndValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr class="expandable-row" wire:key="price-row-<?php echo e($index); ?>">
        <td wire:click="expandRow2(<?php echo e($index); ?>)" style="width: unset !important;">
         <?php echo e($item->name); ?>

        </td>
        <td wire:click="expandRow2(<?php echo e($index); ?>)">
         <?php echo e($priceAndValue['itemselected']); ?>

        </td>
        <td wire:click="expandRow2(<?php echo e($index); ?>)">
         <div class="searchable">
          <input type="text" required class="input__searchable"
           wire:model.defer="priceAndValues.<?php echo e($index); ?>.price.value">
         </div>
        </td>
        <td class="hidden" wire:click="expandRow2(<?php echo e($index); ?>)">
         <div class="searchable">
          <input type="number" required class="input__searchable"
           wire:model.defer="priceAndValues.<?php echo e($index); ?>.price.discount">
         </div>
        </td>
        <td class="hidden" style="width: unset !important;" wire:click="expandRow2(<?php echo e($index); ?>)">
         <div class="searchable">
          <input type="number" required
           class="input__searchable"wire:model.defer="priceAndValues.<?php echo e($index); ?>.price.vat">
         </div>
        </td>
        <td class="hidden" style="width: unset !important;" wire:click="expandRow2(<?php echo e($index); ?>)">
         <div class="searchable">
          <input type="number" required
           class="input__searchable"wire:model.defer="priceAndValues.<?php echo e($index); ?>.price.price">
         </div>
        </td>
       </tr>
       <tr class="details-row  <?php if($row2 === $j): ?> active <?php endif; ?>">
        <td colspan="3">
         <div class="details">



          <p>
           <bold>Discount</bold>
          <div class="searchable">
           <input type="number" required class="input__searchable"
            wire:model.defer="priceAndValues.<?php echo e($index); ?>.price.discount">
          </div>
          </p>
          <p>
           <bold>VAT</bold>
          <div class="searchable">
           <input type="number" required
            class="input__searchable"wire:model.defer="priceAndValues.<?php echo e($index); ?>.price.vat">
          </div>
          </p>
          <p>
           <bold>Price</bold>
          <div class="searchable">
           <input type="number" required
            class="input__searchable"wire:model.defer="priceAndValues.<?php echo e($index); ?>.price.price">
          </div>
          </p>
         </div>
        </td>
       </tr>
       <?php
        $j++;
       ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </tbody>
    </table>
   </div>

  </div>
 </aside>
 
 <aside>
  <div class="background background--center  <?php if($addrelatedprice): ?> active <?php endif; ?>"></div>
  <div class="aside aside--table <?php if($addrelatedprice): ?> active <?php endif; ?>">


   
   <nav class="nav--controls">
    <h1 class="table--name">
     <?php echo e(__('Add related Pricelist')); ?>

    </h1>
    <button class="button button--primary button--centered" wire:click.prevent="saveitems()">
     <svg>
      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
      <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
      <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
      <path d="M14 4l0 4l-6 0l0 -4" />
     </svg>
    </button>
    <button class="button button--danger button--centered" wire:click="closemodal">
     <svg>
      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
      <path d="M15 19v-2a2 2 0 0 1 2 -2h2" />
      <path d="M15 5v2a2 2 0 0 0 2 2h2" />
      <path d="M5 15h2a2 2 0 0 1 2 2v2" />
      <path d="M5 9h2a2 2 0 0 0 2 -2v-2" />
     </svg>
    </button>
   </nav>


   
   <div class="table" style="height: calc(100% - 60px);">
    <table class="expandable-table">
     <thead>
      <tr>
       <th style="width: unset !important;">
        <button class="table--btn">
         Product
        </button>
       </th>
       <th>
        <button class="table--btn">Pricelist</button>
       </th>
       <th>
        <button class="table--btn">Value without VAT</button>
       </th>
       <th class="hidden">
        <button class="table--btn">Discount %</button>
       </th>
       <th class="hidden" style="width: unset !important;">
        <button class="table--btn">VAT %</button>
       </th>
       <th class="hidden" style="width: unset !important;">
        <button class="table--btn">Price</button>
       </th>
       <th>
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
       $k = 0;
      ?>
      <?php $__currentLoopData = $priceAndValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $priceAndValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr class="expandable-row" wire:key="price-row-<?php echo e($index); ?>">
        <td wire:click="expandRow3(<?php echo e($index); ?>)" style="width: unset !important;">
         <?php echo e($item->name); ?>

        </td>
        <td wire:click="expandRow3(<?php echo e($index); ?>)">
         <?php if($priceAndValue['allow']): ?>
          <div class="searchable active">
           <!-- Dropdown Header -->
           <input class="input" wire:model.debounce.300ms="searchadd" placeholder="Search..." type="text">
           <button class="button__searchable" wire:click.prevent="dennyselect(<?php echo e($index); ?>)">
            <svg>
             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
             <path d="M10 10l-6 6v4h4l6 -6m1.99 -1.99l2.504 -2.504a2.828 2.828 0 1 0 -4 -4l-2.5 2.5" />
             <path d="M13.5 6.5l4 4" />
             <path class="button__searchable--line" d="M3 3l18 18" />
            </svg>
           </button>
           <div class="content__searchable">
            <div class="list__searchable">
             <?php if(count($addprices) >= 1): ?>
              <?php $__currentLoopData = $addprices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <button class="item__searchable"
                wire:click.prevent="selectitem(<?php echo e($index); ?>, <?php echo e($pri->id); ?>, '<?php echo e($pri->name); ?>')">
                <?php echo e($pri->name); ?>

               </button>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php else: ?>
              <button class="item__searchable"><?php echo e(__('No record found')); ?></button>
             <?php endif; ?>
            </div>
           </div>
          </div>
         <?php else: ?>
          <div class="searchable">
           <button class="input__searchable">
            <?php if($priceAndValue['itemselected']): ?>
             <?php echo e($priceAndValue['itemselected']); ?>

            <?php else: ?>
             <?php echo e(__('Select a item')); ?>

            <?php endif; ?>
           </button>
           <button class="button__searchable" wire:click.prevent="allowselect(<?php echo e($index); ?>)">
            <svg>
             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
             <path d="M10 10l-6 6v4h4l6 -6m1.99 -1.99l2.504 -2.504a2.828 2.828 0 1 0 -4 -4l-2.5 2.5" />
             <path d="M13.5 6.5l4 4" />
             <path class="button__searchable--line" d="M3 3l18 18" />
            </svg>
           </button>
          </div>
         <?php endif; ?>
         <input type="hidden" wire:model.defer="priceAndValues.<?php echo e($index); ?>.price.name">
        </td>
        <td wire:click="expandRow3(<?php echo e($index); ?>)">
         <div class="searchable">
          <input type="text" required class="input__searchable"
           wire:model.defer="priceAndValues.<?php echo e($index); ?>.price.value">
         </div>
        </td>
        <td class="hidden" wire:click="expandRow3(<?php echo e($index); ?>)">
         <div class="searchable">
          <input type="number" required class="input__searchable"
           wire:model.defer="priceAndValues.<?php echo e($index); ?>.price.discount">
         </div>
        </td>
        <td class="hidden" wire:click="expandRow3(<?php echo e($index); ?>)">
         <div class="searchable">
          <input type="number" required
           class="input__searchable"wire:model.defer="priceAndValues.<?php echo e($index); ?>.price.vat">
         </div>
        </td>
        <td class="hidden" wire:click="expandRow3(<?php echo e($index); ?>)">
         <div class="searchable">
          <input type="number" required
           class="input__searchable"wire:model.defer="priceAndValues.<?php echo e($index); ?>.price.price">
         </div>
        </td>
        <td style="width: unset !important;">
         <div style="display: flex;">
          <?php if($index == $row4 - 1): ?>
           <button class="button button--secondary button--sm" wire:click="plus">
            <svg>
             <line x1="12" y1="5" x2="12" y2="19">
             </line>
             <line x1="5" y1="12" x2="19" y2="12">
             </line>
            </svg>
           </button>
           <button class="button button--secondary button--sm" wire:click="clear(<?php echo e($index); ?>)">
            <svg>
             <line x1="18" y1="6" x2="6" y2="18">
             </line>
             <line x1="6" y1="6" x2="18" y2="18">
             </line>
            </svg>
           </button>
          <?php else: ?>
           <button class="button button--secondary button--sm" wire:click="clear(<?php echo e($index); ?>)">
            <svg>
             <line x1="18" y1="6" x2="6" y2="18">
             </line>
             <line x1="6" y1="6" x2="18" y2="18">
             </line>
            </svg>
           </button>
          <?php endif; ?>
         </div>
        </td>
       </tr>
       <tr class="details-row  <?php if($row3 === $k): ?> active <?php endif; ?>">
        <td colspan="3">
         <div class="details">



          <p>
           <bold>Discount</bold>
          <div class="searchable">
           <input type="number" required class="input__searchable"
            wire:model.defer="priceAndValues.<?php echo e($index); ?>.price.discount">
          </div>
          </p>
          <p>
           <bold>VAT</bold>
          <div class="searchable">
           <input type="number" required
            class="input__searchable"wire:model.defer="priceAndValues.<?php echo e($index); ?>.price.vat">
          </div>
          </p>
          <p>
           <bold>Price</bold>
          <div class="searchable">
           <input type="number" required
            class="input__searchable"wire:model.defer="priceAndValues.<?php echo e($index); ?>.price.price">
          </div>
          </p>
         </div>
        </td>
       </tr>
       <?php
        $k++;
       ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </tbody>
    </table>
   </div>

  </div>
 </aside>



 
 <div class="accordion__header">
  <button
   class="button button--flexed button--fill button--primary <?php if($showrelatedprice): ?> button--secondary active <?php endif; ?>"
   wire:click.prevent="<?php if($showrelatedprice === false): ?> $set('showrelatedprice', true) <?php else: ?> $set('showrelatedprice', false) <?php endif; ?>">
   <?php echo e(__('Price List ')); ?>(<?php echo e($item->product_prices->count()); ?>)
   <svg>
    <polyline points="6 9 12 15 18 9"></polyline>
   </svg>
  </button>
  <button class="button button--secondary" wire:click.prevent="addrelated()">
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
    
    <button class="button button--primary button--centered button--long dropdown__button"
     tooltip="Actions with checked" tooltip-top>
     <span>With Checked(<?php echo e(count($checked)); ?>)</span>
    </button>
    
    <div class="dropdown__content">
     <div class="dropdown__container">
      <button class="button button--primary button--long" wire:click="confirmItemsRemoval()">
       Delete
      </button>
      <button class="button button--primary button--long" wire:click="editSelected">
       Edit
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
       <input type="checkbox" id="selectPage16" wire:model="selectPage" />
       <label for="selectPage16"></label>
      </div>
     </th>
     <?php $__currentLoopData = $selectedColumns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($this->showColumn($column)): ?>
       <th <?php if($index > count($selectedColumns) - 5): ?> class="hidden" <?php endif; ?>>
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
    <?php if($relatedprices->isEmpty()): ?>
     <tr>
      <td class="table--empty" colspan="<?php echo e(count($selectedColumns) + 2); ?>">No record found.</td>
     </tr>
    <?php else: ?>
     <?php
      $i = 0;
     ?>
     <?php $__currentLoopData = $relatedprices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nr => $prices): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr <?php if($loop->last): ?> id="last_record" <?php endif; ?>
       class="expandable-row <?php if($this->isChecked($prices->id)): ?> active <?php endif; ?>">
       <td style="border-left: none" data-title="Check">
        <div class="checkbox--primary">
         <input type="checkbox" value="<?php echo e($prices->id); ?>" id="<?php echo e($prices->id); ?>" wire:model="checked">
         <label for="<?php echo e($prices->id); ?>"></label>
        </div>
       </td>
       <?php $__currentLoopData = $selectedColumns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <td <?php if($index > count($selectedColumns) - 5): ?> class="hidden" <?php endif; ?> wire:click="expandRow(<?php echo e($nr); ?>)">
         <?php if($column === 'Id'): ?>
          <?php echo e($prices->id); ?>

         <?php elseif($column === 'Name'): ?>
          <a href="<?php echo e(route('show_pricelist', ['id' => $prices->pricelist->id])); ?>">
           <?php echo e($prices->pricelist->name); ?>

          </a>
         <?php elseif($column === 'Currency'): ?>
          <?php echo e($prices->pricelist->currency->name); ?>

         <?php elseif($column === 'Value'): ?>
          <?php echo e($prices->value); ?>

         <?php elseif($column === 'PRICE'): ?>
          <?php if($editedrow !== $nr): ?>
           <?php echo e($prices->price); ?>

          <?php else: ?>
           <div class="searchable">
            <input type="number" required class="input__searchable"
             wire:model.defer="pricelist.<?php echo e($nr); ?>.price">
           </div>
          <?php endif; ?>
         <?php elseif($column === 'Value without Discount'): ?>
          <?php echo e($prices->value_no_discount); ?>

         <?php elseif($column === 'Discount'): ?>
          <?php if($editedrow !== $nr): ?>
           <?php echo e($prices->discount); ?>%
          <?php else: ?>
           <div class="searchable">
            <input type="number" required class="input__searchable"
             wire:model.defer="pricelist.<?php echo e($nr); ?>.discount">
           </div>
          <?php endif; ?>
         <?php elseif($column === 'Value without VAT'): ?>
          <?php if($editedrow !== $nr): ?>
           <?php echo e($prices->value_no_vat); ?>

          <?php else: ?>
           <div class="searchable">
            <input type="number" required class="input__searchable"
             wire:model.defer="pricelist.<?php echo e($nr); ?>.value">
           </div>
          <?php endif; ?>
         <?php elseif($column === 'VAT'): ?>
          <?php if($editedrow !== $nr): ?>
           <?php echo e($prices->vat); ?>%
          <?php else: ?>
           <div class="searchable">
            <input type="number" required class="input__searchable"
             wire:model.defer="pricelist.<?php echo e($nr); ?>.vat">
           </div>
          <?php endif; ?>
         <?php else: ?>
          <?php echo e($prices->$column); ?>

         <?php endif; ?>
        </td>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <td style="border-right: none">
        <div style="display: flex;">
         <?php if($editedrow !== $nr): ?>
          <button class="button button--secondary button--sm"
           wire:click.prevent="edititem(<?php echo e($prices->id); ?>, <?php echo e($prices->pricelist->id); ?>, <?php echo e($nr); ?>)">
           <svg>
            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
            </path>
           </svg>
          </button>
          <button class="button button--secondary button--sm"
           wire:click.prevent="confirmItemRemoval(<?php echo e($prices->id); ?>)">
           <svg>
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
            </path>
           </svg>
          </button>
         <?php else: ?>
          <button class="button button--secondary button--sm"
           wire:click.prevent="confirmitem(<?php echo e($nr); ?>,<?php echo e($prices->id); ?>)">
           <svg>
            <polyline points="20 6 9 17 4 12"></polyline>
           </svg>
          </button>
          <button class="button button--secondary button--sm" wire:click.prevent="canceledit()">
           <svg>
            <line x1="18" y1="6" x2="6" y2="18">
            </line>
            <line x1="6" y1="6" x2="18" y2="18">
            </line>
           </svg>
          </button>
         <?php endif; ?>
        </div>
       </td>
      </tr>
      <tr class="details-row  <?php if($row === $i): ?> active <?php endif; ?>">
       <td colspan="17">
        <div class="details">
         <?php $__currentLoopData = $selectedColumns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($index >= count($selectedColumns) - 4): ?>
           <?php if($column === 'Id'): ?>
            <p>
             <bold><?php echo e($column); ?>:</bold>
             <?php echo e($prices->id); ?>

            </p>
           <?php elseif($column === 'Name'): ?>
            <p>
             <bold><?php echo e($column); ?>:</bold>
             <?php if($editedrow !== $nr): ?>
              <a href="<?php echo e(route('show_pricelist', ['id' => $prices->pricelist->id])); ?>">
               <?php echo e($prices->pricelist->name); ?>

              </a>
             <?php else: ?>
              <?php if($allow): ?>
               <div class="searchable active">
                <!-- Dropdown Header -->
                <input class="input" wire:model.debounce.300ms="searchadd" placeholder="Search..." type="text">
                <button class="button__searchable" wire:click.prevent="dennyselect(<?php echo e($nr); ?>)">
                 <svg>
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M10 10l-6 6v4h4l6 -6m1.99 -1.99l2.504 -2.504a2.828 2.828 0 1 0 -4 -4l-2.5 2.5" />
                  <path d="M13.5 6.5l4 4" />
                  <path class="button__searchable--line" d="M3 3l18 18" />
                 </svg>
                </button>
                <div class="content__searchable">
                 <div class="list__searchable">
                  <?php if(count($addprices) >= 1): ?>
                   <?php $__currentLoopData = $addprices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button class="item__searchable" wire:click.prevent="select(<?php echo e($pri->id); ?>)">
                     <?php echo e($pri->name); ?>

                    </button>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php else: ?>
                   <button class="item__searchable"><?php echo e(__('No record found')); ?></button>
                  <?php endif; ?>
                 </div>
                </div>
               </div>
              <?php else: ?>
               <div class="searchable">
                <button class="input__searchable">
                 <?php if(!$itemselected): ?>
                  <?php echo e($itemselected->name); ?>

                 <?php else: ?>
                  <?php echo e(__('Select a product')); ?>

                 <?php endif; ?>
                </button>
                <button class="button__searchable" wire:click.prevent="allow(<?php echo e($nr); ?>)">
                 <svg>
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M10 10l-6 6v4h4l6 -6m1.99 -1.99l2.504 -2.504a2.828 2.828 0 1 0 -4 -4l-2.5 2.5" />
                  <path d="M13.5 6.5l4 4" />
                  <path class="button__searchable--line" d="M3 3l18 18" />
                 </svg>
                </button>
               </div>
              <?php endif; ?>
             <?php endif; ?>
            </p>
           <?php elseif($column === 'Currency'): ?>
            <p>
             <bold><?php echo e($column); ?>:</bold>
             <?php echo e($prices->pricelist->currency->name); ?>

            </p>
           <?php elseif($column === 'Value'): ?>
            <p>
             <bold><?php echo e($column); ?>:</bold>
             <?php echo e($prices->value); ?>

            </p>
           <?php elseif($column === 'Value without Discount'): ?>
            <p>
             <bold><?php echo e($column); ?>:</bold>
             <?php echo e($prices->value_no_discount); ?>

            </p>
           <?php elseif($column === 'Discount'): ?>
            <p>
             <bold><?php echo e($column); ?>:</bold>
             <?php if($editedrow !== $nr): ?>
              <?php echo e($prices->discount); ?>%
             <?php else: ?>
              <div class="searchable">
               <input type="number" required class="input__searchable"
                wire:model.defer="pricelist.<?php echo e($nr); ?>.discount">
              </div>
             <?php endif; ?>
            </p>
           <?php elseif($column === 'Value without VAT'): ?>
            <p>
             <bold><?php echo e($column); ?>:</bold>
             <?php if($editedrow !== $nr): ?>
              <?php echo e($prices->value_no_vat); ?>

             <?php else: ?>
              <div class="searchable">
               <input type="number" required class="input__searchable"
                wire:model.defer="pricelist.<?php echo e($nr); ?>.value">
              </div>
             <?php endif; ?>
            </p>
           <?php elseif($column === 'VAT'): ?>
            <p>
             <bold><?php echo e($column); ?>:</bold>
             <?php if($editedrow !== $nr): ?>
              <?php echo e($prices->vat); ?>%
             <?php else: ?>
              <div class="searchable">
               <input type="number" required class="input__searchable"
                wire:model.defer="pricelist.<?php echo e($nr); ?>.vat">
              </div>
             <?php endif; ?>
            </p>
           <?php elseif($column === 'PRICE'): ?>
            <p>
             <bold><?php echo e($column); ?>:</bold>
             <?php if($editedrow !== $nr): ?>
              <?php echo e($prices->price); ?>

             <?php else: ?>
              <div class="searchable">
               <input type="number" required class="input__searchable"
                wire:model.defer="pricelist.<?php echo e($nr); ?>.price">
              </div>
             <?php endif; ?>
            </p>
           <?php else: ?>
            <p>
             <bold><?php echo e($column); ?>:</bold>
             <?php echo e($prices->$column); ?>

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


  
  <?php if(count($relatedprices) >= 10): ?>
   <button class="button button--secondary button--fill" style="margin-top: 10px;" wire:click="load">
    Load more
   </button>
  <?php endif; ?>
 </div>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/related-pricelist.blade.php ENDPATH**/ ?>