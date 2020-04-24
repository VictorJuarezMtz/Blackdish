/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pkgwhile;

import static java.time.Clock.system;

/**
 *
 * @author victor
 */
public class While {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
   
           int contador=1;
       
       /*comentario */
       
       while(contador<5){
//instrucciones        
       System.out.println(contador);
       contador=contador+1;
       }
       
        
        
        
           
       int contador2=20;
       do{
           System.out.println(contador2);
           contador2=contador2+1;
       }while(contador2<10);
        
        
       
        
        
       
    }
    
}
