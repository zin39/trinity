@extends('admin.layouts.master')
@section('title')Consultation Request @stop
@section('breadcrum')Consultation Request @stop

@section('script')
@stop

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

        <table class="table datatable-basic table-striped">
            <thead>
                <tr class="bg-primary">
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Company</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @if($consultationRequests->total() != 0)
                    @foreach($consultationRequests as $key => $value)
                        <tr>
                            <td>{{ $value->first_name }} {{ $value->last_name }}</td>
                            <td>{{ $value->phone_number }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->company }}</td>
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
                        <td colspan="4">No Consultation Request Found !!!</td>
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
@endsection
