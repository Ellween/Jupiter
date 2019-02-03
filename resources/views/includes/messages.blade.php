@if(Session::has('success'))

<div class="alert alert-success m-0" id ='successMessage' role="alert" style ='position:fixed; z-index: 10000; left: 50%; transform: translateX(-50%);'>
        <strong>Success: </strong>{{ Session::get('success') }}
</div>
@endif


@if(Session::has('danger'))

<div class="alert alert-danger m-0" id ='successMessage' role="alert" style ='position:fixed; z-index: 1000; left: 50%; transform: translateX(-50%);'>
        <strong>Danger: </strong>{{ Session::get('danger') }}
</div>
@endif


<script>
        setTimeout(function() {
            $('#successMessage').fadeOut('slow');
        }, 2500);
</script>