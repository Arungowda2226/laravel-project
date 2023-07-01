<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Member</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
    <div>
        <div>
            <form method="POST" action="/familyForm" enctype="multipart/form-data">
                @csrf
                <div id="formContainer">
                <div class="form-section" id="mainForm">
                <table class="table table-striped table-hover table-bordered mb-0">
                <tr>
                    <th>@lang('Name')</th>
                    <td><input type="text" class="form-control" id="name" name="inputs[0][name]" placeholder="Enter Name"></td>
                </tr>
                <tr>
                    <th>@lang('Phone')</th>
                    <td><input type="tel" class="form-control" id="phone" name="inputs[0][phone]" placeholder="Enter Phone No"></td>
                </tr>
                <tr>
                    <th>@lang('Email')</th>
                    <td><input type="email" class="form-control" id="email"  name="inputs[0][email]" placeholder="Enter Email"></td>
                </tr>
                <tr>
                    <th>@lang('Relation')</th>
                    <td><input type="text" class="form-control" id="relation" name="inputs[0][relation]" placeholder="Enter Relation"></td>
                </tr>
                <tr>
                    <th>@lang('Photo')</th>
                    <td>
                        <input type="file" class="form-control" id="photo" name="inputs[0][photo]" onchange="displayPhoto(this, 0)" placeholder="Enter Photo">
                        <img id="photoPreview0" src="#" alt="Photo Preview" style="max-width: 200px; max-height: 200px; margin-top: 10px; display: none;">
                    </td>
                </tr>
                <tr>
                    <th>@lang('DOB')</th>
                    <td><input type="date" class="form-control" id="dob" name="inputs[0][dob]" placeholder="Enter DOB"></td>
                </tr>
                <tr>
                    <th>@lang('Married')</th>
                    <td><input type="text" class="form-control" id="married" name="inputs[0][married]" placeholder="Enter Married"></td>
                </tr>
                <tr>
                    <th>@lang('Gender')</th>
                    <td><input type="text" class="form-control" id="gender" name="inputs[0][gender]" placeholder="Enter Gender"></td>
                </tr>
                <tr>
                    <th>@lang('Origin City')</th>
                    <td><input type="text" class="form-control" id="originCity" name="inputs[0][originCity]" placeholder="Enter OriginCity"></td>
                </tr>
                <tr>
                    <th>@lang('Blood Group')</th>
                    <td><input type="text" class="form-control" id="bloodGroup" name="inputs[0][bloodGroup]" placeholder="Enter BloodGroup"></td>
                </tr>
                </table>
                </div>
                </div>
                <br><br>
                <button type="button" id="addTable" class="btn btn-primary float-right">Add more +</button>
                <br><br>
                <button type="button" class="btn btn-danger remove-table-row float-right">Remove -</button>
                <br><br>
                <button type="submit" class="btn  btn-success col-md-2 float-right">Submit</button>
            </form>
        </div>
    </div>
    
    <script>
        $(document).ready(function() {
            var tableCount = 1;
    
            $('#addTable').click(function() {
                var $lastTable = $('table:last');
                var $newTable = $lastTable.clone();
    
                $newTable.find('input').each(function() {
                    var currentName = $(this).attr('name');
                    var newName = currentName.replace(/\[\d+\]/g, `[${tableCount}]`);
                    $(this).attr('name', newName);
                    $(this).val('');
                    if (currentName.includes('[photo]')) {
                        $(this).attr('onchange', `displayPhoto(this, ${tableCount})`);
                        $(this).next('img').attr('id', `photoPreview${tableCount}`);
                    }
    
                    // Add the 'required' attribute to the input fields
                    $(this).prop('required', true);
                });
    
                $lastTable.after($newTable);
                tableCount++;
            });
    
            $('.remove-table-row').click(function() {
                if (tableCount > 1) {
                    $('table:last').remove();
                    tableCount--;
                }
            });
        });
    
        function displayPhoto(input, tableIndex) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(`#photoPreview${tableIndex}`).attr('src', e.target.result).css('display', 'block');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>
