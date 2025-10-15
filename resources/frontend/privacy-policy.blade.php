@extends('frontend.layouts.app')

@section('title')
	@if(app()->getLocale() == 'en')
        EGEC | Privacy policy
    @else
        EGEC |سياسة الخصوصية
	@endif
@endsection

@section('egec')
    @include('frontend.layouts.loader')

    @include('frontend.layouts.header')

    @if(app()->getLocale() == 'en')
        <style>
            .addmimsionStyle {
                 bottom: 34px !important;
                    right: 20px !important;
                    width: 172px !important;
                    position: fixed !important;
                    z-index: 99999 !important;
                    display: block !important;
             } 
        </style>
        
        <div class="btn-part addmimsionStyle">
                        
                        <a class="nav-expander apply-btn btn btn-primary text-white " style="font-size: 14px !important;" id="nav-expander">Admission Request</a>
                                            
                    </div>
        <div class="main-content">
            <div class="inner-hdr" style="background-image:url({{ asset('egec_new/frontend/images/slider/1.jpg') }})">
               <!--small-banner-->
               <div class="small-banner">
                  <div class="container">
                     <!--title-->
                     <div class="title">
                           <h3>Privacy policy</h3>
                     </div>
                     <!--End title-->               
                  </div>
               </div>
               <!--End small-banner-->
            </div>
            
            <section class="bg0 p-t-75 p-b-120" style="padding: 70px 0;">
               <div class="container">
                   
                  <p>Last updated: March 18, 2021</p>
                  <p>This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>
                  <p>We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. 
                  </p><h3 class="my-3">Collecting and Using Your Personal Data</h3>
                  <p>While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:</p>
                  <ul>
                  <li>
                  <p>Email address</p>
                  </li>
                  <li>
                  <p>First name and last name</p>
                  </li>
                  <li>
                    <p>Phone Number &amp; State and Address for delivery purposes</p>
                  </li>
                  </ul>
                  <h3>Tracking Technologies and Cookies</h3>
                  <p class="my-3"><strong>Necessary / Essential Cookies</strong></p>
                  <p>Type: Session Cookies</p>
                  <p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
                  <p class="my-3"><strong>Functionality Cookies</strong></p>
                  <p>Type: Persistent Cookies</p>
                  <p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
                  <p>For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.</p>
                  <h3>Use of Your Personal Data</h3>
                  <p>The Company may use Personal Data for the following purposes:</p>
                  <ul>
                  <li>
                  <p class="my-3"><strong>To provide and maintain our Service</strong>, including to monitor the usage of our Service.</p>
                  </li>
                  <li>
                  <p class="my-3"><strong>To manage Your Account:</strong> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</p>
                  </li>
                  <li>
                  <p class="my-3"><strong>For the performance of a contract:</strong> the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</p>
                  </li>
                  <li>
                  <p class="my-3"><strong>To contact You:</strong> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</p>
                  </li>
                  <li>
                  <p class="my-3"><strong>To provide You</strong> with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</p>
                  </li>
                  <li>
                  <p class="my-3"><strong>To manage Your requests:</strong> To attend and manage Your requests to Us.</p>
                  </li>
                  <li>
                  <p class="my-3"><strong>For other purposes</strong>: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.</p>
                  </li>
                  </ul>
                  <h3>Transfer of Your Personal Data</h3>
                  <p>Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.</p>
                  <p>Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p>
                  <p>The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</p>
                  <h3 class="my-3">Security of Your Personal Data</h3>
                  <p>The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p>
                  <h3 class="my-3">Changes to this Privacy Policy</h3>
                  <p>We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p>
                  <p>We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the "Last updated" date at the top of this Privacy Policy.</p>
                  <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>
                  <h3 class="my-3">Contact Us</h3>
                  <p>If you have any questions about this Privacy Policy, You can contact us:</p>
                  <ul>
                  <li>By email: <strong>Bonder@digitalbondmena.com</strong></li>
                  </ul>
                  <h3 id="data-deletion" class="my-3">Data Deletion Instructions</h3>
                  <p>At any time... you can contact us for your data deletion... This data deletion will remove your personal data (name &amp; email) and your orders from our website.</p>
                  <p>For data deletion... You just have to supply us with your user id, You can send it to us:</p>
                  <ul>
                  <li>By email: <strong>Bonder@digitalbondmena.com</strong></li>
                  </ul>
              
               </div>
            </section>


        </div>
        
        <div class="full-width-header header-style1 home1-modifiy">
                
           
            <div id="rs-header" class="rs-header">
                
                <nav class="right_menu_togle hidden-md ">
                            <div class="close-btn">
                                <span id="nav-close">
                                    <div class="line">
                                        <span class="line1"></span><span class="line2"></span>
                                    </div>
                                </span>
                            </div>
                            <div class="admision-text">
                                <h3>Apply Now</h3>
                                <p>The employee in charge will contact you ...</p>
                            </div>
                            <div class="admision-form">
                                <form id="uni-search-form" action="{{ route('submit-admission-info') }}" method="POST">
                                    
                                    
                                    @csrf
                                    <div class="mb-20">
                                        <label for="country-list">Country:</label>
                                        <select name="admission_destination_id" class="form-control" id="admission_destination_id" required>
                                                <option value="" >Select Distination</option>
                                               @foreach($destinations as $destination)
                                                    
                                                   
                                                    
                                                    <option value="{{ $destination->id }}" >{{ $destination->en_name }}</option>
                                                  
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="university-list">University:</label>
                                        <select name="admission_university_id" class="form-control" id="admission_university_id" required>
                                           
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="collage-list">Faculty:</label>
                                        <select name="admission_fac_uni_id" class="form-control" id="admission_fac_uni_id"  required>
    
    
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="collage-list">Major:</label>
                                        <select name="admission_fac_uni_major_id" class="form-control" id="admission_fac_uni_major_id" required>
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="collage-list">Department:</label>
                                        <select name="admission_department_id" class="form-control" id="admission_department_id" required>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3 text-center">
                                        <input class="btn-send" type="submit" value="Apply">
                                    </div>       
                                </form>
                            </div>
                        </nav>
                
            </div id="rs-header" class="rs-header">
            
             </div>
    @else
        <style>
             .addmimsionStyle {
                 bottom: 34px !important;
                    left: 20px !important;
                    width: 172px !important;
                    position: fixed !important;
                    z-index: 99999 !important;
                    display: block !important;
             }  
        </style>
        
        <div class="btn-part addmimsionStyle">
                        
                        <a class="nav-expander apply-btn btn btn-primary text-white " style="font-size: 14px !important;" id="nav-expander">طلب التحاق</a>
                                            
                    </div>
    
        <div class="main-content">
            <div class="inner-hdr" style="background-image:url({{ asset('egec_new/frontend/images/slider/6.jpg') }})">
               <!--small-banner-->
               <div class="small-banner">
                  <div class="container">
                     <!--title-->
                     <div class="title">
                           <h3> سياسة الخصوصية</h3>
                     </div>
                     <!--End title-->               
                  </div>
               </div>
               <!--End small-banner-->
            </div>
            
            <section class="bg0 p-t-75 p-b-120 text-right" style="padding: 70px 0">
               <div class="container">
               
                  <p>آخر تحديث: 18 مارس 2021</p>
                  <p>تصف سياسة الخصوصية هذه سياساتنا وإجراءاتنا المتعلقة بجمع معلوماتك واستخدامها والإفصاح عنها عند استخدامك للخدمة وتخبرك بحقوق الخصوصية الخاصة بك وكيف يحميك القانون.</p>
                  <p>نستخدم بياناتك الشخصية لتقديم الخدمة وتحسينها. باستخدام الخدمة ، فإنك توافق على جمع واستخدام المعلومات وفقًا لسياسة الخصوصية هذه.</p>
                  <h3 class="my-3">جمع واستخدام بياناتك الشخصية</h3>
                  <p>أثناء استخدام خدمتنا ، قد نطلب منك تزويدنا بمعلومات تعريف شخصية معينة يمكن استخدامها للاتصال بك أو التعرف عليك. قد تتضمن معلومات التعريف الشخصية ، على سبيل المثال لا الحصر:</p>
                  <ul>
                  <li>
                  <p>عنوان بريد الكتروني</p>
                  </li>
                  <li>
                  <p>الاسم الأول واسم العائلة</p>
                  </li>
                  <li>
                    <p>رقم الهاتف والدولة والعنوان لأغراض التسليم</p>
                  </li>
                  </ul>
                  <h3 class="my-3">تقنيات التتبع وملفات تعريف الارتباط</h3>
                  <p class="my-3"><strong>ملفات تعريف الارتباط الضرورية / الأساسية</strong></p>
                  <p>النوع: ملفات تعريف ارتباط الجلسة</p>
                  <p>الغرض: ملفات تعريف الارتباط هذه ضرورية لتزويدك بالخدمات المتاحة من خلال الموقع ولتمكينك من استخدام بعض ميزاته. إنها تساعد في مصادقة المستخدمين ومنع الاستخدام الاحتيالي لحسابات المستخدمين. بدون ملفات تعريف الارتباط هذه ، لا يمكن توفير الخدمات التي طلبتها ، ونحن نستخدم ملفات تعريف الارتباط هذه فقط لتزويدك بهذه الخدمات.</p>
                  <p class="my-3"><strong>ملفات تعريف الارتباط الوظيفية</strong></p>
                  <p>النوع: ملفات تعريف الارتباط الدائمة</p>
                  <p>الغرض: تسمح لنا ملفات تعريف الارتباط هذه بتذكر الاختيارات التي تقوم بها عند استخدام موقع الويب ، مثل تذكر تفاصيل تسجيل الدخول الخاصة بك أو تفضيلات اللغة. الغرض من ملفات تعريف الارتباط هذه هو تزويدك بتجربة شخصية أكثر وتجنب الاضطرار إلى إعادة إدخال تفضيلاتك في كل مرة تستخدم فيها الموقع.</p>
                  <p>لمزيد من المعلومات حول ملفات تعريف الارتباط التي نستخدمها وخياراتك فيما يتعلق بملفات تعريف الارتباط ، يرجى زيارة سياسة ملفات تعريف الارتباط أو قسم ملفات تعريف الارتباط في سياسة الخصوصية الخاصة بنا.</p>
                  <h3>استخدام بياناتك الشخصية</h3>
                  <p>يجوز للشركة استخدام البيانات الشخصية للأغراض التالية:</p>
                  <ul>
                  <li>
                  <p class="my-3"><strong>لتقديم خدماتنا والحفاظ عليها</strong>, بما في ذلك مراقبة استخدام خدمتنا.</p>
                  </li>
                  <li>
                  <p class="my-3"><strong>لإدارة حسابك:</strong> لإدارة تسجيلك كمستخدم للخدمة. يمكن أن تمنحك البيانات الشخصية التي تقدمها إمكانية الوصول إلى الوظائف المختلفة للخدمة المتاحة لك كمستخدم مسجل.</p>
                  </li>
                  <li>
                  <p class="my-3"><strong>لتنفيذ العقد:</strong> تطوير والامتثال والتعهد بعقد الشراء للمنتجات أو الأصناف أو الخدمات التي اشتريتها أو أي عقد آخر معنا من خلال الخدمة.</p>
                  </li>
                  <li>
                  <p class="my-3"><strong>لاتصل بك:</strong> للاتصال بك عن طريق البريد الإلكتروني أو المكالمات الهاتفية أو الرسائل النصية القصيرة أو غيرها من أشكال الاتصالات الإلكترونية المماثلة ، مثل الإخطارات الفورية لتطبيقات الهاتف المحمول فيما يتعلق بالتحديثات أو الاتصالات الإعلامية المتعلقة بالوظائف أو المنتجات أو الخدمات المتعاقد عليها ، بما في ذلك التحديثات الأمنية ، عند الضرورة أو بشكل معقول لتنفيذها.</p>
                  </li>
                  <li>
                  <p class="my-3"><strong>لنوفر لك</strong> مع الأخبار والعروض الخاصة والمعلومات العامة حول السلع والخدمات والأحداث الأخرى التي نقدمها والتي تشبه تلك التي اشتريتها بالفعل أو استفسرت عنها ما لم تكن قد اخترت عدم تلقي هذه المعلومات.</p>
                  </li>
                  <li>
                  <p class="my-3"><strong>لإدارة طلباتك:</strong> لحضور وإدارة طلباتك إلينا.</p>
                  </li>
                  <li>
                  <p class="my-3"><strong>لأغراض أخرى:</strong>قد نستخدم معلوماتك لأغراض أخرى ، مثل تحليل البيانات ، وتحديد اتجاهات الاستخدام ، وتحديد فعالية حملاتنا الترويجية ولتقييم وتحسين خدماتنا ومنتجاتنا وخدماتنا وتسويقنا وتجربتك.</p>
                  </li>
                  </ul>
                  <h3 class="my-3">نقل بياناتك الشخصية</h3>
                  <p>تتم معالجة معلوماتك ، بما في ذلك البيانات الشخصية ، في مكاتب تشغيل الشركة وفي أي أماكن أخرى حيث توجد الأطراف المشاركة في المعالجة. وهذا يعني أنه قد يتم نقل هذه المعلومات إلى - والاحتفاظ بها - على أجهزة الكمبيوتر الموجودة خارج ولايتك أو مقاطعتك أو بلدك أو أي ولاية قضائية حكومية أخرى حيث قد تختلف قوانين حماية البيانات عن تلك الموجودة في ولايتك القضائية.</p>
                  <p>موافقتك على سياسة الخصوصية هذه متبوعة بتقديمك لهذه المعلومات يمثل موافقتك على هذا النقل.</p>
                  <p>ستتخذ الشركة جميع الخطوات اللازمة بشكل معقول لضمان التعامل مع بياناتك بشكل آمن ووفقًا لسياسة الخصوصية هذه ولن يتم نقل بياناتك الشخصية إلى منظمة أو دولة ما لم تكن هناك ضوابط كافية في مكانها بما في ذلك أمن بياناتك ومعلوماتك الشخصية الأخرى.</p>
                  <h3>أمن بياناتك الشخصية</h3>
                  <p>يعد أمان بياناتك الشخصية أمرًا مهمًا بالنسبة لنا ، ولكن تذكر أنه لا توجد طريقة نقل عبر الإنترنت أو طريقة تخزين إلكتروني آمنة بنسبة 100٪. بينما نسعى جاهدين لاستخدام وسائل مقبولة تجاريًا لحماية بياناتك الشخصية ، لا يمكننا ضمان أمنها المطلق.</p>
                  <h3>التغييرات على سياسة الخصوصية هذه</h3>
                  <p>قد نقوم بتحديث سياسة الخصوصية الخاصة بنا من وقت لآخر. سنخطرك بأي تغييرات عن طريق نشر سياسة الخصوصية الجديدة على هذه الصفحة.</p>
                  <p>سنخبرك عبر البريد الإلكتروني و / أو إشعارًا بارزًا على "خدمتنا" ، قبل أن يصبح التغيير ساريًا ونقوم بتحديث &amp; quot؛ آخر تحديث &amp; quot؛ التاريخ في الجزء العلوي من سياسة الخصوصية هذه.</p>
                  <p>يُنصح بمراجعة سياسة الخصوصية هذه بشكل دوري لمعرفة أي تغييرات. تسري التغييرات التي تطرأ على سياسة الخصوصية هذه عند نشرها على هذه الصفحة.</p>
                  <h3>اتصل بنا</h3>
                  <p>إذا كان لديك أي أسئلة حول سياسة الخصوصية هذه ، يمكنك الاتصال بنا:</p>
                  <ul>
                  <li>بالبريد الالكتروني: <strong>Bonder@digitalbondmena.com</strong></li>
                  </ul>
                  <h3 id="data-deletion" class="my-3">تعليمات حذف البيانات</h3>
                  <p>في أي وقت ... يمكنك الاتصال بنا لحذف بياناتك ... سيؤدي حذف البيانات هذا إلى إزالة بياناتك الشخصية (الاسم والبريد الإلكتروني) وطلباتك من موقعنا على الإنترنت.</p>
                  <p>لحذف البيانات ... عليك فقط تزويدنا بمعرف المستخدم الخاص بك ، يمكنك إرسالها إلينا:</p>
                  <ul>
                  <li>بالبريد الالكتروني: <strong>Bonder@digitalbondmena.com</strong></li>
                  </ul>
              
               </div>
            </section>


            
        </div>
        
        <div class="full-width-header header-style1 home1-modifiy">>
                
           
            <div id="rs-header" class="rs-header">
                
                <nav class="right_menu_togle hidden-md ">
                            <div class="close-btn">
                                <span id="nav-close">
                                    <div class="line">
                                        <span class="line1"></span><span class="line2"></span>
                                    </div>
                                </span>
                            </div>
                            <div class="admision-text">
                                <h3>سجل الان</h3>
                                <p>سيتصل بك الموظف المسؤول ...</p>
                            </div>
                            <div class="admision-form">
                                <form id="uni-search-form" action="{{ route('submit-admission-info') }}" method="POST">
                                    
                                    
                                    @csrf
                                    <div class="mb-20">
                                        <label for="country-list">البلد:</label>
                                        <select name="admission_destination_id" class="form-control" id="admission_destination_id" required>
                                                    <option value="">اختر الدوله</option>
                                               @foreach($destinations as $destination)
                                                    
                                                    <option value="{{ $destination->id }}">{{ $destination->ar_name }}</option>
                                                    
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="university-list">الجامعه:</label>
                                        <select name="admission_university_id" class="form-control" id="admission_university_id" required>
                                            
                                         
                                           
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="collage-list">الكلية:</label>
                                        <select name="admission_fac_uni_id" class="form-control" id="admission_fac_uni_id"  required>
    
    
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="collage-list">الدرجه العلميه:</label>
                                        <select name="admission_fac_uni_major_id" class="form-control" id="admission_fac_uni_major_id" required>
                                        </select>
                                    </div>
                                    <div class="mb-20">
                                        <label for="collage-list">التخصص:</label>
                                        <select name="admission_department_id" class="form-control" id="admission_department_id" required>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3 text-center">
                                        <input class="btn-send" type="submit" value="Apply">
                                    </div>       
                                </form>
                            </div>
                        </nav>
                
            </div id="rs-header" class="rs-header">
            
             </div>
    @endif

    @include('frontend.layouts.footer')
@endsection