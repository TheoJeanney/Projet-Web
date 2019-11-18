@extends('layouts.app')

<title>Envoyer un email</title>

@section('content')

    <style type="text/css">
        .box {
            width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
        }
        .has-error {
            border-color: #cc0000;
            background-color: #ffff99;
        }
    </style>

    <div class="container box">
<!-------------------------Count the errors -------------------------->
        @if(count($errors)>0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

<!---------------Return success message when email sent-------------->
        @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

<!---------------Contact form for contact.blade.php------------------>
        <form method="post" action="{{ url('sendemail/send') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Entrez votre nom</label>
                <input type="text" name="name" class="form-control" />
            </div>
            <div class="form-group">
                <label>Entrez votre email</label>
                <input type="text" name="email" class="form-control" />
            </div>
            <div class="form-group">
                <label>Entre votre message</label>
                <textarea name="message" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="send" value="Send" class="btn btn-info" />
            </div>
        </form>
    </div>


@endsection