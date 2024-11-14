<fieldset class="mb-3">
    <div class="form-group row">
        <div class="col-lg-6">
            <div class="row">
                <label class="col-form-label col-lg-12">Title:<span class="text-danger">*</span></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-hat"></i>
                            </span>
                        </span>
                        <input placeholder="Title" name="title" value="{{ old('title', $blog->title) }}" class="form-control" required />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <label class="col-form-label col-lg-12">Categories:<span class="text-danger">*</span></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        @php
                            $category_ids = old('category_ids', $blog->categories ? $blog->categories->pluck('id')->toArray() : []);
                        @endphp
                        <select name="category_ids[]" class="form-control select-search" multiple required>
                            @foreach($blog_categories as $category)
                                <option value="{{ $category->id }}" {{ in_array($category->id , $category_ids) ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
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
                        <textarea placeholder="Content" name="description" class="form-control textarea_description" required>{{ old('description', $blog->description) }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">

        <div class="col-lg-6">
            <div class="row">
                <label class="col-form-label col-lg-12">Banner Image:<span class="text-danger">*</span></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-images3"></i></span>
                        </span>
                        <input placeholder="Image" id="blog_image" type="file" name="banner" class="form-control" {{ ($is_edit ?? false) ? '' : 'required' }} />
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
                            <option value="1" {{ old('status', $blog->status ?? 1) === 1 ? 'selected' : '' }}>Enabled</option>
                            <option value="0" {{ old('status', $blog->status) === 0 ? 'selected' : '' }}>Disabled</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @if($is_edit ?? false)
    <div class="form-group row">

        <div class="col-lg-6">
            <div class="row">
                <label class="col-form-label col-lg-12"></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    @php
                        $image = ($blog->banner) ? asset($blog->banner) : asset('admin/image.png');
                    @endphp
                    <a href="{{ $image }}" target="_blank">
                        <img id="blog_image" src="{{ $image }}" alt="your image" class="preview-image" style="height: 100px;width: auto;" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif
</fieldset>

<fieldset class="mb-3">
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

                        <input placeholder="Meta title" name="meta_title" value="{{ old('meta_title', $blog->meta_title) }}" class="form-control" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <label class="col-form-label col-lg-12">Meta Keywords:</label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <input placeholder="Meta keywords" name="meta_keywords" value="{{ old('meta_keywords', $blog->meta_keywords) }}" class="form-control" />
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

                        <textarea placeholder="Meta Description" name="meta_description" class="form-control">{{ old('meta_description', $blog->meta_description) }}</textarea>
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

 <!-- Warning modal -->
    <div id="modal_image_size" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                 <div class="modal-body">
                    <center>
                        <i class="icon-alert text-warning icon-3x"></i>
                    </center>
                    <br>
                    <center>
                        <h4 class="text-purple">Please Upload Below 1Mb.</h4>
                        <button type="button" class="btn btn-success" data-dismiss="modal">Thank You !!!</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
<!-- /warning modal -->


<script type="text/javascript">
    
    $(document).ready(function(){
         $('#blog_image').bind('change', function() {
            var a=(this.files[0].size);

            if(a > 3000000) {
               $('#modal_image_size').modal('show');
               $('#blog_image').val('');
            };
        });
    });

</script>