<?php


require "framework/core/Framework.class.php";


Framework::run();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <title>CRACK</title>
</head>
<script>
    jQuery(document).ready(function(){
    $(".targetDiv").hide();
    $('#div1').show();
    });


jQuery(function(){
   
   jQuery('.showSingle').click(function(){
      jQuery('.targetDiv').hide('.cnt');
      jQuery('#div'+$(this).attr('target')).slideToggle();

   }); 
});

</script>
  <section style="height: 635px; padding: 5%;" class="container" >
        <div class="row">
                <div class="col s12">
                  <ul class="tabs">
                    <li class="tab col s3"><a  class="showSingle" target="1">Student</a></li>
                    <li class="tab col s3"><a  class="showSingle" target="2">Teacher</a></li>
                    <li class="tab col s3"><a  class="showSingle" target="3">Admin</a></li>
                  </ul>
                </div>
                <div id="div1" class="targetDiv" style="padding: 40px; background: white;" >
                    <div class="row">
                      <h3>Student</h3>
                        <form class="col s12">
                          <div class="row">
                            <div class="input-field col s12">
                              <input  id="email" type="email" class="validate">
                              <label for="email">Email</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="password" type="password" class="validate" >
                              <label for="password">Password</label>
                            </div>
                          </div>
                          <button class="btn waves-effect waves-light" type="submit" name="action">Login</button><br><br>
                          Dont have an account ? <a href="register.html">Create account</a><br>
                          Forgot Password !!! <a href="#forgot">Create account</a>
                        </form>
                      </div>      
                </div>
                <div id="div2" class="targetDiv" style="padding: 40px;background: white;">
                    <div class="row">
                        <h3>Teacher</h3>
                        <form class="col s12">
                          <div class="row">
                            <div class="input-field col s12">
                              <input  id="email" type="email" class="validate">
                              <label for="email">Email</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="password" type="password" class="validate">
                              <label for="password">Password</label>
                            </div>
                          </div>
                          <button class="btn waves-effect waves-light" type="submit" name="action">Login</button><br><br>
                          Dont have an account ? <a href="register.html">Create account</a><br>
                          Forgot Password !!! <a href="#forgot">Create account</a>
                        </form>
                      </div>
                </div>
                <div id="div3" class="targetDiv" style="padding: 40px;background: white;">
                    <div class="row">
                        <h3>Admin</h3>
                        <form class="col s12">
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="email" type="email" class="validate">
                              <label for="email">Email</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="password" type="password" class="validate">
                              <label for="password">Password</label>
                              
                            </div>
                          </div>
                          <button class="btn waves-effect waves-light" type="submit" name="action">Login</button><br><br>
                          Dont have an account ? <a href="register.html">Create account</a><br>
                          Forgot Password !!! <a href="#forgot">Create account</a>
                        </form>
                      </div>
                </div>
        </div>
                    
  </section>

  <footer class="page-footer" style="background: #1089ff;">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Footer Content</h5>
          <p class="grey-text text-lighten-4">Footer content</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2019 Copyright Quiz
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
    </div>
  </footer>

</body>
</html>