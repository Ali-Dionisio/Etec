package exemplos;

import java.util.Scanner;

import javax.swing.JOptionPane;

public class ExemploWhileIf {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		//Scanner sc = new Scanner(System.in);
		
		int numero, contador, limite;
		contador = Integer.parseInt( JOptionPane.showInputDialog(null, "Digite o valor in�cial para o contador", 
					"Entrada", JOptionPane.QUESTION_MESSAGE));
		limite = Integer.parseInt( JOptionPane.showInputDialog(null, "Digite o valor limite para o contador", 
				"Entrada", JOptionPane.QUESTION_MESSAGE));
	
		while(contador <=limite){
			JOptionPane.showMessageDialog(null, "Este numero �\n" + contador, "SA�DA", JOptionPane.INFORMATION_MESSAGE);
			contador++;
		}
	}

}
