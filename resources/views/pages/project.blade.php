@extends('layouts.app')
@section('content')

<div id="content-wrap" class="container wpex-clr">


    <div id="primary" class="content-area wpex-clr">


        <div id="content" class="site-content wpex-clr">



            <article id="single-blocks" class="single-page-article wpex-clr">
                <div class="single-page-content single-content entry wpex-clr">
                    <div class="wpb-content-wrapper">

                        <div class="vc_row wpb_row vc_row-fluid wpex-relative"
                            style="margin-top: 30px;margin-bottom: 50px;">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div
                                            class="wpb_single_image wpb_content_element vc_align_ wpb_content_element">
                                            <h1 class="wpb_heading wpb_singleimage_heading">{{ $project->title}}</h1>
                                            <hr>
                                            <figure class="wpb_wrapper vc_figure">
                                                <a href="#" target="_self"
                                                    class="vc_single_image-wrapper wpex-image-hover grow   vc_box_border_grey">
                                                    <picture class="vc_single_image-img"
                                                        title="flexible-wordpress-theme">
                                                        <source type="image/webp"
                                                            srcset="{{asset('storage/'. $project->pic)}}">
                                                            <img src="{{ asset('storage/' . $project->pic) }}" alt="" class="img-fluid" style="width: 100%; height: auto;">


                                                    </picture>
                                                </a>
                                            </figure>
                                            <div class="d-flex justify-content-center">
                                                <a class="btn text-white" data-mdb-ripple-init style="background-color: #ffac44;" href="#!" role="button">
                                                    Demo
                                                </a>
                                            </div>
                                            <p>
                                                {{ $project->description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
