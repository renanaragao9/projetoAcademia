
function carregar() {
    var bvs = window.document.getElementById('bvs')
    var data = new Date()
    var hora = data.getHours()

    if (hora >= 5 && hora <12) {
        // BOM DIA!
        bvs.innerHTML = `Bom dia,  `
        document.body.style.background = '#fdad5f'
    }

        else if (hora >= 12 && hora < 18){
            // BOA TARDE!
            bvs.innerHTML = `Boa tarde,`
             document.body.style.background = '#a95327'
        }
        else {
            // BOA NOITE!
            bvs.innerHTML = `Boa noite, `
            document.body.style.background = '#939395'
        }

}
