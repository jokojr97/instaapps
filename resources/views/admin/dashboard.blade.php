@extends('layouts.adminapp')

@section('title')Beranda - InstaApps @endsection

@section('content')
<div class="row">
	<div class="col">
		<div class="card">
		  <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success" role="alert">
              {{ session('success') }}
            </div>
            @endif
            @if(session('failed'))
            <div class="alert alert-danger" role="alert">
              {{ session('failed') }}
            </div>
            @endif
		    <h6><strong>Buat Postingan</strong></h6>
		    <hr>
		    <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
		    	@csrf
			    <div class="form-row">		    	
			    	<div class="col-md-1 col-2">
			    		<img width="42" class="circle-rounded" src="/assets/images/profiles/{{ $user->details->foto_profile }}" alt="">
			    	</div>
			    	<div class="col-md-9 col-7">
			    		<textarea name="post" class="form-control" style="border:none" rows="4" placeholder="Tuliskan Sesuatu...!" required></textarea>
			    		<!-- <input type="file" name="foto" class="btn btn-success" placeholder="Foto"> -->
			    		<input type="file" id="file" name="file" style="display:none" onchange="document.getElementById('namafoto').value=this.value">
			    		<input type="text" id="namafoto" name="namafoto" class="form-control" style="background-color: white;border:none" disabled>
			    		@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
						<!-- <input type="text" id="filename"> -->
			    	</div>
			    	<div class="col-md-2 col-3">
						<a href="#" name="posting" class="btn btn-secondary btn-block" onclick="document.getElementById('file').click()" style="font-size: 14px;padding-top: 10px;padding-bottom: 10px;"><i class="fas fa-images"></i> Foto</a>
			    	</div>
			    	<!-- <input type="hidden" name="tanggal" value="<?= date('Y-m-d H:i:s'); ?>"> -->
			    	<input type="hidden" name="lokasi" value="bojonegoro">
			    	<input type="hidden" name="userid" value="{{$user->id}}">
					<button type="submit"  name="posting" class="btn btn-primary btn-block mt-2" style="font-size: 16px"><i class="fas fa-paper-plane"></i> Posting</button>
			    </div>		    	
		    </form>
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

@foreach($post as $result)
	
<br>
<div class="row">
	<div class="col">
		<div class="card">
		  <div class="card-body">
		    <div class="form-row">
		    	<div class="col-md-1 col-2">
		    		<img width="42" class="circle-rounded" src="/assets/images/profiles/{{ $result->detailusers->foto_profile }}" alt="">
		    	</div>
		    	<div class="col-md-11 col-10">
		    		<h6 class="mt-2 text-capitalize mb-0"><strong>{{ $result->users->name }}</strong></h6>
		    		<!-- <p>{{$result->created_at}}</p> -->
		    	</div>
		    </div>
		    <hr>
		    <div class="row">
		    	<div class="col">
			    	<img src="/assets/images/03.png" class="img-fluid">
			    	<hr>
			    	<a href="#" onclick="likefunction(<?= $result->id ?>)"><i class="
			    		<?php 
			    		$jml = count($result->likeuser); 
			    		if($jml > 0){ 
			    			foreach($result->likeuser as $hsl){
				    			if($hsl->id == $user->id){ 
				    				echo "fas";
				    			} else{ 
				    				echo "far";
				    			}
			    			}
			    		} else{ 
			    			echo "far";
			    		}
			    		$jml=0; ?> fa-heart" id="like{{$result->id}}" style="font-size: 30px"></i></a>
			    	<!-- <form action="{{route('admin.post.unlike')}}" method="POST">
			    		@csrf
			    		<input type="text" name="id_user" value="{{$user->id}}">
			    		<input type="text" name="id_post" value="{{$result->id}}">
			    		<button type="submit">unlike</button>
			    	</form> -->
			    	<a href="{{route('admin.post.detail', $result->id)}}"><i class="far fa-comment ml-3" style="font-size: 30px"></i></a>
			    	<a href="#"><i class="far fa-paper-plane ml-3" style="font-size: 30px"></i></a>
			    	<span class="ml-2 float-right" style="font-size: 16px"><strong>10 Orang menyukai ini</strong></span>
			    	<p class="text-justify mb-0 mt-2"><span><b>Joko Riyadi </b></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.</p>
			    	<a href="{{route('admin.post.detail', $result->id)}}" class="text-secondary" style="opacity: 70%"><b>Lihat Semua Komentar(10)</b></a>
		    		<form action="{{route('admin.post.commentstore')}}" method="POST">
				    	<div class="form-row mt-3">
				    		<div class="col-10">
				    			@csrf
				    			<input type="text" name="comment" placeholder="Ketikkan komentar!!" class="form-control">
				    			<input type="hidden" name="id_post" value="{{$result->id}}">
				    			<input type="hidden" name="id_user" value="{{$user->id}}">
				    		</div>			
				    		<div class="col-2">
				    			<button type="submit" class="btn btn-primary btn-block">Kirim</button>
				    		</div>	    			
				    	</div>
		    		</form>
			    </div>
		    </div>

		  </div>
		</div>	
	</div>
</div>
	
@endforeach

<div class="row">
	<div class="col">
		@if($posts > 15) <div class="float-right mt-3">{{$post->links()}}</div> @endif
	</div>
</div>

@endsection

@section('script_tambahan')
<script type="text/javascript">
	function likefunction(id) {
		// console.log(id);
		var ids = 'like'+id;
		var like = document.getElementById(ids);
		if (like.className == 'fas fa-heart') {
			like.className = "far fa-heart";
			$.ajax({
				type:'POST',
				url:"{{route('admin.post.unlike')}}",
				data:{
					'_token'    : '<?php echo csrf_token() ?>',
					'id_user'   : <?= $user->id ?>,
					'id_post'   : id,
				},
				success:function(data) {
					console.log(data);
				},
				error:function(data) {
					console.log(data);
					
				}
			});
		}else {
			like.className = "fas fa-heart";
			$.ajax({
				type:'POST',
				url:"{{route('admin.post.like')}}",
				data:{
					'_token'    : '<?php echo csrf_token() ?>',
					'id_user'   : <?= $user->id ?>,
					'id_post'   : id,
					'is_active' : 1,
				},
				success:function(data) {
					console.log(data);
				},
				error:function(data) {
					console.log(data);
					
				}
			});
		}

		

	}
</script>
@endsection