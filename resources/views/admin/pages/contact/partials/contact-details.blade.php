@php
    $section = optional(isset($sections['contact-details']) ? json_decode($sections['contact-details']) : null);
    $slug = 'contact-details';
@endphp
<div class="card">
    <div class="card-body">
        <p class="text-muted mb-3">
            <i class="icon-info22 mr-1"></i>
            Phone, email, and address are managed under <a href="{{ route('admin.settings.index') }}">Website Setup → Basic Settings</a>.
        </p>
        <form method="POST" action="{{ route('admin.pages.savepage') }}">
            @csrf
            <input type="hidden" name="slug" value="{{ $slug }}">
            <input type="hidden" name="route" value="contact">
            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Business Name:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[business_name]" class="form-control" value="{{ old($slug.'.business_name', $section->business_name ?? 'Karissa Subedi Career Consultancy Services') }}">
                </div>
            </div>
            <div class="text-right">
                <button class="btn btn-primary" type="submit"><i class="icon-database-insert mr-2"></i> Save</button>
            </div>
        </form>
    </div>
</div>
