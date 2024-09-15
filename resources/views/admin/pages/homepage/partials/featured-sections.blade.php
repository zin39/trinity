@php
    $section = $sections['home-featured-sections'] ? json_decode($sections['home-featured-sections']) : null;
    $slug = 'home-featured-sections';
@endphp
<div class="card">
    <div class="card-body">
        <form method="POST" class="form-horizontal">
            @csrf
            <input type="hidden" name="slug" value="{{ $slug }}">

            <div ng-cloak ng-app="Repeater" ng-controller="RepeaterController" ng-init="init({{ json_encode($section) }})">
                <fieldset class="mb-2" ng-repeat="section in list">
                    <legend class="text-uppercase font-size-sm font-weight-bold">
                        Section @{{ $index+1 }}
                        <a href="javascript:;" ng-click="remove($index)" class="text-danger ml-1"><i class="icon-cancel-circle2"></i></a>
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
                                        <input type="text" name='{{ $slug }}[@{{ $index }}][title]' ng-model="section.title" class='form-control' required />
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="col-lg-12 mb-2">
                            <div class="row">
                                <label class="col-form-label col-lg-3">Youtube Video Link:<span class="text-danger">*</span></label>
                                <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-youtube"></i></span>
                                        </span>
                                        <input type="text" name='{{ $slug }}[@{{ $index }}][youtube_link]' ng-model="section.youtube_link" class='form-control' required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <div class="row">
                                <label class="col-form-label col-lg-3">Description:<span class="text-danger">*</span></label>
                                <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                                    <div class="input-group">
                                        <textarea ui-tinymce="tinymceOptions" name='{{ $slug }}[@{{ $index }}][description]' ng-model="section.description" class='form-control'></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-2">
                            <div class="row">
                                <label class="col-form-label col-lg-3">Learn more Text:<span class="text-danger">*</span></label>
                                <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-pencil"></i>
                                            </span>
                                        </span>
                                        <input type="text" name='{{ $slug }}[@{{ $index }}][learn_more_text]' ng-model="section.learn_more_text" class='form-control' required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <div class="row">
                                <label class="col-form-label col-lg-3">Learn more Link:<span class="text-danger">*</span></label>
                                <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-link"></i>
                                            </span>
                                        </span>
                                        <input type="text" name='{{ $slug }}[@{{ $index }}][learn_more_link]' ng-model="section.learn_more_link" class='form-control' required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <button type="button" ng-click="add()" class="btn btn-sm btn-primary">Add New Section</button>

                <div class="text-right mt-3">
                    <button class="ml-2 btn bg-primary btn-labeled btn-labeled-left" type="submit">
                        <b><i class="icon-database-insert"></i></b> Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>