package listaD;

import java.util.Scanner;

public class D5 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		int a,b,c;
		System.out.println("Digite o valor de A");
		a = ler.nextInt();
		System.out.println("Digite o valor de B");
		b = ler.nextInt();
		System.out.println("Digite o valor de C");
		c = ler.nextInt();
		
		if(a < b && b < c){
			System.out.println("Os numeros digitados em ordem crescente s�o: "+ a + b +c);
		};
		
		if(c < b && b < a){
			System.out.println("Os numeros digitados em ordem crescente s�o: "+ c + b +a);
		};
		
		if(b < a && a < c){
			System.out.println("Os numeros digitados em ordem crescente s�o: "+ b + a +c);
		};
		
		if(a < c && c < b){
			System.out.println("Os numeros digitados em ordem crescente s�o: "+ a + c +b);
		};
		
		if(b < c && c < a){
			System.out.println("Os numeros digitados em ordem crescente s�o: "+ b + c +a);
		};
		
		if(c < a && a < b){
			System.out.println("Os numeros digitados em ordem crescente s�o: "+ c + a +b);
		};
		if(c == a && a == b){
			System.out.println("Os numeros s�o iguais: "+ c + a +b);
		};
	}

}
