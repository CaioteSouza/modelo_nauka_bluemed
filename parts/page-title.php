<!--Start breadcrumb Style1-->
<section class="breadcrumb-style1">
    <div class="breadcrumb-style1-bg" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
        <div class="breadcrumb-style1-bg__overlay"></div>
    </div>
    <div class="container">
        <div class="inner-content">
            <div class="title">
                <h2><?php if (isset($page_title) && !empty($page_title)) {
                        echo $page_title;
                    } ?></h2>
            </div>
            <div class="breadcrumb-menu">
                <ul class="clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li><span class="icon-right-chevron"></span></li>
                    <li class="active"><?php if (isset($page_title) && !empty($page_title)) {
                                            echo $page_title;
                                        } ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb Style1-->