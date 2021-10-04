class Persona{
    constructor(nombre, apellido) {
        this._nombre=nombre;
        this._apellido=apellido;
        }

        set nombre(nombre){
            this._nombre=nombre;
        }

        get nombre(){
            return this._nombre;
        }

        set apellido(apellido){
            this._apellido=apellido;
        }

        get apellido(){
            return this._apellido;
        }
        nombreCompleto(){
            return this._nombre+' '+this._apellido;
        }
    }

    class Aprendiz extends Persona{
        constructor(nombre,apellido,programa,ficha){
            super(nombre,apellido);
            this._programa=programa;
            this._ficha=ficha;
        }
        set nombre(nombre){
            this._nombre=nombre;
        }

        get nombre(){
            return this._nombre;
        }

        set apellido(apellido){
            this._apellido=apellido;
        }

        get apellido(){
            return this._apellido;
        }
        set programa(programa){
            this._programa=programa;
        }

        get programa(){
            return this._programa;
        }

        set ficha(ficha){
            this._ficha=ficha;
        }

        get ficha(){
            return this._ficha;
        }
        infoCompleto(){
            return this._nombre+' '+this._apellido+' '+this._programa+' '+this._ficha;
        }
    }

    var ap=new Aprendiz('Laura','Tellez','contabilidad','2142330');
    console.log(ap);
    console.log(ap.infoCompleto());

    obj=new Persona('Julio','Correal')
    console.log(obj.nombre);
    console.log(obj.apellido);
    console.log(obj.nombreCompleto());

    //obj.setNombre('nuevo'); -- asi se hacia antes

    obj.nombre='Roberto';
    obj.apellido='Ramoz';
    console.log(obj.nombre);
    console.log(obj.apellido);
    console.log(obj.nombreCompleto());