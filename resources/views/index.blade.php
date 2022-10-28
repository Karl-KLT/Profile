@extends('layouts.app')
@section('container')
    <div class="pt-3 font-bold">
        <h4 style="text-decoration: underline;letter-spacing: 1px">Home</h4>
    </div>
    <div class="mt-1">

        <div id="desc" class="mt-2 text-light container-fluid w-md-75 rounded" style="background: linear-gradient(360deg ,#98B3AA,#CDE4DD 200px);">

            <div class="container-fluid p-1 w-100 text-dark" style="letter-spacing: 0.5px;">

                <b style="text-decoration: underline;">Message,</b><br>

                <p class="container-fluid text-secondary">

                    {{ old('Message',$user->Profile) }}
                    {{-- Hello👋 , I appreciate that you are looking at my small site that I've made, anyway this is just an profile image of me just explaining about myself, and I hope that we will be friends. --}}

                </p>

                <h3 class="alert mt-2 alert-primary text-dark fw-bold">0 -> Under devolopment</h3>

            </div>

        </div>
        <div class="row mb-3">

            <div class="col-md-6 mt-4">

                <div id="prof" class="d-flex p-2 firstBox container-fluid justify-content-start w-100 align-items-center">

                    <div class="me-3">
                        <img src="{{ asset('img.jfif') }}" style="width: 100px;height: 100px;border-radius: 100%;border: 4px solid #B6CDC6">
                    </div>

                    <div class="mt-2 pb-3">

                        <h4 class="fw-bold" style="letter-spacing: 1px;">
                            {{ old('Name',$user->Profile) }}
                        </h4>

                        <h6 class='text-secondary'>
                            {{ old('Bio',$user->Profile) }}
                        </h6>

                        <h6 class='text-secondary'>
                            {{ old('localBio',$user->Profile) }}
                        </h6>
                        {{-- <div>
                            <b class='text-secondary d-flex align-items-center'>
                                <div class="me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                                    </svg>
                                </div>
                                <span>Egypt</span>
                            </b>
                        </div> --}}
                    </div>
                </div>

                <livewire:accounts />

            </div>


            <div class="col-md-6 mt-4">
                <div style="user-select: none;" class="d-flex p-2 firstBox container-fluid justify-content-start w-100 align-items-center">
                    <div class="w-100 @auth py-2 @endauth" id="scroll_skills" style="height: auto;max-height: 245px; overflow: auto;">
                        <livewire:skills />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


















{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    {{-- <div class="w-100" id="loading" style="opacity: 0;display: flex;justify-content: center;height: 100vh;align-items: center;"><div class="spinner-border text-dark"></div></div>

    <header id="prof" class="d-flex firstBox container-fluid justify-content-start align-items-center">

        <div class="me-3">
            <img src="{{ asset('img.jfif') }}" style="width: 100px;height: 100px;border-radius: 100%;border: 4px solid #B6CDC6">
        </div>

        <div class="mt-2 pb-3">
            <h4 style="letter-spacing: 1px;">
                Ka RL
            </h4>
            <h6 class='text-secondary'>
                ƙ♬Ʀɭ / .𝕶 𝖆 𝖗 𝖑 - ° 𝕭 |🇬🇧!
            </h6>
            <h6 class='text-secondary'>
                Full Stack Developer <span>|</span> <b class='text-secondary'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                    </svg>
                    <span>Egypt</span>
                </b>
            </h6>

        </div>
    </header>
    <div class="text-light container-fluid p-2 d-flex justify-content-start align-items-center" style="background-color: #98B3AA">
        <a href="#" class="btn btn-dark" style="letter-spacing: 1px;font-size: 19px;font-weight: bold">home</a>
    </div>

    {{-- /////////////////////////////////////////// --}}

    {{-- <div class="row p-1 gx-0" id="mainboxing" style="user-select: none;display: none">
        <div class="col-md-4">


            <div id="cont" class="Box mt-3 container-fluid text-center">
                <div class="navbar">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg><span class="ms-1" style="font-weight: bold;">Instagram</span>
                    </div>
                    <div class="text-secondary" style="user-select:text;">
                        @Karl_O_pic
                    </div>
                </div>
                <div class="navbar">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg><span class="ms-1" style="font-weight: bold;">WhatsApp</span>
                    </div>
                    <div class="text-secondary" style="user-select:text;">
                        +201277762205
                    </div>
                </div>
                <div class="navbar">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg><span class="ms-1" style="font-weight: bold;">Facebook</span>
                    </div>
                    <div class="text-secondary" style="user-select:text;">
                        H.Code0110
                    </div>
                </div>
                <hr>
                <div class="navbar pt-0">
                    <button class="btn btn-dark w-100">

                        <div class='d-flex justify-content-start'>

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                                <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
                            </svg><span class="ms-2">Skills</span>

                        </div>

                    </button>
                </div>

            </div>

        </div>

    </div>
</body>
<style>
.firstBox{
    width: 100%;
    height: auto;
    background-color: #CDE4DD;
    /* border-radius: 10px; */
}
.Box{
    width: 300px;
    height: auto;
    background-color: #CDE4DD;
    border-radius: 10px;
}
#loading{
    transition: 1s;
}
.Invar{
    font-family: 'Roboto Mono', monospace;
    width: 100%;
    font-weight: bold;
}
/* #prof{opacity: 0;transition: 1s;}
#cont{opacity: 0;transition: 1s;}
#desc{opacity: 0;transition: 1s;}
#btnskill{opacity: 0;transition: 1s;}
#btnallinfo{opacity: 0;transition: 1s;} */
</style>
<script>
    function Animation_Main( ID , Count_S , Type , value){
        setTimeout(() => {
            if(Type == "display"){
                document.getElementById(ID).style.display=value
            }else if(Type == "opacity"){
                document.getElementById(ID).style.opacity=value
            }
        }, Count_S)
    }
    // Animation_Main("loading", 500 , "opacity", 1);
    // Animation_Main("loading", 500*3 , "opacity", 0);
    // Animation_Main("loading", 500*4 , "display", 'none');
    // Animation_Main("mainboxing", 500*5 , "display", 'flex');
    // Animation_Main("prof", 500*7 , "opacity", 1);
    // Animation_Main("cont", 500*8 , "opacity", 1);
    // Animation_Main("desc", 500*9 , "opacity", 1);
    // document.getElementById('skills').onclick=()=>{location.href='/My_Skills/index.html'};
</script>
</html> --}}
