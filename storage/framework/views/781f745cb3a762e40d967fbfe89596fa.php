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
<?php $component = App\View\Components\Dashboardsidebar::resolve(['active' => __('scripts')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
<form class="content" method="POST" enctype="multipart/form-data" action="<?php echo e(route('add_script')); ?>">

 
 <nav class="nav--controls">
  <h1 class="table--name">Add new custom code</h1>
  
  <a class="button button--primary button--centered" tooltip="Back to Custom codes" tooltip-top
   href="<?php echo e(route('customscripts')); ?>">
   <svg>
    <polyline points="15 18 9 12 15 6"></polyline>
   </svg>
  </a>
  <button class="button button--primary button--centered" tooltip="Save Code" tooltip-left type="submit">
   <svg>
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
    <path d="M9 15l2 2l4 -4" />
   </svg>
  </button>
  <button class="button button--primary button--centered" tooltip="Reset Code" tooltip-left type="reset">
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
   <input type="text" name="name" placeholder=" " required value="<?php echo e(old('name')); ?>">
   <label>Name</label>
  </div>

  
  <div class="input__tabs">
   <select name="type" value="<?php echo e(old('type')); ?>">
    <option selected value="head-top">head-top</option>
    <option value="head-bottom">head-bottom</option>
    <option value="body-top">body-top</option>
    <option value="body-bottom">body-bottom</option>
   </select>
   <label>Code position</label>
  </div>

  
  <div class="details__checkboxes details__long">
   
   <div class="checkbox__details ">
    <input type="checkbox" id="active" name="active" placeholder=" " value="<?php echo e(old('active') ? 'checked' : ''); ?>" />
    <label for="active">Active</label>
   </div>
  </div>

  
  <div class="textarea__tabs details__long">
   <textarea name="content" placeholder=" "><?php echo e(old('content')); ?></textarea>
   <label>Content</label>
  </div>

  
  <input class="button button--fill button--secondary details__long" type="submit" value="Add New" name="submit">
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
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/admin/add_script.blade.php ENDPATH**/ ?>