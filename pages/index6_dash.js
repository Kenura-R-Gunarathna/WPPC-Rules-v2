               $.post( 
                  "index5.php",
                  { email: $("#email").val(),
                    password: $("#password").val() },
                  function(data) {
                     $("#body_index6_php").html(data);
                  }
               );