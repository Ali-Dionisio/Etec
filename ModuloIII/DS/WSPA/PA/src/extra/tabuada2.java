package extra;

import java.util.Scanner;

public class tabuada2 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		int cont=0;
		double num,valor=0;
		
		System.out.println("Digite um numero para o calculo da tabuada");
		num = ler.nextDouble();
		
		if(num == 666){
			System.out.println("Esse valor é feio, não calculamos");

		}else{
		
		while(cont <= 10){
			valor 	= 	num * cont; 	
			System.out.println(num + " * "+ cont +" = " + valor );
			cont++;
			}
		}
	}

}
