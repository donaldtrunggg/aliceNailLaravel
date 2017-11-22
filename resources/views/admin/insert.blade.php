@extends('partials.head')

<header>
    @include('partials.header')
    @include('partials.admin-navigation')
</header>

<div class="container" style="padding: 20px 0px">
    <form class="form-signin" method="POST" <?php !empty($post) ? print "action=\"/updatePostAction/$post->id\"" : print "action=\"insertPostAction\"" ?>>
        {{ csrf_field() }}

        <input type="text" id="title" name="title" class="form-control" placeholder="Tên bài viết" <?php if(!empty($post->title)) echo "value= '" . $post->title . "'" ?> required autofocus>
        <input type="text" id="url" name="url" class="form-control" placeholder="Đường dẫn URL (ex: cham-soc-da)" <?php if(!empty($post->url)) echo "value= '" . $post->url . "'" ?>
               required>

        Category:

        <select name="category" style="margin-bottom: 10px">
            <option value="1" <?php if(!empty($post->category->id) && $post->category->id == 1) echo "selected" ?>>Cham soc da</option>
            <option value="2" <?php if(!empty($post->category->id) && $post->category->id == 2) echo "selected" ?>>Cham soc da mat</option>
            <option value="3" <?php if(!empty($post->category->id) && $post->category->id == 3) echo "selected" ?>>Cham soc toan than</option>
            <option value="4" <?php if(!empty($post->category->id) && $post->category->id == 4) echo "selected" ?>>Tin tuc</option>
        </select>

        <textarea class="form-control" id="summary-ckeditor" name="ckeditor"><?php if(!empty($post->content)) echo $post->content ?></textarea>
        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"><?php !empty($post) ? print "Lưu thay đổi" : print "Đăng bài" ?></button>
    </form><!-- /form -->
</div><!-- /container -->