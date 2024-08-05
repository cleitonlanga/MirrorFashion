let $input_quantidade = document.querySelector("#qt");
let $output_total = document.querySelector("#total");

$input_quantidade.addEventListener('input', calculaEMostraTotal);

function calculaEMostraTotal(){
    let quantidade = parseFloat($input_quantidade.value) || 0;

    let valorUnitarioTexto = document.querySelector("#preco").textContent;
    let valorUnitarioNumero = RealParaNumber(valorUnitarioTexto);

       let total = numberParaReal(quantidade * valorUnitarioNumero)
    $output_total.value = total;
    $output_total.textContent = total;
}

