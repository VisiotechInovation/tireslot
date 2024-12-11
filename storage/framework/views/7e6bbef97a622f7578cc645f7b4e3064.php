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
   <button class="button button--primary button--long" wire:click.prevent="deleteRecord()">
    <span>Delete</span>
   </button>
   <button class="button button--danger button--long" wire:click.prevent="cancelItemRemoval()">
    <span>Cancel</span>
   </button>
  </div>
 </aside>


 
 <nav class="nav--controls">
  <h1 class="table--name">Account: <?php echo e($account->name); ?></h1>
  
  <a class="button button--primary button--centered" tooltip="Back to Accounts" tooltip-top
   href="<?php echo e(route('accounts')); ?>">
   <svg>
    <polyline points="15 18 9 12 15 6"></polyline>
   </svg>
  </a>
  <?php if($edititem === null): ?>
   <button class="button button--primary button--centered" tooltip="Edit this Account" tooltip-left
    wire:click.prevent="edititem()">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
     <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
     <path d="M16 5l3 3" />
    </svg>
   </button>
  <?php else: ?>
   <button class="button button--primary button--centered" tooltip="Save Edit" tooltip-left
    wire:click.prevent="saveitem()">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M14 3v4a1 1 0 0 0 1 1h4" />
     <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
     <path d="M9 15l2 2l4 -4" />
    </svg>
   </button>
   <button class="button button--primary button--centered" tooltip="Cancel edit" tooltip-left
    wire:click.prevent="canceledit()">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M14 3v4a1 1 0 0 0 1 1h4" />
     <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" />
     <path d="M10 12l4 5" />
     <path d="M10 17l4 -5" />
    </svg>
   </button>
  <?php endif; ?>
  <button class="button button--primary button--centered" tooltip="Delete this Account" tooltip-left
   wire:click.prevent="confirmItemRemoval">
   <svg>
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
    <path d="M9 14l6 0" />
   </svg>
  </button>
 </nav>


 
 <nav class="nav--tabs">
  <button class="button button--primary button--long button--active" id="detailsButton">
   Details
  </button>
  <button class="button button--primary button--long" id="relatedButton">
   Related
  </button>
 </nav>


 
 <form style="height: calc(100% - 107.5px);" class="tabs__content details__view active" id="detailsContent">

  
  <div class="input__tabs">
   <?php if($edititem === null): ?>
    <span class="disabled"><?php echo e($account->name); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " wire:model.defer="record.name">
   <?php endif; ?>
   <label>Name</label>
  </div>

  
  <div class="input__tabs">
   <?php if($edititem === null): ?>
    <span class="disabled"><?php echo e($account->type); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " wire:model.defer="record.type">
   <?php endif; ?>
   <label>Type: individual / juridic</label>
  </div>

  
  <div class="input__tabs">
   <?php if($edititem === null): ?>
    <span class="disabled"><?php echo e($account->first_name); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " wire:model.defer="record.first_name">
   <?php endif; ?>
   <label>First Name</label>
  </div>

  
  <div class="input__tabs">
   <?php if($edititem === null): ?>
    <span class="disabled"><?php echo e($account->last_name); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " wire:model.defer="record.last_name">
   <?php endif; ?>
   <label>Last Name</label>
  </div>

  
  <div class="input__tabs">
   <?php if($edititem === null): ?>
    <span class="disabled"><?php echo e($account->phone); ?></span>
   <?php else: ?>
    <input type="tel" placeholder=" " wire:model.defer="record.phone">
   <?php endif; ?>
   <label>Phone</label>
  </div>

  
  <div class="input__tabs">
   <?php if($edititem === null): ?>
    <span class="disabled"><?php echo e($account->email); ?></span>
   <?php else: ?>
    <input type="email" placeholder=" " wire:model.defer="record.email">
   <?php endif; ?>
   <label>Email</label>
  </div>

  
  <?php if($account->type == 'juridic'): ?>
   
   <div class="input__tabs">
    <?php if($edititem === null): ?>
     <span class="disabled"><?php echo e($account->company_name); ?></span>
    <?php else: ?>
     <input type="text" placeholder=" " wire:model.defer="record.company_name">
    <?php endif; ?>
    <label>Company Name</label>
   </div>

   
   <div class="input__tabs">
    <?php if($edititem === null): ?>
     <span class="disabled"><?php echo e($account->registration_code); ?></span>
    <?php else: ?>
     <input type="text" placeholder=" " wire:model.defer="record.registration_code">
    <?php endif; ?>
    <label>Registration Code</label>
   </div>

   
   <div class="input__tabs">
    <?php if($edititem === null): ?>
     <span class="disabled"><?php echo e($account->registration_number); ?></span>
    <?php else: ?>
     <input type="text" placeholder=" " wire:model.defer="record.registration_number">
    <?php endif; ?>
    <label>Registration Number</label>
   </div>

   
   <div class="input__tabs">
    <?php if($edititem === null): ?>
     <span class="disabled"><?php echo e($account->bank_name); ?></span>
    <?php else: ?>
     <input type="text" placeholder=" " wire:model.defer="record.bank_name">
    <?php endif; ?>
    <label>Bank Name</label>
   </div>

   
   <div class="input__tabs">
    <?php if($edititem === null): ?>
     <span class="disabled"><?php echo e($account->account); ?></span>
    <?php else: ?>
     <input type="text" placeholder=" " wire:model.defer="record.account">
    <?php endif; ?>
    <label>Bank Account</label>
   </div>
  <?php endif; ?>

  
  <div class="input__tabs">
   <span class="disabled"><?php echo e($account->created_at); ?></span>
   <label>Create date / time</label>
  </div>

  
  <div class="input__tabs">
   <span class="disabled"><?php echo e($account->updated_at); ?></span>
   <label>Updated date / time</label>
  </div>

  
  <?php if($edititem != null): ?>
   <button class="button button--fill button--secondary details__long" wire:click.prevent="saveitem()"
    value="Save">
    Save
   </button>
  <?php endif; ?>
 </form>


 
 <div style="height: calc(100% - 107.5px);" class="tabs__content related__view" id="relatedContent">
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-addresses', ['account' => $account])->html();
} elseif ($_instance->childHasBeenRendered('first' . $account->id)) {
    $componentId = $_instance->getRenderedChildComponentId('first' . $account->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('first' . $account->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('first' . $account->id);
} else {
    $response = \Livewire\Livewire::mount('related-addresses', ['account' => $account]);
    $html = $response->html();
    $_instance->logRenderedChild('first' . $account->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-orders', ['account' => $account])->html();
} elseif ($_instance->childHasBeenRendered($account->id)) {
    $componentId = $_instance->getRenderedChildComponentId($account->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($account->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($account->id);
} else {
    $response = \Livewire\Livewire::mount('related-orders', ['account' => $account]);
    $html = $response->html();
    $_instance->logRenderedChild($account->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-invoices', ['relatedby' => 'account', 'id' => $account->id])->html();
} elseif ($_instance->childHasBeenRendered('l2554242144-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l2554242144-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2554242144-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2554242144-2');
} else {
    $response = \Livewire\Livewire::mount('related-invoices', ['relatedby' => 'account', 'id' => $account->id]);
    $html = $response->html();
    $_instance->logRenderedChild('l2554242144-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

 </div>
</section>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/show-account.blade.php ENDPATH**/ ?>