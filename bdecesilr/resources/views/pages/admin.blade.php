
@extends('layouts.app')

@section('adminpage')

<div class="container-fluid">

    <h1>Utilisateurs</h1>

    <table class="table table-striped">

        <thead class="thead-dark">

            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Email</th>
                <th scope="col">Statut</th>
                <th scope="col">Campus</th>
                <th scope="col">Actions</th>
            </tr>

        </thead>
        
        <tbody>
            
                <?php
                $user=DB::select('SELECT * FROM Users'); 

                    foreach($user as $user) {
                        $Nom_status=DB::select('SELECT Status_name FROM status WHERE '.$user->Id_status.' = status.Id_status')[0]->Status_name;
                        $Nom_campus=DB::select('SELECT Campus_name FROM campus WHERE '.$user->Id_campus.' = campus.Id_campus')[0]->Campus_name;
                        echo '<tr>';
                        echo '<td style="vertical-align: middle;" class="text-center">'.$user->User_lastname.'</td>';
                        echo '<td style="vertical-align: middle;" class="text-center">'.$user->User_firstname.'</td>';
                        echo '<td style="vertical-align: middle;" class="text-center">'.$user->email.'</td>';
                        echo '<td style="vertical-align: middle;" class="text-center">'.$Nom_status.'</td>';
                        echo '<td style="vertical-align: middle;" class="text-center">'.$Nom_campus.'</td>';
                        echo '<td style="vertical-align: middle;" class="text-center">
                            <a href="/projetwebf/bdecesilr/public/admin/'.$user->Id_user.'/editU" class="btn btn-primary">Edit</a>
                            </td>';
                        echo '</tr>';
                    }
                ?>

        </tbody>

    </table>

</div>

@endsection

        @else
@section('adminpage')
<h2 style="color: red; text-align: center;">Vous n'avez pas le droit d'être ici.</h2>
<?php header("Refresh:1;url={{route('index')}}") ?>
@endsection
        @endif

@else

@section('adminpage')
<h2 style="color: red; text-align: center;">Vous n'avez pas le droit d'être ici.</h2>
<?php header("Refresh:1;url={{route('index')}}") ?>
@endsection
@endif

