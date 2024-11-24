@extends('admin.dashboard')

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    {{-- <div class="page-content">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="d-flex justify-content-center p-3 rounded-bottom">
                        <ul class="d-flex align-items-center m-0 p-0">
                            <li class="d-flex align-items-center active">
                                <i class="me-1 icon-md text-primary" data-feather="columns"></i>
                                <a class="pt-1px d-none d-md-block text-primary" href="#">Timeline</a>
                            </li>
                            <li class="ms-3 ps-3 border-start d-flex align-items-center">
                                <i class="me-1 icon-md" data-feather="user"></i>
                                <a class="pt-1px d-none d-md-block text-body" href="#">About</a>
                            </li>
                            <li class="ms-3 ps-3 border-start d-flex align-items-center">
                                <i class="me-1 icon-md" data-feather="users"></i>
                                <a class="pt-1px d-none d-md-block text-body" href="#">Friends <span
                                        class="text-muted tx-12">3,765</span></a>
                            </li>
                            <li class="ms-3 ps-3 border-start d-flex align-items-center">
                                <i class="me-1 icon-md" data-feather="image"></i>
                                <a class="pt-1px d-none d-md-block text-body" href="#">Photos</a>
                            </li>
                            <li class="ms-3 ps-3 border-start d-flex align-items-center">
                                <i class="me-1 icon-md" data-feather="video"></i>
                                <a class="pt-1px d-none d-md-block text-body" href="#">Videos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div>
                                <img class="wd-100 rounded-circle"
                                    src="{{ !empty($profileData->photo) ? url('upload/admin_images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
                                    alt="profile">
                                <span class="h4 ms-3 text-dark">{{ $profileData->name }}</span>
                            </div>

                        </div>
                        <p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of
                            Social.</p>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
                            <p class="text-muted">{{ $profileData->updated_at }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Lives:</label>
                            <p class="text-muted">New York, USA</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                            <p class="text-muted">{{ $profileData->email }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Website:</label>
                            <p class="text-muted">www.minstore.com</p>
                        </div>
                        <div class="mt-3 d-flex social-links">
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="github"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="twitter"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">

                            <h6 class="card-title">Update Admin Profile</h6>

                            <form method="POST" action="{{ route('admin.profile.store') }}" class="forms-sample"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputUsername1"
                                        autocomplete="off" value="{{ $profileData->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                        value="{{ $profileData->email }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Photo</label>
                                    <input name="photo" class="form-control" id="image" type="file">
                                </div>

                                <div class="form-check mb-3">
                                    <img id="showImage" class="wd-80 rounded-circle"
                                        src="{{ !empty($profileData->photo) ? url('upload/admin_images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
                                        alt="profile">
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-secondary">Cancel</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- middle wrapper end -->
            <!-- right wrapper start -->
            <!-- right wrapper end -->
        </div>
    </div> --}}

    {{-- CHATBOT --}}
    <section style="background-color: #eee;">
        {{-- Style for CHATBOT --}}
        <style>
            .chat-btn {
                position: absolute;
                right: 14px;
                bottom: 30px;
                cursor: pointer
            }

            .chat-btn .close {
                display: none
            }

            .chat-btn i {
                transition: all 0.9s ease
            }

            #check:checked~.chat-btn i {
                display: block;
                pointer-events: auto;
                transform: rotate(180deg)
            }

            #check:checked~.chat-btn .comment {
                display: none
            }

            .chat-btn i {
                font-size: 22px;
                color: #fff !important
            }

            .chat-btn {
                width: 50px;
                height: 50px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50px;
                background-color: rgb(98, 98, 231);
                color: #fff;
                font-size: 22px;
                border: none
            }

            .wrapper {
                position: absolute;
                right: 20px;
                bottom: 100px;
                width: 300px;
                background-color: #fff;
                border-radius: 5px;
                opacity: 0;
                transition: all 0.4s
            }

            #check:checked~.wrapper {
                opacity: 1
            }

            .header {
                padding: 13px;
                background-color: blue;
                border-radius: 5px 5px 0px 0px;
                margin-bottom: 10px;
                color: #fff
            }

            .chat-form {
                padding: 15px
            }

            .chat-form input,
            textarea,
            button {
                margin-bottom: 10px
            }

            .chat-form textarea {
                resize: none
            }

            .form-control:focus,
            .btn:focus {
                box-shadow: none
            }

            .btn,
            .btn:focus,
            .btn:hover {
                background-color: rgb(63, 63, 245);
                border: rgb(63, 63, 245)
            }

            #check {
                display: none !important
            }

            .wrapper {
                position: fixed;    /* Giữ khung chat cố định trên màn hình */
                right: 20px;        /* Khoảng cách từ phải màn hình */
                bottom: 100px;      /* Khoảng cách từ dưới cùng của màn hình */
                width: 300px;       /* Chiều rộng cố định của khung chat */
                height: 400px;      /* Chiều cao cố định của khung chat */
                background-color: #fff; /* Màu nền cho khung chat */
                border-radius: 5px; /* Bo góc cho khung chat */
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);  /* Thêm bóng cho đẹp */
                transition: opacity 0.4s; /* Hiệu ứng chuyển đổi cho opacity */
                opacity: 0; /* Khởi tạo ẩn */
                overflow-y: auto;   /* Cho phép cuộn dọc nếu nội dung vượt quá chiều cao cố định */
            }

            #check:checked ~ .wrapper {
                opacity: 1; /* Hiển thị khi checkbox được check */
            }

        </style>

        <input type="checkbox" id="check"> <label class="chat-btn" for="check"> <i
                class="fa-solid fa-comment-dots"></i></i>
            <i class="fa fa-close close"></i> </label>
        <div class="wrapper">
            <div class="header">
                <h6>Chat bot</h6>
            </div>
            <div class="main">
                {{-- <textarea id="chat_content" style="width: 300px; height: 150px;"></textarea> --}}
                <br>
                <div class="px-2 scroll">
                    <div class="d-flex align-items-center">
                        <div class="text-left pr-1"><img src="https://img.icons8.com/color/40/000000/guest-female.png"
                                width="30" class="img1" /></div>
                        <div class="pr-2 pl-1"> <span class="name">Sarah Anderson</span>
                            <p class="msg">Hi Dr. Hendrikson, I haven't been falling well for past few days.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="px-2">
                <nav class="">
                    <input type="text number" name="user_message" id="user_message" placeholder="Type a message...">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-warning btn-flat" id="btn_send">Send</button>
                    </span>
                    <div class="icondiv d-flex justify-content-end align-content-center text-center ml-2"> <i
                            class="fa fa-paperclip icon1"></i> <i class="fa fa-arrow-circle-right icon2"></i> </div>

                </nav>
            </div>
        </div>

    </section>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })
    </script>

