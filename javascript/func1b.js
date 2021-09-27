//vec let const 

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

//console.log(Math.round(Math.random()*100));


//let vec=new Array();
//console.log(vec.length);
//vec.push('text');
//console.log(vec.length);
//console.log(vec);
//vec.push(120);
//console.log(vec);
//vec.unshift('fin');
//console.log(vec);
////vec.shift();
//console.log(vec);


//let vec=new Array();
//vec[0]='text';
//var vec=[];
//vec[4]=120;
//console.log(vec[0]);