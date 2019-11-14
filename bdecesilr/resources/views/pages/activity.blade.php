@extends('layouts.app')

<title>BDE CESI La Rochelle - Activité</title>

@section('mainpage')
<!--
<form>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
</head>
<body>  
            <div class="panel-heading">
            </div>
            <form class="panel-body">
                <br />
                <form method="post" action="{{ route('upload') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-3" align="right"><h4>Select Images</h4></div>
                        <div class="col-md-6">
                            <input id = "Picture" type="file" name="Picture" accept="image/*" multiple />
                        </div>
                        <div class="col-md-3"></div>
                            <input type="submit" name="upload" value="Upload" class="btn btn-success" />
                        </div>
                    </form>
                </form>
                <br />
                <div class="progress">
                    <div class="progress-bar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                        0%
                    </div>
                </div>
                <br />
                <div id="success" class="row">
                </div>
                <br />
            </form>
            <div>
            <img src="#" id="Image" name="Image" />
            </div>
</body>
</form>

<script>
$(document).ready(function(){
$('form').ajaxForm({
    beforeSend:function(){
        $('#success').empty();
        $('.progress-bar').text('0%');
        $('.progress-bar').css('width', '0%');
    },
    uploadProgress:function(event, position, total, percentComplete){
        $('.progress-bar').text(percentComplete + '0%');
        $('.progress-bar').css('width', percentComplete + '0%');
    },
    success:function(data)
    {
        if(data.success)
        {
            $('#success').html('<div class="text-success text-center"><b>'+data.success+'</b></div><br /><br />');
            $('#success').append(data.image);
            $('.progress-bar').text('Uploaded');
            $('.progress-bar').css('width', '100%');
        }
    }
});
});
</script>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<input class="form-control" id="dateDebut" name="dateDebut" placeholder="Date de début" type="text"/>

<script>
$(document).ready(function(){
    var date_input=$('input[name="dateDebut"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    var options={
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    weekStart: 1,
    orientation: "top"
    };
    date_input.datepicker(options);
})
</script>
-->


@endsection