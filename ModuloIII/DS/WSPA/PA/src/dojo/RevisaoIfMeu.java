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
		
		/*System.out.println("Digite o n�mero inteiro");
		numInt = sc.nextInt();
		System.out.println("Digite o n�mero real");
		numFloat = sc.nextFloat();
		System.out.println("Digite seu nome");
		nome = sc.next();*/
		
		numInt = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite o n�mero inteiro", 
				"Entrada", JOptionPane.QUESTION_MESSAGE));
		numFloat = Float.parseFloat(JOptionPane.showInputDialog(null, "Digite o n�mero real", 
				"Entrada", JOptionPane.QUESTION_MESSAGE));
		nome = JOptionPane.showInputDialog(null, "Digite o seu nome", "Nome", JOptionPane.QUESTION_MESSAGE);
		
		if(numInt>0){
			System.out.println("O n�mero inteiro � positivo");
		}
		if(numInt<0){
			System.out.println("O n�mero inteiro � negativo");
		}
		if(numInt==0){
			System.out.println("O n�mero inteiro n�o � negativo e nem positivo");
		}
		
		if(numFloat>0){
			System.out.println("O n�mero real � positivo");
		} else if(numFloat<0){
			System.out.println("O n�mero real � negativo");
		}else{
			System.out.println("O n�mero real � zero");
		}
		
		JOptionPane.showMessageDialog(null, numInt, "SA�DA",JOptionPane.INFORMATION_MESSAGE);
		JOptionPane.showMessageDialog(null, numFloat, "SA�DA",JOptionPane.INFORMATION_MESSAGE);
		JOptionPane.showMessageDialog(null, nome, "SA�DA",JOptionPane.INFORMATION_MESSAGE);

	}

}
