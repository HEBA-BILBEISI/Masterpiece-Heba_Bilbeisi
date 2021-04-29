<?php include 'include/header.php' ?>

<!--Page Title-->
<section class="page-title" style="background-image:url(images/product.jpg)">
    <div class="auto-container">
        <?php if (isset($_GET['id'])) {
            $sql  = "select store_name , store_id  from store where store_id= {$_GET['id']}";
            $cat = mysqli_fetch_assoc(mysqli_query($conn, $sql));
            if ($_GET['id'] == $cat['store_id']) {
                echo ' <h1 style="color: #5fcac7;"> Product ' . $cat['store_name'] . ' </h1>';
                echo '<ul class="page-breadcrumb">
            <li><a href="index.php">home</a></li>
             <li>Products =>' . $cat['store_name'] . '</li>
        </ul>';
            }
        } else {
            echo ' <h1 style="color: #FFFFFF;"> Products </h1>';
            echo '<ul class="page-breadcrumb">
            <li><a href="index.php">home</a></li>
            <li>Products</li>
        </ul>';
        }
        ?>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">
                <div class="our-shop">

                    <div class="row clearfix">

                        <!-- Shop Item -->
                        <?php
                        if (isset($_GET['id'])) {
                            $sql  = "select store_id from store where store_id= {$_GET['id']}";
                            $store = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                            $storeId = $store['store_id'];
                            if ($_GET['id'] == $storeId) {
                                $query  = "select * from products  where store_id= $storeId and offer > 0";
                                // $image_source = $row['pro_img'];
                                $result2 = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_assoc($result2)) {
                                    echo "<div class='shop-item col-lg-4 col-md-6 col-sm-12'>
                                                    <div class='inner-box'>
                                                        <div class='image-box'>
                                                            <div class='sale-tag'>sale!</div>
                                                            <figure class='image'><a href='shop-singleTest.php?product={$row['pro_id']}'>
                                                            <img src='images/catogary/{$row['pro_img']}' alt='' style='height: 17rem'></a></figure>
                                                            <div class='btn-box'><a href='shopping-cart.php'>Add to cart</a></div>
                                                        </div>
                                                        <div class='lower-content'>
                                                            <h4 class='name'><a href='shop-singleTest.php?product={$row['pro_id']}'>{$row['pro_name']}</a></h4>
                                                            
                                                            <div class='price'><del>{$row['pro_price']}JD</del> {$row['offer']}JD</div>
                                                        </div>
                                                    </div>
                                                </div>";
                                }
                                $query1  = "select * from products where store_id= $storeId and offer = 0";
                                $result1 = mysqli_query($conn, $query1);
                                while ($row2 = mysqli_fetch_assoc($result1)) {
                                    echo "<div class='shop-item col-lg-4 col-md-6 col-sm-12'>
                                                    <div class='inner-box'>
                                                        <div class='image-box'>
                                                            <figure class='image'><a href='shop-singleTest.php?product={$row2['pro_id']}'><img src='images/catogary/{$row2['pro_img']}' alt=''></a></figure>
                                                            <div class='btn-box'><a href='shopping-cart.php'>Add to cart</a></div>
                                                        </div>
                                                        <div class='lower-content'>
                                                            <h4 class='name'><a href='shop-singleTest.php?product={$row2['pro_id']}'>{$row2['pro_name']}</a></h4>
                                                          
                                                            <div class='price'> {$row2['pro_price']}JD</div>
                                                        </div>
                                                    </div>
                                                </div>";
                                }
                            }
                        } else {
                            $query  = "select * from products  where  offer > 0";
                            $result2 = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($result2)) {
                                echo "<div class='shop-item col-lg-4 col-md-6 col-sm-12'>
                                                    <div class='inner-box'>
                                                        <div class='image-box'>
                                                            <div class='sale-tag'>sale!</div>
                                                            <figure class='image'><a href='shop-singleTest.php?product={$row['pro_id']}'>
                                                            <img src='images/catogary/{$row['pro_img']}' alt=''  style='height: 17rem'></a></figure>
                                                            <div class='btn-box'><a href='shopping-cart.php'>Add to cart</a></div>
                                                        </div>
                                                        <div class='lower-content'>
                                                            <h4 class='name'><a href='shop-singleTest.php?product={$row['pro_id']}'>{$row['pro_name']}</a></h4>
                                                            <div class='rating'><span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star light'></span></div>
                                                            <div class='price'><del>{$row['pro_price']}JD</del> {$row['offer']}JD</div>
                                                        </div>
                                                    </div>
                                                </div>";
                            }
                            $query1  = "select * from products  where offer = 0";
                            $result1 = mysqli_query($conn, $query1);
                            while ($row2 = mysqli_fetch_assoc($result1)) {
                                echo "<div class='shop-item col-lg-4 col-md-6 col-sm-12'>
                                                    <div class='inner-box'>
                                                        <div class='image-box'>
                                                            <figure class='image'><a href='shop-singleTest.php?product={$row2['pro_id']}'><img src='images/catogary/{$row2['pro_img']}' alt=''  style='height: 17rem'></a></figure>
                                                            <div class='btn-box'><a href='shopping-cart.php'>Add to cart</a></div>
                                                        </div>
                                                        <div class='lower-content'>
                                                            <h4 class='name'><a href='shop-singleTest.php?product={$row2['pro_id']}'>{$row2['pro_name']}</a></h4>
                                                            <div class='rating'><span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star'></span><span class='fa fa-star light'></span></div>
                                                            <div class='price'> {$row2['pro_price']}JD</div>
                                                        </div>
                                                    </div>
                                                </div>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>



        </div>
        </aside>
    </div>
</div>
</div>
</div>
<!--End Sidebar Page Container-->
<?php include 'include/footer.php' ?>




<!-- Scroll To Top -->


<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/sticky_sidebar.min.js"></script>
<script src="js/script.js"></script>