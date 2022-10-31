<div class="content main_content">
    {{-- <div class="sidebar-group left-sidebar chat_sidebar">

        <div id="chats" class="left-sidebar-wrap sidebar active slimscroll" wire:loading wire:target='document'>
            <div class="slimscroll">

                <div class="left-chat-title d-flex justify-content-between align-items-center">
                    <div class="chat-title">
                        <h4>D-CHATS</h4>
                    </div>
                    <div class="add-section">
                        <ul>
                            <li>
                                <a>
                                    <header id="header">
                                        <div class="header_toggle flex align-items-center">
                                            <i class='bx bx-menu' id="header-toggle"></i>
                                        </div>
                                    </header>
                                </a>
                            </li>

                            {{-- <li>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#add-user">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </li> --}
                        </ul>
                    </div>
                </div>



                {{-- <div class="search_chat has-search">
                    <span class="fas fa-search form-control-feedback"></span>
                    <input class="form-control chat_input" id="search-contacts" type="text"
                        placeholder="Search Contacts">
                </div> --}

                <div class="sidebar-body" id="chatsidebar">

                    <div class="left-chat-title d-flex justify-content-between align-items-center ps-0 pe-0">
                        <div class="chat-title">
                            <h4>Groups</h4>
                        </div>
                        {{-- <div class="add-section">
                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                    class="fas fa-edit"></i></a>
                        </div> --}
                    </div>

                    <ul class="user-list mt-2">
                        @foreach ($groups as $group)
                            <li class="user-list-item">
                                <div class="avatar">
                                    <img src="https://www.usability.gov/sites/default/files/images/focus-group-full.jpg"
                                        class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div class="fw-bold">
                                        <h5>{{ old('Name',$group) }}</h5>
                                        <p>Ka RL: hii! //last message</p>
                                    </div>
                                    {{-- <div class="last-chat-time">
                                        <small class="text-muted">05 min</small>
                                        <div class="new-message-count">11</div>
                                    </div>--}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
    {{-- //////////////////////////////////////////////// --}}
    <div class="chat" id="middle">
        <div class="slimscroll">
            <div class="chat-header">
                <div class="user-details">
                    <div class="d-lg-flex me-2">
                        <ul class="list-inline mt-2 me-2">
                            <li class="list-inline-item">
                                <header id="header">
                                    <div class="header_toggle flex align-items-center">
                                        <i class='bx bx-menu' id="header-toggle"></i>
                                    </div>
                                </header>
                                {{-- <a class="text-muted px-0 left_side cursor-pointer"
                                    data-chat="open">
                                    <i class="fas fa-arrow-left"></i>
                                </a> --}}
                            </li>
                        </ul>
                    </div>
                    <figure class="avatar me-2">
                        <img src="{{ asset('img.jfif') }}"
                            class="rounded-circle" alt="image">
                    </figure>
                    <div class="flex align-items-center">
                        <h5 class="me-2">{{ env('APP_NAME') }}-Chat->Demo</h5>

                        {{-- <span class="badge cursor-pointer bg-dark">
                            <i class='bx bxs-show'></i>
                        </span> --}}
                    </div>
                </div>
                <div class="chat-options">
                    <ul class="list-inline">
                        {{-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Search">
                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/javascript:void(0)"
                                class="btn btn-outline-light chat-search-btn">
                                <i class="fas fa-search"></i>
                            </a>
                        </li> --}}
                        {{-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Voice call">
                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/javascript:void(0)"
                                class="btn btn-outline-light" data-bs-toggle="modal"
                                data-bs-target="#voice_call">
                                <i class="fas fa-phone-alt voice_chat_phone"></i>
                            </a>
                        </li> --}}
                        {{-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Video call">
                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/javascript:void(0)"
                                class="btn btn-outline-light" data-bs-toggle="modal"
                                data-bs-target="#video_call">
                                <i class="fas fa-video"></i>
                            </a>
                        </li> --}}
                        {{-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Video call">
                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/javascript:void(0)"
                                class="btn btn-outline-light" data-bs-toggle="modal"
                                data-bs-target="#video_call">
                                <i class="fas fa-video"></i>
                            </a>
                        </li> --}}
                        {{-- <li class="list-inline-item dream_profile_menu" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" title="Profile">
                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/javascript:void(0)"
                                class="btn btn-outline-light">
                                <i class='bx bxs-cog'></i>
                            </a>
                        </li> --}}

                        {{-- <li class="list-inline-item">
                            <a class="btn btn-outline-light no-bg"
                                href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                    class="dropdown-item dream_profile_menu">Archive <span><i
                                            class="fas fa-archive"></i></span></a>
                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                    class="dropdown-item">Muted <span
                                        class="material-icons">volume_off</span></a>
                                <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                    class="dropdown-item">Delete <span><i
                                            class="far fa-trash-alt"></i></span></a>
                            </div>
                        </li> --}}
                    </ul>
                </div>

                <div class="chat-search">
                    <form>
                        <span class="fas fa-search form-control-feedback"></span>
                        <input type="text" name="chat-search" placeholder="Search Chats"
                            class="form-control">
                        <div class="close-btn-chat"><span class="material-icons">close</span></div>
                    </form>
                </div>

            </div>
            <div class="chat-body">
                <div class="messages">
                    @forelse ($getMessages as $message)
                        @if (getUser()->id == $message->user_id)
                            <div class="chats chats-right">
                                <div class="chat-content">
                                    <div class="message-content">
                                        {{ old('Message',$message) }}
                                        <div class="chat-time">
                                            <div>
                                                <div class="time"><i class="fas fa-clock  me-1"></i>{{ carbonTimerForHumans($message->created_at) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-profile-name text-end">
                                        <h6>{{ old('Name',$message->Users->Profile) }}</h6>
                                    </div>
                                </div>
                                <div class="chat-avatar">
                                    <img src="{{ asset('img.jfif') }}"
                                        class="rounded-circle dreams_chat" alt="image">
                                </div>
                            </div>
                        @else
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="{{ asset('img.jfif') }}"
                                        class="rounded-circle dreams_chat" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="message-content">
                                        {{ old('Message',$message) }}

                                        <div class="chat-time">
                                            <div>
                                                <div class="time"><i class="fas fa-clock me-1"></i>{{ carbonTimerForHumans($message->created_at) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-profile-name">
                                        <h6>{{ old('Name',$message->Users->Profile) }}</h6>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                        <div class="chats">
                            <div class="chat-avatar">
                                <img src="{{ asset('img.jfif') }}"
                                    class="rounded-circle dreams_chat" alt="image">
                            </div>
                            <div class="chat-content">
                                <div class="message-content">
                                    No message Found, this chat is Demo from {{env('APP_NAME')}}
                                </div>
                                <div class="chat-profile-name">
                                    <h6>System</h6>
                                </div>
                            </div>
                        </div>
                    @endforelse
                    {{-- @forelse ($getAllMessages as $message) --}}
                        {{-- @if ($message->id == checkUserAuth()) --}}
                            {{-- <div class="chats chats-right">
                                <div class="chat-content">
                                    <div class="message-content">
                                        {{ old('Message',$message) }}
                                        <div class="chat-time">
                                            <div>
                                                <div class="time"><i class="fas fa-clock"></i>{{ carbonTimerForHumans($message->created_at) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-profile-name text-end">
                                        <h6>{{ old('Name',$message->User->Profile) }}</h6>
                                    </div>
                                </div>
                                <div class="chat-avatar">
                                    <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/avatar/avatar-12.jpg"
                                        class="rounded-circle dreams_chat" alt="image">
                                </div> --}}
                                {{-- <div class="chat-action-btns me-2">
                                    <div class="chat-action-col">
                                        <a class="#"
                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                            data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                                class="dropdown-item dream_profile_menu">Copy <span><i
                                                        class="far fa-copy"></i></span></a>
                                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                                class="dropdown-item">Save <span
                                                    class="material-icons">save</span></a>
                                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                                class="dropdown-item">Forward <span><i
                                                        class="fas fa-share"></i></span></a>
                                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                                class="dropdown-item">Delete <span><i
                                                        class="far fa-trash-alt"></i></span></a>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="chat-read-col">
                                        <span class="material-icons">done_all</span>
                                    </div> --}}
                                {{-- </div>
                            </div> --}}
                        {{-- @else --}}
                            {{-- <div class="chats"> --}}
                                {{-- <div class="chat-avatar">
                                    <img src="{{ asset('img.jfif') }}"
                                        class="rounded-circle dreams_chat" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="message-content">
                                        {{ old('Message',$message) }}
                                        <div class="chat-time">
                                            <div class="flex align-items-center">
                                                <div class="time" wire:poll.keep-alive><i class="fas fa-clock me-1"></i>{{ carbonTimerForHumans($message->created_at) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-profile-name">
                                        <h6>{{ $message->User->Profile->Name }}</h6>
                                    </div>
                                </div> --}}
                                {{-- <div class="chat-action-btns ms-3">
                                    <div class="chat-action-col">
                                        <a class="#"
                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                            data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                                class="dropdown-item dream_profile_menu">Copy <span><i
                                                        class="far fa-copy"></i></span></a>
                                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                                class="dropdown-item">Save <span
                                                    class="material-icons">save</span></a>
                                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                                class="dropdown-item">Forward <span><i
                                                        class="fas fa-share"></i></span></a>
                                            <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                                class="dropdown-item">Delete <span><i
                                                        class="far fa-trash-alt"></i></span></a>
                                        </div>
                                    </div>
                                </div> --}}
                            {{-- </div> --}}
                        {{-- <div class="chats">
                            <div class="chat-avatar">
                                <img src="{{ asset('img.jfif') }}"
                                    class="rounded-circle dreams_chat" alt="image">
                            </div>
                            <div class="chat-content">
                                <div class="message-content">
                                    No message Found
                                </div>
                                <div class="chat-profile-name">
                                    <h6>System</h6>
                                </div>
                            </div>
                        </div> --}}
                    {{-- <div class="chats chats-right">
                        <div class="chat-content">
                            <div class="message-content">
                                Good morning, How are you? What about our next meeting?
                                <div class="chat-time">
                                    <div>
                                        <div class="time"><i class="fas fa-clock"></i> 10:00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-profile-name text-end">
                                <h6>Alexandr</h6>
                            </div>
                        </div>
                        <div class="chat-avatar">
                            <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/avatar/avatar-12.jpg"
                                class="rounded-circle dreams_chat" alt="image">
                        </div>
                        <div class="chat-action-btns me-2">
                            <div class="chat-action-col">
                                <a class="#"
                                    href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                    data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item dream_profile_menu">Copy <span><i
                                                class="far fa-copy"></i></span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item">Save <span
                                            class="material-icons">save</span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item">Forward <span><i
                                                class="fas fa-share"></i></span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item">Delete <span><i
                                                class="far fa-trash-alt"></i></span></a>
                                </div>
                            </div>
                            <div class="chat-read-col">
                                <span class="material-icons">done_all</span>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="chats">
                        <div class="chat-avatar">
                            <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/avatar/avatar-8.jpg"
                                class="rounded-circle dreams_chat" alt="image">
                        </div>
                        <div class="chat-content">
                            <div class="message-content">
                                & Next meeting tomorrow 10.00AM
                                <div class="chat-time">
                                    <div>
                                        <div class="time"><i class="fas fa-clock"></i> 10:06</div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-profile-name">
                                <h6>Doris Brown</h6>
                            </div>
                        </div>
                        <div class="chat-action-btns ms-3">
                            <div class="chat-action-col">
                                <a class="#"
                                    href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                    data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item dream_profile_menu">Copy <span><i
                                                class="far fa-copy"></i></span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item">Save <span
                                            class="material-icons">save</span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item">Forward <span><i
                                                class="fas fa-share"></i></span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item">Delete <span><i
                                                class="far fa-trash-alt"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="chat-line">
                        <span class="chat-date">Today</span>
                    </div> --}}
                    {{-- <div class="chats chats-right">
                        <div class="chat-content">
                            <div class="message-content">
                                Wow Thats Great
                                <div class="chat-time">
                                    <div>
                                        <div class="time"><i class="fas fa-clock"></i> 10:02</div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-profile-name text-end">
                                <h6>Alexandr</h6>
                            </div>
                        </div>
                        <div class="chat-avatar">
                            <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/avatar/avatar-12.jpg"
                                class="rounded-circle dreams_chat" alt="image">
                        </div>
                        <div class="chat-action-btns me-2">
                            <div class="chat-action-col">
                                <a class="#"
                                    href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                    data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item dream_profile_menu">Copy <span><i
                                                class="far fa-copy"></i></span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item">Save <span
                                            class="material-icons">save</span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item">Forward <span><i
                                                class="fas fa-share"></i></span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item">Delete <span><i
                                                class="far fa-trash-alt"></i></span></a>
                                </div>
                            </div>
                            <div class="chat-read-col">
                                <span class="material-icons">done_all</span>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="chats">
                        <div class="chat-avatar">
                            <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/avatar/avatar-8.jpg"
                                class="rounded-circle dreams_chat" alt="image">
                        </div>
                        <div class="chat-content">
                            <div class="message-content">
                                <div class="download-col">
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
                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/javascript:void(0)"><i
                                                                class="fas fa-cloud-download-alt"></i></a>
                                                    </div>
                                                    <div><a
                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/javascript:void(0)"><i
                                                                class="fas fa-ellipsis-h"></i></a></div>
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
                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/javascript:void(0)"><i
                                                                class="fas fa-cloud-download-alt"></i></a>
                                                    </div>
                                                    <div><a
                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/javascript:void(0)"><i
                                                                class="fas fa-ellipsis-h"></i></a></div>
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
                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/javascript:void(0)"><i
                                                                class="fas fa-cloud-download-alt"></i></a>
                                                    </div>
                                                    <div><a
                                                            href="https://dreamschat-laravel.dreamguystech.com/template2/public/javascript:void(0)"><i
                                                                class="fas fa-ellipsis-h"></i></a></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat-time">
                                    <div>
                                        <div class="time"><i class="fas fa-clock"></i> 10:00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-profile-name">
                                <h6>Doris Brown</h6>
                            </div>
                        </div>
                        <div class="chat-action-btns ms-3">
                            <div class="chat-action-col">
                                <a class="#"
                                    href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                    data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item dream_profile_menu">Copy <span><i
                                                class="far fa-copy"></i></span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item">Save <span
                                            class="material-icons">save</span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item">Forward <span><i
                                                class="fas fa-share"></i></span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item">Delete <span><i
                                                class="far fa-trash-alt"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="chats chats-right">
                        <div class="chat-content">
                            <div class="message-content">
                                <div class="file-download d-flex align-items-center">
                                    <div
                                        class="file-type d-flex align-items-center justify-content-center me-2">
                                        <i class="far fa-file-archive"></i>
                                    </div>
                                    <div class="file-details">
                                        <span class="file-name">filename.zip</span>
                                        <span class="file-size">10.6MB</span>
                                    </div>
                                    <div class="download-action d-flex align-items-center">
                                        <div><a
                                                href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                    class="fas fa-cloud-download-alt"></i></a></div>
                                        <div><a
                                                href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                                                    class="fas fa-ellipsis-h"></i></a></div>
                                    </div>
                                </div>
                                <div class="chat-time">
                                    <div>
                                        <div class="time"><i class="fas fa-clock"></i> 10:02</div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-profile-name text-end">
                                <h6>Alexandr</h6>
                            </div>
                        </div>
                        <div class="chat-avatar">
                            <img src="https://dreamschat-laravel.dreamguystech.com/template2/public/assets/img/avatar/avatar-12.jpg"
                                class="rounded-circle dreams_chat" alt="image">
                        </div>
                        <div class="chat-action-btns me-2">
                            <div class="chat-action-col">
                                <a class="#"
                                    href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                    data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item dream_profile_menu">Copy <span><i
                                                class="far fa-copy"></i></span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item">Save <span
                                            class="material-icons">save</span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item">Forward <span><i
                                                class="fas fa-share"></i></span></a>
                                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"
                                        class="dropdown-item">Delete <span><i
                                                class="far fa-trash-alt"></i></span></a>
                                </div>
                            </div>
                            <div class="chat-read-col">
                                <span class="material-icons">done_all</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="chat-footer w-100 bg-light container-fluid justify-content-center flex" style="position: fixed;bottom: 0;">
            <form class="w-75 flex align-items-center" wire:submit.prevent='$emit("SMessage")'>
                {{-- <div class="smile-col">
                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                            class="far fa-smile"></i></a>
                </div>
                <div class="attach-col">
                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><i
                            class="fas fa-paperclip"></i></a>
                </div> --}}
                <input type="text" class="form-control chat_form ps-4" wire:model.lazy='message' placeholder="Enter Message.....">

                <div class="form-buttons">
                    <button class="btn send-btn" type="submit">
                        <span class="material-icons">send</span>
                    </button>
                </div>
                {{-- <div class="specker-col">
                    <a href="https://dreamschat-laravel.dreamguystech.com/template2/public/#"><span
                            class="material-icons">settings_voice</span></a>
                </div> --}}
            </form>
        </div>
    </div>
</div>


