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
                                <p id="breadcrumbs"><span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Trang Chủ</a> \ <span rel="v:child" typeof="v:Breadcrumb"><span rel="v:child" typeof="v:Breadcrumb"><a href="" rel="v:url" property="v:title">{{ $locationTitle }}</a></span></span>
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
                    <div class="post">
                        <div class="title">
                            <h1>
                                <i class="fa fa-file-text-o"></i> {{ $post->title }}
                            </h1>
                        </div>

                        <?php echo html_entity_decode($post->content) ?>
                    </div>
                </div>
                @include('partials.sidebar')
            </div>
        </div>
    </div>
</div>
@include('partials.footer')
@include('partials.endhead')