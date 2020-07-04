@extends('master.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-5">
                <div class="container bg-light">
                    <div class="p-2">
                        <h5><i class="fas fa-gift"></i> Chương trình khuyến mãi</h5>
                    </div>
                    <ul class="pb-2 list-group list-group-flush">
                        <li class="list-group-item"> <input type="checkbox" aria-label="Checkbox for following text input"> Tri ân khách hàng VIP</li>
                        <li class="list-group-item"> <input type="checkbox" aria-label="Checkbox for following text input"> Tặng 1 lon 7up cho toàn bộ khách hàng</li>
                        <li class="list-group-item"> <input type="checkbox" aria-label="Checkbox for following text input"> Mua 3 phần cơm tặng 3 ly lon cocacola</li>
                        <li class="list-group-item"> <input type="checkbox" aria-label="Checkbox for following text input"> Sinh nhật cửa hàng</li>
                        <li class="list-group-item"> <input type="checkbox" aria-label="Checkbox for following text input"> Tặng khoai tây chiên</li>
                    </ul>
                </div>
            </div>

            <!-- Right column -->
            <div class="bg-light container_right container col-7">
                    <div class="p-2 d-flex text-center">
                        <button class="mr-2 btn btn-primary btn-sm"><i class="fas fa-angle-double-left"></i></button>
                        <button class="mr-2 btn btn-primary btn-sm"><i class="fas fa-pen"></i></button>
                        <span class="mr-2 font-weight-bold">ID: 10056</span>
                        <span class="mr-2 font-weight-bold">Bàn: 106</span>
                        <span id="time" class="ml-auto"></span>
                    </div>
                    <div class="bg-light">
                        <div class="md-form m-2">
                            <input style="max-width: 55%;display: inline" class="form-control" type="text" placeholder="Tìm bàn" aria-label="Search">
                            <button class="btn btn-primary"><i class="fas fa-user-alt"></i></button>
                            <button class="btn btn-primary"><i class="fas fa-shopping-bag"></i></button>
                            {{--                        <button class="btn btn-primary">Test</button>--}}
                        </div>
                        <div class="table_right">
                            <table class="table table-striped table-hover my-2 text-center">
                                <thead>
                                <tr>
                                    <th width="10%" scope="col">#</th>
                                    <th width="30%" scope="col">Tên Món</th>
                                    <th width="20%" scope="col">Số lượng</th>
                                    <th width="30%" scope="col">Thành tiền</th>
                                    <th width="10%" scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Cá kho</td>
                                    <td><input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1"></td>
                                    <td>50.000</td>
                                    <td>
                                        <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></span>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" type="button">Option 1</button>
                                            <button class="dropdown-item" type="button">Option 2</button>
                                            <button class="dropdown-item" type="button">Option 3</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Thịt kho</td>
                                    <td>1</td>
                                    <td>70.000</td>
                                    <td><i class="fas fa-ellipsis-v"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Canh chua</td>
                                    <td>2</td>
                                    <td>100.000</td>
                                    <td><i class="fas fa-ellipsis-v"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td><i class="fas fa-ellipsis-v"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td><i class="fas fa-ellipsis-v"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="p-2 row">
                            <div class="col-6">
                                <span class="">Thành Tiền</span>
                                <span class="float-right">780.000</span>
                                <div class="d-flex align-items-center">
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <span class="mx-2">Thuế GTGT 10%</span>
                                    <input size="10%" class="ml-auto" value="0" disabled>
                                </div>
                            </div>
                            <div class="col-6 font-weight-bold">
                                <span>Tổng thanh toán</span>
                                <span class="float-right">780.000</span>
                                <div class="d-flex align-items-center">
                                    <span ><i class="fas fa-gift"></i> Voucher</span>
                                    <input size="10%" class="ml-auto" value="0" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 d-flex text-center">
                            <button class="mr-2 btn btn-primary btn-sm"><i class="fas fa-chevron-left"></i> Quay lại</button>
                            <button class="mr-2 btn btn-primary btn-sm">Tách HĐ</i></button>
                            <button class="ml-auto bg-orange btn btn-sm"><i class="fas fa-dollar-sign"></i> Thu tiền</i></button>
                        </div>
                    </div>

            </div>
        </div>
    </div>

    <script>
        var d = new Date();
        var date = d.getDate();
        var month = d.getMonth() + 1;
        var year = d.getFullYear();

        var hours = d.getHours();
        var minutes = d.getMinutes();
        var seconds = d.getSeconds();

        var dateStr =hours + ":" + minutes + ":" + seconds + "     " + date + "/" + month + "/" + year;

        document.getElementById("time").innerHTML = dateStr;
    </script>
@endsection
