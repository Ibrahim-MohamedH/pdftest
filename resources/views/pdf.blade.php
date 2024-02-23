<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        .form-control {
            display: block;
            background-color: transparent;
            border: none;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-clip: padding-box;
            border-radius: 0.375rem;
        }

        .form-label {
            margin-bottom: 0.5rem;
        }

        label {
            display: inline-block;
        }

        .btn,
        .info h5 {
            display: inline-block;
        }

        .info h4,
        .info h5 {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .info h5::before,
        .info> ::before:not(h5) {
            content: "";
            position: absolute;
            background: #fff;
        }

        .card,
        .info,
        .info>* {
            position: relative;
        }

        .btn,
        .card {
            color: #212529;
        }

        .g-4,
        .gx-4,
        .row {
            --bs-gutter-x: 1.5rem;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue",
                "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji",
                "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
            color: var(--bs-heading-color);
        }

        .btn {
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5rem;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            border-radius: 0.375rem;
            background-color: transparent;
        }

        .card,
        .row>div {
            display: inline block;
        }

        h2 {
            font-size: calc(1.325rem + 0.9vw);
        }

        h4 {
            font-size: calc(1.275rem + 0.3vw);
        }

        h5 {
            font-size: 1.25rem;
        }

        h6 {
            font-size: 1rem;
        }

        .border-1 {
            border-width: 1px !important;
        }

        body {
            background-size: 100% 100vh;
            background-repeat: repeat-y;
            position: relative;
            margin-top: 20px;
            background: url({{ public_path('loc_camp_logo.png') }});

        }

        table {
            caption-side: bottom;
            border-collapse: collapse;
        }

        .table {
            border-color: transparent;
            width: 100%;
            vertical-align: top;
        }

        .table> :not(caption)>*>* {
            background-color: transparent !important;
            padding: 0.5rem;
        }

        .info {
            padding: 0 0 20px 20px;
            margin-top: -2px;
            border-left: 2px solid #707070;
            margin-bottom: 12px;
        }

        .info h4 {
            line-height: 18px;
            font-size: 18px;
            text-transform: uppercase;
            font-family: Poppins, sans-serif;
            color: #050d18;
        }

        .info h5 {
            font-size: 16px;
            padding: 0 15px 5px 0;
        }

        .info p {
            margin-bottom: 8px;
        }

        .info> ::before:not(h5) {
            width: 10px;
            height: 10px;
            border-radius: 50px;
            left: -28px;
            top: 50%;
            transform: translateY(-50%);
            border: 2px solid #707070;
        }

        .info h5::before {
            width: 14px;
            height: 14px;
            border-radius: 50px;
            left: -29px;
            top: -3px;
            border: 2px solid #707070;
        }

        .bg-info {
            background-color: #efefef !important;
        }

        .border {
            border: 1px solid #dee2e6 !important;
        }

        .border-bottom {
            border-bottom: 1px solid #dee2e6 !important;
        }

        .border-end {
            border-right: 1px solid #dee2e6 !important;
        }

        .card {
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-clip: border-box;
            border: none !important;
            background-color: transparent !important;
            border-radius: 0.375rem;
        }

        .bg-primary {
            background-color: #ff6900 !important;
        }

        .card-title {
            margin-bottom: 0;
        }

        .card-body {
            border: 1px solid #dee2e6;
            border-bottom-left-radius: 0.375rem;
            border-bottom-right-radius: 0.375rem;
            flex: 1 1 auto;
            padding: 1rem;
        }

        .g-2,
        .gy-2 {
            --bs-gutter-y: 0.5rem;
        }

        .row {
            margin-left: 0;
            margin-right: 0;
            --bs-gutter-y: 0;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
        }

        .justify-content-between {
            justify-content: space-between !important;
        }

        .row>* {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * 0.5);
            padding-left: calc(var(--bs-gutter-x) * 0.5);
            margin-top: 0;
        }

        .col-4,
        .col-6 {
            display: inline-block;
        }

        .page-break {
            page-break-before: auto;
            page-break-after: always;
        }

        .no-break,
        footer,
        section {
            page-break-inside: avoid;
        }

        .hidden {
            display: none;
        }

        @media print {
            @page {
                margin-top: 10px;
                margin-bottom: 10px;
                size: A4 portrait;
            }

        }

        .fw-semibold {
            font-weight: 600 !important;
        }

        .fw-bold {
            font-weight: 700 !important;
        }

        .rounded-top-3 {
            border-top-left-radius: 0.5rem !important;
            border-top-right-radius: 0.5rem !important;
        }

        .text-center {
            text-align: center !important;
        }

        .text-end {
            text-align: right !important;
        }

        .rounded-3 {
            border-radius: 0.5rem !important;
        }

        .text-light {
            color: #fff !important;
        }

        .overflow-hidden {
            overflow: hidden !important;
        }

        .py-1 {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important;
        }

        .pb-3 {
            padding-bottom: 1rem !important;
        }

        .pt-4 {
            padding-top: 1.5rem !important;
        }

        .px-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        }

        .py-2 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }

        .py-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .py-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .px-0 {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        .py-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }

        .mb-1 {
            margin-bottom: 0.25rem !important;
        }

        .mb-2 {
            margin-bottom: 0.5rem !important;
        }

        .mb-3 {
            margin-bottom: 1rem !important;
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important;
        }

        .my-4 {
            margin-top: 1.5rem !important;
        }

        .col-4 {
            width: 33.33333333%;
        }

        .col-6 {
            width: 49.65%;
        }

        .col-12 {
            display: inline-block;
            width: 100%;
        }

        @media (min-width: 576px) {
            .col-sm-2 {
                display: inline-block;
                width: 16.66666667%;
            }

            .col-sm-6 {
                display: inline-block;

                width: 49.65%;
            }
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            width: 100%;
            padding-right: calc(var(--bs-gutter-x) * 0.5);
            padding-left: calc(var(--bs-gutter-x) * 0.5);
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 768px) {
            .col-md-2 {
                display: inline-block;
                width: 16.66666667%;
            }

            .col-md-6 {
                display: inline-block;
                width: 49.65%;
            }

            .container,
            .container-md,
            .container-sm {
                max-width: 720px;
            }
        }
    </style>
