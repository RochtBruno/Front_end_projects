
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
   
    <nav class="navbar navbar-fixed-top navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Gipsy</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul id="menu-principal" class="nav navbar-nav">
            <li class="active"><a ref_sys="sobre" href="#">About</a></li>
            <li><a ref_sys="cadastrar_equipe" href="#about">Register team</a></li>
            <li><a ref_sys="lista_equipe" href="#contact">Team</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="?sair"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div style="position: relative;top:50px;" class="box">
    <header id="header">
      <div class="container">
          <div class="row">
              <div class="col-md-9">
                <h2><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard</h2>
              </div>
              <div class="col-md-3">
                  <p><span class="glyphicon glyphicon-time"></span> Your last Log In was: </p>
              </div>
          </div>
      </div>
    </header>

    <section class="bread">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Home</li>
        </ol>
      </div>
    </section>

    <section class="principal">
        
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                  <div class="list-group">
                    <a href="#" class="list-group-item active cor-padrao" ref_sys="sobre"><span class="glyphicon glyphicon-pencil"></span> About</a>
                      <a href="#" class="list-group-item" ref_sys="cadastrar_equipe"><span class="glyphicon glyphicon-pencil"></span>Register Team</a>
                   <a href="#" class="list-group-item" ref_sys="lista_equipe">
                     <span class="glyphicon glyphicon-list-alt"></span> Team <span class="badge">2</span></a>
                  </div>

                </div>

                <div class="col-md-9">

                   <div id="sobre_section" class="panel panel-default">
                          <div class="panel-heading cor-padrao">
                            <h3 class="panel-title">About</h3>
                          </div>
                          <div class="panel-body">
                            <form method="post">
                              <div class="form-group">
                                <label for="email">HTML code:</label>
                                <textarea name="sobre" style="height: 140px;resize: vertical;" class="form-control"></textarea>
                              </div>
                              <input type="hidden" name="editar_sobre" value="">
                              <button type="submit" name="acao" class="btn btn-default">Submit</button>
                            </form>


                          </div>
                  </div> 

                        <div id="cadastrar_equipe_section" class="panel panel-default">
                          <div class="panel-heading cor-padrao">
                            <h3 class="panel-title">Register Team:</h3>
                          </div>
                          <div class="panel-body">
                            <form method="post">
                               <div class="form-group">
                                <label for="email">Name:</label>
                                <input type="text" name="nome_membro" class="form-control" />
                              </div>
                              <div class="form-group">
                                <label for="email">Member description:</label>
                                <textarea name="descricao" style="height: 140px;resize: vertical;" class="form-control"></textarea>
                              </div>
                              <input type="hidden" name="cadastrar_equipe" />

                              <button type="submit" class="btn btn-default">Submit</button>
                            </form>


                          </div>
                  </div> 


                      <div id="lista_equipe_section" class="panel panel-default">
                          <div class="panel-heading cor-padrao">
                            <h3 class="panel-title">Team members:</h3>
                          </div>
                          <div class="panel-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>ID:</th>
                                  <th>Name</th>
                                  <th>#</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td><button id_membro="" type="button" class="deletar-membro btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir</button></td>
                                </tr>



                              </tbody>
                            </table>


                          </div>
                  </div> 
                </div>
            </div>
        </div>

    </section>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(function(){

        cliqueMenu();
        scrollItem();
          function cliqueMenu(){
              $('#menu-principal a, .list-group a').click(function(){
                 $('.list-group a').removeClass('active').removeClass('cor-padrao');
                 $('#menu-principal a').parent().removeClass('active');
                 //console.log('#menu-principal a[ref_sys='+$(this).attr('ref_sys')+']');
                $('#menu-principal a[ref_sys='+$(this).attr('ref_sys')+']').parent().addClass('active');
                $('.list-group a[ref_sys='+$(this).attr('ref_sys')+']').addClass('active').addClass('cor-padrao');
                return false;
              })
          }

          function scrollItem(){
               $('#menu-principal a, .list-group a').click(function(){
                    var ref = '#'+$(this).attr('ref_sys')+'_section';
                    var offset = $(ref).offset().top;
                    $('html,body').animate({'scrollTop':offset-50});
                    if($(window)[0].innerWidth <= 768){
                    $('.icon-bar').click();
                    }
              });
          }


          $('button.deletar-membro').click(function(){
              var id_membro = $(this).attr('id_membro');
              var el = $(this).parent().parent();
              $.ajax({
                  method:'post',
                  data:{'id_membro':id_membro},
                  url:'deletar.php'
              }).done(function(){
                el.fadeOut(function(){
                 el.remove();
              });
              })
              
              
          })

      })
    </script>
  </body>
</html>