<div class="col">
    <h1>Formulaire de contact</h1>
    <form class="" method="POST" action="" role="form">
        <div class="col-md-12 col-6">
            <div class="form-group">
                <label for="nom">Nom : *</label>
                <input id="nom" type="text" name="name" class="form-control" id="nom" placeholder="Veuillez entrer votre Nom" required data-error="Votre nom est obligatoire." pattern="^[A-Za-z\-]+$">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom : *</label>
                <input id="prenom" type="text" name="surname" class="form-control" id="prenom" placeholder="Veuillez entrer votre Prénom"  data-error="Votre prénom est obligatoire." pattern="^[A-Za-z\-]+$" required>
            </div>
            <div class="form-group">
                <label for="email">Email : *</label>
                <input id="email" type="email" name="email" class="form-control" id="email" placeholder="Veuillez entrer votre Email" required data-error="Une adresse email valide est obligatoire." pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
            </div>
            <div class="form-group">
                <label for="message">Message : *</label>
                <textarea id="message" name="message" class="form-control" placeholder="Veuillez entrer votre Message" rows="4" required data-error="Veuillez remplir le champ Message."></textarea>
            </div>
            <p class="text-muted">
                <strong>*</strong> Ces champs sont obligatoires.
            </p>

            <input type="submit" value="Nous contacter" class="button" id="bouton_contact_droit" data-toggle="modal" data-target="#myModal">

        </div>
    </form>
</div> 

<!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal -->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Message</h4>
            </div>
            <div class="modal-body">
                <p>Votre message a bien été envoyé.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>  


<script>
/* PARTIE 1 : Déclaration des variables */
// On pointe sur le bouton
const button_submit = document.getElementById('bouton_contact_droit')
/* PARTIE 2 : Déclaration des fonctions */
// fonction de validation du formulaire
const validationFormulaire = () => {
    // On récupère le nom saisi dans l'input
    const nom = document.getElementById('nom')
    // On récupère le prénom saisi dans l'input
    const prenom = document.getElementById('prenom')
    // On récupère le email saisi dans l'input
    const email = document.getElementById('email')
    // On récupère le message saisi dans l'input
    const message = document.getElementById('message')
}
/* PARTIE 3 : Programme */
// On ajoute un écouteur d'évènement sur le click du bouton submit
button_submit.addEventListener('click', test)
</script>