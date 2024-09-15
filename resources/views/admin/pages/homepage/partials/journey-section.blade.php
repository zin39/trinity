@php
    $section = optional($sections['home-journey'] ? json_decode($sections['home-journey']) : null);
    $slug = 'home-journey';
@endphp
<div class="card">
    <div class="card-body">
        <form method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="slug" value="{{ $slug }}">
            
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
                                <input type="text" name='{{ $slug }}[title]' value="{{ old($slug.'.title', $section->title) }}" class='form-control' required />
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
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Portrait Image: <span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-images3"></i></span>
                                </span>
                                <input type="file" accept="image/*" name='{{ $slug }}[image_1]'  class='form-control image' {{ $section->image_1 ? '' : 'required' }} />
                            </div>
                            @if($section->image_1)
                                @php
                                    $image = asset($section->image_1);
                                @endphp
                                <a href="{{ $image }}" target="_blank">
                                    <img id="blog_image" src="{{ $image }}" alt="your image" class="preview-image" style="height: 100px;width: auto;" />
                                </a>
                                <input type="hidden" name='{{ $slug }}[image_1]' value="{{ $section->image_1 }}" class='form-control' />
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Small Square Image: <span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-images3"></i></span>
                                </span>
                                <input type="file" accept="image/*" name='{{ $slug }}[image_2]' class='form-control image' {{ $section->image_2 ? '' : 'required' }} />
                            </div>
                            @if($section->image_2)
                                @php
                                    $image = asset($section->image_2);
                                @endphp
                                <a href="{{ $image }}" target="_blank">
                                    <img id="blog_image" src="{{ $image }}" alt="your image" class="preview-image" style="height: 100px;width: auto;" />
                                </a>
                                <input type="hidden" name='{{ $slug }}[image_2]' value="{{ $section->image_2 }}" class='form-control image' />
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-2">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Sub-section 1</legend>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Title:<span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-pencil"></i>
                                    </span>
                                </span>
                                <input type="text" name='{{ $slug }}[sub_section_1_title]' value="{{ old($slug.'.sub_section_1_title', $section->sub_section_1_title) }}" class='form-control' required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Description:<span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <textarea name='{{ $slug }}[sub_section_1_description]' class='form-control simple_textarea_description'>{{ old($slug.'.sub_section_1_description', $section->sub_section_1_description) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-2">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Sub-section 2</legend>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Title:<span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-pencil"></i>
                                    </span>
                                </span>
                                <input type="text" name='{{ $slug }}[sub_section_2_title]' value="{{ old($slug.'.sub_section_2_title', $section->sub_section_2_title) }}" class='form-control' required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Description:<span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <textarea name='{{ $slug }}[sub_section_2_description]' class='form-control simple_textarea_description'>{{ old($slug.'.sub_section_2_description', $section->sub_section_2_description) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 text-right">
                    <button class="ml-2 btn bg-primary btn-labeled btn-labeled-left" type="submit">
                        <b><i class="icon-database-insert"></i></b> Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>