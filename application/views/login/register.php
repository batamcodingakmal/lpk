<div class="auth-wrapper">

	<div class="auth-header">
		<div class="auth-title">Pongo</div>
		<div class="auth-subtitle">Simple and Clean Admin Template</div>
		<div class="auth-label">Register</div>
	</div>
	<div class="auth-body">



		<div class="auth-content">
			<form id="form-action">
			<div class="form-group">
							<label for=""> Program</label>
							<select name="program_id" class="form-control">
								<?php foreach ($program as $key => $value) { ?>
									<option value="<?php echo $value->id; ?>"><?php echo $value->nama; ?></option>
								<?php } ?>
							</select>
							<div class="validation-message" data-field="program_id"></div>
						</div>
						<div class="form-group">
							<label for=""> Nama Peserta Didik</label>
							<input class="form-control" name="nama" placeholder="Nama Peserta Didik" type="text">
							<div class="validation-message" data-field="nama"></div>
						</div>
						<div class="form-group">
							<label for="">Jenis Kelamain</label>
							<select name="jenis_kelamin" class="form-control">
									<option value="L">Laki-Laki</option>
									<option value="P">Perempuan</option>
							</select>
							<div class="validation-message" data-field="jenis_kelamin"></div>
						</div>
						<div class="form-group">
							<label for=""> Tanggal Lahir</label>
							<input class="single-daterange form-control" name="tgl_lahir" placeholder="Tanggal Lahir" type="text">
							<div class="validation-message" data-field="tgl_lahir"></div>
						</div>
						<div class="form-group">
							<label for=""> Nomor WA</label>
							<input class="form-control" name="no_wa" placeholder="Nomor Whatsup" type="text">
							<div class="validation-message" data-field="no_wa"></div>
						</div>
						<div class="form-group">
							<label for=""> KTP</label>
							<div class="uploader-wrapper">
								<button type="button" class="btn btn-primary picker-uploader-ktp"><i class="fa fa-cloud-upload"></i> Upload / Select Images</button>
							</div>
							<div class="validation-message" data-field="upload_ktp"></div>
						</div>
						<div class="form-group">
							<label for=""> KK</label>
							<div class="uploader-wrapper">
								<button type="button" class="btn btn-primary picker-uploader-kk"><i class="fa fa-cloud-upload"></i> Upload / Select Images</button>
							</div>
							<div class="validation-message" data-field="upload_kk"></div>
						</div>
						<div class="form-group">
							<label for="">Pendidikan Terakhir</label>
							<select name="pendidikan_terakhir" class="form-control">
									<option value="SD">SD</option>
									<option value="SMP">SMP</option>
									<option value="SMA">SMA</option>
									<option value="SMK">SMK</option>
									<option value="S1">S1</option>
									<option value="S2">S2</option>
									<option value="S3">S3</option>
							</select>
							<div class="validation-message" data-field="jenis_kelamin"></div>
						</div>
						</form>
		</div>


		<div class="auth-footer">
			<button class="btn btn-primary action" onclick="form_routes('save')">Register Now!</button>
			
		</div>
	</div>
</form>
</div>

<script type="text/javascript">

	// Date picker
	if ($('input.single-daterange').length) {
		$('input.single-daterange').daterangepicker({ "singleDatePicker": true })
	}

	var onLoad = (function() {
		

		var uploader_ktp = $('.picker-uploader-ktp').uploader({
			upload_url: '<?php echo base_url() . 'uploader/upload'; ?>',
			file_picker_url: '<?php echo base_url() . 'uploader/files'; ?>',
			input_name: 'upload_ktp',
			maximum_total_files: 1,
			maximum_file_size: 50009000,
			file_types_allowed: ['image/jpeg', 'image/png', 'image/vnd.adobe.photoshop'],
			on_error: function(err) {
				swal({
					title: "Upload Failed",
					text: err.messages,
					type: "warning"
				})
			}
		})
		

		var uploader_kk = $('.picker-uploader-kk').uploader({
			upload_url: '<?php echo base_url() . 'uploader/upload'; ?>',
			file_picker_url: '<?php echo base_url() . 'uploader/files'; ?>',
			input_name: 'upload_kk',
			maximum_total_files: 1,
			maximum_file_size: 50009000,
			file_types_allowed: ['image/jpeg', 'image/png', 'image/vnd.adobe.photoshop'],
			on_error: function(err) {
				swal({
					title: "Upload Failed",
					text: err.messages,
					type: "warning"
				})
			}
		})
		
	})();

	function validate(formData) {
		var returnData;
		$('#form-action').disable([".action"]);
		$("button[title='save']").html("Validating data, please wait...");
		$.ajax({
	        url: "<?php echo base_url() . 'auth/register_attempt'; ?>", async: false, type: 'POST', data: formData,
	        success: function(data, textStatus, jqXHR) {
				returnData = data;
	        }
	    });

		$('#form-action').enable([".action"]);
		$("button[title='save']").html("Save changes");
        if (returnData != 'success') {
        	$('#form-action').enable([".action"]);
			$("button[title='save']").html("Save changes");
            $('.validation-message').html('');
            $('.validation-message').each(function() {
                for (var key in returnData) {
                    if ($(this).attr('data-field') == key) {
                        $(this).html(returnData[key]);
                    }
                }
            });
        } else {
		    return 'success';	
        }
	}

	function save(formData) {
		$("button[title='save']").html("Saving data, please wait...");
		$.post("<?php echo base_url() . 'auth/register_save'; ?>", formData).done(function(data) {
        	
        });
	}

	function cancel() {
			}

	function form_routes(action) {
		if (action == 'save') {
			var formData = $('#form-action').serialize();
			if (validate(formData) == 'success') {
				swal({   
					title: "Please check your data",   
					text: "Saved data can not be restored",
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					cancelButtonText: "Cancel",
					confirmButtonText: "Save",
					closeOnConfirm: true 
				}, function() {
					save(formData);
				});
			}
		} else {
			cancel();
		}
	}

</script>