</head>

<body>
    <main class="container-md pt-4 pb-3">
        <section id="initials" class="mb-4">
            <div class="card overflow-hidden bg-primary py-1 px-3">
                <table class="table table-borderless mb-0">
                    <tbody>
                        <tr>
                            <td>
                                <h2 class="text-light">Name: ZA</h2>
                            </td>
                            <td>
                                <h2 class="text-light">Nationality: Egyptian</h2>
                            </td>
                            <td>
                                <h2 class="text-light">Country: Egypt</h2>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section id="Language" class="my-4">
            <div class="card overflow-hidden">
                <h2 class="card-title bg-primary py-2 px-3 text-light">
                    Native Language
                </h2>
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-1 col-md-2 col-sm-2 col-4 text-center">
                                <p class="btn border border-2">english</p>
                            </div>
                            <div class="col-xl-1 col-md-2 col-sm-2 col-4 text-center">
                                <p class="btn border border-2">english</p>
                            </div>
                            <div class="col-xl-1 col-md-2 col-sm-2 col-4 text-center">
                                <p class="btn border border-2">english</p>
                            </div>
                            <div class="col-xl-1 col-md-2 col-sm-2 col-4 text-center">
                                <p class="btn border border-2">english</p>
                            </div>
                            <div class="col-xl-1 col-md-2 col-sm-2 col-4 text-center">
                                <p class="btn border border-2">english</p>
                            </div>
                            <div class="col-xl-1 col-md-2 col-sm-2 col-4 text-center">
                                <p class="btn border border-2">english</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Education" class="my-4">
            <div class="card overflow-hidden">
                <h2 class="card-title bg-primary py-2 px-3 mb-0 text-light">
                    Education
                </h2>
                <div class="card-body py-0 px-0">
                    <div class="container-fluid px-0">
                        <div class="row">
                            <div class="no-break col-md-6 col-sm-6 ps-lg-5 border-end border-bottom border-1 py-4">
                                <h4>Misr University For Science and Technology</h4>
                                <div class="info">
                                    <h5>Computer Science</h5>

                                    <p>A+</p>
                                    <p>Sept 2020 - May 2024</p>
                                    <p>Status: Approved</p>
                                </div>
                            </div>
                            <div class="no-break col-md-6 col-sm-6 ps-lg-5 border-end border-bottom border-1 py-4">
                                <h4>Misr University For Science and Technology</h4>
                                <div class="info">
                                    <h5>Computer Science</h5>

                                    <p>A+</p>
                                    <p>Sept 2020 - May 2024</p>
                                    <p>Status: Approved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Administrative" class="my-4">
            <div class="card overflow-hidden mb-4">
                <h2 class="card-title bg-primary py-2 px-3 mb-0 text-light">
                    Administrative
                </h2>
            </div>
            <div class="row gx-4 gy-2 justify-content-between">
                <div class="no-break col-6 mb-2">
                    <div class="card overflow-hidden">
                        <h6 class="card-title mb-0 bg-info py-2 px-3">
                            Do you have a scientific degree in the mentioned field?
                        </h6>
                        <div class="card-body">yes</div>
                    </div>
                </div>
                <div class="no-break col-6 mb-2">
                    <div class="card overflow-hidden">
                        <h6 class="card-title mb-0 bg-info py-2 px-3">
                            Do you have a scientific degree in the mentioned field?
                        </h6>
                        <div class="card-body">yes</div>
                    </div>
                </div>
                <div class="no-break col-6 mb-2">
                    <div class="card overflow-hidden">
                        <h6 class="card-title mb-0 bg-info py-2 px-3">
                            Do you have a scientific degree in the mentioned field?
                        </h6>
                        <div class="card-body">yes</div>
                    </div>
                </div>
                <div class="no-break col-6 mb-2">
                    <div class="card overflow-hidden">
                        <h6 class="card-title mb-0 bg-info py-2 px-3">
                            Do you have a scientific degree in the mentioned field?
                        </h6>
                        <div class="card-body">yes</div>
                    </div>
                </div>
                <div class="no-break col-12 mb-2">
                    <div class="card overflow-hidden">
                        <h6 class="card-title bg-info py-2 px-3">
                            Do you have a scientific degree in the mentioned field?
                        </h6>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Placeat repellendus vitae quaerat! Aut eos fugiat natus tempore
                            reiciendis aliquid? Natus quidem molestias expedita distinctio
                            accusamus nam ipsam et. Perspiciatis, asperiores!
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Automotive" class="my-4">
            <div class="card overflow-hidden mb-4">
                <h2 class="card-title bg-primary py-2 px-3 mb-0 text-light">
                    Automotive
                </h2>
            </div>
            <h4 class="mb-3">Status: Approved</h4> <br>
            <div class="row gx-4 gy-2 justify-content-between">
                <div class="no-break col-6 mb-2">
                    <div class="card overflow-hidden">
                        <h6 class="card-title mb-0 bg-info py-2 px-3">
                            Do you have a scientific degree in the mentioned field?
                        </h6>
                        <div class="card-body">yes</div>
                    </div>
                </div>
                <div class="no-break col-6 mb-2">
                    <div class="card overflow-hidden">
                        <h6 class="card-title mb-0 bg-info py-2 px-3">
                            Do you have a scientific degree in the mentioned field?
                        </h6>
                        <div class="card-body">yes</div>
                    </div>
                </div>
                <div class="no-break col-6 mb-2">
                    <div class="card overflow-hidden">
                        <h6 class="card-title mb-0 bg-info py-2 px-3">
                            Do you have a scientific degree in the mentioned field?
                        </h6>
                        <div class="card-body">yes</div>
                    </div>
                </div>
                <div class="no-break col-6 mb-2">
                    <div class="card overflow-hidden">
                        <h6 class="card-title mb-0 bg-info py-2 px-3">
                            Do you have a scientific degree in the mentioned field?
                        </h6>
                        <div class="card-body">yes</div>
                    </div>
                </div>
                <div class="no-break col-12 mb-2">
                    <div class="card overflow-hidden">
                        <h6 class="card-title bg-info py-2 px-3">
                            Do you have a scientific degree in the mentioned field?
                        </h6>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Placeat repellendus vitae quaerat! Aut eos fugiat natus tempore
                            reiciendis aliquid? Natus quidem molestias expedita distinctio
                            accusamus nam ipsam et. Perspiciatis, asperiores!
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <div class="page-break"></div> -->
        <section id="Experience" class="my-4">
            <div class="card overflow-hidden">
                <h2 class="card-title bg-primary py-2 px-3 mb-0 text-light">
                    Experience
                </h2>
                <div class="card-body py-0 px-0">
                    <div class="container-fluid px-0">
                        <div class="row">
                            <div class="no-break col-md-6 col-sm-6 ps-lg-5 border-end border-bottom border-1 py-4">
                                <h4>Misr University For Science and Technology</h4>
                                <div class="row">
                                    <div class="form-group col-12 px-0">
                                        <h6 class="fw-semibold">UI-UX Designer</h6>
                                    </div>
                                    <div class="form-group col-12 px-0">
                                        <label for="college" class="form-label fw-bold">Description:</label>
                                        <span class="form-control" role="textbox" contenteditable>
                                            Lorem ipsum dolor sit amet consectetur. Eget rutrum a
                                            quis pretium duis amet nisi. Risus aenean neque
                                            adipiscing donec ultricies enim. In quis molestie sem
                                            tincidunt mi. Mi velit tempor pulvinar purus elit. Amet
                                            enim egestas non consequat odio. Leo auctor augue
                                            lacinia velit ut. Orci bibendum sem sollicitudin
                                            suspendisse ipsum pellentesque amet semper.
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <ul>
                                            <li class="fw-bold">jun 2024 / oct 2025 (5 Mon)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="no-break col-md-6 col-sm-6 ps-lg-5 border-end border-bottom border-1 py-4">
                                <h4>Misr University For Science and Technology</h4>
                                <div class="row">
                                    <div class="form-group col-12 px-0">
                                        <h6 class="fw-semibold">UI-UX Designer</h6>
                                    </div>
                                    <div class="form-group col-12 px-0">
                                        <label for="college" class="form-label fw-bold">Description:</label>
                                        <span class="form-control" role="textbox" contenteditable>
                                            Lorem ipsum dolor sit amet consectetur. Eget rutrum a
                                            quis pretium duis amet nisi. Risus aenean neque
                                            adipiscing donec ultricies enim. In quis molestie sem
                                            tincidunt mi. Mi velit tempor pulvinar purus elit. Amet
                                            enim egestas non consequat odio. Leo auctor augue
                                            lacinia velit ut. Orci bibendum sem sollicitudin
                                            suspendisse ipsum pellentesque amet semper.
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <ul>
                                            <li class="fw-bold">jun 2024 / oct 2025 (5 Mon)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="rounded-top-3 bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img width="60" class="rounded-3 mb-1" src="{{ public_path('loc_camp_logo.jpg') }}" />
                    <p class="mb-1">Loc Camp</p>
                    <p class="mb-1">23, Egypt, Giza, Haram, Kamel Elmahroky st</p>
                    <p class="mb-1">+201090000000 - +201060000000</p>
                </div>
            </div>
            <div class="col-12 text-end">copyright &#169;2024, Loc Camp</div>
        </div>
    </footer>
    <script>
        window.onbeforeprint = () => {
            let contentHeight = document.querySelector("body").offsetHeight;
            let pageHeight = 1000;
            let numPages = Math.ceil(contentHeight / pageHeight);
            let footer = document.querySelector("footer");
            footer.style.position = "absolute";
            footer.style.width = "100%";
            footer.style.left = 0;
            footer.style.top = numPages * 1100 - footer.offsetHeight + "px";
        };
    </script>
</body>

</html>
