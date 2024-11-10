@php
    $section = optional($sections['healthcare-organizations-main-content'] ? json_decode($sections['healthcare-organizations-main-content']) : null);
    $slug = 'healthcare-organizations-main-content';
@endphp
<div class="card"  >
    <div class="card-body">
        <form method="POST" class="form-horizontal" enctype="multipart/form-data" action="{{route('admin.pages.savepage')}}">
            @csrf
            <input type="hidden" name="slug" value="{{ $slug }}">
            <input type="hidden" name="route" value="healthcare_organizations">
            
            <div class="row">
                
                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <label class="col-form-label col-lg-12">Main Content:<span class="text-danger">*</span></label>
                        <div class="col-lg-12 form-group-feedback form-group-feedback-right">
                            <div class="input-group">
                                <textarea name='{{ $slug }}[description]' class='form-control textarea_description'>{{$section->description}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
              

                <div class="col-lg-12 text-left">
                    <button class="ml-2 btn bg-primary btn-labeled btn-labeled-left" type="submit">
                        <b><i class="icon-database-insert"></i></b> Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>