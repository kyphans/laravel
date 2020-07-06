@extends('master.master')
@section('content')
<div class="container_bill">
    <div class="d-flex bd-highlight">
        <div class="p-1 flex-fill">
            <input class="form-control" type="text" placeholder="Tìm theo số bàn" aria-label="Search">
        </div>
        <div class="p-1">
            <button type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,5">
                <i class="fas fa-user-alt"></i>
            </button>
        </div>
    </div>
    <div class="d-flex text-center mt-2">
            <a class="flex-fill" href="#">Đang phục vụ <span class="badge badge-info">4</span> <span class="sr-only">(current)</span></a>

            <a class="flex-fill" href="#">YC thanh toán <span class="badge badge-info">1</span></a>

            <a class="flex-fill" href="#">Mang về <span class="badge badge-info">0</span></a>

            <a class="flex-fill" href="#">Giao hàng <span class="badge badge-info">0</span></a>
    </div>
    <div class="bill_content row">
        <div class="col-sm-6 col-md-3 mt-3">
            <table class="text-center table_bill table-bordered">
            <tr>
                <th class="p-2 bg-primary text-white" colspan="4"><i class="float-left fas fa-tablets"> 1</i><i class="float-right fas fa-user"> 2</i></th>
            </tr>
            <tr>
                <td rowspan="2" colspan="2"><strong>106</strong></td>
                <td colspan="2">1.900.000</td>
            </tr>
            <tr>
                <td colspan="2">0</td>
            </tr>
            <tr>
                <td><i class="fas fa-arrows-alt-h"></i></td>
                <td><i class="fas fa-undo-alt"></i></td>
                <td><i class="fas fa-calculator"></i></td>
                <td>
                    <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></span>
                    <div class="dropdown-menu">
                        <button class="dropdown-item" type="button">Option 1</button>
                        <button class="dropdown-item" type="button">Option 2</button>
                        <button class="dropdown-item" type="button">Option 3</button>
                    </div>
                </td>
            </tr>
        </table>
        </div>
        <div class="col-sm-6 col-md-3 mt-3">
            <table class="text-center table_bill table-bordered">
                <tr>
                    <th class="p-2 bg-primary text-white" colspan="4"><i class="float-left fas fa-tablets"> 1</i><i class="float-right fas fa-user"> 2</i></th>
                </tr>
                <tr>
                    <td rowspan="2" colspan="2"><strong>106</strong></td>
                    <td colspan="2">1.900.000</td>
                </tr>
                <tr>
                    <td colspan="2">0</td>
                </tr>
                <tr>
                    <td><i class="fas fa-arrows-alt-h"></i></td>
                    <td><i class="fas fa-undo-alt"></i></td>
                    <td><i class="fas fa-calculator"></i></td>
                    <td>
                        <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></span>
                        <div class="dropdown-menu">
                            <button class="dropdown-item" type="button">Option 1</button>
                            <button class="dropdown-item" type="button">Option 2</button>
                            <button class="dropdown-item" type="button">Option 3</button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-sm-6 col-md-3 mt-3">
            <table class="text-center table_bill table-bordered">
                <tr>
                    <th class="p-2 bg-primary text-white" colspan="4"><i class="float-left fas fa-tablets"> 1</i><i class="float-right fas fa-user"> 2</i></th>
                </tr>
                <tr>
                    <td rowspan="2" colspan="2"><strong>106</strong></td>
                    <td colspan="2">1.900.000</td>
                </tr>
                <tr>
                    <td colspan="2">0</td>
                </tr>
                <tr>
                    <td><i class="fas fa-arrows-alt-h"></i></td>
                    <td><i class="fas fa-undo-alt"></i></td>
                    <td><i class="fas fa-calculator"></i></td>
                    <td>
                        <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></span>
                        <div class="dropdown-menu">
                            <button class="dropdown-item" type="button">Option 1</button>
                            <button class="dropdown-item" type="button">Option 2</button>
                            <button class="dropdown-item" type="button">Option 3</button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-sm-6 col-md-3 mt-3">
            <table class="text-center table_bill table-bordered">
                <tr>
                    <th class="p-2 bg-primary text-white" colspan="4"><i class="float-left fas fa-tablets"> 1</i><i class="float-right fas fa-user"> 2</i></th>
                </tr>
                <tr>
                    <td rowspan="2" colspan="2"><strong>106</strong></td>
                    <td colspan="2">1.900.000</td>
                </tr>
                <tr>
                    <td colspan="2">0</td>
                </tr>
                <tr>
                    <td><i class="fas fa-arrows-alt-h"></i></td>
                    <td><i class="fas fa-undo-alt"></i></td>
                    <td><i class="fas fa-calculator"></i></td>
                    <td>
                        <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></span>
                        <div class="dropdown-menu">
                            <button class="dropdown-item" type="button">Option 1</button>
                            <button class="dropdown-item" type="button">Option 2</button>
                            <button class="dropdown-item" type="button">Option 3</button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-sm-6 col-md-3 mt-3">
            <table class="text-center table_bill table-bordered">
                <tr>
                    <th class="p-2 bg-primary text-white" colspan="4"><i class="float-left fas fa-tablets"> 1</i><i class="float-right fas fa-user"> 2</i></th>
                </tr>
                <tr>
                    <td rowspan="2" colspan="2"><strong>106</strong></td>
                    <td colspan="2">1.900.000</td>
                </tr>
                <tr>
                    <td colspan="2">0</td>
                </tr>
                <tr>
                    <td><i class="fas fa-arrows-alt-h"></i></td>
                    <td><i class="fas fa-undo-alt"></i></td>
                    <td><i class="fas fa-calculator"></i></td>
                    <td>
                        <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></span>
                        <div class="dropdown-menu">
                            <button class="dropdown-item" type="button">Option 1</button>
                            <button class="dropdown-item" type="button">Option 2</button>
                            <button class="dropdown-item" type="button">Option 3</button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-sm-6 col-md-3 mt-3">
            <table class="text-center table_bill table-bordered">
                <tr>
                    <th class="p-2 bg-primary text-white" colspan="4"><i class="float-left fas fa-tablets"> 1</i><i class="float-right fas fa-user"> 2</i></th>
                </tr>
                <tr>
                    <td rowspan="2" colspan="2"><strong>106</strong></td>
                    <td colspan="2">1.900.000</td>
                </tr>
                <tr>
                    <td colspan="2">0</td>
                </tr>
                <tr>
                    <td><i class="fas fa-arrows-alt-h"></i></td>
                    <td><i class="fas fa-undo-alt"></i></td>
                    <td><i class="fas fa-calculator"></i></td>
                    <td>
                        <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></span>
                        <div class="dropdown-menu">
                            <button class="dropdown-item" type="button">Option 1</button>
                            <button class="dropdown-item" type="button">Option 2</button>
                            <button class="dropdown-item" type="button">Option 3</button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
