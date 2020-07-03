@extends('master.master')
@section('content')

    <div class="d-flex text-center">
        <span class="py-2 px-2 font-weight-bold">Chi tiết order</span>
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
            <th class="" scope="col">Đã trả món</th>
            <th class="" scope="col">Còn lại</th>
            <th class="" scope="col">Trả món</th>
            <th class="" scope="col"></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><i class="fas fa-hamburger pr-2"></i>Tôm hấp bia</th>
                <td class="sl_goi">5</td>
                <td class="sl_datramon">0</td>
                <td class="sl_conlai">5</td>
                <td class="sl_tramon"><input type="number" value="0" min="0" max="10"/></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-success btn-sm"><i class="fas fa-check"></i> Trả món</button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-times-circle"></i> Hủy bỏ</button>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row"><i class="fas fa-hamburger pr-2"></i>Tôm hấp bia</th>
                <td class="sl_goi">5</td>
                <td class="sl_datramon">0</td>
                <td class="sl_conlai">5</td>
                <td class="sl_tramon"><input type="number" value="0" min="0" max="10"/></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button id="confirm" type="button" class="btn btn-success btn-sm"><i class="fas fa-check"></i> Trả món</button>
                        <button id="cancel" type="button" class="btn btn-danger btn-sm"><i class="fas fa-times-circle"></i> Hủy bỏ</button>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row"><i class="fas fa-hamburger pr-2"></i>Tôm hấp bia</th>
                <td class="sl_goi">5</td>
                <td class="sl_datramon">0</td>
                <td class="sl_conlai">5</td>
                <td class="sl_tramon"><input type="number" value="0" min="0" max="10"/></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button id="confirm" type="button" class="btn btn-success btn-sm"><i class="fas fa-check"></i> Trả món</button>
                        <button id="cancel" type="button" class="btn btn-danger btn-sm"><i class="fas fa-times-circle"></i> Hủy bỏ</button>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row"><i class="fas fa-hamburger pr-2"></i>Tôm hấp bia</th>
                <td class="sl_goi">5</td>
                <td class="sl_datramon">0</td>
                <td class="sl_conlai">5</td>
                <td class="sl_tramon"><input type="number" value="0" min="0" max="10"/></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button id="confirm" type="button" class="btn btn-success btn-sm"><i class="fas fa-check"></i> Trả món</button>
                        <button id="cancel" type="button" class="btn btn-danger btn-sm"><i class="fas fa-times-circle"></i> Hủy bỏ</button>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row"><i class="fas fa-hamburger pr-2"></i>Tôm hấp bia</th>
                <td class="sl_goi">5</td>
                <td class="sl_datramon">0</td>
                <td class="sl_conlai">5</td>
                <td class="sl_tramon"><input type="number" value="0" min="0" max="10"/></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button id="confirm" type="button" class="btn btn-success btn-sm"><i class="fas fa-check"></i> Trả món</button>
                        <button id="cancel" type="button" class="btn btn-danger btn-sm"><i class="fas fa-times-circle"></i> Hủy bỏ</button>
                    </div>
                </td>
            </tr>

        </tbody>
    </table>
    </div>
    <div class="list_btn">
    <div class="p-2 d-flex text-center">
        <button class="mr-auto btn btn-primary"><i class="fas fa-chevron-left"></i> Quay lại</button>
    </div>
    </div>

    <script>
        $(document).ready(function () {
            $("button.btn-success").click(function () {
                let sl_tramon = parseInt($(this).closest('tr').find('.sl_tramon').children().val());
                let sl_goi =  parseInt($(this).closest('tr').find('.sl_goi').text());
                let sl_datramon =  parseInt($(this).closest('tr').find('.sl_datramon').text());
                sl_datramon =sl_datramon + sl_tramon;
                $(this).closest('tr').find('.sl_datramon').text(sl_datramon);
                $(this).closest('tr').find('.sl_conlai').text(sl_goi-sl_datramon);
                $(this).closest('tr').find('.sl_tramon').children().val("0");
            })
            $("button.btn-danger").click(function () {
                $(this).closest('tr').find('.sl_tramon').children().val("0");
            })
        })
    </script>
@endsection
