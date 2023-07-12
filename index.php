<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <section>
      <h2>Ingresa un correo electrónico</h2>
      <input id="email" type="text" name="" value="">
      <button id="send" type="button" name="button">Enviar</button>
    </section>

    <script type="text/javascript">
      var email = document.getElementById('email');
      var send = document.getElementById('send');

      send.addEventListener('click' , function(){
      $.ajax( "App/Controller/Controller.php", {
               type: 'post',
               async: false,
               data: {
                 module: "testEmail",
                 email: email.value,
                       },
               success: function(data){
                 alert(data);

              }
             }
           )

      })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </body>
</html>
