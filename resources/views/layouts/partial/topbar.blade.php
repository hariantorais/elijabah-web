 <header class="app-header flex items-center px-4 gap-3.5">

     <!-- App Logo -->
     <a href="#" class="logo-box">
         <!-- Light Logo -->
         <div class="logo-light">
             <img src="{{ asset('') }}assets/images/logo.png" class="logo-lg h-[22px]" alt="Light logo">
             <img src="{{ asset('') }}assets/images/logo-sm.png" class="logo-sm h-[22px]" alt="Small logo">
         </div>

         <!-- Dark Logo -->
         <div class="logo-dark">
             <img src="{{ asset('') }}assets/images/logo-dark.png" class="logo-lg h-[22px]" alt="Dark logo">
             <img src="{{ asset('') }}assets/images/logo-sm.png" class="logo-sm h-[22px]" alt="Small logo">
         </div>
     </a>

     <!-- Sidenav Menu Toggle Button -->
     <button id="button-toggle-menu" class="nav-link p-2">
         <span class="sr-only">Menu Toggle Button</span>
         <span class="flex items-center justify-center">
             <i class="ri-menu-2-fill text-2xl"></i>
         </span>
     </button>


     <!-- Notification Bell Button -->
     <div class="relative ms-auto lg:flex hidden">
         <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link p-2">
             <span class="sr-only">View notifications</span>
             <span class="flex items-center justify-center">
                 <i class="ri-notification-3-line text-2xl"></i>
                 <span class="absolute top-5 end-2.5 w-2 h-2 rounded-full bg-danger"></span>
             </span>
         </button>
         <div
             class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-80 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg">

             <div class="p-3 border-b border-gray-200 dark:border-gray-700">
                 <div class="flex items-center justify-between">
                     <h6 class="text-sm text-gray-500 dark:text-gray-200"> Notification</h6>
                     <a href="javascript: void(0);" class="text-gray-500 dark:text-gray-200 underline">
                         <small>Clear All</small>
                     </a>
                 </div>
             </div>

             <div class="py-4 h-80" data-simplebar>

                 <h5 class="text-xs text-gray-500 dark:text-gray-200 px-4 mb-2">Today</h5>

                 <a href="javascript:void(0);" class="block mb-4">
                     <div
                         class="py-2 px-3 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                         <div class="flex items-center">
                             <div class="flex-shrink-0">
                                 <div
                                     class="flex justify-center items-center h-9 w-9 rounded-full bg text-white bg-primary">
                                     <i class="ri-message-3-line text-lg"></i>
                                 </div>
                             </div>
                             <div class="flex-grow truncate ms-2">
                                 <h5 class="text-sm font-semibold mb-1">Datacorp <small class="font-normal ms-1">1 min
                                         ago</small></h5>
                                 <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on
                                     Admin</small>
                             </div>
                         </div>
                     </div>
                 </a>

                 <a href="javascript:void(0);" class="block mb-4">
                     <div
                         class="py-2 px-3 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                         <div class="flex items-center">
                             <div class="flex-shrink-0">
                                 <div class="flex justify-center items-center h-9 w-9 rounded-full bg-info text-white">
                                     <i class="ri-user-add-line text-lg"></i>
                                 </div>
                             </div>
                             <div class="flex-grow truncate ms-2">
                                 <h5 class="text-sm font-semibold mb-1">Admin <small class="font-normal ms-1">1 hr
                                         ago</small></h5>
                                 <small class="noti-item-subtitle text-muted">New user registered</small>
                             </div>
                         </div>
                     </div>
                 </a>

                 <a href="javascript:void(0);" class="block mb-4">
                     <div
                         class="py-2 px-3 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                         <div class="flex items-center">
                             <div class="flex-shrink-0">
                                 <img src="{{ asset('') }}assets/images/users/avatar-2.jpg"
                                     class="rounded-full h-9 w-9" alt="">
                             </div>
                             <div class="flex-grow truncate ms-2">
                                 <h5 class="text-sm font-semibold mb-1">Cristina Pride <small class="font-normal ms-1">1
                                         day ago</small></h5>
                                 <small class="noti-item-subtitle text-muted">Hi, How are you? What about
                                     our next meeting</small>
                             </div>
                         </div>
                     </div>
                 </a>

                 <h5 class="text-xs text-gray-500 dark:text-gray-200 px-4 mb-2">Yesterday</h5>

                 <a href="javascript:void(0);" class="block mb-4">
                     <div
                         class="py-2 px-3 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                         <div class="flex items-center">
                             <div class="flex-shrink-0">
                                 <div
                                     class="flex justify-center items-center h-9 w-9 rounded-full bg-primary text-white">
                                     <i class="ri-discuss-line text-lg"></i>
                                 </div>
                             </div>
                             <div class="flex-grow truncate ms-2">
                                 <h5 class="text-sm font-semibold mb-1">Datacorp</h5>
                                 <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on
                                     Admin</small>
                             </div>
                         </div>
                     </div>
                 </a>

                 <a href="javascript:void(0);" class="block">
                     <div
                         class="py-2 px-3 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                         <div class="flex items-center">
                             <div class="flex-shrink-0">
                                 <img src="{{ asset('') }}assets/images/users/avatar-4.jpg"
                                     class="rounded-full h-9 w-9" alt="">
                             </div>
                             <div class="flex-grow truncate ms-2">
                                 <h5 class="text-sm font-semibold mb-1">Karen Robinson</h5>
                                 <small class="noti-item-subtitle text-muted">Wow ! this admin looks good
                                     and awesome design</small>
                             </div>
                         </div>
                     </div>
                 </a>
             </div>

             <a href="javascript:void(0);"
                 class="p-2 border-t border-gray-200 dark:border-gray-700 block text-center text-primary underline font-semibold">
                 View All
             </a>
         </div>
     </div>

     <!-- Light/Dark Toggle Button -->
     <div class="lg:flex hidden">
         <button id="light-dark-mode" type="button" class="nav-link p-2">
             <span class="sr-only">Light/Dark Mode</span>
             <span class="flex items-center justify-center">
                 <i class="ri-moon-line text-2xl block dark:hidden"></i>
                 <i class="ri-sun-line text-2xl hidden dark:block"></i>
             </span>
         </button>
     </div>

     <!-- Fullscreen Toggle Button -->
     <div class="md:flex hidden">
         <button data-toggle="fullscreen" type="button" class="nav-link p-2">
             <span class="sr-only">Fullscreen Mode</span>
             <span class="flex items-center justify-center">
                 <i class="ri-fullscreen-line text-2xl"></i>
             </span>
         </button>
     </div>

     <!-- Profile Dropdown Button -->
     <div class="relative">
         <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button"
             class="nav-link flex items-center gap-2.5 px-3 bg-black/5 border-x border-black/10">
             <img src="{{ asset('') }}assets/images/users/avatar-1.jpg" alt="user-image"
                 class="rounded-full h-8">
             <span class="md:flex flex-col gap-0.5 text-start hidden">
                 <h5 class="text-sm">{{ auth()->user()->name }}</h5>
                 <span class="text-xs">{{ auth()->user()->role }}</span>
             </span>
         </button>

         <div
             class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-44 z-50 transition-all duration-300 bg-white shadow-lg border rounded-lg py-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800">
             <!-- item-->
             <h6 class="flex items-center py-2 px-3 text-xs text-gray-800 dark:text-gray-400">Welcome !</h6>

             <!-- item-->
             <a href="pages-profile.html"
                 class="flex items-center gap-2 py-1.5 px-4 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                 <i class="ri-account-circle-line text-lg align-middle"></i>
                 <span>My Account</span>
             </a>

             <!-- item-->
             <a href="pages-profile.html"
                 class="flex items-center gap-2 py-1.5 px-4 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                 <i class="ri-settings-4-line text-lg align-middle"></i>
                 <span>Settings</span>
             </a>

             <!-- item-->
             <a href="pages-faqs.html"
                 class="flex items-center gap-2 py-1.5 px-4 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                 <i class="ri-customer-service-2-line text-lg align-middle"></i>
                 <span>Support</span>
             </a>

             <!-- item-->
             <a href="auth-lock-screen.html"
                 class="flex items-center gap-2 py-1.5 px-4 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                 <i class="ri-lock-password-line text-lg align-middle"></i>
                 <span>Lock Screen</span>
             </a>

             <!-- item-->
             <a href="auth-logout-2.html"
                 class="flex items-center gap-2 py-1.5 px-4 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                 <i class="ri-logout-box-line text-lg align-middle"></i>
                 <span>Logout</span>
             </a>
         </div>
     </div>
 </header>
