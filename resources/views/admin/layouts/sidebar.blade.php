 <nav id="sidebar" class="sidebar js-sidebar">
     <div class="sidebar-content js-simplebar" data-simplebar="init">
         <div class="simplebar-wrapper" style="margin: 0px;">
             <div class="simplebar-height-auto-observer-wrapper">
                 <div class="simplebar-height-auto-observer"></div>
             </div>
             <div class="simplebar-mask">
                 <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                     <div class="simplebar-content-wrapper" tabindex="0" role="region"
                         aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                         <div class="simplebar-content" style="padding: 0px;">
                             <a class="sidebar-brand" href="{{ route('dashboard') }}">
                                 <span class="align-middle sidebar-brand-text">
                                     Ultra Solutions

                                 </span>
                                 <svg class="align-middle sidebar-brand-icon" width="32px" height="32px"
                                     viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5"
                                     stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF"
                                     style="margin-left: -3px">
                                     <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                                     <path d="M20 12L12 16L4 12"></path>
                                     <path d="M20 16L12 20L4 16"></path>
                                 </svg>
                             </a>

                             <div class="sidebar-user">
                                 <div class="d-flex justify-content-center">
                                     <div class="flex-shrink-0">
                                         <!-- Display user's avatar or a default avatar if not set -->
                                         <img src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('admin/assets/img/avatars/avatar.jpg') }}"
                                             class="rounded avatar img-fluid me-1" alt="{{ auth()->user()->name }}">
                                     </div>
                                     <div class="flex-grow-1 ps-2">
                                         <!-- Display user's name dynamically -->
                                         <a class="sidebar-user-title dropdown-toggle" href="#"
                                             data-bs-toggle="dropdown">
                                             {{ auth()->user()->name }}
                                         </a>
                                         <div class="dropdown-menu dropdown-menu-start">
                                             <!-- Profile link -->
                                             <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="align-middle feather feather-user me-1">
                                                     <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                     <circle cx="12" cy="7" r="4"></circle>
                                                 </svg> Profile
                                             </a>
                                             <!-- Analytics link -->
                                             <a class="dropdown-item" href="#">
                                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="align-middle feather feather-pie-chart me-1">
                                                     <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                                     <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                                                 </svg> Analytics
                                             </a>
                                             <div class="dropdown-divider"></div>
                                             <!-- Settings & Privacy link -->
                                             <a class="dropdown-item" href="/pages-settings">
                                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="align-middle feather feather-settings me-1">
                                                     <circle cx="12" cy="12" r="3"></circle>
                                                     <path
                                                         d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                     </path>
                                                 </svg> Settings & Privacy
                                             </a>
                                             <!-- Help Center link -->
                                             <a class="dropdown-item" href="#">
                                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="align-middle feather feather-help-circle me-1">
                                                     <circle cx="12" cy="12" r="10"></circle>
                                                     <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                     <line x1="12" y1="17" x2="12.01"
                                                         y2="17"></line>
                                                 </svg> Help Center
                                             </a>
                                             <div class="dropdown-divider"></div>
                                             <!-- Log out link -->
                                             <a class="dropdown-item" href="{{ route('logout') }}"
                                                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                 Log out
                                             </a>
                                             <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                 style="display: none;">
                                                 @csrf
                                             </form>
                                         </div>

                                         <!-- Display user's role dynamically -->
                                         <div class="sidebar-user-subtitle">{{ auth()->user()->email ?? 'User' }}
                                         </div>
                                     </div>
                                 </div>
                             </div>


                             <ul class="sidebar-nav">
                                 <li class="sidebar-header">
                                     Home Section
                                 </li>
                                 <li class="sidebar-item active">
                                     <a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                             class="align-middle feather feather-sliders">
                                             <line x1="4" y1="21" x2="4" y2="14">
                                             </line>
                                             <line x1="4" y1="10" x2="4" y2="3">
                                             </line>
                                             <line x1="12" y1="21" x2="12" y2="12">
                                             </line>
                                             <line x1="12" y1="8" x2="12" y2="3">
                                             </line>
                                             <line x1="20" y1="21" x2="20" y2="16">
                                             </line>
                                             <line x1="20" y1="12" x2="20" y2="3">
                                             </line>
                                             <line x1="1" y1="14" x2="7" y2="14">
                                             </line>
                                             <line x1="9" y1="8" x2="15" y2="8">
                                             </line>
                                             <line x1="17" y1="16" x2="23" y2="16">
                                             </line>
                                         </svg> <span class="align-middle">Home</span>
                                     </a>
                                     <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse show"
                                         data-bs-parent="#sidebar">
                                         <li class="sidebar-item active"><a class="sidebar-link"
                                                 href="{{ route('admin.hero_section.edit') }}">Hero</a></li>
                                         <li class="sidebar-item"><a class="sidebar-link"
                                                 href="/dashboard-ecommerce">E-Commerce </a></li>
                                         <li class="sidebar-item"><a class="sidebar-link"
                                                 href="/dashboard-crypto">Crypto </a></li>
                                     </ul>
                                 </li>

                                 <li class="sidebar-item">
                                     <a data-bs-target="#pages" data-bs-toggle="collapse"
                                         class="sidebar-link collapsed">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                             class="align-middle feather feather-layout">
                                             <rect x="3" y="3" width="18" height="18" rx="2"
                                                 ry="2"></rect>
                                             <line x1="3" y1="9" x2="21" y2="9">
                                             </line>
                                             <line x1="9" y1="21" x2="9" y2="9">
                                             </line>
                                         </svg> <span class="align-middle">Pages</span>
                                     </a>
                                     <ul id="pages" class="sidebar-dropdown list-unstyled collapse "
                                         data-bs-parent="#sidebar">
                                         <li class="sidebar-item"><a class="sidebar-link"
                                                 href="/pages-settings">Settings</a></li>
                                         <li class="sidebar-item"><a class="sidebar-link"
                                                 href="/pages-projects">Projects <span
                                                     class="sidebar-badge badge bg-primary">Pro</span></a></li>
                                         <li class="sidebar-item"><a class="sidebar-link"
                                                 href="/pages-clients">Clients <span
                                                     class="sidebar-badge badge bg-primary">Pro</span></a></li>
                                         <li class="sidebar-item"><a class="sidebar-link" href="/pages-orders">Orders
                                             </a></li>
                                         <li class="sidebar-item"><a class="sidebar-link"
                                                 href="/pages-pricing">Pricing <span
                                                     class="sidebar-badge badge bg-primary">Pro</span></a></li>
                                         <li class="sidebar-item"><a class="sidebar-link" href="/pages-chat">Chat
                                             </a>
                                         </li>
                                         <li class="sidebar-item"><a class="sidebar-link" href="/pages-blank">Blank
                                                 Page</a></li>
                                     </ul>
                                 </li>



                             </ul>


                         </div>
                     </div>
                 </div>
             </div>
             <div class="simplebar-placeholder" style="width: auto; height: 1326px;"></div>
         </div>
         <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
             <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
         </div>
         <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
             <div class="simplebar-scrollbar"
                 style="height: 666px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
         </div>
     </div>
 </nav>
