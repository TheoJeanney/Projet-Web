@extends('layouts.app')

<title>Liste Inscrits</title>
<!------------------------------------------------List of all sign users--------------------------------------------------------->
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

            $user=DB::select('SELECT * FROM users INNER JOIN sign_in on users.Id_user=sign_in.user_id WHERE post_id= ? ',[$id]);

            foreach ($user as $user){

                $Name_status=DB::select('SELECT Status_name FROM `status` WHERE Id_status=?',[$user->Id_status])[0]->Status_name;
                $Name_campus=DB::select('SELECT Campus_name FROM campus WHERE Id_campus=?',  [$user->Id_campus])[0]->Campus_name;

            echo '<tr>';
            echo '<td style="vertical-align: middle;" class="text-center">'.$user->User_firstname.'</td>';
            echo '<td style="vertical-align: middle;" class="text-center">'.$user->User_lastname.'</td>';
            echo '<td style="vertical-align: middle;" class="text-center">'.$user->email.'</td>';
            echo '<td style="vertical-align: middle;" class="text-center">0'.$user->User_phone.'</td>';
            echo '<td style="vertical-align: middle;" class="text-center">'.$Name_status.'</td>';
            echo '<td style="vertical-align: middle;" class="text-center">'.$Name_campus.'</td>';
            echo '</tr>';

            }
        ?>
    
    </tbody>

</table>

</div>

@endsection