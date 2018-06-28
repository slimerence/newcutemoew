<?php
    if(array_key_exists('slider_home_page',$sliders)){
        $homeSlider = $sliders['slider_home_page'];
    }else{
        return;
    }

    $images = $homeSlider->getSliderImages();

    // 为了保持美观,所有的照片的尺寸,都要和第一张的一样,因此需要强制调整一下
    $ratio = null;
    $width = '100%';
    $height = 'auto';
    if(count($images) > 0){
        foreach ($images as $image) {
            if($homeSlider->images_per_frame>1){
                $width = (string)$image->width;
                $height = (string)$image->height;
                $ratio = 'is-'.substr($width,0,1).'by'.substr($height,0,1);
            }
            break;
        }
    }
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach($images as $idx=>$image)
            <li data-target="#myCarousel" data-slide-to="{{ $idx }}" class="{{ $idx==0 ? 'active' : null }}"></li>
        @endforeach
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach($images as $idx=>$image)
        <div class="item {{ $idx==0 ? 'active' : null }}">
            <a href="{{ $image->link_to }}"><img src="{{ $image->media->url }}" alt="gallery" style="width:100%; height:100%;"></a>
            {{--<div class="carousel-caption">
                <h3>Los Angeles</h3>
                <p>LA is always so much fun!</p>
            </div>--}}
        </div>
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>