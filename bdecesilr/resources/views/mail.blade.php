{{ $email_subject = 'Contenu inapproprié'}}

{{ $email_message = 
'<h1>Bonjour, {{ $name }}</h1>
<h2>Nous avons remarqué du contenu inapproprié dans votre dernier commentaire.</h2>
<p>Merci de modifier ou bien supprimer ce dernier.</p>
<p>Le commentaire est le suivant : "{{ $com }}"</p><br />
<p>Personnel du CESI.</p>'
}}
