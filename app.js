function adicionarCliente() {
    let NOME = document.getElementById('NOME').value;
    let SOBRENOME = document.getElementById('SOBRENOME').value;
    let EMAIL = document.getElementById('EMAIL').value;
    let SENHA = document.getElementById('SENHA').value;
    let ENDERECO = document.getElementById('ENDERECO').value;
    let ESTADO = document.getElementById('ESTADO').value;
    let CIDADE = document.getElementById('CIDADE').value;
    let CEP = document.getElementById('CEP').value;
    let AGENDAMENTO = document.getElementById('AGENDAMENTO').value;

    var url = `./back/clientes_inserir.php?NOME=${NOME}&SOBRENOME=${SOBRENOME}&EMAIL=${EMAIL}&SENHA=${SENHA}&ENDERECO=${ENDERECO}&ESTADO=${ESTADO}&CIDADE=${CIDADE}&CEP=${CEP}&AGENDAMENTO=${AGENDAMENTO}`;

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erro HTTP!: ${response.status}`);
            }
            return response.json();
        })
        .then(data => console.log(data))
        .catch(error => console.error('Erro: :', error));
}

function buscarCliente() {

    url = "./back/clientes_busca.php"

    let req = new XMLHttpRequest();
    req.open('GET', url, false);
    req.send();
    let res = JSON.parse(req.responseText);
    console.log(res);
}