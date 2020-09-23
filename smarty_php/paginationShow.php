<?php  
    require_once('./includes/class-autoload.php');
    
    $broad = new Broad();
    $postCount = $broad->countBroad();
    
    $paginationValue = 5;

    $goPage = (isset($_GET['page'])) ? $_GET['page'] : 0;

    $showIndex = 1 ;
    for($i = 0 ; $i < $postCount ; $i+=$paginationValue) {
        if ((int)$goPage === $i)
            echo '<li class="pagi active" id="'.$i.'"><a href="#">'.$showIndex.' </a></li>';
        else
            echo '<li class="pagi" id="'.$i.'"><a href="#">'.$showIndex.' </a></li>';
        $showIndex++;
    }
    
    