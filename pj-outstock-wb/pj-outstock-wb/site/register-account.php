<?php
session_start();
ob_start();
include '../Moduel/connectdb.php';
include '../Moduel/moduel_user.php';
?>
<?php include_once './header.php' ?>
<main class="content-main" role="main">
      <section class="banner-pages">
            <div class="banner-content">
                  <div class="banner-images">
                        <img src="./public/images/banner-pages.webp" alt="banner-pages">
                  </div>
                  <nav class="banner-navbar container">
                        <div class="banner-navbar__wrap">
                              <h1>Tạo tài khoản</h1>
                              <ol class="banner-list">
                                    <li class="banner-list-item">
                                          <a href="#">
                                                <span>Trang chủ</span>
                                          </a>
                                    </li>
                                    <li class="banner-list-item active">
                                          <span>Tạo tài khoản</span>
                                    </li>
                              </ol>
                        </div>
                  </nav>
            </div>
      </section>
      <section class="login-register">
            <div class="container">
                  <div class="account">
                        <div class="account-form">
                              <ul class="account-form-nav">
                                    <li class="tab-login-create" onclick="tabAccount(event, 'Login')">
                                          <a aria-expanded="true">Đăng nhập</a>
                                    </li>
                                    <li class="tab-login-create active" onclick="tabAccount(event, 'CreateAccount')">
                                          <a aria-expanded="true">Tạo tài khoản</a>
                                    </li>
                              </ul>
                              <div class="account-content">
                                    <div id="Login" class="tab-change active">
                                          <div class="account-login-form">
                                                <form method="POST" action="#" accept-charset="UTF-8">
                                                      <div class="account-form-content">
                                                            <div class="form-group">
                                                                  <input class="form-control" type="text" placeholder="Email">
                                                            </div>
                                                            <div class="form-group form-group--password">
                                                                  <input id="pswrd" type="password" class="form-control" placeholder="Mật khẩu" required>
                                                                  <a id="toggle-btn">Hiện</a>
                                                            </div>
                                                            <div class="form-button">
                                                                  <input type="submit" class="btn btn-form-login" value="ĐĂNG NHẬP">
                                                            </div>
                                                            <div class="forgot-password">
                                                                  <a href="#">Quên mật khẩu?</a>
                                                            </div>
                                                      </div>
                                                </form>
                                          </div>
                                    </div>
                                    <div id="CreateAccount" class="tab-change ">
                                          <div class="account-register-form">
                                                <form method="POST" action="#" accept-charset="UTF-8">
                                                      <div class="account-form-content">
                                                            <div class="row-flex-margin row-flex">
                                                                  <div class="c-6 col">
                                                                        <div class="form-group">
                                                                              <input type="text" class="form-control" placeholder="Họ" required>
                                                                        </div>
                                                                  </div>
                                                                  <div class="c-6 col">
                                                                        <div class="form-group">
                                                                              <input type="text" class="form-control" placeholder="Tên" required>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="form-group">
                                                                  <input type="text" class="form-control" placeholder="Email" required>
                                                            </div>
                                                            <div class="form-group form-group--password">
                                                                  <input id="pswrd-login" type="password" class="form-control" placeholder="Mật khẩu" required>
                                                                  <a id="toggle-btn-login">Hiện</a>
                                                            </div>
                                                            <div class="form-button">
                                                                  <input type="submit" class="btn btn-form-login" value="TẠO TÀI KHOẢN">
                                                            </div>
                                                            <div class="forgot-password">
                                                                  <a href="#">Quên mật khẩu?</a>
                                                            </div>
                                                      </div>
                                                </form>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </section>
</main>
<?php include_once './footer.php' ?>