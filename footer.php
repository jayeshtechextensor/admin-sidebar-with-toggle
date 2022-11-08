
</div>

<!-- JS -->
<script src="<?php echo $mainlink; ?>assets/js/jquery.min.js"></script>
<script src="<?php echo $mainlink; ?>assets/js/bootstrap.bundle.min.js"></script>
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>

</body>
</html>
