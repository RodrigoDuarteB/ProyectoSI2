<!--Materialize-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!--Side Bar-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            M.Sidenav.init(elems, {});

            var elemDate = document.querySelectorAll('.datepicker');
            M.Datepicker.init(elemDate, {
                format: 'yyyy-mm-dd'
            });

            var elemSelect = document.querySelectorAll('select');
            M.FormSelect.init(elemSelect, {});

            var elemTime = document.querySelectorAll('.timepicker');
            var instances = M.Timepicker.init(elemTime, {
                format: 'HH:MM:SS',
                twelveHour: false
            });
        });

        function showProgress(){
            var elem = document.getElementById('modal-wait');
            M.Modal.init(elem, {
                'dismissible' : false,
                'opacity' : 0.2
            });
            var instance = M.Modal.getInstance(elem);
            instance.open();
        }
    </script>
