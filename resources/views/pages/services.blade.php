@extends('layout.main')
@section('styles')
<style>
    .img-overlay > img {
        filter: opacity(25%) grayscale(1);
    }
    .text-overlay {
        position: absolute;
        top: 25%;
        text-align: center;
        margin-top: auto;
    }

    @media (max-width: 991px) {
        .text-overlay {
            top: 0 !important;
            position: relative;
        }
    }
</style>
@endsection
@section('content')
<div class="position-relative overflow-hidden p-3 p-md-5 text-start bg-light" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url('{{asset('images/assets/3 Services - header - light bulb.jpg')}}'); background-size: cover;">
    <div class="col-md-12 px-3 my-5">
        <h1 class="display-4 fw-normal">Transforming Clients Into Top 1% Industry Experts Through Thought Leadership Content Marketing.</h1>
        <h2 class="display-6">We work with smart and innovative clients who want to demonstrate their industry authority through content marketing.</h2>
        <p class="lead fw-normal">
            Our Executive Thought Leadership Program will help you establish a credible online presence and leverage that attention to drive real leads and sales appointments on a consistent basis.
        </p>
    </div>
</div>
<div class="position-relative overflow-hidden p-3 p-md-5 bg-dark text-bg-dark row">
    <div class="col-md-2"></div>
    <div class="col-md-10 px-3 text-end">
        <h2 class="display-6">Content Marketing Services</h2>
        <p class="lead fw-normal">
            Expertly-written content published in powerful publications. Branding expertise from a seasoned team of writers and editors, and exclusive contributing partnerships with powerful business publications.
        </p>
    </div>
