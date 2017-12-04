
<!-- Pagination -->
<div class="row text-center">
    <div class="col-lg-12">
        <ul class="pagination">
            <li>
                <a href="#">&laquo;</a>
            </li>
            <?php if (!isset($_GET['page'])){$_GET['page']=1;}
            $page=1;for ($page-1;$page<=$numero_paginas;$page++): ?>
              <li <?php if ($page==$_GET['page']) { echo "class=active";} ?>>
                  <a href=<?php echo $page_title;?>.php?page=<?php echo $page; ?>><?php echo $page ?></a>
              </li>
            <?php endfor; ?>
        </ul>
    </div>
</div>
<!-- /.row -->
