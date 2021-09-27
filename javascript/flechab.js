//function noParams() {
//    return 'hello world';
//}

//console.log(noParams());
// arrow version

//var sinParam=()=> 'Hello world.';
//console.log('... '+sinParam());


//parameters version
//function square(num) {
//    return num*num;
//}
//console.log(square(10));

//arrow version
//var r=num=> num*num;
//console.log('...'+r(5));

//other

//function suma(n,m) {
//    return n+m;
//}
//console.log(suma(10,20));

//arrow version
//var summar=(n,m)=>n+m;
//console.log('... '+summar(20,30));

//arrow version
var vec=(array, size)=>{
    for (let i = 0; i < size; i++) {
        array.push(Math.round(Math.random()*100)); 
    }
    return array;
}
v=[];
x=5
console.log('arrow... '+vec(v,x));
console.log('... '+vec(v,x)[0]);
var even=(array)=>{
    let suma =0;
    for (let i = 0; i < array.length; i++) {
        if(array[i] % 2 === 0){
          suma+=v[i] ;
        }        
  }
  return suma;
}


console.log('arrow... '+vec(v,x));
console.log('... '+even(v));


//haver; sumar todo, promedio, mayor, menor, moda, mediana, desviacion estandar