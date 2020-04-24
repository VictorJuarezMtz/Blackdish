/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package paso_de_parametros;
public class Paso_de_parametros {
    public static void main(String[] args) {
        double salario=1200; //declarar variable salario
              System.out.print("antes del metodo"+salario+" ");//imprime msj
        metodo_sueldo(salario);
      //  el metodo se agrega en este espacio imaginario
    }
    public static void metodo_sueldo(double salario){//copia valor del la variable salario 
       double pago=salario*3;
          System.out.print("despues del metodo"+pago);//imprime mensaje
    }
    
}
