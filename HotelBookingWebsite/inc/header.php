<nav class="navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">D' Bu Di Beach Resort  Website</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">ห้องพัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">สิ่งอำนวยความสะดวก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">ติดต่อเรา</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="about.php">เกี่ยวกับ</a>
        </li>
        
      </ul>
      <div class="d-flex" role="search">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModel">เข้าสู่ระบบ	</button>
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModel">ลงทะเบียน	</button>
      </div>
    </div>
  </div>
</nav>

<div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form>
    		<div class="modal-header">
        	<h5 class="modal-title d-flex align-items-center">
        	<i class="bi bi-person-circle fs-3 me-2">เข้าสู่ระบบผู้ใช้</i>
        	</h5>
        	<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
        	<div class="mb-3">
    			<label class="form-label">ที่อยู่อีเมล</label>
    			<input type="email" class="form-control shadow-none">
  			  </div>
  			<div class="mb-4">
    			<label class="form-label">รหัสผ่าน</label>
    			<input type="password" class="form-control shadow-none">
  			</div>
  			<div class="d-flex align-items-center justify-content-between mb-2">
  				<button type="submit" class="btn btn-dark shadow-none">เข้าสู่ระบบ</button>
  				<a href="JavaScript: void(0)" class="text-secondary text-decoration-none" >ลืมรหัสผ่าน</a>
  			</div>
      		</div>
      		<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        	<button type="button" class="btn btn-primary">เข้าใจแล้ว</button>
      		</div>
    	</form>
      
    </div>
  </div>
</div>

<div class="modal fade" id="registerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	
    	<form>
    		<div class="modal-header">
        	<h5 class="modal-title d-flex align-items-center">
        	<i class="bi bi-person-lines-fill fs-3 me-2">การลงทะเบียนผู้ใช้</i>
        	</h5>
        	<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
      			<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: Your details must match with your ID (Aadhaar card, passport, driving license, etc.) that will be required during check-in.
    			</span>
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">ชื่อ</label>
    					<input type="text" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 p-0">
    					<label class="form-label">อีเมล์</label>
    					<input type="email" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">หมายเลขโทรศัพท์</label>
    					<input type="number" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 p-0">
    					<label class="form-label">รูปภาพ</label>
    					<input type="file" class="form-control shadow-none">
    				</div>
    				<div class="col-md-12 p-0">
    					<label class="form-label">ที่อยู่</label>
    					<textarea class="form-control shadow-none" rows="1"></textarea>
    				</div>
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">รหัสพิน</label>
    					<input type="number" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 p-0">
    					<label class="form-label">วันเกิด</label>
    					<input type="number" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">รหัสผ่าน</label>
    					<input type="passport" class="form-control shadow-none">
    				</div>
    				<div class="col-md-6 p-0">
    					<label class="form-label">ยืนยันรหัสผ่าน</label>
    					<input type="passport" class="form-control shadow-none">
    				</div>
    				<div class="text-center my-1">
    					<button type="submit" class="btn btn-dark shadow-none">ลงทะเบียน</button>
    				</div>
    			</div>
    		</div>	
        	
    	</form>
      
    </div>
  </div>
</div>
	
</div>