@php
    $section = optional(isset($sections['about-main']) ? json_decode($sections['about-main']) : null);
    $slug = 'about-main';
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
            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Body Text:</label>
                <div class="col-lg-9">
                    <textarea name="{{ $slug }}[body]" class="form-control" rows="8">{{ old($slug.'.body', $section->body) }}</textarea>
                </div>
            </div>
            <div class="text-right">
                <button class="btn btn-primary" type="submit"><i class="icon-database-insert mr-2"></i> Save</button>
            </div>
        </form>
    </div>
</div>
