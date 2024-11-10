@php
    $section = optional($sections['home-registered-nurse-take-step'] ? json_decode($sections['home-registered-nurse-take-step']) : null);
    $slug = 'home-registered-nurse-take-step';
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
                        <label class="col-form-label col-lg-3">Apply Button Text:<span class="text-danger">*</span></label>
                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-pencil"></i>
                                    </span>
                                </span>
                                <input type="text" name='{{ $slug }}[applyBtnText]' value="{{ old($slug.'.applyBtnText', $section->applyBtnText) }}" class='form-control' required />
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