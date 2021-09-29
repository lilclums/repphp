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
    for (let i = 0; 1 < array.length; i++) {
        suma += nom[i];
        pro = suma / array.length;
    }
    return pro;
}

/*console.log('prom... '+prome(nom));

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

console.log('media... '+media(nom));*/