document.querySelectorAll('[link-nav]').forEach(link => {
    const conteudo = document.getElementById('conteudo')
    console.log(link.getAttribute('link-nav'))

    link.onclick = function (e) {
        e.preventDefault()
        fetch(link.getAttribute('link-nav'))
            .then(resp => resp.text())
            .then(html => conteudo.innerHTML = html)
    }
})

function limpa_form_cep() {
    document.getElementById('cidade').value = ("")
    document.getElementById('estado').value = ("")
}

function atualizar_cep(json) {
    if (!("erro" in json)) {
        document.querySelector(" [name='cidade'] ").value = json.localidade
        document.getElementById('estado').value = json.uf;
    } else {
        limpa_form_cep()
        alert("CEP nao localizado")
    }
}
function consultaCep() {
    console.log('teste')
    const cep = document.getElementById('cep').value.replace(/[^0-9]+/, '');
    console.log(cep)
    const url = `https://viacep.com.br/ws/${cep}/json/`;
    fetch(url)
        .then(response => response.json())
        .then(json => {
            atualizar_cep(json)
        });
    ;
}

function checarOferta(valor) {
    if (valor == 1) {
        const valorDesconto = document.querySelector('input[name="valorDesconto"]')
        valorDesconto.removeAttribute("disabled")
        const data_f_oferta = document.querySelector('input[name="data_f_oferta"]')
        data_f_oferta.removeAttribute("disabled")
    } else {
        const valorDesconto = document.querySelector('input[name="valorDesconto"]')
        valorDesconto.setAttribute("disabled", "disabled")
        valorDesconto.value = ""
        const data_f_oferta = document.querySelector('input[name="data_f_oferta"]')
        data_f_oferta.setAttribute("disabled", "disabled")
        data_f_oferta.value = ""
    }
}
function checarData(valor) {
    var str = valor
    var data = new Date(str.split('/').reverse().join('/'))
    var dataAltua = new Date()
    if (data > dataAltua) {
        alert("data valida")
    } else {
        alert("A Data da oferta nao pode ser nemor  que a Data altual")
        const data_f_oferta = document.querySelector('input[name="data_f_oferta"]')
        data_f_oferta.value = ""
    }
}

function preVenda() {
    let text;
    let person = prompt('Digite o Cpf do cliente');
    if (person == null || person == "") {
        text = "Operação cancelada pelo operado";
        alert(text);
    } else {
        const lista = document.getElementById('lista')

        console.log(person)
        let cpf = person


        fetch("/pre-venda/" + cpf)
            .then(resp => resp.text())
            .then(html => lista.innerHTML = html)
    }
}



