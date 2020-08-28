<script>
    $(document).ready(function(){
        $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrainWidth: false,
            hover: true, 
            gutter: 0,
            belowOrigin: false,
            alignment: 'left', 
            stopPropagation: false 
        });
        $('.scrollspy').scrollSpy(); 
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });
        $('.slider').slider();
        setInterval(function() {
            $('.carousel').carousel('next');
        }, 10000);
        $('.materialboxed').materialbox();
                $(".button-collapse").sideNav({
                menuWidth: 300,
                edge: 'left',
                closeOnClick: true,
                draggable: true
            }
        );
        $('.modal').modal();
    });
  
    var header = document.getElementById("list");
    var btns = header.getElementsByClassName("collection-item");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      if (current.length > 0) { 
        current[0].className = current[0].className.replace(" active", "");
      }
      this.className += " active";
      });
    }
    
    function mostrar(clicked_id){
        if (clicked_id == "1" ){
            document.getElementById("panel_1").style.display = "block";
            document.getElementById("panel_2").style.display = "none";
            document.getElementById("panel_3").style.display = "none";
            document.getElementById("panel_4").style.display = "none";
            document.getElementById("panel_5").style.display = "none";
            document.getElementById("panel_6").style.display = "none";
            document.getElementById("panel_7").style.display = "none";
            document.getElementById("panel_8").style.display = "none";
        }else if(clicked_id == "2" ){
            document.getElementById("panel_1").style.display = "none";
            document.getElementById("panel_2").style.display = "block";
            document.getElementById("panel_3").style.display = "none";
            document.getElementById("panel_4").style.display = "none";
            document.getElementById("panel_5").style.display = "none";
            document.getElementById("panel_6").style.display = "none";
            document.getElementById("panel_7").style.display = "none";
            document.getElementById("panel_8").style.display = "none";
        }else if(clicked_id == "3" ){
            document.getElementById("panel_1").style.display = "none";
            document.getElementById("panel_2").style.display = "none";
            document.getElementById("panel_3").style.display = "block";
            document.getElementById("panel_4").style.display = "none";
            document.getElementById("panel_5").style.display = "none";
            document.getElementById("panel_6").style.display = "none";
            document.getElementById("panel_7").style.display = "none";
            document.getElementById("panel_8").style.display = "none";
        }else if(clicked_id == "4" ){
            document.getElementById("panel_1").style.display = "none";
            document.getElementById("panel_2").style.display = "none";
            document.getElementById("panel_3").style.display = "none";
            document.getElementById("panel_4").style.display = "block";
            document.getElementById("panel_5").style.display = "none";
            document.getElementById("panel_6").style.display = "none";
            document.getElementById("panel_7").style.display = "none";
            document.getElementById("panel_8").style.display = "none";
        }else if(clicked_id == "5" ){
            document.getElementById("panel_1").style.display = "none";
            document.getElementById("panel_2").style.display = "none";
            document.getElementById("panel_3").style.display = "none";
            document.getElementById("panel_4").style.display = "none"; 
            document.getElementById("panel_5").style.display = "block";
            document.getElementById("panel_6").style.display = "none";
            document.getElementById("panel_7").style.display = "none";
            document.getElementById("panel_8").style.display = "none";
        }else if(clicked_id == "6" ){
            document.getElementById("panel_1").style.display = "none";
            document.getElementById("panel_2").style.display = "none";
            document.getElementById("panel_3").style.display = "none";
            document.getElementById("panel_4").style.display = "none";
            document.getElementById("panel_5").style.display = "none";
            document.getElementById("panel_6").style.display = "block";
            document.getElementById("panel_7").style.display = "none";
            document.getElementById("panel_8").style.display = "none";
        }else if(clicked_id == "7" ){
            document.getElementById("panel_1").style.display = "none";
            document.getElementById("panel_2").style.display = "none";
            document.getElementById("panel_3").style.display = "none";
            document.getElementById("panel_4").style.display = "none";
            document.getElementById("panel_5").style.display = "none";
            document.getElementById("panel_6").style.display = "none";
            document.getElementById("panel_7").style.display = "block";
            document.getElementById("panel_8").style.display = "none";
        }else if(clicked_id == "8" ){
            document.getElementById("panel_1").style.display = "none";
            document.getElementById("panel_2").style.display = "none";
            document.getElementById("panel_3").style.display = "none";
            document.getElementById("panel_4").style.display = "none";
            document.getElementById("panel_5").style.display = "none";
            document.getElementById("panel_6").style.display = "none";
            document.getElementById("panel_7").style.display = "none";
            document.getElementById("panel_8").style.display = "block";
        }
    }
    
    function cerrar_modal1(){document.getElementById('modal_1').style.display='none';}
    function cerrar_modal2(){document.getElementById('modal_2').style.display='none';}
    function cerrar_modal3(){document.getElementById('modal_3').style.display='none';}
    function cerrar_modal4(){document.getElementById('modal_4').style.display='none';}
    function cerrar_modal5(){document.getElementById('modal_5').style.display='none';}
    function cerrar_modal6(){document.getElementById('modal_6').style.display='none';}
    function cerrar_modal7(){document.getElementById('modal_7').style.display='none';}
    function mostrar_modal1(){document.getElementById('modal_1').style.display='block';}
    function mostrar_modal2(){document.getElementById('modal_2').style.display='block';}
    function mostrar_modal3(){document.getElementById('modal_3').style.display='block';}
    function mostrar_modal4(){document.getElementById('modal_4').style.display='block';}
    function mostrar_modal5(){document.getElementById('modal_5').style.display='block';}
    function mostrar_modal6(){document.getElementById('modal_6').style.display='block';}
    function mostrar_modal7(){document.getElementById('modal_7').style.display='block';}
    
    function currentDiv(n) {
        showDivs(slideIndex = n);
    }
    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-opacity-off";
    }
</script>