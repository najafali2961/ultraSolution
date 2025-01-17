 <nav class="navbar navbar-expand navbar-light navbar-bg">
     <a class="sidebar-toggle js-sidebar-toggle">
         <i class="hamburger align-self-center"></i>
     </a>

     <form class="d-none d-sm-inline-block">
         <div class="input-group input-group-navbar">
             <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
             <button class="btn" type="button">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" class="align-middle feather feather-search">
                     <circle cx="11" cy="11" r="8"></circle>
                     <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                 </svg>
             </button>
         </div>
     </form>

     <ul class="navbar-nav d-none d-lg-flex">
         <li class="px-2 nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="megaDropdown" role="button"
                 data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Mega Menu
             </a>
             <div class="dropdown-menu dropdown-menu-start dropdown-mega" aria-labelledby="megaDropdown">
                 <div class="d-md-flex align-items-start justify-content-start">
                     <div class="dropdown-mega-list">
                         <div class="dropdown-header">UI Elements</div>
                         <a class="dropdown-item" href="#">Alerts</a>
                         <a class="dropdown-item" href="#">Buttons</a>
                         <a class="dropdown-item" href="#">Cards</a>
                         <a class="dropdown-item" href="#">Carousel</a>
                         <a class="dropdown-item" href="#">General</a>
                         <a class="dropdown-item" href="#">Grid</a>
                         <a class="dropdown-item" href="#">Modals</a>
                         <a class="dropdown-item" href="#">Tabs</a>
                         <a class="dropdown-item" href="#">Typography</a>
                     </div>
                     <div class="dropdown-mega-list">
                         <div class="dropdown-header">Forms</div>
                         <a class="dropdown-item" href="#">Layouts</a>
                         <a class="dropdown-item" href="#">Basic Inputs</a>
                         <a class="dropdown-item" href="#">Input Groups</a>
                         <a class="dropdown-item" href="#">Advanced Inputs</a>
                         <a class="dropdown-item" href="#">Editors</a>
                         <a class="dropdown-item" href="#">Validation</a>
                         <a class="dropdown-item" href="#">Wizard</a>
                     </div>
                     <div class="dropdown-mega-list">
                         <div class="dropdown-header">Tables</div>
                         <a class="dropdown-item" href="#">Basic Tables</a>
                         <a class="dropdown-item" href="#">Responsive Table</a>
                         <a class="dropdown-item" href="#">Table with Buttons</a>
                         <a class="dropdown-item" href="#">Column Search</a>
                         <a class="dropdown-item" href="#">Muulti Selection</a>
                         <a class="dropdown-item" href="#">Ajax Sourced Data</a>
                     </div>
                 </div>
             </div>
         </li>

         <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="resourcesDropdown" role="button"
                 data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Resources
             </a>
             <div class="dropdown-menu" aria-labelledby="resourcesDropdown">
                 <a class="dropdown-item" href="https://adminkit.io/" target="_blank"><svg
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="align-middle feather feather-home me-1">
                         <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                         <polyline points="9 22 9 12 15 12 15 22"></polyline>
                     </svg>
                     Homepage</a>
                 <a class="dropdown-item" href="https://adminkit.io/docs/" target="_blank"><svg
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="align-middle feather feather-book-open me-1">
                         <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                         <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                     </svg>
                     Documentation</a>
                 <a class="dropdown-item" href="https://adminkit.io/docs/getting-started/changelog/"
                     target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round"
                         class="align-middle feather feather-edit me-1">
                         <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                         <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                     </svg> Changelog</a>
             </div>
         </li>
     </ul>

     <div class="navbar-collapse collapse">
         <ul class="navbar-nav navbar-align">
             <li class="nav-item dropdown">
                 <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                     <div class="position-relative">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="align-middle feather feather-bell">
                             <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                             <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                         </svg>
                         <span class="indicator">4</span>
                     </div>
                 </a>
                 <div class="py-0 dropdown-menu dropdown-menu-lg dropdown-menu-end" aria-labelledby="alertsDropdown">
                     <div class="dropdown-menu-header">
                         4 New Notifications
                     </div>
                     <div class="list-group">
                         <a href="#" class="list-group-item">
                             <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round"
                                         class="feather feather-alert-circle text-danger">
                                         <circle cx="12" cy="12" r="10"></circle>
                                         <line x1="12" y1="8" x2="12" y2="12"></line>
                                         <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                     </svg>
                                 </div>
                                 <div class="col-10">
                                     <div class="text-dark">Update completed</div>
                                     <div class="mt-1 text-muted small">Restart server 12 to complete the
                                         update.</div>
                                     <div class="mt-1 text-muted small">30m ago</div>
                                 </div>
                             </div>
                         </a>
                         <a href="#" class="list-group-item">
                             <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round"
                                         class="feather feather-bell text-warning">
                                         <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                         <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                     </svg>
                                 </div>
                                 <div class="col-10">
                                     <div class="text-dark">Lorem ipsum</div>
                                     <div class="mt-1 text-muted small">Aliquam ex eros, imperdiet
                                         vulputate
                                         hendrerit et.</div>
                                     <div class="mt-1 text-muted small">2h ago</div>
                                 </div>
                             </div>
                         </a>
                         <a href="#" class="list-group-item">
                             <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round"
                                         class="feather feather-home text-primary">
                                         <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                         <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                     </svg>
                                 </div>
                                 <div class="col-10">
                                     <div class="text-dark">Login from 192.186.1.8</div>
                                     <div class="mt-1 text-muted small">5h ago</div>
                                 </div>
                             </div>
                         </a>
                         <a href="#" class="list-group-item">
                             <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round"
                                         class="feather feather-user-plus text-success">
                                         <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                         <circle cx="8.5" cy="7" r="4"></circle>
                                         <line x1="20" y1="8" x2="20" y2="14"></line>
                                         <line x1="23" y1="11" x2="17" y2="11"></line>
                                     </svg>
                                 </div>
                                 <div class="col-10">
                                     <div class="text-dark">New connection</div>
                                     <div class="mt-1 text-muted small">Christina accepted your request.
                                     </div>
                                     <div class="mt-1 text-muted small">14h ago</div>
                                 </div>
                             </div>
                         </a>
                     </div>
                     <div class="dropdown-menu-footer">
                         <a href="#" class="text-muted">Show all notifications</a>
                     </div>
                 </div>
             </li>
             <li class="nav-item dropdown">
                 <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                     <div class="position-relative">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="align-middle feather feather-message-square">
                             <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                         </svg>
                     </div>
                 </a>
                 <div class="py-0 dropdown-menu dropdown-menu-lg dropdown-menu-end"
                     aria-labelledby="messagesDropdown">
                     <div class="dropdown-menu-header">
                         <div class="position-relative">
                             4 New Messages
                         </div>
                     </div>
                     <div class="list-group">
                         <a href="#" class="list-group-item">
                             <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                     <img src="{{ asset('admin/assets/img/avatars/avatar-5.jpg') }}"
                                         class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                 </div>
                                 <div class="col-10 ps-2">
                                     <div class="text-dark">Vanessa Tucker</div>
                                     <div class="mt-1 text-muted small">Nam pretium turpis et arcu. Duis
                                         arcu
                                         tortor.</div>
                                     <div class="mt-1 text-muted small">15m ago</div>
                                 </div>
                             </div>
                         </a>
                         <a href="#" class="list-group-item">
                             <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                     <img src="{{ asset('admin/assets/img/avatars/avatar-2.jpg') }}"
                                         class="avatar img-fluid rounded-circle" alt="William Harris">
                                 </div>
                                 <div class="col-10 ps-2">
                                     <div class="text-dark">William Harris</div>
                                     <div class="mt-1 text-muted small">Curabitur ligula sapien euismod
                                         vitae.</div>
                                     <div class="mt-1 text-muted small">2h ago</div>
                                 </div>
                             </div>
                         </a>
                         <a href="#" class="list-group-item">
                             <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                     <img src="{{ asset('admin/assets/img/avatars/avatar-4.jpg') }}"
                                         class="avatar img-fluid rounded-circle" alt="Christina Mason">
                                 </div>
                                 <div class="col-10 ps-2">
                                     <div class="text-dark">Christina Mason</div>
                                     <div class="mt-1 text-muted small">Pellentesque auctor neque nec urna.
                                     </div>
                                     <div class="mt-1 text-muted small">4h ago</div>
                                 </div>
                             </div>
                         </a>
                         <a href="#" class="list-group-item">
                             <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                     <img src="{{ asset('admin/assets/img/avatars/avatar-3.jpg') }}"
                                         class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
                                 </div>
                                 <div class="col-10 ps-2">
                                     <div class="text-dark">Sharon Lessman</div>
                                     <div class="mt-1 text-muted small">Aenean tellus metus, bibendum sed,
                                         posuere ac, mattis non.</div>
                                     <div class="mt-1 text-muted small">5h ago</div>
                                 </div>
                             </div>
                         </a>
                     </div>
                     <div class="dropdown-menu-footer">
                         <a href="#" class="text-muted">Show all messages</a>
                     </div>
                 </div>
             </li>
             <li class="nav-item dropdown">
                 <a class="nav-flag dropdown-toggle" href="#" id="languageDropdown" data-bs-toggle="dropdown">
                     <img src="{{ asset('admin/assets/img/flags/us.png') }}" alt="English">
                 </a>
                 <div class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                     <a class="dropdown-item" href="#">
                         <img src="{{ asset('admin/assets/img/flags/us.png') }}" alt="English" width="20"
                             class="align-middle me-1">
                         <span class="align-middle">English</span>
                     </a>
                     <a class="dropdown-item" href="#">
                         <img src="{{ asset('admin/assets/img/flags/es.png') }}" alt="Spanish" width="20"
                             class="align-middle me-1">
                         <span class="align-middle">Spanish</span>
                     </a>
                     <a class="dropdown-item" href="#">
                         <img src="{{ asset('admin/assets/img/flags/ru.png') }}" alt="Russian" width="20"
                             class="align-middle me-1">
                         <span class="align-middle">Russian</span>
                     </a>
                     <a class="dropdown-item" href="#">
                         <img src="{{ asset('admin/assets/img/flags/de.png') }}" alt="German" width="20"
                             class="align-middle me-1">
                         <span class="align-middle">German</span>
                     </a>
                 </div>
             </li>
             <li class="nav-item">
                 <a class="nav-icon js-fullscreen d-none d-lg-block" href="#">
                     <div class="position-relative">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="align-middle feather feather-maximize">
                             <path
                                 d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                             </path>
                         </svg>
                     </div>
                 </a>
             </li>
             <li class="nav-item dropdown">
                 <a class="nav-icon pe-md-0 dropdown-toggle" href="#" data-bs-toggle="dropdown">
                     <img src="{{ asset('admin/assets/img/avatars/avatar.jpg') }}" class="rounded avatar img-fluid"
                         alt="Charles Hall">
                 </a>
                 <div class="dropdown-menu dropdown-menu-end">
                     <a class="dropdown-item" href="/pages-profile"><svg xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="align-middle feather feather-user me-1">
                             <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                             <circle cx="12" cy="7" r="4"></circle>
                         </svg> Profile</a>
                     <a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="align-middle feather feather-pie-chart me-1">
                             <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                             <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                         </svg> Analytics</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="/pages-settings"><svg xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="align-middle feather feather-settings me-1">
                             <circle cx="12" cy="12" r="3"></circle>
                             <path
                                 d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                             </path>
                         </svg> Settings &amp;
                         Privacy</a>
                     <a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="align-middle feather feather-help-circle me-1">
                             <circle cx="12" cy="12" r="10"></circle>
                             <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                             <line x1="12" y1="17" x2="12.01" y2="17">
                             </line>
                         </svg> Help Center</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Log out</a>
                 </div>
             </li>
         </ul>
     </div>
 </nav>
