//var res;

//function suma(num1,num2) {
 //res = parseFloat(num1) + parseFloat(num2);
 //document.getElementById('lblResultado').innerHTML = res;
//}

//function restar(num1,num2) {
 //res = parseFloat(num1) - parseFloat(num2);
 //document.getElementById('lblResultado').innerHTML = res;
//}

//function multiplicacion(num1,num2) {
 //res = parseFloat(num1) * parseFloat(num2);
 //document.getElementById('lblResultado').innerHTML = res;
//}

//function division(num1,num2) {
 //res = parseFloat(num1) / parseFloat(num2);
 //document.getElementById('lblResultado').innerHTML = res;
//}
//creacion de array
function llenarVector(arreglo,tam){
    for (let i = 0; i < tam; i++) {
       arreglo.push(Math.round(Math.random()*100));    
    }
    return arreglo;
    }
    v=[];
    x=7;
    //llenarVector(vec,x);
    console.log('Valores: '+llenarVector(v,x));
//suma de arreglo
sum=vec=>{
    let suma=0;
    for (let i = 0; i<v.length; i++){
        suma+=v[i];
    }
    return suma;
}
console.log('la suma de los valores del arreglo es:'+sum(v));

//promedio de valor del array
var prom=(v,x)=>{
    let promedio=0;
    for (let i = 0; i< v.length; i++){
    promedio+=v[i]/x;
 }
 return promedio;
}
console.log('el promedio de los valores del array es :' + prom(v,x));

//numero mayor del array
var mayor=v=>{
    let m=0;
    for (let i=0; i < v.length; i++){
        if (v[i]>m){
            m=v[i];
        }

    }
    return m;
}
console.log('el numero mayor de los valores del arreglo es :'+mayor(v));


//suma
function sum(n1,n2){
    res = n1+n2;
    return "la suma es :"+res;
}
console.log(sum(3,2));


var suma=(nu1,nu2)=>nu1+nu2;
console.log('la suma es : '+suma(20,30));

//resta
function resta(n1,n2){
    res = n1-n2;
    return "la resta de "+n1+ "-" +n2+" es :"+res;
}
console.log(resta(3,2));


var resta1=(num1,num2)=>num1-num2;
console.log('la resta es'+resta1(10,20));

//multiplicacion
function multiplicacion(n1,n2){
    res = n1*n2;
    return "la multiplicacion de "+n1+ "*" +n2+" es :"+res;
}
console.log(multiplicacion(5,2));


var multi=(num1,num2)=>num1*num2;
console.log('la multiplicacion es '+multi(10,20));

//divicion
function division(n1,n2){
    res = n1/n2;
    return "la division es : "+res;
}
console.log(division(5,2));


var div=(num1,num2)=>num1/num2;
console.log('la division es '+div(10,20));






