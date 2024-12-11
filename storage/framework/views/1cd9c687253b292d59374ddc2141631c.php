<div class="accordion <?php if($showmedia): ?> active <?php endif; ?>">
 
 <div class="accordion__header">
  <button
   class="button button--flexed button--fill button--primary <?php if($showmedia): ?> button--secondary active <?php endif; ?>"
   wire:click.prevent="<?php if($showmedia === false): ?> $set('showmedia', true) <?php else: ?> $set('showmedia', false) <?php endif; ?>">
   <?php echo e(__('Media ')); ?>(<?php echo e($product->media->count()); ?>)
   <svg>
    <polyline points="6 9 12 15 18 9"></polyline>
   </svg>
  </button>
  <button class="button button--secondary" wire:click.prevent="uploadmedia()">
   <svg>
    <line x1="12" y1="5" x2="12" y2="19"></line>
    <line x1="5" y1="12" x2="19" y2="12"></line>
   </svg>
  </button>
 </div>

 
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
  <div class="background background--center <?php if($chose == true): ?> active <?php endif; ?>"></div>
  <div class="aside aside--confirm <?php if($chose == true): ?> active <?php endif; ?>">
   <span>
    How you will upload the media for product?
   </span>
   <input style="display: none;" id="localMedia" wire:model="medias" type="file" accept="image/*,video/*" multiple>
   <label class="button button--primary button--long" type="button" for="localMedia">
    <span>
     Local
    </span>
   </label>
   <button class="button button--primary button--long" wire:click="external">
    <span>
     External
    </span>
   </button>
   <button class="button button--danger button--long" wire:click="cancel_chose()">
    <span>
     Close
    </span>
   </button>
  </div>
 </aside>

 
 <aside>
  <div class="background background--center <?php if($medias): ?> active <?php endif; ?>"></div>
  <form class="aside aside--table <?php if($medias): ?> active <?php endif; ?>" wire:submit.prevent="save">
   
   <nav class="nav--controls">
    <h1 class="table--name">
     <?php echo e(__('Add local media')); ?>

    </h1>
    <button class="button button--primary button--centered" value="Save" type="submit">
     <svg>
      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
      <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
      <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
      <path d="M14 4l0 4l-6 0l0 -4" />
     </svg>
    </button>
    <button class="button button--danger button--centered" wire:click="cancel()">
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
        <div class="table--btn">Media</div>
       </th>
       <th class="hidden">
        <div class="table--btn">Name</div>
       </th>
       <th class="hidden">
        <div class="table--btn">Size</div>
       </th>
       <th class="hidden">
        <div class="table--btn">Extension Type</div>
       </th>
       <th>
        <div class="table--btn">Sequence</div>
       </th>
       <th class="hidden">
        <div class="table--btn">Automatic resize</div>
       </th>
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
       $k = 0;
      ?>
      <?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr class="expandable-row">
        <td wire:click="expandRow3(<?php echo e($index); ?>)" style="width: auto;">
         <?php if(str_starts_with($media->getMimeType(), 'image')): ?>
          <img loading="eager" src="data:<?php echo e($media->getMimeType()); ?>;base64,<?php echo e(base64_encode($media->get())); ?>"
           width="50px">
         <?php elseif(str_starts_with($media->getMimeType(), 'video')): ?>
          <video width="100px" controls>
           <source src="data:<?php echo e($media->getMimeType()); ?>;base64,<?php echo e(base64_encode($media->get())); ?>"
            type="<?php echo e($media->getMimeType()); ?>">
           <span><?php echo e(__('Your browser does not support the video tag')); ?></span>
          </video>
         <?php endif; ?>
        </td>
        <td class="hidden"><?php echo e($media->getClientOriginalName()); ?></td>
        <td class="hidden" wire:click="expandRow3(<?php echo e($index); ?>)"><?php echo e($media->getSize()); ?> KB</td>
        <td class="hidden" wire:click="expandRow3(<?php echo e($index); ?>)"><?php echo e($media->getClientOriginalExtension()); ?>

        </td>
        <td>
         <div class="searchable">
          <input type="number" class="input__searchable" placeholder="Media sequence ex: 1,2..." min="0"
           required wire:model.defer="file_sequences.<?php echo e($index); ?>">
         </div>
        </td>
        <td class="hidden" wire:click="expandRow3(<?php echo e($index); ?>)">
         <div class="checkbox--primary">
          <input type="checkbox" id="checkbox<?php echo e($index); ?>"
           wire:model.defer="file_resize.<?php echo e($index); ?>" />
          <label for="checkbox<?php echo e($index); ?>"></label>
         </div>
        </td>
        <td>
         <button class="button button--secondary button--sm" wire:click.prevent="removemedia(<?php echo e($loop->index); ?>)">
          <svg>
           <polyline points="3 6 5 6 21 6"></polyline>
           <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
           </path>
          </svg>
         </button>
        </td>
       </tr>
       <tr class="details-row <?php if($rind3 === $k): ?> active <?php endif; ?>">
        <td colspan="3">
         <div class="details">
          <p>
           <bold>Name</bold>
           <?php echo e($media->getClientOriginalName()); ?>

          </p>
          <p>
           <bold>Size</bold>
           <?php echo e($media->getSize()); ?> KB
          </p>
          <p>
           <bold>Extension Type</bold>
           <?php echo e($media->getClientOriginalExtension()); ?>

          </p>
          <p>
           <bold>Automatic resize</bold>
          <div class="checkbox--primary">
                   <input type="checkbox" id="checkbox<?php echo e($index); ?>"
           wire:model.defer="file_resize.<?php echo e($index); ?>" />
          <label for="checkbox<?php echo e($index); ?>"></label>
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

  </form>
 </aside>


 
 <aside>
  <div class="background background--center <?php if($externalmedia): ?> active <?php endif; ?>"></div>
  <form class="aside aside--table <?php if($externalmedia): ?> active <?php endif; ?>"
   wire:submit.prevent="saveexternal">
   
   <nav class="nav--controls">
    <h1 class="table--name">
     <?php echo e(__('Add external media')); ?>

    </h1>
    <button class="button button--primary button--centered" value="Save" type="submit">
     <svg>
      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
      <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
      <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
      <path d="M14 4l0 4l-6 0l0 -4" />
     </svg>
    </button>
    <button class="button button--danger button--centered" wire:click="clearall()">
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
       <th style="width: auto !important;">
        <div class="table--btn">Name</div>
       </th>
       <th>
        <div class="table--btn">Sequence</div>
       </th>
       <th class="hidden">
        <div class="table--btn">Link</div>
       </th>
       <th class="hidden">
        <div class="table--btn">Automatic resize</div>
       </th>
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
       $j = 0;
      ?>
      <?php for($i = 0; $i <= $row; $i++): ?>
       <tr class="expandable-row">
        <td style="width: auto !important;" wire:click="expandRow2(<?php echo e($i); ?>)" style="width: auto;">
         <div class="searchable">
          <input required placeholder="Media name" type="text" class="input__searchable"
           wire:model="file_name.<?php echo e($i); ?>">
         </div>
        </td>
        <td wire:click="expandRow2(<?php echo e($i); ?>)">
         <div class="searchable">
          <input placeholder="Ex: 1,2,3.." required type="number" min="0" class="input__searchable"
           wire:model="file_sequences.<?php echo e($i); ?>">
         </div>
        </td>
        <td class="hidden" wire:click="expandRow2(<?php echo e($i); ?>)">
         <div class="searchable">
          <input placeholder="Media external link" required type="url" class="input__searchable"
           wire:model="file_link.<?php echo e($i); ?>">
         </div>
        </td>
        <td class="hidden" wire:click="expandRow2(<?php echo e($i); ?>)">
         <div class="checkbox--primary">
          <input type="checkbox" id="checkbox3<?php echo e($i); ?>"
           wire:model.defer="file_resize.<?php echo e($i); ?>" />
          <label for="checkbox3<?php echo e($i); ?>"></label>
         </div>
        </td>
        <td>
         <div style="display: flex;">
          <?php if($i == $row): ?>
           <button type="button" class="button button--secondary button--sm" wire:click="plus">
            <svg>
             <line x1="12" y1="5" x2="12" y2="19">
             </line>
             <line x1="5" y1="12" x2="19" y2="12">
             </line>
            </svg>
           </button>
          <?php endif; ?>
          <button type="button" class="button button--secondary button--sm"
           wire:click="clear(<?php echo e($i); ?>)">
           <svg>
            <line x1="18" y1="6" x2="6" y2="18">
            </line>
            <line x1="6" y1="6" x2="18" y2="18">
            </line>
           </svg>
          </button>
         </div>
        </td>
       </tr>
       <tr class="details-row <?php if($rind2 === $j): ?> active <?php endif; ?>">
        <td colspan="3">
         <div class="details">
          <p>
           <bold>Link</bold>
          <div class="searchable">
           <input placeholder="Media external link" required type="url" class="input__searchable"
            wire:model="file_link.<?php echo e($i); ?>">
          </div>
          </p>
          <p>
           <bold>Automatic resize</bold>
          <div class="checkbox--primary">
           <input type="checkbox" id="checkbox4<?php echo e($i); ?>"
            wire:model.defer="file_resize.<?php echo e($i); ?>" />
           <lable for="checkbox4<?php echo e($i); ?>">
            </lab>
          </div>
          </p>
         </div>
        </td>
       </tr>
       <?php
        $j++;
       ?>
      <?php endfor; ?>
     </tbody>
    </table>
   </div>

  </form>
 </aside>




 
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

  
  <div class="table">
   <table class="expandable-table">
    <thead>
     <tr>
      <th>
       <div class="checkbox--primary">
        <input type="checkbox" id="selectPage13" wire:model="selectPage" />
        <label for="selectPage13"></label>
       </div>
      </th>
      <th>
       <button class="table--btn">
        Media
       </button>
      </th>
      <?php $__currentLoopData = $selectedColumns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($this->showColumn($column)): ?>
        <th <?php if($index > count($selectedColumns) - 17 && $column != 'id'): ?> class="hidden" <?php endif; ?>>
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
      <th>
       <div style="display: flex;">
        <button class="button button--secondary button--sm" style="opacity: 0;">
         <svg>
          <polyline points="20 6 9 17 4 12"></polyline>
         </svg>
        </button>
        <button class="button button--secondary button--sm" style="opacity: 0;">
         <svg>
          <polyline points="20 6 9 17 4 12"></polyline>
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
     <?php if($filteredMedia->isEmpty()): ?>
      <tr>
       <td class="table--empty" colspan="<?php echo e(count($selectedColumns) + 2); ?>">No record found.</td>
      </tr>
     <?php else: ?>
      <?php $__currentLoopData = $filteredMedia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr <?php if($loop->last): ?> id="last_record" <?php endif; ?>
        class="expandable-row <?php if($this->isChecked($file->id)): ?> active <?php endif; ?>">
        <td>
         <div class="checkbox--primary">
          <input type="checkbox" value="<?php echo e($file->id); ?>" id="<?php echo e($file->id); ?>" wire:model="checked" />
          <label for="<?php echo e($file->id); ?>"></label>
         </div>
        </td>
        <td wire:click="expandRow(<?php echo e($index); ?>)">
         <?php if(in_array($file->extension, ['jpg', 'jpeg', 'png', 'gif', 'svg', 'jfif', 'webp'])): ?>
          <img loading="eager" src="/<?php echo e($file->path . $file->name); ?>" alt="<?php echo e($file->name); ?>" width="50">
         <?php else: ?>
          A problem with media
         <?php endif; ?>
        </td>
        <?php $__currentLoopData = $selectedColumns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <td <?php if($column != 'id'): ?> class="hidden" <?php endif; ?> data-title="<?php echo e($column); ?>">
          <?php if($column === 'name'): ?>
           <?php if($editedMediaIndex !== $index): ?>
            <?php echo e($file->$column); ?>

           <?php else: ?>
            <div class="searchable">
             <input type="text" class="input__searchable" wire:model.defer="filess.<?php echo e($index); ?>.name"
              value="<?php echo e($file->name); ?>">
            </div>
           <?php endif; ?>
          <?php elseif($column === 'sequence'): ?>
           <?php if($editedMediaIndex !== $index): ?>
            <?php echo e($file->sequence); ?>

           <?php else: ?>
            <div class="searchable">
             <input type="number" min="0" class="input__searchable"
              wire:model.defer="filess.<?php echo e($index); ?>.sequence" value="<?php echo e($file->sequence); ?>">
            </div>
           <?php endif; ?>
          <?php elseif($column === 'type'): ?>
           <?php if($editedMediaIndex !== $index): ?>
            <?php echo e($file->$column); ?>

           <?php else: ?>
            <div class="searchable">
             <select wire:model.defer="filess.<?php echo e($index); ?>.type" class="input__searchable">
              <option value="orginal">orginal</option>
              <option value="min">min</option>
              <option value="main">main</option>
              <option value="full">full</option>
             </select>
            </div>
           <?php endif; ?>
          <?php else: ?>
           <?php echo e($file->$column); ?>

          <?php endif; ?>
         </td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <td>
         <div style="display: flex;">
          <?php if($editedMediaIndex !== $index): ?>
           <button class="button button--secondary button--sm"
            wire:click.prevent="editMedia(<?php echo e($index); ?>, <?php echo e($file->id); ?>)">
            <svg>
             <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
             </path>
            </svg>
           </button>
           <button class="button button--secondary button--sm"
            wire:click.prevent="confirmItemRemoval(<?php echo e($file->id); ?>)">
            <svg>
             <polyline points="3 6 5 6 21 6"></polyline>
             <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
            </svg>
           </button>
          <?php else: ?>
           <button class="button button--secondary button--sm"
            wire:click.prevent="saveMedia(<?php echo e($index); ?> , <?php echo e($file->id); ?>)">
            <svg>
             <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
           </button>
           <button class="button button--secondary button--sm" wire:click.prevent="cancelMedia()">
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
        <td colspan="<?php echo e(count($selectedColumns) + 2); ?>">
         <div class="details">
          <?php $__currentLoopData = $selectedColumns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <?php
            if ($column === 'id') {
                continue;
            }
           ?>
           <?php if($column === 'name'): ?>
            <p>
             <bold><?php echo e($column); ?></bold>
             <?php if($editedMediaIndex !== $index): ?>
              <?php echo e($file->name); ?>

             <?php else: ?>
              <div class="searchable">
               <input type="text" class="input__searchable" wire:model.defer="filess.<?php echo e($index); ?>.name"
                value="<?php echo e($file->name); ?>">
              </div>
             <?php endif; ?>
            </p>
           <?php elseif($column === 'sequence'): ?>
            <p>
             <bold><?php echo e($column); ?></bold>
             <?php if($editedMediaIndex !== $index): ?>
              <?php echo e($file->sequence); ?>

             <?php else: ?>
              <div class="searchable">
               <input type="number" min="0" class="input__searchable"
                wire:model.defer="filess.<?php echo e($index); ?>.sequence" value="<?php echo e($file->sequence); ?>">
              </div>
             <?php endif; ?>
            </p>
           <?php elseif($column === 'type'): ?>
            <p>
             <bold><?php echo e($column); ?></bold>
             <?php if($editedMediaIndex !== $index): ?>
              <?php echo e($file->$column); ?>

             <?php else: ?>
              <div class="searchable">
               <select wire:model.defer="filess.<?php echo e($index); ?>.type" class="input__searchable">
                <option value="orginal">orginal</option>
                <option value="min">min</option>
                <option value="main">main</option>
                <option value="full">full</option>
               </select>
              </div>
             <?php endif; ?>
            </p>
           <?php else: ?>
            <p>
             <bold><?php echo e($column); ?></bold>
             <?php echo e($file->$column); ?>

            </p>
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
  </div>
 </div>
</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/related-media-product.blade.php ENDPATH**/ ?>