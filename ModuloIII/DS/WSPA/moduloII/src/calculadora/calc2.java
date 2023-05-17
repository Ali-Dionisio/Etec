package calculadora;

import javax.swing.JOptionPane;

public class calc2 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		int resp = 1;
		
		String opcoes[] = {"Sair","Somar","Subtrair","Dividir","Multiplicar"};
		resp = JOptionPane.showOptionDialog(null, "Escolha a operação desejada?", "Entrada", 0, 
						  JOptionPane.QUESTION_MESSAGE,null,opcoes,opcoes[0]);
		
		
	}

}
