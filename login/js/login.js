window.onload = function() {
    console.log('Load Tela de Login');
}

const endPointApi = './login/api/request.php';
const indexPage   = './index.php';

const form = document.getElementById('formLogin');
const resultadoDiv = document.getElementById('resultado');

form.addEventListener('submit', function(e) {

    e.preventDefault();
    const formPre   = document.querySelector('#formLogin');
    const formData  = new FormData(formPre);
    const formProps = Object.fromEntries(formData);

    if(isNaN(formProps['codigo'])) {
        inputCodigo.focus();
        inputCodigo.select();
        return;
    }

    if(isNaN(formProps['senha'])) {
        inputSenha.focus();
        inputSenha.select();
        return;
    }

    if(formProps['codigo'].length > 0) {

        let formatedPin = ('000000' + formProps['codigo']).slice(-6);
        formatedPin = formatedPin.replace(/[^0-9]/g,'');
        console.log('34' + formatedPin);
        formProps['pin'] = formatedPin;
        getLogar(formProps);

    } else {
        inputCodigo.focus();        
        //inputCodigo.select();
        return;
    }
});

const inputCodigo = document.getElementById('codigo');
const inputSenha  = document.getElementById('senha');

inputCodigo.addEventListener('click', function(ev) {
    inputCodigo.value = '';
    inputCodigo.focus();
    inputCodigo.select();
});

async function getLogar(props) {

    /*let hash = '37ee3f4460666db737abc';
    let md5  = 'ad7322fb3cc3addaeefd';

    let dataAtual = new Date();
    dataAtual.setSeconds(0);
    dataAtual.setMilliseconds(0);
    let timestamp = dataAtual.getTime();
    console.log('timestamp: '+timestamp);

    let newSenhaMd5 = calcularHashMD5(props['senha']);
    var sha256 = calcularSHA256(newSenhaMd5);
    let hashFinal = hash+'_'+timestamp+'_'+'TT'+'_'+md5;

    calcularSHA256(hashFinal).then(hashSHA256 => {
        console.log('Hash SHA-256 do texto:', hashSHA256);
    }).catch(error => {
        console.error('Erro ao calcular o hash SHA-256:', error);
    });*/

    //props['HASHE'] = hashEncode;
    //props['senha'] = '';
    //props['pin'] = formatedPin;

    try {

        const requestOptions = {
            method: 'POST',
            headers: {
            'Content-Type': 'application/json',
            },
            body: JSON.stringify(props),
        };
  
        const res = await fetch(endPointApi, requestOptions);
  
        if (!res.ok) {
            throw new Error(`Erro na solicitação: ${res.statusText}`);
        }
  
        const responseJson = await res.json();

        /*console.log('97');
        console.log(responseJson);*/
    
        if (responseJson.status === true && responseJson.message == 'OK') {
            //console.log('Response pelo request login: '+responseJson.message);
            window.location.href = './sistema/menu.php';
        } else {
            console.log('Error na api: '+responseJson.message);
        }

    } catch (error) {
        console.error('108 - Erro na solicitação:', error);
    }
}

/*const CryptoJS = require('crypto-js');
const calcularSHA256 = async function(texto) {
  return new Promise((resolve, reject) => {
    try {
      const hashSHA256 = CryptoJS.SHA256(texto).toString();
      resolve(hashSHA256);
    } catch (error) {
      reject(error);
    }
  });
};*/

/*const CryptoJS = require('crypto-js');
function calcularHashMD5(texto) {
    //console.log('calcularHashMD5: '+texto);
    let md5Text = CryptoJS.MD5(texto).toString();
    return md5Text;
}*/

/*function calcularRendimentoCDI(valorInvestido, taxaCDI) {

    if (typeof valorInvestido !== 'number' || typeof taxaCDI !== 'number' || valorInvestido <= 0 || taxaCDI <= 0) {
      return "Valores inválidos. Certifique-se de que ambos os valores sejam números positivos.";
    }
  
    const rendimento = valorInvestido * (1 + (taxaCDI / 100) * 1.13);
    return rendimento;
}*/
  
/*const valorInvestido = 1000; // Substitua pelo valor que você deseja calcular
const taxaCDI = 6.5; // Substitua pela taxa CDI atual
const rendimento = calcularRendimentoCDI(valorInvestido, taxaCDI);
console.log(`O rendimento a 113% do CDI é: R$${rendimento.toFixed(2)}`);*/