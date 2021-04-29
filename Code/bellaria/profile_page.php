<?php include 'include/header.php' ?>
<?php
 if (!isset($_SESSION['isLogin'])) {
    header("location:index.php");} ?>
<?php {
    //Update Data 
    if (isset($_POST['user_id'])) {
        $user_name            = $_POST['user_name'];
        $user_email           = $_POST['user_email'];
        $user_password        = $_POST['user_password'];
        $query = "UPDATE users SET    fullname      = '$user_name',
                                         email         = '$user_email',
                                         password      = '$user_password'
                                         WHERE user_id = {$_POST['user_id']}";

        if (!mysqli_query($conn, $query)) {
            echo "Error: " . $query . "
                " . mysqli_error($conn);
        }
    }
}

?>
<!-- Call to Action -->
<section class="call-to-action">
    <div class="shape_wrapper shape_one">
        <div class="shape_inner shape_two" style="background-image: url(images/Slider/7.jpg);">
            <div class="overlay"></div>
        </div>
    </div>
    <br><br><br><br>
    <div class="auto-container">
        <div class="content-box">

            <h1>Profile Page</h1>
            <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6"
                data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed"
                data-boxed-layout="full">

                <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6"
                    data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed"
                    data-boxed-layout="full">

                    <div class="page-wrapper" style="display: block;">
                        <div>
                            <?php if (isset($_SESSION['use']['fullname'])) { ?>
                            <div class="align-self-center">
                                <h3 class="page-title text-truncate text-dark font-weight-medium">Hello
                                    <?php echo $_SESSION['use']['fullname'] ?></h3>
                            </div>
                            <?php }
                            if (isset($_SESSION['isLogin'])) { ?>

                            <div class="align-self-center">
                                <form method='post' action='' style="width: 25vw;margin: 2rem auto;">
                                    <?php
                                        $sql = "SELECT * FROM users WHERE user_id = {$_SESSION['use']['user_id']}";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "
                                    <div class='form-group'>
                                   <input type='text' class='form-control' id='user_name' name='user_name' value={$row['fullname']} placeholder='User Name'/><br>                                     
                                        <input type='hidden' id='user_id' name='user_id' value={$row['user_id']}>
                                        <input type='text' class='form-control' id='user_email' name='user_email' value={$row['email']}
                                        placeholder='Email'><br>
                                            
                                            
                                        <input type='password' name='user_password' id='user_password' class='form-control' id='nametext' 
                                        placeholder='Password'><br>                                 

                                    </div>
                                    <input type='submit' name='save_change_PF' value='Save' class='btn btn-success'/>
                                              ";
                                        }
                                        ?>
                                </form>
                            </div>
                            <?php  } ?>
                        </div>
                    </div>
                    <div class="page-wrapper" style="display: block;">
                        <div class="container-fluid">

                            <div class="container">
                                <!-- Admins -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Orders</h4>

                                                <div class="table-responsive">
                                                    <table id="multi_col_order"
                                                        class="table table-striped table-bordered display no-wrap"
                                                        style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>#id</th>
                                                                <th>product Name</th>
                                                                <th>description</th>
                                                                <th>Price</th>
                                                                <th>Offer</th>
                                                                <th>Store</th>
                                                                <th>Category</th>
                                                                <!-- <th>Edit</th> -->
                                                                <th>Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php $query = "SELECT * FROM products,store,category,order_details,orders
                                           WHERE
                                           products.store_id = store.store_id AND order_details.pro_id = products.pro_id AND category.cat_id = products.cat_id ";

                                                            $result = mysqli_query($conn, $query);

                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                echo "<tr> <form action='' method='POST'> ";
                                                                echo "<td>{$row['pro_id']}</td>";

                                                                echo "<td>{$row['pro_name']}</td>";

                                                                echo "<td>{$row['pro_desc']}</td>";

                                                                echo "<td>{$row['pro_price']}</td>";

                                                                echo "<td>{$row['offer']}</td>";

                                                                // echo "<td>{$row['store_name']}</td>";

                                                                echo "<td>{$row['cat_name']}</td>";


                                                                echo "<td><a href='profile_page.php?id={$row['order_id']}' class='btn btn-danger'>Delete</a></td>";

                                                                echo "</form></tr>";
                                                            }

                                                            ?>
                                                        </tbody>
                                                    </table>
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
        </div>
</section>
<!--End Call to Action -->

<?php include 'include/footer.php' ?>