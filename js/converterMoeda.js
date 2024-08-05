function numberParaReal(numero) {
    let formatado = "R$" + numero.toFixed(2).replace(".", ",");
    return formatado;
}




function RealParaNumber(texto) {
    let valor = parseFloat(texto.replace("R$", "").replace(",", "."));
    return valor;
}



