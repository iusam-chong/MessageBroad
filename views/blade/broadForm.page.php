<?php if ($loginStatus) : ?>
<div class="container">
    <div class="row" style="padding-bottom: 20px;">
        <div class="col-lg-8 col-lg-offset-2">
        <div class="thumbnail">
            <div class="caption">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="textarea">新增留言</label>
                        <textarea id="textarea" name="message" rows="3" class="form-control" style="resize:none;" required="required"></textarea>
                    </div>
                    <button class="btn btn-success" type="submit" name="createPost" value="1">發佈</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
<?php endif ?>
