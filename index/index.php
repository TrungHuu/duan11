<?php
require "../inc/header.php";
?>

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- tìm kiếm  -->
                    <div style="width: 100%;" class="hero__search">
                        <div style="width: 100%;" class="hero__search__form">
                            <form action="#">
                                <div style="width: 15%;" class="hero__search__categories">
                                   Các danh mục
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Bạn cần tìm gì ?">
                                <button type="submit" class="site-btn">Tìm Kiếm</button>
                            </form>
                        </div>
                    </div>
                    <!-- end tìm kiếm  -->
                    <!-- banner  -->
                    <div class="hero__item set-bg" data-setbg="../img/hero/anh1.jpg">
                        <!-- <div class="hero__text">
                            <h2>Chất Vải <br />100% Cotton</h2>
                            <p>Miển Phí Giao Hàng Cho Những Sản Phẩm Mới</p>
                            <a href="#" class="primary-btn">Mua Sắm Ngay</a>
                        </div> -->
                    </div>
                    <!-- end banner  -->
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- slide sản phẩm -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    
                    <div class="col-lg-3">
                       <div class="categories__item set-bg" data-setbg="../img/categories/ao-2.webp">
                            <h5><a href="shop-details.html">Flower T-Shirt</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="../img/categories/ao-3.webp">
                            <h5><a href="#">LYOS Futu Logo T-Shirt ( Green )</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="../img/categories/ao-4.webp">
                            <h5><a href="#">Ram Hoodie</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="../img/categories/ao-5.webp">
                            <h5><a href="#">Uni T-Shirt</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slide sản phẩm End -->

    <!-- sản phẩm nổi bật -->
    <  <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>SẢN PHẨM NỔI BẬT</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Tất Cả</li>
                            <li data-filter=".ao">Áo </li>
                            <li data-filter=".quan">Quần </li>
                            <li data-filter=".phukien">Phụ Kiện</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix ao">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/featured/ao-1.webp">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">5 Rams T-Shirt ( Black )</a></h6>
                            <h5> <del style="color:red;">399,000₫ </del>350,000₫ </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix ao">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/featured/ao-2.webp">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">LYOS Futu Logo T-Shirt ( Green )</a></h6>
                            <h5> <del style="color:red;">399,000₫ </del>350,000₫ </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix ao">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/featured/ao-3.webp">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Uni T-Shirt</a></h6>
                            <h5> <del style="color:red;">399,000₫ </del>350,000₫ </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix ao">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/featured/ao-4.webp">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Ram Hoodie</a></h6>
                            <h5> <del style="color:red;">399,000₫ </del>350,000₫ </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix quan">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/featured/quan-1.webp">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Basic Pants</a></h6>
                            <h5>599,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix quan">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/featured/quan-2.webp">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">6 Cargo Pants</a></h6>
                            <h5>649,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix quan">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/featured/quan-3.webp">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Blue SLP Jeans (J11)</a></h6>
                            <h5>799,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix quan">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/featured/quan-4.webp">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Sig Pigeon Short</a></h6>
                            <h5>449,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix phukien">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/featured/phukien-1.webp">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Basic Logo Cap</a></h6>
                            <h5>299,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix phukien">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/featured/phukien-2.webp">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">LYOS Soft Socks</a></h6>
                            <h5>99,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix phukien">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../img/featured/phukien-3.webp">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Original Primus Mini Bag</a></h6>
                            <h5>549,000₫</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- san phẩm nổi bật end  -->

    <!-- banner giữa mobile  -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="banner__pic">
                        <img src="../img/km.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- end banner giữa  -->

    <!-- Banner Giữa destop-->
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          
      
          <!-- Wrapper for slides -->
          <div style="height: 430px;" class="carousel-inner">
      
            <div class="item active">
              <img src="../img/bannerthanhly-web.jpg" alt="Khuyến mãi" style="width:100%;height: 100%;margin: 0 auto;">
            </div>
      
            <div class="item">
              <img src="../img/anh.webp" alt="Chicago" style="width:100%;height: 100%">
              
            </div>
          
            <div class="item">
              <img src="../img/km.jpg" alt="New York" style="width:100%;height: 100%">
             
            </div>
        
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
      </div>
      
    <!-- Banner giữa End -->

    <!-- Các mục sản phẩm -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản Phẩm Nổi Bật</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/nb1.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>LYOS Futu Logo T-Shirt ( Green )</h6>
                                        <span>380,000₫</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/nb2.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>LYOS Futu Logo T-Shirt ( Black )</h6>
                                        <span>380,000₫</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/nb3.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>"BANHMI" ( Wolf Grey )</h6>
                                        <span>499,000₫</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/nb4.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Basic Polo</h6>
                                        <span>350,000₫</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/nb5.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Flower T-Shirt</h6>
                                        <span>340,000₫</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/nb6.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ram Hoodie</h6>
                                        <span>490,000₫</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Xếp Hạng Cao Nhất</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/xh1.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Uni T-Shirt</h6>
                                        <span>320,000₫</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/xh2.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tech Monogram Shirt</h6>
                                        <span>390,000₫</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/xh3.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>"BANHMI" ( BLUE )</h6>
                                        <span>499,000₫</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/xh4.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ram T-Shirt ( Black )</h6>
                                        <span>399,000₫</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/xh5.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ram T-Shirt ( White )</h6>
                                        <span>399,000₫</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/xh6.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ram T-Shirt ( Cream )</h6>
                                        <span>399,000₫</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Đánh Giá Cao</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/dg1.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>5 Rams T-Shirt ( Cream )</h6>
                                        <span>399,000₫</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/dg2.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>5 Rams T-Shirt ( Black )</h6>
                                        <span>399,000₫</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/dg3.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ripped Hoodie ( Light Brown )</h6>
                                        <span>599,000₫</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/dg4.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ripped Hoodie ( Black )</h6>
                                        <span>599,000₫</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/dg5.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ripped Hoodie ( Cream )</h6>
                                        <span>599,000₫</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="../img/latest-product/dg6.webp" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ripped Hoodie ( Blue )</h6>
                                        <span>599,000₫</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end các mục sản phẩm -->

    <?php
require "../inc/footer.php";
?>

    