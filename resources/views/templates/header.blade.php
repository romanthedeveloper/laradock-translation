<div class="header">
    <div class="container">
        <div class="action">
            @guest
            <div class="login">
                <form method="POST" action="{{ route('login', app()->getLocale()) }}">
                    <div class="flex">
                        {{ csrf_field() }}
                        <div>
                            <input name="email" type="text" id="email" placeholder="{{ __('header.email.placeholder') }}">
                        </div>
                        <div>
                            <input name="password" type="password" id="password" placeholder="{{ __('header.password.placeholder') }}">
                        </div>
                        <button type="submit">{{ __('header.login') }}</button>
                    </div>
                </form>
            </div>
            @else
                <a href="{{ route('logout', app()->getLocale()) }}">{{ __('header.logout') }}</a>
            @endguest
        </div>
    </div>
</div>
<style>
    form{
        height: 100%;
    }
    form .flex > div{
        width: 40%;
    }
    form input{
        width: 100%;
        height: 20px;
    }
    a{
        color: white;
    }
    .flex{
        justify-content: space-between;
        height: 100%;
        align-items: center;
        display: flex;
    }
    .header{
        width: 100%;
        background: #000;
        color: white;
        height: 80px;
        display: flex;
    }
    .login{
        width: 40%;
    }
    .login button {
        height: 26px;
    }
    .container{
        width: 80%;
        max-width: 1360px;
        margin: 0 auto;
    }
    .action{
        display: flex;
        justify-content: flex-end;
        align-items: center;
        height: 100%;
    }
</style>
