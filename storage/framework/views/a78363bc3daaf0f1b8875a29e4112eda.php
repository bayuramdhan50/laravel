<?php $__env->startSection('container'); ?>
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Home  -->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <div class="swiper-slide container">
                <img src="./img/home1.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Guardians of the Galaxy <br>Volume 2</h1>
                    <a href="" class="btn">Read More</a>
                    <a href="" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>
            <div class="swiper-slide container">
                <img src="./img/home2.png" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Thor: <br>Love and Thunder</h1>
                    <a href="" class="btn">Read More</a>
                    <a href="" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>
            <div class="swiper-slide container">
                <img src="./img/home3.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Spider-Man <br>No Way Home</h1>
                    <a href="" class="btn">Read More</a>
                    <a href="" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>
            <div class="swiper-slide container">
                <img src="./img/home4.png" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Avengers: <br>End Game</h1>
                    <a href="" class="btn">Read More</a>
                    <a href="" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </section>

    <!-- Movies  -->
    <div class="movies" id="movies">
        <h2 class="heading">Opening This Week</h2>
        <!-- Movies container  -->
        <div class="movies-container">
            <!-- box-1  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m1.jpg" alt="">
                </div>
                <h3>Dr.Strange</h3>
                <span>120 min | Action</span>
            </div>
            <!-- box-2  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m2.jpg" alt="">
                </div>
                <h3>Pathan</h3>
                <span>120 min | Action</span>
            </div>
            <!-- box-3  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m3.jpg" alt="">
                </div>
                <h3>Batman vs Superman</h3>
                <span>120 min | Thriller</span>
            </div>
            <!-- box-4  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m4.jpg" alt="">
                </div>
                <h3>John Wick 2</h3>
                <span>120 min | Action</span>
            </div>
            <!-- box-5  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m5.jpg" alt="">
                </div>
                <h3>Aquaman</h3>
                <span>120 min | Adventure</span>
            </div>
            <!-- box-6  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m6.jpg" alt="">
                </div>
                <h3>Black Panther</h3>
                <span>120 min | Thriller</span>
            </div>
            <!-- box-7  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m7.jpg" alt="">
                </div>
                <h3>Uncharted</h3>
                <span>120 min | Adventure</span>
            </div>
            <!-- box-8  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m8.jpg" alt="">
                </div>
                <h3>Brahmastra</h3>
                <span>120 min | Action</span>
            </div>
            <!-- box-9  -->
            <div class="box">
                <div class="box-img">
                    <img src="./img/m9.jpg" alt="">
                </div>
                <h3>Mortal-Engines</h3>
                <span>120 min | Action</span>
            </div>
            <!-- box-10  -->
            <div class="box">
                <div class="box-img">
                    <img src="img/m10.jpg" alt="">
                </div>
                <h3>UnderWorld Blood Wars</h3>
                <span>120 min | Action</span>
            </div>
        </div>
    </div>

    <!-- coming  -->
    <section class="coming" id="coming">
        <h2 class="heading">Coming Soon</h2>
        <!-- coming contanier  -->
        <div class="coming-container swiper">
            <div class="swiper-wrapper">
                <!-- box-1  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c1.jpg" alt="">
                    </div>
                    <h3>Ant-Man and the Wasp:Quantumania</h3>
                </div>
                <!-- box-2  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c2.jpg" alt="">
                    </div>
                    <h3>The Flash</h3>
                </div>
                <!-- box-3  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c3.jpg" alt="">
                    </div>
                    <h3>Guardians of the Galaxy Vol.3</h3>
                </div>
                <!-- box-4  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c4.jpg" alt="">
                    </div>
                    <h3>Shazam! Fury of the Gods</h3>
                </div>
                <!-- box-5  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c5.jpg" alt="">
                    </div>
                    <h3>Aquaman and the Lost Kingdom</h3>
                </div>
                <!-- box-6  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c6.jpg" alt="">
                    </div>
                    <h3>John Wick:Chapter 4</h3>
                </div>
                <!-- box-7 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c7.jpg" alt="">
                    </div>
                    <h3>Transformer rise of the beasts</h3>
                </div>
                <!-- box-8  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c8.jpg" alt="">
                    </div>
                    <h3>Mission: Impossible 7</h3>
                </div>
                <!-- box-9  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c9.png" alt="">
                    </div>
                    <h3>Deadpool 3</h3>
                </div>
                <!-- box-10  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c10.jpg" alt="">
                    </div>
                    <h3>Dune: Part two</h3>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\bayu\coding\php\laravel\PT SSS\resources\views/welcome.blade.php ENDPATH**/ ?>