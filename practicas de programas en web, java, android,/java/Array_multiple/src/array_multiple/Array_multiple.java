package array_multiple;
import java.util.Arrays;//importar

public class Array_multiple {

    public static void main(String[] args) {
        int array[][];
        int arreglo_x[][];      //crear arreglo
        arreglo_x = new int[5][2];//tamaño del array
        int relleno = 0;//inicializar el relleno de las posiciones dentro de la matriz creada
        for (int i = 0; i < 5; i++) {//creamos un siclo for para las filas, length es para saber el valor maximo
            for (int j = 0; j < 2; j++) {//creamos un ciclo for para las columnas
                arreglo_x[i][j] = relleno;//p = asigna el relleno al arreglo
                relleno++;//incrementa el relleno
            }
            System.out.println(Arrays.toString(arreglo_x[i])); //imprime el arreglo
        }
    }
}
