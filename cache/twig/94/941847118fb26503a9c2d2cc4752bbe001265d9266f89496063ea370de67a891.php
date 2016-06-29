<?php

/* forms/fields/pagemedia/pagemedia.html.twig */
class __TwigTemplate_e257995a8dc7b113ab15f8de884efa0a1b2957a17bb14fd282044ca730c1acc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        echo "
";
        // line 3
        if ((isset($context["exists"]) ? $context["exists"] : null)) {
            // line 4
            echo "<div class=\"form-field\">
    <div class=\"form-data form-uploads-wrapper\">
        <h3>";
            // line 6
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "</h3>
        <div id=\"gravDropzone\" class=\"dropzone\"></div>
        <span>";
            // line 8
            echo twig_join_filter((isset($context["value"]) ? $context["value"] : null), "
");
            echo "</span>
        <script>
            \$(function(){
                var URI = \$('[data-media-url]').data('media-url'), thisDropzone,
                    modalError = function(args){
                        if (args.data.status == 'error' || args.data.status == 'unauthorized'){

                            if (args.mode == 'addBack'){
                                // let's add back the file
                                if (args.file instanceof File) this.addFile(args.file);
                                else {
                                    this.files.push(args.file);
                                    this.options.addedfile.call(this, args.file);
                                    this.options.thumbnail.call(this, args.file, args.file.extras.url);
                                }
                            } else if (args.mode == 'removeFile') {
                                args.file.rejected = true;
                                this.removeFile(args.file);
                            }

                            // fire up the modal
                            var modalContainer = \$('[data-remodal-id=generic]');
                            modalContainer.find('.error-content').html(args.msg);
                            \$.remodal.lookup[modalContainer.data('remodal')].open();
                        }
                    };
                Dropzone.autoDiscover = false;
                Dropzone.confirm = function(question, accepted, rejected) {
                    var modalContainer = \$('[data-remodal-id=delete-media]'),
                        acceptHandler = function () {
                            if (accepted) {
                                accepted();
                            }
                            \$(document).off('confirm', '[data-remodal-id=delete-media]', acceptHandler);
                            \$(document).off('cancel', '[data-remodal-id=delete-media]', rejectHandler);
                        },
                        rejectHandler = function () {
                            if (rejected) {
                                rejected();
                            }
                            \$(document).off('confirm', '[data-remodal-id=delete-media]', acceptHandler);
                            \$(document).off('cancel', '[data-remodal-id=delete-media]', rejectHandler);
                        };

                    \$.remodal.lookup[modalContainer.data('remodal')].open();
                    \$(document).on('confirm', '[data-remodal-id=delete-media]', acceptHandler);
                    \$(document).on('cancel', '[data-remodal-id=delete-media]', rejectHandler);
                };
                Dropzone.options.gravDropzone = {
                    addRemoveLinks: false,
                    dictRemoveFileConfirmation: '[placeholder]',
                    acceptedFiles: \$('[data-media-types]').data('media-types'),
                    previewTemplate: \"<div class=\\\"dz-preview dz-file-preview\\\">\\n  <div class=\\\"dz-details\\\">\\n    \" +
                                     \"<div class=\\\"dz-filename\\\"><span data-dz-name></span></div>\\n    \" +
                                     \"<div class=\\\"dz-size\\\" data-dz-size></div>\\n    <img data-dz-thumbnail />\\n  </div>\\n  \" +
                                     \"<div class=\\\"dz-progress\\\"><span class=\\\"dz-upload\\\" data-dz-uploadprogress></span></div>\\n  \"+
                                     \"<div class=\\\"dz-success-mark\\\"><span>✔</span></div>\\n  <div class=\\\"dz-error-mark\\\"><span>✘</span></div>\\n  \" +
                                     \"<div class=\\\"dz-error-message\\\"><span data-dz-errormessage></span></div>\\n\" +
                                     \"<a class=\\\"dz-remove\\\" href=\\\"javascript:undefined;\\\" data-dz-remove>Delete</a>\\n\" +
                                     \"<a class=\\\"dz-insert\\\" href=\\\"javascript:undefined;\\\" data-dz-insert>Insert</a>\\n</div>\",
                    init: function() {
                        thisDropzone = this;
                        \$.get(URI + '/task";
            // line 70
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "listmedia/admin-nonce";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "' +  GravAdmin.config.admin_nonce, function(data) {

                            \$.proxy(modalError, this, {
                                data: data,
                                msg: '<p>An error occurred while trying to list files</p><pre>'+data.message+'</pre>'
                            })();

                            if (data.results) {
                                \$.each(data.results, function(filename, data){
                                    var mockFile = { name: filename, size: data.size, accepted: true, extras: data };
                                    thisDropzone.files.push(mockFile);
                                    thisDropzone.options.addedfile.call(thisDropzone, mockFile);

                                    if (filename.toLowerCase().match(/\\.(jpg|jpeg|png|gif)\$/)) {
                                        thisDropzone.options.thumbnail.call(thisDropzone, mockFile, data.url);
                                    }
                                });
                            }

                            \$('.dz-preview').prop('draggable', 'true');
                        });

                        this.on(\"complete\", function(file) {
                            if (file.accepted) {
                                \$('.dz-preview').prop('draggable', 'true');
                                return;
                            }
                            var data = {status: 'error', message: 'Unsupported file type: ' + file.name.match(/\\..+/).join('')};
                            \$.proxy(modalError, this, {
                                file: file,
                                data: data,
                                mode: 'removeFile',
                                msg: '<p>An error occurred while trying to add the file <strong>'+file.name+'</strong></p><pre>'+data.message+'</pre>'
                            })();
                        });

                        this.on('success', function(file, response){
                            thisDropzone = this;
                            \$.proxy(modalError, this, {
                                file: file,
                                data: response,
                                mode: 'removeFile',
                                msg: '<p>An error occurred while trying to upload the file <strong>'+file.name+'</strong></p><pre>'+response.message+'</pre>'
                            })();
                        });

                        this.on('removedfile', function(file) {
                            if (!file.accepted || file.rejected) return;
                            thisDropzone = this;
                            \$.post(URI + '/task";
            // line 119
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "delmedia', {filename: file.name, 'admin-nonce': GravAdmin.config.admin_nonce}, function(data){
                                \$.proxy(modalError, thisDropzone, {
                                    file: file,
                                    data: data,
                                    mode: 'addBack',
                                    msg: '<p>An error occurred while trying to remove the file <strong>'+file.name+'</strong></p><pre>'+data.message+'</pre>'
                                })();
                            });
                        });

                        this.on('sending', function(file, xhr, formData){
                            formData.append('admin-nonce', GravAdmin.config.admin_nonce);
                        });
                    }
                };

                var dropzone = new Dropzone(\"#gravDropzone\", { url: URI + '/task";
            // line 135
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "addmedia', createImageThumbnails: { thumbnailWidth: 150} });

                \$(\"#gravDropzone\").delegate('.dz-preview', 'dragstart', function(e){
                    var uri = encodeURI(\$(this).find('.dz-filename').text());
                    uri = uri.replace(/\\(/g, '%28');
                    uri = uri.replace(/\\)/g, '%29');

                    var shortcode = '![](' + uri + ')';
                    if (!uri.match(/\\.(jpg|jpeg|png|gif)\$/)) {
                        shortcode = '[' + decodeURI(uri) + '](' + uri + ')';
                    }

                    dropzone.disable();
                    \$(this).addClass('hide-backface');
                    e.originalEvent.dataTransfer.effectAllowed = 'copy';
                    e.originalEvent.dataTransfer.setData('text', shortcode);
                });

                \$(\"#gravDropzone\").delegate('.dz-preview', 'dragend', function(e){
                    dropzone.enable();
                    \$(this).removeClass('hide-backface');
                });
            });
        </script>
    </div>
