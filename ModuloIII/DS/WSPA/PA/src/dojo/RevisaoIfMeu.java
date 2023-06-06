package dojo;

import java.util.Scanner;

import javax.swing.JOptionPane;

public class RevisaoIfMeu {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
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
				"Entrada", JOptionPane.QUESTION_MESSAGE));
		numFloat = Float.parseFloat(JOptionPane.showInputDialog(null, "Digite o número real", 
				"Entrada", JOptionPane.QUESTION_MESSAGE));
		nome = JOptionPane.showInputDialog(null, "Digite o seu nome", "Nome", JOptionPane.QUESTION_MESSAGE);
		
		if(numInt>0){
			System.out.println("O número inteiro é positivo");
		}
		if(numInt<0){
			System.out.println("O número inteiro é negativo");
		}
		if(numInt==0){
			System.out.println("O número inteiro não é negativo e nem positivo");
		}
		
		if(numFloat>0){
			System.out.println("O número real é positivo");
		} else if(numFloat<0){
			System.out.println("O número real é negativo");
		}else{
			System.out.println("O número real é zero");
		}
		
		JOptionPane.showMessageDialog(null, numInt, "SAÍDA",JOptionPane.INFORMATION_MESSAGE);
		JOptionPane.showMessageDialog(null, numFloat, "SAÍDA",JOptionPane.INFORMATION_MESSAGE);
		JOptionPane.showMessageDialog(null, nome, "SAÍDA",JOptionPane.INFORMATION_MESSAGE);

	}

}
