@extends('layouts.adminapp')

@section('title')Beranda - InstaApps @endsection

@section('content')
<div class="row">
	<div class="col">
		<div class="card">
		  <div class="card-body">
		    <h6><strong>Buat Postingan</strong></h6>
		    <hr>
		    <div class="form-row">
		    	<div class="col-md-1 col-2">
		    		<img width="42" class="rounded-circle" src="/assets/admin/images/avatars/1.jpg" alt="">
		    	</div>
		    	<div class="col-md-9 col-8">
		    		<textarea name="post" class="form-control" style="border:none" rows="4" placeholder="Tuliskan Sesuatu...!"></textarea>
		    		<!-- <input type="file" name="foto" class="btn btn-success" placeholder="Foto"> -->
		    		<input type="file" id="pic" name="pic" style="display:none">
					<!-- <input type="text" id="filename"> -->
		    	</div>
		    	<div class="col-md-2 col-2">
					<button type="submit" name="posting" class="btn btn-secondary btn-block" onclick="document.getElementById('pic').click()" style="font-size: 20px;padding-top: 10px;padding-bottom: 10px;"><i class="fas fa-images"></i></button>
		    	</div>
				<button type="submit"  name="posing" class="btn btn-primary btn-block mt-2" style="font-size: 16px"><i class="fas fa-paper-plane"></i> Posting</button>
		    </div>
		  </div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col">
		<div class="card">
		  <div class="card-body">
		  	<h5><b>Postingan <span style="color: red">Terbaru</span></b></h5>
		  </div>
		</div>
	</div>
</div>
<?php for ($i=0; $i <10 ; $i++) { ?>

<br>
<div class="row">
	<div class="col">
		<div class="card">
		  <div class="card-body">
		    <div class="form-row">
		    	<div class="col-md-1 col-2">
		    		<img width="42" class="rounded-circle" src="/assets/admin/images/avatars/1.jpg" alt="">
		    	</div>
		    	<div class="col-md-11 col-10">
		    		<h6 class="mt-2"><strong>Joko Riyadi</strong></h6>
		    	</div>
		    </div>
		    <hr>
		    <div class="row">
		    	<div class="col">
			    	<img src="/assets/images/03.png" class="img-fluid">
			    	<hr>
			    	<i class="far fa-heart" style="font-size: 30px"></i>
			    	<i class="far fa-comment ml-3" style="font-size: 30px"></i>
			    	<i class="far fa-paper-plane ml-3" style="font-size: 30px"></i>
			    	<span class="ml-2 float-right" style="font-size: 16px"><strong>10 Orang menyukai ini</strong></span>
			    	<p class="text-justify mb-0"><span><b>Joko Riyadi </b></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.</p>
			    	<a href="#" class="text-secondary" style="opacity: 70%"><b>Lihat Semua Komentar(10)</b></a>
			    </div>
		    </div>

		  </div>
		</div>	
	</div>
</div>

<?php } ?>
@endsection