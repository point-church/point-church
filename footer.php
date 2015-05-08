<footer>
	Footer here.
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php 
if(is_home()){
	echo '<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>';
}
?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/scripts.js"></script>

</body>
</html>