</div>
";
        } else {
            // line 162
            echo "<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            <label>
                You cannot add media files until you save the page. Just click 'Save' on top
            </label>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/pagemedia/pagemedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 162,  174 => 135,  155 => 119,  101 => 70,  35 => 8,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set value = (value is null ? field.default : value) %}*/
/* */
/* {% if exists %}*/
/* <div class="form-field">*/
/*     <div class="form-data form-uploads-wrapper">*/
/*         <h3>{{ field.label|tu }}</h3>*/
/*         <div id="gravDropzone" class="dropzone"></div>*/
/*         <span>{{ value|join("\n") }}</span>*/
/*         <script>*/
/*             $(function(){*/
/*                 var URI = $('[data-media-url]').data('media-url'), thisDropzone,*/
/*                     modalError = function(args){*/
/*                         if (args.data.status == 'error' || args.data.status == 'unauthorized'){*/
/* */
/*                             if (args.mode == 'addBack'){*/
/*                                 // let's add back the file*/
/*                                 if (args.file instanceof File) this.addFile(args.file);*/
/*                                 else {*/
/*                                     this.files.push(args.file);*/
/*                                     this.options.addedfile.call(this, args.file);*/
/*                                     this.options.thumbnail.call(this, args.file, args.file.extras.url);*/
/*                                 }*/
/*                             } else if (args.mode == 'removeFile') {*/
/*                                 args.file.rejected = true;*/
/*                                 this.removeFile(args.file);*/
/*                             }*/
/* */
/*                             // fire up the modal*/
/*                             var modalContainer = $('[data-remodal-id=generic]');*/
/*                             modalContainer.find('.error-content').html(args.msg);*/
/*                             $.remodal.lookup[modalContainer.data('remodal')].open();*/
/*                         }*/
/*                     };*/
/*                 Dropzone.autoDiscover = false;*/
/*                 Dropzone.confirm = function(question, accepted, rejected) {*/
/*                     var modalContainer = $('[data-remodal-id=delete-media]'),*/
/*                         acceptHandler = function () {*/
/*                             if (accepted) {*/
/*                                 accepted();*/
/*                             }*/
/*                             $(document).off('confirm', '[data-remodal-id=delete-media]', acceptHandler);*/
/*                             $(document).off('cancel', '[data-remodal-id=delete-media]', rejectHandler);*/
/*                         },*/
/*                         rejectHandler = function () {*/
/*                             if (rejected) {*/
/*                                 rejected();*/
/*                             }*/
/*                             $(document).off('confirm', '[data-remodal-id=delete-media]', acceptHandler);*/
/*                             $(document).off('cancel', '[data-remodal-id=delete-media]', rejectHandler);*/
/*                         };*/
/* */
/*                     $.remodal.lookup[modalContainer.data('remodal')].open();*/
/*                     $(document).on('confirm', '[data-remodal-id=delete-media]', acceptHandler);*/
/*                     $(document).on('cancel', '[data-remodal-id=delete-media]', rejectHandler);*/
/*                 };*/
/*                 Dropzone.options.gravDropzone = {*/
/*                     addRemoveLinks: false,*/
/*                     dictRemoveFileConfirmation: '[placeholder]',*/
/*                     acceptedFiles: $('[data-media-types]').data('media-types'),*/
/*                     previewTemplate: "<div class=\"dz-preview dz-file-preview\">\n  <div class=\"dz-details\">\n    " +*/
/*                                      "<div class=\"dz-filename\"><span data-dz-name></span></div>\n    " +*/
/*                                      "<div class=\"dz-size\" data-dz-size></div>\n    <img data-dz-thumbnail />\n  </div>\n  " +*/
/*                                      "<div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div>\n  "+*/
/*                                      "<div class=\"dz-success-mark\"><span>✔</span></div>\n  <div class=\"dz-error-mark\"><span>✘</span></div>\n  " +*/
/*                                      "<div class=\"dz-error-message\"><span data-dz-errormessage></span></div>\n" +*/
/*                                      "<a class=\"dz-remove\" href=\"javascript:undefined;\" data-dz-remove>Delete</a>\n" +*/
/*                                      "<a class=\"dz-insert\" href=\"javascript:undefined;\" data-dz-insert>Insert</a>\n</div>",*/
/*                     init: function() {*/
/*                         thisDropzone = this;*/
/*                         $.get(URI + '/task{{ config.system.param_sep }}listmedia/admin-nonce{{ config.system.param_sep }}' +  GravAdmin.config.admin_nonce, function(data) {*/
/* */
/*                             $.proxy(modalError, this, {*/
/*                                 data: data,*/
/*                                 msg: '<p>An error occurred while trying to list files</p><pre>'+data.message+'</pre>'*/
/*                             })();*/
/* */
/*                             if (data.results) {*/
/*                                 $.each(data.results, function(filename, data){*/
/*                                     var mockFile = { name: filename, size: data.size, accepted: true, extras: data };*/
/*                                     thisDropzone.files.push(mockFile);*/
/*                                     thisDropzone.options.addedfile.call(thisDropzone, mockFile);*/
/* */
/*                                     if (filename.toLowerCase().match(/\.(jpg|jpeg|png|gif)$/)) {*/
/*                                         thisDropzone.options.thumbnail.call(thisDropzone, mockFile, data.url);*/
/*                                     }*/
/*                                 });*/
/*                             }*/
/* */
/*                             $('.dz-preview').prop('draggable', 'true');*/
/*                         });*/
/* */
/*                         this.on("complete", function(file) {*/
/*                             if (file.accepted) {*/
/*                                 $('.dz-preview').prop('draggable', 'true');*/
/*                                 return;*/
/*                             }*/
/*                             var data = {status: 'error', message: 'Unsupported file type: ' + file.name.match(/\..+/).join('')};*/
/*                             $.proxy(modalError, this, {*/
/*                                 file: file,*/
/*                                 data: data,*/
/*                                 mode: 'removeFile',*/
/*                                 msg: '<p>An error occurred while trying to add the file <strong>'+file.name+'</strong></p><pre>'+data.message+'</pre>'*/
/*                             })();*/
/*                         });*/
/* */
/*                         this.on('success', function(file, response){*/
/*                             thisDropzone = this;*/
/*                             $.proxy(modalError, this, {*/
/*                                 file: file,*/
/*                                 data: response,*/
/*                                 mode: 'removeFile',*/
/*                                 msg: '<p>An error occurred while trying to upload the file <strong>'+file.name+'</strong></p><pre>'+response.message+'</pre>'*/
/*                             })();*/
/*                         });*/
/* */
/*                         this.on('removedfile', function(file) {*/
/*                             if (!file.accepted || file.rejected) return;*/
/*                             thisDropzone = this;*/
/*                             $.post(URI + '/task{{ config.system.param_sep }}delmedia', {filename: file.name, 'admin-nonce': GravAdmin.config.admin_nonce}, function(data){*/
/*                                 $.proxy(modalError, thisDropzone, {*/
/*                                     file: file,*/
/*                                     data: data,*/
/*                                     mode: 'addBack',*/
/*                                     msg: '<p>An error occurred while trying to remove the file <strong>'+file.name+'</strong></p><pre>'+data.message+'</pre>'*/
/*                                 })();*/
/*                             });*/
/*                         });*/
/* */
/*                         this.on('sending', function(file, xhr, formData){*/
/*                             formData.append('admin-nonce', GravAdmin.config.admin_nonce);*/
/*                         });*/
/*                     }*/
/*                 };*/
/* */
/*                 var dropzone = new Dropzone("#gravDropzone", { url: URI + '/task{{ config.system.param_sep }}addmedia', createImageThumbnails: { thumbnailWidth: 150} });*/
/* */
/*                 $("#gravDropzone").delegate('.dz-preview', 'dragstart', function(e){*/
/*                     var uri = encodeURI($(this).find('.dz-filename').text());*/
/*                     uri = uri.replace(/\(/g, '%28');*/
/*                     uri = uri.replace(/\)/g, '%29');*/
/* */
/*                     var shortcode = '![](' + uri + ')';*/
/*                     if (!uri.match(/\.(jpg|jpeg|png|gif)$/)) {*/
/*                         shortcode = '[' + decodeURI(uri) + '](' + uri + ')';*/
/*                     }*/
/* */
/*                     dropzone.disable();*/
/*                     $(this).addClass('hide-backface');*/
/*                     e.originalEvent.dataTransfer.effectAllowed = 'copy';*/
/*                     e.originalEvent.dataTransfer.setData('text', shortcode);*/
/*                 });*/
/* */
/*                 $("#gravDropzone").delegate('.dz-preview', 'dragend', function(e){*/
/*                     dropzone.enable();*/
/*                     $(this).removeClass('hide-backface');*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     </div>*/
/* </div>*/
/* {% else %}*/
/* <div class="form-tab">*/
/*     <div class="form-field">*/
/*         <div class="form-label">*/
/*             <label>*/
/*                 You cannot add media files until you save the page. Just click 'Save' on top*/
/*             </label>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
/* */
