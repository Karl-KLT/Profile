<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    @yield('custom-head')
    <script src="{{ mix('js/app.js') }}"></script>
    <title>@yield('Title',env('APP_NAME'))</title>

    @livewireStyles
</head>

<body id="body-pd">
    <header class="header" id="header">

        <div class="header_toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
        {{-- <div class="header_img">
            <div>
                <img src="{{ asset("img.jfif") }}" style="border-radius: 100%;border: 4px solid #B6CDC6">
            </div>
        </div> --}}

    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>

                <a href="{{ route('Home') }}" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">{{ env('APP_NAME') }}</span>
                </a>

                <div class="nav_list">

                    <a title="Who i'm ?" href="{{ route('Home') }}" class="nav_link {{ ActiveRoutes('/') }}">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name" style="font-weight: bold">Home</span>
                    </a>

                    @if (!checkVisitor())

                        <a href="{{ route('home.skills') }}" title="My skills" class="nav_link {{ ActiveRoutes('skills') }}">
                            <i class='bx bxs-droplet'></i>
                            <span class="nav_name" style="font-weight: bold">My skills</span>
                        </a>

                        {{-- @auth
                            <a href="{{ route('posts') }}" title="Posts" class="nav_link {{ ActiveRoutes('posts') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-post-fill" viewBox="0 0 16 16">
                                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM4.5 3h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zm0 2h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                <span class="nav_name" style="font-weight: bold">Posts</span>
                            </a>
                        @endauth --}}

                        <a href="{{ route('Profile') }}" title="@auth Profile @else Login @endauth" class="nav_link {{ ActiveRoutes(['Login','Profile','signUp']) }}">
                            <i class='bx bxs-user-pin' ></i>
                            <span class="nav_name" style="font-weight: bold">Profile</span>
                        </a>

                        @auth

                            @if (checkSA())

                                <a href="{{ route('Config') }}" title="Config" class="nav_link {{ ActiveRoutes('Config') }}">
                                    <i class='bx bxs-cog'></i>
                                    <span class="nav_name" style="font-weight: bold">Config</span>
                                </a>

                            @endif

                            <a href="{{ route('logOut') }}" title="logOut" class="nav_link">
                                <i class='bx bx-log-out-circle'></i>
                                <span class="nav_name" style="font-weight: bold">logOut</span>
                            </a>
                        @endauth

                    @endif

                </div>
            </div>
        </nav>
    </div>
    <!--Container Main start-->
    @if (getDevSecure()->DevSecure)
        <div class="badge bg-danger user-select-none p-3 fw-bold mt-4" style="letter-spacing: 0.8px">
            <div>
                error: working on site to be more secure
            </div>
            <span class="text-start d-flex align-items-center">
                <p class="pt-2">
                    <i class='bx bxs-lock-alt' ></i>
                    site are closed by owner
                </p>
            </span>
        </div>
    @else
        <livewire:load-document />
    @endif
    <!--Container Main end-->
    @livewireScripts
</body>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
                    nav.classList.toggle('show')
                    toggle.classList.toggle('bx-x')
                    bodypd.classList.toggle('body-pd')
                    @if(!ActiveRoutes('chat')) headerpd.classList.toggle('body-pd') @endif
                })
            }
        }
        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')
        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

        // Your code to run since DOM is loaded and ready
    });
</script>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
    .firstBox{
        width: 300px;
        height: auto;
        background-color: #CDE4DD;
        border-radius: 10px;
    }
    /* .Invar{
        font-family: 'Roboto Mono', monospace;
        width: 100%;
        font-weight: bold;
    } */
    :root {
        --header-height: 3rem;
        --nav-width: 68px;
        --first-color: #4723D9;
        --first-color-light: #AFA5D9;
        --white-color: #F7F6FB;
        --body-font: 'Nunito', sans-serif;
        --normal-font-size: 1rem;
        --z-fixed: 100
    }

    *,
    ::before,
    ::after {
        box-sizing: border-box
    }

    body {
        position: relative;
        @if (!ActiveRoutes('chat'))
            margin: var(--header-height) 0 0 0;
            padding: 0 1rem;
        @endif
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        transition: .5s
    }

    a {
        text-decoration: none
    }

    .header {
        width: 100%;
        height: var(--header-height);
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1rem;
        background-color: var(--white-color);
        z-index: var(--z-fixed);
        transition: .5s
    }

    .header_toggle {
        color: var(--first-color);
        font-size: 1.5rem;
        cursor: pointer
    }

    .header_img {
        width: 35px;
        height: 35px;
        display: flex;
        justify-content: center;
        border-radius: 50%;
        overflow: hidden
    }

    .header_img img {
        width: 40px
    }

    .l-navbar {
        position: fixed;
        top: 0;
        left: -30%;
        width: var(--nav-width);
        height: 100vh;
        background-color: var(--first-color);
        padding: .5rem 1rem 0 0;
        transition: .5s;
        z-index: var(--z-fixed)
    }

    .nav {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden
    }

    .nav_logo,
    .nav_link {
        display: grid;
        grid-template-columns: max-content max-content;
        align-items: center;
        column-gap: 1rem;
        padding: .5rem 0 .5rem 1.5rem
    }

    .nav_logo {
        margin-bottom: 2rem
    }

    .nav_logo-icon {
        font-size: 1.25rem;
        color: var(--white-color)
    }

    .nav_logo-name {
        color: var(--white-color);
        font-weight: 700
    }

    .nav_link {
        position: relative;
        color: var(--first-color-light);
        margin-bottom: 1.5rem;
        transition: .3s
    }

    .nav_link:hover {
        color: var(--white-color)
    }

    .nav_icon {
        font-size: 1.25rem
    }

    .show {
        left: 0
    }

    .body-pd {
        padding-left: calc(var(--nav-width) + 1rem)
    }

    .active {
        color: var(--white-color)
    }

    .active::before {
        content: '';
        position: absolute;
        left: 0;
        width: 2px;
        height: 32px;
        background-color: var(--white-color)
    }

    .height-100 {
        height: 100vh
    }

    @media screen and (min-width: 768px) {
        body {
            @if (!ActiveRoutes('chat'))
                margin: calc(var(--header-height) + 1rem) 0 0 0;
                padding-left: calc(var(--nav-width) + 2rem)
            @else
                padding-left: calc(var(--nav-width) + 0rem)
            @endif
        }

        .header {
            height: calc(var(--header-height) + 1rem);
            padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
        }

        .header_img {
            width: 40px;
            height: 40px
        }

        .header_img img {
            width: 45px
        }

        .l-navbar {
            left: 0;
            padding: 1rem 1rem 0 0
        }

        .show {
            width: calc(var(--nav-width) + 156px)
        }

        .body-pd {
            padding-left: calc(var(--nav-width) + 188px)
        }
    }
    ::-webkit-scrollbar {
        width: 12px;
        height: 12px;
    }
    ::-webkit-scrollbar-track {
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background: #A2CABD;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #86a79d;
    }
</style>

</html>
