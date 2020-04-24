/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package figuras;

import javax.swing.JOptionPane;

/**
 *
 * @author victor
 */
public class Figuras {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        /*inicio
          leer a
          leer b
          area=a*b
        perimetro=2*(a+b)
           fin*/
        
        double a=2;
        double b=3.5;
       
        
        double area=a*b;
        double perimetro=2*a + 2* b;
        //el sistem .out println es para imprimir el resultado en consola
        System.out.println("este es el area: "+ area);
        System.out.println("este es el perimetro: "+ perimetro);
        
    }
    
}








