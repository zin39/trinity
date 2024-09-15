@extends('admin.layouts.master')
@section('title')Event @stop
@section('breadcrum')Event @stop

@section('script')
@stop

@section('content')
     
    @include('admin.events.partial.filter')
<!-- Striped rows -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">List of Event ({{ $events->total() }})</h5>
            <a href="{{ route('admin.events.create') }}" class="btn bg-success-600 btn-labeled btn-labeled-left" style="float: left">
                <b><i class="icon-pen-plus"></i></b> Add Event
            </a>
        </div>

        <table class="table datatable-basic table-striped">
            <thead>
                <tr class="bg-primary">
                    <th>Title</th>
                    <th>Categories</th>
                    <th>Status</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @if($events->total() != 0)
                    @foreach($events as $key => $value)
                        <tr>
                            <td>{{ $value->title }}</td>
                            <td>{{ implode(', ', $value->categories->pluck('name')->toArray()) }}</td>
                            <td>
                                <span class="badge {{ $value->status ? 'badge-success' : 'badge-danger' }}">{{ $value->status ? 'Enabled' : 'Disabled' }}</span>
                            </td>
                            <td class="text-right">
                                <a href="{{ route('admin.events.edit',$value->id) }}" class="btn bg-success-400 btn-icon rounded-round" data-popup="tooltip" data-original-title="Edit" data-placement="bottom"><i class="icon-pencil"></i></a>

                                <form action="{{ route('admin.events.destroy',$value->id) }}" method="POST" id="deleteForm" style="display: inline;">
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
                        <td colspan="4">No Event Found !!!</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <span style="margin: 5px;float: right;">
            @if($events->total() != 0)
            {{ $events->appends(request()->except('page'))->links()  }}
            @endif
        </span>
    </div>
<!-- /striped rows -->

<script type="text/javascript">
    $('document').ready(function() {

    });

</script>
@endsection
