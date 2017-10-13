<link href="{{ asset('backend/css/menu.css') }}" rel="stylesheet" type="text/css" />
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="treeview ">
                <a href="#">
                    <span class="ico ico_system">&nbsp;</span> <span class="tit">Hệ Thống</span>
                    <span class="arr pull-right" style="display: block;"></span>
                </a>
                <ul class="treeview-menu">
                    <li class="">
                        <a href="http://conduongsang.info/admin.php/vn/config.html">
                            <span class="ico ico_config"></span> <span class="tit">Cấu hình</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="http://conduongsang.info/admin.php/vn/groups.html">
                            <span class="ico ico_group"></span> <span class="tit">Nhóm quyền</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="http://conduongsang.info/admin.php/vn/users.html">
                            <span class="ico ico_user"></span> <span class="tit">Tài khoản</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="http://conduongsang.info/admin.php/vn/register.html">
                    <span class="ico ico_user"></span> <span class="tit">Đăng ký</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="#">
                    <span class="ico ico_pages">&nbsp;</span> <span class="tit">Trang chủ</span>
                    <span class="arr pull-right" style="display: block;"></span>
                </a>
                <ul class="treeview-menu">
                    <li class="">
                        <a href="http://conduongsang.info/admin.php/vn/slider.html">
                            <span class="ico ico_menu_child"></span> <span class="tit">Slider</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="http://conduongsang.info/admin.php/vn/service.html">
                            <span class="ico ico_menu_child"></span> <span class="tit">Dịch vụ</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="http://conduongsang.info/admin.php/vn/utility.html">
                            <span class="ico ico_menu_child"></span> <span class="tit">Thông tin bổ ích</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="http://conduongsang.info/admin.php/vn/shares.html">
                            <span class="ico ico_menu_child"></span> <span class="tit">Tin tức</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="http://conduongsang.info/admin.php/vn/survey.html">
                            <span class="ico ico_menu_child"></span> <span class="tit">Khảo sát</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="http://conduongsang.info/admin.php/vn/partner.html">
                            <span class="ico ico_menu_child"></span> <span class="tit">Đối tác</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="http://conduongsang.info/admin.php/vn/introduce.html">
                    <span class="ico ico_menu_introduce"></span> <span class="tit">Giới thiệu</span>
                </a>
            </li>
            <li class="">
                <a href="http://conduongsang.info/admin.php/vn/auto.html">
                    <span class="ico ico_product"></span> <span class="tit">Regent bay &amp; Regent holidays</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="#">
                    <span class="ico ico_menu_news">&nbsp;</span> <span class="tit">Tin Tức</span>
                    <span class="arr pull-right" style="display: block;"></span>
                </a>
                <ul class="treeview-menu">
                    <li class="">
                        <a href="http://conduongsang.info/admin.php/vn/newscat.html">
                            <span class="ico ico_menu_child"></span> <span class="tit">Danh mục tin tức</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="http://conduongsang.info/admin.php/vn/news.html">
                            <span class="ico ico_menu_child"></span> <span class="tit">Nội dung tin tức</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="http://conduongsang.info/admin.php/vn/tour.html">
                    <span class="ico ico_pages_child"></span> <span class="tit">Tour &amp; Thư viện ảnh</span>
                </a>
            </li>
            <li class="">
                <a href="http://conduongsang.info/admin.php/vn/recruitment.html">
                    <span class="ico ico_menu_recruitment"></span> <span class="tit">Tuyển dụng</span>
                </a>
            </li>
            <li class="">
                <a href="http://conduongsang.info/admin.php/vn/faq.html">
                    <span class="ico ico_menu_owner"></span> <span class="tit">FAQ</span>
                </a>
            </li>
            <li class="">
                <a href="http://conduongsang.info/admin.php/vn/netsocial.html">
                    <span class="ico ico_customer"></span> <span class="tit">Mạng xã hội</span>
                </a>
            </li>
            <li class="">
                <a href="http://conduongsang.info/admin.php/vn/contact.html">
                    <span class="ico ico_menu_contact"></span> <span class="tit">Liên hệ</span>
                </a>
            </li>
            <li class="">
                <a href="http://conduongsang.info/admin.php/vn/popup.html">
                    <span class="ico ico_pages"></span> <span class="tit">Thông báo Popup</span>
                </a>
            </li>
            <li class="">
                <a href="http://conduongsang.info/admin.php/vn/album.html">
                    <span class="ico ico_pages_child"></span> <span class="tit">Album ảnh</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
<script type="text/javascript">
    function treesidebar(menu) {
        var _this = this;
        var animationSpeed = 300;
        $(document).on('click', menu + ' li a', function (e) {
            //Get the clicked link and the next element
            var $this = $(this);
            var checkElement = $this.next();
            //Check if the next element is a menu and is visible
            if ((checkElement.is('.treeview-menu')) && (checkElement.is(':visible')) && (!$('body').hasClass('sidebar-collapse'))) {
            //Close the menu
            checkElement.slideUp(animationSpeed, function () {
                checkElement.removeClass('menu-open');
                    //Fix the layout in case the sidebar stretches over the height of the window
                    //_this.layout.fix();
                });
            checkElement.parent("li").removeClass("active");
        }
            //If the menu is not visible
            else if ((checkElement.is('.treeview-menu')) && (!checkElement.is(':visible'))) {
                //Get the parent menu
                var parent = $this.parents('ul').first();
                //Close all open menus within the parent
                var ul = parent.find('ul:visible').slideUp(animationSpeed);
                //Remove the menu-open class from the parent
                ul.removeClass('menu-open');
                //Get the parent li
                var parent_li = $this.parent("li");
                //Open the target menu and add the menu-open class
                checkElement.slideDown(animationSpeed, function () {
                        //Add the class active to the parent li
                        checkElement.addClass('menu-open');
                        parent.find('li.active').removeClass('active');
                        parent_li.addClass('active');
                    //Fix the layout in case the sidebar stretches over the height of the window
                    //_this.layout.fix();
                });
            }
            //if this isn't a link, prevent the page from being redirected
            if (checkElement.is('.treeview-menu')) {
                e.preventDefault();
            }
        });
    }
    treesidebar(".sidebar");
</script>