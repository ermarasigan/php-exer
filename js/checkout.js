// Javascript to process Add/remove cart and Checkout

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
  })
  ;
}

function ajaxRemove(id){
  
  $.post("removecart.php?id="+id,
  function(data, status){
    location.reload();
  })
  ;
}

function checkout(){

  $.post("checkout.php",
  function(data, status){
    location.reload();
  })
  ;
}

function checkoutNo(){

  $.post("checkoutno.php",
  function(data, status){
    location.reload();
  })
  ;
}

function checkoutYes(){

  $.post("checkoutyes.php",
  function(data, status){
    swal({
      title: "Checkout successful!",
      text: "Log out to see summary of orders :)",
      type: "success",
      showCancelButton: false,
      closeOnConfirm: true,
      showLoaderOnConfirm: false,
    },
    function(){
      location.reload();
      // setTimeout(function(){
      // swal("Ajax request finished!");
      // }, 2000);
  });

    
  })
  ;
}