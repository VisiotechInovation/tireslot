<div class="accordion <?php if($showrelateitems): ?> active <?php endif; ?>">

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
  <div class="background background--center <?php if($showTable): ?> active <?php endif; ?>"></div>
  <div class="aside aside--table <?php if($showTable): ?> active <?php endif; ?>">
   
   <nav class="nav--controls">
    <h1 class="table--name">
     <?php echo e(__('Add related categories')); ?>

    </h1>
    <button class="button button--primary button--centered" wire:click.prevent="saveitems()">
     <svg>
      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
      <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
      <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
      <path d="M14 4l0 4l-6 0l0 -4" />
     </svg>
    </button>
    <button class="button button--danger button--centered" wire:click="closemodal" tooltip="Close Modal" tooltip-left>
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
       <th>
        <div style="display: flex; align-items: center; justify-content: center;">

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
        <button class="table--btn">
         Category
        </button>
       </th>
       <th class="hidden">
        <button class="table--btn">
         Select a category
        </button>
       </th>
       <th class="hidden">
        <button class="table--btn">
         Is primary category?
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
      <?php $__currentLoopData = $productsAndValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $productsAndValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr class="expandable-row">
        <td style="width: auto !important;" wire:click="expandRow2(<?php echo e($index); ?>)">
         <div style="display: flex; align-items: center; justify-content: center;">
          <?php echo e($product->name); ?>

          <button class="button button--secondary button--sm" style="opacity: 0">
           <svg>
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
           </svg>
          </button>
         </div>
        </td>
        <td wire:click="expandRow2(<?php echo e($index); ?>)">
         <?php echo e($productsAndValue['itemselected']); ?>

        </td>
        <td class="hidden">
         <?php if($productsAndValue['allow']): ?>
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
             <?php if(count($cats) >= 1): ?>
              <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <button class="item__searchable"
                wire:click.prevent="selectitem(<?php echo e($index); ?>, <?php echo e($category->id); ?>, '<?php echo e($category->name); ?>')">
                <?php echo e($category->name); ?>

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
            <?php if($productsAndValue['itemselected']): ?>
             <?php echo e($productsAndValue['itemselected']); ?>

            <?php else: ?>
             <?php echo e(__('Select a category')); ?>

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
         <input type="hidden" wire:model.defer="productsAndValues.<?php echo e($index); ?>.product.name">
        </td>

        <td class="hidden" data-title="Check">
         <div class="checkbox--primary">
          <input type="checkbox" id="<?php echo e($index); ?>pri"
           wire:model.defer="productsAndValues.<?php echo e($index); ?>.product.primary">
          <label for="<?php echo e($index); ?>pri"></label>
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
           <bold>Related Product Name</bold>
           <?php if($productsAndValue['allow']): ?>
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
               <?php if(count($cats) >= 1): ?>
                <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <button class="item__searchable"
                  wire:click.prevent="selectitem(<?php echo e($index); ?>, <?php echo e($category->id); ?>, '<?php echo e($category->name); ?>')">
                  <?php echo e($category->name); ?>

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
              <?php if($productsAndValue['itemselected']): ?>
               <?php echo e($productsAndValue['itemselected']); ?>

              <?php else: ?>
               <?php echo e(__('Select a category')); ?>

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
           <input type="hidden" wire:model.defer="productsAndValues.<?php echo e($index); ?>.product.name">
          </p>

          <p>
           <bold>Sequence</bold>
          <div class="checkbox--primary">
           <input type="checkbox" id="<?php echo e($k); ?>pri"
            wire:model.defer="productsAndValues.<?php echo e($index); ?>.product.primary">
           <label for="<?php echo e($k); ?>pri"></label>
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
   class="button button--flexed button--fill button--primary <?php if($showrelateitems): ?> button--secondary active <?php endif; ?>"
   wire:click.prevent="<?php if($showrelateitems === false): ?> $set('showrelateitems', true) <?php else: ?> $set('showrelateitems', false) <?php endif; ?>">
   <?php echo e(__('Categories ')); ?>(<?php echo e($relatedcats->total()); ?>)
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
       <input type="checkbox" id="selectPage11" wire:model="selectPage" />
       <label for="selectPage11"></label>
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
     <?php if($this->showColumn('Product Name')): ?>
      <th>
       <button class="table--btn">
        Product Name
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Category Name')): ?>
      <th>
       <button class="table--btn">
        Category Name
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Category Description')): ?>
      <th class="hidden">
       <button class="table--btn">
        Category Description
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Category displayed elements')): ?>
      <th class="hidden">
       <button class="table--btn">
        Category displayed elements
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Category is active?')): ?>
      <th class="hidden">
       <button class="table--btn">
        Category is active?
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Is primary category?')): ?>
      <th class="hidden">
       <button class="table--btn">
        Is primary category?
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
     <th>
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
    <?php if($relatedcats->isEmpty()): ?>
     <tr>
      <td class="table--empty" colspan="<?php echo e(count($columns) + 2); ?>">No record found.</td>
     </tr>
    <?php else: ?>
     <?php $__currentLoopData = $relatedcats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr class="expandable-row <?php if($this->isChecked($related->id)): ?> active <?php endif; ?>">
       <td style="border-left: none" data-title="Check">
        <div class="checkbox--primary">
         <input type="checkbox" value="<?php echo e($related->id); ?>" id="<?php echo e($related->id); ?>" wire:model="checked">
         <label for="<?php echo e($related->id); ?>"></label>
        </div>
       </td>

       <?php if($this->showColumn('Id')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)"><?php echo e($related->category->id); ?></td>
       <?php endif; ?>
       <?php if($this->showColumn('Category Name')): ?>
        <td data-title="Name" wire:click="expandRow(<?php echo e($index); ?>)">
         <a href="<?php echo e(route('show_category', ['id' => $related->category->id])); ?>">
          <?php echo e(strip_tags($related->category->name)); ?></a>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Category Description')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($related->category->short_description); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Category displayed elements')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($related->category->accepted_items); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Category is active?')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php if($related->category->active): ?>
          <div class="checkbox--secondary disabled">
           <input type="checkbox" id="disabled5" disabled checked>
           <label for="disabled5"></label>
          </div>
         <?php else: ?>
          <div class="checkbox--secondary disabled">
           <input type="checkbox" id="disabled6" disabled>
           <label for="disabled6"></label>
          </div>
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Is primary category?')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php if($editindex !== $index): ?>
          <?php if($related->primary_category): ?>
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
          <input type="checkbox" id="primary" wire:model="var.<?php echo e($index); ?>.primary">
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Created At')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($related->category->created_at); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Updated At')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($related->category->updated_at); ?>

        </td>
       <?php endif; ?>
       <td>
        <?php if($editindex !== $index): ?>
         <div style="display: flex;">
          <button class="button button--secondary button--sm"
           wire:click.prevent="edititem(<?php echo e($index); ?>, <?php echo e($related->id); ?>)">
           <svg>
            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
            </path>
           </svg>
          </button>
          <button class="button button--secondary button--sm"
           wire:click.prevent="confirmItemRemoval(<?php echo e($related->id); ?>)">
           <svg>
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
           </svg>
          </button>
         </div>
        <?php else: ?>
         <div style="display: flex;">
          <button class="button button--secondary button--sm"
           wire:click.prevent="saveitem(<?php echo e($index); ?>,<?php echo e($related->id); ?>)">
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

         <?php if($this->showColumn('Category Description')): ?>
          <p>
           <bold>Category Description</bold>
           <?php echo e($related->category->short_description); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Category displayed elements')): ?>
          <p>
           <bold>Category displayed elements</bold>
           <?php echo e($related->category->accepted_items); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Category is active?')): ?>
          <p>
           <bold>Category is active?</bold>
           <?php if($related->category->active): ?>
            <div class="checkbox--secondary disabled">
             <input type="checkbox" id="disabled7" disabled checked>
             <label for="disabled7"></label>
            </div>
           <?php else: ?>
            <div class="checkbox--secondary disabled">
             <input type="checkbox" id="disabled8" disabled>
             <label for="disabled8"></label>
            </div>
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Is primary category?')): ?>
          <p>
           <bold>Is primary category?</bold>
           <?php if($related->primary_category): ?>
            <div class="checkbox--secondary disabled">
             <input type="checkbox" id="disabled7" disabled checked>
             <label for="disabled7"></label>
            </div>
           <?php else: ?>
            <div class="checkbox--secondary disabled">
             <input type="checkbox" id="disabled8" disabled>
             <label for="disabled8"></label>
            </div>
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Created At')): ?>
          <p>
           <bold>Created At</bold>
           <?php echo e($related->category->created_at); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Updated At')): ?>
          <p>
           <bold>Updated At</bold>
           <?php echo e($related->category->updated_at); ?>

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
  
  <?php if($loadAmount < $relatedcats->total()): ?>
   <button class="button button--secondary button--fill" style="margin-top: 10px;" wire:click="loadMore">
    Load more
   </button>
  <?php endif; ?>
 </div>

</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/related-category-product.blade.php ENDPATH**/ ?>