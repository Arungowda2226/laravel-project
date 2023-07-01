@extends('frontend.layouts.app')

@section('title', __('My Account'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Members List</h1>
            <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search by Name or Phone" oninput="searchTable()" />
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Relation</th>
                        <th>Photo</th>
                        <th>DOB</th>
                        <th>Married</th>
                        <th>Gender</th>
                        <th>originCity</th>
                        <th>bloodGroup</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($students as $student)
                        <tr onclick="showPopup('{{ $student->id }}')">
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->relation }}</td>
                            <td>{{ $student->photo }}</td>
                            <td>{{ $student->dob }}</td>
                            <td>{{ $student->married }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->originCity }}</td>
                            <td>{{ $student->bloodGroup }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="row">{{$students->links()}}</div>
        </div>
    </div>
</div>
<!-- modal pop-up -->
<div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="studentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentModalLabel">Student Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- FAMILY DETAILS -->
                <p><strong>ID:</strong> <span id="studentID"></span></p>
                <p><strong>Name:</strong> <span id="studentName"></span></p>
                <p><strong>Phone:</strong> <span id="studentPhone"></span></p>
                <p><strong>Email:</strong> <span id="studentEmail"></span></p>
                <p><strong>Relation:</strong> <span id="studentRelation"></span></p>
                <p><strong>Photo:</strong> <span id="studentPhoto"></span></p>
                <p><strong>DOB:</strong> <span id="studentDOB"></span></p>
                <p><strong>Married:</strong> <span id="studentMarried"></span></p>
                <p><strong>Gender:</strong> <span id="studentGender"></span></p>
                <p><strong>originCity:</strong> <span id="studentOriginCity"></span></p>
                <p><strong>bloodGroup:</strong> <span id="studentBloodGroup"></span></p>

                <!-- BUSINESS DETAILS -->
                <p><strong>OrganisationName:</strong> <span id="OrganisationName"></span></p>
                <p><strong>OrganisationAddress:</strong> <span id="OrganisationAddress"></span></p>
                <p><strong>OrganisationState:</strong> <span id="OrganisationState"></span></p>
                <p><strong>OrganisationCity:</strong> <span id="OrganisationCity"></span></p>
                <p><strong>OrganisationCountry:</strong> <span id="OrganisationCountry"></span></p>
                <p><strong>OrganisationPhone:</strong> <span id="OrganisationPhone"></span></p>
                <p><strong>OrganisationEmail:</strong> <span id="OrganisationEmail"></span></p>
                <p><strong>OrganisationPhotos:</strong> <span id="OrganisationPhotos"></span></p>
                <!-- USER_DETAILS -->
                <p><strong>Name:</strong> <span id="Name"></span></p>
                <p><strong>FatherName:</strong> <span id="FatherName"></span></p>
                <p><strong>MotherName:</strong> <span id="MotherName"></span></p>
                <p><strong>Photo:</strong> <span id="Photo"></span></p>
                <p><strong>Phone:</strong> <span id="Phone"></span></p>
                <p><strong>Email:</strong> <span id="Email"></span></p>
                <p><strong>DOB:</strong> <span id="DOB"></span></p>
                <p><strong>Gender:</strong> <span id="Gender"></span></p>
                <p><strong>Married:</strong> <span id="Married"></span></p>
                <p><strong>BloodGroup:</strong> <span id="BloodGroup"></span></p>
                <p><strong>Address:</strong> <span id="Address"></span></p>
                <p><strong>State:</strong> <span id="State"></span></p>
                <p><strong>City:</strong> <span id="City"></span></p>
                <p><strong>Pincode:</strong> <span id="Pincode"></span></p>
                <p><strong>Country:</strong> <span id="Country"></span></p>
                <p><strong>OriginAddress:</strong> <span id="OriginAddress"></span></p>
                <p><strong>OriginState:</strong> <span id="OriginState"></span></p>
                <p><strong>OriginCity:</strong> <span id="OriginCity"></span></p>
                <p><strong>OriginPincode:</strong> <span id="OriginPincode"></span></p>

                <button id="shareButton" class="btn btn-primary">Share</button>
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function searchTable() {
        const searchInput = document.getElementById('searchInput');
        const filter = searchInput.value.toLowerCase();
        const rows = document.querySelectorAll('.table tbody tr');

        rows.forEach(row => {
            const nameCell = row.querySelector('td:nth-child(2)');
            const phoneCell = row.querySelector('td:nth-child(3)');
            const name = nameCell.textContent.toLowerCase();
            const phone = phoneCell.textContent.toLowerCase();

            if (name.includes(filter) || phone.startsWith(filter)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    function showPopup(studId) {
        $.ajax({
            
            url: '/student/' + studId,
            method: 'GET',
            success: function(response) {
                console.log(response);
                // FAMILY DETAILS
                $('#studentID').text(response.student.id);
                $('#studentName').text(response.student.name);
                $('#studentPhone').text(response.student.phone);
                $('#studentEmail').text(response.student.email);
                $('#studentRelation').text(response.student.relation);
                $('#studentPhoto').text(response.student.photo);
                $('#studentDOB').text(response.student.dob);
                $('#studentMarried').text(response.student.married);
                $('#studentGender').text(response.student.gender);
                $('#studentOriginCity').text(response.student.originCity);
                $('#studentBloodGroup').text(response.student.bloodGroup);
                // BUSSINESS DETAILS
                $('#OrganisationName').text(response.student.OrganisationName);
                $('#OrganisationAddress').text(response.student.OrganisationAddress);
                $('#OrganisationState').text(response.student.OrganisationState);
                $('#OrganisationCity').text(response.student.OrganisationCity);
                $('#OrganisationCountry').text(response.student.OrganisationCountry);
                $('#OrganisationPhone').text(response.student.OrganisationPhone);
                $('#OrganisationEmail').text(response.student.OrganisationEmail);
                $('#OrganisationPhotos').text(response.student.OrganisationPhotos);

                // USER_DETAILS
                $('#Name').text(response.student.Name);
                $('#FatherName').text(response.student.FatherName);
                $('#MotherName').text(response.student.MotherName);
                $('#Photo').text(response.student.Photo);
                $('#Phone').text(response.student.Phone);
                $('#Email').text(response.student.Email);
                $('#DOB').text(response.student.DOB);
                $('#Gender').text(response.student.Gender);
                $('#Married').text(response.student.Married);
                $('#BloodGroup').text(response.student.BloodGroup);
                $('#Address').text(response.student.Address);
                $('#State').text(response.student.State);
                $('#City').text(response.student.City);
                $('#Pincode').text(response.student.Pincode);
                $('#Country').text(response.student.Country);
                $('#OriginAddress').text(response.student.OriginAddress);
                $('#OriginState').text(response.student.OriginState);
                $('#OriginCity').text(response.student.OriginCity);
                $('#OriginPincode').text(response.student.OriginPincode);



                $('#studentModal').modal('show');

                 $('#shareButton').click(function() {
                    // Get the student data
                    var studentName = response.student.name;
                    var studentPhone = response.student.phone;
                    // ...

                    // Construct the share message
                    var shareMessage = 'Check out this student:\n\n';
                    shareMessage += 'Name: ' + studentName + '\n';
                    shareMessage += 'Phone: ' + studentPhone + '\n';
                    // ...

                     var encodedMessage = encodeURIComponent(shareMessage);
                    var whatsappUrl = 'https://api.whatsapp.com/send?text=' + encodedMessage;

                    // Open the WhatsApp URL in a new window or tab
                    window.open(whatsappUrl, '_blank');
                });
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>
@endsection
