<div class="card">
    <div class="card-body">
        <fieldset>
            @php
                $slug = 'staffing-solutions-section-4';
                $section = optional($sections[$slug] ? json_decode($sections[$slug]) : null);
                $sub_sections = $section->sub_sections ?? [];
            @endphp
            <legend class="text-uppercase font-size-sm font-weight-bold">
                Section 4
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

                <div class="col-lg-12 mb-2 mt-3" ng-cloak ng-app="Repeater" ng-controller="RepeaterController" ng-init="init({{ json_encode($sub_sections) }})">
                    <div class="row">
                        <fieldset class="mb-2 col-lg-12" ng-repeat="section in list">
                            <legend class="text-uppercase font-size-sm font-weight-bold">
                                Sub-Section @{{ $index+1 }}
                                <a href="javascript:;" ng-click="remove($index)" class="text-danger ml-1"><i class="icon-cancel-circle2"></i></a>
                            </legend>

                            <div class="row">
                                <div class="col-lg-12 mb-2">
                                    <div class="row">
                                        <label class="col-form-label col-lg-3">Image: <span class="text-danger">*</span></label>
                                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-images3"></i></span>
                                                </span>
                                                <input type="file" accept="image/*" ng-model="section.image" name='{{ $slug }}[sub_sections][@{{ $index }}][image]' class='form-control image' ng-required="!section.image" />
                                            </div>
                                            <div ng-if="section.image">
                                                <a href="/@{{ section.image }}" target="_blank">
                                                    <img id="blog_image" ng-src="@{{ '/'+ section.image }}" alt="your image" class="preview-image" style="height: 50px;width: auto;" />
                                                </a>
                                                <input type="hidden" name='{{ $slug }}[sub_sections][@{{ $index }}][image]' value="@{{ section.image }}" class='form-control image' />
                                            </div>
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
                                                <input type="text" name='{{ $slug }}[sub_sections][@{{ $index }}][title]' ng-model="section.title" class='form-control' required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <button type="button" ng-click="add()" class="btn btn-sm btn-primary">Add</button>
                </div>
            </div>
        </fieldset>
    </div>
</div>