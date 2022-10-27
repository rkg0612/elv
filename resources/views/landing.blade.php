<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
            animation: loading-3 1.8s linear forwards;
            }
            .progress.yellow .progress-left .progress-bar {
            animation: none;
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
                -webkit-transform: rotate(144deg);
                transform: rotate(144deg);
            }
            }
            @keyframes loading-3 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(135deg);
                transform: rotate(135deg);
            }
            }
    </style>
</head>

<body>
    <header class="p-3 text-bg-dark site-header d-none d-md-block">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <h1>ELV</h1>
                </a>
                <div class="text-end">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="javascript:void(0);" class="nav-link px-2 text-white">Team</a></li>
                        <li><a href="javascript:void(0);" class="nav-link px-2 text-white">Publications</a></li>
                        <li><a href="javascript:void(0);" class="nav-link px-2 text-white">FAQ's</a></li>
                        <li><a href="javascript:void(0);" class="nav-link px-2 text-white">Insights</a></li>
                        <li><a href="javascript:void(0);" class="nav-link px-2 text-white">Apply</a></li>
                    </ul>
                </div>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                  <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                </form>
            </div>
        </div>
    </header>
    <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 text-start bg-light">
            <div class="col-md-8 p-lg-5 my-5">
                <h1 class="display-4 fw-normal">Transforming Business Owners Into Top 1% Industry Experts</h1>
                <h2 class="display-6">We tell your story. The future of content marketing.</h2>
                <p class="lead fw-normal">
                    ELV Agency engages your audience and enhances your brand through monthly expert thought leadership articles in the world’s most powerful publications.
                </p>
                <a class="btn btn-outline-secondary" href="javascript:void(0);">Apply Today</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        <hr>
        <div class="text-center">
            <iframe width="560" 
                height="315"
                src="https://www.youtube.com/embed/NpEaa2P7qZI&controls=0"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
        <hr>
        <div class="position-relative overflow-hidden p-3 p-md-5 bg-dark text-bg-dark row">
            <div class="col-md-12 p-lg-5 my-5 text-end">
                <h2 class="display-6">Grow your audience. Enhance your brand. Skyrocket your sales.</h2>
                <p class="lead fw-normal">
                    Content Is King. We’re leading a seismic shift in content marketing, creating a studio for founders and leaders of fast growing companies to publish content in the most-read, world-renowned digital publications.
                </p>
                <p class="lead fw-normal">
                    92% of decision makers say consuming thought leadership improves their respect for an organization.
                </p>
                <a class="btn btn-outline-secondary" href="javascript:void(0);">See Our Work</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        <div class="position-relative overflow-hidden p-3 p-md-5 bg-light row">
            <div class="col-md-8 p-lg-5 my-5 text-start">
                <h2 class="display-6">Competitive Edge</h2>
                <p class="lead fw-normal">
                    ELV Agency selects the best-in-class companies within a geo region for each category - once contracted, you become the exclusive featured company in your area.
                </p>
                <a class="btn btn-outline-secondary" href="javascript:void(0);">Apply Today</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        <hr>
        <div class="position-relative overflow-hidden p-3 p-md-5 bg-light row">
            <div class="col-md-12 p-lg-5 my-5 text-center">
                <h2 class="display-6">Content is the most effective way to turn readers into clients</h2>
                <div class="row justify-content-center">
                    <div class="col-4 text-center">
                            <div class="progress blue">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">90%</div>
                            </div>
                        <p>
                            Companies that publish content capture 67% more leads per month.
                        </p>
                    </div>
                    <div class="col-4 text-center">
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
                    <div class="col-4 text-center">
                            <div class="progress blue">
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
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    </main>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>