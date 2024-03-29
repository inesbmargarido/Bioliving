<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <!--Import Google Icon Font-->
    <?php include_once "../helpers/css.php" ?>
    <!--Import materialize.css-->
    <?php include_once "../helpers/css.php" ?>

    <!--Let browser know website is optimized for mobile-->
    <?php include_once "../helpers/meta.php" ?>
    <title>Projeto BioLiving - elementos gerais</title>
</head>

<body>

<!--Side Navigation = Menu on Mobile -->
<?php include_once "../components/side_nav.php" ?>

<!--Top Navigation-->
<?php include_once "../components/top_nav_model.php" ?>

<!--Page 1 of Tabs/Submenus-->
<div id="test1" class="col s12 min-height">
    <div class="row">
        <div class="col s12 m6 margin-top-10">

            <!-- Dropdown Trigger -->
            <a class='dropdown-button btn white grey-text' style="width: 100%" href='#' data-activates='dropdown1'><i
                        class="material-icons left">filter_list</i>Filtrar por...<i class="material-icons right">keyboard_arrow_down</i></a>

            <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content '>
                <li><a href="#!" style="color:grey;">Para doar</a></li>
                <li><a href="#!" style="color:grey;">Para aquisição</a></li>
            </ul>

            <!--Card for content-->
            <div class="card">
                <div class="card-image">
                    <img src="../../images/t-shirt.png">
                </div>
                <div class="card-content">
                    <span>Vestuário</span>
                    <span class="card-title">T-shirt Anéis BioLiving</span>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                        because I require little markup to use effectively.</p>
                </div>
            </div>

            <!--Card for content-->
            <div class="card">
                <div class="card-image">
                    <img src="../../images/t-shirt2.png">
                </div>
                <div class="card-content">
                    <span>Vestuário</span>
                    <span class="card-title">T-shirt Anéis BioLiving</span>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                        because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Page 2 of Tabs/Submenus-->
<div id="test2" class="col s12 min-height">
    <div class="row">
        <div class="col s12 m6 ">

            <!--Search box-->
            <nav>
                <div class="nav-wrapper green margin-top-10">
                    <form>
                        <div class="input-field">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</div>

<!--Page 3 of Tabs/Submenus-->
<div id="test3" class="col s12 min-height">
    <div class="row">
        <div class="col s12 m6">

            <!--Card for content-->
            <div class="card">
                <div class="card-image">
                    <img src="../../images/back.png">
                    <a class="btn-floating halfway-fab waves-effect waves-light btn-large"><img class="circle"
                                                                                                src="../../images/user.jpg"></a>
                </div>
                <div class="card-content">
                    <span>19-05-1996 às 23h00</span>
                    <span class="card-title">Nascimento do Francisco</span>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                        because I require little markup to use effectively.</p>
                    <p>
                        <span><i class="material-icons tiny">favorite</i> 43</span>
                        <span><i class="material-icons tiny">chat</i> 18</span>
                        <span><i class="material-icons tiny">share</i> 5</span>
                    </p>
                </div>
            </div>

            <!--Pagination-->
            <ul class="pagination center">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul>
        </div>
    </div>
</div>

