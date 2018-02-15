<form action="<?php echo base_url('reservation/procadd');?>" method="POST">
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" name="name" placeholder="Enter Name">
	</div>
	<div class="form-group">
		<label for="address">Address</label>
		<input type="text" class="form-control" name="address" placeholder="Enter Address">
	</div>
	<div class="form-group">
		<label for="phone">Phone Number</label>
		<input type="text" class="form-control" name="phone number" placeholder="Enter Phone Number">
	</div>
	<div class="form-group">
		<label for="gender">Gender</label>
		<div class="radio">
			<label><input type="radio" name="gender" class="flat-red" value="1">Men</label>
			<label><input type="radio" name="gender" class="flat-red" value="0">Women</label>
		</div>
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" placeholder="Enter Email">
	</div>
	<div class="form-group">
		<label for="rute">Rute</label>
		<select name="rute" class="form-control select2">
			<?php foreach($rute as $rute): ?>
				<option value="<?php echo $rute->id; ?>"><?php echo $rute->rute_from; ?>, <?php echo $rute->rute_to; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<label for="seat">Seat</label>
		<select name="seat" class="form-control select2">
			<?php
			$no=0;
			for ($i=0; $i < 100; $i++) {
				# code...
				$no++
				?>
				<option value="A<?php echo $no; ?>">A<?php echo $no; ?></option>
				<?php
			}
			?>
		</select>
	</div>

	</div>
		<input type="submit" name="submit" class="btn btn-primary" value="Submit">
	</form>