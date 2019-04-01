//this JS file handles button click events
$(document).ready(()=>{
  $("#student-data-upload").click(()=>{
    $(".upload-new").css("display", "flex");
  })
  //when a user clicks the cancel upload button
  $("#cancel-upload").click(()=>{
    //clear the form and close it
    $(".upload-new")[0].reset();
    $(".upload-new").css("display", "none");
  });
});
