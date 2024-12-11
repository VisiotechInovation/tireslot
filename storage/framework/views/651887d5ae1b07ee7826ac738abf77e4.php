<div class="accordion <?php if($showrelatedspecs): ?> active <?php endif; ?>">

 
 
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
    <button class="button button--primary button--long" wire:click="deleteSingleRecord()">
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
    <button class="button button--primary button--centered" wire:click.prevent="confirmspecsmultiple()">
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
       <th>
        <div style="display: flex;">
         <button class="table--btn">
          Product
         </button>
         <!-- Button for mentain height of row -->
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
         Specification
        </button>
       </th>
       <th class="hidden">
        <button class="table--btn">
         Value
        </button>
       </th>
       <th class="hidden" style="width: auto;">
        <button class="table--btn">
         Sequence
        </button>
       </th>
      </tr>
     </thead>
     <tbody>
      <?php
       $j = 0;
      ?>
      <?php $__currentLoopData = $specsAndValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $specAndValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr class="expandable-row">
        <td wire:click="expandRow2(<?php echo e($index); ?>)" style="width: auto; !important">
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
         <?php echo e($specAndValue['itemselected']); ?>

        </td>
        <td class="hidden">
         <input type="text" required class="input button--fill button--xs"
          wire:model.defer="specsAndValues.<?php echo e($index); ?>.spec.value">
        </td>
        <td class="hidden" style="width: auto;">
         <input type="text" required class="input button--fill button--xs"
          wire:model.defer="specsAndValues.<?php echo e($index); ?>.spec.sequence">
        </td>
       </tr>




       <tr class="details-row  <?php if($rind2 === $j): ?> active <?php endif; ?>">
        <td colspan="3">
         <div class="details">
          <p>
           <bold>Value</bold>
          <div class="searchable">
           <input type="text" required class="input button--fill button--xs"
            wire:model.defer="specsAndValues.<?php echo e($index); ?>.spec.value">
          </div>
          </p>
          <p>
           <bold>Sequence</bold>
          <div class="searchable">
           <input type="text" required class="input button--fill button--xs"
            wire:model.defer="specsAndValues.<?php echo e($index); ?>.spec.sequence">
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
  <div class="background background--center  <?php if($addrelatedspecs): ?> active <?php endif; ?>"></div>
  <div class="aside aside--table <?php if($addrelatedspecs): ?> active <?php endif; ?>">

   
   <nav class="nav--controls">
    <h1 class="table--name">
     <?php echo e(__('Add related specifications')); ?>

    </h1>
    <button class="button button--primary button--centered" wire:click.prevent="savespecs()">
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
       <th>
        <button class="table--btn">
         Product
        </button>
       </th>
       <th>
        <button class="table--btn">
         Specification
        </button>
       </th>
       <th class="hidden">
        <button class="table--btn">
         Value
        </button>
       </th>
       <th class="hidden">
        <button class="table--btn">
         Sequence
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
        </div>
       </th>
      </tr>
     </thead>
     <tbody>
      <?php
       $k = 0;
      ?>
      <?php $__currentLoopData = $specsAndValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $specAndValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr class="expandable-row">
        <td wire:click="expandRow3(<?php echo e($index); ?>)">
         <?php echo e($item->name); ?>

        </td>
        <td>
         <?php if($specAndValue['allow']): ?>
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
             <?php if(count($addspecs) >= 1): ?>
              <?php $__currentLoopData = $addspecs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <button class="item__searchable"
                wire:click.prevent="selectSpec(<?php echo e($index); ?>, <?php echo e($spec->id); ?>, '<?php echo e($spec->name); ?>')">
                <?php echo e($spec->name); ?> (<?php echo e($spec->um); ?>)
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
            <?php if($specAndValue['itemselected']): ?>
             <?php echo e($specAndValue['itemselected']); ?>

            <?php else: ?>
             <?php echo e(__('Select a specification')); ?>

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
         <input type="hidden" wire:model.defer="specsAndValues.<?php echo e($index); ?>.spec.idrel">
        </td>
        <td class="hidden">
         <input type="text" required class="input button--fill button--xs"
          wire:model.defer="specsAndValues.<?php echo e($index); ?>.spec.value">
        </td>
        <td class="hidden">
         <input type="text" required class="input button--fill button--xs"
          wire:model.defer="specsAndValues.<?php echo e($index); ?>.spec.sequence">
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




       <tr class="details-row  <?php if($rind3 === $k): ?> active <?php endif; ?>">
        <td colspan="3">
         <div class="details">
          <p>
           <bold>Value</bold>
          <div class="searchable">
           <input type="text" required class="input button--fill button--xs"
            wire:model.defer="specsAndValues.<?php echo e($index); ?>.spec.value">
          </div>
          </p>
          <p>
           <bold>Sequence</bold>
          <div class="searchable">
           <input type="text" required class="input button--fill button--xs"
            wire:model.defer="specsAndValues.<?php echo e($index); ?>.spec.sequence">
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
   class="button button--flexed button--fill button--primary <?php if($showrelatedspecs): ?> button--secondary active <?php endif; ?>"
   wire:click.prevent="<?php if($showrelatedspecs === false): ?> $set('showrelatedspecs', true) <?php else: ?> $set('showrelatedspecs', false) <?php endif; ?>">
   <?php echo e(__('Specifications ')); ?>(<?php echo e($item->product_specs->count()); ?>)
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
       <input type="checkbox" id="selectPage22" wire:model="selectPage" />
       <label for="selectPage22"></label>
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
     <?php if($this->showColumn('Name')): ?>
      <th>
       <button class="table--btn">
        Name
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Unit')): ?>
      <th class="hidden">
       <button class="table--btn">
        Unit
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
     <?php if($this->showColumn('Value')): ?>
      <th class="hidden">
       <button class="table--btn">
        Sequence
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
    <?php if($relatedspecs->isEmpty()): ?>
     <tr>
      <td class="table--empty" colspan="<?php echo e(count($columns) + 3); ?>">No record found.</td>
     </tr>
    <?php else: ?>
     <?php $__currentLoopData = $relatedspecs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $spec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr <?php if($loop->last): ?> id="last_record" <?php endif; ?>
       class="expandable-row <?php if($this->isChecked($spec->id)): ?> active <?php endif; ?>">
       <td style="border-left: none" data-title="Check">
        <div class="checkbox--primary">
         <input type="checkbox" value="<?php echo e($spec->id); ?>" id="<?php echo e($spec->id); ?>" wire:model="checked">
         <lable for="<?php echo e($spec->id); ?>"></lable>
        </div>
       </td>

       <?php if($this->showColumn('Id')): ?>
        <td wire:click="expandRow(<?php echo e($index); ?>)"><?php echo e($spec->id); ?></td>
       <?php endif; ?>
       <?php if($this->showColumn('Name')): ?>
        <td wire:click.prevent="expandRow(<?php echo e($index); ?>)">
         <a href="<?php echo e(route('show_spec', ['id' => $spec->spec->id])); ?>">
          <?php echo e($spec->spec->name); ?>

         </a>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Unit')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($spec->spec->um); ?>

        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Value')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php if($editedrow !== $index): ?>
          <?php echo e($spec->value); ?>

         <?php else: ?>
          <div class="searchable">
           <input class="input__searchable" type="text" required
            wire:model.defer="specification.<?php echo e($index); ?>.value">
          </div>
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Sequence')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php if($editedrow !== $index): ?>
          <?php echo e($spec->sequence); ?>

         <?php else: ?>
          <div class="searchable">
           <input class="input__searchable" type="text" required
            wire:model.defer="specification.<?php echo e($index); ?>.sequence">
          </div>
         <?php endif; ?>
        </td>
       <?php endif; ?>
       <?php if($this->showColumn('Created At')): ?>
        <td class="hidden" wire:click="expandRow(<?php echo e($index); ?>)">
         <?php echo e($spec->created_at); ?>

        </td>
       <?php endif; ?>

       <td>
        <div style="display: flex;">
         <?php if($editedrow !== $index): ?>
          <button class="button button--secondary button--sm"
           wire:click.prevent="editspec(<?php echo e($spec->id); ?>, <?php echo e($spec->spec->id); ?>, <?php echo e($index); ?>)">
           <svg>
            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
            </path>
           </svg>
          </button>
          <button class="button button--secondary button--sm"
           wire:click.prevent="confirmItemRemoval(<?php echo e($spec->id); ?>)">
           <svg>
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
           </svg>
          </button>
         <?php else: ?>
          <button class="button button--secondary button--sm"
           wire:click.prevent="confirmspecs(<?php echo e($index); ?>,<?php echo e($spec->id); ?>)">
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
         <?php endif; ?>
        </div>
       </td>
      </tr>
      <tr class="details-row  <?php if($rind === $i): ?> active <?php endif; ?>">
       <td colspan="<?php echo e(count($columns) + 2); ?>">
        <div class="details">
         <?php if($this->showColumn('Unit')): ?>
          <p>
           <bold>Unit</bold>
           <?php echo e($spec->spec->um); ?>

          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Value')): ?>
          <p>
           <bold>Value</bold>
           <?php if($editedrow !== $index): ?>
            <?php echo e($spec->value); ?>

           <?php else: ?>
            <div class="searchable">
             <input type="text" required class="input__searchable"
              wire:model.defer="specification.<?php echo e($index); ?>.value">
            </div>
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Sequence')): ?>
          <p>
           <bold>Sequence</bold>
           <?php if($editedrow !== $index): ?>
            <?php echo e($spec->sequence); ?>

           <?php else: ?>
            <div class="searchable">
             <input type="text" required class="input__searchable"
              wire:model.defer="specification.<?php echo e($index); ?>.sequence">
            </div>
           <?php endif; ?>
          </p>
         <?php endif; ?>
         <?php if($this->showColumn('Created At')): ?>
          <p>
           <bold>Created At</bold>
           <?php echo e($spec->created_at); ?>

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


  
  <?php if(count($relatedspecs) >= 10): ?>
   <button class="button button--secondary button--fill" style="margin-top: 10px;" wire:click="load">
    Load more
   </button>
  <?php endif; ?>
 </div>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/related-spec-product.blade.php ENDPATH**/ ?>