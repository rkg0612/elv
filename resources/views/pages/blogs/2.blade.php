@extends('layout.main')
@section('styles')
<style>
    .maintxt {
        background-image:linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("{{asset('images/assets/blog-2.jpg')}}");
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
            <h1 class="display-3 fw-normal m-0 text-center">Mastering Thought Leadership in 2023</h1>
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
                How much thought have you given thought leadership this year? Perhaps you started the year strong, building your
                thought leadership strategy with gusto. But then your plan fizzled away as other areas of your business needed your
                attention.
            </p>
            <p class="fw-normal">
                Make 2023 the year you prioritize thought leadership in your company. If you need help figuring out where to start,
                read on as we at <a href="https://www.massivebrand.online/" target="_blank">ELV Agency</a> detail the five main
                steps for making thought leadership a part of your daily business.
            </p>
            <h4 class="mt-4">Strategizing Thought Leadership in 2023</h4>
            <p class="fw-normal">
                A lot has changed since the start of Covid in 2020, especially now that we move into a post-pandemic era.
            </p>
            <p class="fw-normal">
                With 2023 around the corner, business leaders need to revisit the strategies they put in place during the pandemic,
                including thought leadership.
            </p>
            <p class="fw-normal">
                Let's look at the five main actionable steps in your thought leadership strategy for 2023.
            </p>
            <h5 class="mt-2">Step 1: Define Your Goals</h5>
            <p class="fw-normal">
                To stay relevant as a business, you must regularly define and redefine your goals. And there is no time like the new
                year to revisit your business ideals:
            </p>
            <img src="{{ asset('images/assets/blog-2-1.jpg') }}" alt="" class="img-fluid rounded">
            <ul class="fw-normal">
                <li>What you stand for</li>
                <li>Where you want to be as a business</li>
                <li>How do you want to lead your brand further</li>
            </ul>
            <p class="fw-normal">
                Defining your goals will require effort and consideration from your side, resulting in a deeper understanding of
                your brand.
            </p>
            <p class="fw-bold text-muted mb-0">
                A look at your marketing strategy
            </p>
            <p class="fw-normal">
                Your marketing strategy needs to be reflected in your goals as well. With your customer base at the top of your
                mind, you will be able to define or redefine your marketing strategy for continued growth effectively.
            </p>
            <p class="fw-normal">
                ELV Agency can help you with this to fine-tune your marketing output.
            </p>
            <h5 class="mt-2">Step 2: Identify Your Thought Leaders</h5>
            <p class="fw-normal">
                As part of your marketing strategy, always look for thought leaders and industry experts so that you can capitalize
                on their knowledge and experience.
            </p>
            <p class="fw-normal">
                By tapping into the networks of these expert leaders, you will gain access to some incredible opportunities, and you
                can collaborate with some of them for your marketing strategy.
            </p>
            <p class="fw-normal">
                Consider the experts in your own company as well, and see how you can utilize their skills and knowledge to reach
                your current and potential customers.
            </p>
            <h5 class="mt-2">Step 3: Create Your Content</h5>
            <p class="fw-normal">
                When creating your thought leadership content, ask yourself the following questions to determine what your content
                should deliver.
            </p>
            <div class="px-3">
                <p class="fw-bold text-muted mb-0">
                    1. What type of content do you want?
                </p>
                <p class="fw-normal">
                    Many content options are available for you, but they should be a step up from traditional blog posts and FAQs.
                </p>
                <p class="fw-normal">
                    Thought leadership content is focused on sharing valuable and insightful information that can be used as
                    reliable references in your industry. From opinion articles to case studies to interviews and analysis, choose
                    the kind of content that aligns with business goals and strategies for 2023.
                </p>
                <p class="fw-bold text-muted mb-0">
                    2. What do you envision sharing your thought leadership content in?
                </p>
                <p class="fw-normal">
                    An effective thought leader regularly publishes to a high standard in valued and trusted publications, such as
                    <a href="https://www.bloomberg.com/" target="_blank">Bloomberg</a>, <a href="https://www.benzinga.com/"
                        target="_blank">Benzinga</a>, and <a href="https://www.forbes.com/?sh=77d84e8b2254"
                        target="_blank">Forbes</a>.
                </p>
                <p class="fw-normal">
                    These trusted platforms add value to what you have to say and help to further increase brand awareness for your
                    business.
                </p>
                <p class="fw-bold text-muted mb-0">
                    3. Are you willing to put your face to your brand?
                </p>
                <p class="fw-normal">
                    If you genuinely want to be an authentic thought leader, you need to showcase your brand by promoting yourself
                    as a representative of your brand.
                </p>
                <p class="fw-normal">
                    It goes beyond just putting your face on a website; you must live and breathe the brand's values.
                </p>
            </div>
            <h5 class="mt-2">Step 4: Distribute and Promote Your Content</h5>
            <p class="fw-normal">
                The fourth step involves ensuring you stay on top of distributing and promoting your content.
            </p>
            <p class="fw-normal">
                Whether your distribution channel is social media or highly respected publications, always ensure you do your best
                to promote the finest aspects of your brand through your content.
            </p>
            <h5 class="mt-2">Step 5: Measure Your Results</h5>
            <p class="fw-normal">
                After following the above four steps, all that remains is to consistently reevaluate your thought leadership
                strategy and adjust what works and what doesn't.
            </p>
            <p class="fw-normal">
                Track how your content is performing in analog and digital space. This shows how your brand is doing in real-time.
            </p>
            <h4 class="mt-4">Want More?</h4>
            <p class="fw-normal">
                At ELV Agency, we are passionate about ensuring your brand has a successful 2023. <a
                    href="https://www.massivebrand.online/" target="_blank">Contact us</a> for more information on how we can
                collaborate.
            </p>
        </div>
    </div>
</div>
@endsection