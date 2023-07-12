<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <style media="screen">
      .test{
        height:
      }
    </style>
    <section>
      <h2>Ingresa un correo electrónico</h2>
      <input id="email" type="text" name="" value="">
      <button id="send" type="button" name="button">Enviar</button>
    </section>
    <div class="bacground" style= 'position: relative; width: 100%; background: rgb(245,245,245); ' >
      <div class="header" style= 'width: 300px; margin:0 auto; position: relative;'>
        <img src='https://lanyardsforyou.com/Pages/General/Menu/Logo.png' alt='Imagen' style='display: block; margin-left: 15px; margin-top: 15px; width: 120px;'>

      </div>
    </div>

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
