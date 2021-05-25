	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

	  <?php
	  
	      if (isset($view_file)) 
	      {
	          $this->load->view($view_module.'/'.$view_file);
	      }
	  ?>

	</main>

  </div>
</div>