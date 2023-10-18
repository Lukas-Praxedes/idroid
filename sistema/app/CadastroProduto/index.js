window.onload = function() {
    console.log('Menu Principal');
}

const menuPrincButtons = document.querySelectorAll('.card');
menuPrincButtons.forEach(function(card) {
    card.addEventListener('click', function() {

        if(card.id == 'Cadastro'){
            window.location.href = './app/produto/produto.php';
        }

    });
});