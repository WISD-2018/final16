<html>
<header>
<style>
    @media screen and (max-width: 768px) {
        /*left*/  .side-collapse-container-left{
        position:relative;
        left:0;
        transition:left .4s;
    }
        .side-collapse-container-left.out{
            left:70%;
        }
        .side-collapse-left {
            top:50px;
            bottom:0;
            left:0;
            width:70%;
            position:fixed;
            overflow:hidden;
            ransition:width .4s;
        }
        .side-collapse-left.in {
            width:0;
        }

        /*right*/    .side-collapse-container-right{
                         position:relative;
                         right:0;
                         transition:right .4s;
                     }
        .side-collapse-container-right.out{
            right:70%;
        }

        .side-collapse-right {
            top:50px;
            bottom:0;
            right:0;
            width:70%;
            position:fixed;
            overflow:hidden;
            transition:width .4s;
        }
        .side-collapse-right.in {
            width:0;
        }
    }

</style>
</header>

<body>

<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button data-toggle="collapse-side" data-target-sidebar=".side-collapse-right" data-target-content=".side-collapse-container-right" type="button" class="navbar-toggle pull-rihgt">
                　 <span class="icon-bar"></span>
                　 <span class="icon-bar"></span>
                　 <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">梅問題教學網</a>
        </div>
        <div class="navbar-inverse side-collapse-right in">
            　 <nav role="navigation" class="navbar-collapse">
                　 　 <ul class="nav navbar-nav navbar-right">
                    　 　 　 <li><a href="#">選單1</a></li>
                    　 　 　 <li><a href="#">選單2</a></li>
                    　 　 　 <li><a href="＃">選單3</a></li>
                    　 　 </ul>
                　 </nav>
        </div>
    </div>
</nav>

<div class="container side-collapse-container-right">
    ......
</div>

<script>$(function(){
        var sideslider = $('[data-toggle=collapse-side]');
        var get_sidebar = sideslider.attr('data-target-sidebar');
        var get_content = sideslider.attr('data-target-content');
        sideslider.click(function(event){
            $(get_sidebar).toggleClass('in');
            $(get_content).toggleClass('out');
        });
    });</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>