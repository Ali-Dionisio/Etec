package listaJ;

import javax.swing.JOptionPane;

public class J11 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int x;
		double fatorial;
		
		x = Integer.parseInt( JOptionPane.showInputDialog(null, "Digite um numero", 
				"Entrada", JOptionPane.QUESTION_MESSAGE));
		fatorial = x ;
		while(x > 1){
			
			fatorial = fatorial * (x - 1);
			x--;		
		}
		System.out.println("O resultado do fatorial é "+fatorial);

	}

}
