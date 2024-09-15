<fieldset class="mb-3">
    <div class="form-group row">
        <div class="col-lg-12">
            <div class="row">
                <label class="col-form-label col-lg-12">Name:<span class="text-danger">*</span></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-user"></i>
                            </span>
                        </span>
                        <input placeholder="Name" name="name" value="{{ old('name', $team->name) }}" class="form-control" required />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <div class="row">
                <label class="col-form-label col-lg-12">Designation:<span class="text-danger">*</span></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-hat"></i></span>
                        </span>
                        <input placeholder="Designation" name="designation" value="{{ old('designation', $team->designation) }}" class="form-control" required />
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
                            <option value="1" {{ old('status', $team->status ?? 1) === 1 ? 'selected' : '' }}>Enabled</option>
                            <option value="0" {{ old('status', $team->status) === 0 ? 'selected' : '' }}>Disabled</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="form-group row">

        <div class="col-lg-{{ ($is_edit ?? false) ? 6 : 12 }}">
            <div class="row">
                <label class="col-form-label col-lg-12">Image:<span class="text-danger">*</span></label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-images3"></i></span>
                        </span>
                        <input placeholder="Image" id="team_image" type="file" name="image" class="form-control" {{ ($is_edit ?? false) ? '' : 'required' }} />
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
                            $image = ($team->image) ? asset($team->image) : asset('admin/image.png');
                        @endphp
                        <img id="team_image" src="{{ $image }}" alt="your image" class="preview-image" style="height: 100px;width: auto;" />
                    </div>
                </div>
            </div>
        @endif

    </div>

    <div class="form-group row">
        <div class="col-lg-12">
            <div class="row">
                <label class="col-form-label col-lg-12">Details:</label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <textarea placeholder="Details" name="details" class="form-control textarea_description">{{ old('details', $team->details) }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 form-group">
            <div class="row">
                <label class="col-form-label col-lg-12">Instagram URL:</label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-instagram"></i></span>
                        </span>
                        <input placeholder="Enter Instagram URL" type="text" name="instagram_link" class="form-control" value="{{ $team->instagram_link }}" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 form-group">
            <div class="row">
                <label class="col-form-label col-lg-12">Facebook URL:</label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-facebook2"></i></span>
                        </span>
                        <input placeholder="Enter Facebook URL" type="text" name="facebook_link" class="form-control" value="{{ $team->facebook_link }}" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 form-group">
            <div class="row">
                <label class="col-form-label col-lg-12">LinkedIn URL:</label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-linkedin"></i></span>
                        </span>
                        <input placeholder="Enter LinkedIn URL" type="text" name="linkin_link" class="form-control" value="{{ $team->linkin_link }}" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 form-group">
            <div class="row">
                <label class="col-form-label col-lg-12">Twitter URL:</label>
                <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-twitter"></i></span>
                        </span>
                        <input placeholder="Enter Twitter URL" type="text" name="twitter_link" class="form-control" value="{{ $team->twitter_link }}" />
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
         $('#team_image').bind('change', function() {
            var a=(this.files[0].size);

            if(a > 3000000) {
               $('#modal_image_size').modal('show');
               $('#team_image').val('');
            };
        });
    });

</script>