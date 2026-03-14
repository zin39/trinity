@php
    $section = optional(isset($sections['home-hero']) ? json_decode($sections['home-hero']) : null);
    $slug = 'home-hero';
@endphp
<div class="card">
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.pages.savepage') }}">
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
                <label class="col-form-label col-lg-3">Subheading:</label>
                <div class="col-lg-9">
                    <textarea name="{{ $slug }}[subheading]" class="form-control" rows="3">{{ old($slug.'.subheading', $section->subheading) }}</textarea>
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">CTA 1 Text:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[cta1_text]" class="form-control" value="{{ old($slug.'.cta1_text', $section->cta1_text) }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">CTA 1 Link:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[cta1_link]" class="form-control" value="{{ old($slug.'.cta1_link', $section->cta1_link) }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">CTA 2 Text:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[cta2_text]" class="form-control" value="{{ old($slug.'.cta2_text', $section->cta2_text) }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">CTA 2 Link:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[cta2_link]" class="form-control" value="{{ old($slug.'.cta2_link', $section->cta2_link) }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Background Image:</label>
                <div class="col-lg-9">
                    <input type="file" accept="image/*" name="{{ $slug }}[background_image]" class="form-control">
                    @if($section && $section->background_image)
                        <img src="{{ asset($section->background_image) }}" alt="Background" style="height:80px;margin-top:8px;">
                        <input type="hidden" name="{{ $slug }}[background_image]" value="{{ $section->background_image }}">
                    @endif
                </div>
            </div>

            <div class="text-right">
                <button class="btn btn-primary" type="submit"><i class="icon-database-insert mr-2"></i> Save</button>
            </div>
        </form>
    </div>
</div>
