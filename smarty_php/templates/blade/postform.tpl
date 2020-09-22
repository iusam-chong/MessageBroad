{{if $loginStatus}}
<div class="container">
    <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
    <div class="thumbnail">
    <div class="caption">
        <form method="post" action="" id="idPostForm">
            <div class="form-group">
                <label for="textarea">新增貼文</label>
                <textarea id="textarea" name="message" rows="3" class="form-control" style="resize:none;" required="required"></textarea>
            </div>
            <button class="btn btn-success" type="submit">發佈</button>
        </form>
    </div>
    </div>
    </div>
    </div>
</div>
{{/if}}