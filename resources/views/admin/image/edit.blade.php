@extends('admin.layout.master')

@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sửa hình ảnh</h4>
                        <form action="/admin/image/update" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$edit_image->id}}">

                            <div class="form-group">
                                <label for="catalogImage">Danh mục ảnh</label>
                                <select class="form-control" name="catalogImage" id="catalogImage" required>
                                    <option value="1">Hoạt động</option>
                                    <option value="0">Tắt</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <select class="form-control" name="status" id="status" required>
                                    <option value="1"
                                        @if($edit_image->status == 1)
                                        selected
                                        @endif>Hoạt động</option>
                                    <option value="0"@if($edit_image->status != 1)
                                        selected
                                        @endif>Tắt</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Hình ảnh</label>
                                <input type="file" name="image" id="image" class="form-control">
                                <img style=" width: 130px;
                                                    height: 130px;
                                                    border: none;" src="/uploads/Image/{{$edit_image->image}}" alt="" />
                                <img >
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Chỉnh sửa</button>
                        </form>
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
@endsection
