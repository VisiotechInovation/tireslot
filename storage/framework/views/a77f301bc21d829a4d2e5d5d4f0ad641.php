<div class="accordion <?php if($showvariant): ?> active <?php endif; ?>">
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
  <div class="background background--center <?php if($addvariant): ?> active <?php endif; ?>"></div>
  <div class="aside aside--table <?php if($addvariant): ?> active <?php endif; ?>">
   
   <nav class="nav--controls">
    <h1 class="table--name">
     <?php echo e(__('Add variants')); ?>

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
         parent Product
        </button>
       </th>
       <th>
        <button class="table--btn">
         Variant Product Name
        </button>
       </th>
       <th class="hidden">
        <button class="table--btn">
         Variant Product
        </button>
       </th>
       <th class="hidden">
        <button class="table--btn">
         Variant Reference
        </button>
       </th>
       <th class="hidden">
        <button class="table--btn">
         Variant Value
        </button>
       </th>
       <th class="hidden">
        <button class="table--btn">
         Is default Variant?
        </button>
       </th>
       <th class="hidden">
        <button class="table--btn">
         Variant Dispalyed type
        </button>
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
      <?php $__currentLoopData = $variantAndValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $variantAndValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr class="expandable-row">
        <td wire:click="expandRow2(<?php echo e($index); ?>)" style="width: unset !important;">
         <div style="display: flex; align-items: center; justify-content: center;">
          <?php echo e($item->name); ?>

          <button class="button button--secondary button--sm" style="opacity: 0">
           <svg>
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
           </svg>
          </button>
         </div>
        </td>
        <td wire:click="expandRow2(<?php echo e($index); ?>)">
         <?php echo e($variantAndValue['itemselected']); ?>

        </td>
        <td class="hidden">
         <?php if($variantAndValue['allow']): ?>
          <div class="searchable active">
           
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
             <?php if(count($addvariants) >= 1): ?>
              <?php $__currentLoopData = $addvariants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <button class="item__searchable"
                wire:click.prevent="selectitem(<?php echo e($index); ?>, <?php echo e($var->id); ?>, '<?php echo e($var->name); ?>')">
                <?php echo e($var->name); ?>

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
            <?php if($variantAndValue['itemselected']): ?>
             <?php echo e($variantAndValue['itemselected']); ?>

            <?php else: ?>
             <?php echo e(__('Select a product')); ?>

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
         <input type="hidden" wire:model.defer="variantAndValues.<?php echo e($index); ?>.variant.name">
        </td>
        <td class="hidden">
         <div class="searchable">
          <select class="input__searchable" wire:model.defer="variantAndValues.<?php echo e($index); ?>.variant.reference">
           <?php $__currentLoopData = $references; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($reference->id); ?>"><?php echo e($reference->name); ?></option>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
         </div>
        </td>
        <td class="hidden" style="width: auto;">
         <div class="searchable">
          <input type="text" placeholder="Insert variant value" required class="input__searchable"
           wire:model.defer="variantAndValues.<?php echo e($index); ?>.variant.value">
         </div>
        </td>
        <td class="hidden">
         <div class="checkbox--primary">
          <input type="checkbox" id="checkbox<?php echo e($index); ?>"
           wire:model.defer="variantAndValues.<?php echo e($index); ?>.variant.def" />
          <label for="checkbox<?php echo e($index); ?>"></label>
         </div>
        </td>
        <td class="hidden">
         <div class="searchable">
          <select class="input__searchable" wire:model.defer="variantAndValues.<?php echo e($index); ?>.variant.display">
           <option value="text">text</option>
           <option value="image">image</option>
           <option value="image & text">image & text</option>
          </select>
         </div>
        </td>
        <td>
         <div style="display: flex;">
          <?php if($index == $row - 1): ?>
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
          <?php endif; ?>
          <?php if($index != $row - 1): ?>
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
       <tr class="details-row  <?php if($rind2 === $k): ?> active <?php endif; ?>">
        <td colspan="3">
         <div class="details">
          <p>
           <bold>Variant Product Name</bold>
           <?php if($variantAndValue['allow']): ?>
            <div class="searchable active">
             
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
               <?php if(count($addvariants) >= 1): ?>
                <?php $__currentLoopData = $addvariants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <button class="item__searchable"
                  wire:click.prevent="selectitem(<?php echo e($index); ?>, <?php echo e($var->id); ?>, '<?php echo e($var->name); ?>')">
                  <?php echo e($var->name); ?>

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
              <?php if($variantAndValue['itemselected']): ?>
               <?php echo e($variantAndValue['itemselected']); ?>

              <?php else: ?>
               <?php echo e(__('Select a product')); ?>

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
           <input type="hidden" wire:model.defer="variantAndValues.<?php echo e($index); ?>.variant.name">

          </p>
          <p>
           <bold>Variant Reference</bold>
           <select class="input button--fill button--xs"
            wire:model.defer="variantAndValues.<?php echo e($index); ?>.variant.reference">
            <?php $__currentLoopData = $references; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <option value="<?php echo e($reference->id); ?>"><?php echo e($reference->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </select>
          </p>
          <p>
           <bold>Variant Value</bold>
           <input type="text" placeholder="Insert variant value" required class="input button--fill button--xs"
            wire:model.defer="variantAndValues.<?php echo e($index); ?>.variant.value">

          </p>
          <p>
           <bold>Is defaut Variant?</bold>
          <div class="checkbox--primary">
           <input type="checkbox" id="checkbox<?php echo e($index); ?>"
            wire:model.defer="variantAndValues.<?php echo e($index); ?>.variant.def" />
           <label for="checkbox<?php echo e($index); ?>"></label>
          </div>
          </p>
          <p>
           <bold>Variant Dispalyed type</bold>
           <select class="input button--fill button--xs"
            wire:model.defer="variantAndValues.<?php echo e($index); ?>.variant.display">
            <option value="text">text</option>
            <option value="image">image</option>
            <option value="image & text">image & text</option>
           </select>
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
   class="button button--flexed button--fill button--primary <?php if($showvariant): ?> button--secondary active <?php endif; ?>"
   wire:click.prevent="<?php if($showvariant === false): ?> $set('showvariant', true) <?php else: ?> $set('showvariant', false) <?php endif; ?>">
   <?php echo e(__('Variants ')); ?>(<?php echo e($item->variants->count()); ?>)
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
       <input type="checkbox" id="selectPage25" wire:model="selectPage" />
       <label for="selectPage25"></lab>
      </div>
     </th>
     <?php if($this->showColumn('Id')): ?>
      <th>
       <button class="table--btn">
        ID
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('parent Name')): ?>
      <th>
       <button class="table--btn">
        parent Name
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Variant Name')): ?>
      <th>
       <button class="table--btn">
        Variant Name
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Reference')): ?>
      <th class="hidden">
       <button class="table--btn">
        Reference
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Value')): ?>
      <th class="hidden">
       <button class="table--btn">
        Value
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('default variant')): ?>
      <th class="hidden">
       <button class="table--btn">
        Is default variant?
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Dispalyed type')): ?>
      <th class="hidden">
       <button class="table--btn">
        Dispalyed type
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Created At')): ?>
      <th class="hidden">
       <button class="table--btn">
        Created At
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Updated At')): ?>
      <th class="hidden">
       <button class="table--btn">
        Updated At
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
    <?php if($variants->isEmpty()): ?>
     <tr>
      <td class="table--empty" colspan="<?php echo e(count($columns) + 2); ?>">No record found.</td>
     </tr>
    <?php else: ?>
     <?php $__currentLoopData = $variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $variant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr class="expandable-row <?php if($this->isChecked($variant->id)): ?> active <?php endif; ?>">
       <td style="border-left: none" data-title="Check">
        <div class="checkbox--primary">
         <input type="checkbox" value="<?php echo e($variant->id); ?>" id="<?php echo e($variant->id); ?>" wire:model="checked">
         <label for="<?php echo e($variant->id); ?>"></label>
        </div>
       </td>

       <?php if($this->showColumn('Id')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)"><?php echo e($variant->id); ?></td>
       <?php endif; ?>
       <?php if($this->showColumn('parent Name')): ?>
        <td data-title="Name" wire:click="expandRow(<?php echo e($index); ?>)">
         <a href="<?php echo e(route('show_product', ['id' => $item->id])); ?>">
          <?php echo e($item->name); ?></a>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Variant Name')): ?>
        <td data-title="Variante Name" wire:click="expandRow(<?php echo e($index); ?>)">
         <a href="<?php echo e(route('show_product', ['id' => $variant->product->id])); ?>">
          <?php echo e($variant->product->name); ?></a>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Reference')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php if($editindex !== $index): ?>
          <?php echo e($variant->reference->name); ?>

         <?php else: ?>
          <select class="input button--fill button--xs" wire:model.defer="var.<?php echo e($index); ?>.ref">
           <?php $__currentLoopData = $references; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($reference->id); ?>"><?php echo e($reference->name); ?></option>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Value')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php if($editindex !== $index): ?>
          <?php echo e($variant->value); ?>

         <?php else: ?>
          <div class="searchable">
           <input class="input__searchable" type="text" required
            wire:model.defer="var.<?php echo e($index); ?>.value">
          </div>
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('default variant')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php if($editindex !== $index): ?>
          <?php if($variant->default_variant): ?>
           <div class="checkbox--secondary disabled">
            <input type="checkbox" id="disabled9" disabled checked>
            <label id="disabled9"></label>
           </div>
          <?php else: ?>
           <div class="checkbox--secondary disabled">
            <input type="checkbox" id="disabled10" disabled>
            <label id="disabled10"></label>
           </div>
          <?php endif; ?>
         <?php else: ?>
          <input type="checkbox" wire:model.defer="var.<?php echo e($index); ?>.def">
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Dispalyed type')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php if($editindex !== $index): ?>
          <?php echo e($variant->displayed); ?>

         <?php else: ?>
          <div class="searchable">
           <select class="input button--fill button--xs" wire:model.defer="var.<?php echo e($index); ?>.displayed">
            <option value="text">text</option>
            <option value="image">image</option>
            <option value="image & text">image & text</option>
           </select>
          </div>
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Created At')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($variant->created_at); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Updated At')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($variant->updated_at); ?>

        </td>
       <?php endif; ?>
       <td>
        <?php if($editindex !== $index): ?>
         <div style="display: flex;">
          <button class="button button--secondary button--sm"
           wire:click.prevent="edititem(<?php echo e($index); ?>, <?php echo e($variant->id); ?>)">
           <svg>
            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
            </path>
           </svg>
          </button>
          <button class="button button--secondary button--sm"
           wire:click.prevent="confirmItemRemoval(<?php echo e($variant->id); ?>)">
           <svg>
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
           </svg>
          </button>
         </div>
        <?php else: ?>
         <div style="display: flex;">
          <button class="button button--secondary button--sm"
           wire:click.prevent="saveitem(<?php echo e($index); ?>,<?php echo e($variant->id); ?>)">
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
      <tr class="details-row  <?php if($rind === $i): ?> active <?php endif; ?>">
       <td colspan="<?php echo e(count($columns) + 2); ?>">
        <div class="details">

         <?php if($this->showColumn('Reference')): ?>
          <p>
           <bold>Variant</bold>
           <?php if($editindex !== $index): ?>
            <?php echo e($variant->reference->name); ?>

           <?php else: ?>
            <select class="input button--fill button--xs" wire:model.defer="var.<?php echo e($index); ?>.ref">
             <?php $__currentLoopData = $references; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($reference->id); ?>"><?php echo e($reference->name); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Value')): ?>
          <p>
           <bold>Value</bold>
           <?php if($editindex !== $index): ?>
            <?php echo e($variant->value); ?>

           <?php else: ?>
            <div class="searchable">
             <input type="text" required class="input__searchable"
              wire:model.defer="var.<?php echo e($index); ?>.value">
            </div>
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('default variant')): ?>
          <p>
           <bold>Is default variant?</bold>
           <?php if($editindex !== $index): ?>
            <?php if($variant->default_variant == '1'): ?>
             <div class="checkbox--secondary disabled">
              <input type="checkbox" id="disabled11" disabled checked>
              <label id="disabled11"></label>
             </div>
            <?php else: ?>
             <div class="checkbox--secondary disabled">
              <input type="checkbox" id="disabled12" disabled>
              <label id="disabled12"></label>
             </div>
            <?php endif; ?>
           <?php else: ?>
            <input type="checkbox" wire:model.defer="var.<?php echo e($index); ?>.def">
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Dispalyed type')): ?>
          <p>
           <bold>Dispalyed type</bold>
           <?php if($editindex !== $index): ?>
            <?php echo e($variant->displayed); ?>

           <?php else: ?>
            <select class="input button--fill button--xs" wire:model.defer="var.<?php echo e($index); ?>.displayed">
             <option value="text">text</option>
             <option value="image">image</option>
             <option value="image & text">image & text</option>
            </select>
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Created At')): ?>
          <p>
           <bold>Created At</bold>
           <?php echo e($variant->created_at); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Updated At')): ?>
          <p>
           <bold>Updated At</bold>
           <?php echo e($variant->updated_at); ?>

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

  
  <?php if($item->variants->count() >= 10 && $loadAmount < $item->variants->count()): ?>
   <button class="button button--secondary button--fill" style="margin-top: 10px;" wire:click="load">
    Load more
   </button>
  <?php endif; ?>
 </div>

</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/related-variants.blade.php ENDPATH**/ ?>