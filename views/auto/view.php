<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <ul class="type category-products">
                        <?=  \app\components\MenuWidget::widget(['tpl' => 'menu']) ?>
                    </ul>

                    <div class="brands_products"><!--brands_products-->
                        <h2>Brands</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
                                <li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                                <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                                <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                <li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="/images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <?= Html::img("@web/images/autos/{$auto->img}", ['alt' => $auto->name])?>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <?= $auto->content ?>
                            </div>
                        </div>


                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <?php if ($auto->new): ?>
                                <?= Html::img("@web/images/product-details/new.jpg", ['alt' => 'Новинка', 'class' => 'newarrival'])?>
                            <?php endif; ?>
                            <?php if ($auto->sale): ?>
                                <?= Html::img("@web/images/product-details/sale.jpg", ['alt' => 'Распродажа', 'class' => 'newarrival'])?>
                            <?php endif; ?>
                            <h2><?= $auto->name ?></h2>
                            <p>Web ID: <?= $auto->id ?></p>
                            <img src="/images/product-details/rating.png" alt="" />
                            <span>
									<span>US $<?= $auto->price ?></span>
									<label>Кол-во дней:</label>
									<input type="text" value="1" id="qty">
									<a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $auto->id])?>" data-id="<?= $auto->id ?>" class="btn btn-fefault add-to-cart cart">
										<i class="fa fa-shopping-cart"></i>
										Add
									</a>
								</span>
                            <p><b>Availability:</b> In Rent</p>
                            <p><b>Condition:</b> New</p>
                            <p><b>Brand:</b><?= $auto->type->name ?></p>
<!--                            <a href=""><img src="/images/product-details/share.png" class="share img-responsive"  alt="" /></a>-->

                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->



                <!--recommended_items-->
                <div class="recommended_items">
                    <h2 class="title text-center">recommended items</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php $count = count($hits); $i = 0; foreach ($hits as $hit): ?>
                                <?php if ($i % 3 == 0): ?>
                            <div class="item <?php if($i == 0) echo 'active' ?>">
                                <?php endif; ?>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <?= Html::img("@web/images/autos/{$hit->img}", ['alt' => $hit->name])?>
                                                <h2>$<?= $hit->price?></h2>
                                                <p><a href="<?= \yii\helpers\Url::to(['auto/view', 'id' => $hit->id])?>">
                                                <?= $hit->name?></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; if ($i % 3 == 0 || $i == $count): ?>
                            </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>