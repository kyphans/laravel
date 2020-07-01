@extends('master.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="container bg-light">
                <div class="topnav nav nav-justified my-2">
                    <a class="nav-item nav-link" href="#">Hay dùng</a>
                    <a class="nav-item nav-link" href="">Đặc trưng</a>
                    <a class="nav-item nav-link" href="">Món ăn</a>
                    <a class="nav-item nav-link" href="">Đồ uống</a>
                    <a class="nav-item nav-link" href="">Combo</a>
                    <a class="nav-item nav-link" href="">Khác</a>
                </div>
                <div class="md-form mb-2">
                    <input class="form-control" type="text" placeholder="Nhập mã/tìm món" aria-label="Search">
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-1-list" data-toggle="list" href="#list-1" role="tab" aria-controls="">Cơm</a>
                            <a class="list-group-item list-group-item-action" id="list-2-list" data-toggle="list" href="#list-2" role="tab" aria-controls="">Đồ nướng</a>
                            <a class="list-group-item list-group-item-action" id="list-3-list" data-toggle="list" href="#list-3" role="tab" aria-controls="">Mỳ</a>
                            <a class="list-group-item list-group-item-action" id="list-4-list" data-toggle="list" href="#list-4" role="tab" aria-controls="">Nước</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-1" role="tabpanel" aria-labelledby="list-1-list">

                                    <div class="table_left customrow row">
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="customcol mb-2 col-4">
                                            <img src="https://via.placeholder.com/500" alt="..." class="img-thumbnail">
                                        </div>

                                    </div>

                            </div>
                            <div class="tab-pane fade" id="list-2" role="tabpanel" aria-labelledby="list-2-list">Món 2</div>
                            <div class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="list-3-list">Món 3</div>
                            <div class="tab-pane fade" id="list-4" role="tabpanel" aria-labelledby="list-4-list">Món 4</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right column -->
        <div class="bg-light container_right container col-4">
            <div class="position-fixedd">
                <div class="bg-light">
                    <div class="md-form m-2">
                        <input style="max-width: 55%;display: inline" class="form-control" type="text" placeholder="Tìm bàn" aria-label="Search">
                        <button class="btn btn-primary"><i class="fas fa-user-alt"></i></button>
                        <button class="btn btn-primary"><i class="fas fa-shopping-bag"></i></button>
{{--                        <button class="btn btn-primary">Test</button>--}}
                    </div>
                    <div class="table_right">
                    <table class="table table-striped table-hover my-2">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên Món</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Cá kho</td>
                            <td>1</td>
                            <td>50.000</td>
                            <td>
                                <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
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
                    <div class="confirm_btn">
                        <button class="btn btn-primary">Thêm món khác</button>
                        <button class="btn btn-primary"  data-toggle="modal" data-target="#voucherModal">Mã quà tặng</button>
                        <!-- Modal -->
                        <div class="modal fade" id="voucherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Mã quà tặng</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input class="form-control" type="text" placeholder="Nhập khuyến mãi" aria-label="Search">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                        <button type="button" class="btn btn-primary">Áp dụng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="float-right confirm">
                        <div class="text_confirm"><i class="fas fa-info-circle"></i> Tổng tiền: 2.200.000</div>
                        <button type="button" class="btn btn-labeled btn-success">
                            <span class="btn-label"><i class="fas fa-check"></i></span> Xác nhận</button>
                        <button type="button" class="btn btn-labeled btn-danger">
                            <span class="btn-label"><i class="fas fa-times-circle"></i></span> Hủy bỏ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
