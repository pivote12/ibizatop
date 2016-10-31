<div class="slider-section">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                @foreach($sliders as $slider)
                    <li class="slide-link" data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="{!! $slider->photo !!}"  data-saveperformance="off"  data-title="Vet">
                       
                        <img src="banners/{!! $slider->photo !!}"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                         <div class="image-link-1" onclick="window.open('<?php echo $slider->URL; ?>');"></div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