<!--Page 4 of Tabs/Submenus-->
<div id="test4" class="col s12">

    <!--Galery of pictures-->
    <div class="carousel carousel-slider center" data-indicators="true">
        <div class="carousel-fixed-item center">
        </div>
        <div class="carousel-item  white-text materialboxed"
             style="background-image: url('../../images/back.png'); background-size: cover; background-position: center;">
        </div>
        <div class="carousel-item  white-text materialboxed"
             style="background-image: url('../../images/back.png'); background-size: cover; background-position: center;">
        </div>
        <div class="carousel-item  white-text materialboxed"
             style="background-image: url('../../images/back.png'); background-size: cover; background-position: center;">
        </div>
        <div class="carousel-item  white-text materialboxed"
             style="background-image: url('../../images/back.png'); background-size: cover; background-position: center;">
        </div>
    </div>

    <!--Card of content-->
    <div class="row">
        <div class="col s12 m12">
            <div class="card no-margin-top">
                <div class="card-image">
                </div>
                <div class="card-content">
                    <span>19-05-1996 às 23h00</span>
                    <span class="card-title">Nascimento do Francisco</span>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                        because I require little markup to use effectively.</p>
                    <a class="waves-effect waves-light btn green"><i class="material-icons left">favorite</i>Gosto</a>
                    <a class="waves-effect waves-light btn grey"><i class="material-icons left">share</i>Partilhar</a>
                    <p class="margin-top-10">
                        <span><i class="material-icons tiny">favorite</i> 43</span>
                        <span><i class="material-icons tiny">chat</i> 18</span>
                        <span><i class="material-icons tiny">share</i> 5</span>
                    </p>
                    <div class="divider"></div>

                    <!--Comments-->
                    <p>Comentários</p>
                    <div class="row">
                        <form class="col s12">
                            <div class="input-field col s3">
                                <img class="circle" src="../../images/user.jpg" style="width: 100%">
                            </div>
                            <div class="input-field col s9">
                                <p>Isto é um exemplo de comentário</p>
                            </div>
                        </form>
                    </div>

                    <!--New comment-->
                    <div class="row">
                        <form class="col s12">
                            <div class="input-field col s3">
                                <img class="circle" src="../../images/user.jpg" style="width: 100%">
                            </div>
                            <div class="input-field col s9">
                                <input placeholder="Escreve um comentário..." id="first_name2" type="text"
                                       class="validate">
                                <!--<label class="active" for="first_name2">First Name</label>-->
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div id="test5" class="col s12">
    <!--Galery of pictures-->
    <div class="carousel carousel-slider center" data-indicators="true">
        <div class="carousel-fixed-item center">
        </div>
        <div class="carousel-item  white-text materialboxed"
             style="background-image: url('../../images/back.png'); background-size: cover; background-position: center;">
        </div>
        <div class="carousel-item  white-text materialboxed"
             style="background-image: url('../../images/back.png'); background-size: cover; background-position: center;">
        </div>
        <div class="carousel-item  white-text materialboxed"
             style="background-image: url('../../images/back.png'); background-size: cover; background-position: center;">
        </div>
        <div class="carousel-item  white-text materialboxed"
             style="background-image: url('../../images/back.png'); background-size: cover; background-position: center;">
        </div>
    </div>

    <!--Card of content-->
    <div class="row">
        <div class="col s12 m12">
            <div class="card no-margin-top">
                <div class="card-image">
                </div>
                <div class="card-content">
                    <span class="card-title">A Associação Bioliving</span>
                    <p>A BioLiving, que tem sede em Frossos, em espaço cedido pela Autarquia, é uma associação que
                        desenvolve atividades e oficinas ligadas à natureza, promove a sustentabilidade e recuperação de
                        áreas florestais. O seu lema é “Natureza e Educação para todos”. A Câmara Municipal de
                        Albergaria-a-Velha, por seu turno, consciente da necessidade em manter uma gestão sustentável do
                        património arbóreo, garantindo a salvaguarda da saúde pública, a mobilidade, a estética urbana e
                        a biodiversidade da floresta, compromete-se a plantar seis árvores por cada uma que seja
                        retirada.</p>
                    <span class="card-title margin-top-10">Título</span>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                        because I require little markup to use effectively.</p>
                    <div class="divider margin-top-10"></div>
                    <span class="card-title margin-top-10">Título</span>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                        because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>
    </div>

</div>
<br/>


<!--Footer-->
<?php include_once "../components/footer.php" ?>

<!--Import jQuery before materialize.js-->
<?php include_once "../helpers/jquery_js.php" ?>

</body>
</html>