<!-- partial:partials/_settings-panel.html -->
<div class="theme-setting-wrapper">
    <div id="settings-trigger"><i class="ti-settings"></i></div>
    <div id="theme-settings" class="settings-panel">
    <i class="settings-close ti-close"></i>
    <p class="settings-heading">SIDEBAR SKINS</p>
    <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
    <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
    <p class="settings-heading mt-2">HEADER SKINS</p>
    <div class="color-tiles mx-0 px-4">
        <div class="tiles success"></div>
        <div class="tiles warning"></div>
        <div class="tiles danger"></div>
        <div class="tiles info"></div>
        <div class="tiles dark"></div>
        <div class="tiles default"></div>
    </div>
    </div>
</div>
<div id="right-sidebar" class="settings-panel">
    <i class="settings-close ti-close"></i>
    <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
    </li>
    </ul>
    <div class="tab-content" id="setting-content">
    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
        <div class="add-items d-flex px-3 mb-0">
        <form class="form w-100">
            <div class="form-group d-flex">
            <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
            <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
            </div>
        </form>
        </div>
        <div class="list-wrapper px-3">
        <ul class="d-flex flex-column-reverse todo-list">
            <li>
            <div class="form-check">
                <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Team review meeting at 3.00 PM
                </label>
            </div>
            <i class="remove ti-close"></i>
            </li>
            <li>
            <div class="form-check">
                <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Prepare for presentation
                </label>
            </div>
            <i class="remove ti-close"></i>
            </li>
            <li>
            <div class="form-check">
                <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Resolve all the low priority tickets due today
                </label>
            </div>
            <i class="remove ti-close"></i>
            </li>
            <li class="completed">
            <div class="form-check">
                <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked>
                Schedule meeting for next week
                </label>
            </div>
            <i class="remove ti-close"></i>
            </li>
            <li class="completed">
            <div class="form-check">
                <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked>
                Project review
                </label>
            </div>
            <i class="remove ti-close"></i>
            </li>
        </ul>
        </div>
        <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
        <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
            <i class="ti-control-record text-primary mr-2"></i>
            <span>Feb 11 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
        <p class="text-gray mb-0">The total number of sessions</p>
        </div>
        <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
            <i class="ti-control-record text-primary mr-2"></i>
            <span>Feb 7 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
        <p class="text-gray mb-0 ">Call Sarah Graves</p>
        </div>
    </div>
    <!-- To do section tab ends -->
    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
        <div class="d-flex align-items-center justify-content-between border-bottom">
        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
        </div>
        <ul class="chat-list">
        <li class="list active">
            <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
            <div class="info">
            <p>Thomas Douglas</p>
            <p>Available</p>
            </div>
            <small class="text-muted my-auto">19 min</small>
        </li>
        <li class="list">
            <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
            <div class="info">
            <div class="wrapper d-flex">
                <p>Catherine</p>
            </div>
            <p>Away</p>
            </div>
            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
            <small class="text-muted my-auto">23 min</small>
        </li>
        <li class="list">
            <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
            <div class="info">
            <p>Daniel Russell</p>
            <p>Available</p>
            </div>
            <small class="text-muted my-auto">14 min</small>
        </li>
        <li class="list">
            <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
            <div class="info">
            <p>James Richardson</p>
            <p>Away</p>
            </div>
            <small class="text-muted my-auto">2 min</small>
        </li>
        <li class="list">
            <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
            <div class="info">
            <p>Madeline Kennedy</p>
            <p>Available</p>
            </div>
            <small class="text-muted my-auto">5 min</small>
        </li>
        <li class="list">
            <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
            <div class="info">
            <p>Sarah Graves</p>
            <p>Available</p>
            </div>
            <small class="text-muted my-auto">47 min</small>
        </li>
        </ul>
    </div>
    <!-- chat tab ends -->
    </div>
</div>
<!-- partial -->
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : ''  }}" href="{{ route('home') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @if (auth()->user()->access == 'level1')
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('cost*')) ? 'active' : '' }}" href="{{ route('frais') }}">
                    <i class="icon-bar-graph menu-icon"></i>
                    <span class="menu-title">Frais</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('options*')) ? 'active' : '' }}" href="{{ route('options') }}">
                    <i class="icon-paper menu-icon"></i>
                    <span class="menu-title">Options</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('agent*')) ? 'active' : '' }}" href="{{ route('users') }}">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Utilisateurs</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->access == 'level3')
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('eleve*')) ? 'active' : '' }}" href="{{ route('eleves') }}">
                    <i class="icon-head menu-icon"></i>
                    <span class="menu-title">Gestion Eleves</span>
                </a>
            </li> 
            {{-- <li class="nav-item">
                <a class="nav-link {{ (request()->is('facture*')) ? 'active' : '' }}" href="{{ route('paiements.searchForm') }}">
                    <i class="icon-folder menu-icon"></i>
                    <span class="menu-title">Paiements</span>
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('eleve')) ? 'active' : '' }}" href="{{ route('eleves.create') }}">
                    <i class="ti-plus menu-icon"></i>
                    <span class="menu-title">Inscription</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('rapport*')) ? 'active' : '' }}" href="{{ route('rapports.caisse') }}">
                    <i class="icon-bar-graph menu-icon"></i>
                    <span class="menu-title">Generer des rapports</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->access == 'level4')
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('insciption*')) ? 'active' : '' }}" href="{{ route('caisse.inscription') }}">
                    <i class="ti-plus menu-icon"></i>
                    <span class="menu-title">Inscription</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('caisse*')) ? 'active' : '' }}" href="{{ route('caisse.paiement') }}">
                    <i class="icon-folder menu-icon"></i>
                    <span class="menu-title">Paiements</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ (request()->is('facture*')) ? 'active' : '' }}" href="{{ route('paiements.searchForm') }}">
                    <i class="icon-paper menu-icon"></i>
                    <span class="menu-title">Etat des Paiements</span>
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('rapport*')) ? 'active' : '' }}" href="{{ route('rapports.caisse') }}">
                    <i class="icon-bar-graph menu-icon"></i>
                    <span class="menu-title">Generer des rapports</span>
                </a>
            </li>
        @endif
    </ul>
</nav>
<!-- partial -->