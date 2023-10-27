@extends('admin.layout.master')

@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cập nhập liên hệ</h4>
                        <form action="/admin/contact/update" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$edit_contact->id}}">

                            <div class="form-group">
                                <label for="name">Tên Website</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Tên Website" value="{{$edit_contact->name}}" required>
                            </div>

                            <div class="form-group">
                                <label for="name_cty">Tên Công Ty</label>
                                <input type="text" name="name_cty" class="form-control" id="name_cty"
                                    placeholder="Tên Công Ty" value="{{$edit_contact->name_cty}}" required>
                            </div>


                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <input type="text" name="address" class="form-control" id="address"
                                    placeholder="Địa Chỉ" value="{{$edit_contact->address}}" required>
                            </div>

                            <div class="form-group">
                                <label for="address">Email</label>
                                <input type="text" name="email" class="form-control" id="email"
                                    placeholder="Email" value="{{$edit_contact->email}}" required>
                            </div>

                            <div class="form-group">
                                <label for="hotline">Hotline</label>
                                <input type="text" name="hotline" class="form-control" id="hotline"
                                    placeholder="Hotline" value="{{$edit_contact->hotline}}" required>
                            </div>

                            <div class="form-group">
                                <label for="">Hình ảnh</label>
                                <input type="file" name="image" id="image" class="form-control">
                                <img style=" width: 130px;
                                                    height: 130px;
                                                    border: none;" src="/uploads/Contact/images/{{$edit_contact->image}}" alt="" />
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
