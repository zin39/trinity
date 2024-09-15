<fieldset class="mb-3">
    <div class="form-group row">
        <div class="col-lg-12">
            <div class="row">
                <label class="col-form-label col-lg-12">Question:<span class="text-danger">*</span></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-hat"></i>
                            </span>
                        </span>
                        <input placeholder="Question" name="question" value="{{ old('question', $faq->question) }}" class="form-control" required />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-12">
            <div class="row">
                <label class="col-form-label col-lg-12">Answer:<span class="text-danger">*</span></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <textarea placeholder="Answer" name="answer" class="form-control simple_textarea_description w-100" required>{{ old('answer', $faq->answer) }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">

        <div class="col-lg-6">
            <div class="row">
                <label class="col-form-label col-lg-12">Category:<span class="text-danger">*</span></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <select name="category_id" class="form-control" required>
                            @foreach($faq_categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $faq->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="row">
                <label class="col-form-label col-lg-12">Status:<span class="text-danger">*</span></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-pencil"></i>
                            </span>
                        </span>
                        <select name="status" class="form-control" required>
                            <option value="1" {{ old('status', $faq->status ?? 1) === 1 ? 'selected' : '' }}>Enabled</option>
                            <option value="0" {{ old('status', $faq->status) === 0 ? 'selected' : '' }}>Disabled</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

    </div>
</fieldset>

<div class="text-right">
    <button class="ml-2 btn bg-primary btn-labeled btn-labeled-left" type="submit">
        <b><i class="icon-database-insert"></i></b> Save
    </button>
</div>

<script type="text/javascript">
    
    $(document).ready(function(){
      
    });

</script>