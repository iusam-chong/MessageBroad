<div class="container">

    <form id="goPost" method="post" action=""></form>
    <div id="postList">
        {{include file="blade/printpost.tpl"}}
    </div>


    <div class="row">
    <div class="col-lg-8 col-lg-offset-2 text-center">
    <nav aria-label="Page navigation">
      <ul class="pagination" id="pagination">
      {{* ajax create <li> here *}}
      </ul>
    </nav>
    </div>
    </div>

</div><!-- /.container -->

<script src="./js/home.js" defer></script>