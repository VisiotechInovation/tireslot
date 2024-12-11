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
  <h1 class="table--name">Product: <?php echo e($product->name); ?></h1>
  
  <a class="button button--primary button--centered" tooltip="Back to all products" tooltip-top
   href="<?php echo e(route('all_products')); ?>">
   <svg>
    <polyline points="15 18 9 12 15 6"></polyline>
   </svg>
  </a>
  <a class="button button--primary button--centered" tooltip="Create new Product" tooltip-top
   href="<?php echo e(route('add_product')); ?>">
   <svg>
    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
    <polyline points="14 2 14 8 20 8"></polyline>
    <line x1="12" y1="18" x2="12" y2="12"></line>
    <line x1="9" y1="15" x2="15" y2="15"></line>
   </svg>
  </a>
  <?php if($editproduct === null): ?>
   <button class="button button--primary button--centered" tooltip="Edit this Product" tooltip-left
    wire:click.prevent="editproduct()">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
     <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
     <path d="M16 5l3 3" />
    </svg>
   </button>
  <?php else: ?>
   <button class="button button--primary button--centered" tooltip="Save Edit" tooltip-left
    wire:click.prevent="saveproduct()">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M14 3v4a1 1 0 0 0 1 1h4" />
     <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
     <path d="M9 15l2 2l4 -4" />
    </svg>
   </button>
   <button class="button button--primary button--centered" tooltip="Cancel edit" tooltip-left
    wire:click.prevent="cancelproduct()">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M14 3v4a1 1 0 0 0 1 1h4" />
     <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" />
     <path d="M10 12l4 5" />
     <path d="M10 17l4 -5" />
    </svg>
   </button>
  <?php endif; ?>
  <button class="button button--primary button--centered" tooltip="Delete this Product" tooltip-left
   wire:click.prevent="confirmProductRemoval(<?php echo e($product->id); ?>)">
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
   <?php if($editproduct === null): ?>
    <span class="disabled"><?php echo e($product->name); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " name="product__name" wire:model.defer="prod.product_name" required>
   <?php endif; ?>
   <label for="product__name">Name</label>
  </div>



  
  <div class="details__checkboxes">
   
   <div class="checkbox__details ">
    <?php if($editproduct === null): ?>
     <?php if($product->active): ?>
      <input type="checkbox" id="active1" checked class="disabled" disabled />
      <label for="active1" class="disabled">Active</label>
     <?php else: ?>
      <input type="checkbox" id="active2" class="disabled" disabled />
      <label for="active2" class="disabled">Active</label>
     <?php endif; ?>
    <?php else: ?>
     <input type="checkbox" id="active3" wire:model.defer="prod.active" />
     <label for="active3">Active</label>
    <?php endif; ?>
   </div>
   <div class="checkbox__details">
    <?php if($editproduct === null): ?>
     <?php if($product->is_new): ?>
      <input type="checkbox" id="isNew1" checked class="disabled" disabled />
      <label for="isNew1" class="disabled">Is New</label>
     <?php else: ?>
      <input type="checkbox" id="isNew2" class="disabled" disabled />
      <label for="isNew2" class="disabled">Is New</label>
     <?php endif; ?>
    <?php else: ?>
     <input type="checkbox" id="isNew3" wire:model.defer="prod.is_new" />
     <label for="isNew3">Is New</label>
    <?php endif; ?>
   </div>
   
  </div>
  
  <div class="input__tabs">
   <?php if($editproduct === null): ?>
    <span class="disabled"><?php echo e($product->brand); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " name="product__brand" wire:model.defer="prod.brand" required>
   <?php endif; ?>
   <label for="product__name">Brand</label>
  </div>

  
  <div class="input__tabs">
   <?php if($editproduct === null): ?>
    <span class="disabled"><?php echo e($product->type); ?></span>
   <?php else: ?>
    <select wire:model.defer="prod.type">
     <option value="parent">parent</option>
     <option value="standard">standard</option>
     <option value="variant">variant</option>
    </select>
   <?php endif; ?>
   <label for="product__name">Type</label>
  </div>

  
  <div class="input__tabs">
   <?php if($editproduct === null): ?>
    <span class="disabled"><?php echo e($product->quantity); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " name="product__name" wire:model.defer="prod.quantity" required>
   <?php endif; ?>
   <label for="product__name">Quantity</label>
  </div>

  
  <div class="input__tabs">
   <?php if($editproduct === null): ?>
    <span class="disabled"><?php echo e($product->popularity); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " name="product__name" wire:model.defer="prod.popularity" required>
   <?php endif; ?>
   <label for="product__name">Popularity</label>
  </div>
  <div class="details__checkboxes">
   
   <div class="input__tabs">
    <?php if($editproduct === null): ?>
     <span class="disabled"><?php echo e($product->sku); ?></span>
    <?php else: ?>
     <input type="text" placeholder=" " name="product__name" wire:model.defer="prod.sku" required>
    <?php endif; ?>
    <label for="product__name">SKU</label>
   </div>

   
   <div class="input__tabs">
    <?php if($editproduct === null): ?>
     <span class="disabled"><?php echo e($product->ean); ?></span>
    <?php else: ?>
     <input type="text" placeholder=" " name="product__name" wire:model.defer="prod.ean" required>
    <?php endif; ?>
    <label for="product__name">EAN</label>
   </div>
  </div>

  
  <div class="input__tabs">
   <?php if($editproduct === null): ?>
    <span class="disabled"><?php echo e($product->short_description); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " name="product__name" wire:model.defer="prod.short_description" required>
   <?php endif; ?>
   <label for="product__name">Short Description</label>
  </div>

  
  <div class="input__tabs">
   <?php if($editproduct === null): ?>
    <span class="disabled"><?php echo e($product->start_date); ?></span>
   <?php else: ?>
    <input type="date" placeholder=" " name="product__name" wire:model.defer="prod.start_date" required>
   <?php endif; ?>
   <label for="product__name">Start Date</label>
  </div>

  
  <div class="input__tabs">
   <?php if($editproduct === null): ?>
    <span class="disabled"><?php echo e($product->end_date); ?></span>
   <?php else: ?>
    <input type="date" placeholder=" " name="product__name" wire:model.defer="prod.end_date" required>
   <?php endif; ?>
   <label for="product__name">End Date</label>
  </div>

  
  <div class="input__tabs details__long">
   <?php if($editproduct === null): ?>
    <span class="disabled"><?php echo e($product->meta_description); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " name="product__name" wire:model.defer="prod.meta_description" required>
   <?php endif; ?>
   <label for="product__name">Meta Description</label>
  </div>

  
  <div class="textarea__tabs details__long">
   <?php if($editproduct === null): ?>
    <span class="disabled"><?php echo e($product->comments); ?></span>
   <?php else: ?>
    <textarea type="text" placeholder=" " name="product__name" wire:model.defer="prod.comments"></textarea>
   <?php endif; ?>
   <label for="product__name">Comments</label>
  </div>

  
  <div class="textarea__tabs details__long">
   <?php if($editproduct === null): ?>
    <span class="disabled"><?php echo e($product->long_description); ?></span>
   <?php else: ?>
    <textarea type="text" placeholder=" " name="product__name" wire:model.defer="prod.long_description" required></textarea>
   <?php endif; ?>
   <label for="product__name">Long Description</label>
  </div>

  
  <div class="input__tabs">
   <?php if($editproduct === null): ?>
    <span class="disabled"><?php echo e($product->seo_title); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " name="product__name" wire:model.defer="prod.seo_title" required>
   <?php endif; ?>
   <label for="product__name">Seo Title</label>
  </div>

  
  <div class="input__tabs">
   <?php if($editproduct === null): ?>
    <span class="disabled"><?php echo e($product->seo_id); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " name="product__name" wire:model.defer="prod.seo_id" required>
   <?php endif; ?>
   <label for="product__name">Friendly URL</label>
  </div>

  
  <div class="input__tabs">
   <span class="disabled"><?php echo e($product->created_at); ?></span>
   <label>Create date / time</label>
  </div>

  
  <div class="input__tabs">
   <span class="disabled"><?php echo e($product->created_by); ?></span>
   <label>Created By</label>
  </div>

  
  <div class="input__tabs">
   <span class="disabled"><?php echo e($product->updated_at); ?></span>
   <label>Updated At</label>
  </div>

  
  <div class="input__tabs">
   <span class="disabled"><?php echo e($product->last_modified_by); ?></span>
   <label>Last modified by</label>
  </div>

  
  <?php if($editproduct != null): ?>
   <button class="button button--fill button--secondary details__long" wire:click.prevent="saveproduct()"
    value="Save">
    Save
   </button>
  <?php endif; ?>
 </form>


 
 <div style="height: calc(100% - 107.5px);" class="tabs__content related__view" id="relatedContent">
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-media-product', ['product' => $product])->html();
} elseif ($_instance->childHasBeenRendered('l3571763894-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3571763894-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3571763894-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3571763894-0');
} else {
    $response = \Livewire\Livewire::mount('related-media-product', ['product' => $product]);
    $html = $response->html();
    $_instance->logRenderedChild('l3571763894-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-variants', ['product' => $product])->html();
} elseif ($_instance->childHasBeenRendered('l3571763894-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3571763894-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3571763894-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3571763894-1');
} else {
    $response = \Livewire\Livewire::mount('related-variants', ['product' => $product]);
    $html = $response->html();
    $_instance->logRenderedChild('l3571763894-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-category-product', ['product' => $product])->html();
} elseif ($_instance->childHasBeenRendered('l3571763894-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l3571763894-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3571763894-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3571763894-2');
} else {
    $response = \Livewire\Livewire::mount('related-category-product', ['product' => $product]);
    $html = $response->html();
    $_instance->logRenderedChild('l3571763894-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-products', ['product' => $product])->html();
} elseif ($_instance->childHasBeenRendered('l3571763894-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l3571763894-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3571763894-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3571763894-3');
} else {
    $response = \Livewire\Livewire::mount('related-products', ['product' => $product]);
    $html = $response->html();
    $_instance->logRenderedChild('l3571763894-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-spec-product', ['product' => $product])->html();
} elseif ($_instance->childHasBeenRendered('l3571763894-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l3571763894-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3571763894-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3571763894-4');
} else {
    $response = \Livewire\Livewire::mount('related-spec-product', ['product' => $product]);
    $html = $response->html();
    $_instance->logRenderedChild('l3571763894-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-pricelist', ['product' => $product])->html();
} elseif ($_instance->childHasBeenRendered('l3571763894-5')) {
    $componentId = $_instance->getRenderedChildComponentId('l3571763894-5');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3571763894-5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3571763894-5');
} else {
    $response = \Livewire\Livewire::mount('related-pricelist', ['product' => $product]);
    $html = $response->html();
    $_instance->logRenderedChild('l3571763894-5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('product-reviews', ['product' => $product, 'tableName' => 'product_reviews'])->html();
} elseif ($_instance->childHasBeenRendered('l3571763894-6')) {
    $componentId = $_instance->getRenderedChildComponentId('l3571763894-6');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3571763894-6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3571763894-6');
} else {
    $response = \Livewire\Livewire::mount('product-reviews', ['product' => $product, 'tableName' => 'product_reviews']);
    $html = $response->html();
    $_instance->logRenderedChild('l3571763894-6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

 </div>
</section>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/show-product.blade.php ENDPATH**/ ?>