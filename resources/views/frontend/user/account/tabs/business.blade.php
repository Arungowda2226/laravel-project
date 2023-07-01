<!DOCTYPE html>
<html>
<head>
    <title>Business Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            <form method="POST" action="/businessForm" enctype="multipart/form-data">
                @csrf
                <div id="formContainer">
                    <div class="form-group row">
                        <label for="OrganisationName" class="col-sm-4 col-form-label">Organisation Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="inputs[0][OrganisationName]" placeholder="Enter Organisation Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OrganisationAddress" class="col-sm-4 col-form-label">Organisation Address</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="inputs[0][OrganisationAddress]" placeholder="Enter Organisation Address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OrganisationState" class="col-sm-4 col-form-label">Organisation State</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="inputs[0][OrganisationState]" placeholder="Enter Organisation State">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OrganisationCity" class="col-sm-4 col-form-label">Organisation City</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="inputs[0][OrganisationCity]" placeholder="Enter Organisation City">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OrganisationCountry" class="col-sm-4 col-form-label">Organisation Country</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="inputs[0][OrganisationCountry]" placeholder="Enter Organisation Country">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OrganisationPhone" class="col-sm-4 col-form-label">Organisation Phone</label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" name="inputs[0][OrganisationPhone]" placeholder="Enter Organisation Phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OrganisationEmail" class="col-sm-4 col-form-label">Organisation Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="inputs[0][OrganisationEmail]" placeholder="Enter Organisation Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OrganisationPhotos" class="col-sm-4 col-form-label">Organisation Photos</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="inputs[0][OrganisationPhotos]" accept="image/*">
                        </div>
                    </div>
                </div>
                <div id="dynamicForm">

                </div>

                <button type="button" id="add" class="btn btn-warning">Add+</button>
                <button type="button" id="remove" class="btn btn-danger">Remove-</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var formCount = 0;

        $('#add').click(function() {
            formCount++;
            var newForm = `
            <br/><br/>
                <div class="dynamic-form-group">
                    <div class="form-group row">
                        <label for="OrganisationName${formCount}" class="col-sm-4 col-form-label">Organisation Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="inputs[${formCount}][OrganisationName]" placeholder="Enter Organisation Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OrganisationAddress${formCount}" class="col-sm-4 col-form-label">Organisation Address</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="inputs[${formCount}][OrganisationAddress]" placeholder="Enter Organisation Address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OrganisationState${formCount}" class="col-sm-4 col-form-label">Organisation State</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="inputs[${formCount}][OrganisationState]" placeholder="Enter Organisation State">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OrganisationCity${formCount}" class="col-sm-4 col-form-label">Organisation City</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="inputs[${formCount}][OrganisationCity]" placeholder="Enter Organisation City">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OrganisationCountry${formCount}" class="col-sm-4 col-form-label">Organisation Country</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="inputs[${formCount}][OrganisationCountry]" placeholder="Enter Organisation Country">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OrganisationPhone${formCount}" class="col-sm-4 col-form-label">Organisation Phone</label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" name="inputs[${formCount}][OrganisationPhone]" placeholder="Enter Organisation Phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OrganisationEmail${formCount}" class="col-sm-4 col-form-label">Organisation Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="inputs[${formCount}][OrganisationEmail]" placeholder="Enter Organisation Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="OrganisationPhotos${formCount}" class="col-sm-4 col-form-label">Organisation Photos</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="inputs[${formCount}][OrganisationPhotos]" accept="image/*">
                        </div>
                    </div>
                    <br/><br/>
                </div>
            `;
            $('#dynamicForm').append(newForm);
        });

        $(document).on('click', '#remove', function() {
            console.log("removed");
            if (formCount > 0) {
                $('.dynamic-form-group:last').remove();
                formCount--;
            }
        });
    });
</script>


</body>
</html>
