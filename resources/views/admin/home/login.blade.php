<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng Nhập Quản Lý Mocadining </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('/admin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('/admin/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('/admin/images/favicon.png')}}" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


</head>

<body>
    <style>
        select:focus,
        select,
        select::placeholder {
            color: #fff !important;
        }

        input {
            color: #fff !important;
        }
    </style>
    <div class="container-scroller">
        @include('elements.loading')
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Đăng nhập</h3>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="text" name="email" class="form-control p_input email">
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu *</label>
                                <input type="password" name="password" class="form-control p_input password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn login-admin">Đăng
                                    nhập</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('/admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('/admin/js/off-canvas.js')}}"></script>
    <script src="{{asset('/admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('/admin/js/misc.js')}}"></script>
    <script src="{{asset('/admin/js/settings.js')}}"></script>
    <script src="{{asset('/admin/js/todolist.js')}}"></script>
    <!-- endinject -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @include('elements.toastr')

    <script>
        $(document).on("click",".login-admin",function() {
            Loading.show();
            var email = $('.email').val();
            var password = $('.password').val();
            axios({
                    method: 'post',
                    url: '/admin/postLogin',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        email: email,
                        password:password
                    }
                }).then(function (response) {
                    window.location='/admin/index';
                    Toastr.success(response.data);
                }).catch(function(error) {
                    Toastr.error(error.response.data);
                }).finally(function() {
                    Loading.hide();
                });
        });
    </script>
</body>

</html>
