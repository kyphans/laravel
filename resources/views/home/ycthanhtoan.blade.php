@extends('master.master')
@section('content')

    <div class="d-flex text-center">
        <span class="py-2 px-2 font-weight-bold">Kiểm đồ</span>
        <span class="py-2 px-5"><i class="fas fa-chair"></i> 107</span>
        <span class="py-2"><i class="fas fa-user-alt"></i> 6</span>
        <span class="py-2 px-5"><i class="fas fa-money-bill-alt"></i> 2.200.000</span>
        <span class="py-2 "><i class="fas fa-clock"></i> 30'</span>
    </div>

    <div class="table_left">
        <table class="table_custom table table-striped text-center">
            <thead>
            <tr>
                <th class="" scope="col">Tên món</th>
                <th class="" scope="col">SL gọi</th>
                <th class="" scope="col">SL trả lại</th>
                <th class="" scope="col">SL thực dùng</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th  scope="row"><i class="fas fa-hamburger pr-2"></i>Tôm hấp bia</th>
                <td class="sl_t">5</td>
                <td><input type="number" value="0" min="0" max="10"/></td>
                <td class="sl_td">5</td>
            </tr>
            <tr>
                <th  scope="row"><i class="fas fa-hamburger pr-2"></i>Cá kho tộ</th>
                <td class="sl_t">3</td>
                <td><input type="number" value="0" min="0" max="10"/></td>
                <td class="sl_td">3</td>
            </tr>
            <tr>
                <th  scope="row"><i class="fas fa-hamburger pr-2"></i>Cá kho tộ</th>
                <td class="sl_t">3</td>
                <td><input type="number" value="0" min="0" max="10"/></td>
                <td class="sl_td">3</td>
            </tr>
            <tr>
                <th  scope="row"><i class="fas fa-hamburger pr-2"></i>Cá kho tộ</th>
                <td class="sl_t">3</td>
                <td><input type="number" value="0" min="0" max="10"/></td>
                <td class="sl_td">3</td>
            </tr>
            <tr>
                <th  scope="row"><i class="fas fa-hamburger pr-2"></i>Cá kho tộ</th>
                <td class="sl_t">3</td>
                <td><input type="number" value="0" min="0" max="10"/></td>
                <td class="sl_td">3</td>
            </tr>
            <tr>
                <th  scope="row"><i class="fas fa-hamburger pr-2"></i>Cá kho tộ</th>
                <td class="sl_t">3</td>
                <td><input type="number" value="0" min="0" max="10"/></td>
                <td class="sl_td">3</td>
            </tr>
            <tr>
                <th  scope="row"><i class="fas fa-hamburger pr-2"></i>Cá kho tộ</th>
                <td class="sl_t">3</td>
                <td><input type="number" value="0" min="0" max="10"/></td>
                <td class="sl_td">3</td>
            </tr>
            <tr>
                <th  scope="row"><i class="fas fa-hamburger pr-2"></i>Cá kho tộ</th>
                <td class="sl_t">3</td>
                <td><input type="number" value="0" min="0" max="10"/></td>
                <td class="sl_td">3</td>
            </tr>
            <tr>
                <th  scope="row"><i class="fas fa-hamburger pr-2"></i>Cá kho tộ</th>
                <td class="sl_t">3</td>
                <td><input type="number" value="0" min="0" max="10"/></td>
                <td class="sl_td">3</td>
            </tr>

            </tbody>
        </table>
    </div>
    <div class="list_btn">
        <div class="p-2 d-flex text-center">
            <button class="mr-auto btn btn-primary"><i class="fas fa-times-circle"></i> Hủy bỏ</button>
            <button class="btn btn-primary"><i class="fas fa-pen"></i> Sửa order</button>
            <button class="mx-1 btn btn-primary" data-toggle="modal" data-target="#sendnote"><i class="fas fa-sticky-note"></i> Gửi kèm ghi chú</button>
            <button class="btn btn-primary"><i class="fas fa-calculator"></i> Yêu cầu thanh toán</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="sendnote" tabindex="-1" role="dialog" aria-labelledby="sendnote" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gửi yêu cầu thanh toán</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nhập chi tiết ghi chú</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary">Xác nhận</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        //Yeu cau thanh toan
        $(document).ready(function(){
            $("td input").change(function(){
                var sl_tra = $(this).val();
                var sl_goi = $(this).closest('tr').find('.sl_t').text();
                $(this).closest('tr').find('.sl_td').text(sl_goi - sl_tra);
            });
        });


    </script>
@endsection
