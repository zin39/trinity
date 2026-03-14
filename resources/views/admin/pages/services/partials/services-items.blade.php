@php
    $section = optional(isset($sections['services-items']) ? json_decode($sections['services-items']) : null);
    $slug = 'services-items';
@endphp
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('admin.pages.savepage') }}">
            @csrf
            <input type="hidden" name="slug" value="{{ $slug }}">
            <input type="hidden" name="route" value="services">
            @for($i = 1; $i <= 5; $i++)
            <div class="card mb-3">
                <div class="card-header"><strong>Service {{ $i }}</strong></div>
                <div class="card-body">
                    <div class="form-group row mb-3">
                        <label class="col-form-label col-lg-3">Title:</label>
                        <div class="col-lg-9">
                            <input type="text" name="{{ $slug }}[service_{{ $i }}_title]" class="form-control" value="{{ old($slug.'.service_'.$i.'_title', $section->{'service_'.$i.'_title'}) }}">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label class="col-form-label col-lg-3">Description:</label>
                        <div class="col-lg-9">
                            <textarea name="{{ $slug }}[service_{{ $i }}_desc]" class="form-control" rows="3">{{ old($slug.'.service_'.$i.'_desc', $section->{'service_'.$i.'_desc'}) }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
            <div class="text-right">
                <button class="btn btn-primary" type="submit"><i class="icon-database-insert mr-2"></i> Save</button>
            </div>
        </form>
    </div>
</div>
