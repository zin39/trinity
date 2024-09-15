@php
    $section = optional($sections['home-hire-now'] ? json_decode($sections['home-hire-now']) : null);
    $slug = 'home-hire-now';
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
                <div class="col-lg-12 mt-3 mb-2">
                    @php
                        $points = $section->points;
                    @endphp
                    <fieldset class="mb-3" id="hire-now-app" ng-controller="RepeaterController" ng-init="init({{ $points ? json_encode($points) : '' }})">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Process:</legend>
                        <div ng-repeat="section in list track by $index">
                            <div class="form-group row mb-1">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-11 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-chevron-right"></i>
                                                    </span>
                                                </span>
                                                <input type="text" name='{{ $slug }}[points][@{{ $index }}]' ng-model="list[$index]" class='form-control' required />
                                            </div>
                                        </div>
                                        <label class="col-form-label col-lg-1">
                                            <a href="javascript:;" ng-click="remove($index)" class="text-danger ml-1"><i class="icon-cancel-circle2"></i></a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" ng-click="list.push('')" class="btn btn-sm btn-primary">Add</button>
                    </fieldset>
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