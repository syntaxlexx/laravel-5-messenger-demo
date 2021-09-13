<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    
        @include('layouts.partials.head')
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-image: url('/img/acelords-background.jpg');
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                min-height: 100vh;
                margin: 0;
            }

            body * {
                color: #fff !important;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title span {
                font-size: 84px;
            }

            nav.links {
                background: rgba(0,0,0,0.5);
                padding: 10px;
                border-radius: 10px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .acelords-links {
                background: rgba(0,0,0,0.5);
                padding: 20px;
                border-radius: 10px;
                margin-right: 20px;
            }
        </style>
    </head>
    <body>
        <a href="https://github.com/lexxyungcarter">
            <img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png">
        </a>

        <div class="flex-center position-ref full-height" style="margin-left: 20px;">
            @if (Route::has('login'))
                <nav class="top-right links" style="margin-right: 6em;">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>

                        <a href="{{ url('/users') }}">Users</a>

                        <a href="{{ url('/messages') }}">Messages @include('messenger.unread-count')</a>

                        <a href="/messages/create">New Message</a>

                        <a href="/logout">Logout</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <span>Laravel {{ App::VERSION() }} Messenger</span>
                    <br/>
                    <em>
                        By 
                        <a href="https://github.com/lexxyungcarter">Lexx YungCarter</a>,  
                        <a href="https://www.acelords.space">[AceLords]</a>
                    </em>
                </div>
                
                <div class="links">
                    <a href="https://github.com/lexxyungcarter/laravel-5-messenger/blob/master/examples/">Examples</a>
                    <a href="https://github.com/lexxyungcarter/laravel-5-messenger/">Github</a>
                    <a href="https://acelords.space">Developers</a>
                </div>

                <div class="container-fluid mt-2">
                    <div class="row">
                        @foreach(acelords_socials() as $item)
                            <div class="col-xs-12 col-md-6">
                                <p>{{ $item['label'] }} : <strong><a href="{{ $item['link'] }}" target="_blank">{{ $item['link'] }}</a></strong></p>
                            </div>
                        @endforeach
                    </div>
                    <hr/>
                    
                    <div class="row text-left acelords-links">
                        @foreach(acelords_links() as $item)
                            <div class="col-xs-12 col-md-6">
                                <p>&middot; {{ $item['label'] }} : <strong><a href="{{ $item['link'] }}" target="_blank">{{ $item['link'] }}</a></strong></p>
                            </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>
