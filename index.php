<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Minahasa Utara</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>T</span>ravel </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">book</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- login form container  -->

<div class="popup-form-container">
    <i class="fas fa-times" id="popup-close"></i>
    <form action="" method="POST">
        <p style="font-size:4rem" id="pop_up_nama_hotel"></p>
        <p id="pop_up_desc"></p>
    </form>
        
</div>

<div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>

    <form action="" method="POST">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email">
        <input type="password" class="box" placeholder="enter your password">
        <input type="submit" value="login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
    </form>
</div>



<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Minahasa Utara</h3>
        <p>si tou timou tumou tou</p>
    </div>
    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->

<!-- book section starts  -->

<section class="book" id="book">

    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/book-img.svg" alt="">
        </div>

        <form action="pelanggan.php" method="POST">
            <div class="inputBox">
                <h3>Name</h3>
                <input name="nama" type="text" placeholder="name">
            </div>
            <div class="inputBox">
                <h3>Email</h3>
                <input name="email" type="text" placeholder="Email Address">
            </div>
            <div class="inputBox">
                <h3>where to</h3>
                <input name="paket" id="paket" type="text" placeholder="place name" readonly="readonly">
            </div>
            <div class="inputBox">
                <h3>how many</h3>
                <input name="jumlah" type="number" placeholder="number of guests">
            </div>
            <div class="inputBox">
                <h3>arrivals</h3>
                <input name="checkin" type="date">
            </div>
            <div class="inputBox">
                <h3>leaving</h3>
                <input name="checkout" type="date">
            </div>
            <input name="submit" type="submit" class="btn" value="book now">
        </form>

    </div>

</section>

<!-- book section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <section class="gallery" id="gallery">

        
    </section>

    <div class="box-container">
    <?php 
        include("include.php");
        $query = ("SELECT * From penginapan");
        $result = mysqli_query($db,$query);
        
        while($row = mysqli_fetch_assoc($result)){
            echo "<div class='box'>
            <img src='images/" . $row["foto_hotel"] ."' alt=''>";
            echo "
                
                    <div class='content'>
                    <h3> <i class='fas fa-map-marker-alt'></i> " . $row["nama_penginapan"] . "</h3>
                    <p>" . $row["alamat_penginapan"] . "</p>
                    <div class='stars'>";
                    for($i = 0; $i < 5;$i++){
                        if($i < $row['rating']){
                            echo "<i class='fas fa-star'></i>";
                        }else{
                            echo "<i class='far fa-star'></i>";
                        }
                    }
            echo "</div>
                    <div class='price'>" . $row['harga'] . '<span>$120.00</span> </div>
                    <a href="#book" onclick="change('. "'" . $row["nama_penginapan"] . "'" .')" class="btn">book now</a>
                    <a id="popup-btn" onclick="detailed('. "'" . $row["nama_penginapan"] . "'" . ",'" . $row['detail'] . "'" .')" class="btn">Detail</a>
                    </div>
                </div>
            ';

            } ?>
        
        <!-- <div class="box">
            <img src="images/p-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Casabaio Paradise Resort </h3>
                <p>Kawasan Pariwisata Paradise, Desa, Maen, Kec. Likupang Tim., Kabupaten Minahasa Utara, Sulawesi Utara</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#book" onclick="change('Casabaio Paradise Resort')" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-2.webp" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Sutan Raja Hotel </h3>
                <p>Jl. Raya Manado - Bitung, Watutumou, Kec. Kalawat, Kabupaten Minahasa Utara, Sulawesi Utara</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#book" onclick="change('Sutan Raja Hotel')" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-3.webp" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Gangga Island Resort </h3>
                <p>Tongkeina, Kec. Bunaken, Kota Manado, Sulawesi Utara </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Murex Dive Resort Bangka</h3>
                <p>Desa Pulau Bangka, Lihunu, Bangka Island, North Minahasa Regency, North Sulawesi</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Bastiano Dive Resort </h3>
                <p>Liang Beach, Kec. Bunaken Kepulauan, Kota Manado, Sulawesi Utara</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> The Sentra Hotel </h3>
                <p>Jl. Ir. Soekarno, Maumbi, Kec. Talawaan, Kabupaten Minahasa Utara, Sulawesi Utara</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div> -->

    </div>

