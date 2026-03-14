@php
    $section = optional(isset($sections['contact-main']) ? json_decode($sections['contact-main']) : null);
    $slug = 'contact-main';
@endphp
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('admin.pages.savepage') }}">
            @csrf
            <input type="hidden" name="slug" value="{{ $slug }}">
            <input type="hidden" name="route" value="contact">
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
            <div class="text-right">
                <button class="btn btn-primary" type="submit"><i class="icon-database-insert mr-2"></i> Save</button>
            </div>
        </form>
    </div>
</div>
