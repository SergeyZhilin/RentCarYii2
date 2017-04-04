<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
?>

<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>A</span>-Level</h1>
                                <h2>Джипы</h2>
                                <p>Большие тачки, для реальных пацанов. </p>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>A</span>-Level</h1>
                                <h2>Гагарин на завидует</h2>
                                <p>Детка, ты просто космос. </p>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>A</span>-Level</h1>
                                <h2>Тачило</h2>
                                <p>Только у нас, тачки в огне! </p>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>

                    <ul class="type category-products">
                        <?=  \app\components\MenuWidget::widget(['tpl' => 'menu']) ?>
                    </ul>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <?php if (! empty($hits)) : ?>
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    <?php foreach ($hits as $hit) :?>
                        <?php $mainImg = $hit->getImage();?>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <?= Html::img($mainImg->getUrl(), ['alt' => $hit->name])?>
                                    <h2>$<?= $hit->price?></h2>
                                    <p><a href="<?= \yii\helpers\Url::to(['auto/view', 'id' => $hit->id])?>"><?= $hit->name?></a></p>
                                </div>
                                <?php if ($hit->new): ?>
                                    <?= Html::img("@web/images/home/new.png", ['alt' => 'Новинка', 'class' => 'new'])?>
                                <?php endif; ?>
                                <?php if ($hit->sale): ?>
                                    <?= Html::img("@web/images/home/sale.png", ['alt' => 'Распродажа', 'class' => 'new'])?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div><!--features_items-->
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>