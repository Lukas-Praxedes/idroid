window.onload = function(){
    console.log('Carregou a pagina cadastro de produtos!');
}

const menuCadProdPainel = document.getElementById('cad-prod-painel');
const menuCadProdNew    = document.getElementById('cad-prod-new');
const menuCadProdFind   = document.getElementById('cad-prod-find');
const menuCadProdList   = document.getElementById('cad-prod-list');

const menuObj = {
    cadProdPainel: menuCadProdPainel,
    cadProdNew: menuCadProdNew, 
    ProdFind: menuCadProdFind, 
    CadProdList: menuCadProdList
};
  
Object.values(menuObj).forEach(topoMenuCadItem => {
    topoMenuCadItem.addEventListener('click', function() {
        if (topoMenuCadItem.id === 'cad-prod-painel') {
            window.location.href = '../../menu.php';
        } else if (topoMenuCadItem.id === 'cad-prod-new') {
            window.location.href = './produto.register.php';
        } else if (topoMenuCadItem.id === 'cad-prod-find') {
            window.location.href = './produto.find.php';
        } else if (topoMenuCadItem.id === 'cad-prod-list') {
            window.location.href = './produto.php';
        }
    });
});

async function salvarCadastro(project) {

    const form      = document.querySelector('#formProduct');
    const formData  = new FormData(form);
    const arrayData = Object.fromEntries(formData);

    try {

        const requestOptions = {
            method: 'POST',
            headers: {
            'Content-Type': 'application/json',
            },
            body: JSON.stringify(arrayData),
        };
  
        const res = await fetch(endPointApi, requestOptions);
  
        if (!res.ok) {
            throw new Error(`Erro na solicitação: ${res.statusText}`);
        }
  
        const responseJson = await res.json();
    
        if (responseJson && responseJson.message) {
            console.log('Resposta da API:', responseJson.message);
            window.location.href('./'+project+'/index.php');
        } else {
            error(2);
        }

    } catch (error) {
        console.error('Erro na solicitação:', error);
        error(3);
    }
}

