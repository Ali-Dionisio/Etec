package dojo;

import java.util.Scanner;

import javax.swing.JOptionPane;

public class RevisaoIf {

	public static void main(String[] args) {
		//Scanner sc = new Scanner(System.in);
		int numInt;
		float numFloat;
		String nome;
			
		/*System.out.println("Digite o n�mero inteiro");
		numInt = sc.nextInt();
		System.out.println("Digite o n�mero real");
		numFloat = sc.nextFloat();
		System.out.println("Digite seu nome");
		nome = sc.next();*/
		
		
		
		numInt = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite o n�mero inteiro", 
				"ENTRADA", JOptionPane.QUESTION_MESSAGE));
		
		numFloat = Float.parseFloat(JOptionPane.showInputDialog(null, "Digite o n�mero real", 
				"ENTRADA", JOptionPane.QUESTION_MESSAGE));
		
		nome = JOptionPane.showInputDialog(null, "Digite seu nome", "ENTRADA", JOptionPane.PLAIN_MESSAGE);
		
		if (numInt>0) {//ESTRUTURA DE DESVIO CONDICIONAL SIMPLES
			System.out.println("O n�mero inteiro � positivo");
		}
		if (numInt<0) {//ESTRUTURA DE DESVIO CONDICIONAL SIMPLES
			System.out.println("O n�mero inteiro � negativo");
		}
		if (numInt==0) {//ESTRUTURA DE DESVIO CONDICIONAL SIMPLES
			System.out.println("O n�mero inteiro � ZERO");
		}
		
		
		if (numFloat>0) {//ESTRUTURA DE DECIS�O COMPOSTA ENCADEADA
			System.out.println("O n�mero real � positivo");
		} else if(numFloat<0) {
			System.out.println("O n�mero real � negativo");
		}else{
			System.out.println("O n�mero real � ZERO");
		}
		
		//System.out.println("Nome do usu�rio " + nome);
		JOptionPane.showMessageDialog(null, nome, "SA�DA", JOptionPane.INFORMATION_MESSAGE);
		
	}

}
