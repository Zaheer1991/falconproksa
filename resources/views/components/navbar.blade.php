<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.html">
            <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="Tiya Golf Club">
            <span class="navbar-brand-text">
                Tiya
                <small>Golf Club</small>
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#home">{{ __('Home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#services">{{ __('Services') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#clients">{{ __('Clients') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#projects">{{ __('Projects') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#product">{{ __('Product') }}</a>
                </li>
            </ul>

            <!-- Language Switcher -->
            <div class="ms-lg-3">
                <a href="{{ route('change.language', ['lang' => app()->getLocale() === 'en' ? 'ar' : 'en']) }}" class="btn custom-btn custom-border-btn">
                    {{ app()->getLocale() === 'en' ? 'Arabic' : 'English' }}
                </a>
            </div>
        </div>
    </div>
</nav>
