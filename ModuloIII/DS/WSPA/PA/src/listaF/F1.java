package listaF;

import java.util.Scanner;

import javax.swing.JOptionPane;

public class F1 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		int codigo;
		System.out.println("Digite o código do seu departamento");
		codigo = ler.nextInt();
		
		if(codigo == 10) {
			
			System.out.println("Digitado o codigo 10");
			System.out.println("Você ira trabalhar na Contabilidade");
		}
		if(codigo == 12) {
			System.out.println("Digitado o codigo 12");
			System.out.println("Você ira trabalhar no Almoxarifado");
		}
		if(codigo == 14) {
			System.out.println("Digitado o codigo 14");
			System.out.println("Você ira trabalhar na Informática");
		}
	}

}
