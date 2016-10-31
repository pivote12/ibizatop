    <header class="page-header">
        <h2>{!! trans('label.admin') !!}</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="/admin">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>{!! trans('label.profile_new') !!}</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="#"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <div class="row">

        <div class="col-lg-12">
            <section class="panel form-wizard" id="w2">
                <div class="tabs">
                    <ul class="nav nav-tabs nav-justify">
                        <li class="active">
                            <a href="#w2-spanish" data-toggle="tab" class="text-center">
                                <span class="badge hidden-xs">1</span>
                                {!! trans('label.spanish') !!}
                            </a>
                        </li>
                        <li>
                            <a href="#w2-english" data-toggle="tab" class="text-center">
                                <span class="badge hidden-xs">2</span>
                                {!! trans('label.english') !!}
                            </a>
                        </li>
                        <li>
                            <a href="#w2-tags" data-toggle="tab" class="text-center">
                                <span class="badge hidden-xs">2</span>
                                {!! trans('label.title_tag') !!}
                            </a>
                        </li>
                        <li>
                            <a href="#w2-photos" data-toggle="tab" class="text-center">
                                <span class="badge hidden-xs">3</span>
                                {!! trans('label.photo') !!}
                            </a>
                        </li>
                    </ul>


                        {!! Form::open(['url' => '/admin/profiles', 'method' => 'post', 'class' => 'form-horizontal', "enctype" => "multipart/form-data"]) !!}
                            <div class="tab-content">
                                <div id="w2-spanish" class="tab-pane active">
                                    {!! trans('label.instructions') !!}
                                    <input type="hidden" name="is_spanish" value="true">
                                    @include('admin.profiles.input.input')
                                </div>
                                <div id="w2-english" class="tab-pane">
                                    {!! trans('label.instructions_english') !!}
                                    <input type="hidden" name="is_spanish2" value="false">
                                    @include('admin.profiles.input.inputTwoo')
                                </div>
                                 <div id="w2-tags" class="tab-pane">
                                    {!! trans('label.title_tag') !!}
                                    <input type="hidden" name="is_spanish2" value="false">
                                    @include('admin.profiles.input.tag')
                                </div>
                                <div id="w2-photos" class="tab-pane">
                                    @include('admin.profiles.input.photos')

                                    <button type="submit" style="display: none" id="SendProfile">
                                        enviar informacion
                                    </button>
                                </div>
                            </div>
                        {!! Form::close() !!}

                </div>

                <div class="panel-footer">
                    <ul class="pager">
                        <li class="finish pull-right">
                            <a id="finishProfileCreate">{!! trans('label.finish') !!}</a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>


    <script>

        (function($) {

            'use strict';



            /*
             Wizard #2
             */
            var $w2finish = $('#w2').find('ul.pager li.finish'),
                    $w2validator = true;

            $w2finish.on('click', function( ev ) {
                ev.preventDefault();
            });

            $('#w2').bootstrapWizard({
                tabClass: 'wizard-steps',
                nextSelector: 'ul.pager li.next',
                previousSelector: 'ul.pager li.previous',
                firstSelector: null,
                lastSelector: null,
                onNext: function( tab, navigation, index, newindex ) {
                    var validated = true;
                    if( !validated ) {
                        $w2validator.focusInvalid();
                        return false;
                    }
                },
                onTabClick: function( tab, navigation, index, newindex ) {
                
                    if ( newindex == index + 1 ) {
                        return this.onNext( tab, navigation, index, newindex);
                    }
                }
               
            });



        }).apply(this, [jQuery]);


        var theParent = document.querySelector("#content-file");
        theParent.addEventListener('change',archivo, false);
        function archivo(evt) {
            var id = evt.target.id;
            var indice = id.substring(3,4);
            var files = evt.target.files; // FileList object
            // Obtenemos la imagen del campo "file".
            for (var i = 0, f; f = files[i]; i++) {


                if (!f.type.match('image.*')) {
                    alert("Solamente imagenes se aceptan");
                }
                else {
                    var reader = new FileReader();
                    reader.onload = (function(theFile) {
                        return function(e) {
                            // Insertamos la imagen
                            $("#mm"+ id).attr("src", e.target.result);
                        };
                    })(f);
                    reader.readAsDataURL(f);
                }


            }
        }


        $('#finishProfileCreate').on('click', function(e){
            e.preventDefault();
            $('#SendProfile').click();
        });

        $('.name').focusout(function(e){
            var value = $(this).val();
            $('.name').val(value);
        });


        $('.age').focusout(function(e){
            var value = $(this).val();
            $('.age').val(value);
        });

        $('.phone').focusout(function(e){
            var value = $(this).val();
            $('.phone').val(value);
        });

        $('.measurements').focusout(function(e){
            var value = $(this).val();
            $('.measurements').val(value)
        });

        $('.height').focusout(function(e){
            var value = $(this).val();
            $('.height').val(value);
        });
        $('.web').focusout(function(e){
        
            var value = $(this).val();
            $('.web').val(value);
        });

        $('.category').focusout(function(e){
        
            var value = $(this).val();
            $('.category').val(value);
        });
        $('.category').change(function(e){
        
            var value = $(this).val();
         
             if(value == 'agencias'){
              $('.Aage').hide();
              $('.Ameasurements').hide();
              $('.Aheight').hide();
              $('.Aprice').hide();
              $('.Alanguages').hide();
              $('.Afeatured_escort').hide();
              $('.Aweb').css("display", "block");
            }else{
              $('.Aname').show();
              $('.Ameasurements').show();
              $('.Aheight').show();
              $('.Aprice').show();
              $('.Alanguages').show();
              $('.Afeatured_escort').show();
              $('.Aweb').css("display", "none");
              
            }
        });

        $('.deluxe_escort33').change(function(e){

            var state = $(this).is(":checked");

            if(state == false ){
                $('.deluxe_escort33').removeAttr('checked');
            }else {
                $(".deluxe_escort33").prop('checked', true);
                $('.featured_escort444').removeAttr('checked');
            }
        });

        $('.featured_escort444').change(function(e){
            
            var state = $(this).is(":checked");

            if(state == false ){
                $('.featured_escort444').removeAttr('checked');
            }else {
                $(".featured_escort444").prop('checked', true);
                 $('.deluxe_escort33').removeAttr('checked');
            }
        });

        $('.price').focusout(function(e){        
            var value = $(this).val();
            $('.price').val(value);
        });
        $('.metatags').focusout(function(e){
            var value = $(this).val();
            $('.metatags').val(value);
        });
        $('.description').focusout(function(e){
            var value = $(this).val();
            $('.description').val(value);
        });
         $('.zone').focusout(function(e){
            var value = $(this).val();
            $('.zone').val(value);
        });

    </script>
