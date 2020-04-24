/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package secuencias_sm_switch;

/**
 *
 * @author victor
 */
public class Secuencias_sm_switch {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
     int seleccion=35;
     String msj;
     switch(seleccion){
         case 1: msj="mensaje uno";
         break;
         case 2: msj="mensaje dos";
         break;
         case 3: msj="mensaje 3";
         break;
         default: msj="no se cumplio ningun caso"; 
         break;
     }
     System.out.println(msj);
    }
    
}

