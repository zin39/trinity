@php
    $section = optional(isset($sections['home-services-preview']) ? json_decode($sections['home-services-preview']) : null);
    $slug = 'home-services-preview';
@endphp
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('admin.pages.savepage') }}">
            @csrf
            <input type="hidden" name="slug" value="{{ $slug }}">
            <input type="hidden" name="route" value="homepage">

            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Heading:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[heading]" class="form-control" value="{{ old($slug.'.heading', $section->heading) }}" required>
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Intro Text:</label>
                <div class="col-lg-9">
                    <textarea name="{{ $slug }}[intro]" class="form-control" rows="3">{{ old($slug.'.intro', $section->intro) }}</textarea>
                </div>
            </div>

            @for($i = 1; $i <= 5; $i++)
            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Service {{ $i }} Name:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[service_{{ $i }}]" class="form-control" value="{{ old($slug.'.service_'.$i, $section->{'service_'.$i}) }}">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Service {{ $i }} Description:</label>
                <div class="col-lg-9">
                    <textarea name="{{ $slug }}[service_{{ $i }}_desc]" class="form-control" rows="2">{{ old($slug.'.service_'.$i.'_desc', $section->{'service_'.$i.'_desc'}) }}</textarea>
                </div>
            </div>
            @endfor

            <div class="text-right">
                <button class="btn btn-primary" type="submit"><i class="icon-database-insert mr-2"></i> Save</button>
            </div>
        </form>
    </div>
</div>
