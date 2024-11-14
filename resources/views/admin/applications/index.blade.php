@extends('admin.layouts.master')
@section('title')Application @stop
@section('breadcrum')Application @stop

@section('script')
@stop

@section('content')
     
    @include('admin.applications.partial.filter')
<!-- Striped rows -->
    <div class="card">
        <!-- <div class="card-header header-elements-inline">
            <h5 class="card-title">List of Application ({{ $applications->total() }})</h5>
            <a href="{{ route('admin.applications.create') }}" class="btn bg-success-600 btn-labeled btn-labeled-left" style="float: left">
                <b><i class="icon-pen-plus"></i></b> Add Application
            </a>
        </div> -->

        <table class="table datatable-basic table-striped">
            <thead>
                <tr class="bg-primary">
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Country of Birth</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @if($applications->total() != 0)
                    @foreach($applications as $key => $value)
                        <tr>
                            <td>{{ $value->first_name }} {{ $value->last_name }}</td>
                            <td>{{ $value->phone_number }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->country_of_birth }}</td>
                            <!-- <td>
                                <span class="badge {{ $value->status ? 'badge-success' : 'badge-danger' }}">{{ $value->status ? 'Enabled' : 'Disabled' }}</span>
                            </td> -->
                            <td class="text-right">
                                <a href="{{ route('admin.applications.show',$value->id) }}" class="btn bg-success-400 btn-icon rounded-round" data-popup="tooltip" data-original-title="View" data-placement="bottom"><i class="icon-eye"></i></a>

                                <form action="{{ route('admin.applications.destroy',$value->id) }}" method="POST" id="deleteForm" style="display: inline;">
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
                        <td colspan="4">No Application Found !!!</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <span style="margin: 5px;float: right;">
            @if($applications->total() != 0)
            {{ $applications->appends(request()->except('page'))->links()  }}
            @endif
        </span>
    </div>
<!-- /striped rows -->

<script type="text/javascript">
    $('document').ready(function() {

    });

</script>
@endsection
