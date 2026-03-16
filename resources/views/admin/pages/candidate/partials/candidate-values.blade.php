@php
    $section = optional(isset($sections['candidate-values']) ? json_decode($sections['candidate-values']) : null);
    $slug = 'candidate-values';
@endphp
<div class="card">
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.pages.savepage') }}">
            @csrf
            <input type="hidden" name="slug" value="{{ $slug }}">
            <input type="hidden" name="route" value="candidate">
            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Section Heading:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[heading]" class="form-control" value="{{ old($slug.'.heading', $section->heading) }}">
                </div>
            </div>
            @for($i = 1; $i <= 5; $i++)
            <hr>
            <h6>Value {{ $i }}</h6>
            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Title:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[value_{{ $i }}_title]" class="form-control" value="{{ old($slug.'.value_'.$i.'_title', $section->{'value_'.$i.'_title'} ?? '') }}">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Description:</label>
                <div class="col-lg-9">
                    <textarea name="{{ $slug }}[value_{{ $i }}_desc]" class="form-control" rows="2">{{ old($slug.'.value_'.$i.'_desc', $section->{'value_'.$i.'_desc'} ?? '') }}</textarea>
                </div>
            </div>
            @endfor
            <div class="text-right">
                <button class="btn btn-primary" type="submit"><i class="icon-database-insert mr-2"></i> Save</button>
            </div>
        </form>
    </div>
</div>
