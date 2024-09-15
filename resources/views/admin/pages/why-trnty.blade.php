@extends('admin.layouts.master')
@section('title'){{ $page->title }} Edit Page @stop
@section('breadcrum')Edit Page @stop

@section('script')

@stop @section('content')

<!-- Form inputs -->
<div class="card">
    <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('admin.pages.update', $page->id) }}" enctype="multipart/form-data">
            @csrf
            @include('admin.pages.partial.form', ['is_edit' => true])
        </form>
    </div>
</div>
<!-- /form inputs -->
<div class="card">
    <div class="card-body">
        <fieldset>
            <legend class="text-uppercase font-size-sm font-weight-bold d-flex justify-content-between align-items-center">
                <span>Sub Pages</span>
                <a href="{{ route('admin.pages.subpage.create', $page->id) }}" class="btn btn-sm btn-info">Add new sub-page</a>
            </legend>

            @foreach($page->sub_pages as $sub_page)
                <div class="border p-3 mb-2">
                    <h5 class="mb-1">{{ $sub_page->title }}</h5>
                    <div>{{ $sub_page->short_content }}</div>

                    <div class="mt-2">
                        <a class="btn btn-warning btn-sm btn-icon" href="{{ route('admin.pages.subpage.edit',['id' => $page->id, 'subpage_id' => $sub_page->id]) }}" data-popup="tooltip" data-original-title="Edit" data-placement="bottom"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('admin.pages.subpage.delete',['id' => $page->id, 'subpage_id' => $sub_page->id]) }}" method="POST" id="deleteForm" style="display: inline;">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="button" class="btn bg-danger-400 btn-icon btn-sm btn-delete" data-popup="tooltip" data-original-title="Delete" data-placement="bottom">
                                <i class="icon-bin"></i>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </fieldset>
    </div>
</div>

@stop