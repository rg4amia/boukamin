
<!-- Scripts
================================================== -->
<script src="{{asset('assets/js/jquery-3.3.1.min.js.js.php')}}"></script>
<script src="{{asset('assets/js/jquery-3.3.1.min.js.js.php')}}"></script>
<script src="{{asset('assets/js/mmenu.min.js.js.php')}}"></script>
<script src="{{asset('assets/js/tippy.all.min.js.js.php')}}"></script>
<script src="{{asset('assets/js/simplebar.min.js.js.php')}}"></script>
<script src="{{asset('assets/js/bootstrap-slider.min.js.js.php')}}"></script>
<script src="{{asset('assets/js/bootstrap-select.min.js.js.php')}}"></script>
<script src="{{asset('assets/js/snackbar.js.js.php')}}"></script>
<script src="{{asset('assets/js/clipboard.min.js.js.php')}}"></script>
<script src="{{asset('assets/js/counterup.min.js.js.php')}}"></script>
<script src="{{asset('assets/js/magnific-popup.min.js.js.php')}}"></script>
<script src="{{asset('assets/js/slick.min.js.js.php')}}"></script>
<script src="{{asset('assets/js/custom.js.js.php')}}"></script>

@yield('js')

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
    // Snackbar for user status switcher
    $('#snackbar-user-status label').click(function() {
        Snackbar.show({
            text: 'Your status has been changed!',
            pos: 'bottom-center',
            showAction: false,
            actionText: "Dismiss",
            duration: 3000,
            textColor: '#fff',
            backgroundColor: '#383838'
        });
    });
</script>


<!-- Google Autocomplete -->
<script>
    function initAutocomplete() {
        var options = {
            types: ['(cities)'],
            // componentRestrictions: {country: "us"}
        };

        var input = document.getElementById('autocomplete-input');
        var autocomplete = new google.maps.places.Autocomplete(input, options);
    }

    // Autocomplete adjustment for homepage
    if ($('.intro-banner-search-form')[0]) {
        setTimeout(function(){
            $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
        }, 300);
    }

</script>

<!-- Google API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&libraries=places&callback=initAutocomplete"></script>
