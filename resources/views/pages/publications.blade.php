@extends('layout.main')
@section('content')
<div class="position-relative overflow-hidden p-3 p-md-5 text-start bg-light">
    <div class="col-md-10 px-3">
        <h1 class="display-4 fw-normal">Our Publication Partners.</h1>
        <p class="lead fw-normal">What differentiates ELV Agency is our strong partnerships with leading editorial brands. When you work with us, you gain exclusive publishing access to a number of media companies, and their audiences earn a front-row seat to your content.</p>
        <p class="lead fw-normal text-info d-none d-md-block">
            <img src="{{ asset('images/publications/forbes.png') }}" alt="Forbes" height="25px">  · 
            <img src="{{ asset('images/publications/benzinga.webp') }}" alt="Benzinga" height="20px"> · 
            <img src="{{ asset('images/publications/newsweek.svg') }}" alt="Newsweek" height="27px">
        </p>
        <p class="d-md-none">
            <img src="{{ asset('images/publications/forbes.png') }}" alt="Forbes" height="25px">
        </p>
        <p class="d-md-none">
            <img src="{{ asset('images/publications/benzinga.webp') }}" alt="Benzinga" height="20px">
        </p>
        <p class="d-md-none">
            <img src="{{ asset('images/publications/newsweek.svg') }}" alt="Newsweek" height="27px">
        </p>
    </div>
</div>
<div class="position-relative overflow-hidden p-3 p-md-5 bg-dark text-bg-dark row">
    <div class="col-md-2"></div>
    <div class="col-md-10 px-3 text-end">
        <h2 class="display-4">How it works.</h2>
        <p class="lead fw-normal">
            We don't just write and publish well-written articles with our publication partners. Our team of writers refine your company's style and voice, and we employ SEO and powerful marketing strategies to ensure your articles rank.
        </p>
    </div>
</div>
<div class="position-relative overflow-hidden p-3 p-md-5 bg-light justify-content-center d-none d-md-block">
    <div class="row">
        <div class="col-md-6 text-end my-auto">
            <h2 class="display-6">Engage with professional writers and editors.</h2>
            <p class="lead fw-normal">
                Dedicated strategists, writers and editors assigned to your company will shepherd your articles through the entire publishing process, streamlining the writing, editing, and branding experience so you can save time and money.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{asset('images/assets/writing.avif')}}" alt="" class="img-fluid rounded">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img src="{{asset('images/assets/handshake.jpeg')}}" alt="" class="img-fluid rounded">
        </div>
        <div class="col-md-6 my-auto">
            <h2 class="display-6">Build trust and credibility.</h2>
            <p class="lead fw-normal">
                92% of decision makers say consuming thought leadership improves their respect for an organization. It takes time and know-how to publish expert content, so we do it for you. We give your company or CEO exclusive publishing rights with our partners, so you can build authority and credibility.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 text-end my-auto">
            <h2 class="display-6">Enhance your persona & highlight your membership.</h2>
            <p class="lead fw-normal">
                Our partners have created contributor platforms for high-level professionals to share their expertise. When you work with ELV Agency, you gain immediate membership with those platforms to enhance your persona, build your credibility, and gain an authoritative resource to share with your partners, clients and customers. Each membership comes with an executive member profile with links to articles you've published, as well as your company information and website.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{asset('images/assets/persona.jpeg')}}" alt="" class="img-fluid rounded">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img src="{{asset('images/assets/promote.jpeg')}}" alt="" class="img-fluid rounded">
        </div>
        <div class="col-md-6 my-auto">
            <h2 class="display-6">Promote your brand.</h2>
            <p class="lead fw-normal">
                Once your articles are published, we'll work with you to forge intentional marketing efforts to share and promote your content—from SEO, to social media marketing and engagement strategies. In addition, we sponsor real-time targeted audiences to increase your exposure and drive user-to-customer conversion.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 text-end my-auto">
            <h2 class="display-6">Increase your sales.</h2>
            <p class="lead fw-normal">
                Conversion rates are nearly 6x higher for content marketing adopters than non-adopters. An agile content platform that unifies content and supports consistency, creativity, and speed is the key to a modern digital content strategy. We give you access to the most authoritative editorial brands so you can skyrocket conversion.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{asset('images/assets/sales.png')}}" alt="" class="img-fluid rounded">
        </div>
    </div>
