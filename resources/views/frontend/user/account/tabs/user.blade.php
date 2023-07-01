<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Member</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
     <style>
        .table td {
            width: 33.33%; /* Set an equal width for each column */
        }
    </style>
</head>
<body>
    <div>
        <div>
                <form method="POST" action="/userForm" enctype="multipart/form-data">
                @csrf
                <div id="formContainer">
                    <div class="form-section" id="mainForm">
                        <table class="table table-striped table-hover table-bordered mb-0" id="inputTable" style="table-layout: fixed;">
                            <tr>
                                <th>@lang('Name')</th>
                                <th>@lang('Father Name')</th>
                                 <th>@lang('Mother Name')</th>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" id="Name" name="inputs[0][Name]" placeholder="Enter Name"></td>
                                <td><input type="text" class="form-control" id="FatherName" name="inputs[0][FatherName]" placeholder="Enter FatherName"></td>
                                <td><input type="text" class="form-control" id="MotherName" name="inputs[0][MotherName]" placeholder="Enter MotherName"></td>
                            </tr>
                            <tr>
                               
                                <th>@lang('Photo')</th>
                                <th>@lang('Phone')</th>
                                <th>@lang('Email')</th>
                            </tr>
                            <tr>
                                <td><input type="file" class="form-control" id="Photo" name="inputs[0][Photo]"></td>
                                <td><input type="tel" class="form-control" id="Phone" name="inputs[0][Phone]" placeholder="Enter Phone"></td>
                                <td><input type="email" class="form-control" id="Email" name="inputs[0][Email]" placeholder="Enter Email"></td>
                            </tr>
                            <tr>
                                <th>@lang('DOB')</th>
                                <th>@lang('Gender')</th>
                                <th>@lang('Married')</th>

                            </tr>
                            <tr>
                                <td><input type="date" class="form-control" id="DOB" name="inputs[0][DOB]" placeholder="Enter DOB"></td>
                                <td><input type="text" class="form-control" id="Gender" name="inputs[0][Gender]" placeholder="Enter Gender"></td>
                                <td><input type="text" class="form-control" id="Married" name="inputs[0][Married]" placeholder="Enter Married"></td>
                            </tr>
                            <tr>
                                <th>@lang('Blood Group')</th>
                                <th>@lang('Address')</th>
                                <th>@lang('State')</th>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" id="BloodGroup" name="inputs[0][BloodGroup]" placeholder="Enter BloodGroup"></td>
                                <td><input type="text" class="form-control" id="Address" name="inputs[0][Address]" placeholder="Enter Address"></td>
                                <td><input type="text" class="form-control" id="State" name="inputs[0][State]" placeholder="Enter State"></td>
                            </tr>
                            <tr>
                                <th>@lang('City')</th>
                                <th>@lang('Pincode')</th>
                                <th>@lang('Country')</th>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" id="City" name="inputs[0][City]" placeholder="Enter City"></td>
                                <td><input type="text" class="form-control" id="Pincode" name="inputs[0][Pincode]" placeholder="Enter Pincode"></td>
                                <td><input type="text" class="form-control" id="Country" name="inputs[0][Country]" placeholder="Enter Country"></td>
                            </tr>
                            <tr>
                                <th>@lang('Origin Address')</th>
                                <th>@lang('Origin State')</th>
                                <th>@lang('Origin City')</th>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" id="OriginAddress" name="inputs[0][OriginAddress]" placeholder="Enter OriginAddress"></td>
                                <td><input type="text" class="form-control" id="OriginState" name="inputs[0][OriginState]" placeholder="Enter OriginState"></td>
                                <td><input type="text" class="form-control" id="OriginCity" name="inputs[0][OriginCity]" placeholder="Enter OriginCity"></td>
                            </tr>
                            <tr>
                                <th>@lang('Origin Pincode')</th>
                            </tr>
                            <tr>
                               <td><input type="text" class="form-control" id="OriginPincode" name="inputs[0][OriginPincode]" placeholder="Enter OriginPincode"></td>
                            </tr>
                        </table>
                    </div>
                    <br>
                    <div class="text-center">
                    <button type="submit" class="btn btn-success col-md-1">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
