@extends('layouts.app')
@section('custom-head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css">


    <link rel="stylesheet" href="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/plugins/mcustomscroll/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/plugins/swiper/swiper.min.css">

    <link rel="stylesheet" href="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/plugins/fancybox/css/jquery.fancybox.min.css">

    <style>
        @font-face {font-family: 'Material Icons';font-style: normal;font-weight: 400;src: url({{asset('storage/fonts/googleFontIcons.woff2')}}) format('woff2');}
        .material-icons {font-family: 'Material Icons';font-weight: normal;font-style: normal;font-size: 24px;line-height: 1;letter-spacing: normal;text-transform: none;display: inline-block;white-space: nowrap;word-wrap: normal;direction: ltr;-webkit-font-feature-settings: 'liga';-webkit-font-smoothing: antialiased;}
    </style>

    <link rel="stylesheet" href="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/css/app.css">
    <style>
        .chat {
            flex: 1;
            display: flex;
            flex-direction: column;
            transition: all .5s ease;
            -webkit-transition: all .5s ease;
            -ms-transition: all .5s ease;
            width: 100%;
            padding: 0px 10px 0px 15px;
            background-image: url('https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/chat-bg.png');
            background-repeat: repeat;
            height: 100%;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
@endsection
@section('container')

    <div class="main-wrapper flex">

            {{-- side bar --}}

            {{-- <div class="sidebar-menu">
                <div class="logo-col">
                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/index"><img
                            src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/logo.png"
                            alt=""></a>
                </div>
                <div class="menus-col">
                    <div class="chat-menus">
                        <ul>
                            <li>
                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/index"
                                    class="chat-unread blue">
                                    <span class="material-icons">message</span>
                                    <span>Chats</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/group"
                                    class="chat-unread pink">
                                    <span class="material-icons">group</span>
                                    <span>Groups</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/status"
                                    class="chat-unread">
                                    <span class="material-icons">library_books</span>
                                    <span>Status</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/audio-call"
                                    class="chat-unread">
                                    <span class="material-icons">call</span>
                                    <span>Calls</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/settings"
                                    class="chat-unread">
                                    <span class="material-icons">settings</span>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="bottom-menus">
                        <ul>
                            <li>
                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                    data-bs-toggle="modal" data-bs-target="#add-new-group">
                                    <span class="material-icons group-add-btn">group_add</span>
                                    <span>Add Groups</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                    class="add-contacts-btn" data-bs-toggle="modal" data-bs-target="#add-contact">
                                    <i class="fas fa-plus"></i>
                                    <span>Add Contacts</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                    id="dark-mode-toggle" class="dark-mode-toggle">
                                    <i class="far fa-moon"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                    class="chat-profile-icon" data-bs-toggle="dropdown">
                                    <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/avatar/avatar-13.jpg"
                                        alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item dream_profile_menu">Edit Profile <span
                                            class="edit-profile-icon"><i class="fas fa-edit"></i></span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item">Profile <span class="profile-icon-col"><i
                                                class="fas fa-id-card-alt"></i></span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/settings"
                                        class="dropdown-item">Settings <span class="material-icons">settings</span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/archived"
                                        class="dropdown-item">Archived <span class="material-icons">flag</span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/login-email"
                                        class="dropdown-item">Logout <span
                                            class="material-icons">power_settings_new</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}

            {{-- side group --}}
            <livewire:chat />


            {{-- <div class="right-sidebar right_sidebar_profile" id="middle1">
                <div class="right-sidebar-wrap active">
                    <div class="slimscroll">
                        <div class="left-chat-title d-flex justify-content-between align-items-center p-3">
                            <div class="chat-title">
                                <h4>PROFILE</h4>
                            </div>
                            <div class="contact-close_call text-end">
                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                    class="close_profile close_profile4">
                                    <span class="material-icons">close</span>
                                </a>
                            </div>
                        </div>
                        <div class="sidebar-body">
                            <div class="mt-0 right_sidebar_logo">
                                <div class="text-center mb-2 right-sidebar-profile">
                                    <figure class="avatar avatar-xl mb-3">
                                        <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/avatar/avatar-2.jpg"
                                            class="rounded-circle" alt="image">
                                    </figure>
                                    <h5 class="profile-name">Scott Albright</h5>
                                    <div class="online-profile">
                                        <span>online</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="about-media-tabs">
                                        <nav>
                                            <div class="nav nav-tabs justify-content-center" id="nav-tab">
                                                <a class="nav-item nav-link active" id="nav-home-tab"
                                                    data-bs-toggle="tab"
                                                    href="https://dreamschat-laravel.dreamguystech.com/template2/public/#about">About</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab"
                                                    data-bs-toggle="tab"
                                                    href="https://dreamschat-laravel.dreamguystech.com/template2/public/#media">Media</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="about">
                                                <p>If several languages coalesce, the grammar of the resulting language
                                                    is more simple and regular than that of the individual.</p>
                                                <div class="member-details">
                                                    <ul>
                                                        <li>
                                                            <h6>Phone</h6>
                                                            <span>555-555-21541</span>
                                                        </li>
                                                        <li>
                                                            <h6>Nick Name</h6>
                                                            <span>Alberywo</span>
                                                        </li>
                                                        <li>
                                                            <h6>Email</h6>
                                                            <span><a href="https://dreamschat-laravel.dreamguystech.com/template2/public//cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="beffd2dcdbccc7c9d1fed9d3dfd7d290ddd1d3">[email&#160;protected]</a></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="social-media-col">
                                                    <h6>Social media accounts</h6>
                                                    <ul>
                                                        <li><a
                                                                href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                        <li><a
                                                                href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                        <li><a
                                                                href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                    class="fab fa-youtube"></i></a></li>
                                                        <li><a
                                                                href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                    class="fab fa-instagram"></i></a></li>
                                                        <li><a
                                                                href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                    class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="settings-col">
                                                    <h6>Settings</h6>
                                                    <ul>
                                                        <li class="d-flex align-items-center">
                                                            <label class="switch">
                                                                <input type="checkbox" checked>
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <div>
                                                                <span>Block</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <div>
                                                                <span>Mute</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex align-items-center">
                                                            <label class="switch">
                                                                <input type="checkbox">
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <div>
                                                                <span>Get notification</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="media">
                                                <div class="file-download-col">
                                                    <ul>
                                                        <li>
                                                            <div class="image-download-col">
                                                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/chat-download.jpg"
                                                                    data-fancybox="gallery" class="fancybox">
                                                                    <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/chat-download.jpg"
                                                                        alt="">
                                                                </a>
                                                                <div class="download-action d-flex align-items-center">
                                                                    <div><a
                                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                                class="fas fa-cloud-download-alt"></i></a>
                                                                    </div>
                                                                    <div><a
                                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                                class="fas fa-ellipsis-h"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="image-download-col">
                                                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/chat-download.jpg"
                                                                    data-fancybox="gallery" class="fancybox">
                                                                    <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/chat-download.jpg"
                                                                        alt="">
                                                                </a>
                                                                <div class="download-action d-flex align-items-center">
                                                                    <div><a
                                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                                class="fas fa-cloud-download-alt"></i></a>
                                                                    </div>
                                                                    <div><a
                                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                                class="fas fa-ellipsis-h"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="image-download-col">
                                                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/chat-download.jpg"
                                                                    data-fancybox="gallery" class="fancybox">
                                                                    <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/chat-download.jpg"
                                                                        alt="">
                                                                </a>
                                                                <div class="download-action d-flex align-items-center">
                                                                    <div><a
                                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                                class="fas fa-cloud-download-alt"></i></a>
                                                                    </div>
                                                                    <div><a
                                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                                class="fas fa-ellipsis-h"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="image-download-col">
                                                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/chat-download.jpg"
                                                                    data-fancybox="gallery" class="fancybox">
                                                                    <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/chat-download.jpg"
                                                                        alt="">
                                                                </a>
                                                                <div class="download-action d-flex align-items-center">
                                                                    <div><a
                                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                                class="fas fa-cloud-download-alt"></i></a>
                                                                    </div>
                                                                    <div><a
                                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                                class="fas fa-ellipsis-h"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="image-download-col">
                                                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/chat-download.jpg"
                                                                    data-fancybox="gallery" class="fancybox">
                                                                    <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/chat-download.jpg"
                                                                        alt="">
                                                                </a>
                                                                <div class="download-action d-flex align-items-center">
                                                                    <div><a
                                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                                class="fas fa-cloud-download-alt"></i></a>
                                                                    </div>
                                                                    <div><a
                                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                                class="fas fa-ellipsis-h"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="image-download-col">
                                                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/chat-download.jpg"
                                                                    data-fancybox="gallery" class="fancybox">
                                                                    <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/chat-download.jpg"
                                                                        alt="">
                                                                </a>
                                                                <div class="download-action d-flex align-items-center">
                                                                    <div><a
                                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                                class="fas fa-cloud-download-alt"></i></a>
                                                                    </div>
                                                                    <div><a
                                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                                                class="fas fa-ellipsis-h"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="full-width text-center">
                                                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                                                class="load-more-btn">More 154 Files <i
                                                                    class="fas fa-sort-down"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="report-col">
                            <ul>
                                <li><a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><span
                                            class="material-icons">report_problem</span> Report Chat</a></li>
                                <li><a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><span><i
                                                class="far fa-trash-alt"></i></span> Delete Chat</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="modal fade" id="add-user">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <span class="material-icons">person_add</span>Add Friends
                            </h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span class="material-icons">close</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="new-friends">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input class="form-control form-control-lg group_formcontrol"
                                        name="new-chat-title" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control form-control-lg group_formcontrol"
                                        name="new-chat-title" type="text">
                                </div>
                            </form>

                            <div class="form-row profile_form text-end float-end m-0 align-items-center">

                                <div class="cancel-btn me-4">
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                </div>
                                <div class="">
                                    <button type="button" class="btn btn-block newgroup_create mb-0"
                                        data-bs-dismiss="modal" aria-label="Close">
                                        Add User
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="add-contact">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <span class="material-icons">person_add</span>Add Friends
                            </h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span class="material-icons">close</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="new-friends">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control form-control-lg group_formcontrol"
                                        name="new-chat-title" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Nickname</label>
                                    <input class="form-control form-control-lg group_formcontrol"
                                        name="new-chat-title" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control form-control-lg group_formcontrol"
                                        name="new-chat-title" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control form-control-lg group_formcontrol"
                                        name="new-chat-title" type="email">
                                </div>
                            </form>

                            <div class="form-row profile_form text-end float-end m-0 align-items-center">

                                <div class="cancel-btn me-4">
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                </div>
                                <div class="">
                                    <button type="button" class="btn btn-block newgroup_create mb-0"
                                        data-bs-dismiss="modal" aria-label="Close">
                                        Add to contacts
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="add-new-group">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <span class="material-icons group-add-btn">group_add</span>Create a New Group
                            </h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span class="material-icons">close</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="new-friends">
                                <div class="form-group">
                                    <label>Group Name</label>
                                    <input class="form-control form-control-lg group_formcontrol"
                                        name="new-chat-title" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Choose profile picture</label>
                                    <div class="custom-input-file form-control form-control-lg group_formcontrol">
                                        <input type="file" class="">
                                        <span class="browse-btn">Browse File</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Topic (optional)</label>
                                    <input class="form-control form-control-lg group_formcontrol"
                                        name="new-chat-title" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control form-control-lg group_formcontrol"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex align-items-center">
                                        <label class="custom-radio me-3">Private Group
                                            <input type="radio" checked="checked" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom-radio">Public Group
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </form>

                            <div class="form-row profile_form text-end float-end m-0 align-items-center">

                                <div class="cancel-btn me-4">
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                </div>
                                <div class="">
                                    <button type="button" class="btn btn-block newgroup_create mb-0"
                                        data-bs-toggle="modal" data-bs-target="#add-group-member"
                                        data-bs-dismiss="modal" aria-label="Close">
                                        Add Participants
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade custom-border-modal" id="add-group-member">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <span class="material-icons group-add-btn">group_add</span>Add Group Members
                            </h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span class="material-icons">close</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="search_chat has-search mr-0 ms-0">
                                <span class="fas fa-search form-control-feedback"></span>
                                <input class="form-control chat_input" id="search-contact1" type="text"
                                    placeholder="Search Contacts">
                            </div>
                            <div class="sidebar">
                                <span class="contact-name-letter">A</span>
                                <ul class="user-list mt-2">
                                    <li class="user-list-item">
                                        <div class="avatar avatar-online">
                                            <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/avatar/avatar-1.jpg"
                                                class="rounded-circle" alt="image">
                                        </div>
                                        <div class="users-list-body align-items-center">
                                            <div>
                                                <h5>Albert Rodarte</h5>
                                            </div>
                                            <div class="last-chat-time">
                                                <label class="custom-check">
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="avatar avatar-online">
                                            <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/avatar/avatar-2.jpg"
                                                class="rounded-circle" alt="image">
                                        </div>
                                        <div class="users-list-body align-items-center">
                                            <div>
                                                <h5>Allison Etter</h5>
                                            </div>
                                            <div class="last-chat-time">
                                                <label class="custom-check">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <span class="contact-name-letter mt-3">C</span>
                                <ul class="user-list mt-2">
                                    <li class="user-list-item">
                                        <div class="avatar avatar-online">
                                            <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/avatar/avatar-3.jpg"
                                                class="rounded-circle" alt="image">
                                        </div>
                                        <div class="users-list-body align-items-center">
                                            <div>
                                                <h5>Craig Smiley</h5>
                                            </div>
                                            <div class="last-chat-time">
                                                <label class="custom-check">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="avatar avatar-online">
                                            <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/avatar/avatar-4.jpg"
                                                class="rounded-circle" alt="image">
                                        </div>
                                        <div class="users-list-body align-items-center">
                                            <div>
                                                <h5>Caniel Clay</h5>
                                            </div>
                                            <div class="last-chat-time">
                                                <label class="custom-check">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-row profile_form text-end float-end m-0 mt-3 align-items-center">

                                <div class="cancel-btn me-3">
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                </div>
                                <div class="">
                                    <button type="button" class="btn btn-block newgroup_create previous mb-0 me-3"
                                        data-bs-toggle="modal" data-bs-target="#add-new-group"
                                        data-bs-dismiss="modal" aria-label="Close">
                                        Previous
                                    </button>
                                </div>
                                <div class="">
                                    <button type="button" class="btn btn-block newgroup_create mb-0"
                                        data-bs-dismiss="modal" aria-label="Close">
                                        Create Group
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="video_call" role="document">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content voice_content">
                        <div class="modal-body voice_body">
                            <div class="call-box incoming-box">
                                <div class="call-wrapper">
                                    <div class="call-inner">
                                        <div class="call-user">
                                            <img alt="User Image"
                                                src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/avatar/avatar-8.jpg"
                                                class="call-avatar">
                                            <h4>Brietta Blogg <span>video calling</span>
                                            </h4>
                                        </div>
                                        <div class="call-items">
                                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                                class="btn call-item call-end" data-bs-dismiss="modal">
                                                <span class="material-icons">close</span>
                                            </a>
                                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                                class="btn call-item call-start" data-bs-dismiss="modal">
                                                <i class="fas fa-video"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="voice_call" role="document">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content voice_content">
                        <div class="modal-body voice_body">
                            <div class="call-box incoming-box">
                                <div class="call-wrapper">
                                    <div class="call-inner">
                                        <div class="call-user">
                                            <img alt="User Image"
                                                src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/avatar/avatar-8.jpg"
                                                class="call-avatar">
                                            <h4>Brietta Blogg <span>voice calling</span>
                                            </h4>
                                        </div>
                                        <div class="call-items">
                                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                                class="btn call-item call-end" data-bs-dismiss="modal">
                                                <span class="material-icons">close</span>
                                            </a>
                                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                                class="btn call-item call-start" data-bs-dismiss="modal">
                                                <i class="fas fa-video"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}

    </div>


        <script data-cfasync="false" src="https://dreamschat-laravel.dreamguystech.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/js/jquery-3.6.0.min.js"></script>

        <script src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/plugins/intltelinput/js/intlTelInput.js"></script>

        <script src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/js/bootstrap.bundle.min.js"></script>

        <script src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/js/jquery.nicescroll.min.js"></script>
        <script src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/plugins/mcustomscroll/jquery.mCustomScrollbar.js"></script>

        <script src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/plugins/swiper/swiper.min.js"></script>

        <script src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/js/jquery-ui.min.js"></script>

        <script src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/plugins/fancybox/js/jquery.fancybox.min.js"></script>

        <script src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/js/script.js"></script>
@endsection
