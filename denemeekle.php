<?php
include ('config.php');
include ('system/inc/sitedata.php');

if (!isset($_SESSION['login'])){
echo " <meta http-equiv='refresh' content='1;URL=index.php'> ";
exit();
}

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<?php include ('system/inc/header.php'); ?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
              
                
                 
                    </div>
					
					
					
					
					
					
					  <div class="row">
						<div class="col-md-12">
						<div class="card">
						
						<div class="card-body">
						 
						<h4 class="text-danger"> DENEME EKLE </h4>
						
							
							<div class="row">
							<div class="col-md-12">
					<input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Öğrenci No Girerek Arayın">

							<table id="myTable" class="table table-hover">
                    <thead class="text-warning">
					  <th>Öğrenci No</th>
					  <th>Öğrenci Adı</th>
					  <th>Öğrenci Sınıfı</th>
					   <th>İşlem</th>
                    </thead>
                    <tbody>
                     <?php
											$query_r = mysqli_query($connect, "SELECT * FROM ogrenciler");
											if (mysqli_affected_rows($connect)){
												$i = 1;
												while ($fetch_r = mysqli_fetch_array($query_r)){
											
										?>
                                            <tr class="active">
											<td><?php echo $fetch_r['ogrencino']; ?></td>
                                                <td><?php echo $fetch_r['ogrenciadi']; ?></td>
												<td><?php echo $fetch_r['sinifi']; ?></td>
												<td>
												<span data-toggle="modal" data-target="#myModalEkle<?php echo $fetch_r['id']; ?>"  class="badge badge-success "><i class="fas fa-plus"></i></span>
											 <div id="myModalEkle<?php echo $fetch_r['id']; ?>" class="modal fade" role="dialog">
											  <div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
												  <div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
												  </div>
												  <div class="modal-body">
													<font class="text-danger"><?php echo $fetch_r['ogrenciadi']; ?></font>
													<br>
													<form action="system/ajax/denemeekle.php?ogrenci=<?php echo $fetch_r['id']; ?>" method="POST">
													<label>Deneme No : </label>
													<input name="denemeno" class="form-control">
													<label>Türkçe Net : </label>
													<input name="turkce" class="form-control">
													<label>Matematik Net : </label>
													<input name="matematik" class="form-control">
													<label>Sosyal Net : </label>
													<input name="sosyal" class="form-control">
													<label>Fen Net : </label>
													<input name="fen" class="form-control">
													<label>İngilizce Net : </label>
													<input name="ingilizce" class="form-control">
													<br>
													<button class="btn btn-primary" style="width:100%"> EKLE</button>
													</form>
												  </div>
												  <div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												  </div>
												</div>

											  </div>
											</div>
												</td>
                                            </tr>
										<?php
												$i++;}
											}else{
										?>
											 <tr class="active">
                                                <th scope="row">0</th>
                                                <td>Henüz</td>
												<td>Kayıtlı</td>
                                                <td>Öğrenci</td>
                                                <td>Yok</td>
                                            </tr>
										<?php } ?>
                    </tbody>
                  </table>
							</div>
							
							</div>
							
							
							
						
						</div>
						</div>
						</div>
						
						
						
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


<?php include ('system/inc/footer.php'); ?>
	<script>
	function myFunction() {
	  // Declare variables
	  var input, filter, table, tr, td, i, txtValue;
	  input = document.getElementById("myInput");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("myTable");
	  tr = table.getElementsByTagName("tr");

	  // Loop through all table rows, and hide those who don't match the search query
	  for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[0];
		if (td) {
		  txtValue = td.textContent || td.innerText;
		  if (txtValue.toUpperCase().indexOf(filter) > -1) {
			tr[i].style.display = "";
		  } else {
			tr[i].style.display = "none";
		  }
		}
	  }
	}
	</script>
	
	<script>
	$('.animalcekimiptal').click(function(){
	id = $(this).attr('id');
		
	swal({
	  title: "Onaylıyor musun?",
	  text: "Onayladığın takdirde bu öğrenciyi sileceksiniz!",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonColor: "#DD6B55",
	  confirmButtonText: "Hayır",
	  cancelButtonText: "Evet",
	  closeOnConfirm: true,
	  closeOnCancel: false
	},
	function(isConfirm){
	if (!isConfirm) {
	$.ajax({
	type:'POST',
	data:'id='+id,
	url:'system/ajax/ogrencisil.php',
	success:function(reply) {
	if (reply == 0) {
	swal("Tebrikler!", "Öğrenci Başarıyla Silindi", "success");
	setTimeout(function(){
	location.href = "ogrenci.php";
	},1000);
	}
	if (reply == 1) {
	swal("Başarısız!", "Üzgünüz sistemsel bir sorun meydana geldi.", "error");
	}

	} 
	})	

		
	} 

	});
	})	





	</script>
</body>
<!-- END: Body-->

</html>