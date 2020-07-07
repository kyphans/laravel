@extends('master.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- tablet -->
            <div class="d-none d-md-block container col-md-8 bg-light">
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

                {{--DS menu mon tablet--}}
                <div class="row">
                    <div class="col-4">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-1-list"
                               data-toggle="list" href="#list-1" role="tab" aria-controls="">Cơm</a>
                            <a class="list-group-item list-group-item-action" id="list-2-list" data-toggle="list"
                               href="#list-2" role="tab" aria-controls="">Đồ nướng</a>
                            <a class="list-group-item list-group-item-action" id="list-3-list" data-toggle="list"
                               href="#list-3" role="tab" aria-controls="">Mỳ</a>
                            <a class="list-group-item list-group-item-action" id="list-4-list" data-toggle="list"
                               href="#list-4" role="tab" aria-controls="">Nước</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-1" role="tabpanel"
                                 aria-labelledby="list-1-list">

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
                            <div class="tab-pane fade" id="list-2" role="tabpanel" aria-labelledby="list-2-list">Món
                                2
                            </div>
                            <div class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="list-3-list">Món
                                3
                            </div>
                            <div class="tab-pane fade" id="list-4" role="tabpanel" aria-labelledby="list-4-list">Món
                                4
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- mobile -->
            <div class="bg-light container col-md-4">
                <div class="bg-light">
                    <div class="md-form my-2 d-flex">
                        <input class="mr-1 flex-fill form-control" type="text" placeholder="Tìm bàn"
                               aria-label="Search">
                        <button class="mx-1 btn btn-primary"><i class="fas fa-user-alt"></i></button>
                        <button class="ml-1 btn btn-primary"><i class="fas fa-shopping-bag"></i></button>
                    </div>
                    <div class="d-block d-md-none w-100">
                        <select class="mb-1 form-control">
                            <option>Default select</option>
                            <option>Default select 1</option>
                            <option>Default select 2</option>
                        </select>

                        <div class="row">
                            <div class="menu_items d-flex align-items-center col-6 my-1">
                                <img src="https://via.placeholder.com/100" alt="..." class="img_item img-thumb">
                                <div class="d-flex flex-column pl-2">
                                    <span class="name_item">Cá kho 1</span>
                                    <span class="price_item">50000</span>
                                </div>
                            </div>
                            <div class="menu_items d-flex align-items-center col-6 my-1">
                                <img src="https://via.placeholder.com/100" alt="..." class="img_item img-thumb">
                                <div class="d-flex flex-column pl-2">
                                    <span class="name_item">Cá kho 2</span>
                                    <span class="price_item">60000</span>
                                </div>
                            </div>
                            <div class="menu_items d-flex align-items-center col-6 my-1">
                                <img src="https://via.placeholder.com/100" alt="..." class="img_item img-thumb">
                                <div class="d-flex flex-column pl-2">
                                    <span class="name_item">Cá kho 3</span>
                                    <span class="price_item">40000</span>
                                </div>
                            </div>
                            <div class="menu_items d-flex align-items-center col-6 my-1">
                                <img src="https://via.placeholder.com/100" alt="..." class="img_item img-thumb">
                                <div class="d-flex flex-column pl-2">
                                    <span class="name_item">Canh chua</span>
                                    <span class="price_item">90000</span>
                                </div>
                            </div>
                            <div class="menu_items d-flex align-items-center col-6 my-1">
                                <img src="https://via.placeholder.com/100" alt="..." class="img_item img-thumb">
                                <div class="d-flex flex-column pl-2">
                                    <span class="name_item">Thịt kho</span>
                                    <span class="price_item">150000</span>
                                </div>
                            </div>
                            <div class="menu_items d-flex align-items-center col-6 my-1">
                                <img src="https://via.placeholder.com/100" alt="..." class="img_item img-thumb">
                                <div class="d-flex flex-column pl-2">
                                    <span class="name_item">Thịt chiên</span>
                                    <span class="price_item">120000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--DS mon duoc order--}}
                    <table class="table_custom table table-hover align-middle text-center my-2">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Tên Món</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                        </tr>
                        </thead>
                        <tbody class="d-block table_order">

                        </tbody>
                    </table>

                    <div class="confirm_btn d-flex flex-column flex-sm-column flex-md-row">
                        <button class="mt-1 btn btn-primary"><i class="fas fa-plus"></i> Thêm món khác</button>
                        <button class="mt-1 ml-md-1 btn btn-primary" data-toggle="modal" data-target="#voucherModal"><i
                                class="fas fa-gift"></i> Mã quà tặng
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="voucherModal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-gift"></i> Mã
                                            quà tặng</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input class="form-control" type="text" placeholder="Nhập khuyến mãi"
                                               aria-label="Search">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy
                                        </button>
                                        <button type="button" class="btn btn-primary">Áp dụng</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="float-right confirm">
                        <h5>
                            <div id="total_money" class="text_confirm"><i class="fas fa-info-circle"></i> Tổng tiền: 0
                            </div>
                        </h5>
                        <div class="d-flex">
                            <button type="button" class="flex-fill btn btn-labeled btn-success">
                                <span class="btn-label"><i class="fas fa-check"></i></span> Xác nhận
                            </button>
                            <button type="button" class="flex-fill btn btn-labeled btn-danger">
                                <span class="btn-label"><i class="fas fa-times-circle"></i></span> Hủy bỏ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //Yeu cau thanh toan
        $(document).ready(function () {
            // Thanh tien
            function calc() {
                $("td input").change(function () {
                    let sl_dat = $(this).val();
                    let price = $(this).closest('tr').find('.price').text();
                    $(this).closest('tr').find('.total').text(sl_dat * price);
                    total_money();
                });
            }
            // Tong cong tien thanh toan
            function total_money() {
                var total = 0;
                $('tr.tr_item').each(function () {
                    var value = parseInt($('td.total', this).text());
                    total += value;
                });
                $("#total_money").html("<i class=\"fas fa-info-circle\"></i> Tổng tiền: " + total);
            }

            // Them mon vao list order
            $(".menu_items").click(function () {
                let name_item = $(this).find('div').children('.name_item').text();
                let price_item = $(this).find('div').children('.price_item').text();
                let img_src = $(this).find('img').attr('src');

                let tr = "<tr class=\"tr_item\">\n" +
                    "<th class=\"d-none d-md-block\" scope=\"row\">" + 1 + "</th>\n" +
                    "<td class=\"img_item d-block d-md-none\">" +
                    "   <img src=\"" + img_src + "\" alt=\"...\" class=\"img-fluid img-thumb\">" +
                    "</td>\n" +
                    "<td class=\"name_item\">" + name_item + "</td>\n" +
                    "<td>" +
                    "   <input aria-label=\"quantity\" class=\"input-qty\" max=\"10\" min=\"1\" name=\"\" type=\"number\"\n" +
                    "                                   value=\"1\">\n" +
                    "</td>\n" +
                    "<td class=\"price d-none\">" + price_item + "</td>\n" +
                    "<td class=\"total\">" + price_item + "</td>\n" +
                    "</tr>";

                // Tang them 1 don vi khi list mon trung nhau
                $('td.name_item').each(function () {
                    let value = parseInt($(this).closest('tr').find('input').attr('value'));
                    if ($(this).html() == name_item) {
                        $(this).closest('tr').find('input').attr('value', value + 1);
                        let sum = $(this).closest('tr').find('input').attr('value') * $(this).closest('tr').find('.price').text();
                        $(this).closest('tr').find('.total').text(sum);
                        tr = "";
                    }
                })

                $('.table_custom').children('tbody').append(tr);
                calc();
                total_money();
            })
        });
    </script>
@endsection
