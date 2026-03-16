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

            <h5 class="mb-3">Candidate Panel (Left)</h5>

            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Candidate Heading:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[candidate_heading]" class="form-control" value="{{ old($slug.'.candidate_heading', $section->candidate_heading) }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Candidate CTA Text:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[candidate_cta]" class="form-control" value="{{ old($slug.'.candidate_cta', $section->candidate_cta) }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Candidate Background Image:</label>
                <div class="col-lg-9">
                    <input type="file" accept="image/*" name="{{ $slug }}[candidate_image]" class="form-control">
                    @if($section && ($section->candidate_image ?? null))
                        <img src="{{ asset($section->candidate_image) }}" alt="Candidate" style="height:80px;margin-top:8px;">
                        <input type="hidden" name="{{ $slug }}[candidate_image]" value="{{ $section->candidate_image }}">
                    @endif
                </div>
            </div>

            <hr>
            <h5 class="mb-3">Employer Panel (Right)</h5>

            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Employer Heading:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[employer_heading]" class="form-control" value="{{ old($slug.'.employer_heading', $section->employer_heading) }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Employer CTA Text:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[employer_cta]" class="form-control" value="{{ old($slug.'.employer_cta', $section->employer_cta) }}">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Employer Background Image:</label>
                <div class="col-lg-9">
                    <input type="file" accept="image/*" name="{{ $slug }}[employer_image]" class="form-control">
                    @if($section && ($section->employer_image ?? null))
                        <img src="{{ asset($section->employer_image) }}" alt="Employer" style="height:80px;margin-top:8px;">
                        <input type="hidden" name="{{ $slug }}[employer_image]" value="{{ $section->employer_image }}">
                    @endif
                </div>
            </div>

            <div class="text-right">
                <button class="btn btn-primary" type="submit"><i class="icon-database-insert mr-2"></i> Save</button>
            </div>
        </form>
    </div>
</div>
