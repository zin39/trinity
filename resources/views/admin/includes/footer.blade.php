<div class="navbar navbar-expand-lg navbar-light">
    <div class="text-center d-lg-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
            data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
            Footer
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-footer">
        <span class="navbar-text">
            &copy; {{date('Y')}}. <a href="{{ url('/') }}" target="_blank" style="color: #99782e;">{{ $setting->company_name }}</a>
        </span>
    </div>
</div>
<!-- /footer -->

<style type="text/css">
    .error {
        color: red;
    }

    .alertify-logs .error {
        color: white !important;
    }
</style>


<!-- <script src="{{asset('admin/js/tinymce/js/tinymce/tinymce.min.js')}}"></script> -->
<script src="{{asset('admin/js/tinymce/js/tinymce/tinymce.min.js')}}" referrerpolicy="origin"></script>
<script src="{{asset('admin/js/validation.js')}}"></script>
<script src="/admin/global/js/plugins/notifications/bootbox.min.js"></script>
<script src="{{asset('admin/global/js/plugins/forms/styling/uniform.min.js')}}"></script>
<script src="{{asset('admin/global/js/demo_pages/form_inputs.js')}}"></script>
<script src="{{asset('admin/global/js/plugins/forms/selects/select2.min.js')}}"></script>
<script src="{{asset('admin/global/js/plugins/forms/styling/switch.min.js')}}"></script>
@include('flash::message')
<script>
    $('div.flash-alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
<script>
    $('document').ready(function() {

        $('.btn-delete').on('click', function(e) {
            var btn = this;

            bootbox.dialog({
                className: "medium",
                message: `
                    <center>
                        <i class="icon-alert text-danger icon-3x"></i>
                    </center>
                    <br>
                    <center class="mb-3">
                        <h2>Are you sure you want to delete ?</h2>
                    </center>
                    `,
                buttons: {
                    success: {
                        label: 'Delete',
                        className: 'btn-success',
                        callback: function() {
                            $('.bootbox .btn-success').prepend('<i class="icon-spinner4 spinner mr-1"></i>');
                            $('.bootbox .btn-success').attr('disabled', 'disabled');
                            $('.bootbox .btn-danger').attr('disabled', 'disabled');
                            btn.form.submit();
                            return false;
                        }
                    },
                    danger: {
                        label: 'Cancel',
                        className: 'btn-danger bootbox-cancel',
                    },
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $('document').ready(function() {
        tinymce.init({
            selector: ".simple_textarea_description",
            width: '100%',
            height: 150,
            content_css: "{{ asset('frontend-assets/css/style.css') }}",
            plugins: 'lists code',
        });

        tinymce.init({
            selector: ".simple_full_description",
            width: 1300,
            height: 200,
        });

        tinymce.init({
            selector: ".simple_full_textarea_description",
            width: 1600,
            height: 200,
        });

        /*---------------------------- TINYMCE EDITOR ---------------------------*/
        tinymce.init({
            selector: ".textarea_description",
            width: 1600,
            height: 300,
            plugins: 'preview importcss searchreplace autolink directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount charmap emoticons filemanager template',
            menubar: 'file edit view insert format tools table',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save | insertfile image media link anchor | template',
            image_caption: true,
            image_advtab: true,
            automatic_uploads: true,
            font_formats: "Manrope='Manrope', sans-serif",
            content_css: "{{ asset('frontend-assets/css/style.css') }}",
            templates: [
                {
                    title: "Left Image | Right Text",
                    content: `<div>
                        <img style="float: left; margin-right: 20px; vertical-align: top;" src="https://dummyimage.com/600x400/000/fff" width="354" height="199" />
                        <div>
                            <h3>What is Lorem Ipsum?</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <h3>Why do we use it?</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                            <h3>Where does it come from?</h3>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        </div>
                    </div>`
                },
                {
                    title: "Left Text | Right Image",
                    content: `<div>
                        <img style="float: right; margin-left: 20px; vertical-align: top;" src="https://dummyimage.com/600x400/000/fff" width="354" height="199" />
                        <div>
                            <h3>What is Lorem Ipsum?</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has&nbsp;been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <h3>Why do we use it?</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when&nbsp;looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                            <h3>Where does it come from?</h3>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        </div>
                    </div>`
                },
                {
                    title: "Left Video | Right Text",
                    content: `<div>
                        <iframe style="float: left; margin-right: 20px; vertical-align: top;" width="420" height="315"
                            src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                        <div>
                            <h3>What is Lorem Ipsum?</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <h3>Why do we use it?</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                            <h3>Where does it come from?</h3>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        </div>
                    </div>`
                },
                {
                    title: "Left Text | Right Video",
                    content: `<div>
                        <iframe style="float: right; margin-left: 20px; vertical-align: top;" width="420" height="315"
                            src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                        <div>
                            <h3>What is Lorem Ipsum?</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has&nbsp;been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <h3>Why do we use it?</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when&nbsp;looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                            <h3>Where does it come from?</h3>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        </div>
                    </div>`
                },
            ],
            relative_urls: false,
            external_filemanager_path: "/admin/js/tinymce/js/tinymce/plugins/file_manager/filemanager/",
            filemanager_title: "Responsive Filemanager",
            external_plugins: {
                "filemanager": "plugins/file_manager/filemanager/plugin.min.js"
            }
        });
    });
</script>

<script type="text/javascript">
    $('input[type=submit], button[type=submit]').click(function() {
        var form = $(this).parents('form:first');

        if (form.valid()) {
            $(this).attr('disabled', true);
            // $(this).prepend('<i class="icon-spinner4 spinner"></i> ');
            form.submit();
        }

    });
</script>