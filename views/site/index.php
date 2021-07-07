<?php

/* @var $this yii\web\View */

$this->title = Yii::$app -> name;
?>
<div class="site-index">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img src="/img/hero-bg.jpg" alt="...">
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="/img/departments-2.jpg" alt="...">
        <div class="caption">
            <h3>Thumbnail label</h3>
            <p>...</p>
            
        </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="/img/departments-1.jpg" alt="...">
        <div class="caption">
            <h3>Thumbnail label</h3>
            <p>...</p>
            
        </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="/img/departments-3.jpg" alt="...">
        <div class="caption">
            <h3>Thumbnail label</h3>
            <p>...</p>
            
        </div>
        </div>
    </div>
    <div class="col-md-4">
              <article class="card mb-4">
                <header class="card-header">
                  <div class="card-meta">
                    
                  </div>
                  <a href="post-image.html">
                    <h4 class="card-title">How can we, how can we sing about ourselves?</h4>
                  </a>
                </header>
                <a href="post-image.html">
                  <img class="card-img" src="/img/departments-1.jpg" alt="">
                </a>
                <div class="card-body">
                  <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                </div>
              </article><!-- /.card -->

              <article class="card mb-4">
                <header class="card-header">
                  <div class="card-meta">
                    <a href="#"><time class="timeago" datetime="2019-10-15 20:00" timeago-id="4">1 year ago</time></a> in <a href="page-category.html">Lifestyle</a>
                  </div>
                  <a href="post-image.html">
                    <h4 class="card-title">The king is made of paper</h4>
                  </a>
                </header>
                <a href="post-image.html">
                  <img class="card-img" src="img/articles/20.jpg" alt="">
                </a>
                <div class="card-body">
                  <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                </div>
              </article><!-- /.card -->
            </div>
</div>
