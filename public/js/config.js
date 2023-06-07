document.querySelectorAll('[link-nav]').forEach(link => {
    const conteudo = document.getElementById('conteudo')
        console.log(link.getAttribute('link-nav'))

    link.onclick = function(e) {
        e.preventDefault()
        fetch(link.getAttribute('link-nav'))
            .then(resp => resp.text())
            .then(html => conteudo.innerHTML = html)
    }
})
