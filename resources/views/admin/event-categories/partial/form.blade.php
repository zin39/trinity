<div class="form-group row">
    <div class="col-lg-12">
        <label class="col-form-label">Name:<span class="text-danger">*</span></label>
        <div class="form-group-feedback form-group-feedback-right">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-list"></i></span>
                </span>
                <input placeholder="Name" name="name" value="{{ old('name', $category->name) }}" class="form-control" required />
            </div>
        </div>
    </div>
</div>

<div class="text-right">
    <button class="ml-2 btn bg-primary btn-labeled btn-labeled-left" type="submit">
        <b><i class="icon-database-insert"></i></b> Save
    </button>
</div>