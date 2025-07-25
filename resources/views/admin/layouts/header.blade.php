     <nav class="app-header navbar navbar-expand bg-body">
         <div class="container-fluid">
             <ul class="navbar-nav">
                 <li class="nav-item">
                     <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                         <i class="bi bi-list"></i>
                     </a>
                 </li>
                 <li class="nav-item d-none d-md-block">
                     <a href="{{ route('admindashboard') }}" class="nav-link">داشبورد</a>
                 </li>
             </ul>
             <ul class="navbar-nav ms-auto">

                 <li class="nav-item dropdown">
                     <a class="nav-link" data-bs-toggle="dropdown" href="#">
                         <i class="bi bi-chat-text"></i>
                         <span class="navbar-badge badge text-bg-danger">3</span>
                     </a>
                     <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                         <a href="#" class="dropdown-item"> <!--begin::Message-->
                             <div class="d-flex">
                                 <div class="flex-shrink-0"> <img src="../../dist/assets/img/user1-128x128.jpg"
                                         alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                                 <div class="flex-grow-1">
                                     <h3 class="dropdown-item-title">
                                         محمد احمدی
                                         <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                                     </h3>
                                     <p class="fs-7">من به این دلیل با شما تماس گرفتم ...</p>
                                     <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4ساعت قبل
                                 </div>
                             </div>
                         </a>
                         <div class="dropdown-divider"></div> <a href="#" class="dropdown-item">
                             <!--begin::Message-->
                             <div class="d-flex">
                                 <div class="flex-shrink-0"> <img src="../../dist/assets/img/user8-128x128.jpg"
                                         alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                                 <div class="flex-grow-1">
                                     <h3 class="dropdown-item-title">
                                         عباس جعفری
                                         <span class="float-end fs-7 text-secondary"> <i class="bi bi-star-fill"></i>
                                         </span>
                                     </h3>
                                     <p class="fs-7">من مسیج شما رو دریافت کردم برادر</p>
                                     <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 ساعت قبل
                                     </p>
                                 </div>
                             </div>
                         </a>
                         <div class="dropdown-divider"></div> <a href="#" class="dropdown-item">
                             <!--begin::Message-->
                             <div class="d-flex">
                                 <div class="flex-shrink-0"> <img src="../../dist/assets/img/user3-128x128.jpg"
                                         alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                                 <div class="flex-grow-1">
                                     <h3 class="dropdown-item-title">
                                         نورا سیلوستر
                                         <span class="float-end fs-7 text-warning"> <i class="bi bi-star-fill"></i>
                                         </span>
                                     </h3>
                                     <p class="fs-7">این موضوع مورد بحث ما هست.</p>
                                     <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i>6 ساعت قبل
                                     </p>
                                 </div>
                             </div> <!--end::Message-->
                         </a>
                         <div class="dropdown-divider"></div> <a href="#"
                             class="dropdown-item dropdown-footer">دیدن همه پیام ها</a>
                     </div>
                 </li> <!--end::Messages Dropdown Menu--> <!--begin::Notifications Dropdown Menu-->

                 <li class="nav-item">
                     <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                         <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                         <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i>
                     </a>
                 </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
                 <li class="nav-item dropdown user-menu">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                         <img src="../../dist/assets/img/user2-160x160.jpg" class="user-image rounded-circle shadow"
                             alt="User Image">
                         <span class="d-none d-md-inline">مدیر ارشد</span>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                         <li class="user-header text-bg-primary"> <img src="../../dist/assets/img/user2-160x160.jpg"
                                 class="rounded-circle shadow" alt="User Image">
                             <p>
                                 یحیی رحماندوست - مدیر ارشد
                                 <small>عضویت از سال 1404</small>
                             </p>
                         </li> <!--end::User Image--> <!--begin::Menu Body-->
                         <!--begin::Menu Footer-->
                         <li class="user-footer"> <a href="#" class="btn btn-default btn-flat">پروفایل</a> <a
                                 href="#" class="btn btn-default btn-flat float-end">خروج</a> </li>
                         <!--end::Menu Footer-->
                     </ul>
                 </li>
             </ul>
         </div>
     </nav>
