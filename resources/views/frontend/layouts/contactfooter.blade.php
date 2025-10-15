<!-- countact secion -->
<section class="countact-section  position-relative countact-page " style="background-color: var(--gray);">
  <div class="container">
    <div class="row d-flex justify-content-between" >

      <div class="col-lg-5  col-md-6  ">
        <div class="form-text ">
          <p class="p-size-title text-black">ارسل لنا</p>
          <p class="text-black50">{{ $contactus->contact_text }} </p>
          <p class="p-size-title text-black"> استثمر في مصر  </p>
          <div class="icons row">
              <div class="footer-item col-12">
      
                <!-- href="tel:+2011 23 45 67 89" -->
                <div class=" icon-box">
                  <i class="fa-solid fa-phone i-contact "></i>
                  <span class="ps-1 text-black50"><a href="" target="_blank" class="text-black50"> {{ $contactus->phone }} </a></span>
                </div>

                <!-- href="mailto:information@gmail.com" -->
                <div class=" icon-box">
                  <i class="fa-solid fa-envelope i-contact "></i>
                  <span class="ps-1 text-black50"><a href="" target="_blank" class="text-black50"> {{ $contactus->email }}  </a></span>
                </div>
           

                <div class="icon-box">
                  <i class="fa-solid fa-location-dot i-contact "></i>
                  <span class="ps-1 text-black50"><a href="{{ $contactus->map_link }}"  target="_blank" class="text-black50"> {{ $contactus->ar_address }}  </a> </span>
                </div>
                
      
              </div>

              <div class="col-8 d-flex justify-content-between">
                <a  class="icons-social social"  href="{{ $contactus->facebook }}"><i class="fa-brands fa-facebook-f icon-font"></i></a>  
                <a  class="icons-social social"  href="{{ $contactus->instagram }}"> <i class="fa-brands fa-instagram icon-font"></i></a>  
                <a  class="icons-social social"  href="{{ $contactus->linkedIn }}"> <i class="fa-brands fa-linkedin icon-font"></i></a> 
                <a  class="icons-social social"  href="{{ $contactus->tweet }}"><i class="fa-brands fa-x-twitter icon-font"></i></a>  
                <a  class="icons-social social"  href="{{ $contactus->snapChat }}"><i class="fa-brands fa-snapchat icon-font"></i></a>  
                <a  class="icons-social social"  href="{{ $contactus->tiktok }}"><i class="fa-brands fa-tiktok icon-font"></i></a>  
              </div>
       
          </div>
        </div>
        
        
      </div>

      <div class="col-lg-6 col-md-6 col-12  d-flex justify-content-center ">

        <div class="col-md-10 col-12 ">
          <p class="p-size-title text-black"> تواصل معنا</p>

          <form class="contact-form " action="{{ route('sendMessage') }}" method="post">
            @csrf
            <div class="form-group">
              
              <!-- name -->
                <input name="name" class="input-defult" type="text" placeholder="الاسم"
                pattern="^[\u0600-\u06FFa-zA-Z -]+$" title="يجب أن يحتوي الأسم علي 3 أحرف علي الأقل"
                oninvalid="if (this.value === '') { this.setCustomValidity('الأسم مطلوب'); }"
                oninput="if (this.value === '') { this.setCustomValidity('الأسم مطلوب'); } else if (this.value.length < 3) { this.setCustomValidity('يجب أن يحتوي الأسم علي 3 أحرف علي الأقل'); } else { this.setCustomValidity(''); }"
                onkeydown="handleKeydown(event)" onpaste="handlePaste(event)"  placeholder="الأسم" required autocomplete="off" lang="ar">
            </div>



            <!-- phone -->
            <div class="form-group"  > 
              <input name="phone" class="input-defult" type="text"  onkeypress="return isNumberKey(event)" onpaste="onPaste(event)"    placeholder="رقم الهاتف" required 
              oninvalid="if (this.value === '') { this.setCustomValidity('رقم الهاتف مطلوب'); }"
              oninput="if (this.value === '') { this.setCustomValidity('رقم الهاتف مطلوب'); }  else { this.setCustomValidity(''); }">
           </div>

           
            <!-- email -->
            <div class="form-group  ">
              <input name="email" class="input-defult" type="email" title="يجب أن يحتوي على @ و ." placeholder=" البريد الإلكتروني" required
              oninvalid="if (this.value === '') { this.setCustomValidity('البريد الإلكتروني مطلوب'); } else if (!/.+@.+\..+/.test(this.value)) { this.setCustomValidity('البريد الإلكتروني غير صالح'); } else { this.setCustomValidity(''); }"
              oninput="this.reportValidity();" >
          </div>


          <!-- massage -->
          <div class="form-group">
              <textarea   name="message"  class="input-defult"  style=" max-height: 120px; min-height: 120px;"    placeholder=" رسالتك" required
              oninvalid="if (this.value === '') { this.setCustomValidity(' الرسالة مطلوبة '); }"
              oninput="if (this.value === '') { this.setCustomValidity(' الرسالة مطلوبة  '); } else if (this.value.length < 10) { this.setCustomValidity('يجب أن تحتوي الرسالة على 10 أحرف على الأقل'); } else { this.setCustomValidity(''); }"
              ></textarea>
          </div>

          <div class="form-group  d-flex justify-content-center">
            <button type="submit"  class="btn defult-btn mt-4 w-100"   > ارسل لنا </button>
          </div>
          </form>
        </div>

      </div>

   

    </div>
  </div>
  <div class="icons">
    <img src="{{ asset('website/assets/images/shared/circlies.webp')}}" class="circliesform bottom-top" loading="lazy">    

  </div>
