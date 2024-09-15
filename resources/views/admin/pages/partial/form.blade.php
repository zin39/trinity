<fieldset class="mb-3">
    <div class="form-group row">
        <div class="col-lg-12">
            <div class="row">
                <label class="col-form-label col-lg-12">Title:<span class="text-danger">*</span></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-hat"></i>
                            </span>
                        </span>
                        <input placeholder="Title" name="title" value="{{ old('title', $page->title) }}" class="form-control" required />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-12">
            <div class="row">
                <label class="col-form-label col-lg-12">Content:<span class="text-danger">*</span></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <textarea placeholder="Content" name="content" class="form-control textarea_description" required>{{ old('content', $page->content) }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>

<!-- <fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold">SEO Settings</legend>

    <div class="form-group row">
        <div class="col-lg-6">
            <div class="row">
                <label class="col-form-label col-lg-12">Meta Title: </label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-pencil"></i>
                            </span>
                        </span>

                        <input placeholder="Meta title" name="meta_title" value="{{ old('meta_title', $page->meta_title) }}" class="form-control" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <label class="col-form-label col-lg-12">Meta Keywords:</label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <input placeholder="Meta keywords" name="meta_keywords" value="{{ old('meta_keywords', $page->meta_keywords) }}" class="form-control" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-12">
            <div class="row">
                <label class="col-form-label col-lg-12">Meta Description: </label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-pencil"></i>
                            </span>
                        </span>

                        <textarea placeholder="Meta Description" name="meta_description" class="form-control">{{ old('meta_description', $page->meta_description) }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset> -->

<div class="text-right">
    <button class="ml-2 btn bg-primary btn-labeled btn-labeled-left" type="submit">
        <b><i class="icon-database-insert"></i></b> Save
    </button>
</div>