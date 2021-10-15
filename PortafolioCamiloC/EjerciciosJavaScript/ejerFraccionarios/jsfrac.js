function algoritmo()
{
    let dividendo_1, dividendo_2, divisor_1, divisor_2, resultado;
    dividendo_1 = parseFloat (document.formulario1.dividendo_1.value);
    dividendo_2 = parseFloat (document.formulario1.dividendo_2.value);
    divisor_1 = parseFloat (document.formulario1.divisor_1.value);
    divisor_2 = parseFloat (document.formulario1.divisor_2.value);
    resultado=(divisor_1*dividendo_2+divisor_2*dividendo_1)/(divisor_1+divisor_2);
    document.formulario1.resultado.value = resultado;
}

function resta1()
{
    let dividendo_1, dividendo_2, divisor_1, divisor_2, resultado;
    dividendo_1 = parseFloat (document.formulario1.dividendo_1.value);
    dividendo_2 = parseFloat (document.formulario1.dividendo_2.value);
    divisor_1 = parseFloat (document.formulario1.divisor_1.value);
    divisor_2 = parseFloat (document.formulario1.divisor_2.value);
    resultado=(divisor_1*dividendo_2-divisor_2*dividendo_1)/(divisor_1-divisor_2);
    document.formulario1.resultado.value = resultado;
}


//actividad fracciones 

var frac={
    n1:1,
    n2:4,
    d1:7,
    d2:3,
    suma:function(){
        numeradorS1=this.n1 * this.d2;
        numeradorS2=this.n2 * this.d1;
        numeradorSF=numeradorS1 + numeradorS2;
        denominadorS=this.d1 * this.d2;
        return 'el resultado de la suma es '+ numeradorSF + ' / ' + denominadorS;
    },
    resta:function(){
        numeradorR1=this.n1 * this.d2;
        numeradorR2=this.n2 * this.d1;
        numeradorRF=numeradorS1 - numeradorS2;
        denominadorR=this.d1 * this.d2;
        return 'el resultado de la resta es '+ numeradorRF + ' / ' + denominadorR;
    },
    multi:function(){
        numeradorM1=this.n1 * this.n2;
        numeradorM2=this.d1 * this.d2;
        return 'el resultado de la multiplicacion es '+ numeradorM1 + ' / ' +numeradorM2;
    },
    divi:function(){
        numeradorD1=this.n1 * this.d2;
        numeradorD2=this.n2 * this.d1;
        return 'el resultado de la division es '+ numeradorD1 + ' / ' +numeradorD2;
    }
}

document.write('solucion de ejercicio de fraccionarios, resultados de operaciones con variables declaradas en javacript <br>');

console.log(frac.suma());
document.write(frac.suma()+'<br>');

console.log(frac.resta());
document.write(frac.resta()+'<br>');

console.log(frac.multi());
document.write(frac.multi()+'<br>');

console.log(frac.divi());
document.write(frac.divi()+'<br>');