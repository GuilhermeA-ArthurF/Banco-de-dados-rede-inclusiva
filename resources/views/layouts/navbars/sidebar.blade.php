<div class="sidebar" data-color="brown" data-active-color="danger">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
        <a href="{{ route('home') }}" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('img/logo-small.png') }}">
            </div>
        </a>
        <a href="{{ route('home') }}" class="simple-text logo-normal">
            {{ __('Rede Inclusiva') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                @if (isset(auth()->user()->picture))
                    <img src="{{ asset(auth()->user()->picture) }}">
                @else
                    <img class="avatar border-gray" src="{{ asset('img/No Profile Picture.png') }}" alt="...">
                @endif
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        {{ auth()->user()->name }}
                    <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse {{ $folderActive == 'profile' ? 'show' : '' }}" id="collapseExample">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'edit-profile' ? 'active' : '' }}">
                            <a href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini-icon">{{ __('MP') }}</span>
                                <span class="sidebar-normal">{{ __('Meu Perfil') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini-icon">{{ __('EP') }}</span>
                                <span class="sidebar-normal">{{ __('Editar Perfil') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini-icon">{{ __('C') }}</span>
                                <span class="sidebar-normal">{{ __('Configurações') }}</span>
                            </a>
                        </li>
                        <li>
                            <form class="dropdown-item" action="{{ route('logout') }}" id="formLogOutSidebar" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a onclick="document.getElementById('formLogOutSidebar').submit();">
                                <span class="sidebar-mini-icon">{{ __('S') }}</span>
                                <span class="sidebar-normal">{{ __('Sair') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('home') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Inicio') }}</p>
                </a>
            </li>
            <li class="{{ $folderActive == 'laravel-examples' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                    <i class="nc-icon"><img src="{{ asset('img/laravel.svg') }}"></i>
                    <p>
                            {{ __('Administrador') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        @if (Auth::user()->role_id == 1)
                            <li class="{{ $elementActive == 'role' ? 'active' : '' }}">
                                <a href="{{ route('page.index', 'role') }}">
                                    <span class="sidebar-mini-icon">{{ __('LI') }}</span>
                                    <span class="sidebar-normal">{{ __(' Lista de usuários ') }}</span>
                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->role_id == 1)
                            <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                                <a href="{{ route('page.index', 'user') }}">
                                    <span class="sidebar-mini-icon">{{ __('AU') }}</span>
                                    <span class="sidebar-normal">{{ __(' Administrar usuários ') }}</span>
                                </a>
                            </li>
                        @endif;
                    </ul>
                </div>
            </li>
            
            <li class="{{ $folderActive == 'forms' ? 'active' : '' }}">
                <a data-toggle="collapse" href="#formsExamples" aria-expanded="{{ $folderActive == 'forms' ? 'true' : '' }}">
                    <i class="nc-icon nc-ruler-pencil"></i>
                    <p>
                            {{ __('Forms') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $folderActive == 'forms' ? 'show' : '' }}" id="formsExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'regular-forms' ? 'active' : '' }}">
                            <a href="{{ route('page.forms', 'regular') }}">
                                <span class="sidebar-mini-icon">{{ __('RF') }}</span>
                                <span class="sidebar-normal">{{ __(' Regular Forms ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'validation' ? 'active' : '' }}">
                            <a href="{{ route('page.forms', 'validation') }}">
                                <span class="sidebar-mini-icon">{{ __('V') }}</span>
                                <span class="sidebar-normal">{{ __(' Validation Forms ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{ $folderActive == 'tables' ? 'active' : '' }}">
                <a data-toggle="collapse" href="#tablesExamples" aria-expanded="{{ $folderActive == 'tables' ? 'true' : '' }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>
                            {{ __('Tables') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $folderActive == 'tables' ? 'show' : '' }}" id="tablesExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'regular-tables' ? 'active' : '' }}">
                            <a href="{{ route('page.tables', 'regular') }}">
                                <span class="sidebar-mini-icon">{{ __('RT') }}</span>
                                <span class="sidebar-normal">{{ __(' Regular Tables ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'datatables' ? 'active' : '' }}">
                            <a href="{{ route('page.tables', 'datatables') }}">
                                <span class="sidebar-mini-icon">{{ __('DT') }}</span>
                                <span class="sidebar-normal">{{ __(' DataTables.net ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{ $elementActive == 'charts' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'charts') }}">
                    <i class="nc-icon nc-chart-bar-32"></i>
                    <p>{{ __('Charts') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'calendar' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'calendar') }}">
                    <i class="nc-icon nc-calendar-60"></i>
                    <p>{{ __('Calendar') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>