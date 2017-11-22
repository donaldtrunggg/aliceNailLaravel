@extends('partials.head')

<header>
    @include('partials.header')
    @include('partials.admin-navigation')
</header>

<div id="aau-wrapper">
    <div class="single-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 content">
                    <div class="archive">
                        <?php foreach ($posts as $post): ?>
                        <div class="item-archive">
                            <div class="row">
                                <h3><a href={{ $post->url }}> {{ $post->title }}</a></h3>
                                    <span style="float: right; color: blue;">
                                        <a href="/chinh-sua-bai-viet/{{ $post->url }}" target="_blank">Sửa nội dung</a>
                                        <a style="margin-left: 20px">Xoá bài viết</a>
                                    </span>

                                <div class="detail col-md-12 col-sm-12 col-xs-12">
                                    <?php $post->des = substr($post->content,0,500) . "..."; ?>
                                    <p><?php echo html_entity_decode($post->des) ?></p> <a class="readmore" href="/bai-viet/{{ $post->url }}" target="_blank"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Xem thêm</a></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="text-center"></div>
                </div>
            </div>
        </div>
    </div>
</div>