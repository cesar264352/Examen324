<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	<?php if($this->session->flashdata('success')) :?>
	Swal.fire({
	  icon: 'success',
	  title: 'Registrado',
	  text: '<?php echo $this->session->flashdata('success'); ?>!'
	});
	<?php endif; ?>

	<?php if($this->session->flashdata('error')) :?>
	Swal.fire({
	  icon: 'error',
	  title: 'Eliminado',
	  text: '<?php echo $this->session->flashdata('error'); ?>!'
	});
	<?php endif; ?>

</script>
</body>
</html>