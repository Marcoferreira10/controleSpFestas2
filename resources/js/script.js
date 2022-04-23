
// Calculo dos produtos por unidade
function calcular()
{
    const preco = document.getElementById('preco').value;
    const embalagem = document.getElementById('embalagem').value;
    const elementResult = document.getElementById("precoUnit");

    const resultFormatted = Number(preco / embalagem).toLocaleString('pt-BR', { minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' });
    
    elementResult.setAttribute('value', resultFormatted)
    elementResult.setAttribute('disabled', true)

};    




// Confirmação que uma impressão foi concluída   
function cbClick(id){
    const elemento = document.getElementById(`cb[${id}]`); 
    const td = document.getElementById(`check[${id}]`);
   
    if(elemento.checked) {
         td.style.background = '#25E256';
    } else{
        td.style.background = '';
    }
}

