<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>
<script>

    //Initialize jQuery
    $(".button-collapse").sideNav();
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    $(document).ready(function () {
        $('.materialboxed').materialbox();
        Materialize.updateTextFields();
    });
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100, // Creates a dropdown of 100 years to control year
        max: true
    });
    $(document).ready(function() {
        $('select').material_select();
    });
    $('#textarea1').trigger('autoresize');
    $('select').material_select('destroy');
    $(document).ready(function() {
        Materialize.updateTextFields();
    });


    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });

    /*$('#modal1').modal('open');*/

    $('#modal1').modal('close');

    $(document).ready(function(){
        $('.carousel').carousel();
    });

//Search Box Admin Area
//    $('input.autocomplete').autocomplete({
//        data: {
//            $nome: null,
//            $apelido: null
//        },
//        limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
//        onAutocomplete: function(val) {
//            // Callback function when value is autcompleted.
//        },
//        minLength: 1 // The minimum length of the input for the autocomplete to start. Default: 1.
//    });

</script>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- Materializecss compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<!-- jQueryValidation Plugin (optional) -->
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<!--Import Materialize-Stepper JavaScript -->
<script src="materialize-stepper.min.js"></script>
