<!-- Footer partial -->

  <!-- Sign up modal partial -->
  <?php require_once "partials/_modal_signup.php"; ?>

	<!-- Log in modal partial -->
  <?php require_once "partials/_modal_login.php"; ?>

  <!-- Update modal partial -->
  <?php require_once "partials/_modal_update.php"; ?>     

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>

  <!-- Include all compiled plugins (below), 
  or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>  

  <!-- Javascript for homepage modals (signup/login) -->
  <script src="js/home_modals.js"></script>

  <!-- Javascript for menu modals (update/delete) -->
  <script src="js/menu_modals.js"></script>

   <!-- Scrolling Nav JavaScript -->
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/scrolling-nav.js"></script>

  <script type="text/javascript">
    function ajaxPost(id){
      var quantity =$('#quantity'+id).val();
      var itemname =$('#itemname'+id).val();
      var itemprice =$('#itemprice'+id).val();
      // console.log('yey');

      $.post("addtocart.php?id="+id,
      {
        quantity: quantity,
        itemname: itemname,
        itemprice: itemprice
      },
      function(data, status){
        // alert(data);
        location.reload();
        // document.getElementById('#target').reload();
      })
      // function(){
      //   var container = document.getElementById('#target');
      //   var content = container.innerHTML;
      //   container.innerHTML = content;
      // })
      ;
    }

    

  </script>

</body>
</html>