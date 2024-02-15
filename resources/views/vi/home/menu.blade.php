@extends('vi.layout.master')


@section('main')
    <div class="page-wrapper">

        <div class="classic">
            <div class="row">
                <div class="small-12 columns small-centered blog-content">
                    <div class="row-wrapper  vc_custom_1515136464192">
                        <div class="vc_row-o-content-middle vc_row-flex">
                            <div class="text_align_center large-8 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vc_empty_space">
                                            <span class="vc_empty_space_inner"></span>
                                            <div class="" style="height: 32px"></div>
                                        </div>

                                        <div class="vc_empty_space">
                                            <span class="vc_empty_space_inner"></span>
                                            <div class="" style="height: 32px"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </div>
                    @foreach ($get_menu as $get_menus)
                        <div class="row-wrapper  vc_custom_1515136464192">
                            <div class="vc_row-o-content-middle vc_row-flex">
                                <div class="text_align_center large-8 columns">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element  animate-text">
                                                <div class="wpb_wrapper">
                                                    <h3>{{$get_menus->title}}</h3>
                                                </div>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element  animate-text">
                                                <div class="wpb_wrapper menu-describe{{$get_menus->id}}">
                                                    {{$get_menus->describe}}
                                                </div>
                                            </div>
                                            <div class="text-left animate-text"><a
                                                    href="/uploads/Menu/pdf/{{$get_menus->pdfMenu}}"
                                                    target="_blank" class="btn btn-md btn-border-animate btn-dark   ">
                                                    <span class="btn-text ">Xem Thực Đơn<span class="top button-border"></span>
                                                        <span class="left left-bottom button-border"></span>
                                                        <span class="left left-top button-border"></span>
                                                        <span class="bottom bottom-right button-border"></span>
                                                        <span class="bottom bottom-left button-border"></span>
                                                        <span class="right button-border"></span></span>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="large-4 columns">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_left">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div
                                                        class="vc_single_image-wrapper img-wrapper vc_box_border_grey loaded-img">
                                                        <img width="2240" height="3360"
                                                            src="/uploads/Menu/images/{{$get_menus->image}}"
                                                            class="vc_single_image-img attachment-full" alt=""
                                                            srcset="/uploads/Menu/images/{{$get_menus->image}} 2240w, /uploads/Menu/images/{{$get_menus->image}} 200w, /uploads/Menu/images/{{$get_menus->image}} 768w, /uploads/Menu/images/{{$get_menus->image}} 683w"
                                                            sizes="(max-width: 2240px) 100vw, 2240px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                        </div>
                    @endforeach
                    {{-- <div class="row-wrapper  vc_custom_1515136373690">
                        <div class="vc_row-o-content-middle vc_row-flex">
                            <div class="large-4 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left">

                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper img-wrapper   vc_box_border_grey"><img
                                                        width="1365" height="2048"
                                                        src="/mocadining.com/wp-content/uploads/2023/10/vegetarian.jpeg"
                                                        class="vc_single_image-img attachment-full" alt=""
                                                        srcset="/mocadining.com/wp-content/uploads/2023/10/vegetarian.jpeg 1365w, /mocadining.com/wp-content/uploads/2023/10/vegetarian.jpeg 200w, /mocadining.com/wp-content/uploads/2023/10/vegetarian.jpeg 768w, /mocadining.com/wp-content/uploads/2023/10/vegetarian.jpeg 683w"
                                                        sizes="(max-width: 1365px) 100vw, 1365px"></div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text_align_center large-8 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element  animate-text">
                                            <div class="wpb_wrapper">
                                                <h3>Thực đơn trưa</h3>

                                            </div>
                                        </div>
                                        <div class="text-left animate-text"><a
                                                href="https://www.soraesushi.com/wp-content/uploads/2023/10/LUNCH-BENTO-MENU.pdf"
                                                target="_blank" class="btn btn-md btn-border-animate btn-dark   ">
                                                <span class="btn-text ">Xem Thực Đơn<span class="top button-border"></span>
                                                    <span class="left left-bottom button-border"></span>
                                                    <span class="left left-top button-border"></span>
                                                    <span class="bottom bottom-right button-border"></span>
                                                    <span class="bottom bottom-left button-border"></span>
                                                    <span class="right button-border"></span></span>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </div>
                    <div class="row-wrapper  vc_custom_1515136373690">
                        <div class="vc_row-o-content-middle vc_row-flex">
                            <div class="text_align_center large-8 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element  animate-text">
                                            <div class="wpb_wrapper">
                                                <h3>Thực đơn tối</h3>

                                            </div>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element  animate-text">
                                            <div class="wpb_wrapper">
                                                <p>Set menu dành cho 1 người. Mỗi set menu chỉ phục vụ cho tối thiểu từ 2
                                                    người trở lên.</p>

                                            </div>
                                        </div>
                                        <div class="text-left animate-text"><a
                                                href="https://www.soraesushi.com/wp-content/uploads/2023/10/SR_SET-MENU-PREMIUM_compressed.pdf"
                                                target="_blank" class="btn btn-md btn-border-animate btn-dark   ">
                                                <span class="btn-text ">Xem Thực Đơn<span class="top button-border"></span>
                                                    <span class="left left-bottom button-border"></span>
                                                    <span class="left left-top button-border"></span>
                                                    <span class="bottom bottom-right button-border"></span>
                                                    <span class="bottom bottom-left button-border"></span>
                                                    <span class="right button-border"></span></span>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left">

                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper img-wrapper   vc_box_border_grey"><img
                                                        width="900" height="1200"
                                                        src="https://www.soraesushi.com/wp-content/uploads/2023/10/sorae-anh-menu-toi.jpg"
                                                        class="vc_single_image-img attachment-full" alt=""
                                                        srcset="https://www.soraesushi.com/wp-content/uploads/2023/10/sorae-anh-menu-toi.jpg 900w, https://www.soraesushi.com/wp-content/uploads/2023/10/sorae-anh-menu-toi-225x300.jpg 225w, https://www.soraesushi.com/wp-content/uploads/2023/10/sorae-anh-menu-toi-768x1024.jpg 768w"
                                                        sizes="(max-width: 900px) 100vw, 900px"></div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </div>
                    <div class="row-wrapper  vc_custom_1515136470628">
                        <div class="vc_row-o-content-middle vc_row-flex">
                            <div class="large-4 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left">

                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper img-wrapper   vc_box_border_grey"><img
                                                        width="2730" height="4095"
                                                        src="https://www.soraesushi.com/wp-content/uploads/2023/05/8.jpg"
                                                        class="vc_single_image-img attachment-full" alt=""
                                                        srcset="https://www.soraesushi.com/wp-content/uploads/2023/05/8.jpg 2730w, https://www.soraesushi.com/wp-content/uploads/2023/05/8-200x300.jpg 200w, https://www.soraesushi.com/wp-content/uploads/2023/05/8-768x1152.jpg 768w, https://www.soraesushi.com/wp-content/uploads/2023/05/8-683x1024.jpg 683w"
                                                        sizes="(max-width: 2730px) 100vw, 2730px"></div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-8 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element  animate-text">
                                            <div class="wpb_wrapper">
                                                <h3>Thực đơn đồ uống</h3>

                                            </div>
                                        </div>
                                        <div class="text-left animate-text"><a
                                                href="https://www.soraesushi.com/wp-content/uploads/2023/10/SR_DRINK-MENU-1010_compressed.pdf"
                                                target="_blank" class="btn btn-md btn-border-animate btn-dark   ">
                                                <span class="btn-text ">Xem Thực Đơn<span
                                                        class="top button-border"></span>
                                                    <span class="left left-bottom button-border"></span>
                                                    <span class="left left-top button-border"></span>
                                                    <span class="bottom bottom-right button-border"></span>
                                                    <span class="bottom bottom-left button-border"></span>
                                                    <span class="right button-border"></span></span>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </div> --}}
                </div>
                <div class="small-12 columns small-centered blog-content">
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script>
        var html = $('.menu-describe61').text();
        html.outerHTML;
        console.log(html);
        $('.menu-describe61').html(html);

        var html63 = $('.menu-describe63').text();
        html63.outerHTML;
        console.log(html63);
        $('.menu-describe63').html(html63);

        var html64 = $('.menu-describe64').text();
        html64.outerHTML;
        console.log(html64);
        $('.menu-describe64').html(html64);
    </script>
@endsection
@section('js')
@endsection
