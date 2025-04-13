     // Fonction pour valider l'email
     function validerEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            return "Adresse email invalide.";
        }
        return "";
    }

    // Fonction pour valider le mot de passe
    function validerMotDePasse(motDePasse) {
        if (motDePasse.length < 4) {
            return "Le mot de passe doit contenir au moins 4 caractères.";
        }
        return "";
    }

    // Fonction principale pour valider le formulaire
    function validerFormulaire(event) {
        event.preventDefault(); // Empêche l'envoi du formulaire par défaut

        const email = document.getElementById('email').value;
        const motDePasse = document.getElementById('password').value;

        const erreurEmail = validerEmail(email);
        const erreurMotDePasse = validerMotDePasse(motDePasse);

        document.getElementById('emailError').textContent = erreurEmail;
        document.getElementById('passwordError').textContent = erreurMotDePasse;

        if (!erreurEmail && !erreurMotDePasse) {
            // Si aucune erreur, soumettre le formulaire
            document.getElementById('loginForm').submit();
        }
    }

    document.getElementById('loginForm').addEventListener('submit', validerFormulaire);
