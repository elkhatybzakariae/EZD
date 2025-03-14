<!DOCTYPE html>
<html>

<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @livewireStyles --}}
    {{-- <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script> --}}



    @yield('style')
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true"
    tabindex="0">
    @include('master.header')
    <br>
    <div class="container mt-5">
        {{-- @yield('content') --}}


        <div id="content-wrap" class="container wpex-clr">


            <div id="primary" class="content-area wpex-clr">


                <div id="content" class="site-content wpex-clr">



                    <article id="single-blocks" class="single-page-article wpex-clr">
                        <div class="single-page-content single-content entry wpex-clr">
                            <div class="wpb-content-wrapper">
                                <div class="vc_row wpb_row vc_row-fluid wpex-relative">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div
                                                    class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_three vc_sep_pos_align_center vc_sep_color_grey wpb_content_element vc_separator-has-text">
                                                    <span class="vc_sep_holder vc_sep_holder_l"><span
                                                            class="vc_sep_line"></span></span>
                                                    <h4>We change everything WordPress. One WP theme at a time.</h4>
                                                    <span class="vc_sep_holder vc_sep_holder_r"><span
                                                            class="vc_sep_line"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid wpex-relative">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element">
                                                    <div class="wpb_wrapper">
                                                        <p>Please have a look at our <a
                                                                href="https://colorlib.com/wp/free-wordpress-themes/">free
                                                                WordPress themes</a>. We have ensured that these
                                                            responsive themes are highly customizable and have a premium
                                                            look and feel.</p>
                                                        <p>These themes are not just to be showcased, you can also
                                                            download them and use them for your free and commercial
                                                            websites. &nbsp;We don’t charge for these themes, but we
                                                            would appreciate it if you would link us to our website.
                                                            This is not asking a lot, and we are sure you will be OK
                                                            with our request.</p>
                                                        <p>If you get stuck with setup and customization, we are here to
                                                            help and try to answer every question on our support forum.
                                                            Please leave a note on the forum for any special requests,
                                                            and we’ll respond&nbsp;ASAP.&nbsp;This section will be
                                                            updated as more themes become&nbsp;available.</p>
                                                        <p>Pick a responsive WordPress theme for your website and take
                                                            it to the next level.</p>
                                                        <p><strong>Page last updated:</strong> July 2025</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="vc_row wpb_row vc_row-fluid wpex-relative"
                                    style="margin-top: 30px;margin-bottom: 50px;">
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div
                                                    class="wpb_single_image wpb_content_element vc_align_ wpb_content_element">
                                                    <h2 class="wpb_heading wpb_singleimage_heading">Shapely - One Page
                                                        WP Theme</h2>
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="https://colorlib.com/wp/themes/shapely/" target="_self"
                                                            class="vc_single_image-wrapper wpex-image-hover grow   vc_box_border_grey">
                                                            <picture class="vc_single_image-img attachment-full"
                                                                title="flexible-wordpress-theme">
                                                                <source type="image/webp"
                                                                    srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/flexible-wordpress-theme.jpg.webp">
                                                                <img width="1200" height="900"
                                                                    src="https://colorlib.com/wp/wp-content/uploads/sites/2/flexible-wordpress-theme.jpg"
                                                                    alt="">
                                                            </picture>
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div
                                                    class="wpb_single_image wpb_content_element vc_align_ wpb_content_element">
                                                    <h2 class="wpb_heading wpb_singleimage_heading">Unapp - App Landing
                                                        Page</h2>
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="https://colorlib.com/wp/themes/unapp/" target="_self"
                                                            class="vc_single_image-wrapper wpex-image-hover grow   vc_box_border_grey">
                                                            <picture class="vc_single_image-img attachment-full"
                                                                title="unapp-free-mobile-app-landing-page-theme">
                                                                <source type="image/avif"
                                                                    srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/unapp-free-mobile-app-landing-page-theme.jpg.avif">
                                                                <source type="image/webp"
                                                                    srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/unapp-free-mobile-app-landing-page-theme.jpg.webp">
                                                                <img data-no-lazy="" fetchpriority="high" width="1200"
                                                                    height="999"
                                                                    src="https://colorlib.com/wp/wp-content/uploads/sites/2/unapp-free-mobile-app-landing-page-theme.jpg"
                                                                    alt="">
                                                            </picture>
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div
                                                    class="wpb_single_image wpb_content_element vc_align_ wpb_content_element">
                                                    <h2 class="wpb_heading wpb_singleimage_heading">Philosophy -
                                                        Creative Blog Theme</h2>
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="https://colorlib.com/wp/themes/philosophy/"
                                                            target="_self"
                                                            class="vc_single_image-wrapper wpex-image-hover grow   vc_box_border_grey">
                                                            <picture class="vc_single_image-img attachment-full"
                                                                title="philosophy-free-wordpress-blog-theme">
                                                                <source type="image/avif"
                                                                    srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/philosophy-free-wordpress-blog-theme.jpg.avif">
                                                                <source type="image/webp"
                                                                    srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/philosophy-free-wordpress-blog-theme.jpg.webp">
                                                                <img width="1200" height="969"
                                                                    src="https://colorlib.com/wp/wp-content/uploads/sites/2/philosophy-free-wordpress-blog-theme.jpg"
                                                                    alt="">
                                                            </picture>
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid wpex-relative"
                                    style="margin-top: 30px;margin-bottom: 50px;">
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div
                                                    class="wpb_single_image wpb_content_element vc_align_ wpb_content_element">
                                                    <h2 class="wpb_heading wpb_singleimage_heading">Illdy - One Page
                                                        Business Theme</h2>
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="https://colorlib.com/wp/themes/illdy/" target="_self"
                                                            class="vc_single_image-wrapper wpex-image-hover grow   vc_box_border_grey">
                                                            <picture class="vc_single_image-img attachment-full"
                                                                title="activello-browser">
                                                                <source type="image/webp"
                                                                    data-lazy-srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/activello-browser.jpg.webp"
                                                                    srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/activello-browser.jpg.webp">
                                                                <img width="1200" height="900"
                                                                    src="https://colorlib.com/wp/wp-content/uploads/sites/2/activello-browser.jpg"
                                                                    alt=""
                                                                    data-lazy-src="https://colorlib.com/wp/wp-content/uploads/sites/2/activello-browser.jpg"
                                                                    data-ll-status="loaded"
                                                                    class="entered lazyloaded"><noscript><img
                                                                        width="1200" height="900"
                                                                        src="https://colorlib.com/wp/wp-content/uploads/sites/2/activello-browser.jpg"
                                                                        alt="" /></noscript>
                                                            </picture>
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div
                                                    class="wpb_single_image wpb_content_element vc_align_ wpb_content_element">
                                                    <h2 class="wpb_heading wpb_singleimage_heading">Activello - Simple
                                                        Blog Theme</h2>
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="https://colorlib.com/wp/themes/activello/"
                                                            target="_self"
                                                            class="vc_single_image-wrapper wpex-image-hover grow   vc_box_border_grey">
                                                            <picture class="vc_single_image-img attachment-full"
                                                                title="activello-simple-blog-theme">
                                                                <source type="image/webp"
                                                                    data-lazy-srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/activello-simple-blog-theme.jpg.webp"
                                                                    srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/activello-simple-blog-theme.jpg.webp">
                                                                <img width="1200" height="900"
                                                                    src="https://colorlib.com/wp/wp-content/uploads/sites/2/activello-simple-blog-theme.jpg"
                                                                    alt=""
                                                                    data-lazy-src="https://colorlib.com/wp/wp-content/uploads/sites/2/activello-simple-blog-theme.jpg"
                                                                    data-ll-status="loaded"
                                                                    class="entered lazyloaded"><noscript><img
                                                                        width="1200" height="900"
                                                                        src="https://colorlib.com/wp/wp-content/uploads/sites/2/activello-simple-blog-theme.jpg"
                                                                        alt="" /></noscript>
                                                            </picture>
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div
                                                    class="wpb_single_image wpb_content_element vc_align_ wpb_content_element">
                                                    <h2 class="wpb_heading wpb_singleimage_heading">Pixova - Landing
                                                        Page Theme</h2>
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="https://colorlib.com/wp/themes/pixova-lite/"
                                                            target="_self"
                                                            class="vc_single_image-wrapper wpex-image-hover grow   vc_box_border_grey">
                                                            <picture class="vc_single_image-img attachment-full"
                                                                title="pixova-multipurpose-theme">
                                                                <source type="image/webp"
                                                                    data-lazy-srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/pixova-multipurpose-theme.jpg.webp"
                                                                    srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/pixova-multipurpose-theme.jpg.webp">
                                                                <img width="1200" height="900"
                                                                    src="https://colorlib.com/wp/wp-content/uploads/sites/2/pixova-multipurpose-theme.jpg"
                                                                    alt=""
                                                                    data-lazy-src="https://colorlib.com/wp/wp-content/uploads/sites/2/pixova-multipurpose-theme.jpg"
                                                                    data-ll-status="loaded"
                                                                    class="entered lazyloaded"><noscript><img
                                                                        width="1200" height="900"
                                                                        src="https://colorlib.com/wp/wp-content/uploads/sites/2/pixova-multipurpose-theme.jpg"
                                                                        alt="" /></noscript>
                                                            </picture>
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid wpex-relative"
                                    style="margin-top: 30px;margin-bottom: 50px;">
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div
                                                    class="wpb_single_image wpb_content_element vc_align_ wpb_content_element">
                                                    <h2 class="wpb_heading wpb_singleimage_heading">Blaskan - Lifestyle
                                                        Blog Theme</h2>
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="https://colorlib.com/wp/themes/blaskan/"
                                                            target="_self"
                                                            class="vc_single_image-wrapper wpex-image-hover grow   vc_box_border_grey">
                                                            <picture class="vc_single_image-img attachment-full"
                                                                title="blaskan-preview">
                                                                <source type="image/webp"
                                                                    data-lazy-srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/blaskan-preview.jpg.webp"
                                                                    srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/blaskan-preview.jpg.webp">
                                                                <img width="1200" height="900"
                                                                    src="https://colorlib.com/wp/wp-content/uploads/sites/2/blaskan-preview.jpg"
                                                                    alt=""
                                                                    data-lazy-src="https://colorlib.com/wp/wp-content/uploads/sites/2/blaskan-preview.jpg"
                                                                    data-ll-status="loaded"
                                                                    class="entered lazyloaded"><noscript><img
                                                                        width="1200" height="900"
                                                                        src="https://colorlib.com/wp/wp-content/uploads/sites/2/blaskan-preview.jpg"
                                                                        alt="" /></noscript>
                                                            </picture>
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div
                                                    class="wpb_single_image wpb_content_element vc_align_ wpb_content_element">
                                                    <h2 class="wpb_heading wpb_singleimage_heading">Sparkling - Flat
                                                        Design Theme</h2>
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="https://colorlib.com/wp/themes/sparkling/"
                                                            target="_self"
                                                            class="vc_single_image-wrapper wpex-image-hover grow   vc_box_border_grey">
                                                            <picture class="vc_single_image-img attachment-full"
                                                                title="sparkling-free-woocommerce-wordpress-theme">
                                                                <source type="image/webp"
                                                                    data-lazy-srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/sparkling-free-woocommerce-wordpress-theme.jpg.webp"
                                                                    srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/sparkling-free-woocommerce-wordpress-theme.jpg.webp">
                                                                <img width="1600" height="1128"
                                                                    src="https://colorlib.com/wp/wp-content/uploads/sites/2/sparkling-free-woocommerce-wordpress-theme.jpg"
                                                                    alt=""
                                                                    data-lazy-src="https://colorlib.com/wp/wp-content/uploads/sites/2/sparkling-free-woocommerce-wordpress-theme.jpg"
                                                                    data-ll-status="loaded"
                                                                    class="entered lazyloaded"><noscript><img
                                                                        width="1600" height="1128"
                                                                        src="https://colorlib.com/wp/wp-content/uploads/sites/2/sparkling-free-woocommerce-wordpress-theme.jpg"
                                                                        alt="" /></noscript>
                                                            </picture>
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div
                                                    class="wpb_single_image wpb_content_element vc_align_ wpb_content_element">
                                                    <h2 class="wpb_heading wpb_singleimage_heading">Tyche - eCommerce
                                                        theme</h2>
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="https://colorlib.com/wp/themes/tyche/" target="_self"
                                                            class="vc_single_image-wrapper wpex-image-hover grow   vc_box_border_grey">
                                                            <picture class="vc_single_image-img attachment-full"
                                                                title="tyche-browser">
                                                                <source type="image/webp"
                                                                    data-lazy-srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/tyche-browser.jpg.webp"
                                                                    srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/tyche-browser.jpg.webp">
                                                                <img width="1200" height="900"
                                                                    src="https://colorlib.com/wp/wp-content/uploads/sites/2/tyche-browser.jpg"
                                                                    alt=""
                                                                    data-lazy-src="https://colorlib.com/wp/wp-content/uploads/sites/2/tyche-browser.jpg"
                                                                    data-ll-status="loaded"
                                                                    class="entered lazyloaded"><noscript><img
                                                                        width="1200" height="900"
                                                                        src="https://colorlib.com/wp/wp-content/uploads/sites/2/tyche-browser.jpg"
                                                                        alt="" /></noscript>
                                                            </picture>
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid wpex-relative"
                                    style="margin-top: 30px;margin-bottom: 50px;">
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div
                                                    class="wpb_single_image wpb_content_element vc_align_ wpb_content_element">
                                                    <h2 class="wpb_heading wpb_singleimage_heading">Newspaper X -
                                                        Magazine Theme</h2>
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <a href="https://colorlib.com/wp/themes/newspaper-x/"
                                                            target="_self"
                                                            class="vc_single_image-wrapper wpex-image-hover grow   vc_box_border_grey">
                                                            <picture class="vc_single_image-img attachment-full"
                                                                title="newspaperx-browserpsd">
                                                                <source type="image/webp"
                                                                    data-lazy-srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/newspaperx-browserpsd.jpg.webp"
                                                                    srcset="https://colorlib.com/wp/wp-content/uploads/sites/2/newspaperx-browserpsd.jpg.webp">
                                                                <img width="1200" height="900"
                                                                    src="https://colorlib.com/wp/wp-content/uploads/sites/2/newspaperx-browserpsd.jpg"
                                                                    alt=""
                                                                    data-lazy-src="https://colorlib.com/wp/wp-content/uploads/sites/2/newspaperx-browserpsd.jpg"
                                                                    data-ll-status="loaded"
                                                                    class="entered lazyloaded"><noscript><img
                                                                        width="1200" height="900"
                                                                        src="https://colorlib.com/wp/wp-content/uploads/sites/2/newspaperx-browserpsd.jpg"
                                                                        alt="" /></noscript>
                                                            </picture>
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="vc_row wpb_row vc_row-fluid wpex-relative">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <p>Couldn’t find the theme you were looking for? We have
                                                        thousands more that <a
                                                            href="https://colorlib.com/wp/popular-wordpress-themes/">you
                                                            can find here</a>.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                </article>


            </div>


        </div>


    </div>

    </div>


    @include('master.footer')
    @include('master.footer-bottom')
    <script src="{{ asset('storage/js/jquery-1.11.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('storage/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('storage/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('storage/js/script.js') }}"></script>
    <script>
        const toggleTheme = () => {
            const body = document.body;
            if (body.classList.contains('dark-mode')) {
                body.classList.remove('dark-mode');
                localStorage.setItem('theme', 'light');
            } else {
                body.classList.add('dark-mode');
                localStorage.setItem('theme', 'dark');
            }
        };

        // Apply saved theme on page load
        const savedTheme = localStorage.getItem('theme') || 'light';
        if (savedTheme === 'dark') {
            document.body.classList.add('dark-mode');
        }

        document.getElementById('theme-toggle').addEventListener('click', toggleTheme);
    </script>
    @livewireScripts

    @yield('script')
</body>

</html>
