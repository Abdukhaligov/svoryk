@extends("layouts.app")

@section("content")
  <!--slider area start-->
  <section class="slider_section color_two mb-70">
    <div class="slider_area owl-carousel">
      <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('img/slider/slider4.jpg') }}">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="slider_content">
                <h1>Fresh Organic Food</h1>
                <h2>Tomatoes, Onions & Garlic</h2>
                <p>
                  10% certifled-organic mix of fruit and veggies. Perfect for
                  weekly cooking and snacking!
                </p>
                <a href="#">Read more </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('img/slider/slider5.jpg') }}">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="slider_content">
                <h1>Onions & Shallots</h1>
                <h2>Natural Farm Products</h2>
                <p>
                  Widest range of farm-fresh Vegetables, Fruits & seasonal
                  produce
                </p>
                <a href="#">Read more </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('img/slider/slider6.jpg') }}">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="slider_content">
                <h1>Fresh Organic Food</h1>
                <h2>Cabbage, Root Vegetables</h2>
                <p>
                  Natural organic tomatoes make your health stronger. Put your
                  information here
                </p>
                <a href="#">Read more </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--slider area end-->
  <!--banner area start-->
  <div class="banner_area banner_gallery2">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="single_banner">
            <div class="banner_thumb">
              <a href="#"><img src="{{ asset('img/bg/banner5.jpg') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-5">
          <div class="single_banner">
            <div class="banner_thumb">
              <a href="#"><img src="{{ asset('img/bg/banner6.jpg') }}" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <div class="banner2_sidebar">
            <div class="banner_thumb mb-30">
              <a href="#"><img src="{{ asset('img/bg/banner7.jpg') }}" alt=""></a>
            </div>
            <div class="banner_thumb">
              <a href="#"><img src="{{ asset('img/bg/banner8.jpg') }}" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--banner area end-->
  <!--product area start-->
  <div class="product_area color_two  mb-60">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="product_header">
            <div class="section_title">
              <p>Recently added our store</p>
              <h2>Trending Products</h2>
            </div>
            <div class="product_tab_btn">
              <ul class="nav" role="tablist">
                <li>
                  <a class="active" data-toggle="tab" href="#plant1" role="tab" aria-controls="plant1" aria-selected="true">
                    Vegetables
                  </a>
                </li>
                <li>
                  <a data-toggle="tab" href="#plant2" role="tab" aria-controls="plant2" aria-selected="false">
                    Fruits
                  </a>
                </li>
                <li>
                  <a data-toggle="tab" href="#plant3" role="tab" aria-controls="plant3" aria-selected="false">
                    Salads
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="product_container">
        <div class="row">
          <div class="col-12">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                <div class="product_carousel product_column5 owl-carousel">
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                          <span class="label_new">New</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Aliquam
                            Consequat</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$26.00</span>
                          <span class="old_price">$362.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Donec
                            Non Est</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$46.00</span>
                          <span class="old_price">$382.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Etiam
                            Gravida</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$56.00</span>
                          <span class="old_price">$322.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product7.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product8.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                          <span class="label_new">New</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Fusce
                            Aliquam</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$66.00</span>
                          <span class="old_price">$312.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product9.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product10.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Letraset
                            Sheets</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$38.00</span>
                          <span class="old_price">$262.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product11.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product12.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                          <span class="label_new">New</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Lorem
                            Ipsum Lec</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$36.00</span>
                          <span class="old_price">$145.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                </div>
              </div>
              <div class="tab-pane fade" id="plant2" role="tabpanel">
                <div class="product_carousel product_column5 owl-carousel">
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product13.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                          <span class="label_new">New</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Mauris
                            Vel Tellus</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$48.00</span>
                          <span class="old_price">$257.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product12.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Nunc
                            Neque Eros</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$35.00</span>
                          <span class="old_price">$245.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product11.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Proin
                            Lectus Ipsum</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$26.00</span>
                          <span class="old_price">$362.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product9.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                          <span class="label_new">New</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Quisque
                            In Arcu</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$55.00</span>
                          <span class="old_price">$235.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product8.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Cas
                            Meque Metus</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$26.00</span>
                          <span class="old_price">$362.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product7.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Aliquam
                            Consequat</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$26.00</span>
                          <span class="old_price">$362.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                </div>
              </div>
              <div class="tab-pane fade" id="plant3" role="tabpanel">
                <div class="product_carousel product_column5 owl-carousel">
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product11.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Proin
                            Lectus Ipsum</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$26.00</span>
                          <span class="old_price">$362.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product9.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                          <span class="label_new">New</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Quisque
                            In Arcu</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$55.00</span>
                          <span class="old_price">$235.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product13.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                          <span class="label_new">New</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Mauris
                            Vel Tellus</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$48.00</span>
                          <span class="old_price">$257.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product12.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Nunc
                            Neque Eros</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$35.00</span>
                          <span class="old_price">$245.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                          <span class="label_new">New</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Aliquam
                            Consequat</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$26.00</span>
                          <span class="old_price">$362.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="single_product">
                    <figure>
                      <div class="product_thumb">
                        <a class="primary_img" href="#"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                        <a class="secondary_img" href="#"><img src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                        <div class="label_product">
                          <span class="label_sale">Sale</span>
                        </div>
                        <div class="action_links">
                          <ul>
                            <li class="add_to_cart">
                              <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                            </li>
                            <li class="quick_button">
                              <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                                <span class="lnr lnr-magnifier"></span></a></li>
                            <li class="wishlist">
                              <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                            </li>
                            <li class="compare">
                              <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <figcaption class="product_content">
                        <h4 class="product_name"><a href="#">Donec
                            Non Est</a></h4>
                        <p><a href="#">Fruits</a></p>
                        <div class="price_box">
                          <span class="current_price">$46.00</span>
                          <span class="old_price">$382.00</span>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--product area end-->
  <!--product area start-->
  <div class="product_area color_two mb-65">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section_title">
            <p>Recently added our store </p>
            <h2>Mostview Products</h2>
          </div>
        </div>
      </div>
      <div class="product_container">
        <div class="row">
          <div class="col-12">
            <div class="product_carousel product_column5 owl-carousel">
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product20.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product21.jpg') }}" alt=""></a>
                    <div class="label_product">
                      <span class="label_sale">Sale</span>
                      <span class="label_new">New</span>
                    </div>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Quisque
                        In Arcu</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="price_box">
                      <span class="current_price">$55.00</span>
                      <span class="old_price">$235.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product15.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product14.jpg') }}" alt=""></a>
                    <div class="label_product">
                      <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Cas
                        Meque Metus</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="price_box">
                      <span class="current_price">$26.00</span>
                      <span class="old_price">$362.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product17.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product16.jpg') }}" alt=""></a>
                    <div class="label_product">
                      <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Aliquam
                        Consequat</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="price_box">
                      <span class="current_price">$26.00</span>
                      <span class="old_price">$362.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product14.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product15.jpg') }}" alt=""></a>
                    <div class="label_product">
                      <span class="label_sale">Sale</span>
                      <span class="label_new">New</span>
                    </div>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Mauris
                        Vel Tellus</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="price_box">
                      <span class="current_price">$48.00</span>
                      <span class="old_price">$257.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product16.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product17.jpg') }}" alt=""></a>
                    <div class="label_product">
                      <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Nunc
                        Neque Eros</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="price_box">
                      <span class="current_price">$35.00</span>
                      <span class="old_price">$245.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product18.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product19.jpg') }}" alt=""></a>
                    <div class="label_product">
                      <span class="label_sale">Sale</span>
                    </div>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Proin
                        Lectus Ipsum</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="price_box">
                      <span class="current_price">$26.00</span>
                      <span class="old_price">$362.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--product area end-->
  <!--banner fullwidth area satrt-->
  <div class="banner_fullwidth color_two">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="banner_full_content">
            <p>Black Fridays !</p>
            <h2>Sale 50% OFf <span>all vegetable products</span></h2>
            <a href="#">discover now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--banner fullwidth area end-->
  <!--product banner area satrt-->
  <div class="product_banner_area color_two mb-65">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section_title">
            <p>Recently added our store </p>
            <h2>Best Sellers</h2>
          </div>
        </div>
      </div>
      <div class="product_banner_container">
        <div class="row">
          <div class="col-lg-4 col-md-5">
            <div class="banner_thumb">
              <a href="#"><img src="{{ asset('img/bg/banner4.jpg') }}" alt=""></a>
            </div>
          </div>
          <div class="col-lg-8 col-md-7">
            <div class="small_product_area product_column2 owl-carousel">
              <div class="product_items">
                <article class="single_product">
                  <figure>
                    <div class="product_thumb">
                      <a class="primary_img" href="#"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                      <a class="secondary_img" href="#"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                    </div>
                    <figcaption class="product_content">
                      <h4 class="product_name"><a href="#">Aliquam
                          Consequat</a></h4>
                      <p><a href="#">Fruits</a></p>
                      <div class="action_links">
                        <ul>
                          <li class="add_to_cart">
                            <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                          </li>
                          <li class="quick_button">
                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                              <span class="lnr lnr-magnifier"></span></a></li>
                          <li class="wishlist">
                            <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                          </li>
                          <li class="compare">
                            <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                          </li>
                        </ul>
                      </div>
                      <div class="price_box">
                        <span class="current_price">$26.00</span>
                        <span class="old_price">$362.00</span>
                      </div>
                    </figcaption>
                  </figure>
                </article>
                <article class="single_product">
                  <figure>
                    <div class="product_thumb">
                      <a class="primary_img" href="#"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                      <a class="secondary_img" href="#"><img src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                    </div>
                    <figcaption class="product_content">
                      <h4 class="product_name"><a href="#">Donec
                          Non Est</a></h4>
                      <p><a href="#">Fruits</a></p>
                      <div class="action_links">
                        <ul>
                          <li class="add_to_cart">
                            <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                          </li>
                          <li class="quick_button">
                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                              <span class="lnr lnr-magnifier"></span></a></li>
                          <li class="wishlist">
                            <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                          </li>
                          <li class="compare">
                            <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                          </li>
                        </ul>
                      </div>
                      <div class="price_box">
                        <span class="current_price">$46.00</span>
                        <span class="old_price">$382.00</span>
                      </div>
                    </figcaption>
                  </figure>
                </article>
                <article class="single_product">
                  <figure>
                    <div class="product_thumb">
                      <a class="primary_img" href="#"><img src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                      <a class="secondary_img" href="#"><img src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                    </div>
                    <figcaption class="product_content">
                      <h4 class="product_name"><a href="#">Mauris
                          Vel Tellus</a></h4>
                      <p><a href="#">Fruits</a></p>
                      <div class="action_links">
                        <ul>
                          <li class="add_to_cart">
                            <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                          </li>
                          <li class="quick_button">
                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                              <span class="lnr lnr-magnifier"></span></a></li>
                          <li class="wishlist">
                            <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                          </li>
                          <li class="compare">
                            <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                          </li>
                        </ul>
                      </div>
                      <div class="price_box">
                        <span class="current_price">$56.00</span>
                        <span class="old_price">$362.00</span>
                      </div>
                    </figcaption>
                  </figure>
                </article>
              </div>
              <div class="product_items">
                <article class="single_product">
                  <figure>
                    <div class="product_thumb">
                      <a class="primary_img" href="#"><img src="{{ asset('img/product/product7.jpg') }}" alt=""></a>
                      <a class="secondary_img" href="#"><img src="{{ asset('img/product/product8.jpg') }}" alt=""></a>
                    </div>
                    <figcaption class="product_content">
                      <h4 class="product_name"><a href="#">Quisque
                          In Arcu</a></h4>
                      <p><a href="#">Fruits</a></p>
                      <div class="action_links">
                        <ul>
                          <li class="add_to_cart">
                            <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                          </li>
                          <li class="quick_button">
                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                              <span class="lnr lnr-magnifier"></span></a></li>
                          <li class="wishlist">
                            <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                          </li>
                          <li class="compare">
                            <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                          </li>
                        </ul>
                      </div>
                      <div class="price_box">
                        <span class="current_price">$20.00</span>
                        <span class="old_price">$352.00</span>
                      </div>
                    </figcaption>
                  </figure>
                </article>
                <article class="single_product">
                  <figure>
                    <div class="product_thumb">
                      <a class="primary_img" href="#"><img src="{{ asset('img/product/product9.jpg') }}" alt=""></a>
                      <a class="secondary_img" href="#"><img src="{{ asset('img/product/product10.jpg') }}" alt=""></a>
                    </div>
                    <figcaption class="product_content">
                      <h4 class="product_name"><a href="#">Cas
                          Meque Metus</a></h4>
                      <p><a href="#">Fruits</a></p>
                      <div class="action_links">
                        <ul>
                          <li class="add_to_cart">
                            <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                          </li>
                          <li class="quick_button">
                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                              <span class="lnr lnr-magnifier"></span></a></li>
                          <li class="wishlist">
                            <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                          </li>
                          <li class="compare">
                            <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                          </li>
                        </ul>
                      </div>
                      <div class="price_box">
                        <span class="current_price">$72.00</span>
                        <span class="old_price">$352.00</span>
                      </div>
                    </figcaption>
                  </figure>
                </article>
                <article class="single_product">
                  <figure>
                    <div class="product_thumb">
                      <a class="primary_img" href="#"><img src="{{ asset('img/product/product11.jpg') }}" alt=""></a>
                      <a class="secondary_img" href="#"><img src="{{ asset('img/product/product12.jpg') }}" alt=""></a>
                    </div>
                    <figcaption class="product_content">
                      <h4 class="product_name"><a href="#">Proin
                          Lectus Ipsum</a></h4>
                      <p><a href="#">Fruits</a></p>
                      <div class="action_links">
                        <ul>
                          <li class="add_to_cart">
                            <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                          </li>
                          <li class="quick_button">
                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                              <span class="lnr lnr-magnifier"></span></a></li>
                          <li class="wishlist">
                            <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                          </li>
                          <li class="compare">
                            <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                          </li>
                        </ul>
                      </div>
                      <div class="price_box">
                        <span class="current_price">$36.00</span>
                        <span class="old_price">$282.00</span>
                      </div>
                    </figcaption>
                  </figure>
                </article>
              </div>
              <div class="product_items">
                <article class="single_product">
                  <figure>
                    <div class="product_thumb">
                      <a class="primary_img" href="#"><img src="{{ asset('img/product/product13.jpg') }}" alt=""></a>
                      <a class="secondary_img" href="#"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                    </div>
                    <figcaption class="product_content">
                      <h4 class="product_name"><a href="#">Mauris
                          Vel Tellus</a></h4>
                      <p><a href="#">Fruits</a></p>
                      <div class="action_links">
                        <ul>
                          <li class="add_to_cart">
                            <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                          </li>
                          <li class="quick_button">
                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                              <span class="lnr lnr-magnifier"></span></a></li>
                          <li class="wishlist">
                            <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                          </li>
                          <li class="compare">
                            <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                          </li>
                        </ul>
                      </div>
                      <div class="price_box">
                        <span class="current_price">$45.00</span>
                        <span class="old_price">$162.00</span>
                      </div>
                    </figcaption>
                  </figure>
                </article>
                <article class="single_product">
                  <figure>
                    <div class="product_thumb">
                      <a class="primary_img" href="#"><img src="{{ asset('img/product/product10.jpg') }}" alt=""></a>
                      <a class="secondary_img" href="#"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                    </div>
                    <figcaption class="product_content">
                      <h4 class="product_name"><a href="#">Donec
                          Non Est</a></h4>
                      <p><a href="#">Fruits</a></p>
                      <div class="action_links">
                        <ul>
                          <li class="add_to_cart">
                            <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                          </li>
                          <li class="quick_button">
                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                              <span class="lnr lnr-magnifier"></span></a></li>
                          <li class="wishlist">
                            <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                          </li>
                          <li class="compare">
                            <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                          </li>
                        </ul>
                      </div>
                      <div class="price_box">
                        <span class="current_price">$46.00</span>
                        <span class="old_price">$382.00</span>
                      </div>
                    </figcaption>
                  </figure>
                </article>
                <article class="single_product">
                  <figure>
                    <div class="product_thumb">
                      <a class="primary_img" href="#"><img src="{{ asset('img/product/product8.jpg') }}" alt=""></a>
                      <a class="secondary_img" href="#"><img src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                    </div>
                    <figcaption class="product_content">
                      <h4 class="product_name"><a href="#">Donec
                          Non Est</a></h4>
                      <p><a href="#">Fruits</a></p>
                      <div class="action_links">
                        <ul>
                          <li class="add_to_cart">
                            <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                          </li>
                          <li class="quick_button">
                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                              <span class="lnr lnr-magnifier"></span></a></li>
                          <li class="wishlist">
                            <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                          </li>
                          <li class="compare">
                            <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                          </li>
                        </ul>
                      </div>
                      <div class="price_box">
                        <span class="current_price">$46.00</span>
                        <span class="old_price">$382.00</span>
                      </div>
                    </figcaption>
                  </figure>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--product banner area end-->
  <!--blog area start-->
  <section class="blog_section blog_section2 color_two">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section_title">
            <p>Our recent articles about Organic</p>
            <h2>Our Blog Posts</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="blog_carousel blog_column3 owl-carousel">
          <div class="col-lg-3">
            <article class="single_blog">
              <figure>
                <div class="blog_thumb">
                  <a href="#"><img src="{{ asset('img/blog/blog1.jpg') }}" alt=""></a>
                </div>
                <figcaption class="blog_content">
                  <div class="articles_date">
                    <p>18/01/2019 | <a href="#">eCommerce</a></p>
                  </div>
                  <h4 class="post_title"><a href="#">Lorem ipsum
                      dolor sit amet, elit. Impedit, aliquam animi, saepe
                      ex.</a>
                  </h4>
                  <footer class="blog_footer">
                    <a href="#">Show more</a>
                  </footer>
                </figcaption>
              </figure>
            </article>
          </div>
          <div class="col-lg-3">
            <article class="single_blog">
              <figure>
                <div class="blog_thumb">
                  <a href="#"><img src="{{ asset('img/blog/blog2.jpg') }}" alt=""></a>
                </div>
                <figcaption class="blog_content">
                  <div class="articles_date">
                    <p>18/01/2019 | <a href="#">eCommerce</a></p>
                  </div>
                  <h4 class="post_title"><a href="#"> dolor sit
                      amet, elit. Illo iste sed animi quaerat nobis odit
                      nulla.</a></h4>
                  <footer class="blog_footer">
                    <a href="#">Show more</a>
                  </footer>
                </figcaption>
              </figure>
            </article>
          </div>
          <div class="col-lg-3">
            <article class="single_blog">
              <figure>
                <div class="blog_thumb">
                  <a href="#"><img src="{{ asset('img/blog/blog3.jpg') }}" alt=""></a>
                </div>
                <figcaption class="blog_content">
                  <div class="articles_date">
                    <p>18/01/2019 | <a href="#">eCommerce</a></p>
                  </div>
                  <h4 class="post_title"><a href="#">maxime
                      laborum voluptas minus, est, unde eaque esse tenetur.</a>
                  </h4>
                  <footer class="blog_footer">
                    <a href="#">Show more</a>
                  </footer>
                </figcaption>
              </figure>
            </article>
          </div>
          <div class="col-lg-3">
            <article class="single_blog">
              <figure>
                <div class="blog_thumb">
                  <a href="#"><img src="{{ asset('img/blog/blog2.jpg') }}" alt=""></a>
                </div>
                <figcaption class="blog_content">
                  <div class="articles_date">
                    <p>18/01/2019 | <a href="#">eCommerce</a></p>
                  </div>
                  <h4 class="post_title"><a href="#">Lorem ipsum
                      dolor sit amet, elit. Impedit, aliquam animi, saepe
                      ex.</a>
                  </h4>
                  <footer class="blog_footer">
                    <a href="#">Show more</a>
                  </footer>
                </figcaption>
              </figure>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--blog area end-->
  <!--banner area start-->
  <div class="banner_area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="single_banner">
            <div class="banner_thumb">
              <a href="#"><img src="{{ asset('img/bg/banner9.jpg') }}" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--banner area end-->
  <!--custom product area start-->
  <div class="custom_product_area color_two">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section_title">
            <p>Recently added our store </p>
            <h2>Featured Products</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="small_product_area product_carousel product_column3 owl-carousel">
            <div class="product_items">
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Aliquam
                        Consequat</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="price_box">
                      <span class="current_price">$26.00</span>
                      <span class="old_price">$362.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Donec
                        Non Est</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="price_box">
                      <span class="current_price">$46.00</span>
                      <span class="old_price">$382.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Mauris
                        Vel Tellus</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="price_box">
                      <span class="current_price">$56.00</span>
                      <span class="old_price">$362.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
            </div>
            <div class="product_items">
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product7.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product8.jpg') }}" alt=""></a>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Quisque
                        In Arcu</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="price_box">
                      <span class="current_price">$20.00</span>
                      <span class="old_price">$352.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product9.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product10.jpg') }}" alt=""></a>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Cas
                        Meque Metus</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="price_box">
                      <span class="current_price">$72.00</span>
                      <span class="old_price">$352.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product11.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product12.jpg') }}" alt=""></a>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Proin
                        Lectus Ipsum</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="price_box">
                      <span class="current_price">$36.00</span>
                      <span class="old_price">$282.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
            </div>
            <div class="product_items">
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product13.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Mauris
                        Vel Tellus</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="price_box">
                      <span class="current_price">$45.00</span>
                      <span class="old_price">$162.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product10.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Donec
                        Non Est</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="price_box">
                      <span class="current_price">$46.00</span>
                      <span class="old_price">$382.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product8.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Donec
                        Non Est</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="price_box">
                      <span class="current_price">$46.00</span>
                      <span class="old_price">$382.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
            </div>
            <div class="product_items">
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Aliquam
                        Consequat</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="price_box">
                      <span class="current_price">$26.00</span>
                      <span class="old_price">$362.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product11.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product10.jpg') }}" alt=""></a>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Donec
                        Non Est</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="price_box">
                      <span class="current_price">$46.00</span>
                      <span class="old_price">$382.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
              <article class="single_product">
                <figure>
                  <div class="product_thumb">
                    <a class="primary_img" href="#"><img src="{{ asset('img/product/product9.jpg') }}" alt=""></a>
                    <a class="secondary_img" href="#"><img src="{{ asset('img/product/product8.jpg') }}" alt=""></a>
                  </div>
                  <figcaption class="product_content">
                    <h4 class="product_name"><a href="#">Mauris
                        Vel Tellus</a></h4>
                    <p><a href="#">Fruits</a></p>
                    <div class="action_links">
                      <ul>
                        <li class="add_to_cart">
                          <a href="#" title="Add to cart"><span class="lnr lnr-cart"></span></a>
                        </li>
                        <li class="quick_button">
                          <a href="#" data-toggle="modal" data-target="#modal_box" title="quick view">
                            <span class="lnr lnr-magnifier"></span></a></li>
                        <li class="wishlist">
                          <a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a>
                        </li>
                        <li class="compare">
                          <a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="price_box">
                      <span class="current_price">$56.00</span>
                      <span class="old_price">$362.00</span>
                    </div>
                  </figcaption>
                </figure>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--custom product area end-->
  <!--brand area start-->
  <div class="brand_area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="brand_container owl-carousel ">
            <div class="single_brand">
              <a href="#"><img src="{{ asset('img/brand/brand1.jpg') }}" alt=""></a>
            </div>
            <div class="single_brand">
              <a href="#"><img src="{{ asset('img/brand/brand2.jpg') }}" alt=""></a>
            </div>
            <div class="single_brand">
              <a href="#"><img src="{{ asset('img/brand/brand3.jpg') }}" alt=""></a>
            </div>
            <div class="single_brand">
              <a href="#"><img src="{{ asset('img/brand/brand4.jpg') }}" alt=""></a>
            </div>
            <div class="single_brand">
              <a href="#"><img src="{{ asset('img/brand/brand2.jpg') }}" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--brand area end-->
@endsection
