<div class="card">
    <div class="card-body">
        <fieldset>
            @php
                $slug = 'staffing-solutions-section-5';
                $section = optional($sections[$slug] ? json_decode($sections[$slug]) : null);
                $sub_sections = $section->points;
            @endphp
            <legend class="text-uppercase font-size-sm font-weight-bold">
                Section 5
            </legend>
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-1">Title:<span class="text-danger">*</span></label>
                        <div class="col-lg-11 form-group-feedback form-group-feedback-right">
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

                <div class="col-lg-12 mb-2 mt-3" id="section-5-app" ng-controller="RepeaterController" ng-init="init({{ $sub_sections ? json_encode($sub_sections) : null }})">
                    
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
                </div>
            </div>
        </fieldset>
    </div>
</div>