$(document).ready(function(){
  $("#regForm").submit(function(e){
    let phone = $("#phone").val();
    let phoneRegex = /^[0-9]{10}$/;

    if(!phoneRegex.test(phone)){
      alert("Phone number must be 10 digits.");
      e.preventDefault();
    }
  });
});
