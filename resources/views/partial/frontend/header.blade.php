<header class="header bg-white">
    <div class="container px-0 px-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0">
            <a class="navbar-brand" href="{{ route('frontend.index') }}">
                <span class="font-weight-bold text-uppercase text-dark">{{ __('beauty products store') }}</span>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('frontend.index') }}">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <p style="display: inline-block">
                                @if ($localeCode != app()->getLocale())
                                    <a style="font-size: 17px" class="text-warning px-4" rel="alternate" hreflang="{{ $localeCode }}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                @endif

                            </p>
                        @endforeach
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <livewire:frontend.carts />

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="fas fa-user-alt mr-1 text-gray"></i>{{ __('Login') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                <i class="fas fa-user-alt mr-1 text-gray"></i>{{ __('Register') }}
                            </a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <livewire:frontend.header.notification-component />
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="authDropdown" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                {{ auth()->user()->full_name }}
                            </a>
                            <div class="dropdown-menu mt-3" aria-labelledby="authDropdown">
                                <a href="{{ route('customer.dashboard') }}" class="dropdown-item border-0">Dashboard</a>
                                <a href="javascript:void(0);" class="dropdown-item border-0"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form action="{{ route('logout') }}" method="post" id="logout-form"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
</header>
