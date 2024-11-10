@php
    $section = optional($sections['home-latest-news'] ? json_decode($sections['home-latest-news']) : null);
    $slug = 'home-latest-news';
@endphp
<div class="card">
    <div class="card-body">
        <form method="POST" class="form-horizontal" enctype="multipart/form-data" action="{{route('admin.pages.savepage')}}">
            @csrf
            <input type="hidden" name="slug" value="{{ $slug }}">
            <input type="hidden" name="route" value="homepage">
            
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
                        <label class="col-form-label col-lg-3">Subtitle:<span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-pencil"></i>
                                    </span>
                                </span>
                                <input type="text" name='{{ $slug }}[subtitle]' class='form-control' value="{{ old($slug.'.subtitle', $section->subtitle) }}" required />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-3">Button Text:<span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-pencil"></i>
                                    </span>
                                </span>
                                <input type="text" name='{{ $slug }}[btntext]' class='form-control' value="{{ old($slug.'.btntext', $section->btntext) }}" required />
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
                                <input type="file" accept="image/*" name='{{ $slug }}[image]' class='form-control image' {{ $section->image ? '' : 'required' }} />
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
               
                <div class="col-lg-12 text-right">
                    <button class="ml-2 btn bg-primary btn-labeled btn-labeled-left" type="submit">
                        <b><i class="icon-database-insert"></i></b> Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>