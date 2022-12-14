<main class="main-content" role="main">
      <div class="vela-path">
            <div class="container">
                  <ol class="vela-path-list">
                        <li>
                              <a href="#">
                                    <span>Home</span>
                              </a>
                        </li>
                        <?php
                              foreach ($kq as  $value) {
                                    echo '
                              <li>
                                    <a href="#">
                                          <span>
                                          ' . $value['name_cate'] . '
                                          </span>
                                    </a>
                              </li>
                              <li>
                                    <span>
                                          ' . $value['name_pro'] . ';
                                    </span>
                              </li>';
                              }
                        ?>
                  </ol>
            </div>
      </div>
      <div class="vela-detail">
            <div class="container">
                  <div class="row-flex row-flex-margin">
                        <div class="c-6 col">
                              <div class="detail-image">
                                    <div class="detail-image-feature">
                                          <?php
                                          foreach ($kq as  $value) {
                                                echo '<img class="detail-current-image" src="' . $value['img'] . '" alt="detail-image-product">';
                                          }
                                          ?>

                                    </div>
                                    <?php
                                    foreach ($kq as  $value) {
                                          echo '
                                    <div class="detail-thumb-list">
                                          <div class="detail-thumb-item">
                                                <img src="' . $value['img_cart1'] . '" alt="detail-thumb-image" class="thumb-image">
                                          </div>
                                          <div class="detail-thumb-item">
                                                <img src="' . $value['img_cart2'] . '" alt="detail-thumb-image" class="thumb-image">
                                          </div>
                                          <div class="detail-thumb-item">
                                                <img src="' . $value['img_cart3'] . '" alt="detail-thumb-image" class="thumb-image">
                                          </div>
                                          <div class="detail-thumb-item">
                                                <img src="' . $value['img_cart4'] . '" alt="detail-thumb-image" class="thumb-image">
                                          </div>
                                    </div>';
                                    }
                                    ?>
                              </div>
                        </div>
                        <div class="c-6 col">
                              <div class="detail-product-info">
                                    <?php
                                    foreach ($kq as  $value) {
                                          $value['name_pro'];
                                    }
                                    ?>
                                    <div class="detail-product-review">
                                          <span class="detail-review">
                                                <span class="detail-rating">
                                                      <i class="fa-solid fa-star"></i>
                                                      <i class="fa-solid fa-star"></i>
                                                      <i class="fa-solid fa-star"></i>
                                                      <i class="fa-solid fa-star"></i>
                                                      <i class="fa-solid fa-star"></i>
                                                </span>
                                                <span class="detail-review-count">
                                                      4 nh???n x??t
                                                </span>
                                          </span>
                                    </div>
                                    <div class="detail-product-price">
                                          <div class="row-flex align-items">
                                                <?php
                                                foreach ($kq as  $value) {
                                                      echo '
                                                <span class="detail-price-old">
                                                      <span class="money">$' . $value['price'] . '</span>
                                                </span>
                                                <span class="detail-price-sale">
                                                      <span class="money">$' . $value['price_sale'] . '</span>
                                                </span>';
                                                }
                                                ?>


                                          </div>
                                    </div>
                                    <div class="detail-product-desc">
                                          <p>M???t ng?????i ????n ??ng kh??n ngoan than kh??c r???ng ch??nh x??c, anh ta c???n hymenaeos phasellus felis, v?? ng??y mai n???i ??au c???a Tortor s??? t???t cho anh ta, v?? t??i ???? b??? treo kh???i t??i s???n c???a t??i ho???c con s?? t???.</p>
                                    </div>
                                    <div class="detail-product-wrapper">
                                          <form class="detail-product-addcart" action="#" method="POST">
                                                <div class="addcard">
                                                      <div class="addcard-group">
                                                            <div class="addcard-quantity">
                                                                  <div class="addcard-qty">
                                                                        <button type="button" class="addcard-qty-minus">
                                                                              <span>-</span>
                                                                        </button>
                                                                        <input type="text" value="1" min="1" pattern="[0-9]*">
                                                                        <button type="button" class="addcard-qty-plus">
                                                                              <span>+</span>
                                                                        </button>
                                                                  </div>
                                                            </div>
                                                            <button type="button" class="btn btn-addcard">
                                                                  <i class="icons">
                                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                                                              <g>
                                                                                    <g>
                                                                                          <path d="M416,277.333H277.333V416h-42.666V277.333H96v-42.666h138.667V96h42.666v138.667H416V277.333z"></path>
                                                                                    </g>
                                                                              </g>
                                                                        </svg>
                                                                  </i>
                                                                  <span id="addcard-text">Gi??? h??ng</span>
                                                            </button>
                                                      </div>
                                                </div>
                                          </form>
                                          <div class="detail-product-atribute">
                                                <p class="atribute">
                                                      <label>Kh??? d???ng:</label>
                                                      In Stock
                                                </p>
                                                <p class="atribute">
                                                      <label>Ng?????i b??n:</label>
                                                      htbl
                                                </p>
                                                <p class="atribute">
                                                      <label>SKU:</label>
                                                      N/A
                                                </p>
                                                <div class="atribute atribute-categories">
                                                      <label>B??? s??u t???p:</label>
                                                      <a href="#" title="Best Sellter">B??n ch???y nh???t</a>,
                                                      <a href="#" title="Decor Art">Ngh??? thu???t trang tr??</a>,
                                                      <a href="#" title="Furniture">????? n???i th???t</a>,
                                                      <a href="#" title="Home page">Trang ch???</a>,
                                                      <a href="#" title="Kitchen Things">D???ng c??? b???p</a>,
                                                      <a href="#" title="New Products">S???n ph???m m???i</a>,
                                                </div>
                                          </div>
                                          <div class="detail-product-share">
                                                <div class="share-title">
                                                      Chia s???:
                                                </div>
                                                <ul class="share-socials-list">
                                                      <li>
                                                            <a href="#">
                                                                  <i class="fa-brands fa-twitter"></i>
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="#">
                                                                  <i class="fa-brands fa-facebook-f"></i>
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="#">
                                                                  <i class="fa-brands fa-pinterest-p"></i>
                                                            </a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class="vela-detail-info">
            <div class="container">
                  <div class="detail-heading">
                        <ul class="detail-navbar-list">
                              <li class="tab-item active" onclick="tabs(event, 'Description')">
                                    <a aria-expanded="true">M?? t???</a>
                              </li>
                              <li class="tab-item" onclick="tabs(event, 'ShippingandReturn')">
                                    <a aria-expanded="true">V???n chuy???n v?? tr??? l???i</a>
                              </li>
                              <li class="tab-item" onclick="tabs(event, 'Reviews')">
                                    <a aria-expanded="true">Nh???n x??t</a>
                              </li>
                        </ul>
                  </div>
                  <div class="tabs-content">
                        <div id="Description" class="tab-pane active">
                              <div class="rte">
                                    <?php
                                    foreach ($kq as  $value) {
                                          echo '<p>' . $value['discribe'] . '</p>';
                                    }
                                    ?>
                                    <p>?????ng bao gi??? ch??i m??nh. Th???i ti???t th???t tuy???t v???i, h??y c??ng t??i b?????c qua con ???????ng th??nh c??ng h??n. H??y th???c hi???n h??nh tr??nh n??y v???i t??i, S?? t???! Ng??y tr?????c c??? c?? m??u n??u, gi??? ???? xanh v?? t??i kh??ng b??? cu???c. Kh??ng bao gi??? ?????u h??ng</p>
                                    <ul>
                                          <li>S??? r?? r??ng c??ng l?? m???t qu?? tr??nh n??ng ?????ng.</li>
                                          <li>K??o theo ???? l?? s??? thay ?????i trong th??i quen c???a ?????c gi???.</li>
                                          <li>S??? r?? r??ng c??ng l?? m???t qu?? tr??nh n??ng ?????ng.</li>
                                          <li>K??o theo ???? l?? s??? thay ?????i trong th??i quen c???a ?????c gi???. </li>
                                          <li>S??? r?? r??ng c??ng l?? m???t qu?? tr??nh n??ng ?????ng.</li>
                                          <li>K??o theo ???? l?? s??? thay ?????i trong th??i quen c???a ?????c gi???. </li>
                                    </ul>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.</p>
                              </div>
                        </div>
                        <div id="ShippingandReturn" class="tab-pane ">
                              <div class="rte">
                                    <h4>Ch??nh s??ch tr??? h??ng</h4>
                                    <p>B???n c?? th??? tr??? l???i h???u h???t c??c m???t h??ng m???i, ch??a m??? trong v??ng 30 ng??y k??? t??? ng??y giao h??ng ????? ???????c ho??n ti???n ?????y ?????. Ch??ng t??i c??ng s??? thanh to??n chi ph?? v???n chuy???n tr??? l???i n???u vi???c tr??? l???i l?? do l???i c???a ch??ng t??i (b???n nh???n ???????c m???t m???t h??ng kh??ng ch??nh x??c ho???c b??? l???i, v.v.).</p>
                                    <p>
                                          B???n s??? nh???n ???????c ti???n ho??n l???i trong v??ng b???n tu???n k??? t??? khi ????a g??i h??ng c???a b???n cho ng?????i g???i tr??? h??ng, tuy nhi??n, trong nhi???u tr?????ng h???p, b???n s??? nh???n ???????c ti???n ho??n l???i nhanh ch??ng h??n. Kho???ng th???i gian n??y bao g???m c??? th???i gian v???n chuy???n ????? ch??ng t??i nh???n l???i h??ng c???a b???n t??? ng?????i g???i h??ng
                                          (5 ?????n 10 ng??y l??m vi???c), th???i gian ch??ng t??i x??? l?? y??u c???u ho??n tr??? c???a b???n sau khi ch??ng t??i nh???n ???????c (3 ?????n 5 ng??y l??m vi???c) v?? th???i gian ng??n h??ng c???a b???n x??? l?? y??u c???u ho??n ti???n c???a ch??ng t??i (5 ?????n 10 ng??y l??m vi???c).
                                    </p>
                                    <p>
                                          N???u b???n c???n tr??? l???i m???t m???t h??ng, ch??? c???n ????ng nh???p v??o t??i kho???n c???a b???n, xem ????n ?????t h??ng b???ng li??n k???t 'Ho??n th??nh ????n ?????t h??ng' trong menu T??i kho???n c???a T??i v?? nh???p v??o n??t Tr??? l???i (c??c) M???t h??ng. Ch??ng t??i s??? th??ng b??o cho b???n qua e-mail v??? kho???n ti???n ho??n l???i c???a b???n sau khi ch??ng t??i 
                                          nh???n ???????c v?? x??? l?? tr??? l???i m???c.
                                    </p>
                                    <h4>??ang chuy???n h??ng</h4>
                                    <p>Ch??ng t??i c?? th??? g???i ?????n h???u nh?? b???t k??? ?????a ch??? n??o tr??n th??? gi???i. L??u ?? r???ng c?? nh???ng h???n ch??? ?????i v???i m???t s??? s???n ph???m v?? m???t s??? s???n ph???m kh??ng th??? ???????c v???n chuy???n ?????n c??c ??i???m ?????n qu???c t???.</p>
                                    <p>Khi b???n ?????t h??ng, ch??ng t??i s??? ?????c t??nh ng??y v???n chuy???n v?? giao h??ng cho b???n d???a tr??n s??? s???n c?? c???a c??c m???t h??ng c???a b???n v?? c??c t??y ch???n giao h??ng m?? b???n ch???n. T??y thu???c v??o nh?? cung c???p d???ch v??? v???n chuy???n b???n ch???n, ?????c t??nh ng??y giao h??ng c?? th??? xu???t hi???n tr??n b??o gi?? v???n chuy???n trang.</p>
                                    <p>C??ng xin l??u ?? r???ng ph?? v???n chuy???n cho nhi???u m???t h??ng ch??ng t??i b??n d???a tr??n tr???ng l?????ng. Tr???ng l?????ng c???a b???t k??? m???c n??o nh?? v???y c?? th??? ???????c t??m th???y tr??n trang chi ti???t c???a n??. ????? ph???n ??nh ch??nh s??ch c???a c??c c??ng ty v???n chuy???n m?? ch??ng t??i s??? d???ng, t???t c??? c??c tr???ng l?????ng s??? ???????c l??m tr??n th??nh pound ti???p theo.</p>
                              </div>
                        </div>
                        <div id="Reviews" class="tab-pane">
                              <div class="tab-product-review">
                                    <div class="spr-container">
                                          <div class="spr-header">
                                                <h2 class="spr-header-title">
                                                Ph???n h???i kh??ch h??ng
                                                </h2>
                                                <span class="spr-rating">
                                                      <i class="fa-solid fa-star" id="star1"></i>
                                                      <i class="fa-solid fa-star" id="star2"></i>
                                                      <i class="fa-solid fa-star" id="star3"></i>
                                                      <i class="fa-solid fa-star" id="star4"></i>
                                                      <i class="fa-solid fa-star" id="star5"></i>
                                                </span>
                                                <span class="spr-review-count">
                                                D???a tr??n 4 nh???n x??t
                                                </span>
                                                <span class="spr-action">
                                                      <a id="toggle">Vi???t nh???n x??t</a>
                                                </span>
                                          </div>
                                          <div class="spr-content">
                                                <div id="spr-form" class="spr-form">
                                                      <form action="" method="post">
                                                            <input type="hidden" name="">
                                                            <input type="hidden" name="">
                                                            <h3 class="spr-form-title">Write a review</h3>
                                                            <fieldset class="spr-form-contact">
                                                                  <div class="spr-form-contact-name">
                                                                        <label class="spr-form-label" for="">Name</label>
                                                                        <input class="spr-form-input spr-form-input-text " type="text" value placeholder="Enter your name">
                                                                  </div>
                                                                  <div class="spr-form-contact-email">
                                                                        <label class="spr-form-label" for="">Email</label>
                                                                        <input class="spr-form-input spr-form-input-email " type="email" value placeholder="john.smith@example.com">
                                                                  </div>
                                                            </fieldset>
                                                            <fieldset class="spr-form-review">
                                                                  <div class="spr-form-review-rating">
                                                                        <label class="spr-form-label" for="">Rating</label>
                                                                        <div class="spr-form-input spr-starrating ">
                                                                              <a href="#!"><i class="fa-solid fa-star"></i></a>
                                                                              <a href="#!"><i class="fa-solid fa-star"></i></a>
                                                                              <a href="#!"><i class="fa-solid fa-star"></i></a>
                                                                              <a href="#!"><i class="fa-solid fa-star"></i></a>
                                                                              <a href="#!"><i class="fa-solid fa-star"></i></a>
                                                                        </div>
                                                                  </div>
                                                                  <div class="spr-form-review-title">
                                                                        <label class="spr-form-label" for="">Review Title</label>
                                                                        <input class="spr-form-input spr-form-input-text " type="text" placeholder="Give your review a title">
                                                                  </div>
                                                                  <div class="spr-form-review-body">
                                                                        <label class="spr-form-label" for="">Body of Review
                                                                              <span>
                                                                                    <span>(1500)</span>
                                                                                    <span></span>
                                                                              </span>
                                                                        </label>
                                                                        <div class="spr-form-input">
                                                                              <textarea class="spr-form-input spr-form-input-textarea " name="" id="" rows="10" placeholder="Write your comments here"></textarea>
                                                                        </div>
                                                                  </div>
                                                            </fieldset>
                                                            <fieldset class="spr-form-actions"></fieldset>
                                                      </form>

                                                </div>
                                                <div class="spr-reviews">
                                                      <div class="spr-review">
                                                            <div class="spr-review-header">
                                                                  <span class="spr-review-header-star">
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                        <i class="fa-solid fa-star"></i>
                                                                  </span>
                                                                  <h3 class="spr-review-header-title">nice</h3>
                                                                  <span class="spr-review-header-byline">
                                                                        <strong>Munir Hossain</strong>
                                                                        on
                                                                        <strong>Oct 07, 2020</strong>
                                                                  </span>
                                                            </div>
                                                            <div class="spr-review-content">
                                                                  <p class="spr-review-content-body">
                                                                        Hi???p l?? ????? con ch?? =)))
                                                                  </p>
                                                            </div>
                                                            <div class="spr-review-footer">
                                                                  <a href="#" class="spr-review-reportreview">Report as Inappropriate</a>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</main>
<script>
      // WRITE A REVIEW 
      $(document).ready(function(){
            $("#toggle").click(function(){
                  $("#spr-form").fadeToggle();
            })
      });
      // STAR RATING 
      $(document).ready(function(){
            $("#star1").click(function(){
                  $(".fa-star").css("color", "black");
                  $("#star1").css("color", "orange");
            });
            $("#star2").click(function(){
                  $(".fa-star").css("color", "black");
                  $("#star1,#star2").css("color", "orange");
            });
            $("#star3").click(function(){
                  $(".fa-star").css("color", "black");
                  $("#star1,#star2,#star3").css("color", "orange");
            });
            $("#star4").click(function(){
                  $(".fa-star").css("color", "black");
                  $("#star1,#star2,#star3,#star4").css("color", "orange");
            });
            $("#star5").click(function(){
                  $(".fa-star").css("color", "black");
                  $("#star1,#star2,#star3,#star4,#star5").css("color", "orange");
            });
      });
</script>