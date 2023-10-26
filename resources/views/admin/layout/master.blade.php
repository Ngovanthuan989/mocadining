<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="Sj9hFGWgvAkFjW7mPbaPgIGWP7h4RrdwBGC7BidI">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('/admin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('/admin/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('/admin/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('/admin/images/favicon.png')}}" />

    <script src="{{asset('/admin/filemanager/bundle/filemanager.min.js')}}"></script>
    <script>
        filemanager.baseUrl = '{{asset('/admin/public/filemanager')}}';
    </script>
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

        .loadding {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: #00000073;
            display: none;
            z-index: 99999999999;
        }

        .loadding.active {
            display: block;
        }

        .loadding-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <div class="loadding">
        <div class="loadding-icon">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden"></span>
            </div>
        </div>
    </div>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="/admin/index"><img
                        style="height: 56px;" src="/admin/storage/1716/MOCADINING.png" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="index.html"><img
                    src="/admin/storage/1716/MOCADINING.png" alt="logo" /></a>
            </div>

            @include('admin.layout.nav')

        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->

            @include('admin.layout.header')

            <!-- partial -->

            @yield('main')

            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
        <!-- container-scroller -->
    <!-- plugins:js -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
     <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('/admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('/admin/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admin/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('/admin/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('/admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('/admin/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('/admin/js/off-canvas.js')}}"></script>
    <script src="{{asset('/admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('/admin/js/misc.js')}}"></script>
    <script src="{{asset('/admin/js/settings.js')}}"></script>
    <script src="{{asset('/admin/js/todolist.js')}}"></script>
    <script src="{{asset('/admin/js/main.js?ver=1695700571')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('/admin/js/dashboard.js')}}"></script>
    <script src="{{asset('/admin/js/chart.js?ver=17')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $(".navbar-toggler-right").click(function() {
                $(".sidebar-offcanvas").toggleClass("active");
            });
        });
    </script>
    <script>
        let input = document.getElementById("comment");
        input.addEventListener("keypress", function(event) {
            // If the key pressed was the "Enter" key
            if (event.keyCode === 13) {
                // Prevent the form from submitting
                event.preventDefault();
            }
        });
    </script>
    {{-- <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script> --}}

    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="https://cdn.tiny.cloud/1/ra07npuj7d7sgobqeryn7lhveuqea3xducm3snej7xlzsmpp/tinymce/4/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        window.onload = function() {

            tinymce.init({
                selector: '#input-textarea-none',
                height: 200,
                plugins: 'image',
                toolbar: 'bold italic underline | image',
                branding: false,
                file_browser_callback: filemanager.tinyMceCallback
            });

        };
    </script>
    <script>
        CKEDITOR.replace('content');
        CKEDITOR.replace('describe');
        CKEDITOR.replace('description');
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // const flatpickr = require("flatpickr");
        flatpickr("#timeRemainStart", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });

        flatpickr("#timeRemainEnd", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });

        $(function() {
            $("#datepicker").datepicker({
                dateFormat: 'yy-mm-dd'
            });
            $("#datepicker1").datepicker({
                dateFormat: 'yy-mm-dd'
            });
        });
    </script>
    <script>
        function getInput(id) {
            dataInput =
                `<div class="form-group d-flex" style="gap: 10px"><select class="form-control" name="post-${id}" id="post-${id}" required>`;
            dataInput += $('#data-input').html();
            dataInput += `</select><a href="" class="btn btn-danger">Xóa</a></div>`;
            return dataInput;
        }

        let id = $('#data-input').data('id');
        $('#add').click(function() {
            $('#add-form').append(getInput(id));
            id++;
        })
    </script>
    <script>
        $('#status-product').change(function() {
            let status = $(this).val();
            if (status == 0) {
                $('#show-remain').removeClass('d-none');
            } else {
                $('#show-remain').addClass('d-none');
            }
        })
        $('input[name=testVoucher]').click(function() {
            if ($(this).val() == 0) {
                $('#bet_valid').parent().addClass('d-none');
            } else {
                $('#bet_valid').parent().removeClass('d-none');
            }
        })
        $('#cancelButton').click(function() {
            $('.loadding').addClass('active');
        })
        $('#acceptButton').click(function() {
            $('.loadding').addClass('active');
        })
    </script>

    <script>
        if (window.location.protocol.indexOf('https') == 0) {
            var el = document.createElement('meta')
            el.setAttribute('http-equiv', 'Content-Security-Policy')
            el.setAttribute('content', 'upgrade-insecure-requests')
            document.head.append(el)
        }
    </script>
    <script>
        function deleteAccount(id) {
            Swal.fire({
                title: 'Bạn có chắc muốn xóa?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý',
                cancelButtonText: 'Từ chối'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(`#deletePlayer${id}`).submit();
                }
            })
        }
    </script>
    <!-- End custom js for this page -->
</body>

</html>
