<fieldset class="mb-3">
    <div class="form-group row">
        <div class="col-lg-6">
            <div class="row">
                <label class="col-form-label col-lg-12">Name:<span class="text-danger">*</span></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-user"></i>
                            </span>
                        </span>
                        <input placeholder="Name" name="name" value="{{ old('name', $testimonial->name) }}" class="form-control" required />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 form-group">
            <div class="row">
                <label class="col-form-label col-lg-12">Type:<span class="text-danger">*</span></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-tag"></i></span>
                        </span>
                        <select name="type" class="form-control" required>
                            <option value="candidate" {{ old('type', $testimonial->type ?? 'candidate') == 'candidate' ? 'selected' : '' }}>Candidate</option>
                            <option value="employer" {{ old('type', $testimonial->type ?? '') == 'employer' ? 'selected' : '' }}>Employer</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 form-group">
            <div class="row">
                <label class="col-form-label col-lg-12">Status:<span class="text-danger">*</span></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-pencil"></i>
                            </span>
                        </span>
                        <select name="status" class="form-control" required>
                            <option value="1" {{ old('status', $testimonial->status ?? 1) === 1 ? 'selected' : '' }}>Enabled</option>
                            <option value="0" {{ old('status', $testimonial->status) === 0 ? 'selected' : '' }}>Disabled</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="form-group row">

        <div class="col-lg-{{ ($is_edit ?? false) ? 6 : 12 }}">
            <div class="row">
                <label class="col-form-label col-lg-12">Image:</label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-images3"></i></span>
                        </span>
                        <input placeholder="Image" id="testimonial_image" type="file" name="image" class="form-control" />
                    </div>
                </div>
            </div>
        </div>
        
        @if($is_edit ?? false)
            <div class="col-lg-6">
                <div class="row">
                        <label class="col-form-label col-lg-12"></label>
                    <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                        @php
                            $image = ($testimonial->image) ? asset($testimonial->image) : asset('admin/image.png');
                        @endphp
                        <img id="testimonial_image" src="{{ $image }}" alt="your image" class="preview-image" style="height: 100px;width: auto;" />
                    </div>
                </div>
            </div>
        @endif

    </div>

    <div class="form-group row">
        <div class="col-lg-12">
            <div class="row">
                <label class="col-form-label col-lg-12">Message: <span class="text-danger">*</span></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <textarea placeholder="Message" name="message" class="form-control textarea_description" required>{{ old('message', $testimonial->message) }}</textarea>
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
         $('#testimonial_image').bind('change', function() {
            var a=(this.files[0].size);

            if(a > 3000000) {
               $('#modal_image_size').modal('show');
               $('#testimonial_image').val('');
            };
        });
    });

</script>