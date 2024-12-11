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
    <div class="background background--center <?php if($delete): ?> active <?php endif; ?>"></div>
    <div class="aside aside--confirm <?php if($delete): ?> active <?php endif; ?>">
      <span>
          Are you sure to delete this record?
      </span>
      <button class="button button--primary button--long" wire:click.prevent="deleteSingleRecord()">
        <span>Delete</span>
      </button>
      <button class="button button--danger button--long" wire:click.prevent="cancelItemRemoval()">
        <span>Cancel</span>
      </button>
    </div>
  </aside>


  
  <nav class="nav--controls">
    <h1 class="table--name">Custom Code: <?php echo e($script->name); ?></h1>
    
    <a class="button button--primary button--centered" tooltip="Back to Custom scripts" tooltip-top href="<?php echo e(route('customscripts')); ?>">
      <svg><polyline points="15 18 9 12 15 6"></polyline></svg>
    </a>
    <a class="button button--primary button--centered" tooltip="Create new script" tooltip-top href="<?php echo e(route('new_script')); ?>">
      <svg><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
    </a>
    <?php if($edititem === null): ?>
      <button class="button button--primary button--centered" tooltip="Edit this script" tooltip-left wire:click.prevent="edititem()">
        <svg><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
      </button>
    <?php else: ?>
      <button class="button button--primary button--centered" tooltip="Save Edit" tooltip-left wire:click.prevent="saveitem()">
        <svg><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 15l2 2l4 -4" /></svg>
      </button>
      <button class="button button--primary button--centered" tooltip="Cancel edit" tooltip-left wire:click.prevent="cancelitem()">
        <svg><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" /><path d="M10 12l4 5" /><path d="M10 17l4 -5" /></svg>
      </button>
    <?php endif; ?>
    <button class="button button--primary button--centered" tooltip="Delete this script" tooltip-left wire:click.prevent="confirmItemRemoval(<?php echo e($script->id); ?>)">
      <svg><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 14l6 0" /></svg>
    </button>
  </nav>


  
  <form style="height: calc(100% - 70px);" class="tabs__content details__view active">
    
    <div class="input__tabs">
      <?php if($edititem === null): ?>
      <span class="disabled"><?php echo e($script->name); ?></span>
      <?php else: ?>
      <input type="text" placeholder=" " wire:model.defer="record.name" required>
      <?php endif; ?>
      <label>Name</label>
    </div>

    
    <div class="details__checkboxes">
      <div class="input__tabs">
      <?php if($edititem === null): ?>
        <span class="disabled"><?php echo e($script->type); ?></span>
      <?php else: ?>
        <select wire:model.defer="record.type">
          <option value="head-top">head-top</option>
          <option value="head-bottom">head-bottom</option>
          <option value="body-top">body-top</option>
          <option value="body-bottom">body-bottom</option>
        </select>
        <?php endif; ?>
        <label>Code Position</label>
      </div>
    </div>

    
    <div class="details__checkboxes">
      
      <div class="checkbox__details">
        <?php if($edititem === null): ?>
          <?php if($script->active): ?>
            <input type="checkbox" id="active1" checked class="disabled" disabled />
            <label for="active1" class="disabled">Active</label>
          <?php else: ?>
            <input type="checkbox" id="active2" class="disabled" disabled />
            <label for="active2" class="disabled">Active</label>
          <?php endif; ?>
        <?php else: ?>
          <input type="checkbox" id="active3" wire:model.defer="record.active" />
          <label for="active3">Active</label>
        <?php endif; ?>
      </div>
    </div>


    
    <div class="textarea__tabs details__long">
      <?php if($edititem === null): ?>
        <span class="disabled"><?php echo e($script->content); ?></span>
      <?php else: ?>
        <textarea wire:model.defer="record.content" placeholder=" " required></textarea>
      <?php endif; ?>
      <label>Content</label>
    </div>

    
    <div class="input__tabs">
      <span class="disabled"><?php echo e($script->created_at); ?></span>
      <label>Create date / time</label>
    </div>

    
    <div class="input__tabs">
      <span class="disabled"><?php echo e($script->updated_at); ?></span>
      <label>Updated date / time</label>
    </div>

    
    <?php if($edititem != null): ?>
      <button class="button button--fill button--secondary details__long" wire:click.prevent="saveitem()" value="Save">
        Save
      </button>
    <?php endif; ?>
  </form>
</section>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/show-script.blade.php ENDPATH**/ ?>