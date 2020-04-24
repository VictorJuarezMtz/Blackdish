/*
https://www.youtube.com/watch?v=OvdaD4-WJZE
http://puntocomnoesunlenguaje.blogspot.com/2012/04/metodos.html
 */
package implementacion;
public class Implementacion {
    public static void main(String[] args) {//metodo principal
        // TODO code application logic here
        int a=1;
        int b=1;
       int resultado = suma(a, b);//llamada a funcion
       System.out.println(resultado);
        metodo_implementado();
        metodo_implementado();
        metodo_implementado();
    }
    public static void metodo_implementado(){
        System.out.println("soy un metodo y no retorno");   
    }
    public static int suma(int a, int b){//paso de los parametro a y b del metodo principal 
        int c;
        c=a+b;
                System.out.println("soy una funcion y retorno");
        return c;   
    }  
}
