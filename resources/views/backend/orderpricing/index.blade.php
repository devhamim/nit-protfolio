@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Customer Order</h2>
</div>
<div class="row g-4">

    <div class="col-xxl-12 col-md-12">
        <div class="panel">
            <div class="panel-header">
                <h5>All Customer Order</h5>
                <div class="btn-box d-flex gap-2">
                    <div id="tableSearch"></div>
                    <div class="digi-dropdown dropdown">

                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-filter-option">
                    <div class="row justify-content-between g-3">
                        <div class="col-xxl-4 col-6 col-xs-12">

                        </div>
                        <div class="col-xl-2 col-3 col-xs-12 d-flex justify-content-end">
                            <div id="productTableLength"></div>
                        </div>
                    </div>
                </div>
                <table class="table table-dashed table-hover digi-dataTable all-product-table table-striped" id="allProductTable">
                    <thead>
                        <tr>
                            <th>Order</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderpricing as $order)
                            <tr>
                                <td><span class="table-dscr">{{ $order->rel_to_price->title }}</span></td>
                                <td><span class="table-dscr">{{ $order->name }}</span></td>
                                <td><span class="table-dscr">{{ $order->email }}</span></td>
                                <td><span class="table-dscr">{{ $order->phone }}</span></td>
                                <td><span class="table-dscr">{{ $order->subject }}</span></td>
                                <td><span class="table-dscr">{{ $order->message }}</span></td>
                                <td>
                                    <div class="btn-box">
                                        <form action="{{ route('orderpricing.destroy',  $order->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class=" border-0 mr-2">
                                                <i class="fa-light fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="table-bottom-control"></div>
            </div>
        </div>
    </div>
</div>
@endsection
