//alert('Esto es Javascript from an external file');

//console.log("This is console.log output");

//Variables on JS

/* var name = "Ale";
console.log(name);
console.log(typeof(name));

var numberone = 1;
var numbertwo = 2;
var addressresult = numberone + numbertwo;
console.log(addressresult);
console.log(typeof(numberone)); */

/* function sumadosvalores(valoruno, valordos){
    var resultado = valoruno + valordos;
    return resultado;
}
function restadosvalores(valoruno, valordos){
    var resultado = valoruno - valordos;
    return resultado;
}
function multiplicadosvalores(valoruno, valordos){
    var resultado = valoruno * valordos;
    return resultado;
}
function dividedosvalores(valoruno, valordos){
    var resultado = valoruno / valordos;
    return resultado;
}

console.log(sumadosvalores(10,5));
console.log(restadosvalores(10,5));
console.log(multiplicadosvalores(10,5));
console.log(dividedosvalores(10,5));

function sayhello(){
    alert("Hello ");
}
sayhello(); */

function sayhellouser(username){
    alert("Hello " + username);

}
//sayhellouser("Alejandra");

function sayhellouser(firstname, lastname){
    var fullname = firstname + " " + lastname;
    return "Welcome" + " " + fullname;
}
var firstname = "Ariadna";
var lastname = "Ya;es";
//alert(sayhellouser(firstname,lastname));

var username = document.getElementById('username');
console.log(username);

