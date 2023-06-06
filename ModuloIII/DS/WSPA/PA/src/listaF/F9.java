package listaF;

import java.util.Scanner;

public class F9 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		int num, resul;
		
		System.out.println("Digite um valor divisivel por 4 e 5");
		num = ler.nextInt();
		resul = num % 2;
		
		if(resul == 0){
			System.out.println("O numero digitado foi " + num);
			System.out.println("O numero digitado é par ");
		}
		if(resul == 1){
			System.out.println("O numero digitado foi " + num);
			System.out.println("O numero digitado é ímpar ");
		}
	}

}
