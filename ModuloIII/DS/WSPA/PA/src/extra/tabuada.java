package extra;

import javax.swing.JOptionPane;

public class tabuada {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int cont=0;
		double num,valor=0;
		
		num = Double.parseDouble(JOptionPane.showInputDialog(null, "Digite um numero para o calculo da tabuada", "Tabuada automatizada",
				JOptionPane.QUESTION_MESSAGE));
		
		while(cont <= 10){
		valor 	= 	num * cont; 	
		System.out.println(num + " * "+ cont +" = " + valor );
		cont++;
		}
	}

}
