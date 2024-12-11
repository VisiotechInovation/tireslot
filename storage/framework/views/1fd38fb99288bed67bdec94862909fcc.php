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


 
 <h1 class="table--name"><?php echo e(__('Labels')); ?> (<?php echo e($labels->total()); ?>)</h1>
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
  
  <button class="button button--primary button--centered display--desktop" tooltip="Update Labels" tooltip-top
   wire:click="addLabelsIfNotExist">
   <svg>
    <polyline points="17 1 21 5 17 9"></polyline>
    <path d="M3 11V9a4 4 0 0 1 4-4h14"></path>
    <polyline points="7 23 3 19 7 15"></polyline>
    <path d="M21 13v2a4 4 0 0 1-4 4H3"></path>
   </svg>
  </button>
  
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
     <button class="button button--primary button--long button--flexed" wire:click="$refresh">
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
     <button class="button button--primary button--long button--flexed" wire:click="addLabelsIfNotExist">
      <svg>
       <polyline points="17 1 21 5 17 9"></polyline>
       <path d="M3 11V9a4 4 0 0 1 4-4h14"></path>
       <polyline points="7 23 3 19 7 15"></polyline>
       <path d="M21 13v2a4 4 0 0 1-4 4H3"></path>
      </svg>
      <span>Update labels</span>
     </button>
     <button class="button button--primary button--long button--flexed" id="sort__open">
      <svg>
       <path stroke="none" d="M0 0h24v24H0z" fill="none" />
       <path d="M15 10v-5c0 -1.38 .62 -2 2 -2s2 .62 2 2v5m0 -3h-4" />
       <path d="M19 21h-4l4 -7h-4" />
       <path d="M4 15l3 3l3 -3" />
       <path d="M7 6v12" />
      </svg>
      <span>Sorting data</span>
     </button>
     <button class="button button--primary button--long button--flexed" id="visi__open">
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


 
 <div class="table">
  <table class="expandable-table">
   <thead>
    <tr>
     <?php if($this->showColumn('Id')): ?>
      <th>
       <button wire:click="sortBy('id')" class="table--btn <?php if($orderBy === 'id' && $orderAsc === '1'): ?> active <?php endif; ?>">
        ID
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Parameter')): ?>
      <th>
       <button wire:click="sortBy('parameter')" class="table--btn <?php if($orderBy === 'parameter' && $orderAsc === '1'): ?> active <?php endif; ?>">
        Parameter
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Value')): ?>
      <th class="hidden">
       <button wire:click="sortBy('value')" class="table--btn <?php if($orderBy === 'value' && $orderAsc === '1'): ?> active <?php endif; ?>">
        Value
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Description')): ?>
      <th class="hidden">
       <button wire:click="sortBy('description')" class="table--btn <?php if($orderBy === 'description' && $orderAsc === '1'): ?> active <?php endif; ?>">
        Description
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Created At')): ?>
      <th class="hidden">
       <button wire:click="sortBy('created_at')" class="table--btn <?php if($orderBy === 'created_at' && $orderAsc === '1'): ?> active <?php endif; ?>">
        Created at
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <?php if($this->showColumn('Updated At')): ?>
      <th class="hidden">
       <button wire:click="sortBy('updated_at')" class="table--btn <?php if($orderBy === 'updated_at' && $orderAsc === '1'): ?> active <?php endif; ?>">
        Updated at
        <svg>
         <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
       </button>
      </th>
     <?php endif; ?>
     <th>
      <button class="button button--secondary button--sm" style="opacity: 0;">
       <svg>
        <polyline points="20 6 9 17 4 12"></polyline>
       </svg>
      </button>
     </th>

    </tr>
   </thead>
   <tbody>
    <?php
     $i = 0;
    ?>
    <?php $__currentLoopData = $labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <tr class="expandable-row">
      <?php if($this->showColumn('Id')): ?>
       <td wire:click="expandRow(<?php echo e($index); ?>)"><?php echo e($label->id); ?></td>
      <?php endif; ?>
      <?php if($this->showColumn('Parameter')): ?>
       <td wire:click="expandRow(<?php echo e($index); ?>)">
        <?php echo e($label->parameter); ?>

       </td>
      <?php endif; ?>
      <?php if($this->showColumn('Value')): ?>
       <td wire:click="expandRow(<?php echo e($index); ?>)" class="hidden">
        <?php if($rowindex !== $index): ?>
         <?php echo e($label->value); ?><?php if($label->parameter == 'time_zone'): ?>
          (time is: <?php echo e(now()); ?>) - Please refresh to update after the edit
         <?php endif; ?>
        <?php else: ?>
         <div class="searchable">
          <input type="text" class="input__searchable" wire:model.defer="element.<?php echo e($index); ?>.value">
         </div>
        <?php endif; ?>
       </td>
      <?php endif; ?>
      <?php if($this->showColumn('Description')): ?>
       <td wire:click="expandRow(<?php echo e($index); ?>)" class="hidden">
        <?php if($rowindex !== $index): ?>
         <?php echo e($label->description); ?>

        <?php else: ?>
         <textarea class="input" wire:model.defer="element.<?php echo e($index); ?>.description"></textarea>
        <?php endif; ?>
       </td>
      <?php endif; ?>
      <?php if($this->showColumn('Created At')): ?>
       <td wire:click="expandRow(<?php echo e($index); ?>)" class="hidden">
        <?php echo e($label->created_at); ?>

       </td>
      <?php endif; ?>
      <?php if($this->showColumn('Updated At')): ?>
       <td wire:click="expandRow(<?php echo e($index); ?>)" class="hidden">
        <?php echo e($label->updated_at); ?>

       </td>
      <?php endif; ?>
      <td>
       <?php if($rowindex !== $index): ?>
        <button class="button button--secondary button--sm"
         wire:click.prevent="edititem(<?php echo e($index); ?>, <?php echo e($label->id); ?>)">
         <svg>
          <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
          </path>
         </svg>
        </button>
       <?php else: ?>
        <div style="display: flex;">
         <button class="button button--secondary button--sm"
          wire:click.prevent="saveitem(<?php echo e($index); ?> , <?php echo e($label->id); ?>)">
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
      <td colspan="17">
       <div class="details">
        <?php if($this->showColumn('Value')): ?>
         <?php if($rowindex !== $index): ?>
          <p>
           <bold>Value:</bold>
           <?php echo e($label->value); ?><?php if($label->parameter == 'time_zone'): ?>
            (time is: <?php echo e(now()); ?>) - Please refresh to update after the edit
           <?php endif; ?>
          </p>
         <?php else: ?>
          <p>
           <bold>Value:</bold>
          <div class="searchable">
           <input type="text" class="input__searchable" wire:model.defer="element.<?php echo e($index); ?>.value">
          </div>
          </p>
         <?php endif; ?>
        <?php endif; ?>
        <?php if($this->showColumn('Description')): ?>
         <?php if($rowindex !== $index): ?>
          <p>
           <bold>Description:</bold>
           <?php echo e($label->description); ?>

          </p>
         <?php else: ?>
          <p>
           <bold>Description:</bold>
           <textarea class="input" wire:model.defer="element.<?php echo e($index); ?>.description"></textarea>
          </p>
         <?php endif; ?>
        <?php endif; ?>
        <?php if($this->showColumn('Created At')): ?>
         <p>
          <bold>Created At:</bold>
          <?php echo e($label->created_at); ?>

         </p>
        <?php endif; ?>
        <?php if($this->showColumn('Updated At')): ?>
         <p>
          <bold>Updated At:</bold>
          <?php echo e($label->updated_at); ?>

         </p>
        <?php endif; ?>

       </div>
      </td>
     </tr>
     <?php
      $i++;
     ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </tbody>
  </table>


  
  <script>
   document.addEventListener('livewire:load', function() {
    let observer = new IntersectionObserver((entries) => {
     entries.forEach(entry => {
      if (entry.isIntersecting) {
       window.livewire.find('<?php echo e($_instance->id); ?>').call('loadMore');
      }
     });
    });

    observer.observe(document.getElementById('last_record'));
   });
  </script>


  
  <?php if($loadAmount <= count($labels)): ?>
   <button class="button button--secondary button--fill" style="margin-top: 10px;" wire:click="loadMore">
    Load more
   </button>
  <?php endif; ?>
 </div>
</section>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/labelstable.blade.php ENDPATH**/ ?>