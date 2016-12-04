
$("#update").click(function(e) {
  e.preventDefault();
  var week = $("#week").val();
  var monday = $("#monday").val();
  var tuesday = $("#tuesday").val();
  var wednesday = $("#wednesday").val();
  var thursday = $("#thursday").val();
  var friday = $("#friday").val();
  var saturday = $("#saturday").val();
  var sunday = $("#sunday").val();
  var dataString = 'week='+week+'&monday='+monday+'&tuesday='+tuesday+'&wednesday='+wednesday+'&thursday='+thursday+'&friday='+friday+'&saturday='+saturday+'&sunday='+sunday;
  $.ajax({
    type:'POST',
    data:dataString,
    url:'insert_query.php',
    success:function(data) {
      alert("Holla!");
    }
  });
});
