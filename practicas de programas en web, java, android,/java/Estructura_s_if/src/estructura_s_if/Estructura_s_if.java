/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package estructura_s_if;

import javax.swing.JOptionPane;

/**
 *
 * @author victor
 */
public class Estructura_s_if {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
       String cadena=JOptionPane.showInputDialog("ingrese edad");
        int edad = Integer.parseInt(cadena);
        
        if(edad>=18){
            System.out.println("eres mayor");
        }else{
             System.out.println("eres menor");
        }
        
        
    }
    
}
