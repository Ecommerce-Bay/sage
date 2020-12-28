<div class="slider-story">
    <div class="carousel">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 3</div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="story">
        <p>"All base UI elements are made using Nested Symbols and shared styles that are logically canneted. Gorgeous, high-quality video sharing on desktop, mobile, tablet."</p>
        <span>Stéphane Germain, President</span>
        <button class="button"><a href="#">Discover our story</a></button>
    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        loop: true,
        pagination: {
        el: '.swiper-pagination',
        clickable: true,
        },
    });
</script>