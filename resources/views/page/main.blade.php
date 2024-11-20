<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('public/frontend/css/webmain.css')}}">
    <style type="text/css">
        body{
            margin:0px;
        }
        #container{
            width:1000px;
            border:1px solid gray;
            margin-left:auto;
            margin-right:auto;
        }

        #content{
            margin:15px;
        }


    </style>
     <style>
        .slideshow-container {
            width: 980px;
            height: 350px;
            position: relative;
            margin: auto;
        }
        .slideshow {
            padding-top: 10px;
            display: flex;
            overflow: hidden;
        }
        .slide {
            flex: 0 0 25%; /* Hiển thị 4 hình mỗi lần */
        }
        .slide img {
            width: 100%;
            vertical-align: top;
        }
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: rgb(237, 0, 0);
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }
        .prev {
            left: 0;
            border-radius: 3px 0 0 3px;
        }
        .next {
            right: 0;
            border-radius: 3px 3px 3px 3px;
        }
        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>
</head>
<body>
    <div id="container">
        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="main.html"><img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjKeSLQ8sN8zGv2zVND4QiV5N8QgRie8bueWpm8okeFdLCgCFycoUS807_b5q1C3MUltt_cG91QSpgmBaGh_hsC0biOsCO0NFmk7pWnKxDi-ePqvRB_YfpadN404yQVxXC1JfLddfnzC_2GUkWH3xICgxKxXqqPsWM1HtbRqMLQ9CUvPm7VF2QhrlXchA9Q/s775/Logo_VKU.png"></a>
                </div>
                <div class="widget_search">
                    <form method="GET" id="form-search" action="tim-kiem/">
                        <div><input type="text" name="keyword" placeholder="Tìm: tên anime ... " value="" onkeyup="onSearch(this.value)" id="searchkeyword" autocomplete="off"></div>
                    </form>

                </div>
                <div class="widget_user_header">
                    <a class="button-register" rel="nofollow" href="DangKy.html"></a><a class="button-login" rel="nofollow" href="login.html"></a><a class="button-login-with-fb" rel="nofollow" href="capnhatweb.html"></a>
                </div>
            </div>
            <div class="gif-center">

                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi5NE9P0E7Uuz56LL9qO91xo-mF-gMkL5n9mGeeixPJ9g0XDCGU1nQQKG7JzrYGKqm8bu7MPXDzLQFCFKkQIhEd2YYVqmaDuSzFsrVW-5u7pAta1odG4zXW5-cXrpXwYy3-CEAteE4RyyQQjY5WhWqwf774G-el2VyJGBBbjFojMyol3T8eXja2zyU8fFqF/s1280/202405191846-_9_.gif" style="height: 150px; width: 1000px; text-align: center; display: block;">



          </div>
          <div id="box_menu">
            <ul>
                <li class="home mn">
                    <a href="main.html" title="Trang chủ"><span class="icon icon_home"></span></a>
                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="?" title="Thể loại">THỂ LOẠI</a>
                    <div class="sub_mn">
                        <div class="col_sub">
                            <ul>
                                <li><a title="Đời Thường" href="capnhatweb.html">Đời Thường</a></li>
                                <li><a title="Harem" href="capnhatweb.html">Harem</a></li>
                                <li><a title="Shounen" href="capnhatweb.html">Shounen</a></li>
                                <li><a title="Học Đường" href="capnhatweb.html">Học Đường</a></li>
                                <li><a title="Thể Thao" href="capnhatweb.html">Thể Thao</a></li>
                                <li><a title="Drama" href="capnhatweb.html">Drama</a></li>
                                <li><a title="Trinh Thám" href="capnhatweb.html">Trinh Thám</a></li>
                                <li><a title="Kinh Dị" href="capnhatweb.html">Kinh Dị</a></li>
                                <li><a title="Mecha" href="capnhatweb.html">Mecha</a></li>
                                <li><a title="Phép Thuật" href="capnhatweb.html">Phép Thuật</a></li>
                                <li><a title="Phiêu Lưu" href="capnhatweb.html">Phiêu Lưu</a></li>
                                <li><a title="Ecchi" href="capnhatweb.html">Ecchi</a></li>
                                <li><a title="Hài Hước" href="capnhatweb.html">Hài Hước</a></li>

                            </ul>
                        </div>
                        <div class="col_sub">
                            <ul>
                                <li><a title="Hành Động" href="capnhatweb.html">Hành Động</a></li>
                                <li><a title="Romance" href="capnhatweb.html">Romance</a></li>
                                <li><a title="Lịch Sử" href="capnhatweb.html">Lịch Sử</a></li>
                                <li><a title="Âm Nhạc" href="capnhatweb.html">Âm Nhạc</a></li>
                                <li><a title="Tokusatsu" href="capnhatweb.html">Tokusatsu</a></li>
                                <li><a title="Viễn Tưởng" href="capnhatweb.html">Viễn Tưởng</a></li>
                                <li><a title="Fantasy" href="capnhatweb.html">Fantasy</a></li>
                                <li><a title="Blu-ray" href="capnhatweb.html">Blu-ray</a></li>
                                <li><a title="Game" href="capnhatweb.html">Game</a></li>
                                <li><a title="Shoujo" href="capnhatweb.html">Shoujo</a></li>
                                <li><a title="Seinen" href="capnhatweb.html">Seinen</a></li>
                                <li><a title="Super Power" href="capnhatweb.html">Super Power</a></li>
                                <li><a title="Space" href="capnhatweb.html">Space</a></li>

                            </ul>
                        </div>
                        <div class="col_sub ">
                            <ul>
                                <li><a title="Martial Arts" href="capnhatweb.html">Martial Arts</a></li>
                                <li><a title="Siêu Nhiên" href="capnhatweb.html">Siêu Nhiên</a></li>
                                <li><a title="Vampire" href="capnhatweb.html">Vampire</a></li>
                                <li><a title="Mystery" href="capnhatweb.html">Mystery</a></li>
                                <li><a title="Psychological" href="capnhatweb.html">Psychological</a></li>
                                <li><a title="Yuri" href="capnhatweb.html">Yuri</a></li>
                                <li><a title="Shounen Ai" href="capnhatweb.html">Shounen Ai</a></li>
                                <li><a title="Shoujo Ai" href="capnhatweb.html">Shoujo Ai</a></li>
                                <li><a title="Josei" href="capnhatweb.html">Josei</a></li>
                                <li><a title="Parody" href="capnhatweb.html">Parody</a></li>
                                <li><a title="Kid" href="capnhatweb.html">Kid</a></li>
                                <li><a title="Tragedy" href="capnhatweb.html">Tragedy</a></li>
                                <li><a title="Military" href="capnhatweb.html">Military</a></li>
                                <li><a title="Hoạt hình Trung Quốc" href="capnhatweb.html">Hoạt hình Trung Quốc</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="?" title="Trạng thái">TRẠNG THÁI</a>
                    <div class="sub_mn">
                        <div class="col_sub">
                            <ul>
                                <li><a href="capnhatweb.html" title="Đã hoàn thành">Đã hoàn thành</a></li>

                            </ul>
                        </div>
                        <div class="col_sub">
                            <ul>
                                <li><a href="capnhatweb.html" title="Đang tiến hành">Đang tiến hành</a></li>

                            </ul>
                        </div>
                    </div>
                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="capnhatweb.html" title="PHIM LẺ">PHIM LẺ</a>

                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="?" title="NĂM SẢN XUẤT">NĂM SẢN XUẤT</a>
                    <div class="sub_mn">
                        <div class="col_sub ">
                            <ul>
                                <li><a title="2015" href="capnhatweb.html">2015</a></li>
                                <li><a title="2017" href="capnhatweb.html">2017</a></li>
                                <li><a title="2019" href="capnhatweb.html">2019</a></li>
                                <li><a title="2021" href="capnhatweb.html">2021</a></li>
                                <li><a title="2023" href="capnhatweb.html">2023</a></li>

                            </ul>
                        </div>
                        <div class="col_sub ">
                            <ul>
                                <li><a title="2015" href="capnhatweb.html">2016</a></li>
                                <li><a title="2017" href="capnhatweb.html">2018</a></li>
                                <li><a title="2019" href="capnhatweb.html">2020</a></li>
                                <li><a title="2021" href="capnhatweb.html">2022</a></li>
                                <li><a title="2023" href="capnhatweb.html">2024</a></li>

                            </ul>
                        </div>
                    </div>
                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="capnhatweb.html" title="Top lượt xem">TOP LƯỢT XEM</a>

                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="?" title="Forum">FORUM</a>
                    <div class="sub_mn">
                        <div class="col_sub">
                            <ul>
                                <li><a title="Fanpage" href="https://www.facebook.com/conghuy.nguyen.9699523/">Fanpage</a></li>
                                <li><a title="Discord" href="capnhatweb.html">Discord</a></li>

                            </ul>
                        </div>
                    </div>
                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="capnhatweb.html" title="Trợ giúp">TRỢ GIÚP</a>

                </li>
                <li class="mn" title="">
                    <a class="cankhungmenu" href="capnhatweb.html">GIỚI THIỆU</a>

                </li>

            </ul>
        </div>

        </div>
        <div class="khungdecu">
            <div style="font-family: 'Times New Roman', Times, serif; color: bisque; height: 40px; background-color: #524b44; padding-top: 12px; padding-left: 5px;">
                <h1>PHIM ĐỀ CỬ</h1>
            </div>
            <div class="slideshow-container">
                <div class="slideshow">
                    <div class="slide">
                        <a href="./ANIME/THE NEW GATE.html"><div class="grid-item">

                            <div class="item">
                                    <img src="https://cdn.myanimelist.net/images/anime/1898/141857l.jpg" alt="Doraemon">
                            </div>
                            <div class="khungtenanime">
                                <p>THE NEW GATE</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="slide">
                        <a href="./ANIME/KAGE NO JITSURYOKUSHA NI NARITAKUTE!.html"><div class="grid-item">
                            <div class="item">
                                    <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/mJG2AJV.jpg" alt="Doraemon">

                            </div>
                            <div class="khungtenanime">
                                <p>KAGE NO JITSURYOKUSHA NI NARITAKUTE!</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="slide">
                        <a href="./ANIME/KAGE NO JITSURYOKUSHA NI NARITAKUTE! 2ND SEASON.html"><div class="grid-item">
                            <div class="item">
                                    <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/nZu9ClH.jpg" alt="Doraemon">

                            </div>
                            <div class="khungtenanime">
                                <p>KAGE NO JITSURYOKUSHA NI NARITAKUTE! 2ND SEASON</p>

                            </div>
                        </div></a>
                    </div>
                    <div class="slide">
                        <a href="./ANIME/86 (Eight Six).html"> <div class="grid-item">
                            <div class="item">
                                    <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/teWVo70.jpg" alt="Doraemon">

                            </div>
                            <div class="khungtenanime">
                                <p>86 (Eight Six)</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="slide">
                        <a href="./ANIME/KIMETSU NO YAIBA.html"><div class="grid-item">
                            <div class="item">
                                    <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/6JvQ615.jpg" alt="Doraemon">

                            </div>
                            <div class="khungtenanime">
                                <p>KIMETSU NO YAIBA</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="slide">
                        <a href="./ANIME/TSUKI GA MICHIBIKU ISEKAI DOUCHUU.html"><div class="grid-item">
                            <div class="item">
                                    <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/xDbPCM6.jpg" alt="Doraemon">

                            </div>
                            <div class="khungtenanime">
                                <p>TSUKI GA MICHIBIKU ISEKAI DOUCHUU</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="slide">
                        <a href="./ANIME/CÔNG CUỘC TÁI THIẾT VƯƠNG QUỐC CỦA ANH HÙNG CHỦ NGHĨA HIỆN THỰC.html"><div class="grid-item">
                            <div class="item">
                                    <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/dYVKaNv.jpg" alt="Doraemon">

                            </div>
                            <div class="khungtenanime">
                                <p>GENJITSU SHUGI YUUSHA NO OUKOKU SAIKENKI</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="slide">
                        <a href="./ANIME/OTONARI NO TENSHI-SAMA NI ITSUNOMANIKA DAME NINGEN NI SARETEITA KEN.html"><div class="grid-item">
                            <div class="item">
                                    <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/K6o8TEC.jpg" alt="Doraemon">

                            </div>
                            <div class="khungtenanime">
                                <p>OTONARI NO TENSHI-SAMA NI ITSUNOMANIKA DAME NINGEN NI SARETEITA KEN</p>
                            </div>
                        </div></a>
                    </div>
                </div>
                <span class="prev" onclick="plusSlides(-1)">❮</span>
                <span class="next" onclick="plusSlides(1)">❯</span>
            </div>
            <script>
                let slideIndex = 1;
                function showSlides(n) {
                    let slides = document.getElementsByClassName("slide");
                    let i;
                    if (n > slides.length) {
                        slideIndex = 1;
                    }
                    if (n < 1) {
                        slideIndex = slides.length;
                    }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = slideIndex - 1; i < slideIndex + 3; i++) {
                        if (slides[i]) {
                            slides[i].style.display = "inline-block";
                        }
                    }
                }
                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }
                showSlides(slideIndex);
            </script>

        </div>
        <div style="font-family: 'Times New Roman', Times, serif; padding-top: 15px; padding-left: 10px; font-size: 30px; font-weight: bold; color: bisque;"><p >PHIM MỚI</p></div>

        <div id="content">
            <div class="grid-container">
                <a href="./ANIME/THE NEW GATE.html"><div class="grid-item">
                    <div class="item">
                            <img src="https://cdn.myanimelist.net/images/anime/1898/141857l.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>THE NEW GATE</p>
                    </div>
                </div></a>
                <a href="./ANIME/KAGE NO JITSURYOKUSHA NI NARITAKUTE!.html"><div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/mJG2AJV.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>KAGE NO JITSURYOKUSHA NI NARITAKUTE!</p>
                    </div>
                </div></a>
                <a href="./ANIME/KAGE NO JITSURYOKUSHA NI NARITAKUTE! 2ND SEASON.html"><div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/nZu9ClH.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>KAGE NO JITSURYOKUSHA NI NARITAKUTE! 2ND SEASON</p>

                    </div>
                </div></a>
                <a href="./ANIME/86 (Eight Six).html"> <div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/teWVo70.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>86 (Eight Six)</p>
                    </div>
                </div></a>
                <a href="./ANIME/KIMETSU NO YAIBA.html"><div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/6JvQ615.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>KIMETSU NO YAIBA</p>
                    </div>
                </div></a>
                <a href="./ANIME/TSUKI GA MICHIBIKU ISEKAI DOUCHUU.html"><div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/xDbPCM6.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>TSUKI GA MICHIBIKU ISEKAI DOUCHUU</p>
                    </div>
                </div></a>
                <a href="./ANIME/CÔNG CUỘC TÁI THIẾT VƯƠNG QUỐC CỦA ANH HÙNG CHỦ NGHĨA HIỆN THỰC.html"><div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/dYVKaNv.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>GENJITSU SHUGI YUUSHA NO OUKOKU SAIKENKI</p>
                    </div>
                </div></a>
                <a href="./ANIME/OTONARI NO TENSHI-SAMA NI ITSUNOMANIKA DAME NINGEN NI SARETEITA KEN.html"><div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/K6o8TEC.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>OTONARI NO TENSHI-SAMA NI ITSUNOMANIKA DAME NINGEN NI SARETEITA KEN</p>
                    </div>
                </div></a>
                <a href="./ANIME/KIMETSU NO YAIBA - HASHIRA GEIKO-HEN.html"><div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/32UiIy7.jpeg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>KIMETSU NO YAIBA: HASHIRA GEIKO-HEN</p>
                    </div>
                </div></a>
                <a href="./ANIME/TSUKI GA MICHIBIKU ISEKAI DOUCHUU 2ND SEASON.html"><div class="grid-item">
                    <div class="item">
                            <img src="https://imgur-com.cdn.ampproject.org/i/imgur.com/XjraE9Q.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>TSUKI GA MICHIBIKU ISEKAI DOUCHUU 2ND SEASON</p>
                    </div>
                </div></a>
                <a href="./ANIME/CHUYỂN SINH THÀNH QUÝ TỘC CÓ KHẢ NĂNG THẨM ĐỊNH NĂNG LỰC NGƯỜI KHÁC.html"><div class="grid-item">
                    <div class="item">
                            <img src="https://cdn.myanimelist.net/images/manga/3/236898.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>CHUYỂN SINH THÀNH QUÝ TỘC CÓ KHẢ NĂNG THẨM ĐỊNH NĂNG LỰC...</p>
                    </div>
                </div></a>
                <a href="./ANIME/BLUE ARCHIVE THE ANIMATION.html"><div class="grid-item">
                    <div class="item">
                            <img src="https://cdn.myanimelist.net/images/anime/1739/140995l.jpg" alt="Doraemon">

                    </div>
                    <div class="khungtenanime">
                        <p>BLUE ARCHIVE THE ANIMATION</p>
                    </div>
                </div></a>
            </div>
        </div>



        </div>

</body>
</html>