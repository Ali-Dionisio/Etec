package listaJ;


import javax.swing.JOptionPane;

public class J2 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int num, contador = 0, parimpar;
		
		num = Integer.parseInt( JOptionPane.showInputDialog(null, "Digite um numero", 
				"Entrada", JOptionPane.QUESTION_MESSAGE));
		
		while(contador <= num){
			parimpar = contador % 2;
			if(parimpar == 0){
			System.out.println("O número " + contador + " é par");

			};
			
			parimpar = contador % 2;
			if(parimpar == 1){
			System.out.println("O número " + contador + " é ímpar");
			}
		
			contador++;
		}
	}

}
