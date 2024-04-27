<div id="wrapper">
		<div class="row justify-content-around">
			<form action="" class="col-md-4 bg-danger-subtle p-3 my-3">
				<h1 class="text-center text-uppercase h3 py-3">Đăng ký tài khoản</h1>
				<div class="form-group">
					<label for="fullname">Họ và tên</label>
					<input type="text" name="fullname" id="fullname" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="username">Tên đăng nhập</label>
					<input type="text" name="username" id="username" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Mật khẩu</label>
					<input type="password" name="password" id="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="address">Địa chỉ</label>
					<input type="text" name="address" id="address" class="form-control">
				</div>
				<div class="form-group">
					<label for="gender"></label>
					<div>
						<div class="form-check form-check-inline">
							<input type="radio" name="gender" id="" value="male" class="form-check-input">
							<label for="male" class="form-check-label">Nam</label>
						</div>
						<div class="form-check form-check-inline">
							<input type="radio" name="gender" id="" value="female" class="form-check-input">
							<label for="female" class="form-check-label">Nữ</label>
						</div>
					</div>
				</div>
				<div class="d-grid gap-2 col-6 mx-auto my-3">
					<button class="btn btn-outline-secondary" type="submit">Đăng ký</button>
				</div>
			</form>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
		crossorigin="anonymous"></script>