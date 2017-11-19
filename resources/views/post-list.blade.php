@extends('partials.head')
<header>
    @include('partials.header')
    @include('partials.navigation')
</header>

<!-- <div class="slider hidden-xs"> <img src="/images/header/single-slider.jpg" width="100%" alt="đội ngũ bác sĩ"></div> -->
<div id="aau-wrapper">
    <div class="single-bar">
        <div class="container">
            <div class="row">
                <div class="bar col-md-12">
                    <div class="bg">
                        <div class="row">
                            <div class="col-md-9 col-sm-8 col-xs-12">
                                <p id="breadcrumbs"><span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Trang Chủ</a> \ <span rel="v:child" typeof="v:Breadcrumb"><span rel="v:child" typeof="v:Breadcrumb">{{ $category->name }}</span></span>
                                    </span>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 content">
                    <div class="archive">
                        <?php foreach ($posts as $post): ?>
                        <div class="item-archive">
                            <div class="row">
                                <?php $post->url = "/bai-viet/" . $post->url ?>
                                <h3><a href={{ $post->url }}> {{ $post->title }}</a></h3>

                                <div class="detail col-md-12 col-sm-12 col-xs-12">
                                    <?php $post->des = substr($post->content,0,500) . "..."; ?>
                                    <p>{!! $post->des !!}</p> <a class="readmore" href={{ $post->url }}><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Xem thêm</a></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="text-center"></div>
                </div>
                @include('partials.sidebar')
            </div>
        </div>
    </div>
</div>
@include('partials.footer')
@include('partials.endhead')