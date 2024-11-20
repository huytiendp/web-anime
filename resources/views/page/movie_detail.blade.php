<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('public/frontend/css/webmain.css')}} ">
    <link rel="stylesheet" href="{{asset('public/frontend/css/noidunganime.css')}}">
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

        



    </style>
</head>
<body>
    <div id="container">
        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="{{asset('public/frontend/css/ ../main.ht')}}ml"><img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjKeSLQ8sN8zGv2zVND4QiV5N8QgRie8bueWpm8okeFdLCgCFycoUS807_b5q1C3MUltt_cG91QSpgmBaGh_hsC0biOsCO0NFmk7pWnKxDi-ePqvRB_YfpadN404yQVxXC1JfLddfnzC_2GUkWH3xICgxKxXqqPsWM1HtbRqMLQ9CUvPm7VF2QhrlXchA9Q/s775/Logo_VKU.png"></a>
                </div>
                <div class="widget_search">
                    <form method="GET" id="form-search" action="tim-kiem/">
                        <div><input type="text" name="keyword" placeholder="Tìm: tên anime ... " value="" onkeyup="onSearch(this.value)" id="searchkeyword" autocomplete="off"></div>
                    </form>
        
                </div>
                <div class="widget_user_header">
                    <a class="button-register" rel="nofollow" href="{{asset('public/frontend/css/../DangKy.h')}}tml"></a><a class="button-login" rel="nofollow" href="{{asset('public/frontend/css/../login.ht')}}ml"></a><a class="button-login-with-fb" rel="nofollow" href="{{asset('public/frontend/css/../capnhatw')}}eb.html"></a>
                </div>
            </div>
            <div class="gif-center">

                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi5NE9P0E7Uuz56LL9qO91xo-mF-gMkL5n9mGeeixPJ9g0XDCGU1nQQKG7JzrYGKqm8bu7MPXDzLQFCFKkQIhEd2YYVqmaDuSzFsrVW-5u7pAta1odG4zXW5-cXrpXwYy3-CEAteE4RyyQQjY5WhWqwf774G-el2VyJGBBbjFojMyol3T8eXja2zyU8fFqF/s1280/202405191846-_9_.gif" style="height: 150px; width: 1000px; text-align: center; display: block;">
                
          
            
          </div>
          <div id="box_menu">
            <ul>
                <li class="home mn">
                    <a href="{{asset('public/frontend/css/ ../main.ht')}}ml" title="Trang chủ"><span class="icon icon_home"></span></a>
                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="{{asset('public/frontend/css/?" title="T')}}hể loại">THỂ LOẠI</a>
                    <div class="sub_mn">
                        <div class="col_sub">
                            <ul>
                                <li><a title="Đời Thường" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Đời Thường</a></li>
                                <li><a title="Harem" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Harem</a></li>
                                <li><a title="Shounen" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Shounen</a></li>
                                <li><a title="Học Đường" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Học Đường</a></li>
                                <li><a title="Thể Thao" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Thể Thao</a></li>
                                <li><a title="Drama" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Drama</a></li>
                                <li><a title="Trinh Thám" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Trinh Thám</a></li>
                                <li><a title="Kinh Dị" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Kinh Dị</a></li>
                                <li><a title="Mecha" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Mecha</a></li>
                                <li><a title="Phép Thuật" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Phép Thuật</a></li>
                                <li><a title="Phiêu Lưu" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Phiêu Lưu</a></li>
                                <li><a title="Ecchi" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Ecchi</a></li>
                                <li><a title="Hài Hước" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Hài Hước</a></li>

                            </ul>
                        </div>
                        <div class="col_sub">
                            <ul>
                                <li><a title="Hành Động" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Hành Động</a></li>
                                <li><a title="Romance" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Romance</a></li>
                                <li><a title="Lịch Sử" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Lịch Sử</a></li>
                                <li><a title="Âm Nhạc" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Âm Nhạc</a></li>
                                <li><a title="Tokusatsu" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Tokusatsu</a></li>
                                <li><a title="Viễn Tưởng" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Viễn Tưởng</a></li>
                                <li><a title="Fantasy" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Fantasy</a></li>
                                <li><a title="Blu-ray" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Blu-ray</a></li>
                                <li><a title="Game" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Game</a></li>
                                <li><a title="Shoujo" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Shoujo</a></li>
                                <li><a title="Seinen" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Seinen</a></li>
                                <li><a title="Super Power" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Super Power</a></li>
                                <li><a title="Space" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Space</a></li>

                            </ul>
                        </div>
                        <div class="col_sub ">
                            <ul>
                                <li><a title="Martial Arts" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Martial Arts</a></li>
                                <li><a title="Siêu Nhiên" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Siêu Nhiên</a></li>
                                <li><a title="Vampire" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Vampire</a></li>
                                <li><a title="Mystery" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Mystery</a></li>
                                <li><a title="Psychological" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Psychological</a></li>
                                <li><a title="Yuri" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Yuri</a></li>
                                <li><a title="Shounen Ai" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Shounen Ai</a></li>
                                <li><a title="Shoujo Ai" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Shoujo Ai</a></li>
                                <li><a title="Josei" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Josei</a></li>
                                <li><a title="Parody" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Parody</a></li>
                                <li><a title="Kid" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Kid</a></li>
                                <li><a title="Tragedy" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Tragedy</a></li>
                                <li><a title="Military" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Military</a></li>
                                <li><a title="Hoạt hình Trung Quốc" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Hoạt hình Trung Quốc</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="{{asset('public/frontend/css/?" title="T')}}rạng thái">TRẠNG THÁI</a>
                    <div class="sub_mn">
                        <div class="col_sub">
                            <ul>
                                <li><a href="{{asset('public/frontend/css/ ../capnhat')}}web.html" title="Đã hoàn thành">Đã hoàn thành</a></li>

                            </ul>
                        </div>
                        <div class="col_sub">
                            <ul>
                                <li><a href="{{asset('public/frontend/css/ ../capnhat')}}web.html" title="Đang tiến hành">Đang tiến hành</a></li>

                            </ul>
                        </div>
                    </div>
                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="{{asset('public/frontend/css/ ../capnhat')}}web.html" title="PHIM LẺ">PHIM LẺ</a>

                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="{{asset('public/frontend/css/?" title="N')}}ĂM SẢN XUẤT">NĂM SẢN XUẤT</a>
                    <div class="sub_mn">
                        <div class="col_sub ">
                            <ul>
                                <li><a title="2015" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">2015</a></li>
                                <li><a title="2017" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">2017</a></li>
                                <li><a title="2019" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">2019</a></li>
                                <li><a title="2021" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">2021</a></li>
                                <li><a title="2023" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">2023</a></li>

                            </ul>
                        </div>
                        <div class="col_sub ">
                            <ul>
                                <li><a title="2015" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">2016</a></li>
                                <li><a title="2017" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">2018</a></li>
                                <li><a title="2019" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">2020</a></li>
                                <li><a title="2021" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">2022</a></li>
                                <li><a title="2023" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">2024</a></li>

                            </ul>
                        </div>
                    </div>
                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="{{asset('public/frontend/css/ ../capnhat')}}web.html" title="Top lượt xem">TOP LƯỢT XEM</a>
                    
                </li>    
                <li class="mn">
                    <a class="cankhungmenu" href="{{asset('public/frontend/css/?" title="F')}}orum">FORUM</a>
                    <div class="sub_mn">
                        <div class="col_sub">
                            <ul>
                                <li><a title="Fanpage" href="{{asset('public/frontend/css/https://www')}}.facebook.com/conghuy.nguyen.9699523/">Fanpage</a></li>
                                <li><a title="Discord" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">Discord</a></li>

                            </ul>
                        </div>
                    </div>
                </li>
                <li class="mn">
                    <a class="cankhungmenu" href="{{asset('public/frontend/css/ ../capnhat')}}web.html" title="Trợ giúp">TRỢ GIÚP</a>
                    
                </li>
                <li class="mn" title="">
                    <a class="cankhungmenu" href="{{asset('public/frontend/css/ ../capnhat')}}web.html">GIỚI THIỆU</a>
                 
                </li>

            </ul>
        </div>

        </div>

        <div id="content">
            <div class="block-wrapper page-single " itemscope="" itemtype="https://schema.org/Movie">
                <div class="movie-info">
                    <div class="block-movie-info">
                        <div class="row">
                            <div class="col-6 movie-detail">
                                <h1 class="movie-title"><span class="title-1" itemprop="name">BLUE ARCHIVE THE ANIMATION</span><span class="title-2" itemprop="name">ブルーアーカイブ The Animation</span><span class="title-year"> (2024)</span></h1>
                                <div class="movie-meta-info">
                                    <dl class="movie-dl">
                                        <dt class="movie-dt">Trạng thái: </dt>
                                        <dd class="movie-dd imdb">09/??</dd><br>
                                        <dt class="movie-dt">Thể loại: </dt>
                                        <dd class="movie-dd dd-cat"><a href="{{asset('public/frontend/css/?">Hành độn')}}g</a>,  <a href="{{asset('public/frontend/css/?">Fantasy<')}}/a>, <a href="{{asset('public/frontend/css/?">Đời thườ')}}ng</a></dd><br>
                                        <dt class="movie-dt">Dạng Anime: </dt>
                                        <dd class="movie-dd"><a href="{{asset('public/frontend/css/danh-sach/t')}}v-series/1.html">TV Series</a></dd><br>
                                        <dt class="movie-dt">Season: </dt>
                                        <dd class="movie-dd"><a href="{{asset('public/frontend/css/?"> Mùa Xuâ')}}n Năm 2024</a></dd><br>
                                        <dt class="movie-dt">Năm: </dt>
                                        <dd class="movie-dd"><a href="{{asset('public/frontend/css//tim-nang-c')}}ao/?status=&amp;season=&amp;year=2024&amp;sort=popular">2024</a>
                                        </dd><br>
                                        <dt class="movie-dt">Lượt Xem: </dt>
                                        <dd class="movie-dd">N/A</dd><br>
                                    </dl>
                                    <div class="clear"></div>
                                </div>
                                <div class="box-rating">
                                    <h2 class="movie-detail-h2">Nội dung</h2>
          
                                    <div class="content" id="film-content" itemscope="" itemtype="http://schema.org/Review" itemprop="review">
                                        <div class="news-article">
                                            <p></p>
                                            <p>Các học viện của thành phố được chia thành các quận riêng và hầu hết được coi là độc lập. Tổng Hội đồng Sinh viên đóng vai trò là hội đồng quản trị để quản lý toàn bộ học viện. Tuy nhiên, khả năng điều hành của nhóm đã bị chững lại kể từ khi Chủ tịch Hội học sinh tổng hợp mất tích một cách bí ẩn. Vô số vấn đề đã bắt đầu nổi lên khắp Kivotos khi thiếu sự lãnh đạo của tổng thống. Để tránh thảm họa, Tổng hội học sinh yêu cầu sự hỗ trợ từ Câu lạc bộ Điều tra Liên bang, hay còn gọi là Schale. Trên thực tế, Schale là câu lạc bộ mới nhất của thành phố và là câu lạc bộ cuối cùng được phê duyệt trước khi tổng thống mất tích. Để hoàn thành nhiệm vụ của mình, Schale dựa vào sự hướng dẫn của một Sensei, người có thể giúp họ giải quyết các sự cố xung quanh Kivotos. (Học ​​sinh được yêu cầu mang theo vũ khí cá nhân và điện thoại thông minh! Hãy trải nghiệm hành động quân sự, tình yêu và tình bạn mà Thành phố Học viện mang lại!) (Nguồn: Trang web tiếng Anh chính thức của Blue Archive)</p>
                                            <p></p>
                                        </div>
                                        <p>Chúc các bạn <a href="{{asset('public/frontend/css/?" title=""')}}>xem anime vietsub</a> vui vẻ tại VKU</p>
                                     
                                    </div>
                                </div>

                            </div>
                            <div class="col-6 movie-image">
                                <div class="movie-l-img"><img itemprop="image" alt="" src="https://cdn.myanimelist.net/images/anime/1739/140995l.jpg" id="style-lOE6n" class="style-lOE6n">
                                    <h2 class="hidden">Xem phim</h2>

                                </div>
                                <div class="tools-box">
                                    <div class="fb-save fb_iframe_widget" data-uri="https://anime47.lol/phim/chuyen-sinh-thanh-quy-toc-co-kha-nang-tham-dinh-nang-luc-nguoi-khac/m9334.html" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=907721805949566&amp;container_width=0&amp;locale=vi_VN&amp;sdk=joey&amp;uri=https%3A%2F%2Fanime47.lol%2Fphim%2Fchuyen-sinh-thanh-quy-toc-co-kha-nang-tham-dinh-nang-luc-nguoi-khac%2Fm9334.html"><span id="style-1aGZ6" class="style-1aGZ6"><iframe name="f08919de71ad65a59" width="1000px" height="1000px" data-testid="fb:save Facebook Social Plugin" title="fb:save Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v12.0/plugins/save.php?app_id=907721805949566&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfa2865e2d0bf5e9a0%26domain%3Danime47.lol%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fanime47.lol%252Ffd9703b2caa4b6cbb%26relation%3Dparent.parent&amp;container_width=0&amp;locale=vi_VN&amp;sdk=joey&amp;uri=https%3A%2F%2Fanime47.lol%2Fphim%2Fchuyen-sinh-thanh-quy-toc-co-kha-nang-tham-dinh-nang-luc-nguoi-khac%2Fm9334.html" id="style-qZvto" class="style-qZvto"></iframe></span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <blockquote class="block-movie-content">
                        <div>
                        <b>Xem phim tại: <div class="block2 servers">
                            <div>
                                <p></p>
                                <h4>Anime47: </h4>
                                <p></p>
                                <a href="{{asset('public/frontend/css/https://ani')}}me47.lol/xem-phim-blue-archive-the-animation-ep-01/204884.html"><div class="logo-anime47"></div></a>

                            </div>
                            <div>
                                <p></p>
                                <h4>Animehay:</h4>
                                <p></p>
                                <a href="{{asset('public/frontend/css/https://ani')}}mehay.bio/xem-phim/blue-archive-the-animation-tap-1-62054.html"><div class="chinh-logo">        
                                <img src="https://animehay.bio/themes/img/logo.png" alt="">
                            </div></a>
                            <div>
                                <p></p>
                                <h4>Vuighe: </h4>
                              
                                <a href="{{asset('public/frontend/css/https://vui')}}ghe3.com/blue-archive-the-animation/tap-1-uy-ban-ung-pho-ngan-truong-bi-dong-cua-trung-hoc-abydos"><div class="chinh-logo">
                                    <img src="https://vuighe3.com/assets/img/logo_v8.png" alt="">
                                </div>
                                <p></p></a>
                            </div>
                            <div>
                                <p></p>
                                <p></p>
                                <h4>Youtube (Ani-One Vietnam):</h4>
                                <p></p>
                                <a href="{{asset('public/frontend/css/https://www')}}.youtube.com/playlist?list=PLOVZwvNm10lV9LojKxr7BRreCOnne2ku2"><div class="chinh-logo">        
                                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/YouTube_Logo_2017.svg" alt="">
                            </div></a>
                            </div>
                            </b>
                    </div>
                    </blockquote>
       
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>