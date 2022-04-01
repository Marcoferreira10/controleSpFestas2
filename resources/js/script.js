
function calcular()
{
    const preco = document.getElementById('preco').value;
    const embalagem = document.getElementById('embalagem').value;
    const elementResult = document.getElementById("precoUnit");

    const resultFormatted = Number(preco / embalagem).toLocaleString('pt-BR', { minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' });
    
    elementResult.setAttribute('value', resultFormatted)
    elementResult.setAttribute('disabled', true)

};    


   
function cbClick(cb){
    const input = document.getElementById('cb');
    const td = document.getElementById('check');
    console.log(td);
    if( input=='checked') {
         
         td.parentNode.style.background = '#25E256';
    } else{
         
         td.parentNode.style.background = '';
         }
}

