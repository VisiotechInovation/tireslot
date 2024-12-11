<div>
 <?php if (isset($component)) { $__componentOriginaled294631d37647e445f10fc8c8154197 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled294631d37647e445f10fc8c8154197 = $attributes; } ?>
<?php $component = App\View\Components\StoreAlert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('store-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\StoreAlert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled294631d37647e445f10fc8c8154197)): ?>
<?php $attributes = $__attributesOriginaled294631d37647e445f10fc8c8154197; ?>
<?php unset($__attributesOriginaled294631d37647e445f10fc8c8154197); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled294631d37647e445f10fc8c8154197)): ?>
<?php $component = $__componentOriginaled294631d37647e445f10fc8c8154197; ?>
<?php unset($__componentOriginaled294631d37647e445f10fc8c8154197); ?>
<?php endif; ?>
 <div style="display: none">
  <script>
   window.labels = {

    // name validation
    name_require: <?php if(app()->bound('label_form_name_require')): ?>
     "<?php echo e(app('label_form_name_require')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    name_min: <?php if(app()->bound('label_form_name_min')): ?>
     "<?php echo e(app('label_form_name_min')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    name_max: <?php if(app()->bound('label_form_name_max')): ?>
     "<?php echo e(app('label_form_name_max')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    name_space: <?php if(app()->bound('label_form_name_space')): ?>
     "<?php echo e(app('label_form_name_space')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    name_special: <?php if(app()->bound('label_form_name_special')): ?>
     "<?php echo e(app('label_form_name_special')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    // lastname validation
    lastname_require: <?php if(app()->bound('label_form_lastname_require')): ?>
     "<?php echo e(app('label_form_lastname_require')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    lastname_min: <?php if(app()->bound('label_form_lastname_min')): ?>
     "<?php echo e(app('label_form_lastname_min')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    lastname_max: <?php if(app()->bound('label_form_lastname_max')): ?>
     "<?php echo e(app('label_form_lastname_max')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    lastname_space: <?php if(app()->bound('label_form_lastname_space')): ?>
     "<?php echo e(app('label_form_lastname_space')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    lastname_special: <?php if(app()->bound('label_form_lastname_special')): ?>
     "<?php echo e(app('label_form_lastname_special')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    // email Validation
    email_require: <?php if(app()->bound('label_form_email_require')): ?>
     "<?php echo e(app('label_form_email_require')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    email_min: <?php if(app()->bound('label_form_email_min')): ?>
     "<?php echo e(app('label_form_email_min')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    email_max: <?php if(app()->bound('label_form_email_max')): ?>
     "<?php echo e(app('label_form_email_max')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    email_space: <?php if(app()->bound('label_form_email_space')): ?>
     "<?php echo e(app('label_form_email_space')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    email_valid: <?php if(app()->bound('label_form_email_valid')): ?>
     "<?php echo e(app('label_form_email_valid')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    // phone Validation
    phone_require: <?php if(app()->bound('label_form_phone_require')): ?>
     "<?php echo e(app('label_form_phone_require')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    phone_special: <?php if(app()->bound('label_form_phone_special')): ?>
     "<?php echo e(app('label_form_phone_special')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    phone_dimension: <?php if(app()->bound('label_form_phone_dimension')): ?>
     "<?php echo e(app('label_form_phone_dimension')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    phone_space: <?php if(app()->bound('label_form_phone_space')): ?>
     "<?php echo e(app('label_form_phone_space')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    // address Validation
    address_require: <?php if(app()->bound('label_form_address_require')): ?>
     "<?php echo e(app('label_form_address_require')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    address_min: <?php if(app()->bound('label_form_address_min')): ?>
     "<?php echo e(app('label_form_address_min')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    address_max: <?php if(app()->bound('label_form_address_max')): ?>
     "<?php echo e(app('label_form_address_max')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    address_space: <?php if(app()->bound('label_form_address_space')): ?>
     "<?php echo e(app('label_form_address_space')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    // county Validation
    county_require: <?php if(app()->bound('label_form_county_require')): ?>
     "<?php echo e(app('label_form_county_require')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    county_min: <?php if(app()->bound('label_form_county_min')): ?>
     "<?php echo e(app('label_form_county_min')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    county_max: <?php if(app()->bound('label_form_county_max')): ?>
     "<?php echo e(app('label_form_county_max')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    county_space: <?php if(app()->bound('label_form_county_space')): ?>
     "<?php echo e(app('label_form_county_space')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    // city Validation
    city_require: <?php if(app()->bound('label_form_city_require')): ?>
     "<?php echo e(app('label_form_city_require')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    city_min: <?php if(app()->bound('label_form_city_min')): ?>
     "<?php echo e(app('label_form_city_min')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    city_max: <?php if(app()->bound('label_form_city_max')): ?>
     "<?php echo e(app('label_form_city_max')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    city_space: <?php if(app()->bound('label_form_city_space')): ?>
     "<?php echo e(app('label_form_city_space')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    // company Validation
    company_require: <?php if(app()->bound('label_form_company_require')): ?>
     "<?php echo e(app('label_form_company_require')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    company_space: <?php if(app()->bound('label_form_company_space')): ?>
     "<?php echo e(app('label_form_company_space')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    company_special: <?php if(app()->bound('label_form_company_special')): ?>
     "<?php echo e(app('label_form_company_special')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    // registercode Validation
    code_require: <?php if(app()->bound('label_form_code_require')): ?>
     "<?php echo e(app('label_form_code_require')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    code_space: <?php if(app()->bound('label_form_code_space')): ?>
     "<?php echo e(app('label_form_code_space')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    code_special: <?php if(app()->bound('label_form_code_special')): ?>
     "<?php echo e(app('label_form_code_special')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    // registernumber Validation
    number_require: <?php if(app()->bound('label_form_number_require')): ?>
     "<?php echo e(app('label_form_number_require')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    number_space: <?php if(app()->bound('label_form_number_space')): ?>
     "<?php echo e(app('label_form_number_space')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
    number_special: <?php if(app()->bound('label_form_number_special')): ?>
     "<?php echo e(app('label_form_number_special')); ?>"
    <?php else: ?>
     ""
    <?php endif; ?> ,
   };
  </script>
 </div>

 <?php if($back): ?>
  <!-------------------- Error Message ------------------->
  <section>
   <div class="checkout container">
    <div class="section__header container">
     <h1 class="section__title">
      <?php if(app()->has('label_order_error_title')): ?>
       <?php echo app('label_order_error_title'); ?>

      <?php endif; ?>
     </h1>
     <a class="section__text" href="<?php echo e(url('/')); ?>">
      <?php if(app()->has('label_order_error_description')): ?>
       <?php echo app('label_order_error_description'); ?>

      <?php endif; ?>
     </a>
    </div>
   </div>
  </section>
 <?php else: ?>
  <?php
   if (app()->has('global_numberformat_element')) {
       if (app('global_numberformat_element') === '.') {
           $mill = '.';
           $decimal = ',';
       } else {
           $mill = ',';
           $decimal = '.';
       }
   } else {
       $mill = '.';
       $decimal = ',';
   }
  ?>
  <section>
   <div class="checkout container">
    <!-------------------- Steps-------------------->
    <div class="step__container">
     <div class="step active" data-step="<?php if(app()->has('label_order_step_1')): ?> <?php echo app('label_order_step_1'); ?> <?php endif; ?>">1</div>
     <span class="step__line <?php if($step == 1): ?> half <?php else: ?> full <?php endif; ?>"></span>
     <div class="step <?php if($step > 1 || $step == 3): ?> active <?php endif; ?>"
      data-step="<?php if(app()->has('label_order_step_2')): ?> <?php echo app('label_order_step_2'); ?> <?php endif; ?>">2
     </div>
     <span
      class="step__line <?php if($step == 2): ?> half <?php elseif($step == 3): ?> full <?php endif; ?>"></span>
     <div class="step <?php if($step == 3): ?> active <?php endif; ?>"
      data-step="<?php if(app()->has('label_order_step_3')): ?> <?php echo app('label_order_step_3'); ?> <?php endif; ?>">3
     </div>
    </div>
    <!-------------------- Step First ---------------------->
    <?php if($step == 1): ?>
     <div class="section__header">
      <h2 class="section__title">
       <?php if(app()->has('label_order_1_title')): ?>
        <?php echo app('label_order_1_title'); ?>

       <?php endif; ?>
      </h2>
     </div>
     <div class="checkout__header">
      <div class="checkout__navigation">
       <button class="checkout__button <?php if($individual): ?> active <?php endif; ?>" wire:click="showindividual()">
        <?php if(app()->has('label_order_individual_tag')): ?>
         <?php echo app('label_order_individual_tag'); ?>

        <?php endif; ?>
       </button>
       <button class="checkout__button <?php if($juridic): ?> active <?php endif; ?>" wire:click="showjuridic()">
        <?php if(app()->has('label_order_juridic_tag')): ?>
         <?php echo app('label_order_juridic_tag'); ?>

        <?php endif; ?>
       </button>
      </div>
      <div class="checkout__navigation">
       <button class="checkout__button" wire:click="resetForm">
        <svg>
         <polyline points="1 4 1 10 7 10"></polyline>
         <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>
        </svg>
        <?php if(app()->has('label_order_form_clear')): ?>
         <?php echo app('label_order_form_clear'); ?>

        <?php endif; ?>
       </button>
       <button class="checkout__button checkout__button--confirm"
        <?php if($individual && $individual_identic): ?> onclick="validateIndividual(this)" <?php elseif($individual && !$individual_identic): ?> onclick="validateIndividualIdentic(this)" <?php elseif($juridic && $juridic_identic): ?> onclick="validateJuridic(this)" <?php else: ?> onclick="validateJuridicIdentic(this)" <?php endif; ?>
        wire:click.prevent="next()">
        <?php if(app()->has('label_order_next_step')): ?>
         <?php echo app('label_order_next_step'); ?>

        <?php endif; ?>
        <svg>
         <line x1="5" y1="12" x2="19" y2="12"></line>
         <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
       </button>
      </div>
     </div>
     <!-------------- Individual -------------->
     <div class="checkout__container <?php if($individual): ?> active <?php endif; ?>">
      <div wire:ignore class="checkout__form active">
       <div class="checkout__top">
        <span>1</span>
        <h3>
         <?php if(app()->has('label_order_billing_info')): ?>
          <?php echo app('label_order_billing_info'); ?>

         <?php endif; ?>
        </h3>
       </div>
       <div class="checkout__item checkout__item--required" id="individualShippingFirstNameParent">
        <input type="text" wire:model.defer="individual_billing_first" name="individualShippingFirstName"
         placeholder="<?php if(app()->has('label_order_firstname')): ?> <?php echo app('label_order_firstname'); ?> <?php endif; ?>" autocomplete="given-name"
         required id="individualShippingFirstName">
        <span></span>
        <label for="individualShippingFirstName">
         <?php if(app()->has('label_order_firstname')): ?>
          <?php echo app('label_order_firstname'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item checkout__item--required" id="individualShippingLastNameParent">
        <input type="text" wire:model.defer="individual_billing_last" name="individualShippingLastName"
         placeholder="<?php if(app()->has('label_order_lastname')): ?> <?php echo app('label_order_lastname'); ?> <?php endif; ?>" autocomplete="family-name"
         required id="individualShippingLastName">
        <span></span>
        <label for="individualShippingLastName">
         <?php if(app()->has('label_order_lastname')): ?>
          <?php echo app('label_order_lastname'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item checkout__item--required" id="individualShippingPhoneParent">
        <input type="tel" wire:model.defer="individual_billing_phone" name="individualShippingPhone"
         placeholder="<?php if(app()->has('label_order_phone')): ?> <?php echo app('label_order_phone'); ?> <?php endif; ?>" autocomplete="tel"
         pattern="[0-9]*" inputmode="numeric" required id="individualShippingPhone">
        <span></span>
        <label for="individualShippingPhone">
         <?php if(app()->has('label_order_phone')): ?>
          <?php echo app('label_order_phone'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item checkout__item--required" id="individualShippingEmailParent">
        <input type="email" wire:model.defer="individual_billing_email" name="individualShippingEmail"
         placeholder="<?php if(app()->has('label_order_email')): ?> <?php echo app('label_order_email'); ?> <?php endif; ?>" autocomplete="email" required
         id="individualShippingEmail">
        <span></span>
        <label for="individualShippingEmail">
         <?php if(app()->has('label_order_email')): ?>
          <?php echo app('label_order_email'); ?>

         <?php endif; ?>
        </label>
       </div>
      </div>
      <div wire:ignore class="checkout__form active">
       <div class="checkout__top">
        <span>2</span>
        <h3>
         <?php if(app()->has('label_order_billing_address')): ?>
          <?php echo app('label_order_billing_address'); ?>

         <?php endif; ?>
        </h3>
       </div>
       <div class="checkout__item checkout__item--required" id="individualShippingAddressParent">
        <input type="text" wire:model.defer="individual_billing_address1" name="individualShippingAddress"
         placeholder="<?php if(app()->has('label_order_address1')): ?> <?php echo app('label_order_address1'); ?> <?php endif; ?>" autocomplete="street-address"
         required id="individualShippingAddress">
        <span></span>
        <label for="individualShippingAddress">
         <?php if(app()->has('label_order_address1')): ?>
          <?php echo app('label_order_address1'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item" id="individualShippingAddress2Parent">
        <input type="text" wire:model.defer="individual_billing_address2" name="individualShippingAddress2"
         placeholder="<?php if(app()->has('label_order_address2')): ?> <?php echo app('label_order_address2'); ?> <?php endif; ?>" autocomplete="address-level2"
         id="individualShippingAddress2">
        <span></span>
        <label for="individualShippingAddress2">
         <?php if(app()->has('label_order_address2')): ?>
          <?php echo app('label_order_address2'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <select wire:model.defer="individual_billing_country" class="select" id="individual_billing_country"
        aria-label="select a country">
        <option value="Afghanistan">Afghanistan</option>
        <option value="Åland Islands">Åland Islands</option>
        <option value="Albania">Albania</option>
        <option value="Algeria">Algeria</option>
        <option value="American Samoa">American Samoa</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Anguilla">Anguilla</option>
        <option value="Antarctica">Antarctica</option>
        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
        <option value="Argentina">Argentina</option>
        <option value="Armenia">Armenia</option>
        <option value="Aruba">Aruba</option>
        <option value="Australia">Australia</option>
        <option value="Austria">Austria</option>
        <option value="Azerbaijan">Azerbaijan</option>
        <option value="Bahamas">Bahamas</option>
        <option value="Bahrain">Bahrain</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="Barbados">Barbados</option>
        <option value="Belarus">Belarus</option>
        <option value="Belgium">Belgium</option>
        <option value="Belize">Belize</option>
        <option value="Benin">Benin</option>
        <option value="Bermuda">Bermuda</option>
        <option value="Bhutan">Bhutan</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
        <option value="Botswana">Botswana</option>
        <option value="Bouvet Island">Bouvet Island</option>
        <option value="Brazil">Brazil</option>
        <option value="British Indian Ocean Territory">British Indian Ocean Territory
        </option>
        <option value="Brunei Darussalam">Brunei Darussalam</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="Burkina Faso">Burkina Faso</option>
        <option value="Burundi">Burundi</option>
        <option value="Cambodia">Cambodia</option>
        <option value="Cameroon">Cameroon</option>
        <option value="Canada">Canada</option>
        <option value="Cape Verde">Cape Verde</option>
        <option value="Cayman Islands">Cayman Islands</option>
        <option value="Central African Republic">Central African Republic</option>
        <option value="Chad">Chad</option>
        <option value="Chile">Chile</option>
        <option value="China">China</option>
        <option value="Christmas Island">Christmas Island</option>
        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
        <option value="Colombia">Colombia</option>
        <option value="Comoros">Comoros</option>
        <option value="Congo">Congo</option>
        <option value="Congo, The Democratic Republic of the">Congo, The Democratic
         Republic of the</option>
        <option value="Cook Islands">Cook Islands</option>
        <option value="Costa Rica">Costa Rica</option>
        <option value="Croatia">Croatia</option>
        <option value="Cuba">Cuba</option>
        <option value="Cyprus">Cyprus</option>
        <option value="Czech Republic">Czech Republic</option>
        <option value="Denmark">Denmark</option>
        <option value="Djibouti">Djibouti</option>
        <option value="Dominica">Dominica</option>
        <option value="Dominican Republic">Dominican Republic</option>
        <option value="Ecuador">Ecuador</option>
        <option value="Egypt">Egypt</option>
        <option value="El Salvador">El Salvador</option>
        <option value="Equatorial Guinea">Equatorial Guinea</option>
        <option value="Eritrea">Eritrea</option>
        <option value="Estonia">Estonia</option>
        <option value="Ethiopia">Ethiopia</option>
        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
        <option value="Faroe Islands">Faroe Islands</option>
        <option value="Fiji">Fiji</option>
        <option value="Finland">Finland</option>
        <option value="France">France</option>
        <option value="French Guiana">French Guiana</option>
        <option value="French Polynesia">French Polynesia</option>
        <option value="French Southern Territories">French Southern Territories</option>
        <option value="Gabon">Gabon</option>
        <option value="Gambia">Gambia</option>
        <option value="Georgia">Georgia</option>
        <option value="Germany">Germany</option>
        <option value="Ghana">Ghana</option>
        <option value="Gibraltar">Gibraltar</option>
        <option value="Greece">Greece</option>
        <option value="Greenland">Greenland</option>
        <option value="Grenada">Grenada</option>
        <option value="Guadeloupe">Guadeloupe</option>
        <option value="Guam">Guam</option>
        <option value="Guatemala">Guatemala</option>
        <option value="Guernsey">Guernsey</option>
        <option value="Guinea">Guinea</option>
        <option value="Guinea-Bissau">Guinea-Bissau</option>
        <option value="Guyana">Guyana</option>
        <option value="Haiti">Haiti</option>
        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
        </option>
        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
        </option>
        <option value="Honduras">Honduras</option>
        <option value="Hong Kong">Hong Kong</option>
        <option value="Hungary">Hungary</option>
        <option value="Iceland">Iceland</option>
        <option value="India">India</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of</option>
        <option value="Iraq">Iraq</option>
        <option value="Ireland">Ireland</option>
        <option value="Isle of Man">Isle of Man</option>
        <option value="Israel">Israel</option>
        <option value="Italy">Italy</option>
        <option value="Jamaica">Jamaica</option>
        <option value="Japan">Japan</option>
        <option value="Jersey">Jersey</option>
        <option value="Jordan">Jordan</option>
        <option value="Kazakhstan">Kazakhstan</option>
        <option value="Kenya">Kenya</option>
        <option value="Kiribati">Kiribati</option>
        <option value="Korea, Republic of">Korea, Republic of</option>
        <option value="Kuwait">Kuwait</option>
        <option value="Kyrgyzstan">Kyrgyzstan</option>
        <option value="Latvia">Latvia</option>
        <option value="Lebanon">Lebanon</option>
        <option value="Lesotho">Lesotho</option>
        <option value="Liberia">Liberia</option>
        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
        <option value="Liechtenstein">Liechtenstein</option>
        <option value="Lithuania">Lithuania</option>
        <option value="Luxembourg">Luxembourg</option>
        <option value="Macao">Macao</option>
        <option value="North Macedonia">North Macedonia</option>
        <option value="Madagascar">Madagascar</option>
        <option value="Malawi">Malawi</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Maldives">Maldives</option>
        <option value="Mali">Mali</option>
        <option value="Malta">Malta</option>
        <option value="Marshall Islands">Marshall Islands</option>
        <option value="Martinique">Martinique</option>
        <option value="Mauritania">Mauritania</option>
        <option value="Mauritius">Mauritius</option>
        <option value="Mayotte">Mayotte</option>
        <option value="Mexico">Mexico</option>
        <option value="Micronesia, Federated States of">Micronesia, Federated States of
        </option>
        <option value="Republic of Moldova">Republic of Moldova</option>
        <option value="Monaco">Monaco</option>
        <option value="Mongolia">Mongolia</option>
        <option value="Montserrat">Montserrat</option>
        <option value="Morocco">Morocco</option>
        <option value="Mozambique">Mozambique</option>
        <option value="Myanmar">Myanmar</option>
        <option value="Namibia">Namibia</option>
        <option value="Nauru">Nauru</option>
        <option value="Nepal">Nepal</option>
        <option value="Netherlands">Netherlands</option>
        <option value="Netherlands Antilles">Netherlands Antilles</option>
        <option value="New Caledonia">New Caledonia</option>
        <option value="New Zealand">New Zealand</option>
        <option value="Nicaragua">Nicaragua</option>
        <option value="Niger">Niger</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Niue">Niue</option>
        <option value="Norfolk Island">Norfolk Island</option>
        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
        <option value="Norway">Norway</option>
        <option value="Oman">Oman</option>
        <option value="Pakistan">Pakistan</option>
        <option value="Palau">Palau</option>
        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
        </option>
        <option value="Panama">Panama</option>
        <option value="Papua New Guinea">Papua New Guinea</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Peru">Peru</option>
        <option value="Philippines">Philippines</option>
        <option value="Pitcairn Islands">Pitcairn Islands</option>
        <option value="Poland">Poland</option>
        <option value="Portugal">Portugal</option>
        <option value="Puerto Rico">Puerto Rico</option>
        <option value="Qatar">Qatar</option>
        <option value="Reunion">Reunion</option>
        <option value="Romania">Romania</option>
        <option value="Russian Federation">Russian Federation</option>
        <option value="Rwanda">Rwanda</option>
        <option value="Saint Helena">Saint Helena</option>
        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
        <option value="Saint Lucia">Saint Lucia</option>
        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
        </option>
        <option value="Samoa">Samoa</option>
        <option value="San Marino">San Marino</option>
        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
        <option value="Saudi Arabia">Saudi Arabia</option>
        <option value="Senegal">Senegal</option>
        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
        <option value="Seychelles">Seychelles</option>
        <option value="Sierra Leone">Sierra Leone</option>
        <option value="Singapore">Singapore</option>
        <option value="Slovakia">Slovakia</option>
        <option value="Slovenia">Slovenia</option>
        <option value="Solomon Islands">Solomon Islands</option>
        <option value="Somalia">Somalia</option>
        <option value="South Africa">South Africa</option>
        <option value="South Georgia and the South Sandwich Islands">South Georgia and the
         South Sandwich Islands</option>
        <option value="Spain">Spain</option>
        <option value="Sri Lanka">Sri Lanka</option>
        <option value="Sudan">Sudan</option>
        <option value="Suriname">Suriname</option>
        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
        <option value="Swaziland">Swaziland</option>
        <option value="Sweden">Sweden</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
        <option value="Taiwan">Taiwan</option>
        <option value="Tajikistan">Tajikistan</option>
        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
        <option value="Thailand">Thailand</option>
        <option value="Timor-Leste">Timor-Leste</option>
        <option value="Togo">Togo</option>
        <option value="Tokelau">Tokelau</option>
        <option value="Tonga">Tonga</option>
        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
        <option value="Tunisia">Tunisia</option>
        <option value="Turkey">Turkey</option>
        <option value="Turkmenistan">Turkmenistan</option>
        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
        <option value="Tuvalu">Tuvalu</option>
        <option value="Uganda">Uganda</option>
        <option value="Ukraine">Ukraine</option>
        <option value="United Arab Emirates">United Arab Emirates</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="United States">United States</option>
        <option value="United States Minor Outlying Islands">United States Minor Outlying
         Islands</option>
        <option value="Uruguay">Uruguay</option>
        <option value="Uzbekistan">Uzbekistan</option>
        <option value="Vanuatu">Vanuatu</option>
        <option value="Venezuela">Venezuela</option>
        <option value="Vietnam">Vietnam</option>
        <option value="Virgin Islands, British">Virgin Islands, British</option>
        <option value="Virgin Islands, U.S">Virgin Islands, U.S"</option>
        <option value="Wallis and Futuna">Wallis and Futuna</option>
        <option value="Western Sahara">Western Sahara</option>
        <option value="Yemen">Yemen</option>
        <option value="Zambia">Zambia</option>
        <option value="Zimbabwe">Zimbabwe</option>
       </select>
       <!---------------------------------------------------->
       <div class="checkout__item checkout__item--required" id="individualShippingCountyParent">
        <input type="text" wire:model.defer="individual_billing_county" name="individualShippingCounty"
         placeholder="<?php if(app()->has('label_order_county')): ?> <?php echo app('label_order_county'); ?> <?php endif; ?>" autocomplete="county"
         required id="individualShippingCounty">
        <span></span>
        <label for="individualShippingCounty">
         <?php if(app()->has('label_order_county')): ?>
          <?php echo app('label_order_county'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item checkout__item--required" id="individualShippingCityParent">
        <input type="text" wire:model.defer="individual_billing_city" name="individualShippingCity"
         placeholder="<?php if(app()->has('label_order_city')): ?> <?php echo app('label_order_city'); ?> <?php endif; ?>" autocomplete="city"
         required id="individualShippingCity">
        <span></span>
        <label for="individualShippingCity">
         <?php if(app()->has('label_order_city')): ?>
          <?php echo app('label_order_city'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item checkout__item--required" id="individualShippingPostalParent">
        <input type="text" wire:model.defer="individual_billing_zipcode" name="individualShippingPostal"
         placeholder="<?php if(app()->has('label_order_zipcode')): ?> <?php echo app('label_order_zipcode'); ?> <?php endif; ?>" autocomplete="postal-code"
          id="individualShippingPostal">
        <span></span>
        <label for="individualShippingPostal">
         <?php if(app()->has('label_order_zipcode')): ?>
          <?php echo app('label_order_zipcode'); ?>

         <?php endif; ?>
        </label>
       </div>
      </div>
      <label class="checkout__checkbox">
       <input type="checkbox" wire:model="individual_identic" id="individual_identic" name="individual_identic">
       <span>
        <?php if(app()->has('label_order_identic')): ?>
         <?php echo app('label_order_identic'); ?>

        <?php endif; ?>
       </span>
      </label>
      <div class="checkout__form <?php if(!$individual_identic && $individual): ?> active <?php endif; ?>">
       <div class="checkout__top">
        <span>3</span>
        <h3>
         <?php if(app()->has('label_order_shipping_info')): ?>
          <?php echo app('label_order_shipping_info'); ?>

         <?php endif; ?>
        </h3>
       </div>
       <div wire:ignore class="checkout__item checkout__item--required" id="individualBillingFirstNameParent">
        <input type="text" wire:model.defer="individual_shipping_first" name="individualBillingFirstName"
         placeholder="<?php if(app()->has('label_order_firstname')): ?> <?php echo app('label_order_firstname'); ?> <?php endif; ?>" autocomplete="given-name"
         required id="individualBillingFirstName">
        <span></span>
        <label for="individualBillingFirstName">
         <?php if(app()->has('label_order_firstname')): ?>
          <?php echo app('label_order_firstname'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div wire:ignore class="checkout__item checkout__item--required" id="individualBillingLastNameParent">
        <input type="text" wire:model.defer="individual_shipping_last" name="individualBillingLastName"
         placeholder="<?php if(app()->has('label_order_lastname')): ?> <?php echo app('label_order_lastname'); ?> <?php endif; ?>" autocomplete="family-name"
         required id="individualBillingLastName">
        <span></span>
        <label for="individualBillingLastName">
         <?php if(app()->has('label_order_lastname')): ?>
          <?php echo app('label_order_lastname'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div wire:ignore class="checkout__item checkout__item--required" id="individualBillingPhoneParent">
        <input type="tel" wire:model.defer="individual_shipping_phone" name="individualBillingPhone"
         placeholder="<?php if(app()->has('label_order_phone')): ?> <?php echo app('label_order_phone'); ?> <?php endif; ?>" autocomplete="tel"
         pattern="[0-9]*" inputmode="numeric" required id="individualBillingPhone">
        <span></span>
        <label for="individualBillingPhone">
         <?php if(app()->has('label_order_phone')): ?>
          <?php echo app('label_order_phone'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div wire:ignore class="checkout__item checkout__item--required" id="individualBillingEmailParent">
        <input type="email" wire:model="individual_shipping_email" name="individualBillingEmail"
         placeholder="<?php if(app()->has('label_order_email')): ?> <?php echo app('label_order_email'); ?> <?php endif; ?>" autocomplete="email"
         required id="individualBillingEmail">
        <span></span>
        <label for="individualBillingEmail">
         <?php if(app()->has('label_order_email')): ?>
          <?php echo app('label_order_email'); ?>

         <?php endif; ?>
        </label>
       </div>
      </div>
      <div class="checkout__form <?php if(!$individual_identic && $individual): ?> active <?php endif; ?>">
       <div class="checkout__top">
        <span>4</span>
        <h3>
         <?php if(app()->has('label_order_shipping_address')): ?>
          <?php echo app('label_order_shipping_address'); ?>

         <?php endif; ?>
        </h3>
       </div>
       <div wire:ignore class="checkout__item checkout__item--required" id="individualBillingAddressParent">
        <input type="text" wire:model.defer="individual_shipping_address1" name="individualBillingAddress"
         placeholder="<?php if(app()->has('label_order_address1')): ?> <?php echo app('label_order_address1'); ?> <?php endif; ?>"
         autocomplete="street-address" required id="individualBillingAddress">
        <span></span>
        <label for="individualBillingAddress">
         <?php if(app()->has('label_order_address1')): ?>
          <?php echo app('label_order_address1'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div wire:ignore class="checkout__item" id="individualBillingAddress2Parent">
        <input type="text" wire:model.defer="individual_shipping_address2" name="individualBillingAddress2"
         placeholder="<?php if(app()->has('label_order_address2')): ?> <?php echo app('label_order_address2'); ?> <?php endif; ?>"
         autocomplete="address-level2" id="individualBillingAddress2">
        <span></span>
        <label for="individualBillingAddress2">
         <?php if(app()->has('label_order_address2')): ?>
          <?php echo app('label_order_address2'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <select wire:ignore wire:model="individual_shipping_country" class="select" id="individual_shipping_country"
        aria-label="select a country">
        <option value="Afghanistan">Afghanistan</option>
        <option value="Åland Islands">Åland Islands</option>
        <option value="Albania">Albania</option>
        <option value="Algeria">Algeria</option>
        <option value="American Samoa">American Samoa</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Anguilla">Anguilla</option>
        <option value="Antarctica">Antarctica</option>
        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
        <option value="Argentina">Argentina</option>
        <option value="Armenia">Armenia</option>
        <option value="Aruba">Aruba</option>
        <option value="Australia">Australia</option>
        <option value="Austria">Austria</option>
        <option value="Azerbaijan">Azerbaijan</option>
        <option value="Bahamas">Bahamas</option>
        <option value="Bahrain">Bahrain</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="Barbados">Barbados</option>
        <option value="Belarus">Belarus</option>
        <option value="Belgium">Belgium</option>
        <option value="Belize">Belize</option>
        <option value="Benin">Benin</option>
        <option value="Bermuda">Bermuda</option>
        <option value="Bhutan">Bhutan</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
        <option value="Botswana">Botswana</option>
        <option value="Bouvet Island">Bouvet Island</option>
        <option value="Brazil">Brazil</option>
        <option value="British Indian Ocean Territory">British Indian Ocean Territory
        </option>
        <option value="Brunei Darussalam">Brunei Darussalam</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="Burkina Faso">Burkina Faso</option>
        <option value="Burundi">Burundi</option>
        <option value="Cambodia">Cambodia</option>
        <option value="Cameroon">Cameroon</option>
        <option value="Canada">Canada</option>
        <option value="Cape Verde">Cape Verde</option>
        <option value="Cayman Islands">Cayman Islands</option>
        <option value="Central African Republic">Central African Republic</option>
        <option value="Chad">Chad</option>
        <option value="Chile">Chile</option>
        <option value="China">China</option>
        <option value="Christmas Island">Christmas Island</option>
        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
        <option value="Colombia">Colombia</option>
        <option value="Comoros">Comoros</option>
        <option value="Congo">Congo</option>
        <option value="Congo, The Democratic Republic of the">Congo, The Democratic
         Republic of the</option>
        <option value="Cook Islands">Cook Islands</option>
        <option value="Costa Rica">Costa Rica</option>
        <option value="Croatia">Croatia</option>
        <option value="Cuba">Cuba</option>
        <option value="Cyprus">Cyprus</option>
        <option value="Czech Republic">Czech Republic</option>
        <option value="Denmark">Denmark</option>
        <option value="Djibouti">Djibouti</option>
        <option value="Dominica">Dominica</option>
        <option value="Dominican Republic">Dominican Republic</option>
        <option value="Ecuador">Ecuador</option>
        <option value="Egypt">Egypt</option>
        <option value="El Salvador">El Salvador</option>
        <option value="Equatorial Guinea">Equatorial Guinea</option>
        <option value="Eritrea">Eritrea</option>
        <option value="Estonia">Estonia</option>
        <option value="Ethiopia">Ethiopia</option>
        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
        <option value="Faroe Islands">Faroe Islands</option>
        <option value="Fiji">Fiji</option>
        <option value="Finland">Finland</option>
        <option value="France">France</option>
        <option value="French Guiana">French Guiana</option>
        <option value="French Polynesia">French Polynesia</option>
        <option value="French Southern Territories">French Southern Territories</option>
        <option value="Gabon">Gabon</option>
        <option value="Gambia">Gambia</option>
        <option value="Georgia">Georgia</option>
        <option value="Germany">Germany</option>
        <option value="Ghana">Ghana</option>
        <option value="Gibraltar">Gibraltar</option>
        <option value="Greece">Greece</option>
        <option value="Greenland">Greenland</option>
        <option value="Grenada">Grenada</option>
        <option value="Guadeloupe">Guadeloupe</option>
        <option value="Guam">Guam</option>
        <option value="Guatemala">Guatemala</option>
        <option value="Guernsey">Guernsey</option>
        <option value="Guinea">Guinea</option>
        <option value="Guinea-Bissau">Guinea-Bissau</option>
        <option value="Guyana">Guyana</option>
        <option value="Haiti">Haiti</option>
        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
        </option>
        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
        </option>
        <option value="Honduras">Honduras</option>
        <option value="Hong Kong">Hong Kong</option>
        <option value="Hungary">Hungary</option>
        <option value="Iceland">Iceland</option>
        <option value="India">India</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of</option>
        <option value="Iraq">Iraq</option>
        <option value="Ireland">Ireland</option>
        <option value="Isle of Man">Isle of Man</option>
        <option value="Israel">Israel</option>
        <option value="Italy">Italy</option>
        <option value="Jamaica">Jamaica</option>
        <option value="Japan">Japan</option>
        <option value="Jersey">Jersey</option>
        <option value="Jordan">Jordan</option>
        <option value="Kazakhstan">Kazakhstan</option>
        <option value="Kenya">Kenya</option>
        <option value="Kiribati">Kiribati</option>
        <option value="Korea, Republic of">Korea, Republic of</option>
        <option value="Kuwait">Kuwait</option>
        <option value="Kyrgyzstan">Kyrgyzstan</option>
        <option value="Latvia">Latvia</option>
        <option value="Lebanon">Lebanon</option>
        <option value="Lesotho">Lesotho</option>
        <option value="Liberia">Liberia</option>
        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
        <option value="Liechtenstein">Liechtenstein</option>
        <option value="Lithuania">Lithuania</option>
        <option value="Luxembourg">Luxembourg</option>
        <option value="Macao">Macao</option>
        <option value="North Macedonia">North Macedonia</option>
        <option value="Madagascar">Madagascar</option>
        <option value="Malawi">Malawi</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Maldives">Maldives</option>
        <option value="Mali">Mali</option>
        <option value="Malta">Malta</option>
        <option value="Marshall Islands">Marshall Islands</option>
        <option value="Martinique">Martinique</option>
        <option value="Mauritania">Mauritania</option>
        <option value="Mauritius">Mauritius</option>
        <option value="Mayotte">Mayotte</option>
        <option value="Mexico">Mexico</option>
        <option value="Micronesia, Federated States of">Micronesia, Federated States of
        </option>
        <option value="Republic of Moldova">Republic of Moldova</option>
        <option value="Monaco">Monaco</option>
        <option value="Mongolia">Mongolia</option>
        <option value="Montserrat">Montserrat</option>
        <option value="Morocco">Morocco</option>
        <option value="Mozambique">Mozambique</option>
        <option value="Myanmar">Myanmar</option>
        <option value="Namibia">Namibia</option>
        <option value="Nauru">Nauru</option>
        <option value="Nepal">Nepal</option>
        <option value="Netherlands">Netherlands</option>
        <option value="Netherlands Antilles">Netherlands Antilles</option>
        <option value="New Caledonia">New Caledonia</option>
        <option value="New Zealand">New Zealand</option>
        <option value="Nicaragua">Nicaragua</option>
        <option value="Niger">Niger</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Niue">Niue</option>
        <option value="Norfolk Island">Norfolk Island</option>
        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
        <option value="Norway">Norway</option>
        <option value="Oman">Oman</option>
        <option value="Pakistan">Pakistan</option>
        <option value="Palau">Palau</option>
        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
        </option>
        <option value="Panama">Panama</option>
        <option value="Papua New Guinea">Papua New Guinea</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Peru">Peru</option>
        <option value="Philippines">Philippines</option>
        <option value="Pitcairn Islands">Pitcairn Islands</option>
        <option value="Poland">Poland</option>
        <option value="Portugal">Portugal</option>
        <option value="Puerto Rico">Puerto Rico</option>
        <option value="Qatar">Qatar</option>
        <option value="Reunion">Reunion</option>
        <option value="Romania">Romania</option>
        <option value="Russian Federation">Russian Federation</option>
        <option value="Rwanda">Rwanda</option>
        <option value="Saint Helena">Saint Helena</option>
        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
        <option value="Saint Lucia">Saint Lucia</option>
        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
        </option>
        <option value="Samoa">Samoa</option>
        <option value="San Marino">San Marino</option>
        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
        <option value="Saudi Arabia">Saudi Arabia</option>
        <option value="Senegal">Senegal</option>
        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
        <option value="Seychelles">Seychelles</option>
        <option value="Sierra Leone">Sierra Leone</option>
        <option value="Singapore">Singapore</option>
        <option value="Slovakia">Slovakia</option>
        <option value="Slovenia">Slovenia</option>
        <option value="Solomon Islands">Solomon Islands</option>
        <option value="Somalia">Somalia</option>
        <option value="South Africa">South Africa</option>
        <option value="South Georgia and the South Sandwich Islands">South Georgia and the
         South Sandwich Islands</option>
        <option value="Spain">Spain</option>
        <option value="Sri Lanka">Sri Lanka</option>
        <option value="Sudan">Sudan</option>
        <option value="Suriname">Suriname</option>
        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
        <option value="Swaziland">Swaziland</option>
        <option value="Sweden">Sweden</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
        <option value="Taiwan">Taiwan</option>
        <option value="Tajikistan">Tajikistan</option>
        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
        <option value="Thailand">Thailand</option>
        <option value="Timor-Leste">Timor-Leste</option>
        <option value="Togo">Togo</option>
        <option value="Tokelau">Tokelau</option>
        <option value="Tonga">Tonga</option>
        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
        <option value="Tunisia">Tunisia</option>
        <option value="Turkey">Turkey</option>
        <option value="Turkmenistan">Turkmenistan</option>
        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
        <option value="Tuvalu">Tuvalu</option>
        <option value="Uganda">Uganda</option>
        <option value="Ukraine">Ukraine</option>
        <option value="United Arab Emirates">United Arab Emirates</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="United States">United States</option>
        <option value="United States Minor Outlying Islands">United States Minor Outlying
         Islands</option>
        <option value="Uruguay">Uruguay</option>
        <option value="Uzbekistan">Uzbekistan</option>
        <option value="Vanuatu">Vanuatu</option>
        <option value="Venezuela">Venezuela</option>
        <option value="Vietnam">Vietnam</option>
        <option value="Virgin Islands, British">Virgin Islands, British</option>
        <option value="Virgin Islands, U.S">Virgin Islands, U.S"</option>
        <option value="Wallis and Futuna">Wallis and Futuna</option>
        <option value="Western Sahara">Western Sahara</option>
        <option value="Yemen">Yemen</option>
        <option value="Zambia">Zambia</option>
        <option value="Zimbabwe">Zimbabwe</option>
       </select>
       <!---------------------------------------------------->
       <div wire:ignore class="checkout__item checkout__item--required" id="individualBillingCountyParent">
        <input type="text" wire:model.defer="individual_shipping_county" name="individualBillingCounty"
         placeholder="<?php if(app()->has('label_order_county')): ?> <?php echo app('label_order_county'); ?> <?php endif; ?>" autocomplete="county"
         required id="individualBillingCounty">
        <span></span>
        <label for="individualBillingCounty">
         <?php if(app()->has('label_order_county')): ?>
          <?php echo app('label_order_county'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div wire:ignore class="checkout__item checkout__item--required" id="individualBillingCityParent">
        <input type="text" wire:model.defer="individual_shipping_city" name="individualBillingCity"
         placeholder="<?php if(app()->has('label_order_city')): ?> <?php echo app('label_order_city'); ?> <?php endif; ?>" autocomplete="off"
         required id="individualBillingCity">
        <span></span>
        <label for="individualBillingCity">
         <?php if(app()->has('label_order_city')): ?>
          <?php echo app('label_order_city'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div wire:ignore class="checkout__item checkout__item--required" id="individualBillingPostalParent">
        <input type="text" wire:model.defer="individual_shipping_zipcode" name="individualBillingPostal"
         placeholder="<?php if(app()->has('label_order_zipcode')): ?> <?php echo app('label_order_zipcode'); ?> <?php endif; ?>" autocomplete="postal-code"
          id="individualBillingPostal">
        <span></span>
        <label for="individualBillingPostal">
         <?php if(app()->has('label_order_zipcode')): ?>
          <?php echo app('label_order_zipcode'); ?>

         <?php endif; ?>
        </label>
       </div>
      </div>
     </div>
     <!-------------- Juridic -------------->
     <div class="checkout__container <?php if($juridic): ?> active <?php endif; ?>">
      <div wire:ignore class="checkout__form active">
       <div class="checkout__top">
        <span>1</span>
        <h3>
         <?php if(app()->has('label_order_billing_info_juridic')): ?>
          <?php echo app('label_order_billing_info_juridic'); ?>

         <?php endif; ?>
        </h3>
       </div>
       <div class="checkout__item checkout__item--required" id="juridicShippingFirstNameParent">
        <input type="text" wire:model.defer="juridic_billing_first" name="juridicShippingFirstName"
         placeholder="<?php if(app()->has('label_order_firstname')): ?> <?php echo app('label_order_firstname'); ?> <?php endif; ?>" autocomplete="given-name"
         required id="juridicShippingFirstName">
        <span></span>
        <label for="juridicShippingFirstName">
         <?php if(app()->has('label_order_firstname')): ?>
          <?php echo app('label_order_firstname'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item checkout__item--required" id="juridicShippingLastNameParent">
        <input type="text" wire:model.defer="juridic_billing_last" name="juridicShippingLastName"
         placeholder="<?php if(app()->has('label_order_lastname')): ?> <?php echo app('label_order_lastname'); ?> <?php endif; ?>" autocomplete="family-name"
         required id="juridicShippingLastName">
        <span></span>
        <label for="juridicShippingLastName">
         <?php if(app()->has('label_order_lastname')): ?>
          <?php echo app('label_order_lastname'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item checkout__item--required" id="juridicShippingPhoneParent">
        <input type="tel" wire:model.defer="juridic_billing_phone" name="juridicShippingPhone"
         placeholder="<?php if(app()->has('label_order_phone')): ?> <?php echo app('label_order_phone'); ?> <?php endif; ?>" autocomplete="tel"
         pattern="[0-9]*" inputmode="numeric" required id="juridicShippingPhone">
        <span></span>
        <label for="juridicShippingPhone">
         <?php if(app()->has('label_order_phone')): ?>
          <?php echo app('label_order_phone'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item checkout__item--required" id="juridicShippingEmailParent">
        <input type="email" wire:model.defer="juridic_billing_email" name="juridicShippingEmail"
         placeholder="<?php if(app()->has('label_order_email')): ?> <?php echo app('label_order_email'); ?> <?php endif; ?>" autocomplete="email"
         required id="juridicShippingEmail">
        <span></span>
        <label for="juridicShippingEmail">
         <?php if(app()->has('label_order_email')): ?>
          <?php echo app('label_order_email'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item checkout__item--required" id="companyNameParent">
        <input type="text" wire:model.defer="juridic_billing_company_name" name="companyName"
         placeholder="<?php if(app()->has('label_order_company_name')): ?> <?php echo app('label_order_company_name'); ?> <?php endif; ?>"
         autocomplete="organization" required id="companyName">
        <span></span>
        <label for="companyName">
         <?php if(app()->has('label_order_company_name')): ?>
          <?php echo app('label_order_company_name'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item checkout__item--required" id="registerCodeParent">
        <input type="text" wire:model.defer="juridic_billing_registration_code" name="registerCode"
         placeholder="<?php if(app()->has('label_order_register_code')): ?> <?php echo app('label_order_register_code'); ?> <?php endif; ?>" autocomplete="off"
         required id="registerCode">
        <span></span>
        <label for="registerCode">
         <?php if(app()->has('label_order_register_code')): ?>
          <?php echo app('label_order_register_code'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item checkout__item--required" id="registerNumberParent">
        <input type="text" wire:model.defer="juridic_billing_registration_number" name="registerNumber"
         placeholder="<?php if(app()->has('label_order_register_number')): ?> <?php echo app('label_order_register_number'); ?> <?php endif; ?>"
         autocomplete="organization-number" required id="registerNumber">
        <span></span>
        <label for="registerNumber">
         <?php if(app()->has('label_order_register_number')): ?>
          <?php echo app('label_order_register_number'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item" id="bankNameParent">
        <input type="text" wire:model.defer="juridic_billing_bank" name="bankName"
         placeholder="<?php if(app()->has('label_order_bankname')): ?> <?php echo app('label_order_bankname'); ?> <?php endif; ?>" autocomplete="off"
         id="bankName">
        <span></span>
        <label for="bankName">
         <?php if(app()->has('label_order_bankname')): ?>
          <?php echo app('label_order_bankname'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item" id="IBANParent">
        <input type="text" wire:model.defer="juridic_billing_account" name="IBAN"
         placeholder="<?php if(app()->has('label_order_iban')): ?> <?php echo app('label_order_iban'); ?> <?php endif; ?>" autocomplete="IBAN"
         id="IBAN">
        <span></span>
        <label for="IBAN">
         <?php if(app()->has('label_order_iban')): ?>
          <?php echo app('label_order_iban'); ?>

         <?php endif; ?>
        </label>
       </div>
      </div>
      <div wire:ignore class="checkout__form active">
       <div class="checkout__top">
        <span>2</span>
        <h3>
         <?php if(app()->has('label_order_billing_address')): ?>
          <?php echo app('label_order_billing_address'); ?>

         <?php endif; ?>
        </h3>
       </div>
       <div class="checkout__item checkout__item--required" id="juridicShippingAddressParent">
        <input type="text" wire:model.defer="juridic_billing_address1" name="juridicShippingAddress"
         placeholder="<?php if(app()->has('label_order_address1')): ?> <?php echo app('label_order_address1'); ?> <?php endif; ?>"
         autocomplete="street-address" required id="juridicShippingAddress">
        <span></span>
        <label for="juridicShippingAddress">
         <?php if(app()->has('label_order_address1')): ?>
          <?php echo app('label_order_address1'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item" id="juridicShippingAddress2Parent">
        <input type="text" wire:model.defer="juridic_billing_address2" name="juridicShippingAddress2"
         placeholder="<?php if(app()->has('label_order_address2')): ?> <?php echo app('label_order_address2'); ?> <?php endif; ?>"
         autocomplete="address-level2" id="juridicShippingAddress2">
        <span></span>
        <label for="juridicShippingAddress2">
         <?php if(app()->has('label_order_address2')): ?>
          <?php echo app('label_order_address2'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <select wire:model.defer="juridic_billing_country" class="select" id="juridic_billing_country"
        aria-label="select a country">
        <option value="Afghanistan">Afghanistan</option>
        <option value="Åland Islands">Åland Islands</option>
        <option value="Albania">Albania</option>
        <option value="Algeria">Algeria</option>
        <option value="American Samoa">American Samoa</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Anguilla">Anguilla</option>
        <option value="Antarctica">Antarctica</option>
        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
        <option value="Argentina">Argentina</option>
        <option value="Armenia">Armenia</option>
        <option value="Aruba">Aruba</option>
        <option value="Australia">Australia</option>
        <option value="Austria">Austria</option>
        <option value="Azerbaijan">Azerbaijan</option>
        <option value="Bahamas">Bahamas</option>
        <option value="Bahrain">Bahrain</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="Barbados">Barbados</option>
        <option value="Belarus">Belarus</option>
        <option value="Belgium">Belgium</option>
        <option value="Belize">Belize</option>
        <option value="Benin">Benin</option>
        <option value="Bermuda">Bermuda</option>
        <option value="Bhutan">Bhutan</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
        <option value="Botswana">Botswana</option>
        <option value="Bouvet Island">Bouvet Island</option>
        <option value="Brazil">Brazil</option>
        <option value="British Indian Ocean Territory">British Indian Ocean Territory
        </option>
        <option value="Brunei Darussalam">Brunei Darussalam</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="Burkina Faso">Burkina Faso</option>
        <option value="Burundi">Burundi</option>
        <option value="Cambodia">Cambodia</option>
        <option value="Cameroon">Cameroon</option>
        <option value="Canada">Canada</option>
        <option value="Cape Verde">Cape Verde</option>
        <option value="Cayman Islands">Cayman Islands</option>
        <option value="Central African Republic">Central African Republic</option>
        <option value="Chad">Chad</option>
        <option value="Chile">Chile</option>
        <option value="China">China</option>
        <option value="Christmas Island">Christmas Island</option>
        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
        <option value="Colombia">Colombia</option>
        <option value="Comoros">Comoros</option>
        <option value="Congo">Congo</option>
        <option value="Congo, The Democratic Republic of the">Congo, The Democratic
         Republic of the</option>
        <option value="Cook Islands">Cook Islands</option>
        <option value="Costa Rica">Costa Rica</option>
        <option value="Croatia">Croatia</option>
        <option value="Cuba">Cuba</option>
        <option value="Cyprus">Cyprus</option>
        <option value="Czech Republic">Czech Republic</option>
        <option value="Denmark">Denmark</option>
        <option value="Djibouti">Djibouti</option>
        <option value="Dominica">Dominica</option>
        <option value="Dominican Republic">Dominican Republic</option>
        <option value="Ecuador">Ecuador</option>
        <option value="Egypt">Egypt</option>
        <option value="El Salvador">El Salvador</option>
        <option value="Equatorial Guinea">Equatorial Guinea</option>
        <option value="Eritrea">Eritrea</option>
        <option value="Estonia">Estonia</option>
        <option value="Ethiopia">Ethiopia</option>
        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
        <option value="Faroe Islands">Faroe Islands</option>
        <option value="Fiji">Fiji</option>
        <option value="Finland">Finland</option>
        <option value="France">France</option>
        <option value="French Guiana">French Guiana</option>
        <option value="French Polynesia">French Polynesia</option>
        <option value="French Southern Territories">French Southern Territories</option>
        <option value="Gabon">Gabon</option>
        <option value="Gambia">Gambia</option>
        <option value="Georgia">Georgia</option>
        <option value="Germany">Germany</option>
        <option value="Ghana">Ghana</option>
        <option value="Gibraltar">Gibraltar</option>
        <option value="Greece">Greece</option>
        <option value="Greenland">Greenland</option>
        <option value="Grenada">Grenada</option>
        <option value="Guadeloupe">Guadeloupe</option>
        <option value="Guam">Guam</option>
        <option value="Guatemala">Guatemala</option>
        <option value="Guernsey">Guernsey</option>
        <option value="Guinea">Guinea</option>
        <option value="Guinea-Bissau">Guinea-Bissau</option>
        <option value="Guyana">Guyana</option>
        <option value="Haiti">Haiti</option>
        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
        </option>
        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
        </option>
        <option value="Honduras">Honduras</option>
        <option value="Hong Kong">Hong Kong</option>
        <option value="Hungary">Hungary</option>
        <option value="Iceland">Iceland</option>
        <option value="India">India</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of</option>
        <option value="Iraq">Iraq</option>
        <option value="Ireland">Ireland</option>
        <option value="Isle of Man">Isle of Man</option>
        <option value="Israel">Israel</option>
        <option value="Italy">Italy</option>
        <option value="Jamaica">Jamaica</option>
        <option value="Japan">Japan</option>
        <option value="Jersey">Jersey</option>
        <option value="Jordan">Jordan</option>
        <option value="Kazakhstan">Kazakhstan</option>
        <option value="Kenya">Kenya</option>
        <option value="Kiribati">Kiribati</option>
        <option value="Korea, Republic of">Korea, Republic of</option>
        <option value="Kuwait">Kuwait</option>
        <option value="Kyrgyzstan">Kyrgyzstan</option>
        <option value="Latvia">Latvia</option>
        <option value="Lebanon">Lebanon</option>
        <option value="Lesotho">Lesotho</option>
        <option value="Liberia">Liberia</option>
        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
        <option value="Liechtenstein">Liechtenstein</option>
        <option value="Lithuania">Lithuania</option>
        <option value="Luxembourg">Luxembourg</option>
        <option value="Macao">Macao</option>
        <option value="North Macedonia">North Macedonia</option>
        <option value="Madagascar">Madagascar</option>
        <option value="Malawi">Malawi</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Maldives">Maldives</option>
        <option value="Mali">Mali</option>
        <option value="Malta">Malta</option>
        <option value="Marshall Islands">Marshall Islands</option>
        <option value="Martinique">Martinique</option>
        <option value="Mauritania">Mauritania</option>
        <option value="Mauritius">Mauritius</option>
        <option value="Mayotte">Mayotte</option>
        <option value="Mexico">Mexico</option>
        <option value="Micronesia, Federated States of">Micronesia, Federated States of
        </option>
        <option value="Republic of Moldova">Republic of Moldova</option>
        <option value="Monaco">Monaco</option>
        <option value="Mongolia">Mongolia</option>
        <option value="Montserrat">Montserrat</option>
        <option value="Morocco">Morocco</option>
        <option value="Mozambique">Mozambique</option>
        <option value="Myanmar">Myanmar</option>
        <option value="Namibia">Namibia</option>
        <option value="Nauru">Nauru</option>
        <option value="Nepal">Nepal</option>
        <option value="Netherlands">Netherlands</option>
        <option value="Netherlands Antilles">Netherlands Antilles</option>
        <option value="New Caledonia">New Caledonia</option>
        <option value="New Zealand">New Zealand</option>
        <option value="Nicaragua">Nicaragua</option>
        <option value="Niger">Niger</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Niue">Niue</option>
        <option value="Norfolk Island">Norfolk Island</option>
        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
        <option value="Norway">Norway</option>
        <option value="Oman">Oman</option>
        <option value="Pakistan">Pakistan</option>
        <option value="Palau">Palau</option>
        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
        </option>
        <option value="Panama">Panama</option>
        <option value="Papua New Guinea">Papua New Guinea</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Peru">Peru</option>
        <option value="Philippines">Philippines</option>
        <option value="Pitcairn Islands">Pitcairn Islands</option>
        <option value="Poland">Poland</option>
        <option value="Portugal">Portugal</option>
        <option value="Puerto Rico">Puerto Rico</option>
        <option value="Qatar">Qatar</option>
        <option value="Reunion">Reunion</option>
        <option value="Romania">Romania</option>
        <option value="Russian Federation">Russian Federation</option>
        <option value="Rwanda">Rwanda</option>
        <option value="Saint Helena">Saint Helena</option>
        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
        <option value="Saint Lucia">Saint Lucia</option>
        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
        </option>
        <option value="Samoa">Samoa</option>
        <option value="San Marino">San Marino</option>
        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
        <option value="Saudi Arabia">Saudi Arabia</option>
        <option value="Senegal">Senegal</option>
        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
        <option value="Seychelles">Seychelles</option>
        <option value="Sierra Leone">Sierra Leone</option>
        <option value="Singapore">Singapore</option>
        <option value="Slovakia">Slovakia</option>
        <option value="Slovenia">Slovenia</option>
        <option value="Solomon Islands">Solomon Islands</option>
        <option value="Somalia">Somalia</option>
        <option value="South Africa">South Africa</option>
        <option value="South Georgia and the South Sandwich Islands">South Georgia and the
         South Sandwich Islands</option>
        <option value="Spain">Spain</option>
        <option value="Sri Lanka">Sri Lanka</option>
        <option value="Sudan">Sudan</option>
        <option value="Suriname">Suriname</option>
        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
        <option value="Swaziland">Swaziland</option>
        <option value="Sweden">Sweden</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
        <option value="Taiwan">Taiwan</option>
        <option value="Tajikistan">Tajikistan</option>
        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
        <option value="Thailand">Thailand</option>
        <option value="Timor-Leste">Timor-Leste</option>
        <option value="Togo">Togo</option>
        <option value="Tokelau">Tokelau</option>
        <option value="Tonga">Tonga</option>
        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
        <option value="Tunisia">Tunisia</option>
        <option value="Turkey">Turkey</option>
        <option value="Turkmenistan">Turkmenistan</option>
        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
        <option value="Tuvalu">Tuvalu</option>
        <option value="Uganda">Uganda</option>
        <option value="Ukraine">Ukraine</option>
        <option value="United Arab Emirates">United Arab Emirates</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="United States">United States</option>
        <option value="United States Minor Outlying Islands">United States Minor Outlying
         Islands</option>
        <option value="Uruguay">Uruguay</option>
        <option value="Uzbekistan">Uzbekistan</option>
        <option value="Vanuatu">Vanuatu</option>
        <option value="Venezuela">Venezuela</option>
        <option value="Vietnam">Vietnam</option>
        <option value="Virgin Islands, British">Virgin Islands, British</option>
        <option value="Virgin Islands, U.S">Virgin Islands, U.S"</option>
        <option value="Wallis and Futuna">Wallis and Futuna</option>
        <option value="Western Sahara">Western Sahara</option>
        <option value="Yemen">Yemen</option>
        <option value="Zambia">Zambia</option>
        <option value="Zimbabwe">Zimbabwe</option>
       </select>
       <!---------------------------------------------------->
       <div class="checkout__item checkout__item--required" id="juridicShippingCountyParent">
        <input type="text" wire:model.defer="juridic_billing_county" name="juridicShippingCounty"
         placeholder="<?php if(app()->has('label_order_county')): ?> <?php echo app('label_order_county'); ?> <?php endif; ?>" autocomplete="county"
         required id="juridicShippingCounty">
        <span></span>
        <label for="juridicShippingCounty">
         <?php if(app()->has('label_order_county')): ?>
          <?php echo app('label_order_county'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item checkout__item--required" id="juridicShippingCityParent">
        <input type="text" wire:model.defer="juridic_billing_city" name="juridicShippingCity"
         placeholder="<?php if(app()->has('label_order_city')): ?> <?php echo app('label_order_city'); ?> <?php endif; ?>" autocomplete="off"
         required id="juridicShippingCity">
        <span></span>
        <label for="juridicShippingCity">
         <?php if(app()->has('label_order_city')): ?>
          <?php echo app('label_order_city'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div class="checkout__item checkout__item--required" id="juridicShippingPostalParent">
        <input type="text" wire:model.defer="juridic_billing_zipcode" name="juridicShippingPostal"
         placeholder="<?php if(app()->has('label_order_zipcode')): ?> <?php echo app('label_order_zipcode'); ?> <?php endif; ?>"
         autocomplete="postal-code"  id="juridicShippingPostal">
        <span></span>
        <label for="juridicShippingPostal">
         <?php if(app()->has('label_order_zipcode')): ?>
          <?php echo app('label_order_zipcode'); ?>

         <?php endif; ?>
        </label>
       </div>
      </div>
      <label class="checkout__checkbox">
       <input type="checkbox" wire:model="juridic_identic" id="juridic_identic" name="juridic_identic">
       <span>
        <?php if(app()->has('label_order_identic')): ?>
         <?php echo app('label_order_identic'); ?>

        <?php endif; ?>
       </span>
      </label>
      <div class="checkout__form <?php if(!$juridic_identic && $juridic): ?> active <?php endif; ?>">
       <div class="checkout__top">
        <span>3</span>
        <h3>
         <?php if(app()->has('label_order_shipping_info')): ?>
          <?php echo app('label_order_shipping_info'); ?>

         <?php endif; ?>
        </h3>
       </div>
       <!---------------------------------------------------->
       <div wire:ignore class="checkout__item checkout__item--required" id="juridicBillingFirstNameParent">
        <input type="text" wire:model.defer="juridic_shipping_first" name="juridicBillingFirstName"
         placeholder="Prenume" autocomplete="given-name" required id="juridicBillingFirstName">
        <span></span>
        <label for="juridicBillingFirstName">
         <?php if(app()->has('label_order_firstname')): ?>
          <?php echo app('label_order_firstname'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div wire:ignore class="checkout__item checkout__item--required" id="juridicBillingLastNameParent">
        <input type="text" wire:model.defer="juridic_shipping_last" name="juridicBillingLastName"
         placeholder="<?php if(app()->has('label_order_lastname')): ?> <?php echo app('label_order_lastname'); ?> <?php endif; ?>"
         autocomplete="family-name" required id="juridicBillingLastName">
        <span></span>
        <label for="juridicBillingLastName">
         <?php if(app()->has('label_order_lastname')): ?>
          <?php echo app('label_order_lastname'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div wire:ignore class="checkout__item checkout__item--required" id="juridicBillingPhoneParent">
        <input type="tel" wire:model.defer="juridic_shipping_phone" name="juridicBillingPhone"
         placeholder="<?php if(app()->has('label_order_phone')): ?> <?php echo app('label_order_phone'); ?> <?php endif; ?>" autocomplete="tel"
         pattern="[0-9]*" inputmode="numeric" required id="juridicBillingPhone">
        <span></span>
        <label for="juridicBillingPhone">
         <?php if(app()->has('label_order_phone')): ?>
          <?php echo app('label_order_phone'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div wire:ignore class="checkout__item checkout__item--required" id="juridicBillingEmailParent">
        <input type="email" wire:model.defer="juridic_shipping_email" name="juridicBillingEmail"
         placeholder="<?php if(app()->has('label_order_email')): ?> <?php echo app('label_order_email'); ?> <?php endif; ?>" autocomplete="email"
         required id="juridicBillingEmail">
        <span></span>
        <label for="juridicBillingEmail">
         <?php if(app()->has('label_order_email')): ?>
          <?php echo app('label_order_email'); ?>

         <?php endif; ?>
        </label>
       </div>
      </div>
      <!---------------------------------------------------->
      <div class="checkout__form <?php if(!$juridic_identic && $juridic): ?> active <?php endif; ?>">
       <div class="checkout__top">
        <span>4</span>
        <h3>
         <?php if(app()->has('label_order_shipping_address')): ?>
          <?php echo app('label_order_shipping_address'); ?>

         <?php endif; ?>
        </h3>
       </div>
       <div wire:ignore class="checkout__item checkout__item--required" id="juridicBillingAddressParent">
        <input type="text" wire:model.defer="juridic_shipping_address1" name="juridicBillingAddress"
         placeholder="<?php if(app()->has('label_order_address1')): ?> <?php echo app('label_order_address1'); ?> <?php endif; ?>"
         autocomplete="street-address" required id="juridicBillingAddress">
        <span></span>
        <label for="juridicBillingAddress">
         <?php if(app()->has('label_order_address1')): ?>
          <?php echo app('label_order_address1'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div wire:ignore class="checkout__item" id="juridicBillingAddress2Parent">
        <input type="text" wire:model.defer="juridic_shipping_address2" name="juridicBillingAddress2"
         placeholder="<?php if(app()->has('label_order_address2')): ?> <?php echo app('label_order_address2'); ?> <?php endif; ?>"
         autocomplete="address-level2" id="juridicBillingAddress2">
        <span></span>
        <label for="juridicBillingAddress2">
         <?php if(app()->has('label_order_address2')): ?>
          <?php echo app('label_order_address2'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <select wire:model.defer="juridic_shipping_country" class="select" id="juridic_shipping_country"
        aria-label="select a country">
        <option value="Afghanistan">Afghanistan</option>
        <option value="Åland Islands">Åland Islands</option>
        <option value="Albania">Albania</option>
        <option value="Algeria">Algeria</option>
        <option value="American Samoa">American Samoa</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Anguilla">Anguilla</option>
        <option value="Antarctica">Antarctica</option>
        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
        <option value="Argentina">Argentina</option>
        <option value="Armenia">Armenia</option>
        <option value="Aruba">Aruba</option>
        <option value="Australia">Australia</option>
        <option value="Austria">Austria</option>
        <option value="Azerbaijan">Azerbaijan</option>
        <option value="Bahamas">Bahamas</option>
        <option value="Bahrain">Bahrain</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="Barbados">Barbados</option>
        <option value="Belarus">Belarus</option>
        <option value="Belgium">Belgium</option>
        <option value="Belize">Belize</option>
        <option value="Benin">Benin</option>
        <option value="Bermuda">Bermuda</option>
        <option value="Bhutan">Bhutan</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
        <option value="Botswana">Botswana</option>
        <option value="Bouvet Island">Bouvet Island</option>
        <option value="Brazil">Brazil</option>
        <option value="British Indian Ocean Territory">British Indian Ocean Territory
        </option>
        <option value="Brunei Darussalam">Brunei Darussalam</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="Burkina Faso">Burkina Faso</option>
        <option value="Burundi">Burundi</option>
        <option value="Cambodia">Cambodia</option>
        <option value="Cameroon">Cameroon</option>
        <option value="Canada">Canada</option>
        <option value="Cape Verde">Cape Verde</option>
        <option value="Cayman Islands">Cayman Islands</option>
        <option value="Central African Republic">Central African Republic</option>
        <option value="Chad">Chad</option>
        <option value="Chile">Chile</option>
        <option value="China">China</option>
        <option value="Christmas Island">Christmas Island</option>
        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
        <option value="Colombia">Colombia</option>
        <option value="Comoros">Comoros</option>
        <option value="Congo">Congo</option>
        <option value="Congo, The Democratic Republic of the">Congo, The Democratic
         Republic of the</option>
        <option value="Cook Islands">Cook Islands</option>
        <option value="Costa Rica">Costa Rica</option>
        <option value="Croatia">Croatia</option>
        <option value="Cuba">Cuba</option>
        <option value="Cyprus">Cyprus</option>
        <option value="Czech Republic">Czech Republic</option>
        <option value="Denmark">Denmark</option>
        <option value="Djibouti">Djibouti</option>
        <option value="Dominica">Dominica</option>
        <option value="Dominican Republic">Dominican Republic</option>
        <option value="Ecuador">Ecuador</option>
        <option value="Egypt">Egypt</option>
        <option value="El Salvador">El Salvador</option>
        <option value="Equatorial Guinea">Equatorial Guinea</option>
        <option value="Eritrea">Eritrea</option>
        <option value="Estonia">Estonia</option>
        <option value="Ethiopia">Ethiopia</option>
        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
        <option value="Faroe Islands">Faroe Islands</option>
        <option value="Fiji">Fiji</option>
        <option value="Finland">Finland</option>
        <option value="France">France</option>
        <option value="French Guiana">French Guiana</option>
        <option value="French Polynesia">French Polynesia</option>
        <option value="French Southern Territories">French Southern Territories</option>
        <option value="Gabon">Gabon</option>
        <option value="Gambia">Gambia</option>
        <option value="Georgia">Georgia</option>
        <option value="Germany">Germany</option>
        <option value="Ghana">Ghana</option>
        <option value="Gibraltar">Gibraltar</option>
        <option value="Greece">Greece</option>
        <option value="Greenland">Greenland</option>
        <option value="Grenada">Grenada</option>
        <option value="Guadeloupe">Guadeloupe</option>
        <option value="Guam">Guam</option>
        <option value="Guatemala">Guatemala</option>
        <option value="Guernsey">Guernsey</option>
        <option value="Guinea">Guinea</option>
        <option value="Guinea-Bissau">Guinea-Bissau</option>
        <option value="Guyana">Guyana</option>
        <option value="Haiti">Haiti</option>
        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
         Islands</option>
        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
        </option>
        <option value="Honduras">Honduras</option>
        <option value="Hong Kong">Hong Kong</option>
        <option value="Hungary">Hungary</option>
        <option value="Iceland">Iceland</option>
        <option value="India">India</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of</option>
        <option value="Iraq">Iraq</option>
        <option value="Ireland">Ireland</option>
        <option value="Isle of Man">Isle of Man</option>
        <option value="Israel">Israel</option>
        <option value="Italy">Italy</option>
        <option value="Jamaica">Jamaica</option>
        <option value="Japan">Japan</option>
        <option value="Jersey">Jersey</option>
        <option value="Jordan">Jordan</option>
        <option value="Kazakhstan">Kazakhstan</option>
        <option value="Kenya">Kenya</option>
        <option value="Kiribati">Kiribati</option>
        <option value="Korea, Republic of">Korea, Republic of</option>
        <option value="Kuwait">Kuwait</option>
        <option value="Kyrgyzstan">Kyrgyzstan</option>
        <option value="Latvia">Latvia</option>
        <option value="Lebanon">Lebanon</option>
        <option value="Lesotho">Lesotho</option>
        <option value="Liberia">Liberia</option>
        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
        <option value="Liechtenstein">Liechtenstein</option>
        <option value="Lithuania">Lithuania</option>
        <option value="Luxembourg">Luxembourg</option>
        <option value="Macao">Macao</option>
        <option value="North Macedonia">North Macedonia</option>
        <option value="Madagascar">Madagascar</option>
        <option value="Malawi">Malawi</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Maldives">Maldives</option>
        <option value="Mali">Mali</option>
        <option value="Malta">Malta</option>
        <option value="Marshall Islands">Marshall Islands</option>
        <option value="Martinique">Martinique</option>
        <option value="Mauritania">Mauritania</option>
        <option value="Mauritius">Mauritius</option>
        <option value="Mayotte">Mayotte</option>
        <option value="Mexico">Mexico</option>
        <option value="Micronesia, Federated States of">Micronesia, Federated States of
        </option>
        <option value="Republic of Moldova">Republic of Moldova</option>
        <option value="Monaco">Monaco</option>
        <option value="Mongolia">Mongolia</option>
        <option value="Montserrat">Montserrat</option>
        <option value="Morocco">Morocco</option>
        <option value="Mozambique">Mozambique</option>
        <option value="Myanmar">Myanmar</option>
        <option value="Namibia">Namibia</option>
        <option value="Nauru">Nauru</option>
        <option value="Nepal">Nepal</option>
        <option value="Netherlands">Netherlands</option>
        <option value="Netherlands Antilles">Netherlands Antilles</option>
        <option value="New Caledonia">New Caledonia</option>
        <option value="New Zealand">New Zealand</option>
        <option value="Nicaragua">Nicaragua</option>
        <option value="Niger">Niger</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Niue">Niue</option>
        <option value="Norfolk Island">Norfolk Island</option>
        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
        <option value="Norway">Norway</option>
        <option value="Oman">Oman</option>
        <option value="Pakistan">Pakistan</option>
        <option value="Palau">Palau</option>
        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
        </option>
        <option value="Panama">Panama</option>
        <option value="Papua New Guinea">Papua New Guinea</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Peru">Peru</option>
        <option value="Philippines">Philippines</option>
        <option value="Pitcairn Islands">Pitcairn Islands</option>
        <option value="Poland">Poland</option>
        <option value="Portugal">Portugal</option>
        <option value="Puerto Rico">Puerto Rico</option>
        <option value="Qatar">Qatar</option>
        <option value="Reunion">Reunion</option>
        <option value="Romania">Romania</option>
        <option value="Russian Federation">Russian Federation</option>
        <option value="Rwanda">Rwanda</option>
        <option value="Saint Helena">Saint Helena</option>
        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
        <option value="Saint Lucia">Saint Lucia</option>
        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
        </option>
        <option value="Samoa">Samoa</option>
        <option value="San Marino">San Marino</option>
        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
        <option value="Saudi Arabia">Saudi Arabia</option>
        <option value="Senegal">Senegal</option>
        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
        <option value="Seychelles">Seychelles</option>
        <option value="Sierra Leone">Sierra Leone</option>
        <option value="Singapore">Singapore</option>
        <option value="Slovakia">Slovakia</option>
        <option value="Slovenia">Slovenia</option>
        <option value="Solomon Islands">Solomon Islands</option>
        <option value="Somalia">Somalia</option>
        <option value="South Africa">South Africa</option>
        <option value="South Georgia and the South Sandwich Islands">South Georgia and the
         South Sandwich Islands</option>
        <option value="Spain">Spain</option>
        <option value="Sri Lanka">Sri Lanka</option>
        <option value="Sudan">Sudan</option>
        <option value="Suriname">Suriname</option>
        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
        <option value="Swaziland">Swaziland</option>
        <option value="Sweden">Sweden</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
        <option value="Taiwan">Taiwan</option>
        <option value="Tajikistan">Tajikistan</option>
        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
        <option value="Thailand">Thailand</option>
        <option value="Timor-Leste">Timor-Leste</option>
        <option value="Togo">Togo</option>
        <option value="Tokelau">Tokelau</option>
        <option value="Tonga">Tonga</option>
        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
        <option value="Tunisia">Tunisia</option>
        <option value="Turkey">Turkey</option>
        <option value="Turkmenistan">Turkmenistan</option>
        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
        <option value="Tuvalu">Tuvalu</option>
        <option value="Uganda">Uganda</option>
        <option value="Ukraine">Ukraine</option>
        <option value="United Arab Emirates">United Arab Emirates</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="United States">United States</option>
        <option value="United States Minor Outlying Islands">United States Minor Outlying
         Islands</option>
        <option value="Uruguay">Uruguay</option>
        <option value="Uzbekistan">Uzbekistan</option>
        <option value="Vanuatu">Vanuatu</option>
        <option value="Venezuela">Venezuela</option>
        <option value="Vietnam">Vietnam</option>
        <option value="Virgin Islands, British">Virgin Islands, British</option>
        <option value="Virgin Islands, U.S">Virgin Islands, U.S"</option>
        <option value="Wallis and Futuna">Wallis and Futuna</option>
        <option value="Western Sahara">Western Sahara</option>
        <option value="Yemen">Yemen</option>
        <option value="Zambia">Zambia</option>
        <option value="Zimbabwe">Zimbabwe</option>
       </select>
       <!---------------------------------------------------->
       <div wire:ignore class="checkout__item checkout__item--required" id="juridicBillingCountyParent">
        <input type="text" wire:model.defer="juridic_shipping_county" name="juridicBillingCounty"
         placeholder="<?php if(app()->has('label_order_county')): ?> <?php echo app('label_order_county'); ?> <?php endif; ?>" autocomplete="county"
         required id="juridicBillingCounty">
        <span></span>
        <label for="juridicBillingCounty">
         <?php if(app()->has('label_order_county')): ?>
          <?php echo app('label_order_county'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div wire:ignore class="checkout__item checkout__item--required" id="juridicBillingCityParent">
        <input type="text" wire:model.defer="juridic_shipping_city" name="juridicBillingCity"
         placeholder="<?php if(app()->has('label_order_city')): ?> <?php echo app('label_order_city'); ?> <?php endif; ?>" autocomplete="off"
         required id="juridicBillingCity">
        <span></span>
        <label for="juridicBillingCity">
         <?php if(app()->has('label_order_city')): ?>
          <?php echo app('label_order_city'); ?>

         <?php endif; ?>
        </label>
       </div>
       <!---------------------------------------------------->
       <div wire:ignore class="checkout__item checkout__item--required" id="juridicBillingPostalParent">
        <input type="text" wire:model.defer="juridic_shipping_zipcode" name="juridicBillingPostal"
         placeholder="<?php if(app()->has('label_order_zipcode')): ?> <?php echo app('label_order_zipcode'); ?> <?php endif; ?>"
         autocomplete="postal-code"  id="juridicBillingPostal">
        <span></span>
        <label for="juridicBillingPostal">
         <?php if(app()->has('label_order_zipcode')): ?>
          <?php echo app('label_order_zipcode'); ?>

         <?php endif; ?>
        </label>
       </div>
      </div>
     </div>
     <div class="section__header">
      <h2 class="section__title">
       <?php if(app()->has('label_order_payment_method')): ?>
        <?php echo app('label_order_payment_method'); ?>

       <?php endif; ?>
      </h2>
     </div>
     <?php if($card['active'] != 0): ?>
      <div class="payment">
       <label class="payment__wrapper" for="crd" wire:click="togglepayment('crd')">
        <input class="payment__checkbox" type="checkbox" wire:model.defer="crd" id="crd">
        <span>
         <?php if(app()->has('label_order_cart_stripe_title')): ?>
          <?php echo app('label_order_cart_stripe_title'); ?>

         <?php endif; ?>
        </span>
       </label>
       <div class="payment__text <?php if($crd): ?> active <?php endif; ?>">
        <h3>
         <?php if(app()->has('label_order_cart_stripe_description')): ?>
          <?php echo app('label_order_cart_stripe_description'); ?>

         <?php endif; ?>
        </h3>
       </div>
      </div>
     <?php endif; ?>
     <!---------------------------------------------------->
     <?php if($cash['active'] != 0): ?>
      <div class="payment">
       <label class="payment__wrapper" for="rtc" wire:click="togglepayment('rtc')">
        <input class="payment__checkbox" type="checkbox" wire:model.defer="rtc" id="rtc">
        <span>
         <?php if(app()->has('label_order_cash_title')): ?>
          <?php echo app('label_order_cash_title'); ?>

         <?php endif; ?>
        </span>
       </label>
       <div class="payment__text <?php if($rtc): ?> active <?php endif; ?>">
        <h3>
         <?php if(app()->has('label_order_cash_description')): ?>
          <?php echo app('label_order_cash_description'); ?>

         <?php endif; ?>
        </h3>
        <?php if(app()->has('global_cash_limit') && app('global_cash_limit') != 0): ?>
         <span>
          <?php if(app()->has('label_order_cash_limit_text')): ?>
           <?php echo app('label_order_cash_limit_text'); ?>

          <?php endif; ?> <?php echo e(app('global_cash_limit')); ?>

         </span>
        <?php endif; ?>
       </div>
      </div>
     <?php endif; ?>
     <!---------------------------------------------------->
     <?php if($ordin['active'] != 0): ?>
      <?php if($juridic): ?>
       <div class="payment">
        <label class="payment__wrapper" for="invoice" wire:click="togglepayment('invoice')">
         <input class="payment__checkbox" type="checkbox" wire:model.defer="invoice" id="invoice">
         <span>
          <?php if(app()->has('label_order_invoice_title')): ?>
           <?php echo app('label_order_invoice_title'); ?>

          <?php endif; ?>
         </span>
        </label>
        <div class="payment__text <?php if($invoice): ?> active <?php endif; ?>">
         <h3>
          <?php if(app()->has('label_order_invoice_description')): ?>
           <?php echo app('label_order_invoice_description'); ?>

          <?php endif; ?>
         </h3>
        </div>
       </div>
      <?php endif; ?>
     <?php endif; ?>
     <!------------------------- Scrpt for Checkout --------------------------->
     <script src="/script/store/order.js"></script>
     <script>
      applyValidations("individualShippingFirstNameParent", firstNameValidation, false);
      applyValidations("individualShippingLastNameParent", lastNameValidation, false);
      applyValidations("individualShippingEmailParent", emailValidation, false);
      applyValidations("individualShippingPhoneParent", phoneValidation, false);
      applyValidations("individualShippingAddressParent", addressValidations, false);
      applyValidations("individualShippingCountyParent", countyValidations, false);
      applyValidations("individualShippingCityParent", cityValidations, false);
      // applyValidations("individualShippingPostalParent", zipcodeValidations, false);
      applyValidations("individualBillingFirstNameParent", firstNameValidation, false);
      applyValidations("individualBillingLastNameParent", lastNameValidation, false);
      applyValidations("individualBillingEmailParent", emailValidation, false);
      applyValidations("individualBillingPhoneParent", phoneValidation, false);
      applyValidations("individualBillingAddressParent", addressValidations, false);
      applyValidations("individualBillingCountyParent", countyValidations, false);
      applyValidations("individualBillingCityParent", cityValidations, false);
      // applyValidations("individualBillingPostalParent", zipcodeValidations, false);
      // ----------------------------------------------------------------------------
      applyValidations("juridicShippingFirstNameParent", firstNameValidation, false);
      applyValidations("juridicShippingLastNameParent", lastNameValidation, false);
      applyValidations("juridicShippingEmailParent", emailValidation, false);
      applyValidations("juridicShippingPhoneParent", phoneValidation, false);
      applyValidations("juridicShippingAddressParent", addressValidations, false);
      applyValidations("juridicShippingCountyParent", countyValidations, false);
      applyValidations("juridicShippingCityParent", cityValidations, false);
      // applyValidations("juridicShippingPostalParent", zipcodeValidations, false);
      applyValidations("companyNameParent", companyName, false);
      applyValidations("registerNumberParent", registerNumber, false);
      applyValidations("registerCodeParent", registerCode, false);
      applyValidations("juridicBillingFirstNameParent", firstNameValidation, false);
      applyValidations("juridicBillingLastNameParent", lastNameValidation, false);
      applyValidations("juridicBillingEmailParent", emailValidation, false);
      applyValidations("juridicBillingPhoneParent", phoneValidation, false);
      applyValidations("juridicBillingAddressParent", addressValidations, false);
      applyValidations("juridicBillingCountyParent", countyValidations, false);
      applyValidations("juridicBillingCityParent", cityValidations, false);
      // applyValidations("juridicBillingPostalParent", zipcodeValidations, false);
     </script>
     <div class="dlv" style="display: none">
      <span class="dlv_currency">
       <?php if(app()->has('global_currency_primary_name')): ?>
        <?php echo app('global_currency_primary_name'); ?>

       <?php endif; ?>
      </span>
      <span class="dlv_value"><?php echo e($cart->final_amount); ?></span>
      <span class="dlv_coupon"><?php echo e(optional($cart->voucher)->code); ?></span>
      <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="dlv_item">
        <span class="dlv_item-id"><?php echo e($cartItem->product->id); ?></span>
        <span class="dlv_item-name"><?php echo e($cartItem->product->name); ?></span>
        <span class="dlv_item-price"><?php echo e($cartItem->price); ?></span>
        <span class="dlv_item-quantity"><?php echo e($cartItem->quantity); ?></span>
       </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
     <script>
      function begin_checkout() {
       // Variables
       var dlv = document.querySelector('.dlv');
       // Check if dlv element exists
       if (!dlv) {
        console.error('Elementul cu clasa .dlv nu a fost găsit.');
        return;
       }
       // Get all Values
       var currency = dlv.querySelector('.dlv_currency').innerText.trim();
       var value = parseFloat(dlv.querySelector('.dlv_value').innerText.trim().replace(',', '.'));
       var coupon = dlv.querySelector('.dlv_coupon').innerText.trim() || undefined;
       var items = [];
       // Get all items
       var dlv_items = dlv.querySelectorAll('.dlv_item');
       // Loop through each item
       dlv_items.forEach(dlv_item => {
        var item_id = dlv_item.querySelector('.dlv_item-id').innerText.trim();
        var item_name = dlv_item.querySelector('.dlv_item-name').innerText.trim();
        var item_price = parseFloat(dlv_item.querySelector('.dlv_item-price').innerText.trim().replace(',', '.'));
        var item_quantity = parseInt(dlv_item.querySelector('.dlv_item-quantity').innerText.trim(), 10);

        // Create item object
        var item = {
         item_id: item_id,
         item_name: item_name,
         price: item_price,
         quantity: item_quantity
        };

        // Push item in the array
        items.push(item);
       });

       // Create the data object
       var dlvData = {
        currency: currency,
        value: value,
        coupon: coupon,
        items: items
       };
       // Show the object
       // console.log(dlvData);
       return dlvData;
      };
      // begin_checkout();

      // Apelul funcției begin_checkout pentru a extrage datele
      var dlvData = begin_checkout();

      // Trimiterea datelor la Google Analytics folosind dataLayer.push
      dataLayer.push({
       ecommerce: null
      });
      dataLayer.push({
       event: "begin_checkout",
       ecommerce: {
        currency: dlvData.currency,
        value: dlvData.value,
        coupon: dlvData.coupon,
        items: dlvData.items
       }
      });
     </script>

    <?php endif; ?>
    <!------------------------------------------------------>
    <?php if($step == 2): ?>
     <?php $disables = []; ?>
     <div class="checkout__header" style="flex-direction: row !important">
      <button class="checkout__button" wire:click.prevent="previous()">
       <svg>
        <line x1="19" y1="12" x2="5" y2="12"></line>
        <polyline points="12 19 5 12 12 5"></polyline>
       </svg>
       <?php if(app()->has('label_order_previous_step')): ?>
        <?php echo app('label_order_previous_step'); ?>

       <?php endif; ?>
      </button>
      <?php if($modification): ?>
       <button class="checkout__button checkout__button--confirm item__button--disabled">
        <?php if(app()->has('label_order_confirm_step')): ?>
         <?php echo app('label_order_confirm_step'); ?>

        <?php endif; ?>
        <svg>
         <polyline points="9 11 12 14 22 4"></polyline>
         <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
        </svg>
       </button>
      <?php else: ?>
       <button class="checkout__button checkout__button--confirm" wire:click.prevent="confirm()">
        <?php if(app()->has('label_order_confirm_step')): ?>
         <?php echo app('label_order_confirm_step'); ?>

        <?php endif; ?>
        <svg>
         <polyline points="9 11 12 14 22 4"></polyline>
         <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
        </svg>
       </button>
      <?php endif; ?>
     </div>
     <div class="section__header">
      <h2 class="section__title">
       <?php if(app()->has('label_order_details_check')): ?>
        <?php echo app('label_order_details_check'); ?>

       <?php endif; ?>
      </h2>
     </div>
     <div class="total__container">
      <!-------------- Individual information -------------->
      <?php if($individual): ?>
       <div class="look__form">
        <h3>
         <?php if(app()->has('label_order_billing_check')): ?>
          <?php echo app('label_order_billing_check'); ?>

         <?php endif; ?>
        </h3>
        <span class="total__message">
         <?php if(app()->has('label_order_fullname')): ?>
          <?php echo app('label_order_fullname'); ?>

         <?php endif; ?>:
         <strong><?php echo e($individual_billing_first); ?></strong>
         <strong><?php echo e($individual_billing_last); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_phone')): ?>
          <?php echo app('label_order_phone'); ?>

         <?php endif; ?>:
         <strong><?php echo e($individual_billing_phone); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_email')): ?>
          <?php echo app('label_order_email'); ?>

         <?php endif; ?>:
         <strong><?php echo e($individual_billing_email); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_address1')): ?>
          <?php echo app('label_order_address1'); ?>

         <?php endif; ?>:
         <strong><?php echo e($individual_billing_address1); ?></strong>
         <strong><?php echo e($individual_billing_address2); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_country')): ?>
          <?php echo app('label_order_country'); ?>

         <?php endif; ?>:
         <strong><?php echo e($individual_billing_country); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_county')): ?>
          <?php echo app('label_order_county'); ?>

         <?php endif; ?>:
         <strong><?php echo e($individual_billing_county); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_city')): ?>
          <?php echo app('label_order_city'); ?>

         <?php endif; ?>:
         <strong><?php echo e($individual_billing_city); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_zipcode')): ?>
          <?php echo app('label_order_zipcode'); ?>

         <?php endif; ?>:
         <strong><?php echo e($individual_billing_zipcode); ?></strong>
        </span>

        <h3>
         <?php if(app()->has('label_order_delivery_check')): ?>
          <?php echo app('label_order_delivery_check'); ?>

         <?php endif; ?>
        </h3>

        <span class="total__message">
         <?php if(app()->has('label_order_fullname')): ?>
          <?php echo app('label_order_fullname'); ?>

         <?php endif; ?>:
         <strong><?php echo e($individual_shipping_first); ?></strong>
         <strong><?php echo e($individual_shipping_last); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_phone')): ?>
          <?php echo app('label_order_phone'); ?>

         <?php endif; ?>:
         <strong><?php echo e($individual_shipping_phone); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_email')): ?>
          <?php echo app('label_order_email'); ?>

         <?php endif; ?>:
         <strong><?php echo e($individual_shipping_email); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_address1')): ?>
          <?php echo app('label_order_address1'); ?>

         <?php endif; ?>:
         <strong><?php echo e($individual_shipping_address1); ?></strong>
         <strong><?php echo e($individual_shipping_address2); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_country')): ?>
          <?php echo app('label_order_country'); ?>

         <?php endif; ?>:
         <strong><?php echo e($individual_shipping_country); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_county')): ?>
          <?php echo app('label_order_county'); ?>

         <?php endif; ?>:
         <strong><?php echo e($individual_shipping_county); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_city')): ?>
          <?php echo app('label_order_city'); ?>

         <?php endif; ?>:
         <strong><?php echo e($individual_shipping_city); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_zipcode')): ?>
          <?php echo app('label_order_zipcode'); ?>

         <?php endif; ?>:
         <strong><?php echo e($individual_shipping_zipcode); ?></strong>
        </span>
       </div>
      <?php else: ?>
       <div class="look__form">
        <!------------- Juridic Information --------------->
        <h3>
         <?php if(app()->has('label_order_billing_check')): ?>
          <?php echo app('label_order_billing_check'); ?>

         <?php endif; ?>
        </h3>
        <span class="total__message">
         <?php if(app()->has('label_order_fullname')): ?>
          <?php echo app('label_order_fullname'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_billing_first); ?></strong>
         <strong><?php echo e($juridic_billing_last); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_phone')): ?>
          <?php echo app('label_order_phone'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_billing_phone); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_email')): ?>
          <?php echo app('label_order_email'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_billing_email); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_company_name')): ?>
          <?php echo app('label_order_company_name'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_billing_company_name); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_register_code')): ?>
          <?php echo app('label_order_register_code'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_billing_registration_code); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_register_number')): ?>
          <?php echo app('label_order_register_number'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_billing_registration_number); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_bankname')): ?>
          <?php echo app('label_order_bankname'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_billing_bank); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_iban')): ?>
          <?php echo app('label_order_iban'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_billing_account); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_address1')): ?>
          <?php echo app('label_order_address1'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_billing_address1); ?></strong>
         <strong><?php echo e($juridic_billing_address2); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_country')): ?>
          <?php echo app('label_order_country'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_billing_country); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_county')): ?>
          <?php echo app('label_order_county'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_billing_county); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_city')): ?>
          <?php echo app('label_order_city'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_billing_city); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_zipcode')): ?>
          <?php echo app('label_order_zipcode'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_billing_zipcode); ?></strong>
        </span>

        <h3>
         <?php if(app()->has('label_order_delivery_check')): ?>
          <?php echo app('label_order_delivery_check'); ?>

         <?php endif; ?>
        </h3>

        <span class="total__message">
         <?php if(app()->has('label_order_fullname')): ?>
          <?php echo app('label_order_fullname'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_shipping_first); ?></strong>
         <strong><?php echo e($juridic_shipping_last); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_phone')): ?>
          <?php echo app('label_order_phone'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_shipping_phone); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_email')): ?>
          <?php echo app('label_order_email'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_shipping_email); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_address1')): ?>
          <?php echo app('label_order_address1'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_shipping_address1); ?></strong>
         <strong><?php echo e($juridic_shipping_address2); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_country')): ?>
          <?php echo app('label_order_country'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_shipping_country); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_county')): ?>
          <?php echo app('label_order_county'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_shipping_county); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_city')): ?>
          <?php echo app('label_order_city'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_shipping_city); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_zipcode')): ?>
          <?php echo app('label_order_zipcode'); ?>

         <?php endif; ?>:
         <strong><?php echo e($juridic_shipping_zipcode); ?></strong>
        </span>
       </div>
      <?php endif; ?>
      <!---------------------------------------------------->
      <div class="total__info">
       <?php if(!$cartItems->isEmpty()): ?>
        <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <?php
          $disabled[$index] = false;
          $nonquantity[$index] = false;
          if (
              $cartItem->product->active != true ||
              $cartItem->product->start_date > now()->format('Y-m-d') ||
              $cartItem->product->end_date < now()->format('Y-m-d')
          ) {
              $disabled[$index] = true;
              $this->emit('isdisabled');
          }
          if (
              $cartItem->product->quantity < $cartItem->quantity &&
              (app()->has('global_preorder') && app('global_preorder') != 'true')
          ) {
              $nonquantity[$index] = true;
              $this->emit('isdisabled');
          }
         ?>
         <div class="total__product">
          <span class="total__quantity"><?php echo e($cartItem->quantity); ?> x</span>
          <?php if($cartItem->product->media->first()): ?>
           <img class="cart__list--img" title="<?php echo e($cartItem->product->name); ?>"
            src="/<?php echo e($cartItem->product->media->first()->path); ?><?php echo e($cartItem->product->media->first()->name); ?>"
            alt="<?php echo e($cartItem->product->media->first()->name); ?> <?php echo e($cartItem->product->name); ?>">
          <?php else: ?>
           <img title="Default image" class="cart__list--img" src="/images/store/default/default70.webp"
            alt="something wrong">
          <?php endif; ?>
          <!------------------------- No Quantity of Cart Item --------------------------->
          <?php if($nonquantity[$index]): ?>
           <div class="leftbar__link--text">
            <a
             href="<?php echo e(route('product', ['product' => $cartItem->product->seo_id !== null && $cartItem->product->seo_id !== '' ? $cartItem->product->seo_id : $cartItem->product->id])); ?>"
             target="_blank" class="total__name"><?php echo e($cartItem->product->name); ?></a>
            <span class="item__product--error">
             <?php if(app()->has('label_product_quantity_error')): ?>
              <?php echo app('label_product_quantity_error'); ?>

             <?php endif; ?> <?php echo e($cartItem->product->quantity); ?>

            </span>
            <a class="item__product--link" href="<?php echo e(url('/cart')); ?>">
             <?php if(app()->has('label_product_quantity_modify')): ?>
              <?php echo app('label_product_quantity_modify'); ?>

             <?php endif; ?>
            </a>
           </div>
          <?php else: ?>
           <a
            href="<?php echo e(route('product', ['product' => $cartItem->product->seo_id !== null && $cartItem->product->seo_id !== '' ? $cartItem->product->seo_id : $cartItem->product->id])); ?>"
            target="_blank" class="total__name"><?php echo e($cartItem->product->name); ?></a>
          <?php endif; ?>
          <!------------------------- Indisponibble of Cart Item --------------------------->
          <?php if($disabled[$index]): ?>
           <div class="item__product--disabled">
            <span>
             <?php if(app()->has('label_product_status_indisponible')): ?>
              <?php echo app('label_product_status_indisponible'); ?>

             <?php endif; ?>
            </span>
           </div>
          <?php endif; ?>
          <span class="total__price">
           <?php echo e(number_format($cartItem->quantity * $cartItem->price, 2, $decimal, $mill)); ?>

           <?php if(app()->has('global_currency_primary_symbol')): ?>
            <?php echo app('global_currency_primary_symbol'); ?>

           <?php endif; ?>
          </span>
         </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!------------ Order summary amount ------------>
        <div class="total__item">
         <span>
          <?php if(app()->has('label_order_payment_method')): ?>
           <?php echo app('label_order_payment_method'); ?>

          <?php endif; ?>
         </span>
         <span><?php echo e($payment['description']); ?></span>
        </div>
        <div class="total__item">
         <span>
          <?php if(app()->has('label_cart_delivery_tag')): ?>
           <?php echo app('label_cart_delivery_tag'); ?>

          <?php endif; ?>
         </span>
         <span>
          <?php if($cart->delivery_price == 0): ?>
           <?php if(app()->has('label_cart_delivery_free')): ?>
            <?php echo app('label_cart_delivery_free'); ?>

           <?php endif; ?>
          <?php else: ?>
           <?php echo e(number_format($cart->delivery_price, 2, $decimal, $mill)); ?> <?php if(app()->has('global_currency_primary_symbol')): ?>
            <?php echo app('global_currency_primary_symbol'); ?>

           <?php endif; ?>
          <?php endif; ?>
         </span>
        </div>
        <?php if($cart->voucher && $cart->voucher_value > 0): ?>
         <div class="total__item">
          <span>
           <?php if(app()->has('label_cart_voucher_tag')): ?>
            <?php echo app('label_cart_voucher_tag'); ?>

           <?php endif; ?>
          </span>
          <span>
           -<?php echo e(number_format($cart->voucher_value, 2, $decimal, $mill)); ?> <?php if(app()->has('global_currency_primary_symbol')): ?>
            <?php echo app('global_currency_primary_symbol'); ?>

           <?php endif; ?>
          </span>
         </div>
        <?php endif; ?>
        <div class="total__item">
         <span>
          <?php if(app()->has('label_cart_total_tag')): ?>
           <?php echo app('label_cart_total_tag'); ?>

          <?php endif; ?>
         </span>
         <span><?php echo e(number_format($cart->final_amount, 2, $decimal, $mill)); ?> <?php if(app()->has('global_currency_primary_symbol')): ?>
           <?php echo app('global_currency_primary_symbol'); ?>

          <?php endif; ?>
         </span>
        </div>
        <?php if($modification): ?>
         <span class="item__text--disabled">
          <?php if(app()->has('label_cart_order_error')): ?>
           <?php echo app('label_cart_order_error'); ?>

          <?php endif; ?>
         </span>
        <?php endif; ?>
       <?php endif; ?>
      </div>
     </div>

     <label id="termsbutton" class="checkout__terms <?php if($errorterms && $terms == false): ?> error <?php endif; ?>">
      <input type="checkbox" wire:model="terms" name="terms">
      <span>
       <?php if(app()->has('label_terms_checkout')): ?>
        <?php echo app('label_terms_checkout'); ?>

       <?php endif; ?>
      </span>
     </label>

     <!-- DataLayer Script pentru Step 2 -->
     <div class="dlv" style="display: none">
      <span class="dlv_currency">
       <?php if(app()->has('global_currency_primary_name')): ?>
        <?php echo app('global_currency_primary_name'); ?>

       <?php endif; ?>
      </span>
      <span class="dlv_value"><?php echo e($cart->final_amount); ?></span>
      <span class="dlv_coupon"><?php echo e(optional($cart->voucher)->code); ?></span>
      <span class="dlv_payment"><?php echo e($payment['name']); ?></span>
      <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="dlv_item">
        <span class="dlv_item-id"><?php echo e($cartItem->product->id); ?></span>
        <span class="dlv_item-name"><?php echo e($cartItem->product->name); ?></span>
        <span class="dlv_item-price"><?php echo e($cartItem->price); ?></span>
        <span class="dlv_item-quantity"><?php echo e($cartItem->quantity); ?></span>
       </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
     <script>
      function add_payment_info() {
       // Variables
       var dlv = document.querySelector('.dlv');
       // Check if dlv element exists
       if (!dlv) {
        console.error('Elementul cu clasa .dlv nu a fost găsit.');
        return;
       }
       // Get all Values
       var currency = dlv.querySelector('.dlv_currency').innerText.trim();
       var value = parseFloat(dlv.querySelector('.dlv_value').innerText.trim().replace(',', '.'));
       var coupon = dlv.querySelector('.dlv_coupon').innerText.trim() || undefined;
       var payment = dlv.querySelector('.dlv_payment').innerText.trim();
       var items = [];
       // Get all items
       var dlv_items = dlv.querySelectorAll('.dlv_item');
       // Loop through each item
       dlv_items.forEach(dlv_item => {
        var item_id = dlv_item.querySelector('.dlv_item-id').innerText.trim();
        var item_name = dlv_item.querySelector('.dlv_item-name').innerText.trim();
        var item_price = parseFloat(dlv_item.querySelector('.dlv_item-price').innerText.trim().replace(',', '.'));
        var item_quantity = parseInt(dlv_item.querySelector('.dlv_item-quantity').innerText.trim(), 10);

        // Create item object
        var item = {
         item_id: item_id,
         item_name: item_name,
         price: item_price,
         quantity: item_quantity
        };

        // Push item in the array
        items.push(item);
       });

       // Create the data object
       var dlvData = {
        currency: currency,
        value: value,
        coupon: coupon,
        payment: payment,
        items: items
       };
       // Show the object
       // console.log(dlvData);
       return dlvData;
      };
      var dlvData = add_payment_info();

      // Trimiterea datelor la Google Analytics folosind dataLayer.push
      dataLayer.push({
       ecommerce: null
      });
      dataLayer.push({
       event: "add_payment_info",
       ecommerce: {
        currency: dlvData.currency,
        value: dlvData.value,
        coupon: dlvData.coupon,
        payment: dlvData.payment,
        items: dlvData.items
       }
      });
      dataLayer.push({
       ecommerce: null
      });
     </script>
     <script>
      function add_shipping_info() {
       // Variables
       var dlv = document.querySelector('.dlv');
       // Check if dlv element exists
       if (!dlv) {
        console.error('Elementul cu clasa .dlv nu a fost găsit.');
        return;
       }
       // Get all Values
       var currency = dlv.querySelector('.dlv_currency').innerText.trim();
       var value = parseFloat(dlv.querySelector('.dlv_value').innerText.trim().replace(',', '.'));
       var coupon = dlv.querySelector('.dlv_coupon').innerText.trim() || undefined;
       var items = [];
       // Get all items
       var dlv_items = dlv.querySelectorAll('.dlv_item');
       // Loop through each item
       dlv_items.forEach(dlv_item => {
        var item_id = dlv_item.querySelector('.dlv_item-id').innerText.trim();
        var item_name = dlv_item.querySelector('.dlv_item-name').innerText.trim();
        var item_price = parseFloat(dlv_item.querySelector('.dlv_item-price').innerText.trim().replace(',', '.'));
        var item_quantity = parseInt(dlv_item.querySelector('.dlv_item-quantity').innerText.trim(), 10);

        // Create item object
        var item = {
         item_id: item_id,
         item_name: item_name,
         price: item_price,
         quantity: item_quantity
        };

        // Push item in the array
        items.push(item);
       });

       // Create the data object
       var dlvData = {
        currency: currency,
        value: value,
        coupon: coupon,
        items: items
       };
       // Show the object

       return dlvData;
      };
      var dlvData = add_shipping_info();
      // Trimiterea datelor la Google Analytics folosind dataLayer.push
      dataLayer.push({
       event: "add_shipping_info",
       ecommerce: {
        currency: dlvData.currency,
        value: dlvData.value,
        coupon: dlvData.coupon,
        items: dlvData.items
       }
      });
     </script>
    <?php endif; ?>
    <!------------------- Script for blade terms ------------------>
    <script>
     window.addEventListener('terms__error', event => {
      var element = document.getElementById('termsbutton');
      if (element) {
       element.scrollIntoView();
      }
     });
     window.addEventListener('goup', event => {
      window.scroll({
       top: 0,
       left: 0,
       behavior: 'smooth'
      });
     });
    </script>
    <!------------------------------------------>
    <?php if($step == 3): ?>
     <section class="section__header container">
      <h1 class="section__title">
       <?php if(app()->has('label_order_tag')): ?>
        <?php echo app('label_order_tag'); ?>

       <?php endif; ?> <?php echo e($new_order->order_number); ?>

      </h1>
     </section>

     <div class="section__header">
      <h2>
       <?php if(app()->has('label_order_default_text_confirmation')): ?>
        <?php echo app('label_order_default_text_confirmation'); ?>

       <?php endif; ?>
      </h2>
     </div>
     <div class="total__container">
      <!------------- Order details --------------->
      <div class="look__form">
       <h3>
        <?php if(app()->has('label_order_billing_check')): ?>
         <?php echo app('label_order_billing_check'); ?>

        <?php endif; ?>
       </h3>
       <span class="total__message">
        <?php if(app()->has('label_order_fullname')): ?>
         <?php echo app('label_order_fullname'); ?>

        <?php endif; ?>:
        <strong><?php echo e($new_order->account->addresses->where('type', 'billing')->first()->first_name); ?></strong>
        <strong><?php echo e($new_order->account->addresses->where('type', 'billing')->first()->last_name); ?></strong>
       </span>
       <span class="total__message">
        <?php if(app()->has('label_order_phone')): ?>
         <?php echo app('label_order_phone'); ?>

        <?php endif; ?>:
        <strong><?php echo e($new_order->account->addresses->where('type', 'billing')->first()->phone); ?></strong>
       </span>
       <span class="total__message">
        <?php if(app()->has('label_order_email')): ?>
         <?php echo app('label_order_email'); ?>

        <?php endif; ?>:
        <strong><?php echo e($new_order->account->addresses->where('type', 'billing')->first()->email); ?></strong>
       </span>
       <?php if($juridic): ?>
        <span class="total__message">
         <?php if(app()->has('label_order_company_name')): ?>
          <?php echo app('label_order_company_name'); ?>

         <?php endif; ?>:
         <strong><?php echo e($new_order->account->company_name); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_register_code')): ?>
          <?php echo app('label_order_register_code'); ?>

         <?php endif; ?>:
         <strong><?php echo e($new_order->account->registration_code); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_register_number')): ?>
          <?php echo app('label_order_register_number'); ?>

         <?php endif; ?>:
         <strong><?php echo e($new_order->account->registration_number); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_bankname')): ?>
          <?php echo app('label_order_bankname'); ?>

         <?php endif; ?>:
         <strong><?php echo e($new_order->account->bank_name); ?></strong>
        </span>
        <span class="total__message">
         <?php if(app()->has('label_order_iban')): ?>
          <?php echo app('label_order_iban'); ?>

         <?php endif; ?>:
         <strong><?php echo e($new_order->account->account); ?></strong>
        </span>
       <?php endif; ?>
       <span class="total__message">
        <?php if(app()->has('label_order_address1')): ?>
         <?php echo app('label_order_address1'); ?>

        <?php endif; ?>:
        <strong><?php echo e($new_order->account->addresses->where('type', 'billing')->first()->address1); ?></strong>
        <strong><?php echo e($new_order->account->addresses->where('type', 'billing')->first()->address2); ?></strong>
       </span>
       <span class="total__message">
        <?php if(app()->has('label_order_country')): ?>
         <?php echo app('label_order_country'); ?>

        <?php endif; ?>:
        <strong><?php echo e($new_order->account->addresses->where('type', 'billing')->first()->country); ?></strong>
       </span>
       <span class="total__message">
        <?php if(app()->has('label_order_county')): ?>
         <?php echo app('label_order_county'); ?>

        <?php endif; ?>:
        <strong><?php echo e($new_order->account->addresses->where('type', 'billing')->first()->county); ?></strong>
       </span>
       <span class="total__message">
        <?php if(app()->has('label_order_city')): ?>
         <?php echo app('label_order_city'); ?>

        <?php endif; ?>:
        <strong><?php echo e($new_order->account->addresses->where('type', 'billing')->first()->city); ?></strong>
       </span>
       <span class="total__message">
        <?php if(app()->has('label_order_zipcode')): ?>
         <?php echo app('label_order_zipcode'); ?>

        <?php endif; ?>:
        <strong><?php echo e($new_order->account->addresses->where('type', 'billing')->first()->zipcode); ?></strong>
       </span>

       <h3>
        <?php if(app()->has('label_order_delivery_check')): ?>
         <?php echo app('label_order_delivery_check'); ?>

        <?php endif; ?>
       </h3>

       <span class="total__message">
        <?php if(app()->has('label_order_fullname')): ?>
         <?php echo app('label_order_fullname'); ?>

        <?php endif; ?>:
        <strong><?php echo e($new_order->account->addresses->where('type', 'shipping')->first()->first_name); ?></strong>
        <strong><?php echo e($new_order->account->addresses->where('type', 'shipping')->first()->last_name); ?></strong>
       </span>
       <span class="total__message">
        <?php if(app()->has('label_order_phone')): ?>
         <?php echo app('label_order_phone'); ?>

        <?php endif; ?>:
        <strong><?php echo e($new_order->account->addresses->where('type', 'shipping')->first()->phone); ?></strong>
       </span>
       <span class="total__message">
        <?php if(app()->has('label_order_email')): ?>
         <?php echo app('label_order_email'); ?>

        <?php endif; ?>:
        <strong><?php echo e($new_order->account->addresses->where('type', 'shipping')->first()->email); ?></strong>
       </span>
       <span class="total__message">
        <?php if(app()->has('label_order_address1')): ?>
         <?php echo app('label_order_address1'); ?>

        <?php endif; ?>:
        <strong><?php echo e($new_order->account->addresses->where('type', 'shipping')->first()->address1); ?></strong>
        <strong><?php echo e($new_order->account->addresses->where('type', 'shipping')->first()->address2); ?></strong>
       </span>
       <span class="total__message">
        <?php if(app()->has('label_order_county')): ?>
         <?php echo app('label_order_county'); ?>

        <?php endif; ?>:
        <strong><?php echo e($new_order->account->addresses->where('type', 'shipping')->first()->country); ?></strong>
       </span>
       <span class="total__message">
        <?php if(app()->has('label_order_county')): ?>
         <?php echo app('label_order_county'); ?>

        <?php endif; ?>:
        <strong><?php echo e($new_order->account->addresses->where('type', 'shipping')->first()->county); ?></strong>
       </span>
       <span class="total__message">
        <?php if(app()->has('label_order_city')): ?>
         <?php echo app('label_order_city'); ?>

        <?php endif; ?>:
        <strong><?php echo e($new_order->account->addresses->where('type', 'shipping')->first()->city); ?></strong>
       </span>
       <span class="total__message">
        <?php if(app()->has('label_order_zipcode')): ?>
         <?php echo app('label_order_zipcode'); ?>

        <?php endif; ?>:
        <strong><?php echo e($new_order->account->addresses->where('type', 'shipping')->first()->zipcode); ?></strong>
       </span>
      </div>
      <!----------------------- Order sumary ----------------------------->
      <div class="total__info">
       <?php $__currentLoopData = $new_order->orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="total__product">
         <span class="total__quantity">
          <?php echo e($cartItem->quantity); ?> x
         </span>
         <?php if($cartItem->product->media->where('type', 'min')->first()): ?>
          <img class="cart__list--img" title="<?php echo e($cartItem->product->name); ?>"
           src="/<?php echo e($cartItem->product->media->where('type', 'min')->first()->path); ?><?php echo e($cartItem->product->media->where('type', 'min')->first()->name); ?>"
           alt="<?php echo e($cartItem->product->media->where('type', 'min')->first()->name); ?> <?php echo e($cartItem->product->name); ?>">
         <?php else: ?>
          <img title="default image" class="cart__list--img" src="/images/store/default/default70.webp"
           alt="something wrong">
         <?php endif; ?>
         <a
          href="<?php echo e(route('product', ['product' => $cartItem->product->seo_id !== null && $cartItem->product->seo_id !== '' ? $cartItem->product->seo_id : $cartItem->product->id])); ?>"
          target="_blank" class="total__name"><?php echo e($cartItem->product->name); ?></a>
         <span class="total__price">
          <?php echo e(number_format($cartItem->quantity * $cartItem->price, 2, $decimal, $mill)); ?>

          <?php if(app()->has('global_currency_primary_symbol')): ?>
           <?php echo app('global_currency_primary_symbol'); ?>

          <?php endif; ?>
         </span>
        </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <div class="total__item">
        <span>
         <?php if(app()->has('label_order_payment_method')): ?>
          <?php echo app('label_order_payment_method'); ?>

         <?php endif; ?>
        </span>
        <span><?php echo e($new_order->payment->description); ?></span>
       </div>
       <div class="total__item">
        <span>
         <?php if(app()->has('label_cart_delivery_tag')): ?>
          <?php echo app('label_cart_delivery_tag'); ?>

         <?php endif; ?>
        </span>
        <span>
         <?php if($new_order->delivery_price == 0): ?>
          <?php if(app()->has('label_cart_delivery_free')): ?>
           <?php echo app('label_cart_delivery_free'); ?>

          <?php endif; ?>
         <?php else: ?>
          <?php echo e(number_format($new_order->delivery_price, 2, $decimal, $mill)); ?> <?php if(app()->has('global_currency_primary_symbol')): ?>
           <?php echo app('global_currency_primary_symbol'); ?>

          <?php endif; ?>
         <?php endif; ?>
        </span>
       </div>
       <?php if($new_order->voucher && $new_order->voucher_value > 0): ?>
        <div class="total__item">
         <span>
          <?php if(app()->has('label_cart_voucher_tag')): ?>
           <?php echo app('label_cart_voucher_tag'); ?>

          <?php endif; ?>
         </span>
         <span>
          -<?php echo e(number_format($new_order->voucher_value, 2, $decimal, $mill)); ?>

          <?php if(app()->has('global_currency_primary_symbol')): ?>
           <?php echo app('global_currency_primary_symbol'); ?>

          <?php endif; ?>

         </span>
        </div>
       <?php endif; ?>
       <div class="total__item">
        <span>
         <?php if(app()->has('label_cart_total_tag')): ?>
          <?php echo app('label_cart_total_tag'); ?>

         <?php endif; ?>
        </span>
        <span id="final__amount"><?php echo e(number_format($new_order->final_amount, 2, $decimal, $mill)); ?>

         <?php if(app()->has('global_currency_primary_symbol')): ?>
          <?php echo app('global_currency_primary_symbol'); ?>

         <?php endif; ?>
        </span>
       </div>
      </div>
     </div>
     <script>
      window.addEventListener('DOMContentLoaded', function() {
       Livewire.emit('orderprocess');
      });
     </script>
     <div class="dlv" style="display: none">
      <span class="dlv_currency">
       <?php if(app()->has('global_currency_primary_name')): ?>
        <?php echo app('global_currency_primary_name'); ?>

       <?php endif; ?>
      </span>
      <span class="dlv_value"><?php echo e($cart->final_amount); ?></span>
      <span class="dlv_coupon"><?php echo e(optional($cart->voucher)->code); ?></span>
      <span class="dlv_transaction"><?php echo e($new_order->order_number); ?></span>
      
      <span class="dlv_shipping">
       <?php if($new_order->delivery_price == 0): ?>
        Gratuit
       <?php else: ?>
        <?php echo e($new_order->delivery_price); ?> <?php if(app()->has('global_currency_primary_symbol')): ?>
         <?php echo app('global_currency_primary_symbol'); ?>

        <?php endif; ?>
       <?php endif; ?>
      </span>
      <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="dlv_item">
        <span class="dlv_item-id"><?php echo e($cartItem->product->id); ?></span>
        <span class="dlv_item-name"><?php echo e($cartItem->product->name); ?></span>
        <span class="dlv_item-price"><?php echo e($cartItem->price); ?></span>
        <span class="dlv_item-quantity"><?php echo e($cartItem->quantity); ?></span>
       </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
<script>
  async function purchase() {
    var dlv = document.querySelector('.dlv');
    if (!dlv) {
      console.error('Elementul cu clasa .dlv nu a fost găsit.');
      return;
    }

    var currency = dlv.querySelector('.dlv_currency').innerText.trim();
    var value = parseFloat(dlv.querySelector('.dlv_value').innerText.trim().replace(',', '.'));
    var coupon = dlv.querySelector('.dlv_coupon').innerText.trim() || undefined;
    var transaction_id = dlv.querySelector('.dlv_transaction').innerText.trim();
    var shipping = parseFloat(dlv.querySelector('.dlv_shipping').innerText.trim().replace(',', '.'));

    var items = [];
    var dlv_items = dlv.querySelectorAll('.dlv_item');
    dlv_items.forEach(dlv_item => {
      var item_id = dlv_item.querySelector('.dlv_item-id').innerText.trim();
      var item_name = dlv_item.querySelector('.dlv_item-name').innerText.trim();
      var item_price = parseFloat(dlv_item.querySelector('.dlv_item-price').innerText.trim().replace(',', '.'));
      var item_quantity = parseInt(dlv_item.querySelector('.dlv_item-quantity').innerText.trim(), 10);
      items.push({ item_id, item_name, price: item_price, quantity: item_quantity });
    });

    return { currency, value, coupon, transaction_id, shipping, items };
  }

  async function extractShippingData() {
    const lookForm = document.querySelector('.look__form');
    if (!lookForm) {
      console.error('Shipping information not found.');
      return;
    }

    const firstName = lookForm.querySelectorAll('h3')[1].nextElementSibling.querySelectorAll('strong')[0].innerText.trim();
    const lastName = lookForm.querySelectorAll('h3')[1].nextElementSibling.querySelectorAll('strong')[1].innerText.trim();
    const phone = lookForm.querySelectorAll('h3')[1].nextElementSibling.nextElementSibling.querySelector('strong').innerText.trim();
    const email = lookForm.querySelectorAll('h3')[1].nextElementSibling.nextElementSibling.nextElementSibling.querySelector('strong').innerText.trim();
    const street = lookForm.querySelectorAll('h3')[1].nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.querySelectorAll('strong')[0].innerText.trim();
    const region = lookForm.querySelectorAll('h3')[1].nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.querySelector('strong').innerText.trim();
    const city = lookForm.querySelectorAll('h3')[1].nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.querySelector('strong').innerText.trim();
    const postalCode = lookForm.querySelectorAll('h3')[1].nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.querySelector('strong').innerText.trim();
    const country = 'RO';

    return {
      email: email.toLowerCase().trim(),
      phone_number: phone.trim(),
      address: {
        first_name: firstName.toLowerCase().trim(),
        last_name: lastName.toLowerCase().trim(),
        street: street.toLowerCase().trim(),
        city: city.toLowerCase().trim(),
        region: region.toLowerCase().trim(),
        postal_code: postalCode.trim(),
        country: country.toLowerCase().trim()
      }
    };
  }

  async function pushPurchaseEvent() {
    const dlvData = await purchase();
    const userData = await extractShippingData();

    if (!dlvData || !userData) {
      console.error("Missing data for the purchase event.");
      return;
    }

    dataLayer.push({ ecommerce: null }); // Clear any previous ecommerce data
    dataLayer.push({
      event: "purchase",
      ecommerce: {
        currency: dlvData.currency,
        value: dlvData.value,
        coupon: dlvData.coupon,
        transaction_id: dlvData.transaction_id,
        shipping: dlvData.shipping,
        items: dlvData.items,
        user_data: {
          email: userData.email,
          phone_number: userData.phone_number,
          address: userData.address
        }
      }
    });
  }

  pushPurchaseEvent();
</script>



    <?php endif; ?>
    <!------------------- Controls ------------------->
    <div class="checkout__header" style="flex-direction: row !important">
     <?php if($step == 2): ?>
      <button class="checkout__button" wire:click.prevent="previous()" aria-label="go to previous step">
       <svg>
        <line x1="19" y1="12" x2="5" y2="12"></line>
        <polyline points="12 19 5 12 12 5"></polyline>
       </svg>
       <?php if(app()->has('label_order_previous_step')): ?>
        <?php echo app('label_order_previous_step'); ?>

       <?php endif; ?>
      </button>
      <?php if($modification): ?>
       <button class="checkout__button checkout__button--confirm item__button--disabled">
        <?php if(app()->has('label_order_confirm_step')): ?>
         <?php echo app('label_order_confirm_step'); ?>

        <?php endif; ?>
        <svg>
         <polyline points="9 11 12 14 22 4"></polyline>
         <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
        </svg>
       </button>
      <?php else: ?>
       <button class="checkout__button checkout__button--confirm" wire:click.prevent="confirm()">
        <?php if(app()->has('label_order_confirm_step')): ?>
         <?php echo app('label_order_confirm_step'); ?>

        <?php endif; ?>
        <svg>
         <polyline points="9 11 12 14 22 4"></polyline>
         <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
        </svg>
       </button>
      <?php endif; ?>
     <?php elseif($step == 1): ?>
      <button class="checkout__link checkout__button--confirm"
       <?php if($individual && $individual_identic): ?> onclick="validateIndividual(this)" <?php elseif($individual && !$individual_identic): ?> onclick="validateIndividualIdentic(this)" <?php elseif($juridic && $juridic_identic): ?> onclick="validateJuridic(this)" <?php else: ?> onclick="validateJuridicIdentic(this)" <?php endif; ?>
       wire:click.prevent="next()" aria-label="go to next step" style="margin: 0 auto;">
       <?php if(app()->has('label_order_next_step')): ?>
        <?php echo app('label_order_next_step'); ?>

       <?php endif; ?>
       <svg>
        <line x1="5" y1="12" x2="19" y2="12"></line>
        <polyline points="12 5 19 12 12 19"></polyline>
       </svg>
      </button>
     <?php endif; ?>
    </div>
   </div>
  </section>
 <?php endif; ?>


</div>
<?php /**PATH D:\Cloud\Comps\5 - EMBIANZ\1 - Iosif\Embianz\resources\views/livewire/store-order.blade.php ENDPATH**/ ?>