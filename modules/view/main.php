<?php

$result1 = get10_product();

?>
<main>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner container">
            <div class="carousel-item active">
                <img src="./public/images/langman.jpg" class="d-block w-100" style="height: 500px;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lãng Mạn</h5>

                </div>
            </div>
            <div class="carousel-item">
                <img src="./public/images/cotich.jpg" class="d-block w-100 " style="height: 500px;" alt=" ...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>cổ tích</h5>

                </div>
            </div>
            <div class="carousel-item">
                <img src="./public/images/hai.jpg" class="d-block w-100 " style="height: 500px" ; alt=" ...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>hai</h5>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class="my-5 row justify-content-center">
            <h2 style="text-align: center;">Các Truyện Hay Tiêu Biểu </h2>
        </div>
        <div class="row ">
            <?php foreach ($result1 as $item) {
            ?>
                <div class="card col-3 my-3">

                    <!-- href="detail.php?id=$item['id']" -->
                    <div class="image">
                    <a href="./index.php?act=detail&id=<?php echo $item['Id']?>">
                        <img id="img-product" class="center-block" src="<?php echo $item['Thumbnail'] ?>">
                     </a>
                       
                    </div>
                    <div class="card-body">
                        <h5 class="product name"  class="Title"><b><?php echo $item['Title'] ?></b></h5>
                        <p class="Giá Tại Cửa Hàng"><b><?php echo $item['Price'] ?>VND</b></p>
                        
                    </div>
                    <a href="./index.php?act=cart" class ="btn btn-primary">
                        Thêm vào yêu thích
                
                    </a>

                </div>
            <?php
            } ?>
        </div>
    </div>
</main>