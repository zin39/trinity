@extends('admin.layouts.master')
@section('title')Consultation Request @stop
@section('breadcrum')Consultation Request @stop

@section('script')
@stop

@section('css')
<style>

.application-item.unread{
    font-weight: bold;
    color: black;
}

.application-item.read{
    font-weight: normal;
    color: grey; !important
}
</style>
@endsection
@section('content')

    @include('admin.consultation-requests.partial.filter')
<!-- Striped rows -->
    <div class="card">
        <!-- <div class="card-header header-elements-inline">
            <h5 class="card-title">List of Consultation Request ({{ $consultationRequests->total() }})</h5>
            <a href="{{ route('admin.consultation-requests.create') }}" class="btn bg-success-600 btn-labeled btn-labeled-left" style="float: left">
                <b><i class="icon-pen-plus"></i></b> Add Consultation Request
            </a>
        </div> -->

        <table class="table datatable-basic table-striped" id="applications-table">
            <thead>
                <tr class="bg-primary">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Country</th>
                    <th>Organisation</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @if($consultationRequests->total() != 0)
                    @foreach($consultationRequests as $key => $value)
                        <tr id="application-{{ $value->id }}" class="application-item {{ $value->is_read? 'read' : 'unread' }}" >
                            <td>{{ $value->first_name }} {{ $value->last_name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ ucfirst($value->enquiry_type ?? '-') }}</td>
                            <td>{{ $value->country ?? '-' }}</td>
                            <td>{{ $value->organisation ?? '-' }}</td>
                            <!-- <td>
                                <span class="badge {{ $value->status ? 'badge-success' : 'badge-danger' }}">{{ $value->status ? 'Enabled' : 'Disabled' }}</span>
                            </td> -->
                            <td class="text-right">
                                <a href="{{ route('admin.consultation-requests.show',$value->id) }}" class="btn bg-success-400 btn-icon rounded-round" data-popup="tooltip" data-original-title="View" data-placement="bottom"><i class="icon-eye"></i></a>

                                <form action="{{ route('admin.consultation-requests.destroy',$value->id) }}" method="POST" id="deleteForm" style="display: inline;">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE" />

                                    <button type="button" class="btn bg-danger-400 btn-icon rounded-round btn-delete" data-popup="tooltip" data-original-title="Delete" data-placement="bottom">
                                        <i class="icon-bin"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6">No Consultation Request Found !!!</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <span style="margin: 5px;float: right;">
            @if($consultationRequests->total() != 0)
            {{ $consultationRequests->appends(request()->except('page'))->links()  }}
            @endif
        </span>
    </div>
<!-- /striped rows -->

<script type="text/javascript">
    $('document').ready(function() {

    });

</script>
<script>
function markAsViewed(id) {
    console.log("markAsViewed called for application ID:", id);
    fetch(`/admin/consultation-requests/${id}/mark-as-read`, {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.message === 'Consultation request marked as read') {
            const applicationRow = document.getElementById(`application-${id}`);
            if (applicationRow) {
                // Check console to confirm function execution
                console.log("Class change from unread to read for application:", id);

                applicationRow.classList.remove('unread');
                applicationRow.classList.add('read');
            }
        } else {
            alert('Error: ' + data.message);
        }
    })
    .catch(error => console.error('Error:', error));
}
</script>

<script>
    let lastAppId = @json($lastAppId);
    console.log("Initial lastAppId from server:", lastAppId);

    // Function to fetch and display new applications
    function fetchNewApplications() {
        console.log("Attempting to fetch new applications...");
        $.ajax({
            url: "{{ route('admin.consultation-requests.fetchNew') }}",
            method: 'GET',
            data: {
                last_app_id: lastAppId  // Send lastAppId as a parameter to the server
            },
            success: function(data) {
                if (data.applications.length > 0) {
                    // Loop through new applications and append them to the table
                    data.applications.forEach(function(application) {
                        if (application.id > lastAppId) {
                            lastAppId = application.id;  // Update lastAppId to the highest new ID
                        }

                        console.log("New application data:", application);

                        var row = '<tr id="application-' + application.id + '" class="application-item unread">' +
                                    '<td>' + application.first_name + ' ' + application.last_name + '</td>' +
                                    '<td>' + application.phone_number + '</td>' +
                                    '<td>' + application.email + '</td>' +
                                    '<td>' + application.company + '</td>' +
                                    '<td class="text-right">' +
                                        // View button
                                        '<a href="{{ url('admin/consultation-requests') }}/' + application.id + '" class="btn bg-success-400 btn-icon rounded-round" data-popup="tooltip" data-original-title="View" data-placement="bottom" onclick="markAsViewed(' + application.id + ')">' +
                                            '<i class="icon-eye"></i>' +
                                        '</a>' +
                                        // Delete button
                                        '<form action="{{ url('admin/consultation-requests') }}/' + application.id + '" method="POST" style="display:inline;">' +
                                            '@csrf' +
                                            '@method("DELETE")' +
                                            '<button type="submit" class="btn btn-danger btn-icon rounded-round" data-popup="tooltip" data-original-title="Delete" data-placement="bottom">' +
                                                '<i class="icon-trash"></i>' +
                                            '</button>' +
                                        '</form>' +
                                    '</td>' +
                                  '</tr>';

                        // Prepend new row to the table
                        $('#applications-table tbody').prepend(row);
                    });
                }
            },
            error: function(xhr) {
                console.error("Error fetching new applications:", xhr.responseText);
            }
        });
    }

    // Call the function every 5 seconds to check for new applications
    setInterval(fetchNewApplications, 5000);

    // Initial call to populate on load
    fetchNewApplications();
</script>

@endsection
