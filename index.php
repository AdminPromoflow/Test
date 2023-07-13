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
    <div class='background' style= 'position: relative; width: 100%; background: rgb(245,245,245); ' >
      <div class='header' style= 'width: 60%; min-width: 300px; margin:0 auto; position: relative; background: rgb(63,152,237); background: linear-gradient(90deg, rgba(63,152,237,0.9) 0%, rgba(69,79,177,0.9) 53%, rgba(69,79,177,0.9) 75%, rgb(196, 56, 149) 100%);'>
        <img src='https://lanyardsforyou.com/Pages/General/Menu/Logo.png' alt='Imagen' style='display: block; margin: 20px; width: 220px;'>

      </div>
      <div class='titleContainer'>
        <h1 style='font-family: Oswald, sans-serif; font-size: calc(0.5vw + 10px); background: green; min-width: 300; color: #664A99; margin-top: 25px; text-align: center; '>HELLO AND WELCOME TO LANYARDS FOR YOU</h1>
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
