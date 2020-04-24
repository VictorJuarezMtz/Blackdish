package parametros;
import java.util.*;//importamos las paqueterias de java 
public class Parametros {
    public static void main(String[] args) {
         //La clase Scanner de Java provee métodos para leer valores de entrada de varios tipos y está localizada en el paquete java. util
        //el objeto System.in, que representa el sistema estándar de entrada de información en Java.
        Scanner entrada= new Scanner(System.in);
        String nombre; //declara variable vacio
        int numero=23;
        int decimal=1;
        int suma=numero+decimal;
        System.out.println("¿ cual es tu nombre ?");//imprime msj   
        nombre=entrada.nextLine();//usamos nextLine() para leer cadenas (strings)
        mensaje(nombre,suma);//invocamos en metodo o funcion 
    }
    public static void mensaje(String nombre,int suma){//metodo mensaje 
    System.out.print("hello "+nombre+ ", edad: "+suma);//imprime texto y variable
    }
}