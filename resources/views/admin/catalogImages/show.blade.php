@extends('admin.layout.master')

@section('main')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Danh sách danh mục hình ảnh</h4>
                            <a href="/admin/catalog-image/create" class="btn btn-success p-2 px-5 mb-3">Thêm
                                mới</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tiêu đề</th>
                                            {{-- <th>Nội dung</th> --}}
                                            {{-- <th>Hình ảnh</th> --}}
                                            <th>Trạng thái</th>
                                            <th>Ngày tạo</th>
                                            <th>Tác vụ</th>
                                        </tr>
                                    </thead>
                                    <tbody id="content-body">
                                        @foreach ($get_catalogImage as $get_catalogImages)
                                            <tr>
                                                <td>{{$get_catalogImages->id}}</td>
                                                <td>{{$get_catalogImages->title}}</td>
                                                {{-- <td>{{$get_events->content}}</td> --}}
                                                <td>
                                                    @if ($get_catalogImages->status == 1) Hoạt động @else tắt @endif
                                                </td>
                                                {{-- <td><img style=" width: 130px;
                                                    height: 130px;
                                                    border: none;" src="/uploads/Introduce/images/{{$get_introduces->image}}" alt="" /></td> --}}
                                                <td>{{$get_catalogImages->created_at}}</td>
                                                <td class="d-flex" style="gap: 10px">
                                                    <a href="/admin/catalog-image/edit/{{$get_catalogImages->id}}"
                                                        class="btn-success px-3"
                                                        style="border-radius:5px;display:flex;align-items: center;">Sửa</a>
                                                    {{-- <a href="/admin/promotion/47/edit?locale=th"
                                                        class="btn-success px-3"
                                                        style="border-radius:5px;display:flex;align-items: center;">th</a>
                                                    <a href="/admin/promotion/47/edit?locale=vi"
                                                        class="btn-success px-3"
                                                        style="border-radius:5px;display:flex;align-items: center;">vi</a> --}}
                                                    <form action="/admin/catalog-image/delete" method="POST">
                                                        @csrf
                                                         <input
                                                            name="id" type="hidden" value="{{$get_catalogImages->id}}">
                                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
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
