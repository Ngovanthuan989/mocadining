@extends('admin.layout.master')

@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sửa tin tức</h4>
                        <form action="/admin/news/update" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$edit_news->id}}">
                            <div class="form-group">
                                <label for="title">Tiêu đề</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Tiêu đề" value="{{$edit_news->title}}" required>
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" name="slug" class="form-control" id="slug"
                                    placeholder="Slug" value="{{$edit_news->slug}}" required>
                            </div>

                            <div class="form-group">
                                <label for="subtitle">Nội dung</label><br>
                                <textarea name="content" id="my-editor">{{$edit_news->content}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="subtitle">Mô tả chi tiết</label><br>
                                <textarea name="description" id="my-editor">{{$edit_news->description}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <select class="form-control" name="status" id="status" required>
                                    <option value="1"
                                        @if($edit_news->status == 1)
                                        selected
                                        @endif>Hoạt động</option>
                                    <option value="0"@if($edit_news->status != 1)
                                        selected
                                        @endif>Tắt</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Hình ảnh</label>
                                <input type="file" name="image" id="image" class="form-control">
                                <img style=" width: 130px;
                                                    height: 130px;
                                                    border: none;" src="/uploads/News/images/{{$edit_news->image}}" alt="" />
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
