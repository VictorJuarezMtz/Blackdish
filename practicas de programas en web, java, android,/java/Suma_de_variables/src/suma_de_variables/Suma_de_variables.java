
package suma_de_variables;

import javax.swing.JOptionPane;

/**
 *
 * @author victor
 */
public class Suma_de_variables {
     
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
         // declarar variables 
         int a= 2;
         int a2=a+1;
         int b = a2 * 2;
         int b2=b-1;
         int c= a2 + 2 * b2;
        
          System.out.println("resultado final : " + c);
          JOptionPane.showMessageDialog(null,"r"+c);
        

    }
    
}
