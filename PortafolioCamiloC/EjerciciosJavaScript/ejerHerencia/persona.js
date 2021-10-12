class Persona {
    constructor(id_persona,nombre, apellido,telefono,correo,contrasena) {
        this._id_persona = id_persona;
        this._nombre = nombre;
        this._apellido = apellido;
        this._telefono = telefono;
        this._correo = correo;
        this._contrasena = contrasena;
    }
    get id_persona() {
        return this._id_persona;
    }
    set id_persona(id_persona) {
        this._id_persona = id_persona;
    }

    get nombre() {
        return this._nombre;
    }
    set nombre(nombre) {
        this._nombre = nombre;
    }
    get apellido() {
        return this._apellido;
    }
    set apellido(apellido) {
        this._apellido = apellido;
    }
    get correo() {
        return this._correo;
    }
    set correo(correo) {
        this._correo = correo;
    }
    get contrasena() {
        return this._contrasena;
    }
    set contrasena(contrasena) {
        this._contrasena = contrasena;
    }

    nombreCompleto() {
        return this._nombre + ' ' + this._apellido;
    }

}

class Cliente extends Persona {
    constructor(id_persona, nombre, apellido, telefono, correo, contrasena, direccion , ciudad){
        super(id_persona,nombre,apellido,telefono,correo,contrasena);
        this._direccion=direccion;
        this._ciudad=ciudad;
    }
    get direccion() {
        return this._direccion;
    }
    set direccion(direccion) {
        this._direccion = direccion;
    }
    get ciudad() {
        return this._ciudad;
    }
    set ciudad(ciudad) {
        this._ciudad = ciudad;
    }
}

ap=new Cliente('1012','Camilo','Cuervo','3014391260','bccuervo0@misena.edu.co','12345','tranv 13a','Soacha' );
console.log(ap);

var ob = new Persona('Sandra','Mora');
var ob2=new Persona();
ob2.nombre='Julio';
ob2.apellido='Iglesias';
console.log(ob2.nombre);
console.log(ob.nombre);
ob.nombre = 'Marcela';
ob.apellido = 'Ortiz';
console.log(ob.nombre);
console.log(ob.nombreCompleto());
//console.log(Math.abs(-5.3));