</section>

<!-- packages section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around Minahasa Utara</h3>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/T-1.jpg" alt="">
            <div class="content">
                <h3>Budo Vilage</h3>
                <p>Budo Village has an attraction in the form of a mangrove forest covering an area of ​​about 30 hectares, as well as alternative access to the Bunaken Marine Park.</p>
            </div>
        </div>
        
        <div class="box">
            <img src="images/T-2.jpg" alt="">
            <div class="content">
                <h3>Paal Beach</h3>
                <p>Paal Beach is a beach that is famous for its beautiful white sand, sea and even a clean & cool environment.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/T-3.jpg" alt="">
            <div class="content">
                <h3>Waruga</h3>
                <p>Waruga is a stone tomb that has the shape of a cube, with a triangular roof that resembles the roof of a house today.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/T-4.jpg" alt="">
            <div class="content">
                <h3>Tunan Waterfall</h3>
                <p>Tunan Waterfall, a waterfall tour located in Minahasa, presents a view of natural beauty, easy trekking, and Instagrammable spots.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/T-5.png" alt="">
            <div class="content">
                <h3>Lihaga Island</h3>
                <p>One of the destinations that should not be missed in North Sulawesi is Lihaga Island. The sea around the island, which has relatively calm waves and crystal-clear sea water, the color of Tosca, is guaranteed to make you fall in love even before setting foot on this island.</p>
            </div>
        </div>
        <div class="box">
            <img src="images/T-6.jpg" alt="">
            <div class="content">
                <h3>Klabat Mountain</h3>
                <p>Mount Klabat is the highest mountain in North Sulawesi Province. The peak height reaches around 1,995 meters above sea level. This mountain by the people of Tonsea (North Minahasa) is also called Mount Tamporok.</p>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->
<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">
            
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic1.jpg" alt="">
                    <h3>Trisna Rintjap</h3>
                    <p>Klabat is the highest mountain in North Sulawesi. The highest peak is 1995 m above sea level, you can see the whole city of Manado from there. The distance is 5 km, and it usually takes 6 to 8 hours to reach the final camp. From there it is less than an hour's walk to reach the top. You don't need to bring water for cooking, there are fresh spring water at camp 2 and 6.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic2.jpg" alt="">
                    <h3>Queenta Poluan</h3>
                    <p>This small island called Lihaga is very beautiful. The beach with clean white sand, clear blue sea water makes the eyes feel reluctant to blink. On this island there are managers who provide huts as shelters for visitors. There are also clean toilet facilities. For all that, indeed visitors are charged a fee, but it's not expensive and it's worth it with what we get on this island. The cleanliness of this island is very well maintained, making its beauty perfect. I agree to dub Lihaga Island as a hidden paradise in Minahasa Utara.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic3.jpg" alt="">
                    <h3>Fransiska Siagian</h3>
                    <p>Almost every month I go to this place. The panoramic view of the blue sea and white sandy beaches are very beautiful. I often bathe in this place. snacks are also available.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic4.jpg" alt="">
                    <h3>Maynalo Anderi</h3>
                    <p>the location of the waterfall is in the forest, by following a path of approximately 500 meters between tropical forests..making the location very beautiful and comfortable to visit, it's just that the toilet facilities that are built are not maintained and many are damaged and don't work...there needs to be community concern and managers to maintain cleanliness in this very nice and beautiful location.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

<!-- review section ends -->

<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>we provide hotels and tourist attractions that are popular in North Minahasa, we hope that many people can use this application.</p>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
        </div>

    </div>

    <h1 class="credit"> created by <span> UNDERRATED </span> | all rights reserved! </h1>

</section>














<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="./script.js"></script>

</body>
</html>
