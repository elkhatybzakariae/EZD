@extends('layouts.app')
@section('content')

<div id="content-wrap" class="container wpex-clr" >


    <div id="primary" class="content-area wpex-clr">


        <div id="content" class="site-content wpex-clr" >



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
                                            <h4>My Portfolio – A Showcase of My Work and Skills.</h4>
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
                                        <div class="wpb_text_column wpb_content_element ms-3">
                                            <div class="wpb_wrapper">
                                                <p>This website is my personal portfolio, designed to showcase
                                                    my work, skills, and professional experience.</p>
                                                <p>It serves as a central hub where visitors can explore my
                                                    projects, learn about my expertise. </p>
                                                <p>The site is built with a clean and user-friendly design to
                                                    ensure easy navigation and an engaging experience.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb-content-wrapper">

                        <div class="vc_row wpb_row vc_row-fluid wpex-relative"
                            style="margin-top: 30px;margin-bottom: 50px;">
                            @foreach ($projects as $item)
                                
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div
                                            class="wpb_single_image wpb_content_element vc_align_ wpb_content_element">
                                            <h2 class="wpb_heading wpb_singleimage_heading">{{ $item->title}}</h2>
                                            <figure class="wpb_wrapper vc_figure">
                                                <a href="{{route('project',$item->id_Pr)}}" target="_self"
                                                    class="vc_single_image-wrapper wpex-image-hover grow   vc_box_border_grey">
                                                    <picture class="vc_single_image-img"
                                                        title="flexible-wordpress-theme">
                                                        <source type="image/webp"
                                                            srcset="{{asset('storage/'. $item->pic)}}">
                                                            <img src="{{ asset('storage/' . $item->pic) }}" alt="" class="img-fluid" style="width: 100%; height: auto;">


                                                    </picture>
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>



                    {{-- <div class="vc_row wpb_row vc_row-fluid wpex-relative">
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
                    </div> --}}
                </div>
        </article>


    </div>


</div>
@endsection
