package listaD;

import java.util.Scanner;

public class D3 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		int num;
		System.out.println("Digite o numero de seu setor");
		num = ler.nextInt();
		if(num == 1){
			System.out.println("O numero digitado corresponde ao setor de EXPEDI��O");
		}
		if(num == 2){
			System.out.println("O numero digitado corresponde ao setor de RECURSOS HUMANOS");
		}
		if(num == 3){
			System.out.println("O numero digitado corresponde ao setor de LOG�STICA");
		}
		if(num == 4){
			System.out.println("O numero digitado corresponde ao setor de CONTABILIDADE");
		}
	}

}
