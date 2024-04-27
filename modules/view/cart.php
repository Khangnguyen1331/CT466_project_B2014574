<link rel="stylesheet" href="bootstrap.bundle.min.js / bootstrap.bundle.js">
    <link rel="shortcut icon" href="./icons8-birthday-cake-50.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>HJK Cake</title>
    
    


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách truyện yêu thích</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Optional: Custom styles */
        .book-container {
            padding: 20px;
        }
        .book-card {
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .book-card img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center my-4">Thêm vào yêu thích</h2>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="book-card">
                    <img src="https://inkythuatso.com/uploads/thumbnails/800/2022/05/hinh-anh-cap-doi-yeu-nhau-anime-3-12-15-37-08.jpg" class="card-img-top" alt="Book 1">
                    <div class="card-body">
                        <h5 class="card-title">Gặp em đêm mùa đông</h5>
                        <p class="card-text">Truyện Lãng mạn</p>
                        <a href="#" class="btn btn-primary">Thêm</a>
                    </div>
                </div>
           
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<script>
    $(document).ready(function() {
        // Tăng / Giảm Số lượng sản phẩm
        $(".plus-btn").click(function() {
            $(this).prevAll(".quantity-input").val(+$(this).prevAll(".quantity-input").val() + 1).change();
        });
        $(".minus-btn").click(function() {
            if ($(this).nextAll(".quantity-input").val() > 1)
                $(this).nextAll(".quantity-input").val(+$(this).nextAll(".quantity-input").val() - 1).change();
        });
    });
</script>
