@extends('layout.main')
@section('styles')
<style>
    .maintxt {
        background-image:linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("{{asset('images/assets/blog-1.jpg')}}");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: 50%;
        width: 100%;
        height: 25%;
        padding-top: 30%;
        top: 0;
        position: relative;
        border-radius: 0.5rem;
    }

    .maintxt h1 {
        position: absolute;
        color: white;
        top: 40%;
        width: 100%;
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="position-relative overflow-hidden p-3 p-md-3 text-start bg-light text-center">
        <div class="col-md-12 px-3 text-center">
            <div class="maintxt">
            </div>
        </div>
    </div>
    <div class="position-relative overflow-hidden px-3 pt-0 pb-3 pb-md-3 px-md-3 text-start bg-light">
        <div class="col-md-12 px-lg-3 pb-lg-3 pt-3">
            <h1 class="display-3 fw-normal m-0 text-center">Thought Leadership Content That Works</h1>
            <hr>
            <div class="d-flex justify-content-between mb-4">
                <div class="text-muted">
                    <small>Bruce Caven</small>
                </div>
                <div class="text-muted">
                    <small>{{ date('F j, Y', strtotime(now())) }}</small>
                </div>
            </div>
            <p class="fw-normal">
                Is your thought leadership content actually being read by your target audience, or is it simply filling up space on
                a
                website? How can you increase your credibility as a thought leader through the content you produce and distribute?
            </p>
            <p class="fw-normal">
                Many brands claim to produce content under the banner of thought leadership, but a lot of it is either irrelevant
                or, quite frankly, boring.
            </p>
            <p class="fw-normal">
                At <a href="https://www.massivebrand.online/" target="_blank">ELV Agency</a>, our primary goal is to provide you
                with the tools and expertise
                to ensure your content is engaging
                and authentic enough to give you a voice of authority as a thought leader in your industry.
            </p>
            <p class="fw-normal">
                We do this by curating thought leadership content that works for you and your brand. Read on to find out more as we
                look at what thought leadership content is and the different strategies you can employ to reach the right people at
                the right time.
            </p>
            <h4 class="mt-4">What Thought Leadership Content Should Be</h4>
            <p class="fw-normal">
                Above all else, thought leadership content should be real and original. It's the type of content that makes you
                stand out as a subject matter expert.
            </p>
            <p class="fw-normal">
                Your name, work, and brand are attached to your content, so consider it a long-term investment in your fame.
                Furthermore, good thought leadership content should be evergreen, meaning it needs to be authoritative enough to
                stand the test of time.
            </p>
            <p class="fw-normal">
                Thought leadership content should aim to do the following:
            </p>
            <ol class="fw-normal">
                <li>Help people solve problems</li>
                <li>Provide actionable advice</li>
                <li>Be valuable to readers</li>
            </ol>
            <p class="fw-normal">
                If your thought leadership content is not doing these three things, it is time to revisit your content strategy.
            </p>
            <h4 class="mt-4">Award-Winning Thought Leadership Content</h4>
            <p class="fw-normal">
                Let's look at thought leader Marie Forleo's <a href="https://www.marieforleo.com/marietv"
                    target="_blank">MarieTV</a> concept. MarieTV is a weekly TV show that covers an extensive content mix of life
                and business advice.
            </p>
            <p class="fw-normal">
                Part of MarieTV's winning success is Forleo's deployment of a key element of thought leadership: collaboration. Yes,
                she produces the content, but she isn't the only voice you hear. She adds credibility to her brand by working with
                other true thought leaders.
            </p>
            <p class="fw-normal">
                In addition, the educational content is valuable, offers advice, and helps solve real-life business and everyday
                life problems for people in 195 countries around the world.
            </p>
            <p class="fw-normal">
                Thought leaders should aim to do what she does: to effectively produce quality content that engages their target
                consumers, gives them advice, and provides valuable strategies to solve problems.
            </p>
            <h4 class="mt-4">Thought Leadership Content Strategies</h4>
            <img src="{{ asset('images/assets/blog-1-1.jpg') }}" alt="" class="img-fluid rounded">
            <p class="fw-normal">
                Here are content strategies you can use and the ways to deploy each of them:
            </p>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Type of content</th>
                        <th>How to use it</th>
                    </tr>
                </thead>
                <tbody class="fw-normal">
                    <tr>
                        <td>Blogs (including guest blogs)</td>
                        <td>You can post blogs directly to a website or link them to mailers or social media platforms to drive
                            traffic to your site.</td>
                    </tr>
                    <tr>
                        <td>Case studies</td>
                        <td>Case studies provide unique examples of how data works in real life. This content can be used anywhere
                            and may serve as additional documentation for proposals and sales marketing.</td>
                    </tr>
                    <tr>
                        <td>Industry analysis</td>
                        <td>This content type is directly marketed to key players in the given industry. You can distribute it at
                            conferences and as authoritative references in talk shows, news articles, and blogs.</td>
                    </tr>
                    <tr>
                        <td>Data storytelling</td>
                        <td>More than just presenting the numbers; it's about telling a story by making the relevant data relatable
                            and understandable to the target audience who don't have the time and resources to comb through pages
                            and pages of statistics. Data storytelling gives you the "how" to "what" happened.</td>
                    </tr>
                    <tr>
                        <td>Licensed content</td>
                        <td>Build trust in your brand by relying on licensed content. This content can be distributed directly to
                            your consumers through various channels.</td>
                    </tr>
                    <tr>
                        <td>Podcasts and video content</td>
                        <td>The channels for distributing multimedia thought leadership content is numerous and is often seen as an
                            effective way to personalize your content.</td>
                    </tr>
                </tbody>
            </table>
            <h4 class="mt-4">Set up a content calendar</h4>
            <p class="fw-normal">
                Now that you have an idea of the types of content you can produce and distribute, it's time to get to work.
            </p>
            <p class="fw-normal">
                When releasing content, it's all about consistency. First, organize your schedule according to a content calendar
                and content plan. Then, aim to produce new valuable content at least every month.
            </p>
            <p class="fw-normal">
                In this way, you maintain your visibility and relevance as a thought leader, and your target audience begins to
                anticipate the release of fresh content.
            </p>
            <p class="fw-normal">
                Stay up to date with your content and the thought leadership industry with the help of ELV Agency.
            </p>
            <h4 class="mt-4">Want More?</h4>
            <p class="fw-normal">
                Visit the contact page of <a href="https://www.massivebrand.online/" target="_blank">ELV Agency</a> to learn more
                about brand marketing.
            </p>
        </div>
    </div>
</div>
@endsection