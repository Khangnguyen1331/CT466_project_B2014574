<link rel="stylesheet" href="bootstrap.bundle.min.js / bootstrap.bundle.js">
<link rel="shortcut icon" href="./icons8-birthday-cake-50.png">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>HJK Cake</title>


<h1 class="detail" style ="margin-left: 8%; margin-top: 0.5%; text-align:center " text-center>Chi tiết Truyện</h1>


<div class="container py-5" style="margin-left:27%">

    <?php

    $Id = $_GET['id'];
    $kq = getone_product($Id);
    foreach ($kq as $kq) {
        echo '
        <div class="row">
        <div class="col-lg-4 col-md-8 col-sm-12">
            <img src="' . $kq['Thumbnail'] . '" class="img-fluid">
        </div>
        
        <div class=" content col-lg-4 col-md-8 col-sm-12 pl-lg-5">

            <h3 class="mb-3"> ' . $kq['Title'] . ' </h3>
            
            
            
            
            <p class="mb-5">' . $kq['Content'] . '</p>

           
            </div>
           
           
            
          
        </div>

    </div>
</div>';
    }
    ?>


    <script>
        $(document).ready(function() {
            // Tăng/Giảm Số lượng sản phẩm
            $(".plus-btn").click(function() {
                $(this).prevAll(".quantity-input").val(+$(this).prevAll(".quantity-input").val() + 1).change();
            });
            $(".minus-btn").click(function() {
                if ($(this).nextAll(".quantity-input").val() > 1)
                    $(this).nextAll(".quantity-input").val(+$(this).nextAll(".quantity-input").val() - 1).change();
            });
        });
    </script>

<div class="container" style="margin-top:50px;">
  <h2>Bình luận</h2>
  <form>
    
    <div class="form-group">
      
      <textarea class="form-control" rows="5" id="comment" placeholder="Nhập bình luận của bạn" name="comment"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Gửi </button>
  </form>
</div>


    <!-- if(isset($_GET['Id'])){
    $Id = $_GET['Id'];
}
$item = getone_product($Id);
$item[0]['Name'] -->