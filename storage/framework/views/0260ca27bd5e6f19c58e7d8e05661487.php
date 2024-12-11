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
  <h1 class="table--name">Cart: <?php echo e($cart->name); ?></h1>
  
  <a class="button button--primary button--centered" tooltip="Back to Carts" tooltip-top href="<?php echo e(route('carts')); ?>">
   <svg>
    <polyline points="15 18 9 12 15 6"></polyline>
   </svg>
  </a>
  <?php if($edititem === null): ?>
   <button class="button button--primary button--centered" tooltip="Edit this Cart" tooltip-left
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
    wire:click.prevent="savecart()">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M14 3v4a1 1 0 0 0 1 1h4" />
     <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
     <path d="M9 15l2 2l4 -4" />
    </svg>
   </button>
   <button class="button button--primary button--centered" tooltip="Cancel edit" tooltip-left
    wire:click.prevent="cancelcart()">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M14 3v4a1 1 0 0 0 1 1h4" />
     <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" />
     <path d="M10 12l4 5" />
     <path d="M10 17l4 -5" />
    </svg>
   </button>
  <?php endif; ?>
  <button class="button button--primary button--centered" tooltip="Delete this Cart" tooltip-left
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
   <span class="disabled"><?php echo e($cart->name); ?></span>
   <label for="category__name">Name</label>
  </div>

  
  <?php if($cart->order_id != null): ?>
   <div class="input__tabs">
    <a href="<?php echo e(route('show_order', ['id' => $cart->order_id])); ?>"><?php echo e($cart->order->name); ?></a>
    <label for="category__name">Related Order</label>
   </div>
  <?php endif; ?>
  
  <div class="input__tabs">
   <span class="disabled"><?php echo e($cart->quantity_amount); ?></span>
   <label for="category__name">Quantity Amount</label>
  </div>

  
  <div class="input__tabs details__long">
   <a href="<?php echo e(route('show_session', ['id' => $cart->session_id])); ?>"><?php echo e($cart->session_id); ?></a>
   <label for="category__name">Session Id</label>
  </div>



  
  <div class="input__tabs">
   <span class="disabled"><?php echo e($cart->sum_amount); ?></span>
   <label for="category__name">Sum Amount</label>
  </div>

  
  <div class="input__tabs">
   <span class="disabled"><?php echo e($cart->currency->name); ?></span>
   <label for="category__name">Currency</label>
  </div>

  
  <div class="input__tabs">
   <?php if($edititem === null): ?>
    <span class="disabled"><?php echo e($cart->status->name); ?></span>
   <?php else: ?>
    <select wire:model.defer="record.status_id">
     <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($status->id); ?>"><?php echo e($status->name); ?></option>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
   <?php endif; ?>
   <label for="category__name"> Status</label>
  </div>
  
  <div class="input__tabs">
   <span class="disabled"><?php echo e($cart->final_amount); ?></span>
   <label for="category__name">Final Amount</label>
  </div>
  <div class="input__tabs">
   <span class="disabled"><?php echo e($cart->delivery_price); ?></span>
   <label for="category__name">Delivery Price</label>
  </div>
  <?php if($cart->voucher_id != null): ?>
   <div class="input__tabs">
    <a href="<?php echo e(route('vouchers')); ?>"><?php echo e($cart->voucher->code); ?></a>
    <label for="category__name">Voucher</label>
   </div>
  <?php endif; ?>
  <?php if($cart->voucher_id != null): ?>
   <div class="input__tabs">
    <span class="disabled"><?php echo e($cart->voucher_value); ?></span>
    <label for="category__name">Voucher Value</label>
   </div>
  <?php endif; ?>
  <div class="details__checkboxes">
   <div class="checkbox__details ">
    <?php if($cart->seen_by_customer): ?>
     <input type="checkbox" id="active1" checked class="disabled" disabled />
     <label for="active1" class="disabled">Cart seen by customer</label>
    <?php else: ?>
     <input type="checkbox" id="active2" class="disabled" disabled />
     <label for="active2" class="disabled">Cart seen by customer</label>
    <?php endif; ?>
   </div>
  </div>
  
  <div class="input__tabs">
   <span class="disabled"><?php echo e($cart->created_at); ?></span>
   <label>Create date / time</label>
  </div>


  
  <div class="input__tabs">
   <span class="disabled"><?php echo e($cart->updated_at); ?></span>
   <label>Updated At</label>
  </div>

  
  <?php if($edititem != null): ?>
   <button class="button button--fill button--secondary details__long" wire:click.prevent="savecart()" value="Save">
    Save
   </button>
  <?php endif; ?>
 </form>


 
 <div style="height: calc(100% - 107.5px);" class="tabs__content related__view" id="relatedContent">
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-cart-items', ['cart' => $cart])->html();
} elseif ($_instance->childHasBeenRendered('l3506537802-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3506537802-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3506537802-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3506537802-0');
} else {
    $response = \Livewire\Livewire::mount('related-cart-items', ['cart' => $cart]);
    $html = $response->html();
    $_instance->logRenderedChild('l3506537802-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 </div>
</section>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/show-cart.blade.php ENDPATH**/ ?>