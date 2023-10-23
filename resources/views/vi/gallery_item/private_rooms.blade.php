@extends('vi.layout.master')


@section('main')
    <div class="page-wrapper">


        <div class="single-gallery page-padding-top">
            <div class="row">
                <div class="small-12 large-8 columns large-centered">
                    <div class="single-post-nav">
                        <div class="previous-post arrow-prev">
                        </div>
                        <div class="back-to-blog icon-close">
                            <a href="/"><svg id="icon-back-page" class="icon"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="15px" viewBox="0 0 60 60" preserveAspectRatio="xMidYMid meet"
                                    zoomAndPan="disable">
                                    <line id="line_back" x1="0" y1="0" x2="60" y2="60"
                                        stroke="#171717"
                                        style="stroke-width: 1px; vector-effect: non-scaling-stroke; fill: none;" />
                                    <line x1="60" y1="0" x2="0" y2="60" stroke="#171717"
                                        style="stroke-width: 1px; vector-effect: non-scaling-stroke; fill: none;" />
                                </svg>
                            </a>
                        </div>
                        <div class="next-post arrow-next">
                            <a href="/vi/gallery_item/excusive-event/" rel="prev"><svg
                                    id="icon-big-arrow-next" xmlns="http://www.w3.org/2000/svg" class="arrow-svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="90px" height="50px"
                                    viewBox="0 0 100 50" preserveAspectRatio="xMidYMid meet" zoomAndPan="disable">
                                    <line class="arrow-svg-hor" shape-rendering="crispEdges" x1="0" y1="25"
                                        x2="100" y2="25" />
                                    <line class="arrow-svg-ver" x1="90" y1="15" x2="100"
                                        y2="25" />
                                    <line class="arrow-svg-ver" x1="90" y1="35" x2="100"
                                        y2="25" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="position: relative;">
                <div class="small-12 large-10 large-centered columns">
                    <div class="single-gallery-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2023/05/4.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/16402694_1567722506572969_8878052306239921868_o.jpg" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/Bonsai-Rooms.jpg" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/DSC_5981-1.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/DSC_5997-1.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/DSC_5998-1.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/Geisha-Room.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/Ginza-Room.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/Hoshi-Room.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/IMG_0004-1.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/IMG_0005-1.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/IMG_0006-1.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/IMG_0007-1.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/IMG_0008-1.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/IMG_0009-1.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/IMG_0010-1.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/IMG_0011.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/IMG_0028.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/IMG_9929.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/IMG_9931.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/IMG_9932.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/IMG_9933.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/IMG_9984.jpg" /></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/Sakura-Room.jpg" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/Sorae-sushi-final-3.jpg" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/Sorae-sushi-final-16.jpg" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/Sorae-sushi-final-19.jpg" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide"><img
                                        src="https://www.soraesushi.com/wp-content/uploads/2018/01/Sorae-sushi-final-24.jpg" />
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="single-gallery-arrows show-for-large swiper-arrows">
                        <div class="arrow-slide arrow-prev">
                            <svg id="icon-big-arrow-prev" xmlns="http://www.w3.org/2000/svg" class="arrow-svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="90px" height="50px"
                                viewBox="0 0 100 50" preserveAspectRatio="xMidYMid meet" zoomAndPan="disable">
                                <line class="arrow-svg-hor" shape-rendering="crispEdges" x1="0" y1="25"
                                    x2="100" y2="25" />
                                <line class="arrow-svg-ver" x1="0" y1="25" x2="10"
                                    y2="15" />
                                <line class="arrow-svg-ver" x1="0" y1="25" x2="10"
                                    y2="35" />
                            </svg>
                        </div>
                        <div class="arrow-slide arrow-next">
                            <svg id="icon-big-arrow-next" xmlns="http://www.w3.org/2000/svg" class="arrow-svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="90px" height="50px"
                                viewBox="0 0 100 50" preserveAspectRatio="xMidYMid meet" zoomAndPan="disable">
                                <line class="arrow-svg-hor" shape-rendering="crispEdges" x1="0" y1="25"
                                    x2="100" y2="25" />
                                <line class="arrow-svg-ver" x1="90" y1="15" x2="100"
                                    y2="25" />
                                <line class="arrow-svg-ver" x1="90" y1="35" x2="100"
                                    y2="25" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="small-12 large-10 large-centered columns">
                    <div class="page-header">
                        <div class="header">
                            <h3>Private Rooms</h3>
                            <div class="post-meta">
                                <ul>
                                    <li>Share on:</li>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.soraesushi.com%2Fgallery_item%2Fprivate-rooms%2F"
                                            class="no-rd social-share link-hover" data-djax-exclude="true">Facebook</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-gallery-content">
                        <div class="content">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('js')
@endsection
