@extends('website.master')
@section('item')
<br></br>
<br></br>
<br></br>
<style>
    body{
    background:#f5f5f5;
    margin-top:20px;
}
.card {
    border: none;
    -webkit-box-shadow: 1px 0 20px rgba(96,93,175,.05);
    box-shadow: 1px 0 20px rgba(96,93,175,.05);
    margin-bottom: 30px;
}
.table th {
    font-weight: 500;
    color: #827fc0;
}
.table thead {
    background-color: #f3f2f7;
}
.table>tbody>tr>td, .table>tfoot>tr>td, .table>thead>tr>td {
    padding: 14px 12px;
    vertical-align: middle;
}
.table tr td {
    color: #8887a9;
}
.thumb-sm {
    height: 32px;
    width: 32px;
}
.badge-soft-warning {
    background-color: rgba(248,201,85,.2);
    color: #f8c955;
}

.badge {
    font-weight: 500;
}
.badge-soft-primary {
    background-color: rgba(96,93,175,.2);
    color: #605daf;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="header-title pb-3 mt-0">Payments</h5>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr class="align-self-center">
                                    <th style=" text-align: center;">Tour Name</th>
                                    <th style=" text-align: center;">Join status</th>
                                    <th style=" text-align: center;">location name</th>
                                    <th style=" text-align: center;">Payment amount</th>
                                  
                                    <th style=" text-align: center;">Phone</th>
                                    <th style=" text-align: center;">Payment status</th>
                                    <th style=" text-align: center;">Transaction_id</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                             @dd($user_pay)
                              <th style=" text-align: center;">{{$user_pay->tourplan->Tourname}}</th>
                              <td style=" text-align: center;">{{$user_pay->status}}</td>
                              <td style=" text-align: center;">{{$user_pay->tourplan->location->Location_name}}</td>
                              <td style=" text-align: center;">{{$user_pay->order->amount}}</td>
                              <td style=" text-align: center;">{{$user_pay->order->phone}}</td>
                              <td style=" text-align: center;">{{$user_pay->order->status}}</td>
                              <td style=" text-align: center;">{{$user_pay->order->transaction_id}}</td>
                              
</tr>

                            </tbody>
                        </table>
                    </div>
                    <!--end table-responsive-->
                    <div class="pt-3 border-top text-right"><a href="#" class="text-primary">View all <i class="mdi mdi-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection