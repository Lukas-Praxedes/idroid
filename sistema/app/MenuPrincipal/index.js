window.onload = function() {
    console.log('Menu Principal');
}

const btnProd = document.querySelectorAll('.dropdown-item');

btnProd.forEach(function(card) {
    card.addEventListener('click', function() {
        navigateToHome('produtos-link'); // Passe o valor da âncora como uma string
    });
});

function navigateToHome(directory) {
    if (directory === 'produtos-link') {
        window.location.href = './app/dashboard-Produto/index.php';
    }
}

