<nav>
  <div class="container nav-wrapper">
    <a href="{{ url('/') }}" class="brand-logo">Picatsa</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      @guest
        <li><a href="{{ route('login') }}">{{ __('Connexion') }}</a></li>
        <li><a href="{{ route('register') }}">{{ __('S\'inscrire') }}</a></li>
      @else
        <li><a href="{{ route('admin') }}">{{ __('Console d\'administration') }}</a></li>
        <li><a href="{{ route('logout') }}">{{ __('Déconnexion') }}</a></li>
        {{-- <li><a  class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                {{ __('Déconnexion') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li> --}}
      @endguest
    </ul>
  </div>
</nav>