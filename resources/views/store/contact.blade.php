<x-store-head :canonical="'contact'" :title="'Contact Us'" :description="'Contact Us'"/>
@livewire('store-header')

<main>
   <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" defer></script>
   <script type="text/javascript">
     var onloadCallback = function() {
       grecaptcha.render('html_element', {
         'sitekey': '6LchwKgpAAAAAML77tNGuCi7R5k5eQrqszG5DMZ4',
         'callback': verifyCallback,
         'theme': 'light', // You can set the theme here
         'hl': 'en_US'
       });
     };
     var verifyCallback = function(response) {
       if (response) {
         // reCAPTCHA was successfully completed, change the button type to "submit"
         document.getElementById('submit_button').type = 'submit';
         document.getElementById('submit_button').disabled = false;
       } else {
         // reCAPTCHA was not completed, change the button type to "button"
         document.getElementById('submit_button').type = 'button';
         document.getElementById('submit_button').disabled = true;
         alert("Please complete the reCAPTCHA.");
       }
     };
   </script>

   <!---------------------------------------------------------->
   <!------------------------Breadcrumbs----------------------->
   <section>
     <div class="breadcrumbs container">
       <a class="breadcrumbs__link" href="{{ url("/") }}">
         Home
       </a>
       <a class="breadcrumbs__link" href="{{ url("/contact") }}">
         Contact Us
       </a>
     </div>
   </section>
   <!----------------------End Breadcrumbs--------------------->
   <!---------------------------------------------------------->
   <!----------------------Section Header---------------------->
   <h1 class="section__title">
     Contact Us
   </h1>
   <p class="section__text">
     Complete the form or contact us directly via email.
   </p>
   <!--------------------End Section Header-------------------->
   <!---------------------------------------------------------->
   <!-----------------------Contact Form----------------------->
   <section class="contact container">
     <form class="checkout__form active" action="" method="POST">
       <input type=hidden name="retURL" value="{{ URL("/redirect") }}">
       <input type=hidden name='captcha_settings' value='{"keyname":"","fallback":"true","orgId":"00D09000008XPQu","ts":""}'>
       <input type="hidden" name="orgid" value="00D09000008XPQu">
       <input  id="00N9N000000QGVe" value="{{ app('global_site_url') }}" name="00N9N000000QGVe" type="hidden" />
       <input  id="type" type="hidden" name="type" value="Store Case" />
       <input type="hidden" name="subject" id="subject" value="subject">
       <!--  ----------------------------------------------------------------------  -->
       <!--  ----------------------------------------------------------------------  -->
       <div class="checkout__item checkout__item--required" id="nameParent">
         <input type="text" maxlength="100" name="name" placeholder="name"id="name" autocomplete="given-name" required>
         <label for="name">Name</label>
         <span></span>
       </div>
       <div class="checkout__item" id="companyParent">
         <input type="text" maxlength="100" name="company" id="company" placeholder="company" autocomplete="company">
         <label for="company">Company Name</label>
         <span></span>
       </div>
       <div class="checkout__item checkout__item--required" id="emailParent">
         <input type="text" maxlength="100" name="email" id="email" placeholder="email" autocomplete="email" required>
         <label for="email">Email</label>
         <span></span>
       </div>
       <div class="checkout__item">
         <input type="text" maxlength="100" id="00N9N000000QGVj" maxlength="255" name="00N9N000000QGVj" placeholder="Order Number" autocomplete="off" >
         <label for="00N9N000000QGVj">Order Number</label>
         <span></span>
       </div>
       <div style="grid-column: 1/3" class="checkout__item checkout__item--required" id="message">
         <textarea style="height: auto; padding: 10px 20px;" name="description" rows="15" maxlength="5000" required placeholder="Tell us more. Start writing here..."></textarea>
         <label for="00N9N000000QGVj">Message</label>
         <span></span>
       </div>
       <div class="g-recaptcha" style="grid-column: 1/3" data-sitekey="6LfwYJkpAAAAAINvUbZhqEPmiXVLH7kWqXCDlY8k"></div>
       <div id="html_element" style="grid-column: 1/3"></div>
       <script>
          function timestamp() {
            var response = document.getElementById("g-recaptcha-response");
            if (response == null || response.value.trim() == "") {
              var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);
              elems["ts"] = JSON.stringify(new Date().getTime());
              document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems);
            }
          }
          setInterval(timestamp, 500);
       </script>
       <button style="grid-column: 1/3" class="contact__button g-recaptcha" disabled id="submit_button" type="submit" name="submit" aria-label="send message">
         Submit
         <svg>
           <line x1="22" y1="2" x2="11" y2="13"></line>
           <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
         </svg>
       </button>
     </form>
   </section>
   {{-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" defer></script> --}}
   <script src="/script/store/contact.js"></script>
   <script>
     applyValidations("nameParent", nameValidation, false);
     applyValidations("emailParent", emailValidation, false);
     applyValidations("companyParent", companyValidation, false);
     applyValidations("message", messageValidation, false);
   </script>

   <!---------------------End Contact Form--------------------->
   <!---------------------------------------------------------->

</main>

<x-store-footer />
