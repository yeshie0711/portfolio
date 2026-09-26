<!DOCTYPE html>
<html>
<head>
  <title>Ajax</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
 
<h1>Manage MyGuestBook</h1>
<div id="form">
  <form id="theform">
    Name :
    <input type="text" name="name" size="40">
    <br>
    Email :
    <input type="text" name="email" size="25">
    <br>
    Comment :<br>
    <textarea name="comment" cols="30" rows="8"></textarea>
    <br>
    <input type="hidden" name="id">
    <input type="button" id="submit" value="Add a New Comment">
    <input type="button" id="update" value="Edit This Comment">
    <input type="button" id="cancel" value="Cancel">
    <input type="button" id="reset" value="Reset">
  </form>
</div>
<h1>List of Comments</h1>
<div id="listing"></div>
 
</body>
</html>

<script type="text/javascript">
 
$(document).ready(function() {
   
  hideUpdateButtons();
  listing();
 
  $("#reset").click(function(){
    resetForm($('#theform'));
    });
 
    function listing() {
        $.ajax({
          type: 'GET',
          cache: false,
          url: "https://lrgs.ftsm.ukm.my/users/a212509/week12lab/guestbook_api/",
          beforeSend: function(xhr){
                $("#listing").html("<img src='ajax.gif'>");
            },
          success: function(result){
              var textToInsert = '';
              var id = '';
              var header = '<tr><th>ID</th><th>Name</th><th>Email</th><th>Date</th><th>Time</th><th>Comment</th></tr>';
              $.each(result, function(row, rowdata) {
                  textToInsert += '<tr>';
                  $.each(rowdata, function (idx, eledata){
                    if ( idx === 'id') {
                  id = eledata;
              }
                      textToInsert  += '<td>' + eledata + '</td>';
                });
                textToInsert += '<td><button class="edit" value=' + id + '>Edit</button><button class="delete" value=' + id + '>Delete</button></td>'
                textToInsert += '</tr>';
              });
              $("#listing").html('<table border=1>' + header + textToInsert + '</table>');
          },
          error: function (xhr, status) {
              $("#listing").html(xhr.responseText);
          },
        });
    }
 
  function hideUpdateButtons() {
    $('#update').hide();
    $('#cancel').hide();
    $('#submit').show();
  }
   
  function resetForm($form) {
      $form.find('input:text, input:password, input:file, select, textarea').val('');
      $form.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
  }
 
});
 
</script>