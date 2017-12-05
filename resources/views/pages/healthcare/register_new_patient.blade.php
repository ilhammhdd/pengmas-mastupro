@extends('layouts.healthcare.master')

@section('other-css-import')
@endsection

@section('content-rows')
    <div class="bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Register New Patient</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> {{--<a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>--}}
            <ol class="breadcrumb">
                <li><a href="{{route('healthcare.home')}}" style="font-size: 17px;">Dashboard</a></li>
                <li class="active">Register New Patient</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form id="form-register-new-patient">
                            {{csrf_field()}}
                            <div class="form-body">
                                <h3 class="box-title">Patient Info</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Full Name</label>
                                            <input type="text" id="full-name" class="form-control"
                                                   placeholder="Enter full name here" name="full_name">
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Gender</label>
                                            <select id="gender" class="form-control" name="gender">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                            <span class="help-block"> Select your gender </span>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Blood Type</label>
                                            <div class="radio-list">
                                                <label class="radio-inline">
                                                    <div class="radio radio-info">
                                                        <input type="radio" name="radio_gol_dar" id="golDarA"
                                                               value="A">
                                                        <label for="golDarA">A</label>
                                                    </div>
                                                </label>
                                                <label class="radio-inline">
                                                    <div class="radio radio-info">
                                                        <input type="radio" name="radio_gol_dar" id="golDarB"
                                                               value="B">
                                                        <label for="golDarB">B</label>
                                                    </div>
                                                </label>
                                                <label class="radio-inline">
                                                    <div class="radio radio-info">
                                                        <input type="radio" name="radio_gol_dar" id="golDarAB"
                                                               value="AB">
                                                        <label for="golDarAB">AB</label>
                                                    </div>
                                                </label>
                                                <label class="radio-inline">
                                                    <div class="radio radio-info">
                                                        <input type="radio" name="radio_gol_dar" id="golDarO"
                                                               value="O">
                                                        <label for="golDarO">O</label>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Date of Birth</label>
                                            <input id="date-of-birth" type="date" class="form-control"
                                                   {{--value="2012-20-20"--}}
                                                   name="date_of_birth">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Place of Birth</label>
                                            <input type="text" id="place-of-birth" class="form-control"
                                                   placeholder="Enter place of birth here" name="place_of_birth">
                                            {{--<span class="help-block"> This is inline help </span>--}}</div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input type="text" id="email" class="form-control"
                                                   placeholder="Enter email here" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Phone Number</label>
                                            <input type="text" id="phone-number" class="form-control"
                                                   placeholder="Enter phone number here" name="phone_number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-md-12">Address</label>
                                            <div class="col-md-12">
                                                <textarea id="address" name="address" class="form-control"
                                                          rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success btn-circle btn-xl"
                                        style="position:fixed;bottom:20px;right:20px;z-index: 1;padding:20px;"><i
                                            class="ti-plus"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('other-js-import')
    <script type="text/javascript">
        var formRegisterNewPatient = $('#form-register-new-patient');

        formRegisterNewPatient.submit(function (e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: '{{route('healthcare.register_new_patient')}}',
                data: formRegisterNewPatient.serialize(),
                success: function () {
                    document.getElementById("full-name").value = '';
//                    $('#full-name').value = '';
                    document.getElementById("gender").value = 'male';
//                    $('#gender').value = 'male';
                    document.getElementById("golDarA").checked = false;
                    document.getElementById("golDarB").checked = false;
                    document.getElementById("golDarAB").checked = false;
                    document.getElementById("golDarO").checked = false;
//                    $('#golDarA').checked = false;
//                    $('#golDarB').checked = false;
//                    $('#golDarAB').checked = false;
//                    $('#golDarO').checked = false;
                    document.getElementById("date-of-birth").value = '';
//                    $('#date-of-birth').value = 'YYYY-MM-DD';
                    document.getElementById("place-of-birth").value = '';
//                    $('#place-of-birth').value = '';
                    document.getElementById("email").value = '';
//                    $('#email').value = '';
                    document.getElementById("phone-number").value = '';
//                    $('#phone-number').value = '';
                    document.getElementById("address").value = '';
//                    $('#address').value = '';
                },
                error: function () {
                    console.log('gagal registrasi pasien');
                }
            });
        });
    </script>
@endsection