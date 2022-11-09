@extends('layout.main')
@section('styles')
<style>
    .progress {
        width: 150px;
        height: 150px !important;
        line-height: 150px;
        background: none;
        margin: auto;
        box-shadow: none;
        position: relative;
    }
    .progress:after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 12px solid #fff;
        position: absolute;
        top: 0;
        left: 0;
    }
    .progress>span {
        width: 50%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 1;
    }
    .progress .progress-left {
        left: 0;
    }
    .progress .progress-bar {
        width: 100%;
        height: 100%;
        background: none;
        border-width: 12px;
        border-style: solid;
        position: absolute;
        top: 0;
    }
    .progress .progress-left .progress-bar {
        left: 100%;
        border-top-right-radius: 80px;
        border-bottom-right-radius: 80px;
        border-left: 0;
        -webkit-transform-origin: center left;
        transform-origin: center left;
    }
    .progress .progress-right {
        right: 0;
    }
    .progress .progress-right .progress-bar {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
        animation: loading-1 1.8s linear forwards;
    }
    .progress .progress-value {
        width: 90%;
        height: 90%;
        border-radius: 50%;
        background: #000;
        font-size: 24px;
        color: #fff;
        line-height: 135px;
        text-align: center;
        position: absolute;
        top: 5%;
        left: 5%;
    }
    .progress.blue .progress-bar {
        border-color: #049dff;
    }
    .progress.blue .progress-left .progress-bar {
        animation: loading-2 1.5s linear forwards 1.8s;
    }
    .progress.yellow .progress-bar {
        border-color: #fdba04;
    }
    .progress.yellow .progress-right .progress-bar {
        animation: loading-3 1.5s linear forwards;
    }
    /* .progress.yellow .progress-left .progress-bar {
        animation: none;
    } */
    .progress.orange .progress-bar {
        border-color: #ffdd00;
    }
    @keyframes loading-1 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }
    }
    @keyframes loading-2 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(61.2deg);
            transform: rotate(61.2deg);
        }
    }
    @keyframes loading-3 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(147.6deg);
            transform: rotate(147.6deg);
        }
    }
    @keyframes loading-4 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(10.8);
            transform: rotate(10.8);
        }
    }

    /* Feature CSS */
    .feature-icon {
        width: 4rem;
        height: 4rem;
        border-radius: .75rem;
    }

    .icon-link > .bi {
        margin-top: .125rem;
        margin-left: .125rem;
        fill: currentcolor;
        transition: transform .25s ease-in-out;
    }
    .icon-link:hover > .bi {
        transform: translate(.25rem);
    }

    .icon-square {
        width: 3rem;
        height: 3rem;
    border-radius: .75rem;
    }

    .text-shadow-1 { text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25); }
    .text-shadow-2 { text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25); }
    .text-shadow-3 { text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25); }

    .card-cover {
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }

    a {
        text-decoration: none;
    }

    .feature-icon-small {
        width: 3rem;
        height: 3rem;
    }

    .post-image {
        position: relative;
        margin-bottom: 10px;
    }

    .post-content-block h3 a {
        color: #444;
        transition: 0.2s;
    }

    .post-content-block h3 {
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 20px;
        line-height: 26px;
        color: #2d3131 !important;
    }

    .meta-data-post {
        font-size: 12px;
        margin: 10px 0;
        color: #8F8F8F;
    }

    .meta-data-post img {
        width: 20px!important;
        height: 20px!important;
        border-radius: 20px!important;
        margin-right: 2px;
    }

    .meta-data-post a {
        margin-right: 3px!important;
    }

    .company-header-content {
        padding: 20px 0;
        border-top: 1px solid #ddd;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 11px;
    }

    .executive-articles {
        /* border: 1px solid #eee; */
        padding: 20px;
        color: #8F8F8F;
        background: #fff;
        height: 100%;
    }

    .executive-articles .cs-logo img {
        height: 20px;
        width: auto;
    }

    .executive-articles h2 {
        font-size: 20px;
        border-top: 1px solid #eee;
        padding: 20px 0 0;
        margin-top: 16px;
    }

    .executive-articles h2 a {
        color: #444;
        font-size: 20px;
        transition: 0.2s;
    }

    .executive-articles .excerpt {
        display: block;
    }

    .executive-articles .author {
        text-transform: uppercase;
        font-size: 12px;
    }

    .img-wrapper {
    position: relative;
    } 

    .img-wrapper::before {
        background-image: linear-gradient(to left, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 1) 100%);
        background-image: -moz-linear-gradient(to left, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 1) 100%);
        background-image: -ms-linear-gradient(to left, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 1) 100%);
        background-image: -o-linear-gradient(to left, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 1) 100%);
        background-image: -webkit-linear-gradient(to left, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 1) 100%);
        content:"\00a0";
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }

    .lead-2 {
        font-size: 1.05rem;
    }

    .video-container { 
        height: 480px;
        width: 853.3px;
    }
    
    .bg-tertiary {
        background-color: rgba(84, 88, 92, 1) !important;
    }

    @media (max-width: 991px) {
        .video-container { 
            height: 360px;
            width: 640px;
        }
    }

    @media (max-width: 767px) {
        .video-container { 
            height: 240px;
            width: 426.72px;
        }
    }

    @media (max-width: 575px) {
        .video-container { 
            height: 144px;
            width: 256px;
        }
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('svg')
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
        </path>
    </symbol>
    <symbol id="home" viewBox="0 0 16 16">
        <path
            d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
    </symbol>
    <symbol id="speedometer2" viewBox="0 0 16 16">
        <path
            d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
        <path fill-rule="evenodd"
            d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
    </symbol>
    <symbol id="table" viewBox="0 0 16 16">
        <path
            d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
        <path fill-rule="evenodd"
            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
        <path
            d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
    </symbol>
    <symbol id="collection" viewBox="0 0 16 16">
        <path
            d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z" />
    </symbol>
    <symbol id="calendar3" viewBox="0 0 16 16">
        <path
            d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
        <path
            d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
    </symbol>
    <symbol id="chat-quote-fill" viewBox="0 0 16 16">
        <path
            d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z" />
    </symbol>
    <symbol id="cpu-fill" viewBox="0 0 16 16">
        <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
        <path
            d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z" />
    </symbol>
    <symbol id="gear-fill" viewBox="0 0 16 16">
        <path
            d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
    </symbol>
    <symbol id="speedometer" viewBox="0 0 16 16">
        <path
            d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z" />
        <path fill-rule="evenodd"
            d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z" />
    </symbol>
    <symbol id="toggles2" viewBox="0 0 16 16">
        <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z" />
        <path
            d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z" />
        <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
    </symbol>
    <symbol id="tools" viewBox="0 0 16 16">
        <path
            d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
    </symbol>
    <symbol id="chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
    </symbol>
    <symbol id="geo-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
    </symbol>
</svg>
@endsection
@section('content')
<div class="position-relative overflow-hidden p-3 p-md-5 text-start bg-light" style="background:linear-gradient(0deg, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('{{asset('images/assets/Main 1 - first slider - woman leaning back .jpg')}}'); background-size: cover;">
    <div class="col-md-12 px-3 my-5">
        <h1 class="display-4 fw-normal">Transforming Business Owners Into Top 1% Industry Experts</h1>
        <h2 class="display-6">We tell your story. The future of content marketing.</h2>
        <p class="lead fw-normal">
            ELV Agency engages your audience and enhances your brand through monthly expert thought leadership articles in the world's most powerful publications.
        </p>
        <a class="btn btn-outline-dark" href="javascript:void(0);">Apply Today</a>
    </div>
</div>
<div class="position-relative overflow-hidden p-1 text-start bg-tertiary text-bg-dark text-center">
    <h1 class="display-3">Executive Leadership Voice Agency</h1>
</div>
<div class="text-center p-3 p-md-5">
    <iframe
        src="https://www.youtube.com/embed/Prb_l-NJ-A4?modestbranding&controls=0"
        title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
        class="video-container">
    </iframe>
</div>
<hr>
<div class="position-relative overflow-hidden p-3 p-md-5 bg-dark row text-bg-dark">
    <div class="col-md-2"></div>
    <div class="col-md-10 px-3 text-end">
        <h2 class="display-6">Grow your audience. Enhance your brand. Skyrocket your sales.</h2>
        <p class="lead fw-normal">
            Content Is King. We're leading a seismic shift in content marketing, creating a studio for founders and leaders of fast growing companies to publish content in the most-read, world-renowned digital publications.
        </p>
        <p class="lead-2 fw-normal">
            92% of decision makers say consuming thought leadership improves their respect for an organization.
        </p>
        <a class="btn btn-outline-light" href="javascript:void(0);">See Our Work</a>
    </div>
</div>
<div class="position-relative overflow-hidden px-3 row">
    <div class="col-md-6 px-5 my-auto text-start">
        <h2 class="display-6">Competitive Edge</h2>
        <p class="lead fw-normal">
            ELV Agency selects the best-in-class companies within a geo region for each category - once contracted, you become the exclusive featured company in your area.
        </p>
        <a class="btn btn-outline-secondary" href="javascript:void(0);">Apply Today</a>
    </div>
    <div class="col-md-6 img-wrapper d-none d-md-block d-lg-block">
        <img src="{{asset('images/assets/Main 1 - Competitive Edge - ace out of sleeve.jpg')}}" alt="" class="img-fluid">
    </div>
</div>
<hr>
<div class="position-relative overflow-hidden p-3 p-md-5 bg-light row">
    <div class="col-md-12 px-3 text-center">
        <h2 class="display-6">Content is the most effective way to turn readers into clients</h2>
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-12 text-center">
                    <div class="progress blue">
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">67%</div>
                    </div>
                <p>
                    Companies that publish content capture 67% more leads per month.
                </p>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                    <div class="progress yellow">
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">41%</div>
                    </div>
                <p>
                    Most brands are investing 41% of their marketing budget on content.
                </p>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                    <div class="progress orange">
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">53%</div>
                    </div>
                <p>
                    53% of marketers say blogging is their top content marketing priority.
                </p>
            </div>
            <div class="col-3 text-center">
                    <h1 class="display-1">13x</h1>
                <p>
                    Businesses who prioritize blogging yield 13x more positive ROI.
                </p>
            </div>
        </div>
        <a class="btn btn-outline-secondary btn-lg" href="javascript:void(0);">Apply Today</a>
    </div>
</div>
<div class="position-relative overflow-hidden p-3 p-md-5 bg-dark text-bg-dark row">
    <div class="col-md-12 px-3 my-5 text-start">
        <h2 class="display-6">Partnered with powerful publications.</h2>
        <p class="lead fw-normal">
            We give you—and your branded content—access to invitation-only thought leadership channels at the world's largest publications.
        </p>
    </div>
</div>
<div class="position-relative overflow-hidden p-3 p-md-5 bg-light row">
    <div class="col-12">
        <div class="company-header-content">ELV Agency Posts by Bruce Caven</div>
        <div id="block-article" class="owl-carousel owl-theme">
            <div class="item">
                <div>
                    <div class="post-image mb-3">
                        <a href="javascript:void(0);">
                            <img width="370" height="278" src="https://media.istockphoto.com/photos/glad-to-work-with-you-picture-id951514270?b=1&k=20&m=951514270&s=612x612&w=0&h=yp3UNtxVwiJZV3EHQqqKaS3md7HtBkVwHvH5uhcfcPE=" alt="Image 1">
                        </a>
                    </div>
                    <div class="post-content-block">
                        <h3 class="mb-1 fw-bold">
                            <a href="javascript:void(0);">This is an example article title for this section</a>
                        </h3>
                        <div class="meta-data-post d-flex align-items-center flex-wrap">
                            <a href="javascript:void(0);">
                                <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-512.png" alt="" height="96" width="96" class="avatar avatar-96 photo">
                            </a>
                            <a href="javascript:void(0);">Bruce Caven</a> · 1 Jan 2022
                        </div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo repellat distinctio molestias quos nemo vitae culpa aspernatur omnis molestiae. ...
                    </div>
                </div>
            </div>
            <div class="item">
                <div>
                    <div class="post-image mb-3">
                        <a href="javascript:void(0);">
                            <img width="370" height="278" src="https://media.istockphoto.com/photos/millennial-black-businesswoman-addressing-colleagues-at-a-corporate-picture-id1146472948?k=20&m=1146472948&s=612x612&w=0&h=uJMkt7Jtt7sv73o77K3WcqleE6Jlsl5fhKG_6ug1jPA=" alt="Image 1">
                        </a>
                    </div>
                    <div class="post-content-block">
                        <h3 class="mb-1 fw-bold">
                            <a href="javascript:void(0);">This is an example article title for this section</a>
                        </h3>
                        <div class="meta-data-post d-flex align-items-center flex-wrap">
                            <a href="javascript:void(0);">
                                <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-512.png" alt="" height="96" width="96" class="avatar avatar-96 photo">
                            </a>
                            <a href="javascript:void(0);">Bruce Caven</a> · 1 Jan 2022
                        </div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo repellat distinctio molestias quos nemo vitae culpa aspernatur omnis molestiae. ...
                    </div>
                </div>
            </div>
            <div class="item">
                <div>
                    <div class="post-image mb-3">
                        <a href="javascript:void(0);">
                            <img width="370" height="278" src="https://st.depositphotos.com/1594308/2118/i/950/depositphotos_21186965-stock-photo-discussion.jpg" alt="Image 1">
                        </a>
                    </div>
                    <div class="post-content-block">
                        <h3 class="mb-1 fw-bold">
                            <a href="javascript:void(0);">This is an example article title for this section</a>
                        </h3>
                        <div class="meta-data-post d-flex align-items-center flex-wrap">
                            <a href="javascript:void(0);">
                                <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-512.png" alt="" height="96" width="96" class="avatar avatar-96 photo">
                            </a>
                            <a href="javascript:void(0);">Bruce Caven</a> · 1 Jan 2022
                        </div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo repellat distinctio molestias quos nemo vitae culpa aspernatur omnis molestiae. ...
                    </div>
                </div>
            </div>
            <div class="item">
                <div>
                    <div class="post-image mb-3">
                        <a href="javascript:void(0);">
                            <img width="370" height="278" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY0_O66gvtoNLLzycx4kJ2l46JBuxN9JbDe1wMQL0jLbDr8zddZt86KYNBZ0_OSm9hL1U&usqp=CAU" alt="Image 1">
                        </a>
                    </div>
                    <div class="post-content-block">
                        <h3 class="mb-1 fw-bold">
                            <a href="javascript:void(0);">This is an example article title for this section</a>
                        </h3>
                        <div class="meta-data-post d-flex align-items-center flex-wrap">
                            <a href="javascript:void(0);">
                                <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-512.png" alt="" height="96" width="96" class="avatar avatar-96 photo">
                            </a>
                            <a href="javascript:void(0);">Bruce Caven</a> · 1 Jan 2022
                        </div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo repellat distinctio molestias quos nemo vitae culpa aspernatur omnis molestiae. ...
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="position-relative overflow-hidden p-3 p-md-5 row">
    <div class="col-12">
        <div class="company-header-content">Published Posts by Bruce Caven</div>
        <div id="block-executive" class="owl-carousel owl-theme">
            <div class="h-100">
                    <div class="executive-articles d-flex align-items-start flex-column">
                        <div class="cs-logo">
                            <a href="javascript:void(0);" target="blank">
                                <img width="150" height="39" src="{{ asset('images/publications/entrepreneur.webp') }}" alt="Entreprenuer">
                            </a>
                        </div>
                        <h2>
                            <a href="javascript:void(0);">This is a sample Executive Article</a>
                        </h2>
                        <div class="excerpt">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet molestias repudiandae nobis impedit facere, delectus unde! Iusto ipsam pariatur quas.</p>
                        </div>
                        <div class="d-flex justify-content-between mt-auto w-100">
                            <a href="javascript:void(0);">Read Article</a>
                            <div class="author">
                                <a href="javascript:void(0);" class="text-muted">Bruce Caven</a>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="h-100">
                    <div class="executive-articles d-flex align-items-start flex-column">
                        <div class="cs-logo">
                            <a href="javascript:void(0);" target="blank">
                                <img width="150" height="39" src="{{ asset('images/publications/benzinga.webp') }}" alt="Entreprenuer">
                            </a>
                        </div>
                        <h2>
                            <a href="javascript:void(0);">This is a sample Executive Article</a>
                        </h2>
                        <div class="excerpt">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate perferendis officiis neque maxime perspiciatis sit vero id placeat, tempora nesciunt ducimus? Neque velit mollitia officia vero perspiciatis, tempore corporis consequuntur?</p>
                        </div>
                        <div class="d-flex justify-content-between mt-auto w-100">
                            <a href="javascript:void(0);">Read Article</a>
                            <div class="author">
                                <a href="javascript:void(0);" class="text-muted">Bruce Caven</a>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="h-100">
                    <div class="executive-articles d-flex align-items-start flex-column">
                        <div class="cs-logo">
                            <a href="javascript:void(0);" target="blank">
                                <img width="150" height="39" src="{{ asset('images/publications/forbes.png') }}" alt="Entreprenuer">
                            </a>
                        </div>
                        <h2>
                            <a href="javascript:void(0);">This is a sample Executive Article</a>
                        </h2>
                        <div class="excerpt">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet molestias repudiandae nobis impedit facere, delectus unde! Iusto ipsam pariatur quas.</p>
                        </div>
                        <div class="d-flex justify-content-between mt-auto w-100">
                            <a href="javascript:void(0);">Read Article</a>
                            <div class="author">
                                <a href="javascript:void(0);" class="text-muted">Bruce Caven</a>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="h-100">
                    <div class="executive-articles d-flex align-items-start flex-column">
                        <div class="cs-logo">
                            <a href="javascript:void(0);" target="blank">
                                <img width="150" height="39" src="{{ asset('images/publications/benzinga.webp') }}" alt="Entreprenuer">
                            </a>
                        </div>
                        <h2>
                            <a href="javascript:void(0);">This is a sample Executive Article</a>
                        </h2>
                        <div class="excerpt">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate perferendis officiis neque maxime perspiciatis sit vero id placeat, tempora nesciunt ducimus? Neque velit mollitia officia vero perspiciatis, tempore corporis consequuntur?</p>
                        </div>
                        <div class="d-flex justify-content-between mt-auto w-100">
                            <a href="javascript:void(0);">Read Article</a>
                            <div class="author">
                                <a href="javascript:void(0);" class="text-muted">Bruce Caven</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 boxes py-3">
            <h2 class="display-5">Branded Content Creation</h2>
            <p class="lead">Our team of writers, journalists and marketing experts will work with you to write branded articles and content that captures your company's voice.</p>
        </div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 boxes p-3">
            <h2 class="display-5">Executive Leadership Branding</h2>
            <p class="lead">Our writers will establish your executive or founder as the thought leader in your industry, enhancing your brand and growing your audience.</p>
        </div>
    </div>
</div>
<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 boxes py-3">
            <h2 class="display-5">High-Profile Publishing</h2>
            <p class="lead">Our partners will publish and feature your articles, ensuring your branded content is featured in the nation's most read digital publications.</p>
        </div>
    </div>
    <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 boxes p-3">
            <h2 class="display-5">Brand Promotion</h2>
            <p class="lead">We'll work with you to market and promote your content, so your company expands its reach, increases its sales, and grows its digital audience.</p>
        </div>
    </div>
</div>
<div class="position-relative overflow-hidden pb-4 row">
    <div class="col-md-12 text-center">
        <a class="btn btn-outline-secondary btn-lg" href="javascript:void(0);">Apply Today</a>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('#block-article').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })

    $('#block-executive').owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
</script>
<script>
    $(document).ready(function() {
        var elementHeights = $('.boxes').map(function() {
            return $(this).height();
        }).get();
    
        var maxHeight = Math.max.apply(null, elementHeights);
    
        $('.boxes').height(maxHeight);
    });
</script>
@endsection