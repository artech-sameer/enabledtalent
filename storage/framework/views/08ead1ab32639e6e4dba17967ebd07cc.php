<?php $__env->startPush('links'); ?>
<?php $__env->stopPush(); ?>


<div class="video-with-text-section">
	<div class="container">
	<div class="video-text-row py-80">

		<div class="video-text-text-section">
			<div class="video-text-content">
				<h2> The # 1 <span class="hero-span">Job Board for</span> Hiring or Find your next job</h2>
				<p>
	                There are many variations of passages orem psum available but the majority have
	                suffered alteration you are going to use a passage in some form by injected humour or randomised.
	            </p>
			</div>
		</div>

		<div class="video-text-video-section">
			<div class="poster-image">
				<img src="<?php echo e(asset('assets/img/video-thumbnail.jpg')); ?>">
				<img src="<?php echo e(asset('assets/img/hero/video-controls-2.svg')); ?>" class="google-meeting">
			</div>
				<a onclick="openPopup('dZOpKhGlwFk')" href="javascript:voide(0)" class="play-button" 
			      style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); cursor:pointer; display:flex; align-items:center; justify-content:center; width:80px; height:80px; background-color:rgba(255,255,255,0.8); border-radius:50%; box-shadow:0 4px 8px rgba(0,0,0,0.2);">
			      <svg fill="#000000" height="40px" width="40px" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
			        <g>
			          <path d="M45.563,29.174l-22-15c-0.307-0.208-0.703-0.231-1.031-0.058C22.205,14.289,22,14.629,22,15v30c0,0.371,0.205,0.711,0.533,0.884C22.679,45.962,22.84,46,23,46c0.197,0,0.394-0.059,0.563-0.174l22-15C45.836,30.64,46,30.331,46,30S45.836,29.36,45.563,29.174z M24,43.107V16.893L43.225,30L24,43.107z"/>
			          <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
			        </g>
			      </svg>
			    </a>

			<div class="popup-overlay" id="videoPopup">
				<div class="popup-content">
					<button class="close-btn" onclick="closePopup()">X</button>
					<iframe id="youtubeFrame" src="" allow="autoplay; fullscreen"></iframe>
				</div>
			</div>

			
		</div>





	</div>
</div>
</div>
<?php $__env->startPush('scripts'); ?>
<script>
	function openPopup(videoId) {
		let videoUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1&mute=0&rel=0&modestbranding=1&showinfo=0&controls=0&disablekb=1&fs=0`;
		document.getElementById('youtubeFrame').src = videoUrl;
		document.getElementById('videoPopup').style.display = 'flex';
	}

	function closePopup() {
		document.getElementById('youtubeFrame').src = ""; 
		document.getElementById('videoPopup').style.display = 'none';
	}
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\Users\asifj\Documents\enabledtalent\resources\views/common/snippets/text-with-video.blade.php ENDPATH**/ ?>