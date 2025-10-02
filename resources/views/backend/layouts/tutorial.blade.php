        @if(auth()->user()->admin_status_ads == 0)
        <div id="sliderToturial" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="    position: absolute;
                    z-index: 999;
                    border: none;
                    padding: 10px;">
                        <button type="button" class="close" data-dismiss="modal" style="background-color: #0404" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    <div class="modal-body p-0">

                        <div class="row">
                            <div class="col-12">
                                <div id="carousel-example-caption" class="carousel slide" data-ride="carousel">

                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="{{ asset('backend/app-assets/images/slider-tut/1.jpg') }}" alt="First slide">
                                            <div class="card-img-overlay ">
                                                <div class="carousel-caption d-none d-sm-block">
                                                    <p class="text-dark">يمكنك إعادة تحميل الجدول من خلال الضغط هنا</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="{{ asset('backend/app-assets/images/slider-tut/2.jpg') }}" alt="Second slide">
                                            <div class="card-img-overlay ">
                                                <div class="carousel-caption d-none d-sm-block">
                                                    <p class="text-dark">تستطيع التنقل بين مظهرين لعرض البيانات في الجدول</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="{{ asset('backend/app-assets/images/slider-tut/3.jpg') }}" alt="Third slide">
                                            <div class="card-img-overlay ">
                                                <div class="carousel-caption d-none d-sm-block">
                                                    <p class="text-dark"> قم بتحميل بيانات الجدول في ملف أكسيل</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="{{ asset('backend/app-assets/images/slider-tut/4.jpg') }}
                                            " alt="fourth slide">

                                            <div class="card-img-overlay ">

                                                <div class="carousel-caption d-none d-sm-block">
                                                    <p class="text-dark">يمكنك إخفاء/ إظهار عواميد الجدول حسب حاجتك</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="{{ asset('backend/app-assets/images/slider-tut/5.jpg') }}
                                            " alt="Fifth slide">
                                            <div class="card-img-overlay ">
                                                <div class="carousel-caption d-none d-sm-block">
                                                    <p class="text-dark"> تستطيع تكبير/ تصغير مساحة العواميد في الجدول
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="{{ asset('backend/app-assets/images/slider-tut/6.jpg') }}
                                            " alt="Fifth slide">
                                            <div class="card-img-overlay ">
                                                <div class="carousel-caption d-none d-sm-block">
                                                    <p class="text-dark">  قم بترتيب بياناتك داخل الجدول تصاعديًا/ تنازليًا حسب رغبتك
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="{{ asset('backend/app-assets/images/slider-tut/7.jpg') }}
                                            " alt="Fifth slide">
                                            <div class="card-img-overlay ">
                                                <div class="carousel-caption d-none d-sm-block">
                                                    <p class="text-dark">
                                                        ابحث عن الكلمة التي تريد وستظهر لك النتائج في لحظات
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="{{ asset('backend/app-assets/images/slider-tut/8.jpg') }}
                                            " alt="Fifth slide">
                                            <div class="card-img-overlay ">
                                                <div class="carousel-caption d-none d-sm-block">
                                                    <p class="text-dark">
                                                        ابحث عن الكلمة التي تريد وستظهر لك النتائج في لحظات

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-next" href="#carousel-example-caption" role="button" data-slide="next">
                                        <div class="overlay-carousal">

                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </div>
                                    </a>
                                    <a class="carousel-control-prev" href="#carousel-example-caption" role="button" data-slide="prev">
                                        <div class="overlay-carousal">

                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12">

                                <form action="{{ route('changeStatus') }}" method="POST">
                                    @csrf
                                    <div class="row justify-content-between align-items-center my-2 px-2">
                                        <div class="col-3 form-group mb-0">

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="" id="dont_show_again" value="dont_show" >
                                                <label class="form-check-label" for="dont_show_again">
                                                لا تظهر مجددًا
                                              </label>
                                            </div>

                                        </div>
                                        <div class="col-3">
                                            <button id="agreeButton" style="opacity: 0;" class="btn btn-primary w-100" data-dismiss="bachelorDatadal" aria-label="Close" type="submit">موافق</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endif