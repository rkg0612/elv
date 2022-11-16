@extends('layout.main')
@section('styles')
<style>

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
        width: auto !important;
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
    
    .cropped {
        height: 20rem;
        width: 100%;
        overflow: hidden;
    }

    .cropped img {
        width: 100%;
    }

    @media (max-width: 1200px) {
        .cropped {
            height: 12rem !important;
        }
    }

    @media (max-width: 767px) {
        .cropped {
            height: 17rem !important;
        }
    }

    @media (max-width: 575px) {
        .cropped {
            height: 12rem !important;
        }
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
<div class="position-relative overflow-hidden p-3 p-md-5 text-start bg-light">
    <div class="col-md-12 px-3">
        <h1 class="display-4 fw-normal">Internal Blogs and Published Posts</h1>
    </div>
</div>
@include('includes.agency-posts')
@include('includes.article-posts')
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
@endsection