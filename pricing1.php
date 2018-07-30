<?php
error_reporting(E_ERROR);
session_start();
include("config.php");
include("external_links.php");
?>
<?php include "layouts/partials/header.php"; ?>
<link rel="stylesheet" href="/css/pricing.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
<div class="main">
    <section class="hero">
        <div class="jumbotron jumbotron-fluid pt-0 pb-0 mb-0 text-center">
            <img src="/images/online_shopping.jpg" class="img-fluid">
        </div>
    </section>

    <section>
        <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

        <section class="pricing py-5">
            <div class="container">
                <h1 class="h4 text-center text-white d-sm-none py-4">
                    PRICING COMING AUGUST 2018
                </h1>
                <h1 class="display-4 text-center text-white d-none d-sm-block py-4">
                    PRICING COMING AUGUST 2018
                </h1>
                <div class="row">
                    <!-- Free Tier -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Special Parcel</h5>
                                <h6 class="card-price text-center">$0
                                    <span class="period">/month</span>
                                </h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>Your USA Address
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>ShopitUS Shipping Savings
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>Real Time Shippment Tracking
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>30 Days Free Package Storage
                                    </li>
                                    <li class="text-muted">
                                        <span class="fa-li">
                                            <i class="fas fa-times"></i>
                                        </span>Package Consolidation
                                    </li>
                                    <li class="text-muted">
                                        <span class="fa-li">
                                            <i class="fas fa-times"></i>
                                        </span>Multiple Package Discounts
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>$20.00 Per Additional Name Yearly
                                    </li>
                                    <li class="text-muted">
                                        <span class="fa-li">
                                            <i class="fas fa-times"></i>
                                        </span>Personal shopping
                                    </li>
                                    <li class="text-muted">
                                        <span class="fa-li">
                                            <i class="fas fa-times"></i>
                                        </span>Receive Mail
                                    </li>
                                    <li class="text-muted">
                                        <span class="fa-li">
                                            <i class="fas fa-times"></i>
                                        </span>Package Repack
                                    </li>
                                </ul>
                                <a href="/members/edit_account.php" class="btn btn-block btn-primary text-uppercase">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Plus Tier -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Gold Free</h5>
                                <h6 class="card-price text-center">$6.95
                                    <span class="period">/month</span>
                                </h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>Your USA Address
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>ShopitUS Shipping Savings
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>Real Time Shippment Tracking
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>60 Days Free Package Storage
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>Package Consolidation
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>Multiple Package Discounts
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>$20.00 Per Additional Name Yearly
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>Personal shopping
                                    </li>
                                    <li class="text-muted">
                                        <span class="fa-li">
                                            <i class="fas fa-times"></i>
                                        </span>Receive Mail
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>Package Repack
                                    </li>
                                </ul>
                                <a href="/members/edit_account.php" class="btn btn-block btn-primary text-uppercase">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pro Tier -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Your Mail</h5>
                                <h6 class="card-price text-center">$15
                                    <span class="period">/month</span>
                                </h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>Your USA Address
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>ShopitUS Shipping Savings
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>Real Time Shippment Tracking
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>60 Days Free Package Storage
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>Package Consolidation
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>Multiple Package Discounts
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>$20.00 Per Additional Name Yearly
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>Personal shopping
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>Receive Mail
                                    </li>
                                    <li>
                                        <span class="fa-li">
                                            <i class="fas fa-check"></i>
                                        </span>Package Repack
                                    </li>
                                </ul>
                                <a href="/members/edit_account.php" class="btn btn-block btn-primary text-uppercase">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>

    <section class="py-5">
        <div class="extra-services">
            <h3 class="mb-4 pb-4">You can also use any of these popular optional services:</h3>
            <?php $exreaServices = require ROOT_PATH."/layouts/data/extra_services.php" ?>
            <?php foreach($exreaServices as $extraService): ?>
            <div class="row mt-4 pt-4">
                <div class="col-md-3 text-center"><img src="<?= $extraService['img'] ?>" border="0" class="img-fluid" alt="Assisted Purchase"></div>
                <div class="col-md-9">
                    <h3 class="semi"><?= $extraService['name'] ?>
                    <?php if($extraService['price']): ?>
                        - <span class="servicePrice text-primary"><?= $extraService['price'] ?></span> 
                        <!-- change color of price above -->
                    <?php endif; ?>
                    </h3>
                    <p class="subtitle"><?= $extraService['description'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </section>



</div>

<?php include "layouts/partials/footer.php"; ?>
