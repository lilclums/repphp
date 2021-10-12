<div class="p-5" style="background-color:rgba(90, 0, 0, 0.4);">
    <div class="container" style="color:white">
        <h1 class="display-5" style="text-align:center">Ejercicios Java</h1>
        <hr class="my-5">        
        
        <div class="clearfix; p-5" style="background-color:rgba(90, 0, 0, 0.4);color:white;margin:5px">
            <h3 style="text-align:center">Operaciones</h3>
            <hr class="my-5">
            <prev>

            var num=(array, size)=>{
                for (let i = 0; i < size; i++) {
                array.push(Math.round(Math.random()*100));
                }
            return array;
            }
            let nom=new Array();

            let t=5;

            console.log('numbers... '+num(nom,t));

            console.log(nom[0]);

            var plus=(array)=>{
                let suma=0;
                for(let i = 0; i < array.length; i++) {
                suma+=nom[i];
                }
            return suma;
            }

            console.log('adition... '+plus(nom));

            var prome=(array)=>{
                let suma=0;
                let pro=0;
                for (let i = 0; i < array.length; i++) {
                    suma += nom[i];
                    pro = suma / array.length;
                }
                return pro;
                }

            console.log('prom... '+prome(nom));
            var biggerThan=(array)=>{
            let mayor=0;
            for (let i = 0; i < array.length; i++) {
                mayor=Math.max(...nom);
                }
            return mayor;
            }       
            console.log('Bigger than... '+biggerThan(nom));
            var smallerThan=(array)=>{
                let menor=0;
                for (let i = 0; i < array.length; i++) {
                    menor=Math.min(...nom);
                }
                return menor;
                }
            console.log('Smaller than... '+smallerThan(nom));
            var media=(array)=>{
                let m=0;
                for (let i = 0; i < array.length; i++) {
                    if(array.lenght%2 === 0){
                        index = nom.lenght/2;
                        let valor= nom[index];
                        let valor2= nom[index-1];
                        mediana=(valor+valor2)/2;
                    }else{
                    index = nom.lenght/2;
                    index = Math.floor(index);
                    mediana=nom[index];
                    }
                    return mediana;
                }
            }
            console.log('media... '+media(nom));
            </prev>    
        </div>

        <div class="clearfix; p-5" style="background-color:rgba(90, 0, 0, 0.4);color:white;margin:5px">
            <h3 style="text-align:center">Funciones flecha</h3>
            <hr class="my-5">
            <prev>
            function fillVector(vector, size){
    for (let i = 0; i < size; i++) {
        vector.push(Math.round(Math.random()*100));
    }
    return vector;
}

let vec=new Array();
let x=5;
console.log(fillVector(vec, x));
console.log(vec[0]);

console.log('...'+even(vec));

console.log('second...'+odd(vec));

//hosting
function even(vector) {
    let suma=0;
    for (let i = 0; i < vector.length; i++) {
          if(vector[i] % 2 === 0){
            suma+=vec[i] ;
          }        
    }
    return suma; 
  }

function odd(vector) {
    let sume=0;
    for (let i = 0; i < vector.length; i++) {
          if(vector[i] % 2 != 0){
            sume+=vec[i] ;
          }        
    }
    return sume; 
  }
            </prev>
        </div>

        <div class="p-5" style="background-color:rgba(90, 0, 0, 0.4);color:white;margin:5px">
            <h3 style="text-align:center">fracciones</h3>
            <hr class="my-5">
            <prev>
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
            </prev>
        </div>
    </div>
</div>