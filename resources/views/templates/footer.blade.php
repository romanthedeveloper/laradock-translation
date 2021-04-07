<div class="footer">
    <div class="container">
        <div class="action">
            <ul class="navbar-nav ml-auto">
            @foreach (config('app.available_locales') as $locale)
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('set-locate', [$locale,\Illuminate\Support\Facades\Route::currentRouteName()]) }}"
                       @if (app()->getLocale() == $locale) style="font-weight: bold; color: green" @endif>{{ strtoupper($locale) }}</a>
                </li>
            @endforeach
        </div>
    </div>
</div>

<style>
    .footer{
        width: 100%;
        display: flex;
        justify-content: flex-end;
        background: #000;
        color: white;
        height: 80px;
    }
    .footer .action{
        display: flex;
        justify-content: flex-end;
        align-items: center;
        height: 100%;
    }
    .footer .action ul{
        display: inherit;
    }
    .footer .action li{
        margin: 0 5px;
        list-style-type: none;
    }
    .footer .action li a{
        text-decoration: none;
    }
</style>
