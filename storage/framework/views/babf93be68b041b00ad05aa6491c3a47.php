<?php if (isset($component)) { $__componentOriginale1868aa851bf6eb8c1d43f362c008cf2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale1868aa851bf6eb8c1d43f362c008cf2 = $attributes; } ?>
<?php $component = App\View\Components\Dashboardheader::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboardheader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboardheader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale1868aa851bf6eb8c1d43f362c008cf2)): ?>
<?php $attributes = $__attributesOriginale1868aa851bf6eb8c1d43f362c008cf2; ?>
<?php unset($__attributesOriginale1868aa851bf6eb8c1d43f362c008cf2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale1868aa851bf6eb8c1d43f362c008cf2)): ?>
<?php $component = $__componentOriginale1868aa851bf6eb8c1d43f362c008cf2; ?>
<?php unset($__componentOriginale1868aa851bf6eb8c1d43f362c008cf2); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal08af02ee86f0a0dcbc8540af26877ed5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal08af02ee86f0a0dcbc8540af26877ed5 = $attributes; } ?>
<?php $component = App\View\Components\Dashboardnavbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboardnavbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboardnavbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal08af02ee86f0a0dcbc8540af26877ed5)): ?>
<?php $attributes = $__attributesOriginal08af02ee86f0a0dcbc8540af26877ed5; ?>
<?php unset($__attributesOriginal08af02ee86f0a0dcbc8540af26877ed5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08af02ee86f0a0dcbc8540af26877ed5)): ?>
<?php $component = $__componentOriginal08af02ee86f0a0dcbc8540af26877ed5; ?>
<?php unset($__componentOriginal08af02ee86f0a0dcbc8540af26877ed5); ?>
<?php endif; ?>
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
<?php if (isset($component)) { $__componentOriginalc348144b2321ceda244a12d648bc5fc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc348144b2321ceda244a12d648bc5fc2 = $attributes; } ?>
<?php $component = App\View\Components\Dashboardsidebar::resolve(['active' => __('promotion')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboardsidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboardsidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc348144b2321ceda244a12d648bc5fc2)): ?>
<?php $attributes = $__attributesOriginalc348144b2321ceda244a12d648bc5fc2; ?>
<?php unset($__attributesOriginalc348144b2321ceda244a12d648bc5fc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc348144b2321ceda244a12d648bc5fc2)): ?>
<?php $component = $__componentOriginalc348144b2321ceda244a12d648bc5fc2; ?>
<?php unset($__componentOriginalc348144b2321ceda244a12d648bc5fc2); ?>
<?php endif; ?>
<form class="content" method="POST" enctype="multipart/form-data" action="<?php echo e(route('store_promotion')); ?>">

 
 <nav class="nav--controls">
  <h1 class="table--name">New promotion</h1>
  
  <a class="button button--primary button--centered" tooltip="Back to Promotions" tooltip-top
   href="<?php echo e(route('all_promotions')); ?>">
   <svg>
    <polyline points="15 18 9 12 15 6"></polyline>
   </svg>
  </a>
  <button class="button button--primary button--centered" tooltip="Save promotion" tooltip-left type="submit">
   <svg>
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
    <path d="M9 15l2 2l4 -4" />
   </svg>
  </button>
  <button class="button button--primary button--centered" tooltip="Reset promotion" tooltip-left type="reset">
   <svg>
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
   </svg>
  </button>
 </nav>

 
 <section style="height: calc(100% - 107.5px);" class="tabs__content details__view active">
  <?php echo csrf_field(); ?>

  
  <div class="input__tabs">
   <input type="text" name="name" value="<?php echo e(old('name')); ?>">
   <label>Name</label>
  </div>

  
  <div class="input__tabs">
   <select name="type" value="<?php echo e(old('type')); ?>">
    <option selected value="counter">counter</option>
    <option value="amount">amount</option>
   </select>
   <label>Type</label>
  </div>

  
  <div class="textarea__tabs details__long">
   <textarea name="details"><?php echo e(old('details')); ?></textarea>
   <label>Details</label>
  </div>
  
  <div class="input__tabs">
   <input type="number" name="percent" value="<?php echo e(old('percent')); ?>">
   <label>Percent %</label>
  </div>

  
  <div class="input__tabs">
   <input type="number" name="value" value="<?php echo e(old('value')); ?>">
   <label>Value</label>
  </div>
  <div class="details__checkboxes">

   
   <div class="input__tabs">
    <input type="date" id="start_date" name="start_date" value="<?php echo e(old('start_date')); ?>">
    <label>Start Date</label>
   </div>

   
   <div class="input__tabs">
    <input type="date" id="end_date" name="end_date" value="<?php echo e(old('end_date')); ?>">
    <label>End Date</label>
   </div>
  </div>


  
  <div class="input__tabs">
   <input type="number" min="0" name="cooldown" value="<?php echo e(old('cooldown')); ?>">
   <label>Cooldowm Timer(min)</label>
  </div>
  
  <div class="input__tabs">
   <input type="number" min="0" name="amount" value="<?php echo e(old('amount')); ?>">
   <label>Cart Amount</label>
  </div>

  <div class="input__tabs">
   <input type="number" min="0" name="cookie" value="<?php echo e(old('cookie')); ?>">
   <label>Cookie time(days)</label>
  </div>
  <div class="details__checkboxes">

   
   <div class="checkbox__details ">
    <input type="checkbox" id="active" name="active" value="<?php echo e(old('active')); ?>" />
    <label for="active">Active</label>
   </div>
  </div>

  
  <input class="button button--fill button--secondary details__long" type="submit" value="Add New" name="submit">

  <?php $__errorArgs = ['end_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
   <span class="error <?php $__errorArgs = ['end_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> active <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e($message); ?></span>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  <?php $__errorArgs = ['cart_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
   <span class="error <?php $__errorArgs = ['cart_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> active <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e($message); ?></span>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  <?php $__errorArgs = ['cart_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
   <span class="error <?php $__errorArgs = ['cart_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> active <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e($message); ?></span>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 </section>

</form>
<?php if (isset($component)) { $__componentOriginal90fa163987097e726a46c4e696b505b2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90fa163987097e726a46c4e696b505b2 = $attributes; } ?>
<?php $component = App\View\Components\Dashboardfooter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboardfooter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboardfooter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90fa163987097e726a46c4e696b505b2)): ?>
<?php $attributes = $__attributesOriginal90fa163987097e726a46c4e696b505b2; ?>
<?php unset($__attributesOriginal90fa163987097e726a46c4e696b505b2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90fa163987097e726a46c4e696b505b2)): ?>
<?php $component = $__componentOriginal90fa163987097e726a46c4e696b505b2; ?>
<?php unset($__componentOriginal90fa163987097e726a46c4e696b505b2); ?>
<?php endif; ?>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/admin/add_promotion.blade.php ENDPATH**/ ?>