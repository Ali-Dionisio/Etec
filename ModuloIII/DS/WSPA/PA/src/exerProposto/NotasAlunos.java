package exerProposto;

import javax.swing.JOptionPane;

public class NotasAlunos {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		double nota1, nota2, media, repete=1;
		String nome;
	
		while(repete <= 2){
		nome =  JOptionPane.showInputDialog(null,"Digite o nome do aluno ", 
					"Entrada", JOptionPane.QUESTION_MESSAGE);	
		nota1 = Double.parseDouble( JOptionPane.showInputDialog(null,"Digite a sua nota da primeira prova ", 
				"Entrada", JOptionPane.QUESTION_MESSAGE));
		nota2 = Double.parseDouble( JOptionPane.showInputDialog(null, "Digite a sua nota da segunda prova ", 
				"Entrada", JOptionPane.QUESTION_MESSAGE));
		media = (nota1 + nota2) / 2;
	
			JOptionPane.showMessageDialog(null, "O primeiro aluno � " + nome, 
					"Sa�da", JOptionPane.INFORMATION_MESSAGE);
			JOptionPane.showMessageDialog(null, "A sua nota da primeira prova � " + nota1, 
					"Sa�da", JOptionPane.INFORMATION_MESSAGE);
			JOptionPane.showMessageDialog(null, "A sua nota da segunda prova � " + nota2, 
					"Sa�da", JOptionPane.INFORMATION_MESSAGE);
			JOptionPane.showMessageDialog(null, "A m�dia do aluno " +nome+" � " + media, 
					"Sa�da", JOptionPane.INFORMATION_MESSAGE);
		
	
		repete++;
		}
		
		
		
	}

}

