$("#sectionList").show();
haList();

$(document).on("submit", "#haForm", function(event) {
  event.preventDefault();
  var formData = $(this).serialize();
  //$.alert("Form Data " + formData);
  // action and test_id are passed as hidden
  $.post("ha_updateSql.php", formData, function(mydata, mystatus) {
    // the below $.alert to be removed
    $("#sectionList").hide();
    $('#haForm')[0].reset();
    haList();
    //$.alert(" Back from Update "+mydata + "Inst " + instId);
  }, "text")
});

$(document).on('click', '.ha_idD', function() {
  var x = $(this).attr('id');
  $.alert(" Disabled ");
});

$(document).on('click', '.ha_idE', function() {
  var x = $(this).attr('id');
  $.alert(" Disabled ");
});

$(document).on('click', '.ha_idOFF', function() {
  var x = $(this).attr('id');
  //$.alert(" ha Id " + x);
  $.post("ha_updateSql.php", {
    haId: x,
    action: "haOff"
  }, function(mydata, mystatus) {
    //$.alert("List "+ mydata);
    haList();
  }, "text").fail(function() {
    $.alert("fail in place of error");
  })
});

$(document).on('click', '.ha_idON', function() {
  var x = $(this).attr('id');
  //$.alert(" ha Id " + x);
  $.post("ha_updateSql.php", {
    haId: x,
    action: "haOn"
  }, function(mydata, mystatus) {
    //$.alert("List "+ mydata);
    haList();
  }, "text").fail(function() {
    $.alert("fail in place of error");
  })
});

function haList() {
  //$.alert("In HA List Function");
  $.post("ha_updateSql.php", {
    action: "haList"
  }, function(mydata, mystatus) {
    $("#sectionList").show();
    //$.alert("List "+ mydata);
    $("#sectionList").html(mydata);
  }, "text").fail(function() {
    $.alert("fail in place of error");
  })
}
