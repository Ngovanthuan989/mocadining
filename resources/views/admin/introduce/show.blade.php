@extends('admin.layout.master')

@section('main')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Danh sách giới thiệu</h4>
                            <a href="/admin/introduce/create" class="btn btn-success p-2 px-5 mb-3">Thêm
                                mới</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tiêu đề</th>
                                            <th>Nội dung</th>
                                            <th>Hình ảnh</th>
                                            <th>Ngày tạo</th>
                                            <th>Trạng thái</th>
                                            <th>Tác vụ</th>
                                        </tr>
                                    </thead>
                                    <tbody id="content-body">
                                        {{-- @foreach ($get_promotion as $get_promotions)
                                            <tr>
                                                <td>{{$get_promotions->id}}</td>
                                                <td>{{$get_promotions->title}}</td>
                                                <td>{{$get_promotions->max_number}}</td>
                                                <td>{{$get_promotions->min_amount}}</td>
                                                <td>{{$get_promotions->max_amount}}</td>
                                                <td>{{$get_promotions->percent}}</td>
                                                <td>{{$get_promotions->betting_round}}</td>
                                                <td>{{$get_promotions->sequence}}</td>
                                                <td>
                                                    @if ($get_promotions->status == 1)Hoạt động @else vô hiệu hoá @endif
                                                </td>
                                                <td>{{$get_promotions->time_start}}</td>
                                                <td>{{$get_promotions->time_end}}</td>
                                                <td>{{$get_promotions->created_at}}</td>
                                                <td class="d-flex" style="gap: 10px">
                                                    <a href="https://1368iii.com/admin/promotion/47/edit"
                                                        class="btn-success px-3"
                                                        style="border-radius:5px;display:flex;align-items: center;">Sửa</a>
                                                    <a href="https://1368iii.com/admin/promotion/47/edit?locale=th"
                                                        class="btn-success px-3"
                                                        style="border-radius:5px;display:flex;align-items: center;">th</a>
                                                    <a href="https://1368iii.com/admin/promotion/47/edit?locale=vi"
                                                        class="btn-success px-3"
                                                        style="border-radius:5px;display:flex;align-items: center;">vi</a>
                                                    <form action="https://1368iii.com/admin/promotion/47" method="POST">
                                                        <input type="hidden" name="_token"
                                                            value="bZaLqCQlVReQKz3ogxzYGR316RSRvPrm8Ld7MQ4R"> <input
                                                            name="_method" type="hidden" value="DELETE">
                                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between"
                style="justify-content: end !important;">
                <span style="    color: gold !important;"
                    class="text-muted d-block text-center text-sm-left d-sm-inline-block"></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
@endsection

@section('js')
@endsection
