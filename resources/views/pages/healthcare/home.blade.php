@extends('layouts.healthcare.master')

@section('content-rows')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Hospital Dashboard</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> {{--<a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>--}}
            <ol class="breadcrumb">
                <li class="active">Dashboard</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!--row -->
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="white-box">
                <div class="r-icon-stats">
                    <i class="ti-user bg-megna"></i>
                    <div class="bodystate">
                        <h4>370</h4>
                        <span class="text-muted">New Patient</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="white-box">
                <div class="r-icon-stats">
                    <i class="ti-shopping-cart bg-info"></i>
                    <div class="bodystate">
                        <h4>342</h4>
                        <span class="text-muted">OPD Patient</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="white-box">
                <div class="r-icon-stats">
                    <i class="ti-wallet bg-success"></i>
                    <div class="bodystate">
                        <h4>13</h4>
                        <span class="text-muted">Today's Ops.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="white-box">
                <div class="r-icon-stats">
                    <i class="ti-wallet bg-inverse"></i>
                    <div class="bodystate">
                        <h4>$34650</h4>
                        <span class="text-muted">Hospital Earning</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection