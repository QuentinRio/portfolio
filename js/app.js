// Récupérez la référence de la modale
var myModal = document.getElementById('modal1');

// Créez une instance de la modale Bootstrap
var modal = new bootstrap.Modal(myModal, {
  keyboard: true
});

// Affichez la modale
modal.show();

// Masquez la modale en cliquant sur le bouton de fermeture
var closeButton = myModal.querySelector('.close');
closeButton.addEventListener('click', function() {
  modal.hide();
});
