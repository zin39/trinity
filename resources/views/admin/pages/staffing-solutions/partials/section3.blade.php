<div class="card">
    <div class="card-body">
        <fieldset>
            @php
                $slug = 'staffing-solutions-section-3';
                $section = optional($sections[$slug] ? json_decode($sections[$slug]) : null);
            @endphp
            <legend class="text-uppercase font-size-sm font-weight-bold">
                Section 3
            </legend>
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Title:<span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-pencil"></i>
                                    </span>
                                </span>
                                <input type="text" name='{{ $slug }}[title]' class='form-control' value="{{ old($slug.'.title', $section->title) }}" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Description:<span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <textarea name='{{ $slug }}[description]' class='form-control simple_textarea_description'>{{ old($slug.'.description', $section->description) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>