@extends('admin.layout.master')


@section('main')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card bg-success">
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col-12">
                                    <div
                                        class="d-flex align-items-center justify-content-center align-self-start">
                                        <h3 class="mb-0">5,350,960 VNĐ</h3>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-white font-weight-normal">Số dư hệ thống</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card bg-danger">
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col-12">
                                    <div
                                        class="d-flex align-items-center justify-content-center align-self-start">
                                        <h3 class="mb-0">0</h3>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-white font-weight-normal">Số Thành viên đăng ký hôm nay</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card bg-primary">
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col-12">
                                    <div
                                        class="d-flex align-items-center justify-content-center align-self-start">
                                        <h3 class="mb-0">0</h3>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-white font-weight-normal">Thành viên đăng nhập vào 15 phút trước
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card bg-warning">
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col-12">
                                    <div
                                        class="d-flex align-items-center justify-content-center align-self-start">
                                        <h3 class="mb-0">0</h3>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-white font-weight-normal">Tổng điều chỉnh trong ngày</h6>
                        </div>
                    </div>
                </div>

            </div>
            {{-- <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Báo cáo thắng thua 7 ngày gần nhất</h4>
                            <canvas id="areaChart" style="height:250px"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Báo cáo thắng thua 7 ngày gần nhất</h4>
                            <canvas id="areaChart1" style="height:250px"></canvas>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script>
            let dataBet = [];
            let dataLogRecharge = [];
            let dataLogWithdraw = [];
        </script>


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
@section('js')

@endsection
