@extends('layout.main')
@section('styles')
<style>

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