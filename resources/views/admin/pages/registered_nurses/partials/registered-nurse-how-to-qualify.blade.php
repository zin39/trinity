@php
    $section = $sections['registered-nurse-how-to-qualify'] ? json_decode($sections['registered-nurse-how-to-qualify']) : null;
    $slug = 'registered-nurse-how-to-qualify';
    $previllages = \App\Models\Previllage::where('section','registered-nurse-how-to-qualify')->get();
@endphp

<div class="card">
    <div class="card-body">
        <form method="POST" class="form-horizontal" enctype= "multipart/form-data" files="true" action="{{route('admin.pages.savepage')}}" >
            @csrf
            <input type="hidden" name="slug" value="{{ $slug }}">
            <input type="hidden" name="route" value="registered_nurses">

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
                                <input type="text" name='{{ $slug }}[title]' class='form-control' value="{{ old($slug.'.title', $section? $section->title : '') }}" required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right mt-3">
                <button class="ml-2 btn bg-primary btn-labeled btn-labeled-left" type="submit">
                    <b><i class="icon-database-insert"></i></b> Save
                </button>
            </div>
        </form>

        
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form method="POST" class="form-horizontal" enctype= "multipart/form-data" files="true" action="{{route('admin.pages.save-previllages')}}">
            @csrf
            <input type="hidden" name="slug" value="{{ $slug }}">
            <input type="hidden" name="lists[]" value="previllage_items">
            <input type="hidden" name="route" value="registered_nurses">

            <h4>Previllages items:</h4>

            <div ng-cloak ng-controller="RepeaterController" ng-init="init({{ json_encode($previllages) }})">
                <fieldset class="mb-2" ng-repeat="section in list">
                    <legend class="text-uppercase font-size-sm font-weight-bold">
                        item @{{ $index+1 }}
                        <a href="javascript:;" ng-click="remove($index)" class="text-danger ml-1"><i class="icon-cancel-circle2"></i></a>
                    </legend>
                    <input type="hidden" name="{{ $slug }}[previllage_items][@{{ $index }}][id]" value="@{{section.id}}" ng-model="section.id">

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
                                        <input type="text" name='{{ $slug }}[previllage_items][@{{ $index }}][title]' ng-model="section.title" class='form-control' required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <div class="row">
                                <label class="col-form-label col-lg-3">Icon 1: <span class="text-danger">*</span></label>
                                <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-images3"></i></span>
                                        </span>
                                        <input type="file" accept="image/*" name='{{ $slug }}[previllage_items][@{{ $index }}][icon1]' class='form-control image'  />
                                    </div>
                                        <a ng-show="section.icon1" href="/uploads/page/@{{section.icon1}}" target="_blank">
                                            <img id="icon1" src="/uploads/page/@{{section.icon1}}" alt="your image" class="preview-image" style="height: 100px;width: auto;" />
                                        </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <div class="row">
                                <label class="col-form-label col-lg-3">Icon 2: </label>
                                <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-images3"></i></span>
                                        </span>
                                        <input type="file" accept="image/*" name='{{ $slug }}[previllage_items][@{{ $index }}][icon2]' class='form-control image'  />
                                    </div>
                                        <a ng-show="section.icon2" href="/uploads/page/@{{section.icon2}}" target="_blank">
                                            <img id="icon2" src="/uploads/page/@{{section.icon2}}" alt="your image" class="preview-image" style="height: 100px;width: auto;" />
                                        </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <div class="row">
                                <label class="col-form-label col-lg-3">Description:<span class="text-danger">*</span></label>
                                <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                                    <div class="input-group">
                                        <textarea ui-tinymce="tinymceOptions" name='{{ $slug }}[previllage_items][@{{ $index }}][description]' ng-model="section.description" class='form-control'></textarea>
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