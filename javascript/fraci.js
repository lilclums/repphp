var fracion={
    n1:1,
    n2:2,
    d1:2,
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


console.log(fracion.suma());

console.log(fracion.resta());

console.log(fracion.multi());

console.log(fracion.divi());