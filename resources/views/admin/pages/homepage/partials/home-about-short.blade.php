@php
    $section = optional(isset($sections['home-about-short']) ? json_decode($sections['home-about-short']) : null);
    $slug = 'home-about-short';
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
                    <input type="text" name="{{ $slug }}[heading]" class="form-control" value="{{ old($slug.'.heading', $section->heading) }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Body Text:</label>
                <div class="col-lg-9">
                    <textarea name="{{ $slug }}[body]" class="form-control" rows="6">{{ old($slug.'.body', $section->body) }}</textarea>
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">CTA Text:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[cta_text]" class="form-control" value="{{ old($slug.'.cta_text', $section->cta_text) }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">CTA Link:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[cta_link]" class="form-control" value="{{ old($slug.'.cta_link', $section->cta_link) }}">
                </div>
            </div>

            <div class="text-right">
                <button class="btn btn-primary" type="submit"><i class="icon-database-insert mr-2"></i> Save</button>
            </div>
        </form>
    </div>
</div>
