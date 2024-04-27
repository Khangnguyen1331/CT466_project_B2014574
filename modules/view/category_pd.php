
<main>


    <div class="container">
        <div class="my-5 row justify-content-center">
            
        </div>
        <div class="row ">
            <?php 
            $Id = "";
            if(isset($_GET['Id'])){
                $Id = $_GET['Id'];
            }
            $result = getdm_product($Id);
            foreach ($result as $item) {
                echo '<div class="card col-3 my-3">

                    <div class="image">
                       
                            <img id="img-product" class="center-block" src="'.$item['Thumbnail'].'">
                           
                    </div>

                    <div class="card-body">
                        <h5 class="product name"  class="Title"><b>'.$item['Title'].'</b></h5>
                     
                        
                    </div>
                    <a href="./index.php?act=cart" class ="btn btn-primary">
                        Thêm vào yêu thích
                    </a>

                </div>';
            ?>
            <?php
            } ?>
        </div>
    </div>
</main>