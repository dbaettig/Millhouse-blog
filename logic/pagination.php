    <?php
    $total_pages = ceil($total_records / $limit);  
    $page_links = '<nav aria-label="Page navigation example"><ul class="pagination">';
    if(isset($_GET['page']) && $_GET['page'] > 1) {
        $page_links .= "<li class='page-item'><a class='page-link' href='?page=".($_GET['page'] - 1)."' aria-label='Previous'><span aria-hidden='true' class='glyphicon glyphicon-chevron-left'><span class='sr-only'>Previous</span></a></li>";
    }
    if(empty($_GET['page'])) {
        for ($i=1; $i<=$total_pages; $i++) {  
             if(1 == $i) {
                $page_links .= "<li class='active'><a class='page-link' href='?page=".$i."'>$i</a></li>"; 
             }
            else {
                $page_links .= "<li class='page-item'><a class='page-link' href='?page=".$i."'>$i</a></li>"; 
             }
        };   
        if($total_pages > 1) {
            $page_links .= "<li class='page-item'><a class='page-link' href='?page=2' aria-label='Next'><span aria-hidden='true' class='glyphicon glyphicon-chevron-right'><span class='sr-only'>Next</span></a></li>";
        }
        echo $page_links . "</ul></nav>"; 
    }
    if(isset($_GET['page'])) {
        for ($i=1; $i<=$total_pages; $i++) {  
            if($_GET['page'] == $i) {
                $page_links .= "<li class='active'><a class='page-link' href='?page=".$i."'>$i</a></li>"; 
             }
            else {
                $page_links .= "<li class='page-item'><a class='page-link' href='?page=".$i."'>$i</a></li>"; 
             }
        }
        if($_GET['page'] < $total_pages) {
            $page_links .= "<li><a class='page-link' href='?page=".($_GET['page'] + 1)."' aria-label='Next'><span aria-hidden='true' class='glyphicon glyphicon-chevron-right'></span><span class='sr-only'>Next</span></a></li>";

        }
        echo $page_links . "</ul></nav>";  
    }
?>