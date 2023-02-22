<?php $this->load->view('partials/header');?>

<div class="container ">
	<div class="row  justify-content-center">
		<div class="col-md-8">
			<?php echo form_open_multipart();?>
			<div class="form-group">
				<label>JUDUL</label>
				<?php echo form_input('title',$blog['title'],'class="form-control"');?>
						
			</div>
			
			<div class="form-group">
				<label>URL</label>
				<?php echo form_input('url',$blog['url'],'class="form-control"');?>
						
			</div>
			

			<div class="form-group">
				<label>KONTEN</label>
				<?php echo form_textarea('content',$blog['content'],'class="form-control"');?>
						
			</div>
			<div class="form-group">
				<label>COVER</label>
				<?php echo form_upload('cover',$blog['cover'],'class="form-control"');?>
						
			</div><br>

				<button class="btn btn-primary" type="submit" name="submit">UPDATE</button>
		
			<?php echo form_close();?>
		</div>		
	</div>
</div>
<?php $this->load->view('partials/footer');?>