</section>
<!-- countact secion -->

<!-- upperfooter secion -->
<section class="upperfooter-section overflow-hidden position-relative">

    <iframe src="{{ $contactus->map_link }}" class="w-100 h-100" ></iframe>

</section>
<!-- end upperfooter secion -->

<!-- footer secion -->
<footer class="footer overflow-hidden position-relative">
  <div class="container">
    <div class="row d-flex justify-content-between " >

      <div class="col-lg-3 col-md-7  col-6 footer-data">
        <div class="footer-item">
          <div class="d-flex align-items-center">
            <img src="{{ asset('website/assets/logo-footer.webp')}}" width="60">
          </div>
          <p class="footer-about">
            {{ $aboutpage->footer_text }}
          </p>
      
        </div>
      </div>

      <div class="col-lg-4 col-md-5 col-6  footer-data d-flex justify-content-center">
        <div class="footer-item">
          <p class="logo-name">  روابط سريعة </p>
          <ul>
            <li><a href="{{ route('welcome') }}"> الرئيسية </a></li>
            <li><a href="{{ route('about-us') }}"> من نحن </a></li>
            <li><a href="{{ route('services') }}"> خدماتنا </a></li>
            <li><a href="{{ route('contact-us') }}"> تواصل معنا</a></li>       
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-8 footer-data  d-flex justify-content-center">
        <div class="footer-item">
          <p class="logo-name">  تواصل معنا </p>

          <div class="footer-contact location-res mb-3">
            <i class="fa-solid fa-location-dot icons-contact icon-font"></i>
            <span class="ps-1"><a href="{{ $contactus->map_link }}"  target="_blank">   {{ $contactus->ar_address }}  </a> </span>
          </div>
          <!-- href="mailto:information@gmail.com" -->
          <div class=" footer-contact mt-res mb-3">
            <i class="fa-solid fa-envelope icons-contact icon-font"></i>
            <span class="ps-1"><a href="mailto:{{ $contactus->email }}" target="_blank">    {{ $contactus->email }}  </a></span>
          </div>
          <!-- href="tel:+2011 23 45 67 89" -->
          <div class="footer-contact mt-res ">
            <i class="fa-solid fa-phone icons-contact icon-font"></i>
            <span class="ps-1"><a href="tel:{{ $contactus->phone }}" target="_blank">   {{ $contactus->phone }}  </a></span>
          </div>

        </div>
      </div>

      <div class="col-lg-2 col-md-6 col-2  footer-social d-flex align-items-center justify-content-end center-res">
        <div class="footer-item social">
    

          <div class="icons-social  " >
            <a  class="icons-social social"  href="{{ $contactus->facebook }}"><i class="fa-brands fa-facebook-f icon-font"></i></a>  
            <a  class="icons-social social"  href="{{ $contactus->instagram }}"> <i class="fa-brands fa-instagram icon-font"></i></a>  
            <a  class="icons-social social"  href="{{ $contactus->linkedIn }}"> <i class="fa-brands fa-linkedin icon-font"></i></a> 
            <a  class="icons-social social"  href="{{ $contactus->tweet }}"><i class="fa-brands fa-x-twitter icon-font"></i></a>  
            <a  class="icons-social social"  href="{{ $contactus->snapChat }}"><i class="fa-brands fa-snapchat icon-font"></i></a>  
            <a  class="icons-social social"  href="{{ $contactus->tiktok }}"><i class="fa-brands fa-tiktok icon-font"></i></a>   

          </div>

        </div>
      </div>
    </div>
  </div>

</footer>

<section class="powred-by">
  <div class="container">
    <div class="row justify-content-center align-items-center pt-3 pb-3">
    <span class="w-auto p-1 fw-bolder">  حقوق الطبع والنشر © 2024 جميع الحقوق محفوظة لشركة </span>  <a class="w-auto p-0" href="https://digitalbondmena.com/" target="_blank" >  <img src="{{ asset('website/assets/logo_black.webp')}}" ></a> 
    </div>
  </div>
</section>
<!-- end  footer secion -->