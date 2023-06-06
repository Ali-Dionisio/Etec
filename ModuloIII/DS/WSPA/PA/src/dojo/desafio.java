package dojo;

import javax.swing.JOptionPane;

public class desafio {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		double salario, inss;
		
		salario = Double.parseDouble(JOptionPane.showInputDialog(null, "Digite o seu sálario", 
				"ENTRADA", JOptionPane.QUESTION_MESSAGE));	
		if(salario <= 1212){
			inss = (salario * 7.5) / 100;
			
			JOptionPane.showMessageDialog(null, "O INSS é R$ " + inss, "SAÍDA", JOptionPane.INFORMATION_MESSAGE);
			
		} else if( salario > 1212 && salario <= 2427.35){
			inss = (salario * 9) / 100;
			JOptionPane.showMessageDialog(null, "O INSS é R$ " + inss, "SAÍDA", JOptionPane.INFORMATION_MESSAGE);

		} else if(salario > 2427.35 && salario <= 3641.03){
			inss = salario * 0.12;
			JOptionPane.showMessageDialog(null, "O INSS é R$ " + inss, "SAÍDA", JOptionPane.INFORMATION_MESSAGE);

		} else if (salario > 3641.03 && salario <= 7087.22){
			inss = (salario * 14) / 100;
			JOptionPane.showMessageDialog(null, "O INSS é R$ " + inss, "SAÍDA", JOptionPane.INFORMATION_MESSAGE);

		} else{
			JOptionPane.showMessageDialog(null, "Este programa calcula somente até R$ 7.087,22", "SAÍDA", JOptionPane.INFORMATION_MESSAGE);

		}
	}

}
