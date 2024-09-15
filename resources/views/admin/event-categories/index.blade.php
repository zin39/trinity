@extends('admin.layouts.master')
@section('title')Event Categories @stop
@section('breadcrum')Event Categories @stop

@section('script')
@stop

@section('content')
     
<!-- Striped rows -->
    <div class="card">
        <div class="card-body filter-option advance">
            <h5 class="card-title">Add Event Category</h5>
            <hr class="mt-0 mb-2">
            <form class="form-horizontal" method="POST" action="{{ route('admin.event-categories.store') }}">
                @csrf
                @include('admin.event-categories.partial.form')
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">List of Event Categories ({{ $categories->total() }})</h5>
        </div>

        <table class="table datatable-basic table-striped">
            <thead>
                <tr class="bg-primary">
                    <th>Name</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @if($categories->total() != 0)
                    @foreach($categories as $key => $value)
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td class="text-right">
                                <a href="{{ route('admin.event-categories.edit',$value->id) }}" class="btn bg-success-400 btn-icon rounded-round" data-popup="tooltip" data-original-title="Edit" data-placement="bottom"><i class="icon-pencil"></i></a>

                                <form action="{{ route('admin.event-categories.destroy',$value->id) }}" method="POST" id="deleteForm" style="display: inline;">
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
                        <td colspan="4">No Event Categories Found !!!</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <span style="margin: 5px;float: right;">
            @if($categories->total() != 0)
            {{ $categories->appends(request()->except('page'))->links()  }}
            @endif
        </span>
    </div>
<!-- /striped rows -->

<script type="text/javascript">
    $('document').ready(function() {

    });

</script>
@endsection
