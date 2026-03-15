@php
    $section = optional(isset($sections['info-sessions-main']) ? json_decode($sections['info-sessions-main']) : null);
    $slug = 'info-sessions-main';
@endphp
<div class="card">
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.pages.savepage') }}">
            @csrf
            <input type="hidden" name="slug" value="{{ $slug }}">
            <input type="hidden" name="route" value="information_sessions">
            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Heading:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[heading]" class="form-control" value="{{ old($slug.'.heading', $section->heading) }}" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Intro Paragraph:</label>
                <div class="col-lg-9">
                    <textarea name="{{ $slug }}[intro]" class="form-control" rows="4">{{ old($slug.'.intro', $section->intro) }}</textarea>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Hero Background Image:</label>
                <div class="col-lg-9">
                    <input type="file" accept="image/*" name="{{ $slug }}[hero_image]" class="form-control">
                    @if($section && ($section->hero_image ?? null))
                        <img src="{{ asset($section->hero_image) }}" alt="Hero" style="height:80px;margin-top:8px;">
                        <input type="hidden" name="{{ $slug }}[hero_image]" value="{{ $section->hero_image }}">
                    @endif
                </div>
            </div>
            <div class="text-right">
                <button class="btn btn-primary" type="submit"><i class="icon-database-insert mr-2"></i> Save</button>
            </div>
        </form>
    </div>
</div>
