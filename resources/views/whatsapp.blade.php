@extends('layouts.regularMaster')
@section('page_title')
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>(17) WhatsApp</title>

    <meta name="google" content="notranslate">


    <meta name="description" content="Quickly send and receive WhatsApp messages right from your computer.">
    <meta name="og:description" content="Quickly send and receive WhatsApp messages right from your computer.">
    <meta name="og:url" content="https://web.whatsapp.com/">
    <meta name="og:title" content="WhatsApp Web">
    <meta name="og:image" content="https://www.whatsapp.com/img/whatsapp-promo.png">

    <link id="favicon" rel="shortcut icon" href="https://web.whatsapp.com/img/9376c16fcd9b554de8a081973bebe9aa.png" type="image/png">
    <link rel="apple-touch-icon" sizes="194x194" href="https://web.whatsapp.com/apple-touch-icon.png" type="image/png">

    <link rel="stylesheet" href="{{url('assets/css/whatsapp.css')}}">

@endsection
@section('page_style')
    <style>

        html, body, #app {
            height: 100%;
            width: 100%;
            overflow: hidden;
            padding: 0;
            margin: 0;
        }

        #app {
            position: absolute;
            top: 0;
            left: 0;
        }

        #startup, #initial_startup {
            width: 100%;
            height: 100%;
            position: fixed;
            background-color: #f2f2f2;

            -moz-user-select: none;
            -webkit-user-select: none;

            display: flex;
            align-items: center;
            justify-content: center;
            display: -webkit-box;
            display: -webkit-flex;
            -webkit-align-items: center;
            -webkit-justify-content: center;
            flex-direction: column;
            -webkit-flex-direction: column;
        }

        .spinner-container {
            -webkit-animation: rotate 2s linear infinite;
            animation: rotate 2s linear infinite;
            z-index: 2;
        }

        .spinner-path {
            stroke-dasharray: 1,150;
            stroke-dashoffset: 0;
            stroke: #acb9bf;
            stroke-linecap: round;
            -webkit-animation: dash 1.5s ease-in-out infinite;
            animation: dash 1.5s ease-in-out infinite;
        }

        @keyframes rotate {
            100% { transform: rotate(360deg); }
        }
        @-webkit-keyframes rotate{
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes dash {
            0% {
                stroke-dasharray: 1,150;
                stroke-dashoffset: 0;
            }
            50% {
                stroke-dasharray: 90,150;
                stroke-dashoffset: -35;
            }
            100% {
                stroke-dasharray: 90,150;
                stroke-dashoffset: -124;
            }
        }
        @-webkit-keyframes dash {
            0% {
                stroke-dasharray: 1,150;
                stroke-dashoffset: 0;
            }
            50% {
                stroke-dasharray: 90,150;
                stroke-dashoffset: -35;
            }
            100% {
                stroke-dasharray: 90,150;
                stroke-dashoffset: -124;
            }
        }

        .progress-container {
            width: 360px;
            position: fixed;
            padding-top: 120px;
            top: 50%;
            left: 50%;
            margin-left: -180px;
        }

        progress {
            -webkit-appearance: none;
            appearance: none;
            width: 100%;
            height: 3px;
            border: none;
            margin: 0;
            color: #02d1a4;
            background-color: #e0e4e5;
        }

        progress[value]::-webkit-progress-bar {
            background-color: #e0e4e5;
        }

        progress[value]::-webkit-progress-value {
            background-color: #02d1a4;
        }

        progress[value]::-moz-progress-bar {
            background-color: #02d1a4;
        }
    </style>

@endsection
@section('content')



    {{--<!DOCTYPE html>--}}
    <!-- saved from url=(0025)https://web.whatsapp.com/ -->
    <html class="js serviceworker adownload cssanimations csstransitions webp webp-alpha webp-animation webp-lossless wf-opensans-n6-active wf-roboto-n3-active wf-opensans-n4-active wf-roboto-n4-active wf-roboto-n5-active wf-active wf-loading wf-droidserif-n4-active" dir="LTR" loc="en" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



        <script id="progress_script_/vendor1.7152b76edac23e369eec.js" type="text/javascript" charset="utf-8" async="" src="./(17) WhatsApp_files/vendor1.7152b76edac23e369eec.js"></script><script id="progress_script_/vendor2.3973e7c149ced441846f.js" type="text/javascript" charset="utf-8" async="" src="./(17) WhatsApp_files/vendor2.3973e7c149ced441846f.js"></script><script id="progress_script_/app.1c6cccbeae5d099f4d1e.js" type="text/javascript" charset="utf-8" async="" src="./(17) WhatsApp_files/app.1c6cccbeae5d099f4d1e.js"></script><link rel="stylesheet" href="./(17) WhatsApp_files/css" media="all"><script id="progress_script_/app2.760c30be91c2bd4cf151.js" type="text/javascript" charset="utf-8" async="" src="./(17) WhatsApp_files/app2.760c30be91c2bd4cf151.js"></script><style id="asset-style" type="text/css"></style><script type="text/javascript" charset="utf-8" async="" src="./(17) WhatsApp_files/svg.6507a50e8fa8ef84dc18.js"></script><script type="text/javascript" charset="utf-8" async="" src="./(17) WhatsApp_files/app2.760c30be91c2bd4cf151.js"></script><link rel="stylesheet" href="./(17) WhatsApp_files/css(1)" media="all"><script type="text/javascript" charset="utf-8" async="" src="./(17) WhatsApp_files/en.fa66d856bbdb4dcec395.js"></script></head>


    <body class="web">
    <div id="app"><div class="_1FKgS app-wrapper-web bFqKf"><div tabindex="-1" class="app _3dqpi two"><div class="_3q4NP _1Iexl"><div id="main" class="_1GX8_"><div class="YUoyu" data-asset-chat-background="true"></div><header class="_3AwwN"><div class="_18tv-" role="button"><div class="_1WliW" style="height: 40px; width: 40px;"><img src="{{url('assets/images/loading.gif')}}" class="Qgzj8 gqwaM"><div class="_3ZW2E"><span data-icon="default-user" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212 212" width="212" height="212"><path fill="#DFE5E7" d="M106.251.5C164.653.5 212 47.846 212 106.25S164.653 212 106.25 212C47.846 212 .5 164.654.5 106.25S47.846.5 106.251.5z"></path><g fill="#FFF"><path d="M173.561 171.615a62.767 62.767 0 0 0-2.065-2.955 67.7 67.7 0 0 0-2.608-3.299 70.112 70.112 0 0 0-3.184-3.527 71.097 71.097 0 0 0-5.924-5.47 72.458 72.458 0 0 0-10.204-7.026 75.2 75.2 0 0 0-5.98-3.055c-.062-.028-.118-.059-.18-.087-9.792-4.44-22.106-7.529-37.416-7.529s-27.624 3.089-37.416 7.529c-.338.153-.653.318-.985.474a75.37 75.37 0 0 0-6.229 3.298 72.589 72.589 0 0 0-9.15 6.395 71.243 71.243 0 0 0-5.924 5.47 70.064 70.064 0 0 0-3.184 3.527 67.142 67.142 0 0 0-2.609 3.299 63.292 63.292 0 0 0-2.065 2.955 56.33 56.33 0 0 0-1.447 2.324c-.033.056-.073.119-.104.174a47.92 47.92 0 0 0-1.07 1.926c-.559 1.068-.818 1.678-.818 1.678v.398c18.285 17.927 43.322 28.985 70.945 28.985 27.678 0 52.761-11.103 71.055-29.095v-.289s-.619-1.45-1.992-3.778a58.346 58.346 0 0 0-1.446-2.322zM106.002 125.5c2.645 0 5.212-.253 7.68-.737a38.272 38.272 0 0 0 3.624-.896 37.124 37.124 0 0 0 5.12-1.958 36.307 36.307 0 0 0 6.15-3.67 35.923 35.923 0 0 0 9.489-10.48 36.558 36.558 0 0 0 2.422-4.84 37.051 37.051 0 0 0 1.716-5.25c.299-1.208.542-2.443.725-3.701.275-1.887.417-3.827.417-5.811s-.142-3.925-.417-5.811a38.734 38.734 0 0 0-1.215-5.494 36.68 36.68 0 0 0-3.648-8.298 35.923 35.923 0 0 0-9.489-10.48 36.347 36.347 0 0 0-6.15-3.67 37.124 37.124 0 0 0-5.12-1.958 37.67 37.67 0 0 0-3.624-.896 39.875 39.875 0 0 0-7.68-.737c-21.162 0-37.345 16.183-37.345 37.345 0 21.159 16.183 37.342 37.345 37.342z"></path></g></svg></span></div></div></div><div class="_1WBXd" role="button"><div class="_2EbF-"><div class="_2zCDG"><span dir="auto" title="Ukamaka Sis" class="_1wjpf">Ukamaka Sis</span></div></div></div><div class="_1i0-u"><div class="_3Kxus"><div class="rAUz7"><div role="button" title="Search…"><span data-icon="search-alt" class=""><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="#263238" fill-opacity=".5" d="M15.9 14.3H15l-.3-.3c1-1.1 1.6-2.7 1.6-4.3 0-3.7-3-6.7-6.7-6.7S3 6 3 9.7s3 6.7 6.7 6.7c1.6 0 3.2-.6 4.3-1.6l.3.3v.8l5.1 5.1 1.5-1.5-5-5.2zm-6.2 0c-2.6 0-4.6-2.1-4.6-4.6s2.1-4.6 4.6-4.6 4.6 2.1 4.6 4.6-2 4.6-4.6 4.6z"></path></svg></span></div><span></span></div><div class="rAUz7"><div role="button" title="Attach"><span data-icon="clip" class=""><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="#263238" fill-opacity=".5" d="M1.816 15.556v.002c0 1.502.584 2.912 1.646 3.972s2.472 1.647 3.974 1.647a5.58 5.58 0 0 0 3.972-1.645l9.547-9.548c.769-.768 1.147-1.767 1.058-2.817-.079-.968-.548-1.927-1.319-2.698-1.594-1.592-4.068-1.711-5.517-.262l-7.916 7.915c-.881.881-.792 2.25.214 3.261.959.958 2.423 1.053 3.263.215l5.511-5.512c.28-.28.267-.722.053-.936l-.244-.244c-.191-.191-.567-.349-.957.04l-5.506 5.506c-.18.18-.635.127-.976-.214-.098-.097-.576-.613-.213-.973l7.915-7.917c.818-.817 2.267-.699 3.23.262.5.501.802 1.1.849 1.685.051.573-.156 1.111-.589 1.543l-9.547 9.549a3.97 3.97 0 0 1-2.829 1.171 3.975 3.975 0 0 1-2.83-1.173 3.973 3.973 0 0 1-1.172-2.828c0-1.071.415-2.076 1.172-2.83l7.209-7.211c.157-.157.264-.579.028-.814L11.5 4.36a.572.572 0 0 0-.834.018l-7.205 7.207a5.577 5.577 0 0 0-1.645 3.971z"></path></svg></span></div><span></span></div><div class="rAUz7"><div role="button" title="Menu"><span data-icon="menu" class=""><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="#263238" fill-opacity=".6" d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z"></path></svg></span></div><span></span></div></div></div></header><div class="_3zJZ2" style=""><div class="copyable-area"><span></span><span></span><div class="_2nmDZ" tabindex="0"><div class="wml2-"></div><div class="_9tCEa"><div class="vW7d1 _3rjxZ"><div class="_3_7SH Zq3Mc"><span dir="auto" class="">THURSDAY</span></div></div><div class="vW7d1"><span></span><div class="_3_7SH _3DFk6 message-out tail"><span class="tail-container"></span><span class="tail-container highlight"></span><div class="Tkt2p"><div class="copyable-text" data-pre-plain-text="[07:35, 8/23/2018] Cyriacus Ifeanyi: "><div class="_3CVlE"><div class="_21gzc"><span class="_2v3X3"></span><div class="_1iJeo" role="button"><span class="bg-color-2 EebcE"></span><div class="_3sEgI"><div class="_1lKj0"><div class="_111ze color-2" role="button"><span dir="auto" class="_2a1Yw">Ukamaka Sis · Status</span></div><div class="Y9G3K" role="button"><span dir="auto" class="quoted-mention">Nsukka Cold<img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="🤕" draggable="false" class="b71 emoji wa" style="background-position: -80px 0px;"></span></div></div></div></div></div></div><div class="_3zb-j ZhF0n"><span dir="ltr" class="selectable-text invisible-space copyable-text">Owerri cold eh</span></div></div><div class="_2f-RV"><div class="_1DZAH" role="button"><span class="_1ORuP"></span><span class="_3EFt_">07:35</span><div class="_32uRw"><span data-icon="msg-dblcheck-ack" class=""><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="16" height="15"><path fill="#4FC3F7" d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.879a.32.32 0 0 1-.484.033l-.358-.325a.319.319 0 0 0-.484.032l-.378.483a.418.418 0 0 0 .036.541l1.32 1.266c.143.14.361.125.484-.033l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.879a.32.32 0 0 1-.484.033L1.891 7.769a.366.366 0 0 0-.515.006l-.423.433a.364.364 0 0 0 .006.514l3.258 3.185c.143.14.361.125.484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"></path></svg></span></div></div></div></div><span></span></div></div><div class="vW7d1 _1nHRW"><span></span><div class="_3_7SH _3DFk6 message-in tail"><span class="tail-container"></span><span class="tail-container highlight"></span><div class="Tkt2p"><div class="copyable-text" data-pre-plain-text="[12:23, 8/23/2018] Ukamaka Sis: "><div class="_3zb-j ZhF0n"><span dir="ltr" class="selectable-text invisible-space copyable-text">Lol</span></div></div><div class="_2f-RV"><div class="_1DZAH"><span class="_1ORuP"></span><span class="_3EFt_">12:23</span></div></div></div><span></span></div></div><div class="vW7d1"><span></span><div class="_3_7SH _3DFk6 message-in"><div class="Tkt2p"><div class="copyable-text" data-pre-plain-text="[12:24, 8/23/2018] Ukamaka Sis: "><div class="_3zb-j ZhF0n"><span dir="ltr" class="selectable-text invisible-space copyable-text">I think Nsukka cold is more</span></div></div><div class="_2f-RV"><div class="_1DZAH"><span class="_1ORuP"></span><span class="_3EFt_">12:24</span></div></div></div><span></span></div></div><div class="vW7d1"><span></span><div class="_3_7SH _3DFk6 message-out tail"><span class="tail-container"></span><span class="tail-container highlight"></span><div class="Tkt2p"><div class="copyable-text" data-pre-plain-text="[17:23, 8/23/2018] Cyriacus Ifeanyi: "><div class="_3zb-j ZhF0n"><span dir="ltr" class="selectable-text invisible-space copyable-text">Snow fell this morning<img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="☃" draggable="false" class="b89 emoji wa selectable-text invisible-space copyable-text" data-plain-text="☃" style="background-position: -40px -60px;"></span></div></div><div class="_2f-RV"><div class="_1DZAH" role="button"><span class="_1ORuP"></span><span class="_3EFt_">17:23</span><div class="_32uRw"><span data-icon="msg-dblcheck-ack" class=""><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="16" height="15"><path fill="#4FC3F7" d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.879a.32.32 0 0 1-.484.033l-.358-.325a.319.319 0 0 0-.484.032l-.378.483a.418.418 0 0 0 .036.541l1.32 1.266c.143.14.361.125.484-.033l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.879a.32.32 0 0 1-.484.033L1.891 7.769a.366.366 0 0 0-.515.006l-.423.433a.364.364 0 0 0 .006.514l3.258 3.185c.143.14.361.125.484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"></path></svg></span></div></div></div></div><span></span></div></div><div class="vW7d1 _1nHRW"><span></span><div class="_3_7SH _3DFk6 message-in tail"><span class="tail-container"></span><span class="tail-container highlight"></span><div class="Tkt2p"><div class="copyable-text" data-pre-plain-text="[20:39, 8/23/2018] Ukamaka Sis: "><div class="_3CVlE"><div class="_21gzc"><span class="_2v3X3"></span><div class="_1iJeo" role="button"><span class="bg-color-1 EebcE"></span><div class="_3sEgI"><div class="_1lKj0"><div class="_111ze color-1" role="button"><span dir="auto" class="">You</span></div><div class="Y9G3K" role="button"><span dir="auto" class="quoted-mention">Snow fell this morning<img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="☃" draggable="false" class="b89 emoji wa" style="background-position: -40px -60px;"></span></div></div></div></div></div></div><div class="_3zb-j ZhF0n"><span dir="ltr" class="selectable-text invisible-space copyable-text">In Nsk???</span></div></div><div class="_2f-RV"><div class="_1DZAH"><span class="_1ORuP"></span><span class="_3EFt_">20:39</span></div></div></div><span></span></div></div><div class="vW7d1"><span></span><div class="_3_7SH _3DFk6 message-in"><div class="Tkt2p"><div class="copyable-text" data-pre-plain-text="[20:40, 8/23/2018] Ukamaka Sis: "><div class="_3CVlE"><div class="_21gzc"><span class="_2v3X3"></span><div class="_1iJeo" role="button"><span class="bg-color-1 EebcE"></span><div class="_3sEgI"><div class="_1lKj0"><div class="_111ze color-1" role="button"><span dir="auto" class="">You</span></div><div class="Y9G3K" role="button"><span dir="auto" class="quoted-mention">Snow fell this morning<img crossorigin="anonymous" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="☃" draggable="false" class="b89 emoji wa" style="background-position: -40px -60px;"></span></div></div></div></div></div></div><div class="_3zb-j ZhF0n"><span dir="ltr" class="selectable-text invisible-space copyable-text">I mean in Owerri??</span></div></div><div class="_2f-RV"><div class="_1DZAH"><span class="_1ORuP"></span><span class="_3EFt_">20:40</span></div></div></div><span></span></div></div><div class="vW7d1 _3rjxZ"><div class="_3_7SH Zq3Mc"><span dir="auto" class="">TODAY</span></div></div><div class="vW7d1 _1nHRW"><span></span><div class="_3_7SH _3DFk6 message-out tail"><span class="tail-container"></span><span class="tail-container highlight"></span><div class="Tkt2p"><div class="copyable-text" data-pre-plain-text="[01:56, 8/26/2018] Cyriacus Ifeanyi: "><div class="_3zb-j ZhF0n"><span dir="ltr" class="selectable-text invisible-space copyable-text">how far</span></div></div><div class="_2f-RV"><div class="_1DZAH" role="button"><span class="_3EFt_">01:56</span><div class="_32uRw"><span data-icon="msg-dblcheck-ack" class=""><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="16" height="15"><path fill="#4FC3F7" d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.879a.32.32 0 0 1-.484.033l-.358-.325a.319.319 0 0 0-.484.032l-.378.483a.418.418 0 0 0 .036.541l1.32 1.266c.143.14.361.125.484-.033l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.879a.32.32 0 0 1-.484.033L1.891 7.769a.366.366 0 0 0-.515.006l-.423.433a.364.364 0 0 0 .006.514l3.258 3.185c.143.14.361.125.484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"></path></svg></span></div></div></div></div><span></span></div></div><div class="vW7d1 _1nHRW"><span></span><div class="_3_7SH message-out"><div class="Tkt2p"><div class="_3zb-j ZhF0n _1upWv"><div class="_1fkCN"><span data-icon="recalled-out" class=""><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 19" width="18" height="19"><path fill="#849882" d="M13.628 12.463a5.17 5.17 0 0 0-7.207-7.209l7.207 7.209zm-1.23 1.229L5.19 6.484a5.17 5.17 0 0 0 7.208 7.208zM9.409 2.564a6.91 6.91 0 1 1 0 13.819 6.91 6.91 0 0 1 0-13.819z"></path></svg></span></div>You deleted this message</div><div class="_2f-RV"><div class="_1DZAH"><span class="_3EFt_">01:59</span></div></div></div><span></span></div></div><div class="vW7d1"><span></span><div class="_3_7SH _3DFk6 message-out"><div class="Tkt2p"><div class="copyable-text" data-pre-plain-text="[02:01, 8/26/2018] Cyriacus Ifeanyi: "><div class="_3zb-j ZhF0n"><span dir="auto" class="selectable-text invisible-space copyable-text">.</span></div></div><div class="_2f-RV"><div class="_1DZAH" role="button"><span class="_3EFt_">02:01</span><div class="_32uRw"><span data-icon="msg-dblcheck-ack" class=""><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15" width="16" height="15"><path fill="#4FC3F7" d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.879a.32.32 0 0 1-.484.033l-.358-.325a.319.319 0 0 0-.484.032l-.378.483a.418.418 0 0 0 .036.541l1.32 1.266c.143.14.361.125.484-.033l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.879a.32.32 0 0 1-.484.033L1.891 7.769a.366.366 0 0 0-.515.006l-.423.433a.364.364 0 0 0 .006.514l3.258 3.185c.143.14.361.125.484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z"></path></svg></span></div></div></div></div><span></span></div></div><div class="vW7d1"><span></span><div class="_3_7SH _3DFk6 message-in tail"><span class="tail-container"></span><span class="tail-container highlight"></span><div class="Tkt2p"><div class="copyable-text" data-pre-plain-text="[02:02, 8/26/2018] Ukamaka Sis: "><div class="_3zb-j ZhF0n"><span dir="ltr" class="selectable-text invisible-space copyable-text">Im fine</span></div></div><div class="_2f-RV"><div class="_1DZAH"><span class="_1ORuP"></span><span class="_3EFt_">02:02</span></div></div></div><span></span></div></div></div></div></div></div><footer tabindex="-1" class="_2tW_W"><div class="_3pkkz"><div tabindex="-1" class="_1Plpp"><div tabindex="-1" class="_3F6QL _2WovP"><div class="_39LWd" style="visibility: visible">Type a message</div><div class="_2S1VP copyable-text selectable-text" contenteditable="true" data-tab="1" dir="ltr" spellcheck="true"></div></div></div><div class="weEq5"><div class="_1UWg0"><span><button class="_2SbJ1"><span data-icon="ptt" class=""><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="#263238" fill-opacity=".45" d="M11.999 14.942c2.001 0 3.531-1.53 3.531-3.531V4.35c0-2.001-1.53-3.531-3.531-3.531S8.469 2.35 8.469 4.35v7.061c0 2.001 1.53 3.531 3.53 3.531zm6.238-3.53c0 3.531-2.942 6.002-6.237 6.002s-6.237-2.471-6.237-6.002H3.761c0 4.001 3.178 7.297 7.061 7.885v3.884h2.354v-3.884c3.884-.588 7.061-3.884 7.061-7.885h-2z"></path></svg></span></button></span></div></div></div></footer></div></div></div></div></div>






@endsection
@section('page_script')
    {{--<script src="./(17) WhatsApp_files/progress.73d3ea869f2050b7c85e71112ff48ab9.js"></script>--}}

@endsection