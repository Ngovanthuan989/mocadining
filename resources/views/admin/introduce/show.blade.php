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
                                            {{-- <th>Hình ảnh</th> --}}
                                            <th>Ngày tạo</th>
                                            <th>Trạng thái</th>
                                            <th>Tác vụ</th>
                                        </tr>
                                    </thead>
                                    <tbody id="content-body">
                                        @foreach ($get_introduce as $get_introduces)
                                            <tr>
                                                <td>{{$get_introduces->id}}</td>
                                                <td>{{$get_introduces->title}}</td>
                                                <td>{{$get_introduces->content}}</td>
                                                <td>
                                                    @if ($get_introduces->status == 1) Hoạt động @else tắt @endif
                                                </td>
                                                {{-- <td><img style=" width: 130px;
                                                    height: 130px;
                                                    border: none;" src="/uploads/Introduce/images/{{$get_introduces->image}}" alt="" /></td> --}}
                                                <td>{{$get_introduces->created_at}}</td>
                                                <td class="d-flex" style="gap: 10px">
                                                    <a href="/admin/introduce/edit/{{$get_introduces->id}}"
                                                        class="btn-success px-3"
                                                        style="border-radius:5px;display:flex;align-items: center;">Sửa</a>
                                                    {{-- <a href="/admin/promotion/47/edit?locale=th"
                                                        class="btn-success px-3"
                                                        style="border-radius:5px;display:flex;align-items: center;">th</a>
                                                    <a href="/admin/promotion/47/edit?locale=vi"
                                                        class="btn-success px-3"
                                                        style="border-radius:5px;display:flex;align-items: center;">vi</a> --}}
                                                    <form action="/admin/introduce/delete" method="POST">
                                                        @csrf
                                                         <input
                                                            name="id" type="hidden" value="{{$get_introduces->id}}">
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
