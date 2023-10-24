@extends('admin.layout.master')

@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sửa thực đơn</h4>
                        <form action="/admin/menu/update" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$edit_menu->id}}">
                            <div class="form-group">
                                <label for="title">Tiêu đề</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Tiêu đề" value="{{$edit_menu->title}}" required>
                            </div>

                            <div class="form-group">
                                <label for="subtitle">Mô tả thực đơn</label><br>
                                <textarea name="describe" id="my-editor">{{$edit_menu->describe}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <select class="form-control" name="status" id="status" required>
                                    <option value="1"
                                        @if($edit_menu->status == 1)
                                        selected
                                        @endif>Hoạt động</option>
                                    <option value="0"@if($edit_menu->status != 1)
                                        selected
                                        @endif>Tắt</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Hình ảnh</label>
                                <input type="file" name="image" id="image" class="form-control">
                                <img style=" width: 130px;
                                                    height: 130px;
                                                    border: none;" src="/uploads/Menu/images/{{$edit_menu->image}}" alt="" />
                                <img >
                            </div>
                            <div class="form-group">
                                <label for="">Chi tiết thực đơn</label>
                                <input type="file" name="pdfMenu" id="pdfMenu" class="form-control">
                                <p>{{$edit_menu->pdfMenu}}</p>
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
