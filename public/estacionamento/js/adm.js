
	function ola(){
    document.getElementById("vem")
    vem.innerHTML ="Há 3 encomendas"
                                      }
    function ol(){
    document.getElementById("vem")vem.innerHTML ="" }
                                            
                         
    function ola1(){
    document.getElementById("map1")
    map1.innerHTML ="Há 1 Consulta"}
                                      
    function ol1(){
    document.getElementById("map1")
    map1.innerHTML =""}
                                             
    function ola2(){
    document.getElementById("map2")
    map2.innerHTML ="Expiral"
                                      }
    function ol2(){
    document.getElementById("map2")map2.innerHTML =""}
                                             
    function calculo(){
    document.getElementById('somar'); somar.innerHTML ="Obter troco <br> com calculo<hr>"} 
                
    function calculo1(){
    document.getElementById('somar');somar.innerHTML=""}
    
    function vem_calculo(){
    document.getElementById('area_calculo_js');
    document.getElementById('area_calculo_js').style.display="block";}
                       
                       //PAGINA INCREMENTE PARA O REGISTRO DAS VENDAS NELA CONTEM UMA MAQUINA CALCULADORA
    function calcular(){
    var operacao = document.getElementById("operacao").value; 

      var m1 = document.getElementById("m1").value;
      var m2 = document.getElementById("m2").value;
      
        m1 = parseFloat(m1);
        m2 = parseFloat(m2);

      if(m1 == '' || m2 == null){
        alert("digite um valor valido para a operacao");
        return false;
      }

      if(m2 == '' || m2 == null){
        alert("digite um valor valido para a operacao");
        return false;
      }

      var resultado = null;


    switch(operacao){

        case "1":
        resultado = m1 - m2;
        break;

        case "2":
        resultado = m1 + m2;
        break;

        case "3":
        resultado = m1 * m2;
        break;

        case "4":
        resultado = m1 / m2;
        break;

        default:
        alert("a opcao selecionada e invalida");
        return false;

        }
        document.getElementById('resultado').value = resultado;
        }

        function vem() {   
        document.getElementById("ola")
        document.getElementById("ola").style.display= "block";
                 
           
                 