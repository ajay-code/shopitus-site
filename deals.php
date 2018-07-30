<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShopItUs Deals</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.4/flexslider.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css">


</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="margin-top:8px">
                    <img src="images/title.jpg" width="200" height="50" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav" style="margin-top:25px">
                    <li>
                        <a href="howwework.php">HOW IT WORKS</a>
                    </li>
                    <li>
                        <a href="shipping_calculator.php">SHIPPING CALCULATOR</a>
                    </li>
                    <li>
                        <a href="newpricing.php">PRICING</a>
                    </li>
                    <li>
                        <a href="shopmy.php">SHOP</a>
                    </li>
                    <li>
                        <a href="frequently_asked_questions.php">F.A.Q.</a>
                    </li>
                    <li>
                        <a href="contact.php">CONTACT</a>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right" style="padding-top:10px;padding-bottom:10px;">
                    <button type="button" onclick="location.href='login.php'" class="btn btn-danger btn-round">Sign In</button>
                    <button type="button" onclick="location.href='register.php'" class="btn btn-danger btn-round">Sign Up</button>
                    <br>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="#" class="fa fa-pinterest"></a>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <img src="images/online_shopping.jpg" class="img-responsive">
    </div>
    <br>
    <?php
        $db_name ="shopitus_db";
        $dbusername = "root"; /** MySQL database username */
        //$dbpassword = "root"; /** MySQL database password */
        $dbpassword = "c0965779"; /** MySQL database password */
        $server = "localhost"; //** Probably don't need to change this */
        $conn = mysqli_connect($server, $dbusername, $dbpassword, $db_name);
        $query = 'select * from recommended_deals';
        $result = mysqli_query($conn, $query);

    ?>
    <main id="app" class="container">
        <div id="carousel" class="flexslider">
            <h4>Recommended deals</h4>
            <ul class="slides"> 
                <?php if (mysqli_num_rows($result) > 0):?>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <li>
                            <img class="img-responsive recommended-img" src="admin/storage/<?= $row['image'] ?>" alt="image">
                            <span class="certona-text"><?= $row['text'] ?></span>
                            <a href="<?= $row['link'] ?>" target="_blank">
                                <button class="pull-right btn btn-danger margin-top-5 btn-sm">Shop</button>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                    
                </template>
            </ul>
        </div>
        <div class="filter-wrapper">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="product-category">Product Category</label>
                    <select id="product-category" class="form-control" v-model="product_category">
                        <option value="">choose all</option>
                        <option v-for="(value, index) in product_categories" :value="index" v-text="value"></option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="deal-type">Deal Type</label>
                    <select id="deal-type" class="form-control" v-model="deal_type">
                        <option selected="selected" value="">choose all</option>
                        <option v-for="(value, index) in deal_types" :value="index" v-text="value"></option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="store">Store</label>
                    <select id="store" class="form-control" v-model="store">
                        <option selected="selected" value="">choose all</option>
                        <option v-for="(value, index) in stores" :value="index" v-text="value"></option>
                    </select>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <form @submit.prevent="loadPage">
                    <br>
                    <div class="input-group">
                        <input type="text" v-model="q" class="form-control" placeholder="Search">
                        <span class="input-group-addon">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </form>
            </div>
        </div>

        

        <div class="cupons">
            <template v-for="product in products">
                <div class="coupon-box">
                    <figure class="image-holder">
                        <img class="img-responsive product-img " v-if="product.image" :src="'admin/storage/' + product.image" alt="image">
                        <img class="img-responsive product-img" v-else :src="'admin/storage/' + product.store.image" alt="image">
                    </figure>
                    <div class="coupon-content">
                        <span class="date" v-text="product.created_at"></span>
                        <p v-text="product.text"></p>
                    </div>
                    <div class="coupon-action-buttons text-center">
                        <a class="btn btn-danger btn-lg" :href="product.link" target="_blank">SHOP</a>
                    </div>
                </div>
            </template>
        </div>
        <div v-if="loading" class="loader">
            <spinner message="Loading..." :font-size="18" :size="100"></spinner>
        </div>
        <div id="paging" class="text-center">
            <nav aria-label="Page navigation">
                <paginate v-if="pageInfo" :page-count="pageInfo.last_page" :click-handler="changePage" :prev-text="'Prev'" :next-text="'Next'"
                    :container-class="'pagination'">
                </paginate>
            </nav>
        </div>
    </main>

    <?php include_once('footer.php') ?>


    <div class="scripts">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.4/jquery.flexslider.min.js"></script>
        <script src="https://unpkg.com/vue@2.5.3/dist/vue.js"></script>
        <script src="https://unpkg.com/vuejs-paginate@latest"></script>
        <script src="https://unpkg.com/vue-simple-spinner@1.2.8/dist/vue-simple-spinner.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.1/axios.min.js"></script>
        <script src="/js/script.js"></script>
    </div>
</body>

</html>