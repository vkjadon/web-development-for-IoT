$(document).ready(function() {
  $('#user_login_form').submit(function(event) 
  {
    event.preventDefault();
    var formData = $(this).serialize();
    $.alert(formData);
    $.post("check_user.php", formData, function(mydata, filestatus)
    {
      // the below alert to be removed
      //console.log("Success ", mydata);
      $.alert("Data Success: " + mydata.userpassword_error + "\nStatus: " + filestatus);
    }, "json").done(function(data) 
    {
      location.href = "portal/";
    }).fail(function()
    {
      // the below alert to be removed
      $.alert("fail in place of error");
    })
  })
});
