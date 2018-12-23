<div class="sk-cube-grid show-after-submit">
	<div class="sk-cube sk-cube1"></div>
	<div class="sk-cube sk-cube2"></div>
	<div class="sk-cube sk-cube3"></div>
	<div class="sk-cube sk-cube4"></div>
	<div class="sk-cube sk-cube5"></div>
	<div class="sk-cube sk-cube6"></div>
	<div class="sk-cube sk-cube7"></div>
	<div class="sk-cube sk-cube8"></div>
	<div class="sk-cube sk-cube9"></div>
</div>
<style type="text/css">
.show-after-submit {
	display: none;
}
.hidden-after-submit {
	display: block;
}
</style>

<script type="text/javascript">
	$(document).ready(function(){
		console.log('document ready')
	})
	$( "#bbbbbb" ).click(function() {
		console.log('document ready');
		$( ".hidden-after-submit" ).css('display','none');
		$( ".show-after-submit" ).css('display','block');
	});
</script>