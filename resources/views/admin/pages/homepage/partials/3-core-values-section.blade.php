@php
    $section = optional($sections['home-3-core-values'] ? json_decode($sections['home-3-core-values']) : null);
    $slug = 'home-3-core-values';
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
                        <label class="col-form-label col-lg-3">Subtitle:<span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-pencil"></i>
                                    </span>
                                </span>
                                <input type="text" name='{{ $slug }}[subtitle]' value="{{ old($slug.'.subtitle', $section->subtitle) }}" class='form-control' required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Counter 1:<span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-stats-growth2"></i>
                                    </span>
                                </span>
                                <input type="number" name='{{ $slug }}[counter_1]' value="{{ old($slug.'.counter_1', $section->counter_1) }}" class='form-control' required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Counter 2:<span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-stats-growth2"></i>
                                    </span>
                                </span>
                                <input type="number" name='{{ $slug }}[counter_2]' value="{{ old($slug.'.counter_1', $section->counter_1) }}" class='form-control' required />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-2">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Sub-section 1</legend>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Icon: <span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-images3"></i></span>
                                </span>
                                <input type="file" accept="image/*" name='{{ $slug }}[sub_section_1_icon]' class='form-control image' {{ $section->sub_section_1_icon ? '' : 'required' }} />
                            </div>
                            @if($section->sub_section_1_icon)
                                @php
                                    $image = asset($section->sub_section_1_icon);
                                @endphp
                                <a href="{{ $image }}" target="_blank">
                                    <img id="blog_image" src="{{ $image }}" alt="your image" class="preview-image" style="height: 50px;width: auto;" />
                                </a>
                                <input type="hidden" name='{{ $slug }}[sub_section_1_icon]' value="{{ $section->sub_section_1_icon }}" class='form-control' />
                            @endif
                        </div>
                    </div>
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
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Link:<span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-link"></i>
                                    </span>
                                </span>
                                <input type="text" name='{{ $slug }}[sub_section_1_link]' value="{{ old($slug.'.sub_section_1_link', $section->sub_section_1_link) }}" class='form-control' required />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-2">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Sub-section 2</legend>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Icon: <span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-images3"></i></span>
                                </span>
                                <input type="file" accept="image/*" name='{{ $slug }}[sub_section_2_icon]' class='form-control image' {{ $section->sub_section_2_icon ? '' : 'required' }} />
                            </div>
                            @if($section->sub_section_2_icon)
                                @php
                                    $image = asset($section->sub_section_2_icon);
                                @endphp
                                <a href="{{ $image }}" target="_blank">
                                    <img id="blog_image" src="{{ $image }}" alt="your image" class="preview-image" style="height: 50px;width: auto;" />
                                </a>
                                <input type="hidden" name='{{ $slug }}[sub_section_2_icon]' value="{{ $section->sub_section_2_icon }}" class='form-control' />
                            @endif
                        </div>
                    </div>
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
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Link:<span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-link"></i>
                                    </span>
                                </span>
                                <input type="text" name='{{ $slug }}[sub_section_2_link]' value="{{ old($slug.'.sub_section_2_link', $section->sub_section_2_link) }}" class='form-control' required />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-2">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Sub-section 3</legend>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Icon: <span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-images3"></i></span>
                                </span>
                                <input type="file" accept="image/*" name='{{ $slug }}[sub_section_3_icon]' class='form-control image' {{ $section->sub_section_3_icon ? '' : 'required' }} />
                            </div>
                            @if($section->sub_section_3_icon)
                                @php
                                    $image = asset($section->sub_section_3_icon);
                                @endphp
                                <a href="{{ $image }}" target="_blank">
                                    <img id="blog_image" src="{{ $image }}" alt="your image" class="preview-image" style="height: 50px;width: auto;" />
                                </a>
                                <input type="hidden" name='{{ $slug }}[sub_section_3_icon]' value="{{ $section->sub_section_3_icon }}" class='form-control' />
                            @endif
                        </div>
                    </div>
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
                                <input type="text" name='{{ $slug }}[sub_section_3_title]' value="{{ old($slug.'.sub_section_3_title', $section->sub_section_3_title) }}" class='form-control' required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Description:<span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <textarea name='{{ $slug }}[sub_section_3_description]' class='form-control simple_textarea_description'>{{ old($slug.'.sub_section_3_description', $section->sub_section_3_description) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Link:<span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-link"></i>
                                    </span>
                                </span>
                                <input type="text" name='{{ $slug }}[sub_section_3_link]' value="{{ old($slug.'.sub_section_3_link', $section->sub_section_3_link) }}" class='form-control' required />
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