<?php
use yii\helpers\Html;
use yii\helpers\Url;



?>
<?php $this->beginBlock('header') ?>
    <link href="<?= Url::to('@web/static/admin/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= Url::to('@web/static/admin/css/materialdesignicons.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= Url::to('@web/static/admin/js/bootstrap-multitabs/multitabs.min.css') ?>">
    <link href="<?= Url::to('@web/static/admin/css/style.min.css') ?>" rel="stylesheet">
<?php $this->endBlock() ?>

<div class="lyear-layout-web">
    <div class="lyear-layout-container">
        <!--左侧导航-->
        <aside class="lyear-layout-sidebar">

            <!-- logo -->
            <div id="logo" class="sidebar-header">
                <a href="/"><img src="<?= Url::to('@web/static/admin/images/logo-sidebar.png') ?>" title="LightYear" alt="LightYear" /></a>
            </div>
            <div class="lyear-layout-sidebar-scroll">

                <nav class="sidebar-main">
                    <ul class="nav nav-drawer">
                        <li class="nav-item active"> <a class="multitabs" href="<?= Url::to(['default/welcome']) ?>"><i class="mdi mdi-home"></i> <span>后台首页</span></a> </li>
                        <li class="nav-item nav-item-has-subnav">
                            <a href="javascript:void(0)"><i class="mdi mdi-palette"></i> <span>内容管理</span></a>
                            <ul class="nav nav-subnav">
                                <li> <a class="multitabs" href="lyear_ui_buttons.html">栏目列表</a> </li>
                                <li> <a class="multitabs" href="lyear_ui_buttons.html">内容模型</a> </li>
                                <li> <a class="multitabs" href="lyear_ui_buttons.html">内容列表</a> </li>

                            </ul>
                        </li>
                        <li class="nav-item nav-item-has-subnav">
                            <a href="javascript:void(0)"><i class="mdi mdi-format-align-justify"></i> <span>商品管理</span></a>
                            <ul class="nav nav-subnav">
                                <li> <a class="multitabs" href="lyear_forms_elements.html">商品列表</a> </li>
                                <li> <a class="multitabs" href="lyear_forms_elements.html">商品分类</a> </li>
                                <li> <a class="multitabs" href="lyear_forms_elements.html">订单列表</a> </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-has-subnav">
                            <a href="javascript:void(0)"><i class="mdi mdi-file-outline"></i> <span>用户管理</span></a>
                            <ul class="nav nav-subnav">
                                <li> <a class="multitabs" href="lyear_pages_doc.html">用户列表</a> </li>
                                <li> <a class="multitabs" href="lyear_pages_doc.html">用户分组</a> </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-has-subnav">
                            <a href="javascript:void(0)"><i class="mdi mdi-language-javascript"></i> <span>其他管理</span></a>
                            <ul class="nav nav-subnav">
                                <li> <a class="multitabs" href="lyear_js_datepicker.html">广告管理</a> </li>
                                <li> <a class="multitabs" href="lyear_js_datepicker.html">超链管理</a> </li>
                                <li> <a class="multitabs" href="lyear_js_datepicker.html">留言管理</a> </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-has-subnav">
                            <a href="javascript:void(0)"><i class="mdi mdi-language-javascript"></i> <span>素材管理</span></a>
                            <ul class="nav nav-subnav">
                                <li> <a class="multitabs" href="lyear_js_datepicker.html">素材分类</a> </li>
                                <li> <a class="multitabs" href="lyear_js_datepicker.html">素材列表</a> </li>
                            </ul>
                        </li>

                        <li class="nav-item nav-item-has-subnav">
                            <a href="javascript:void(0)"><i class="mdi mdi-menu"></i> <span>站点管理</span></a>
                            <ul class="nav nav-subnav">
                                <li> <a href="#!">网站设置</a> </li>
                                <li> <a href="#!">网站设置</a> </li>
                                <li class="nav-item nav-item-has-subnav">
                                    <a href="#!">第三方设置</a>
                                    <ul class="nav nav-subnav">
                                        <li> <a href="#!">图片设置</a> </li>
                                        <li> <a href="#!">邮件设置</a> </li>
