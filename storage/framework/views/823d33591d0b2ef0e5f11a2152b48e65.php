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
  <h1 class="table--name">Category: <?php echo e(strip_tags($category->name)); ?></h1>
  
  <a class="button button--primary button--centered" tooltip="Back to all categories" tooltip-top
   href="<?php echo e(route('category')); ?>">
   <svg>
    <polyline points="15 18 9 12 15 6"></polyline>
   </svg>
  </a>
  <a class="button button--primary button--centered" tooltip="Create new category" tooltip-top
   href="<?php echo e(route('newcategory')); ?>">
   <svg>
    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
    <polyline points="14 2 14 8 20 8"></polyline>
    <line x1="12" y1="18" x2="12" y2="12"></line>
    <line x1="9" y1="15" x2="15" y2="15"></line>
   </svg>
  </a>
  <?php if($editcategory === null): ?>
   <button class="button button--primary button--centered" tooltip="Edit this category" tooltip-left
    wire:click.prevent="editcategory()">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
     <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
     <path d="M16 5l3 3" />
    </svg>
   </button>
  <?php else: ?>
   <button class="button button--primary button--centered" tooltip="Save Edit" tooltip-left
    wire:click.prevent="savecategory()">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M14 3v4a1 1 0 0 0 1 1h4" />
     <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
     <path d="M9 15l2 2l4 -4" />
    </svg>
   </button>
   <button class="button button--primary button--centered" tooltip="Cancel edit" tooltip-left
    wire:click.prevent="cancelcategory()">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M14 3v4a1 1 0 0 0 1 1h4" />
     <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" />
     <path d="M10 12l4 5" />
     <path d="M10 17l4 -5" />
    </svg>
   </button>
  <?php endif; ?>
  <button class="button button--primary button--centered" tooltip="Delete this category" tooltip-left
   wire:click.prevent="confirmItemRemoval(<?php echo e($category->id); ?>)">
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
   <?php if($editcategory === null): ?>
    <span class="disabled"><?php echo e($category->name); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " name="category__name" wire:model.defer="cat.name" required>
   <?php endif; ?>
   <label for="category__name">Name</label>
  </div>

  
  <div class="details__checkboxes">
   
   <div class="checkbox__details ">
    <?php if($editcategory === null): ?>
     <?php if($category->active): ?>
      <input type="checkbox" id="active1" checked class="disabled" disabled />
      <label for="active1" class="disabled">Active</label>
     <?php else: ?>
      <input type="checkbox" id="active2" class="disabled" disabled />
      <label for="active2" class="disabled">Active</label>
     <?php endif; ?>
    <?php else: ?>
     <input type="checkbox" id="active3" wire:model.defer="cat.active" />
     <label for="active3">Active</label>
    <?php endif; ?>
   </div>
   
   <div class="checkbox__details">
    <?php if($editcategory === null): ?>
     <?php if($category->store_tab): ?>
      <input type="checkbox" id="store_tab1" checked class="disabled" disabled />
      <label for="store_tab1" class="disabled">Show in store</label>
     <?php else: ?>
      <input type="checkbox" id="store_tab2" class="disabled" disabled />
      <label for="store_tab2" class="disabled">Show in store</label>
     <?php endif; ?>
    <?php else: ?>
     <input type="checkbox" id="store_tab3" wire:model.defer="cat.visible" />
     <label for="store_tab3">Show in store</label>
    <?php endif; ?>
   </div>
  </div>
  <div class="details__checkboxes">

   <div class="checkbox__details ">
    <?php if($editcategory === null): ?>
     <?php if($category->preload_image): ?>
      <input type="checkbox" id="preload1" checked class="disabled" disabled />
      <label for="preload1" class="disabled">Preload image</label>
     <?php else: ?>
      <input type="checkbox" id="preload2" class="disabled" disabled />
      <label for="preload2" class="disabled">Preload image</label>
     <?php endif; ?>
    <?php else: ?>
     <input type="checkbox" id="preload3" wire:model.defer="cat.preload" />
     <label for="preload3">Preload image</label>
    <?php endif; ?>
   </div>
   <div class="checkbox__details ">
    <?php if($editcategory === null): ?>
     <?php if($category->display_variant_price): ?>
      <input type="checkbox" id="varprice1" checked class="disabled" disabled />
      <label for="varprice1" class="disabled">Display Variant Price</label>
     <?php else: ?>
      <input type="checkbox" id="varprice2" class="disabled" disabled />
      <label for="varprice2" class="disabled">Display Variant Price</label>
     <?php endif; ?>
    <?php else: ?>
     <input type="checkbox" id="varprice3" wire:model.defer="cat.varprice" />
     <label for="varprice3">Display Variant Price</label>
    <?php endif; ?>
   </div>
  </div>

  
  <div class="input__tabs">
   <?php if($editcategory === null): ?>
    <span class="disabled"><?php echo e($category->start_date); ?></span>
   <?php else: ?>
    <input type="date" placeholder=" " name="category__name" wire:model.defer="cat.start_date" required>
   <?php endif; ?>
   <label for="category__name">Start Date</label>
  </div>

  
  <div class="input__tabs">
   <?php if($editcategory === null): ?>
    <span class="disabled"><?php echo e($category->end_date); ?></span>
   <?php else: ?>
    <input type="date" placeholder=" " name="category__name" wire:model.defer="cat.end_date" required>
   <?php endif; ?>
   <label for="category__name">End Date</label>
  </div>
  <div class="details__checkboxes">

   
   <div class="input__tabs">
    <?php if($editcategory === null): ?>
     <span class="disabled"><?php echo e($category->slider_sequence); ?></span>
    <?php else: ?>
     <input type="number" placeholder=" " name="category__name" wire:model.defer="cat.slider_sequence" required>
    <?php endif; ?>
    <label for="category__name">Slider Sequence</label>
   </div>

   
   <div class="input__tabs">
    <?php if($editcategory === null): ?>
     <span class="disabled"><?php echo e($category->sequence); ?></span>
    <?php else: ?>
     <input type="number" placeholder=" " name="category__name" wire:model.defer="cat.sequence" required>
    <?php endif; ?>
    <label for="category__name">Sequence</label>
   </div>

  </div>

  
  <div class="input__tabs details__long">
   <?php if($editcategory === null): ?>
    <span class="disabled"><?php echo e($category->meta_description); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " name="category__name" wire:model.defer="cat.meta_description" required>
   <?php endif; ?>
   <label for="category__name">Meta Description</label>
  </div>


  
  <div class="input__tabs">
   <?php if($editcategory === null): ?>
    <span class="disabled"><?php echo e($category->short_description); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " name="category__name" wire:model.defer="cat.short_description" required>
   <?php endif; ?>
   <label for="category__name">Short Description</label>
  </div>

  
  <div class="input__tabs">
   <?php if($editcategory === null): ?>
    <span class="disabled"><?php echo e($category->accepted_items); ?></span>
   <?php else: ?>
    <select wire:model.defer="cat.acc_items">
     <option value="default">default</option>
     <option value="parents">parents</option>
    </select>
   <?php endif; ?>
   <label for="category__name">Displayed items</label>
  </div>

  
  <div class="textarea__tabs details__long">
   <?php if($editcategory === null): ?>
    <span class="disabled"><?php echo e($category->long_description); ?></span>
   <?php else: ?>
    <textarea type="text" placeholder=" " name="category__name" wire:model.defer="cat.long_description" required></textarea>
   <?php endif; ?>
   <label for="category__name">Long Description</label>
  </div>

  
  <div class="input__tabs">
   <?php if($editcategory === null): ?>
    <span class="disabled"><?php echo e($category->seo_title); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " name="category__name" wire:model.defer="cat.seo_title" required>
   <?php endif; ?>
   <label for="category__name">Seo Title</label>
  </div>

  
  <div class="input__tabs">
   <?php if($editcategory === null): ?>
    <span class="disabled"><?php echo e($category->seo_id); ?></span>
   <?php else: ?>
    <input type="text" placeholder=" " name="category__name" wire:model.defer="cat.seo_id" required>
   <?php endif; ?>
   <label for="category__name">Friendly URL</label>
  </div>

  
  <div class="input__tabs">
   <span class="disabled"><?php echo e($category->created_at); ?></span>
   <label>Create date / time</label>
  </div>

  
  <div class="input__tabs">
   <span class="disabled"><?php echo e($category->created_by); ?></span>
   <label>Created By</label>
  </div>

  
  <div class="input__tabs">
   <span class="disabled"><?php echo e($category->updated_at); ?></span>
   <label>Updated At</label>
  </div>

  
  <div class="input__tabs">
   <span class="disabled"><?php echo e($category->last_modified_by); ?></span>
   <label>Last modified by</label>
  </div>

  
  <?php if($editcategory != null): ?>
   <button class="button button--fill button--secondary details__long" wire:click.prevent="savecategory()"
    value="Save">
    Save
   </button>
  <?php endif; ?>
 </form>


 
 <div style="height: calc(100% - 107.5px);" class="tabs__content related__view" id="relatedContent">
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-media-category', ['category' => $category])->html();
} elseif ($_instance->childHasBeenRendered('l1545364416-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1545364416-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1545364416-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1545364416-0');
} else {
    $response = \Livewire\Livewire::mount('related-media-category', ['category' => $category]);
    $html = $response->html();
    $_instance->logRenderedChild('l1545364416-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-product-category', ['category' => $category])->html();
} elseif ($_instance->childHasBeenRendered('l1545364416-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l1545364416-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1545364416-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1545364416-1');
} else {
    $response = \Livewire\Livewire::mount('related-product-category', ['category' => $category]);
    $html = $response->html();
    $_instance->logRenderedChild('l1545364416-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-subcategory', ['category' => $category])->html();
} elseif ($_instance->childHasBeenRendered('l1545364416-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l1545364416-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1545364416-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1545364416-2');
} else {
    $response = \Livewire\Livewire::mount('related-subcategory', ['category' => $category]);
    $html = $response->html();
    $_instance->logRenderedChild('l1545364416-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 </div>
</section>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/show-category.blade.php ENDPATH**/ ?>