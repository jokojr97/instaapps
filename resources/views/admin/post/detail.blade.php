@extends('layouts.adminapp')

@section('title')Detail Post - InstaApps @endsection

@section('content')
<div class="row">
	<div class="col">
		<div class="card">
		  <div class="card-body">
		    <div class="form-row">
		    	<div class="col-md-1 col-2">
		    		<img width="42" class="circle-rounded" src="/assets/images/profiles/{{ $post->detailusers->foto_profile }}" alt="">
		    	</div>
		    	<div class="col-md-11 col-10">
		    		<h6 class="mt-2 text-capitalize mb-0"><strong>{{ $post->users->name }}</strong></h6>
		    		<!-- <p>{{$post->created_at}}</p> -->
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
			    	<p class="text-justify mb-0 mt-2"><span><b>Joko Riyadi </b></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.</p>
			    	<a href="{{route('admin.post.detail', $post->id)}}" class="text-secondary" style="opacity: 70%"><b>Lihat Semua Komentar(10)</b></a>
		    		<form action="{{route('admin.post.commentstore')}}" method="POST">
				    	<div class="form-row mt-3">
				    		<div class="col-10">
				    			@csrf
				    			<input type="text" name="comment" placeholder="Ketikkan komentar!!" class="form-control">
				    			<input type="hidden" name="id_post" value="{{$post->id}}">
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
	
@endsection