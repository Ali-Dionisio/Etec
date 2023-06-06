package dojo;

import java.util.Scanner;

import javax.swing.JOptionPane;

public class RevisaoIf {

	public static void main(String[] args) {
		//Scanner sc = new Scanner(System.in);
		int numInt;
		float numFloat;
		String nome;
			
		/*System.out.println("Digite o número inteiro");
		numInt = sc.nextInt();
		System.out.println("Digite o número real");
		numFloat = sc.nextFloat();
		System.out.println("Digite seu nome");
		nome = sc.next();*/
		
		
		
		numInt = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite o número inteiro", 
				"ENTRADA", JOptionPane.QUESTION_MESSAGE));
		
		numFloat = Float.parseFloat(JOptionPane.showInputDialog(null, "Digite o número real", 
				"ENTRADA", JOptionPane.QUESTION_MESSAGE));
		
		nome = JOptionPane.showInputDialog(null, "Digite seu nome", "ENTRADA", JOptionPane.PLAIN_MESSAGE);
		
		if (numInt>0) {//ESTRUTURA DE DESVIO CONDICIONAL SIMPLES
			System.out.println("O número inteiro é positivo");
		}
		if (numInt<0) {//ESTRUTURA DE DESVIO CONDICIONAL SIMPLES
			System.out.println("O número inteiro é negativo");
		}
		if (numInt==0) {//ESTRUTURA DE DESVIO CONDICIONAL SIMPLES
			System.out.println("O número inteiro é ZERO");
		}
		
		
		if (numFloat>0) {//ESTRUTURA DE DECISÃO COMPOSTA ENCADEADA
			System.out.println("O número real é positivo");
		} else if(numFloat<0) {
			System.out.println("O número real é negativo");
		}else{
			System.out.println("O número real é ZERO");
		}
		
		//System.out.println("Nome do usuário " + nome);
		JOptionPane.showMessageDialog(null, nome, "SAÍDA", JOptionPane.INFORMATION_MESSAGE);
		
	}

}