{{-- Handle CHATBOX --}}
    <script>
        function addMessageToChat(isUser, message) {
            var chatContainer = $('.scroll'); // Selector cho container của chat
            var messageDiv = $('<div>').addClass('d-flex align-items-center'); // Tạo div mới cho mỗi message

            if (isUser) {
                messageDiv.addClass('text-right justify-content-end'); // USER
                messageDiv.html(
                    `<div class="pr-2"><span class="name">Bạn</span><p class="msg">${message}</p></div><div><img src="https://i.imgur.com/HpF4BFG.jpg" width="30" class="img1" /></div>`
                );
            } else {
                messageDiv.addClass('text-left'); // BOT
                messageDiv.html(
                    `<div class="text-left pr-1"><img src="https://img.icons8.com/color/40/000000/guest-female.png" width="30" class="img1" /></div><div class="pr-2 pl-1"><span class="name">Bot</span><p class="msg">${message}</p></div>`
                );
            }

            chatContainer.append(messageDiv); // Thêm message vào container
            chatContainer.scrollTop(chatContainer.prop("scrollHeight")); // Cuộn đến cuối
        }

        // Khi người dùng gõ enter ở ô message thì gọi hàm sendchat
        $('#user_message').keypress(function(event) {
            if (event.keyCode === 13) { // Enter key
                event.preventDefault(); // Tránh việc form được submit
                sendchat();
            }
        });

        function sendchat() {
            var user_message = $('#user_message').val(); // Lấy giá trị của ô nhập liệu
            $('#user_message').val(''); // Xóa trường nhập liệu

            // Gửi tin nhắn người dùng vào chat
            addMessageToChat(true, user_message);

            // Gửi dữ liệu đến server Rasa
            $.ajax({
                type: 'POST',
                url: 'http://127.0.0.1:5005/webhooks/rest/webhook',
                contentType: 'application/json',
                data: JSON.stringify({
                    sender: "user",
                    message: user_message
                }),
                success: function(data) {
                    if (data && data.length > 0 && data[0].hasOwnProperty('text')) {
                        addMessageToChat(false, data[0].text); // Gửi tin nhắn bot vào chat
                    } else {
                        addMessageToChat(false, "Không có phản hồi hoặc phản hồi không có văn bản.");
                    }
                },
                error: function(xhr, status, error) {
                    addMessageToChat(false, "Lỗi khi gửi yêu cầu.");
                }
            });
        }
    </script>
@endsection