</div>
<div class="position-relative overflow-hidden p-3 p-lg-5 text-start bg-light container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="row g-0 border rounded flex-md-row mb-4 shadow-sm h-100 position-relative">
                        <div class="col-12">
                            <div class="img-overlay">
                                <img src="{{ asset('images/assets/content.png') }}" alt="" class="bd-placeholder-image img-fluid">
                                <div class="text-overlay p-5">
                                    <strong class="d-inline-block mb-2 text-primary">Enhance your brand.</strong>
                                    <h3 class="mb-0">Branded Content Creation</h3>
                                    <p class="card-text mb-auto">We match your company with a team of in-house journalists, writers, and digital marketing
                                        consultants who capture your brand's voice and style. Through our interview process, we capture your insights and
                                        write and publish content that establishes you and your company as a thought leader in your industry.</p>
                                    <a href="javascript:void(0);" class="stretched-link">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 border rounded flex-md-row mb-4 shadow-sm h-100 position-relative">
                        <div class="col-12">
                            <div class="img-overlay">
                                <img src="{{ asset('images/assets/leadership.webp') }}" alt="" class="bd-placeholder-image img-fluid">
                                <div class="text-overlay p-5">
                                    <strong class="d-inline-block mb-2 text-success">Strengthen your authority.</strong>
                                    <h3 class="mb-0">Executive Leadership Branding</h3>
                                    <p class="mb-auto">We work with our publication partners to give your CEO, founder, or executive
                                        an exclusive contributorship in a number of powerful online publications. Our team of
                                        writers will work with you to capture your voice, write content, and establish your
                                        executive as a thought leader in your industry.</p>
                                    <a href="javascript:void(0);" class="stretched-link">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="row g-0 border rounded flex-md-row mb-4 shadow-sm h-100 position-relative">
                        <div class="col-12">
                            <div class="img-overlay">
                                <img src="{{ asset('images/assets/rank.webp') }}" alt="" class="bd-placeholder-image img-fluid">
                                <div class="text-overlay p-5">
                                    <strong class="d-inline-block mb-2 text-warning">Grow your audience.</strong>
                                    <h3 class="mb-0">High-Profile Content Placement</h3>
                                    <p class="mb-auto">Significantly expand your audience with high-ranking, expertly-written content. ELV Agency is
                                        partnered with an array of leading editorial brands who publish your articles as features and columns in their
                                        publications, ensuring your company is featured in authoritative editorial brands.</p>
                                    <a href="javascript:void(0);" class="stretched-link">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 border rounded flex-md-row mb-4 shadow-sm h-100 position-relative">
                        <div class="col-12">
                            <div class="img-overlay">
                                <img src="{{ asset('images/assets/promotion.webp') }}" alt="" class="bd-placeholder-image img-fluid">
                                <div class="text-overlay p-5">
                                    <strong class="d-inline-block mb-2 text-danger">Skyrocket your sales.</strong>
                                    <h3 class="mb-0">Brand Promotion</h3>
                                    <p class="mb-auto">We work with you to market and promote your published content. We'll help advise on how your brand
                                        and company can capitalize on its exclusive contributorship in leading editorial brands, and our editorial partners
                                        will ensure that your articles are featured prominently on their sites.</p>
                                    <a href="javascript:void(0);" class="stretched-link">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="row g-0 border rounded flex-md-row mb-4 shadow-sm h-100 position-relative">
                        <div class="col-12">
                            <div class="img-overlay">
                                <img src="{{ asset('images/assets/audience.jpeg') }}" alt="" class="bd-placeholder-image img-fluid">
                                <div class="text-overlay p-5">
                                    <strong class="d-inline-block mb-2 text-primary">Enrich Your Audience.</strong>
                                    <h3 class="mb-0">Social Media Posts</h3>
                                    <p class="card-text mb-auto">It takes consistent efforts to become worthy of being a thought leader. Make it a point
                                        to post your monthly thought leadership articles that hook your audience and engage with their comments. You
                                        need to be active on social media to build a strong community of loyalists.</p>
                                    <a href="javascript:void(0);" class="stretched-link">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 border rounded flex-md-row mb-4 shadow-sm h-100 position-relative">
                        <div class="col-12">
                            <div class="img-overlay">
                                <img src="{{ asset('images/assets/clients.jpeg') }}" alt="" class="bd-placeholder-image img-fluid">
                                <div class="text-overlay p-5">
                                    <strong class="d-inline-block mb-2 text-success">Gain New Clients.</strong>
                                    <h3 class="mb-0">Sponsored Audience Engagement</h3>
                                    <p class="mb-auto">Build authority and trust real time, by providing on topic articles to audiences interested in
                                        your industry or service. Thought leadership content receives more engagement and conversion then traditional
                                        marketing - impart your brand's knowledge to target audiences.</p>
                                    <a href="javascript:void(0);" class="stretched-link">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="position-relative overflow-hidden p-3 p-md-5 bg-secondary text-bg-dark row">
    <div class="col-md-12 px-3 text-start">
        <h1 class="display-4 fw-normal">Exclusivity</h1>
        <h2 class="display-6 mt-4 mb-2">Exclusivity is also about being a higher caliber of company or service to your targeted local audience.</h2>
        <p class="lead fw-normal mb-5">
            ELV Agency limits its work to only the top business in each category for a city market - simply put, more than one exclusive client in the same market would weaken the engagement and confuse your target audience.
        </p>
        <h2 class="display-6 mt-4 mb-2">You heard it right - if selected, you will have exclusive rights for your business category in your area.</h2>
        <p class="lead fw-normal">
            ELV Agency selects the best-in-class companies in each category within a geo region - once contracted you become the exclusive featured company for your area.
        </p>
        <p class="lead fw-normal">
            Secure the greatest competitive edge over your competition as the subject matter expert in your field through thought leadership - published on three of the top business platforms. The beauty of this arrangement is that your customers convert through engaging articles.
        </p>
    </div>
</div>
<div class="position-relative overflow-hidden p-3 p-md-5 text-start text-bg-dark" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{asset('images/assets/3 Service - what makes us different - high-fives.jpg')}}'); background-size: cover;">
    <div class="col-md-12 px-3">
        <h1 class="display-4 fw-normal mb-4">What makes us different from every other content marketing agency?</h1>
        <h2 class="display-6 mt-4 mb-0">We're well connected.</h2>
        <p class="lead fw-normal">
            We match expertly-written content with the most-read publications for the best visibility. No boring company blogs. Only world-class editorial platforms.
        </p>
        <h2 class="display-6 mt-4 mb-0">We innovate content.</h2>
        <p class="lead fw-normal">
            Until now, content marketing has fixated on intense SEO strategy. We ensure your content will rank by publishing your brand articles in authoritative publications.
        </p>
        <h2 class="display-6 mt-4 mb-0">We build credibility.</h2>
        <p class="lead fw-normal">
            92% of executives say consuming thought leadership improves their respect for an organization. Our partners lend authority and credibility to your brand.
        </p>
        <h2 class="display-6 mt-4 mb-0">We expand your reach.</h2>
        <p class="lead fw-normal">
            Our partners are among the most-read digital publications online. When we feature your content, we drastically increase your brand's reach.
        </p>
    </div>
</div>
<div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light">
    <div class="col-md-12">
        <h2 class="display-6">We're proud of the work we create for each client, forging strong editorial brands, powerful executive personas, and robust content marketing through partnerships with authoritative publications.</h2>
    </div>
</div>
@endsection