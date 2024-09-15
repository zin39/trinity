<div class="card">
    <div class="card-body">
        <fieldset>
            @php
                $slug = 'jobs-in-australia-section-2';
                $section = optional($sections[$slug] ? json_decode($sections[$slug]) : null);
            @endphp
            <legend class="text-uppercase font-size-sm font-weight-bold">
                Section 2
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
                        <label class="col-form-label col-lg-3">Image:</label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-images3"></i></span>
                                </span>
                                <input type="file" accept="image/*" name='{{ $slug }}[image]' class='form-control image' />
                            </div>
                            
                            @if($section->image)
                                @php
                                    $image = asset($section->image);
                                @endphp
                                <a href="{{ $image }}" target="_blank">
                                    <img id="blog_image" src="{{ $image }}" alt="your image" class="preview-image" style="height: 100px;width: auto;" />
                                </a>
                                <input type="hidden" name='{{ $slug }}[image]' value="{{ $section->image }}" class='form-control' />
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Page Link:</label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-link"></i></span>
                                </span>
                                <input type="text" name='{{ $slug }}[page_link]' class='form-control' value="{{ old($slug.'.page_link', $section->page_link) }}" />
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