<!--                                        <li class="nav-item nav-item-has-subnav">-->
<!--                                            <a href="#!">二级菜单</a>-->
<!--                                            <ul class="nav nav-subnav">-->
<!--                                                <li> <a href="#!">三级菜单</a> </li>-->
<!--                                                <li> <a href="#!">三级菜单</a> </li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-has-subnav">
                                    <a href="#!">管理员设置</a>
                                    <ul class="nav nav-subnav">
                                        <li> <a href="#!">管理员分组</a> </li>
                                        <li> <a href="#!">管理员列表</a> </li>
                                        <li> <a href="#!">权限列表列表</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <div class="sidebar-footer">
                    <p class="copyright">Copyright &copy; 2019. <a target="_blank" href="http://lyear.itshubao.com">IT书包</a> All rights reserved.</p>
                </div>
            </div>

        </aside>
        <!--End 左侧导航-->

        <!--头部信息-->
        <header class="lyear-layout-header">

            <nav class="navbar navbar-default">
                <div class="topbar">

                    <div class="topbar-left">
                        <div class="lyear-aside-toggler">
                            <span class="lyear-toggler-bar"></span>
                            <span class="lyear-toggler-bar"></span>
                            <span class="lyear-toggler-bar"></span>
                        </div>
                    </div>

                    <ul class="topbar-right">
                        <li class="dropdown dropdown-profile">
                            <a href="javascript:void(0)" data-toggle="dropdown">
                                <img class="img-avatar img-avatar-48 m-r-10" src="<?= Url::to('@web/static/admin/images/users/avatar.jpg') ?>" alt="笔下光年" />
                                <span>笔下光年 <span class="caret"></span></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li> <a class="multitabs" data-url="lyear_pages_profile.html" href="javascript:void(0)"><i class="mdi mdi-account"></i> 个人信息</a> </li>
                                <li> <a class="multitabs" data-url="lyear_pages_edit_pwd.html" href="javascript:void(0)"><i class="mdi mdi-lock-outline"></i> 修改密码</a> </li>
                                <li> <a href="javascript:void(0)"><i class="mdi mdi-delete"></i> 清空缓存</a></li>
                                <li class="divider"></li>
                                <li> <a href="lyear_pages_login.html"><i class="mdi mdi-logout-variant"></i> 退出登录</a> </li>
                            </ul>
                        </li>
                        <!--切换主题配色-->
                        <li class="dropdown dropdown-skin">
                            <span data-toggle="dropdown" class="icon-palette"><i class="mdi mdi-palette"></i></span>
                            <ul class="dropdown-menu dropdown-menu-right" data-stopPropagation="true">
                                <li class="drop-title"><p>LOGO</p></li>
                                <li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="logo_bg" value="default" id="logo_bg_1" checked>
                    <label for="logo_bg_1"></label>
                  </span>
                                    <span>
                    <input type="radio" name="logo_bg" value="color_2" id="logo_bg_2">
                    <label for="logo_bg_2"></label>
                  </span>
                                    <span>
                    <input type="radio" name="logo_bg" value="color_3" id="logo_bg_3">
                    <label for="logo_bg_3"></label>
                  </span>
                                    <span>
                    <input type="radio" name="logo_bg" value="color_4" id="logo_bg_4">
                    <label for="logo_bg_4"></label>
                  </span>
                                    <span>
                    <input type="radio" name="logo_bg" value="color_5" id="logo_bg_5">
                    <label for="logo_bg_5"></label>
                  </span>
                                    <span>
                    <input type="radio" name="logo_bg" value="color_6" id="logo_bg_6">
                    <label for="logo_bg_6"></label>
                  </span>
                                    <span>
                    <input type="radio" name="logo_bg" value="color_7" id="logo_bg_7">
                    <label for="logo_bg_7"></label>
                  </span>
                                    <span>
                    <input type="radio" name="logo_bg" value="color_8" id="logo_bg_8">
                    <label for="logo_bg_8"></label>
                  </span>
                                </li>
                                <li class="drop-title"><p>头部</p></li>
                                <li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="header_bg" value="default" id="header_bg_1" checked>
                    <label for="header_bg_1"></label>
                  </span>
                                    <span>
                    <input type="radio" name="header_bg" value="color_2" id="header_bg_2">
                    <label for="header_bg_2"></label>
                  </span>
                                    <span>
                    <input type="radio" name="header_bg" value="color_3" id="header_bg_3">
                    <label for="header_bg_3"></label>
                  </span>
                                    <span>
                    <input type="radio" name="header_bg" value="color_4" id="header_bg_4">
                    <label for="header_bg_4"></label>
                  </span>
                                    <span>
                    <input type="radio" name="header_bg" value="color_5" id="header_bg_5">
                    <label for="header_bg_5"></label>
                  </span>
                                    <span>
                    <input type="radio" name="header_bg" value="color_6" id="header_bg_6">
                    <label for="header_bg_6"></label>
                  </span>
                                    <span>
                    <input type="radio" name="header_bg" value="color_7" id="header_bg_7">
                    <label for="header_bg_7"></label>
                  </span>
                                    <span>
                    <input type="radio" name="header_bg" value="color_8" id="header_bg_8">
                    <label for="header_bg_8"></label>
                  </span>
                                </li>
                                <li class="drop-title"><p>侧边栏</p></li>
                                <li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="sidebar_bg" value="default" id="sidebar_bg_1" checked>
                    <label for="sidebar_bg_1"></label>
                  </span>
                                    <span>
                    <input type="radio" name="sidebar_bg" value="color_2" id="sidebar_bg_2">
                    <label for="sidebar_bg_2"></label>
                  </span>
                                    <span>
                    <input type="radio" name="sidebar_bg" value="color_3" id="sidebar_bg_3">
                    <label for="sidebar_bg_3"></label>
                  </span>
                                    <span>
                    <input type="radio" name="sidebar_bg" value="color_4" id="sidebar_bg_4">
                    <label for="sidebar_bg_4"></label>
                  </span>
                                    <span>
                    <input type="radio" name="sidebar_bg" value="color_5" id="sidebar_bg_5">
                    <label for="sidebar_bg_5"></label>
                  </span>
                                    <span>
                    <input type="radio" name="sidebar_bg" value="color_6" id="sidebar_bg_6">
                    <label for="sidebar_bg_6"></label>
                  </span>
                                    <span>
                    <input type="radio" name="sidebar_bg" value="color_7" id="sidebar_bg_7">
                    <label for="sidebar_bg_7"></label>
                  </span>
                                    <span>
                    <input type="radio" name="sidebar_bg" value="color_8" id="sidebar_bg_8">
                    <label for="sidebar_bg_8"></label>
                  </span>
                                </li>
                            </ul>
                        </li>
                        <!--切换主题配色-->
                    </ul>

                </div>
            </nav>

        </header>
        <!--End 头部信息-->

        <!--页面主要内容-->
        <main class="lyear-layout-content">

            <div id="iframe-content"></div>

        </main>
        <!--End 页面主要内容-->
    </div>
</div>

<?php $this->beginBlock('footer') ?>
    <script type="text/javascript" src="<?= Url::to('@web/static/admin/js/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?= Url::to('@web/static/admin/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?= Url::to('@web/static/admin/js/perfect-scrollbar.min.js') ?>"></script>
    <script type="text/javascript" src="<?= Url::to('@web/static/admin/js/bootstrap-multitabs/multitabs.js') ?>"></script>
    <script type="text/javascript" src="<?= Url::to('@web/static/admin/js/index.min.js') ?>"></script>

<?php $this->endBlock() ?>