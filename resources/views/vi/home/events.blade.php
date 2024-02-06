@extends('vi.layout.master')
<style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_1513768698487 {
        padding-top: 90px !important;
    }

    .vc_custom_1532514617438 {
        padding-top: 45px !important;
    }

    .vc_custom_1532514617438 {
        padding-top: 45px !important;
    }
</style>


@section('main')
<div class="page-wrapper">
    <div class="classic">
        <div class="row">
            <div class="small-12 columns small-centered blog-content">
                <div class="row-wrapper  vc_custom_1513768698487">
                    <div class="">
                        <div class="large-12 columns">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="custom-styles" data-styles=".id_165309f05d6a70173746301 .post-meta li a, .id_165309f05d6a70173746301 .post-meta { color: #333333 } .id_165309f05d6a70173746301 .link-hover:after {background:#333333}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                </div>
                @foreach ($get_event as $get_events)
                    <div class="row-wrapper  vc_custom_1532514617438">
                        <div class="menu_page_row menu_page_row1 vc_row-o-content-middle vc_row-flex">
                            <div class="large-4 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper img-wrapper vc_box_border_grey">
                                                    <img width="1339" height="2048" src="/uploads/Event/images/{{$get_events->image}}" class="vc_single_image-img attachment-full" alt="" srcset="/uploads/Event/images/{{$get_events->image}} 1339w, /uploads/Event/images/{{$get_events->image}} 196w, /uploads/Event/images/{{$get_events->image}} 768w, /uploads/Event/images/{{$get_events->image}} 670w" sizes="(max-width: 1339px) 100vw, 1339px"/>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-8 columns">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p style="text-align: center;">
                                                    <strong>{{$get_events->title}}</strong>
                                                </p>
                                                <div class="event-content">{{$get_events->content}}</div>

                                                <p style="text-align: center;">
                                                    <a href="{{$get_events->linkMenu}}" target="_blank" rel="noopener noreferrer">Xem thực đơn</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </div>
                @endforeach
                {{-- <div class="row-wrapper  vc_custom_1532514617438">
                    <div class="menu_page_row menu_page_row1 vc_row-o-content-middle vc_row-flex">
                        <div class="large-4 columns">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_left">
                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper img-wrapper   vc_box_border_grey">
                                                <img width="843" height="1289" src="https://www.soraesushi.com/wp-content/uploads/2023/10/387197023_357553323280198_477428471434370436_n.jpg" class="vc_single_image-img attachment-full" alt="" srcset="https://www.soraesushi.com/wp-content/uploads/2023/10/387197023_357553323280198_477428471434370436_n.jpg 843w, https://www.soraesushi.com/wp-content/uploads/2023/10/387197023_357553323280198_477428471434370436_n-196x300.jpg 196w, https://www.soraesushi.com/wp-content/uploads/2023/10/387197023_357553323280198_477428471434370436_n-768x1174.jpg 768w, https://www.soraesushi.com/wp-content/uploads/2023/10/387197023_357553323280198_477428471434370436_n-670x1024.jpg 670w" sizes="(max-width: 843px) 100vw, 843px"/>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="large-8 columns">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p style="text-align: center;">
                                                <strong>SEAFOOD FEAST &#8211;DIVE INTO OCEAN DELIGHTS</strong>
                                            </p>
                                            <p style="text-align: center;">
                                                Canada Lobster Only At 2,900,000++/Kg<br/>Một chút tinh khiết của hải sản tươi sống, một chút hài hòa đậm đà từ sốt thượng hạng, một chút chấm phá nhẹ nhàng từ bàn tay điêu luyện của bếp tưởng Tuấn Anh, tất cả quyện hòa trong khoang miệng, mang đến cho thực khách những giác quan khó quên.
                                            </p>
                                            <p style="text-align: center;">SORAE luôn đảm bảo chất lượng và độ tươi sống tối ưu của những loại hải sản cao cấp như Tôm Hùm Canada, Tôm Hùm Đá, Cua Hoàng Đế hoặc Bào Ngư,.. với phương pháp sử dụng hồ nuôi chuyên dụng để kiểm soát nhiệt độ cùng môi trường sống. Điều này khẳng định rằng từng món ăn luôn giữ được vị tươi ngọt vốn có khi đến với thực khách.</p>
                                            <p style="text-align: center;">Đặt bàn ngay để được đội ngũ chuyên nghiệp tại SORAE tư vấn cho bạn!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                </div> --}}
            </div>
            <div class="small-12 columns small-centered blog-content"></div>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
        var html = $('.event-content').text();
        html.outerHTML;
        console.log(html);
        $('.event-content').html(html);
    </script>
@endsection
@section('js')
@endsection
