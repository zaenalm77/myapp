<?php $this->load->view('partials/header');?>
	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<?php echo form_open_multipart();?>

				
					<div class="form-group">
						<label>JUDUL</label>
						<?php echo form_input('title',null,'class="form-control"');?>
						
					</div>

					<div class="form-group">
						<label>URL</label>
						<?php echo form_input('url',null,'class="form-control"');?>
	
					</div>

					<div class="form-group">
						<label>Konten</label>
						<?php echo form_textarea('content',null,'class="form-control"');?>

						
					</div>

					<div class="form-group">
                <label>Cover</label>
                <?php echo form_upload('cover', null, 'class="form-control"'); ?>
         </div>  <br>

					<button class="btn btn-primary"type="submit" name="submit">Tambah</button>
			
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
<?php $this->load->view('partials/footer');?>