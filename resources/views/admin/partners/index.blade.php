@extends('admin.layouts.master')
@section('title')Partners @stop
@section('breadcrum')Partners @stop

@section('script')
@stop

@section('content')
     
<!-- Striped rows -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">List of Partners ({{ $partners->count() }})</h5>
            <a href="{{ route('admin.partners.create') }}" class="btn bg-success-600 btn-labeled btn-labeled-left" style="float: left">
                <b><i class="icon-pen-plus"></i></b> Add Partner
            </a>
        </div>

        <table class="table datatable-basic table-striped">
            <thead>
                <tr class="bg-primary">
                    <th>Name</th>
                    <th>Status</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @if($partners->count() != 0)
                    @foreach($partners as $key => $value)
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>
                                <span class="badge {{ $value->status ? 'badge-success' : 'badge-danger' }}">{{ $value->status ? 'Enabled' : 'Disabled' }}</span>
                            </td>
                            <td class="text-right">
                                <a href="{{ route('admin.partners.edit',$value->id) }}" class="btn bg-success-400 btn-icon rounded-round" data-popup="tooltip" data-original-title="Edit" data-placement="bottom"><i class="icon-pencil"></i></a>

                                <form action="{{ route('admin.partners.destroy',$value->id) }}" method="POST" id="deleteForm" style="display: inline;">
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
                        <td colspan="4">No Partner Found !!!</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
<!-- /striped rows -->

<script type="text/javascript">
    $('document').ready(function() {

    });

</script>
@endsection
