<section class="banner">
    <div class="imageBanner1">
        <!-- Slideshow container -->
        <div class="slideshow-container">
         @foreach ($products as $item)
             
           
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="{{ asset($item['img_title'])}}">
                <div class="text"><a href="{{url('client/products/'.$item['id'])}}"><h2>{{$item['title_post']}}</h2></a></div>
            </div>
            @endforeach 
        <br>
    </div>
</section>