<a class="nav-link nav-link-label" href="javascript:void(0);" data-toggle="dropdown">
                            <i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i>
                            @if(auth()->user()->role == 'academic-guide')
                            
                            <span class="badge badge-pill badge-danger badge-up">{{ $notificationUpdatesAcademicGuidesCounts->count() + $notificationUpdatesAssAdminsCounts->count()}}</span>
                           
                            @elseif(auth()->user()->role == 'data-entry')
                            <span class="badge badge-pill badge-danger badge-up">{{ $notificationUpdatesAdminAndDataEntrysCounts->count() + $notificationUpdatesAssAcademicGuidesCounts->count()}}</span>
                            @elseif(auth()->user()->role == 'super-admin')
                            <span class="badge badge-pill badge-danger badge-up">{{ $notificationUpdatesAcademicGuidesCountsSuperAdmin->count()}}</span>
                            @endif
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right ">

                            <li class="dropdown-menu-header">
                                <div class="dropdown-header px-1 py-75 d-flex justify-content-between align-items-center">
                                     @if(auth()->user()->role == 'academic-guide')
                                        
                                        
                                    <h4 class="notification-title text-white mb-0 fs-15">{{ $notificationUpdatesAcademicGuidesCounts->count()+ $notificationUpdatesAssAdminsCounts->count()}} اشعارات</h4>
                                     
                                    @elseif(auth()->user()->role == 'data-entry')
                                    <h4 class="notification-title text-white mb-0 fs-15">{{ $notificationUpdatesAdminAndDataEntrysCounts->count()+ $notificationUpdatesAssAcademicGuidesCounts->count()}} اشعارات</h4>
                                    @elseif(auth()->user()->role == 'super-admin')

                                        <h4 class="notification-title text-white mb-0 fs-15">{{ $notificationUpdatesAcademicGuidesCountsSuperAdmin->count()}} اشعارات</h4>
                                    @endif
                                    
                                    
                                     <form method="POST" action="{{ route('admin.home') }}">
                            @csrf

                                    
                                    <button type="submit" onclick="singleNotificationAjax(jQuery('#notificationId{{ $notificationUpdatesAcademicGuidesfirst }}').val())" class="btn w-100 p-0 text-white text-bold-400 markAsRead cursor-pointer">اقرأ كل الاشعارات</button>
                                    <input type="hidden" name="notificationId" id="notificationId" value="{{ $notificationUpdatesAcademicGuidesfirst }}">
                            </form>

                                </div>
                            </li>
                            <li class="scrollable-container media-list ps">

                            @if(auth()->user()->role == 'super-admin')
                              
                                @foreach($notificationUpdatesAcademicGuides as $notificationUpdatesAcademicGuide)
                                @if($notificationUpdatesAcademicGuide->notification_type != 'super-admin')
                                    <form method="POST" action="{{ route('admin.home') }}">

                                        @csrf

                                        <button type="submit" onclick="notificationAjax(jQuery('#addmission_id{{$notificationUpdatesAcademicGuide->id}}').val())" class="btn p-0 w-100 d-flex justify-content-between cursor-pointer notification">

                                            <div class="media d-flex align-items-center">
                                                <div class="media-left pr-0">
                                                  <div class="avatar mr-1 m-0"><img src="app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="39" width="39"></div>
                                                </div>
                                                <div class="media-body text-left">
                                                  <h6 class="media-heading ">
                                                      قام  <span class="text-main">{{ $notificationUpdatesAcademicGuide->super_admin_name }} </span> بتعديل ملف  <span  class="text-main">{{ $notificationUpdatesAcademicGuide->notification_belongs }}</span>
                                                  </h6>
                                                      <small class="notification-text">{{ $notificationUpdatesAcademicGuide->created_at }}</small>
                                                </div>
                                              </div>
                                        </button>
                                            <input type="hidden" name="notification_check" id=""  value="1">
                                            <input type="hidden" name="addmission_id" id="addmission_id" value="{{$notificationUpdatesAcademicGuide->id}}">

                                    </form>
                                @endif
                                @endforeach

                            @elseif(auth()->user()->role == 'academic-guide')

                                @foreach($notificationUpdatesAdminAndDataEntrys as $notificationUpdatesAdminAndDataEntry)
                                    @if($notificationUpdatesAdminAndDataEntry->academic_guide == auth()->user()->name)
                                    <form method="POST" action="{{ route('admin.home') }}">

                                        @csrf

                                        <button type="submit" onclick="notificationAjax(jQuery('#addmission_id{{$notificationUpdatesAdminAndDataEntry->id}}').val())" class="btn p-0 w-100 d-flex justify-content-between cursor-pointer notification">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0">
                                                    <img src="https://www.digitalbondmena.com/egec_new_new/backend/app-assets/images/profile/portraits/avatar-portrait-1.jpg"
                                                        alt="avatar" height="39" width="39">
                                                </div>
                                            </div>
                                            <div class="media-body text-left">
                                                <h6 class="media-heading ">
                                                    قام  <span class="text-main">{{ $notificationUpdatesAdminAndDataEntry->super_admin_name }} </span> بتعديل ملف  <span  class="text-main">{{ $notificationUpdatesAdminAndDataEntry->notification_belongs }}</span>
                                                </h6>
                                                    <small class="notification-text">{{ $notificationUpdatesAdminAndDataEntry->created_at }}</small>
                                              </div>
                                        </div>
                                        </button>
                                            <input type="hidden" name="notification_check" id=""  value="1">
                                            <input type="hidden" name="addmission_id" id="addmission_id" value="{{$notificationUpdatesAdminAndDataEntry->id}}">

                                    </form>
                                    @endif

                                @endforeach


                                @foreach($notificationUpdatesAssAdmins as $notificationUpdatesAssAdmin)
                                      @if($notificationUpdatesAssAdmin->academic_guide == auth()->user()->name)
                                        <form method="POST" action="{{ route('admin.home') }}">

                                            @csrf

                                            <button type="submit" onclick="notificationAjax(jQuery('#notification_id{{$notificationUpdatesAssAdmin->id}}').val())" class="btn p-0 w-100 d-flex justify-content-between cursor-pointer notification">
                                            <div class="media d-flex align-items-center">
                                                <div class="media-left pr-0">
                                                    <div class="avatar mr-1 m-0">
                                                        <img src="https://www.digitalbondmena.com/egec_new_new/backend/app-assets/images/profile/portraits/avatar-portrait-1.jpg"
                                                            alt="avatar" height="39" width="39">
                                                    </div>
                                                </div>
                                                <div class="media-body text-left">
                                                    <h6 class="media-heading ">
                                                        قام  <span class="text-main">{{ $notificationUpdatesAssAdmin->super_admin_name }} </span>  بتخصيص العميل   <span  class="text-main">{{ $notificationUpdatesAssAdmin->notification_belongs }}</span> اليك
                                                    </h6>
                                                        <small class="notification-text">{{ $notificationUpdatesAssAdmin->created_at }}</small>
                                                  </div>
                                            </div>
                                            </button>
                                                <input type="hidden" name="notification_check" id=""  value="1">
                                                <input type="hidden" name="notification_id" id="notification_id" value="{{$notificationUpdatesAssAdmin->id}}">

                                        </form>
                                    @endif

                                @endforeach

                            @elseif(auth()->user()->role == 'data-entry')

                                @foreach($notificationUpdatesAdminAndDataEntrys as $notificationUpdatesAdminAndDataEntry)
                                    @if($notificationUpdatesAdminAndDataEntry->data_entry == auth()->user()->name)
                                    <form method="POST" action="{{ route('admin.home') }}">

                                        @csrf

                                        <button type="submit" onclick="notificationAjax(jQuery('#addmission_id{{$notificationUpdatesAdminAndDataEntry->id}}').val())" class="btn p-0 w-100 d-flex justify-content-between cursor-pointer notification">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0">
                                                    <img src="https://www.digitalbondmena.com/egec_new_new/backend/app-assets/images/profile/portraits/avatar-portrait-1.jpg"
                                                        alt="avatar" height="39" width="39">
                                                </div>
                                            </div>
                                            <div class="media-body text-left">
                                                <h6 class="media-heading ">
                                                    قام  <span class="text-main">{{ $notificationUpdatesAdminAndDataEntry->super_admin_name }} </span> بتعديل ملف  <span  class="text-main">{{ $notificationUpdatesAdminAndDataEntry->notification_belongs }}</span>
                                                </h6>
                                                    <small class="notification-text">{{ $notificationUpdatesAdminAndDataEntry->created_at }}</small>
                                              </div>
                                        </div>
                                        </button>
                                            <input type="hidden" name="notification_check" id=""  value="1">
                                            <input type="hidden" name="addmission_id" id="addmission_id" value="{{$notificationUpdatesAdminAndDataEntry->id}}">

                                    </form>
                                    @endif

                                @endforeach

                                @foreach($notificationUpdatesAssAdmins as $notificationUpdatesAssAdmin)
                                      @if($notificationUpdatesAssAdmin->data_entry == auth()->user()->name)
                                        <form method="POST" action="{{ route('admin.home') }}">

                                            @csrf

                                            <button type="submit" onclick="notificationAjax(jQuery('#notification_id{{$notificationUpdatesAssAdmin->id}}').val())" class="btn p-0 w-100 d-flex justify-content-between cursor-pointer notification">
                                            <div class="media d-flex align-items-center">
                                                <div class="media-left pr-0">
                                                    <div class="avatar mr-1 m-0">
                                                        <img src="https://www.digitalbondmena.com/egec_new_new/backend/app-assets/images/profile/portraits/avatar-portrait-1.jpg"
                                                            alt="avatar" height="39" width="39">
                                                    </div>
                                                </div>
                                                <div class="media-body text-left">
                                                    <h6 class="media-heading ">
                                                        قام  <span class="text-main">{{ $notificationUpdatesAssAdmin->super_admin_name }} </span>  بتخصيص العميل   <span  class="text-main">{{ $notificationUpdatesAssAdmin->notification_belongs }}</span> اليك
                                                    </h6>
                                                        <small class="notification-text">{{ $notificationUpdatesAssAdmin->created_at }}</small>
                                                  </div>
                                            </div>
                                            </button>
                                                <input type="hidden" name="notification_check" id=""  value="1">
                                                <input type="hidden" name="notification_id" id="notification_id" value="{{$notificationUpdatesAssAdmin->id}}">

                                        </form>
                                    @endif

                                @endforeach
                            @endif




                               
                            </li>
                            <form method="POST" action="{{ route('admin.home') }}">
                                @csrf
                                <li class="dropdown-menu-footer">
                                    <a href="{{ route('admin.notificationLog') }}" class="dropdown-item p-50 text-main justify-content-center">تصفح كل الاشعارات</a>
                                </li>
                            </form>
                        </ul>