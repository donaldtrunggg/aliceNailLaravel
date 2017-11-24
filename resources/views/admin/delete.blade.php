<input id="titleField" type="hidden" name="foo" value="<?php echo $post->title;?>" />
<input id="idField" type="hidden" name="foo" value="<?php echo $post->id;?>" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var title = document.getElementById("titleField").value;
        var id = document.getElementById("idField").value;

        if (confirm('Bạn muốn xoá bài viết ' + title + '?')) {
            window.location.href = '/deletePostAction/' + id;
        } else {
            window.location.href = '/chinh-sua-bai-viet/all';
        }
    });
</script>