</div>
<div class="position-relative overflow-hidden px-2 bg-light justify-content-center d-block d-md-none">
    <div class="row">
        <div class="col-md-12 p-3 text-start my-auto" style="background:linear-gradient(0deg, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('{{asset('images/assets/writing.avif')}}'); background-size: cover;">
            <h2 class="display-6">Engage with professional writers and editors.</h2>
            <p class="lead fw-normal">
                Dedicated strategists, writers and editors assigned to your company will shepherd your articles through the entire publishing process, streamlining the writing, editing, and branding experience so you can save time and money.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-end p-3 my-auto text-bg-dark" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{asset('images/assets/handshake.jpeg')}}'); background-size: cover;">
            <h2 class="display-6">Build trust and credibility.</h2>
            <p class="lead fw-normal">
                92% of decision makers say consuming thought leadership improves their respect for an organization. It takes time and know-how to publish expert content, so we do it for you. We give your company or CEO exclusive publishing rights with our partners, so you can build authority and credibility.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-start p-3 my-auto" style="background:linear-gradient(0deg, rgba(255, 255, 255, 0.75), rgba(255, 255, 255, 0.75)), url('{{asset('images/assets/persona.jpeg')}}'); background-size: cover;">
            <h2 class="display-6">Enhance your persona & highlight your membership.</h2>
            <p class="lead fw-normal">
                Our partners have created contributor platforms for high-level professionals to share their expertise. When you work with ELV Agency, you gain immediate membership with those platforms to enhance your persona, build your credibility, and gain an authoritative resource to share with your partners, clients and customers. Each membership comes with an executive member profile with links to articles you've published, as well as your company information and website.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-end text-bg-dark p-3 my-auto" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('{{asset('images/assets/promote.jpeg')}}'); background-size: cover;">
            <h2 class="display-6">Promote your brand.</h2>
            <p class="lead fw-normal">
                Once your articles are published, we'll work with you to forge intentional marketing efforts to share and promote your content—from SEO, to social media marketing and engagement strategies. In addition, we sponsor real-time targeted audiences to increase your exposure and drive user-to-customer conversion.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-start my-auto" style="background:linear-gradient(0deg, rgba(255, 255, 255, 0.75), rgba(255, 255, 255, 0.75)), url('{{asset('images/assets/sales.png')}}'); background-size: cover;">
            <h2 class="display-6">Increase your sales.</h2>
            <p class="lead fw-normal">
                Conversion rates are nearly 6x higher for content marketing adopters than non-adopters. An agile content platform that unifies content and supports consistency, creativity, and speed is the key to a modern digital content strategy. We give you access to the most authoritative editorial brands so you can skyrocket conversion.
            </p>
        </div>
    </div>
</div>
<div class="position-relative overflow-hidden p-3 p-md-5 bg-dark text-bg-dark row">
    <div class="col-md-10 px-3 text-start">
        <h2 class="display-4">Exclusive contributing partnerships.</h2>
        <p class="lead fw-normal">
            Many of our partners maintain exclusive, invitation-only platforms for business leaders and industry experts. When you work with ELV Agency, you and your brand are given immediate membership.
        </p>
    </div>
</div>
<div class="position-relative overflow-hidden p-3 p-md-5 bg-light row justify-content-center">
    <div class="col-md-12 px-3 text-center">
        <h2 class="display-6">World-class editorial teams.</h2>
        <p class="lead fw-normal">
            In addition to our team of writers, each of our editorial partners assigns world-class editors to work on your content, ensuring that the articles featuring your business on their sites are crafted to capture your brand.
        </p>
    </div>
    <div class="col-md-12 px-3 text-center">
        <h2 class="display-6">Unparallelled audience engagement.</h2>
        <p class="lead fw-normal">
            Content marketing is the most powerful way to enhance your brand and grow your audience. We use the global platform and strong domain authority of our partners to expand your reach and skyrocket your sales.
        </p>
    </div>
    <div class="col-md-12 p-lg-2 text-center">
        <a class="btn btn-outline-secondary btn-lg" href="javascript:void(0);">Apply Today</a>
    </div>
</div>
@endsection