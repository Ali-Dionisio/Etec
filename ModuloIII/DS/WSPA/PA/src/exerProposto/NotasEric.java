package exerProposto;

import java.util.Scanner;

import javax.swing.JOptionPane;

public class NotasEric {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
			Scanner leia = new Scanner(System.in);
		
		double v1, f, k, re, ra;
		
		v1 = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite a temperatura em °C", 
				"ENTRADA", JOptionPane.QUESTION_MESSAGE));
		
		f = (9* v1 + 160)/5;   k = v1 + 273.15;
		
		JOptionPane.showInternalConfirmDialog(null, "Fahrenheit\n" + f, "Fahrenheit", JOptionPane.showInternalConfirmDialog(null, "Kelvin\n" + k, "Kelvin", JOptionPane.INFORMATION_MESSAGE));
		
				
				
	
		
		
	}

}
