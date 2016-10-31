<script src="/assets-frontend/js/jquery.min.js"></script>
<script src="/assets-frontend/js/bootstrap.js"></script>
<script src="/assets-frontend/js/parallax.js"></script>
<script src="/assets-frontend/js/retina.js"></script>
<script src="/assets-frontend/js/wow.js"></script>
<script src="/assets-frontend/js/progress.js"></script>
<script src="/assets-frontend/js/jquery.prettyPhoto.js"></script>
<script src="/assets-frontend/js/carousel.js"></script>
<script src="/assets-frontend/js/carousel-plugins.js"></script>
<script src="/assets-frontend/js/custom.js"></script>
<script src="/assets-frontend/js/typetext.js"></script>

<script src="/assets-frontend/js/jquery.magnific-popup.js"></script>

<script src="/assets-frontend/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="/assets-frontend/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript">
    /* ==============================================
     SLIDER
     =============================================== */

    jQuery('.tp-banner').show().revolution(
            {
                dottedOverlay:"none",
                delay:16000,
                startwidth:1170,
                startheight:400,
                hideThumbs:200,
                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"round",
                touchenabled:"on",
                onHoverStop:"on",
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
                keyboardNavigation:"off",
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,
                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,
                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,
                shadow:0,
                fullWidth:"on",
                fullScreen:"off",
                spinner:"spinner4",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                forceFullWidth:"off",
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0
            });
            
            
</script>
<script type="text/javascript" charset="utf-8">
               $(document).ready(function() {
                  $('.image-link').magnificPopup(
                  {
                  type:'image',
                  gallery:{
                    enabled:true
                  }});
								 $('.videoLink').magnificPopup({
										disableOn: 700,
										type: 'iframe',
										mainClass: 'mfp-fade',
										removalDelay: 160,
										preloader: false,

										fixedContentPos: false
									});
               });
             </script>
             </body>

@yield('other-script')