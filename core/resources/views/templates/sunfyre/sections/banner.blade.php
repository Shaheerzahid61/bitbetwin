@php
    $bannerContent = getContent('banner.content', true);
    $bannerElement = getContent('banner.element', orderById: true);
@endphp
<style>
     @import url('https://fonts.googleapis.com/css2?family=Aboreto&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style: none;
}
    :root{
    --border-color: #fff5;
    --w-image: 500px;
    --calculate: calc(3 / 2);
}
/* header{
    display: grid;
    grid-template-columns: 80px 1fr calc(var(--w-image) * var(--calculate));
    grid-template-rows: 80px;
    position: relative;
    z-index: 10;
    border-bottom: 1px solid var(--border-color);
} */
header .logo img{
    width: 80%;
}
header .logo{
    display: flex;
    justify-content: center;
    align-items: center;
}
header nav a{
    color: #000;
    font-weight: 400;
}
header nav ul{
    height: 100%;
    display: flex;
    justify-content: end;
    align-items: center;
    gap: 30px;
    padding-right: 30px;
}
header nav{
    border-left: 1px solid var(--border-color);
}
.carousel{
    margin-top: -80px;
    width: 100%;
    height: 100vh;
    overflow: hidden;
}
.carousel .list{
    height: 100%;
    position: relative;
}
.carousel .list::before{
    position: absolute;
    width: var(--w-image);
    height: 100%;
    content: '';
    top: 0;
    left: calc(100% - calc(var(--w-image) * var(--calculate)));
    border-left: 1px solid var(--border-color);
    border-right: 1px solid var(--border-color);
    z-index: 10;
    pointer-events: none;
}
.carousel .list::after{
    position: absolute;
    top: 50px;
    left: 50px;
    content: '';
    background-color: red;
    width: 400px;
    height: 300px;
    z-index: 10;
    pointer-events: none;
    border-radius: 20px  50px 110px  230px;
    filter: blur(150px);
    opacity: .6;
}
.carousel .list .item{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.carousel .list .item .image{
    width: var(--w-image);
    height: 100%;
    position: absolute;
    top: 0;
    left: calc(100% - calc(var(--w-image) * var(--calculate)));
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: end;
    align-items: center;
    font-weight: 500;
}
.carousel .list .item .image img{
    width: 100%;
    margin-bottom: 20px;
    filter: drop-shadow(0 150px 50px #9e0c0c55);
}
.carousel .list .item .image figcaption{
    font-family: 'Aboreto';
    font-weight: bold;
    font-size: 1.3em;
    text-align: right;
    margin-bottom: 30px;
    width: 70%;
}
.carousel .list .item .main-content{
    height: 100%;
    display: grid;
    grid-template-columns: calc(100% - calc(var(--w-image) * var(--calculate)));
}
.carousel .list .item .main-content .content{
    padding: 150px 20px  20px 80px;
}
.carousel .list .item .main-content .content h2{
    font-size: 5em;
    font-family: 'Aboreto';
}
.carousel .list .item .main-content .content .price{
    font-family: 'Aboreto';
    font-size: 3em;
    margin: 20px 0;
}
.carousel .list .item .main-content .content .addToCard{
    background-color: #4f8b69;
    color: #fff;
    padding: 10px  30px;
    font-family: Poppins;
    font-size: large;
    font-weight: 500;
    border-radius: 30px;
    border: none;
    margin-top: 20px;
}
.arrows{
    position: absolute;
    bottom: 20px;
    width: calc(100% - calc(var(--w-image) * var(--calculate)));
    display: grid;
    grid-template-columns: repeat(2, 50px);
    grid-template-rows: 50px;
    justify-content: end;
    gap: 10px;
}
.arrows button{
    background-color: transparent;
    border: 1px solid var(--border-color);
    color: #fff;
    font-family: monospace;
    font-size: large;
    font-weight: bold;
    line-height: 0;
    box-shadow: 0 10px 40px #5555;
    cursor: pointer;
    transition: 0.5s;
}
.arrows button:hover{
    background-color: #eee5;
}
.carousel .list .item{
    display: none;
}
.carousel .list .item.active,
.carousel .list .item.other_1,
.carousel .list .item.other_2{
    display: block;
}
.carousel .list .item.active{
    z-index: 2;
}
.carousel .list .item.other_1,
.carousel .list .item.other_2{
    pointer-events: none;
}
.carousel .list .item.active .main-content{
    animation: showContent 1s ease-in-out 1 forwards;
}
@keyframes showContent{
    from{
        clip-path: circle(0% at 70% 50%);
    }to{
        clip-path: circle(100% at 70% 50%);
    }
}
.next .item.other_1{
    z-index: 1;
}
.next .item .image img,
.next .item .image figcaption{
    animation: effectNext .5s ease-in-out 1 forwards;
}
@keyframes effectNext{
    from{
        transform: translateX(calc(var(--transform-from)));
    }to{
        transform: translateX(calc(var(--transform-from) - var(--w-image)));
    }
}
.next .item.active .image{
    --transform-from: var(--w-image);
}
.next .item.other_1 .image{
    z-index: 3;
    --transform-from: 0px;
    overflow: hidden;
}
.next .item.other_2 .image{
    z-index: 3;
    --transform-from: calc(var(--w-image) * 2);
}
.arrows{
    z-index: 10;
}
/* prev */
.prev .list .item .image img,
.prev .list .item .image figcaption{
    animation: effectPrev 0.5s ease-in-out 1 forwards;
}
@keyframes effectPrev{
    from{
        transform: translateX(calc(var(--transform-from)));
    }to{
        transform: translateX(calc(var(--transform-from) + var(--w-image)));
    }
}
.prev .list .item.active .image{
    --transform-from: calc(var(--w-image) * -1);
    overflow: hidden;
}
.prev .list .item.other_1 .image{
    --transform-from: 0px;
    z-index: 3;
}
.prev .list .item.other_2 .image{
    z-index: 3;
    --transform-from: var(--w-image);
}
.prev .list .item.other_2 .main-content{
    opacity: 0;
}
@media screen and (max-width: 1023px){
    :root{
        --calculate: 1;
        --w-image: 400px;
    }
    .carousel .list .item .main-content .content h2{
        font-size: 3em;
    }
}
@media screen and (max-width: 767px){
    .carousel .list .item .image{
        width: 100%;
        left: 0;
        justify-content: center;
    }
    .carousel .list .item .image figcaption{
        color: #fff;
        width: 100%;
        text-align: center;
    }
    .carousel .list .item .main-content .content{
        display: none;
    }
    .arrows{
        left: 50%;
        justify-content: center;
    }

}
@keyframes zoomInOut {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}
</style>
<!-- <div class="container">
        <div class="row align-items-center g-3">
            <div class="col-lg-6 order-lg-1 order-2">
                <div class="banner-content-slider">
                    <div class="banner-content-slider__inner">
                        @foreach ($bannerElement as $banner)
                            <div class="banner-slider-item">
                                <div class="banner-slider-item__wrapper">
                                    <div class="banner-content">
                                        <h1 class="banner-content__title">{{ __(@$banner->data_values->title) }}</h1>
                                        <p class="banner-content__desc">{{ __(@$banner->data_values->subtitle) }}</p>
                                        <div class  ="banner-content__button">
                                            <a href="{{ url(@$banner->data_values->button_url) }}" class="btn btn--gradient">{{ __(@$banner->data_values->button_name) }}</a>
                                        </div>
                                    </div>
                                    <div class="banner-image">
                                        <img src="{{ getImage('assets/images/frontend/banner/' . @$banner->data_values->image, '185x215') }}" alt="@lang('image')">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="banner-slider-dots"></div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <div class="banner-thumb" style="transform-origin: center top; transform: translateY(1.96205rem) scale(1.03434); will-change: transform;">
                    <img src="{{ getImage('assets/images/frontend/banner/' . @$bannerContent->data_values->image, '670x675') }}" alt="@lang('image')">
                </div>
            </div>
        </div>
</div> -->
    <section class="carousel next banner-section bg-img" data-background-image="{{ getImage('assets/assets/images/frontend/banner/' . @$bannerContent->data_values->background_image, '1920x800') }}">
            <div class="list">
            @foreach ($bannerElement as $banner)
                <article class="item other_1">
                    <div class="main-content" style="background-color: #{{ gs('base_color') }};">
                        <div class="content">
                            <h2>{{ __(@$banner->data_values->title) }}</h2>
                            <p class="price">{{ __(@$banner->data_values->subtitle) }}</p>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores labore animi voluptatibus sequi illo, earum molestias explicabo officiis iste neque? Quis quod eligendi fugit, dolore nam itaque modi exercitationem voluptatem corrupti aut aspernatur. Quos non in sed ratione tenetur harum.
                            </p>
                            <button >
                            <a href="{{ url(@$banner->data_values->button_url) }}" class="btn btn--gradient">{{ __(@$banner->data_values->button_name) }}</a>
                            </button>
                        </div>
                    </div>

                    <figure class="image" style="animation: zoomInOut 3.5s infinite alternate;">
                        <img src="{{ getImage('assets/images/frontend/banner/' . @$bannerContent->data_values->image, '670x675') }}" alt="@lang('image')">
                        <figcaption>{{ __(@$banner->data_values->title) }}</figcaption>
                    </figure>
                </article>
                <!-- <article class="item active">
                    <div class="main-content"
                    style="background-color: #f5bfaf;">
                        <div class="content">
                            <h2>Strawberry mocha, a new product</h2>
                            <p class="price">$ 20</p>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores labore animi voluptatibus sequi illo, earum molestias explicabo officiis iste neque? Quis quod eligendi fugit, dolore nam itaque modi exercitationem voluptatem corrupti aut aspernatur. Quos non in sed ratione tenetur harum.
                            </p>
                            <button class="addToCard">
                                Add To Card
                            </button>
                        </div>
                    </div>
                    <figure class="image">
                        <img src="{{ asset('assets/images/2.png') }}" alt="">
                        <figcaption>Strawberry mocha, a new product</figcaption>
                    </figure>
                </article>
                <article class="item other_2">
                    <div class="main-content"
                    style="background-color: #dedfe1;">
                        <div class="content">
                            <h2>Doppio espresso, a new product</h2>
                            <p class="price">$ 20</p>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores labore animi voluptatibus sequi illo, earum molestias explicabo officiis iste neque? Quis quod eligendi fugit, dolore nam itaque modi exercitationem voluptatem corrupti aut aspernatur. Quos non in sed ratione tenetur harum.
                            </p>
                            <button class="addToCard">
                                Add To Card
                            </button>
                        </div>
                    </div>
                    <figure class="image">
                        <img src="{{ asset('assets/images/3.png') }}" alt="">
                        <figcaption>Doppio espresso, a new product</figcaption>
                    </figure>
                </article>
                <article class="item">
                    <div class="main-content"
                    style="background-color: #7eb63d;">
                        <div class="content">
                            <h2>Matcha latte macchiato, a new product</h2>
                            <p class="price">$ 20</p>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores labore animi voluptatibus sequi illo, earum molestias explicabo officiis iste neque? Quis quod eligendi fugit, dolore nam itaque modi exercitationem voluptatem corrupti aut aspernatur. Quos non in sed ratione tenetur harum.
                            </p>
                            <button class="addToCard">
                                Add To Card
                            </button>
                        </div>
                    </div>
                    <figure class="image">
                        <img src="{{ asset('assets/images/4.png') }}" alt="">
                        <figcaption>Matcha latte macchiato, a new product</figcaption>
                    </figure>
                </article> -->
            @endforeach
            </div>
            <div class="arrows">
                <button id="prev"><</button>
                <button id="next">>></button>
            </div>
</section>
 <script>
    let next = document.getElementById('next');
let prev = document.getElementById('prev');
let carousel = document.querySelector('.carousel');
let items = document.querySelectorAll('.carousel .item');
let countItem = items.length;
let active = 1;
let other_1 = null;
let other_2 = null;
next.onclick = () => {
    carousel.classList.remove('prev');
    carousel.classList.add('next');
    active =active + 1 >= countItem ? 0 : active + 1;
    other_1 =active - 1 < 0 ? countItem -1 : active - 1;
    other_2 = active + 1 >= countItem ? 0 : active + 1;
    changeSlider();
}
prev.onclick = () => {
    carousel.classList.remove('next');
    carousel.classList.add('prev');
    active = active - 1 < 0 ? countItem - 1 : active - 1;
    other_1 = active + 1 >= countItem ? 0 : active + 1;
    other_2 = other_1 + 1 >= countItem ? 0 : other_1 + 1;
    changeSlider();
}
const changeSlider = () => {
    let itemOldActive = document.querySelector('.carousel .item.active');
    if(itemOldActive) itemOldActive.classList.remove('active');

    let itemOldOther_1 = document.querySelector('.carousel .item.other_1');
    if(itemOldOther_1) itemOldOther_1.classList.remove('other_1');

    let itemOldOther_2 = document.querySelector('.carousel .item.other_2');
    if(itemOldOther_2) itemOldOther_2.classList.remove('other_2');

    items.forEach(e => {
        e.querySelector('.image img').style.animation = 'none';
        e.querySelector('.image figcaption').style.animation = 'none';
        void e.offsetWidth;
        e.querySelector('.image img').style.animation = '';
        e.querySelector('.image figcaption').style.animation = '';
    })

    items[active].classList.add('active');
    items[other_1].classList.add('other_1');
    items[other_2].classList.add('other_2');

    clearInterval(autoPlay);
    autoPlay = setInterval(() => {
        next.click();
    }, 5000);
}
let autoPlay = setInterval(() => {
    next.click();
}, 5000);
 </script>
