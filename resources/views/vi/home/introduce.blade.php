@extends('vi.layout.master')


@section('main')
    <div class="page-wrapper">

        <div class="classic">
            <div class="row">
                <div class="small-12 columns small-centered blog-content">
                    @foreach ($get_introduce as $get_introduces)
                        <div class="row-wrapper  vc_custom_1516090860441">
                            <div class="vc_row-o-content-middle vc_row-flex">
                                <div class="large-8 columns">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element  animate-text">
                                                <div class="wpb_wrapper">
                                                    <h3>{{$get_introduces->title}}</h3>
                                                    <p class="introduce-content">{{$get_introduces->content}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="large-4 columns">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_left">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper img-wrapper   vc_box_border_grey"><img
                                                            width="4095" height="2730"
                                                            src="/uploads/Introduce/images/{{$get_introduces->image}}"
                                                            class="vc_single_image-img attachment-full" alt=""
                                                            srcset="/uploads/Introduce/images/{{$get_introduces->image}} 4095w, /uploads/Introduce/images/{{$get_introduces->image}} 300w, /uploads/Introduce/images/{{$get_introduces->image}} 768w, /uploads/Introduce/images/{{$get_introduces->image}} 1024w, /uploads/Introduce/images/{{$get_introduces->image}} 680w"
                                                            sizes="(max-width: 4095px) 100vw, 4095px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                        </div>
                    @endforeach

                </div>
                <div class="small-12 columns small-centered blog-content">
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script>
       var html = $('.introduce-content').text();
       html.outerHTML;
       console.log(html);
       $('.introduce-content').html(html);
   </script>
@endsection
@section('js')

@endsection
