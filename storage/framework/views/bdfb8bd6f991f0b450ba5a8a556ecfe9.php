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
  <h1 class="table--name">Session: <?php echo e($session->sessions); ?></h1>
  
  <a class="button button--primary button--centered" tooltip="Back to all sessions" tooltip-top
   href="<?php echo e(route('sessions')); ?>">
   <svg>
    <polyline points="15 18 9 12 15 6"></polyline>
   </svg>
  </a>
  <button class="button button--primary button--centered" tooltip="Delete this session" tooltip-left
   wire:click.prevent="confirmItemRemoval(<?php echo e($session->id); ?>)">
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
   <span class="disabled"><?php echo e($session->sessions); ?></span>
   <label>Session</label>
  </div>

  <div class="input__tabs">
   <span class="disabled"><?php echo e($session->ip_address); ?></span>
   <label>Ip Adress</label>
  </div>

  <div class="input__tabs details__long">
   <span class="disabled"><?php echo e($session->user_agent); ?></span>
   <label>User Agent</label>
  </div>

  <div class="input__tabs">
   <span class="disabled"><?php echo e($session->promotion_cookiedid); ?></span>
   <label>Promotion CookieID</label>
  </div>

  <div class="input__tabs">
   <span class="disabled"><?php echo e($session->promotion_start_date); ?></span>
   <label>Promotion Start Date</label>
  </div>

  <div class="input__tabs">
   <span class="disabled"><?php echo e($session->promotion_expiration_date); ?></span>
   <label>Promotion Expiration Date</label>
  </div>
  <div class="input__tabs">
   <span class="disabled"><?php echo e($session->promotion_cooldown_timer); ?></span>
   <label>Promotion Cooldown Timer</label>
  </div>

  <div class="input__tabs">
   <span class="disabled"><?php echo e($session->last_activity); ?></span>
   <label>Last Activity</label>
  </div>

  <div class="input__tabs">
   <span class="disabled"><?php echo e($session->created_at); ?></span>
   <label>Create date / time</label>
  </div>
  <div class="input__tabs">
   <span class="disabled"><?php echo e($session->updated_at); ?></span>
   <label>Updated At</label>
  </div>
 </form>


 <div style="height: calc(100% - 107.5px);" class="tabs__content related__view" id="relatedContent">
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-session', ['relatedby' => 'sessions', 'session_id' => $session->sessions])->html();
} elseif ($_instance->childHasBeenRendered(1)) {
    $componentId = $_instance->getRenderedChildComponentId(1);
    $componentTag = $_instance->getRenderedChildComponentTagName(1);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(1);
} else {
    $response = \Livewire\Livewire::mount('related-session', ['relatedby' => 'sessions', 'session_id' => $session->sessions]);
    $html = $response->html();
    $_instance->logRenderedChild(1, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-session', ['relatedby' => 'carts', 'session_id' => $session->sessions])->html();
} elseif ($_instance->childHasBeenRendered(2)) {
    $componentId = $_instance->getRenderedChildComponentId(2);
    $componentTag = $_instance->getRenderedChildComponentTagName(2);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(2);
} else {
    $response = \Livewire\Livewire::mount('related-session', ['relatedby' => 'carts', 'session_id' => $session->sessions]);
    $html = $response->html();
    $_instance->logRenderedChild(2, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-session', ['relatedby' => 'orders', 'session_id' => $session->sessions])->html();
} elseif ($_instance->childHasBeenRendered(3)) {
    $componentId = $_instance->getRenderedChildComponentId(3);
    $componentTag = $_instance->getRenderedChildComponentTagName(3);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(3);
} else {
    $response = \Livewire\Livewire::mount('related-session', ['relatedby' => 'orders', 'session_id' => $session->sessions]);
    $html = $response->html();
    $_instance->logRenderedChild(3, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-session', ['relatedby' => 'wishlist', 'session_id' => $session->sessions])->html();
} elseif ($_instance->childHasBeenRendered(4)) {
    $componentId = $_instance->getRenderedChildComponentId(4);
    $componentTag = $_instance->getRenderedChildComponentTagName(4);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(4);
} else {
    $response = \Livewire\Livewire::mount('related-session', ['relatedby' => 'wishlist', 'session_id' => $session->sessions]);
    $html = $response->html();
    $_instance->logRenderedChild(4, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('related-session', ['relatedby' => 'user_promotions', 'session_id' => $session->sessions])->html();
} elseif ($_instance->childHasBeenRendered(5)) {
    $componentId = $_instance->getRenderedChildComponentId(5);
    $componentTag = $_instance->getRenderedChildComponentTagName(5);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(5);
} else {
    $response = \Livewire\Livewire::mount('related-session', ['relatedby' => 'user_promotions', 'session_id' => $session->sessions]);
    $html = $response->html();
    $_instance->logRenderedChild(5, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 </div>
</section>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/show-session.blade.php ENDPATH**/ ?>