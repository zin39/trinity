@php
    $section = optional(isset($sections['about-values']) ? json_decode($sections['about-values']) : null);
    $slug = 'about-values';
@endphp
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('admin.pages.savepage') }}">
            @csrf
            <input type="hidden" name="slug" value="{{ $slug }}">
            <input type="hidden" name="route" value="about">
            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Heading:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[heading]" class="form-control" value="{{ old($slug.'.heading', $section->heading) }}" required>
                </div>
            </div>
            @for($i = 1; $i <= 6; $i++)
            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Value {{ $i }}:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[value_{{ $i }}]" class="form-control" value="{{ old($slug.'.value_'.$i, $section->{'value_'.$i}) }}">
                </div>
            </div>
            @endfor
            <div class="text-right">
                <button class="btn btn-primary" type="submit"><i class="icon-database-insert mr-2"></i> Save</button>
            </div>
        </form>
    </div>
</div>
