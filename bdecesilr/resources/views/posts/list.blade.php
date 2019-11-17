@extends('layouts.app')

<title>Liste Inscrits</title>

@section('content')

<h1>Etudiants inscrits</h1>

<table class="table table-striped">

    <thead class="thead-dark">

        <tr>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Numéro de téléphone</th>
            <th scope="col">Status</th>
            <th scope="col">Campus</th>
        </tr>

    </thead>

    <tbody>

        <?php
            $user=DB::select('SELECT * FROM users WHERE ')

            //$Nom_status=DB::select('SELECT Status_name FROM status WHERE '.$user->Id_status.' = status.Id_status')[0]->Status_name;
            //$Nom_campus=DB::select('SELECT Campus_name FROM campus WHERE '.$user->Id_campus.' = campus.Id_campus')[0]->Campus_name;
            echo '<tr>';
            echo '<td style="vertical-align: middle;" class="text-center">'.$user->User_firstname.'</td>';
            echo '<td style="vertical-align: middle;" class="text-center">'.$user->User_lastname.'</td>';
            echo '<td style="vertical-align: middle;" class="text-center">'.$user->email.'</td>';
            echo '<td style="vertical-align: middle;" class="text-center">0'.$user->User_phone.'</td>';
            echo '<td style="vertical-align: middle;" class="text-center">'.$Nom_status.'</td>';
            echo '<td style="vertical-align: middle;" class="text-center">'.$Nom_campus.'</td>';
            echo '</tr>';

        ?>
    
    </tbody>

</table>

</div>

@endsection