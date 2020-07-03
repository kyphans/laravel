@extends('master.master')
@section('content')
<div class="container_bill">
    <div class="d-flex text-center bd-highlight">
        <div class="py-1">
            <button class="btn btn-primary">Đang phục vụ <span class="badge badge-light">4</span></button>
            <button class="btn btn-primary">YC thanh toán <span class="badge badge-light">1</span></button>
            <button class="btn btn-primary">Mang về <span class="badge badge-light">2</span></button>
            <button class="btn btn-primary">Giao hàng <span class="badge badge-light">0</span></button>
            <button type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,5">
                Tìm bàn
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                <a class="dropdown-item" href="#">1</a>
                <a class="dropdown-item" href="#">2</a>
                <a class="dropdown-item" href="#">3</a>
            </div>
        </div>
        <div class="py-1 px-2 flex-grow-1">
            <input class="form-control" type="text" placeholder="Tìm theo số bàn" aria-label="Search">
        </div>
        <div class="py-1">
            <button type="button" class="btn btn-primary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,5">
                <i class="fas fa-user-alt"></i>
            </button>
        </div>
    </div>

    <div class="bill_content">

        <table class="text-center table_bill table-bordered">
            <tr>
                <th class="bg-primary text-white" colspan="4"><i class="float-left fas fa-tablets"> 1</i><i class="float-right fas fa-user"> 2</i></th>
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
        <table class="text-center table_bill table-bordered">
            <tr>
                <th class="bg-primary text-white" colspan="4"><i class="float-left fas fa-tablets"> 1</i><i class="float-right fas fa-user"> 2</i></th>
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
        <table class="text-center table_bill table-bordered">
            <tr>
                <th class="bg-primary text-white" colspan="4"><i class="float-left fas fa-tablets"> 1</i><i class="float-right fas fa-user"> 2</i></th>
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
        <table class="text-center table_bill table-bordered">
            <tr>
                <th class="bg-primary text-white" colspan="4"><i class="float-left fas fa-tablets"> 1</i><i class="float-right fas fa-user"> 2</i></th>
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
@endsection
